<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\ServiceCategory;
use App\OrdinaryTrait;
use App\User;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    use OrdinaryTrait;

    public function index()
    {
        $users = User::with('role')->get();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(User $user)
    {
        // $rolse_id = [6,7,5];

        //$selectedService = DB::table('role_service')->whereIn('role_id',$rolse_id)->pluck('service_id')->toArray();

        //dd($selectedService);
        $roles = Role::all();
        $serviceCategory = ServiceCategory::all();
        $services = ServiceCategory::with('service')->get();

        $selectedService = $user->service()->pluck('service_id')->toArray();
        $selected_roles = [];
        return view('admin.users.create', compact('roles', 'serviceCategory', 'services', 'selectedService', 'selected_roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */


    public function store(Request $request)
    {
        $role_id = $request->input('role_id');
        //$serviceRole = DB::table('role_service')->where('role_id', $role_id)->pluck('service_id')->toArray();
        $serviceRole = $request->input('services');
        $requestData = $request->only('displayName', 'email','download','status');
        $password = $request->input('password');
        $requestData['password'] = Hash::make($password);
        $user = User::create($requestData);
        $login_id = Auth::id();
        $user->role()->attach($role_id);
        foreach ($serviceRole as $sr) {
            $this->serviceUser($user, $role_id, $sr, $login_id);
        }
        $notification = array(
            'message' => "New User  successfully added!",
            'alert-type' => 'success'
        );
        $this->crateDownloadQuota($user);//create download limits
        Session::flash('notification', $notification);
        return redirect('admin/users');
    }


    public function serviceUser($user, $role_id, $sr, $login_id)
    {
        $roles = DB::table('role_service')->where('service_id', $sr)->pluck('role_id')->toArray();
        if (empty($role_id)) {
            $result = [];
        } else {
            $result = array_intersect($role_id, $roles);
        }

        if (empty($result)) {
            $isRole = 0;
            $roleCount = 0;
        } else {
            $isRole = 1;
            $roleCount = sizeof($result);
        }
        $user->service()->attach($sr, ['login_id' => $login_id, 'isRoleService' => $isRole, 'roleCount' => $roleCount]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $item = User::findOrFail($id);

        return view('admin.users.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit(User $user)
    {
        $roles = Role::all();
        $serviceCategory = ServiceCategory::all();
        $services = ServiceCategory::with('service')->get();
        $selectedService = $user->service()->pluck('service_id')->toArray();
        $selected_roles = $user->role()->pluck('role_id')->toArray();
        //dd($selected_roles);
        return view('admin.users.edit', compact('roles', 'user', 'serviceCategory', 'services', 'selectedService', 'selected_roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {

        $requestData = $request->all();
        $user = User::findOrFail($id);
        $password = $request->input('password');
        $requestData['password'] = Hash::make($password);
        $user->update($requestData);
        Session::flash('flash_message', 'User updated!');
        $services = $request->input('services');

        $role_id = $request->input('role_id');
        $user->role()->sync($role_id);
        $login_id = Auth::id();
        /*
                foreach ($services as $sr) {
                    $data = $this->serviceUserUpdate($user, $role_id, $sr, $login_id);
                }
        */
        $syncData = array();
        $id = 1;
        if (!empty($services)) {
            foreach ($services as $sr) {
                $data = $this->serviceUserUpdate($role_id, $sr, $login_id);
                $syncData[$id] = array('service_id' => $data['service_id'], 'login_id' => $data['login'], 'isRoleService' => $data['isRoleService'], 'roleCount' => $data['roleCount']);
                $id++;
            }
        }
        $user->service()->sync($syncData);
        $notification = array(
            'message' => "User  successfully updated!",
            'alert-type' => 'success'
        );
        Session::flash('notification', $notification);

        return redirect('admin/users');
    }

    public function serviceUserUpdate($role_id, $sr, $login_id)
    {
        $roles = DB::table('role_service')->where('service_id', $sr)->pluck('role_id')->toArray();
        if (empty($role_id)) {
            $result = [];
        } else {
            $result = array_intersect($role_id, $roles);
        }

        if (empty($result)) {
            $isRole = 0;
            $roleCount = 0;
        } else {
            $isRole = 1;
            $roleCount = sizeof($result);
        }
        $data['login'] = $login_id;
        $data['isRoleService'] = $isRole;
        $data['roleCount'] = $roleCount;
        $data['service_id'] = $sr;
        $data['created_at'] = Carbon::now()->toDateTimeString();
        $data['updated_at'] = Carbon::now()->toDateTimeString();
        return $data;
        //$user->service()->sync($sr,['login_id' => $login_id,'isRoleService'=>$isRole,'roleCount'=>$roleCount]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        User::destroy($id);

        return redirect('admin/users')->with('flash_message', 'User deleted!');
    }

    public function selectedUserService(Request $request)
    {
        /* $arr =  array(4,6);
         echo "<pre>";
         print_r([6,7]);
         print_r($arr);
         dd([6,7]);

 */
        if ($request->ajax()) {
            $role_id = array();
            //$role_id = $request->input('role_id');


            $role_id = explode(",", $request->input('role_id'));

            $selectedService = [];
            //$selectedService = Role::findOrFail($role_id)->service()->pluck('service_id')->toArray();
            $selectedService = DB::table('role_service')->whereIn('role_id', $role_id)->pluck('service_id')->toArray();
            return response()->json(compact('selectedService'), 200);
        }
        return response()->json([
            'responseText' => 'Not a ajax request'
        ], 500);

    }
}
