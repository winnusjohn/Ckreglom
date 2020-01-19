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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');<?php

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

// User Routes

// use App\Http\Controllers\User\BlogController;
// use App\Model\user\tag;
// use App\Model\user\category;
// use Symfony\Component\Routing\Annotation\Route;

use Illuminate\Support\Facades\Auth;
// Laravel 5.1.17 and above
Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');

Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');

Route::group(['namespace' => 'User'], function () {
    Route::get('/', 'HomeController@index');

    Route::get('about', function () {
        return view('user.about');
    });

    Route::get('give', function () {
        return view('user.give');
    });

    // Route::get('house_network', function () {
    //     return view('user.house_network');
    // });
    // Route::get('/', 'HomeController@testimonial');

    Route::get('blog', 'BlogController@index');

    Route::get('yearly', 'YearlyController@index');

    Route::get('zone', 'ZoneController@index');

    Route::get('contact_us', 'ContactUSController@contactUS');

    Route::post('contact_us', ['uses' => 'ContactUSController@contactSaveData', 'as' => 'contactus.store',]);

    Route::get('post/{post}', 'PostController@post')->name('post');

    Route::get('post/tag/{tag}', 'BlogController@tag')->name('tag');

    Route::get('post/category/{category}', 'BlogController@category')->name('category');
});

// Route::get('admin/testimonial', function () {
//     return view('admin.testimonial.testimonial');
// });


// Admin Routes
Route::group(['namespace' => 'Admin'], function () {
    Route::get('admin/home', 'HomeController@home')->name('admin.home');

    // USers Route
    Route::resource('admin/user', 'UserController');

    // Roles Route
    Route::resource('admin/role', 'RoleController');


    // Post Route
    Route::resource('admin/post', 'PostController');

    // Tag Route
    Route::resource('admin/tag', 'TagController');

    // Category Route
    Route::resource('admin/category', 'CategoryController');

    // Testimonial Route
    Route::resource('admin/testimonial', 'TestimonialController');

    // Zonal Route
    Route::resource('admin/zone', 'Zonecontroller');

    // Zonal Route
    Route::resource('admin/yearly', 'YearlyController');

    //Admin Auth Routes
    Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('admin-login', 'Auth\LoginController@login');
});


// Route::get('admin/home', function(){
//     return view('admin.home');
// });

// Route::get('admin/post', function(){

// });

// Route::get('admin/tag', function(){

// });

// Route::get('admin/category', function(){
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
