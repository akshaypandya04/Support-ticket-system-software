<?php

use Illuminate\Support\Facades\Route;

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



 Route::match(['get', 'post'], '/admin', 'AdminController@login');


Route::group(['middleware' => ['AdminLogin']], function () {
    Route::match(['get', 'post'], '/admin/dashboard', 'AdminController@dashboard');

//Admin Update Profile Route
    Route::match(['get', 'post'], '/admin/profileUpdate', 'AdminController@profileUpdate');

//Admin Password Change Route
    Route::get('/admin/change-password', 'AdminController@settings');
    Route::get('/admin/check-pwd', 'AdminController@chkPassword');
    Route::match(['get', 'post'], '/admin/update-pwd', 'AdminController@updatePassword');


    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
    
    Route::get('/update-status/{id}', 'Admin\HospitalController@update_status')->name('update.status');

    
    Route::resource('pages', Admin\PageController::class);

   Route::resource('subjects', Admin\SubjectController::class);
   Route::resource('ticket', Admin\TicketController::class);

   Route::post('/ticket-reply','Admin\TicketController@ticket_reply')->name('ticket.reply');

    Route::resource('category', Admin\CategoryController::class);
    
    Route::get('/category-delete/{id}', 'Admin\CategoryController@destroy');

   Route::resource('inventory', Admin\InventoryController::class);

   Route::get('/admin/inventory-delete/{id}', 'Admin\InventoryController@destroy')->name('inventory.delete');

   Route::get('/admin/subjects-delete/{id}', 'Admin\SubjectController@destroy');
   Route::get('/admin/ticket-delete/{id}', 'Admin\TicketController@destroy');

});

   Route::get('/admin/logout', 'AdminController@logout')->name('admin.logout');


////////////////End Admin Route//////////////////////


Route::get('/', function () {
    return view('frontend.users.user-login');
});


  // Login Route...
    Route::match(['get', 'post'], '/login', 'FrontendController@login');


 // Login Route...
    Route::match(['get', 'post'], '/register', 'FrontendController@register')->name('register');



//Forgot Password
Route::match(['get', 'post'], '/forgot-password', 'UserController@forgot_password');


//Route for Members middleware after Login
    Route::group(['middleware' => ['UserLogin'] , 'prefix' => 'user'], function () {


//Route for Dashboard
  Route::match(['get', 'post'], '/dashboard', 'UserController@dashboard');

 Route::get('/profile','UserController@profile')->name('user.profile');

 Route::post('/profile','UserController@profile_update')->name('user.profile.update');


 Route::get('/change-password','UserController@change_password')->name('user.change.password');

 Route::post('/change-password','UserController@password_update')->name('user.update.password');


 Route::get('/add-ticket','UserController@add_ticket')->name('user.add.ticket');

 Route::post('/add-ticket','UserController@ticket_store')->name('user.store.ticket');

 Route::get('/ticket-list','UserController@list_ticket')->name('user.list.ticket');


 Route::get('edit-ticket/{id}','UserController@edit_ticket')->name('user.ticket.edit');

 Route::put('update-ticket/{id}','UserController@ticket_update')->name('user.update.ticket');

 Route::get('ticket-show/{id}','UserController@show_ticket')->name('user.ticket.show');


 Route::post('/ticket-response','UserController@user_ticket_reply')->name('user.ticket.reply');



});


 Route::get('/user/logout', 'UserController@logout')->name('user.logout');
