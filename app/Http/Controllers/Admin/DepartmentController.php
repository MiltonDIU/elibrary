<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DepartmentRequest;
use App\Models\Department;
use Session;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $departments = Department::all();
        return view('admin.department.index', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.department.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(DepartmentRequest $request)
    {
        
        $requestData = $request->all();
        
        Department::create($requestData);
        $notification = array(
            'message' => "Department  successfully created!",
            'alert-type' => 'success'
        );
        Session::flash('notification',$notification);

        return redirect('admin/department');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $item = Department::findOrFail($id);

        return view('admin.department.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $department = Department::findOrFail($id);

        return view('admin.department.edit', compact('department'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(DepartmentRequest $request, $id)
    {
        
        $requestData = $request->all();
        
        $department = Department::findOrFail($id);
        $department->update($requestData);
        $notification = array(
            'message' => "Department  successfully updated!",
            'alert-type' => 'success'
        );
        Session::flash('notification',$notification);
        return redirect('admin/department');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Department::destroy($id);
        $notification = array(
            'message' => "Department  successfully deleted!",
            'alert-type' => 'success'
        );
        Session::flash('notification',$notification);
        return redirect('admin/department');
    }
}
