<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Models\Item;
Auth::routes();
//
//Route::get('/clear-cache', function() {
//    Artisan::call('cache:clear');
//    Artisan::call('view:clear');
//    Artisan::call('config:cache');
//    return '<h1>Cache facade value cleared</h1>';
//});


Route::post('/author/new', 'Admin\\AuthorController@ajaxPost');
Route::post('/author-store', 'Admin\\AuthorController@authorStore');
Route::post('/publisher-store', 'Admin\\PublisherController@publisherStore');
//Route::post('/authorList','Admin\\AuthorController@authorList');
Route::resource('/authors', 'Admin\\AuthorController');

Route::get('/author-json', 'Admin\\AuthorController@getJson')->name('authorJson');
Route::get('/publisher-list', 'Admin\\PublisherController@getPublisher');

Route::post('/download/{id}/{slug}', 'Member\\HomeController@getDownload');
Route::post('item', 'Admin\\ItemController@index'); // item search in backend
Route::post('check-item-standard-value', 'Admin\\ItemController@itemStandardValueCheck'); // item search in backend
Route::post('search', 'FrontEndController@search'); // item search in ajax
Route::post('a2z', 'FrontEndController@a2zDatabase'); // item search in ajax
//Route::post('/a2z', 'FrontEndController@a2zDatabase');
Route::get('/a2z', 'FrontEndController@a2zDatabase');
Route::get('/a2z/{id}', 'FrontEndController@a2zDatabase'); // a2z latter wise search
Route::get('/search', 'FrontEndController@search');
Route::get('/', 'FrontEndController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::group([
    'prefix' => Config("authorization.route-prefix"),
    'middleware' => ['web', 'auth']],

    function() {
        Route::group(['middleware' => Config("authorization.middleware")], function() {
            // user role and permission
            Route::resource('roles', 'Admin\\RolesController');
            Route::resource('users', 'Admin\\UsersController');
            //service resource
            Route::resource('department', 'Admin\\DepartmentController');
            Route::resource('author', 'Admin\\AuthorController');
            Route::resource('publisher', 'Admin\\PublisherController');
            Route::resource('service-category', 'Admin\\ServiceCategoryController');
            Route::resource('category', 'Admin\\CategoryController');
            Route::resource('item-standard-number', 'Admin\\ItemStandardNumberController');
            Route::resource('item', 'Admin\\ItemController');
            Route::resource('sister-concern', 'Admin\\SisterConcernController');
            Route::resource('rating', 'Admin\\RatingController');
            Route::resource('a2z-type', 'Admin\\A2zTypeController');
            Route::resource('a2z-vendor', 'Admin\\A2zVendorController');
            Route::resource('a2z-subject', 'Admin\\A2zSubjectController');
            Route::resource('a2z-database', 'Admin\\A2zDatabaseController');
            Route::resource('issue-tracking', 'Admin\\IssueTrackingController');
            Route::get('audit-logs', 'Admin\\AuditLogController@index');
            Route::resource('semester', 'Admin\\SemesterController');
            Route::resource('supervisor', 'Admin\\SupervisorController');

            //dashboard
            Route::get('dashboard', 'Admin\\DashboardController@index');
            //service individual method
            Route::post('issue-tracking/feedback', 'Admin\\IssueTrackingController@feedback');
            Route::post('issue-tracking/assignTo', 'Admin\\IssueTrackingController@assignTo');
            Route::patch('issue-tracking/rating/{id}', 'Admin\\IssueTrackingController@rating');
            //user frontend access area
            //reportsdownload-statistics
            Route::get('/report', 'Admin\\ReportController@index');
            Route::get('/report/upload-statistics', 'Admin\\ReportController@uploadStatistics');
            Route::post('/report/upload-statistics', 'Admin\\ReportController@uploadStatistics');
            Route::get('/report/download-statistics', 'Admin\\ReportController@downloadStatistics');
            Route::post('/report/download-statistics', 'Admin\\ReportController@downloadStatistics');

            Route::get('/report/download-history', 'Admin\\ReportController@downloadHistory');
        });

        Route::get('/', function () {
            return view('home');

        });
    });


Route::post('admin/users/selectedUserService', 'Admin\\UsersController@selectedUserService');
Route::resource('test', 'Admin\\TestController');
Route::get('register/verify/{token}', 'Auth\RegisterController@verify');
Route::get('register/verifyActive/{token}', 'Auth\RegisterController@verifyActive');


//FrontEnd Users with Login

Route::get('/service/{id}', 'FrontEndController@serviceItem');

Route::get('/category/{id}', 'FrontEndController@departmentItem');
Route::post('/dept-search', 'FrontEndController@searchDepartment');

Route::get('/year/{id}', 'FrontEndController@yearItem');
Route::get('/author/{id}', 'FrontEndController@authorItem');



Route::get('/feedback/', 'Member\\HomeController@singleIndex');
Route::get('/feedback/new', 'FrontEndController@feedbackNew');
Route::get('/profile', 'Member\\HomeController@profile')->name('admin.profile');
Route::post('profile/avatarUpdate', 'Member\\HomeController@avatarUpdate')->name('dashboard.user.avatarUpdate');


//download file
//download file
Route::get('/{segment1}/{segment2}/{title}', 'FrontEndController@getDetails');

//FrontEnd Users without login


//all single pages in here dynamic way on one method using switch
Route::get('/{id}', 'FrontEndController@index');

/*
Route::get('/departments', 'FrontEndController@departments');
Route::get('/authors', 'FrontEndController@authors');
Route::get('/services', 'FrontEndController@services');
*/
