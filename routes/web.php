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

Route::get('/', function () {
    return view('welcome');
});
// Frontend Pages
Route::get('/about', 'PageController@about');
Route::get('/service', 'PageController@service');
Route::get('/destination', 'PageController@destination');
Route::get('/coach', 'PageController@coach');
Route::get('/award', 'PageController@award');
Route::get('/gallery', 'PageController@gallery');
Route::get('/client', 'PageController@client');
Route::get('/contact', 'PageController@contact');
Route::get('/booking', 'PageController@booking');
Route::get('/booking/{id}', 'PageController@bookingForm');
Route::post('/booking/{id}', 'PageController@store')->name('booking.store');
Route::post('/datewise-search', 'PageController@datewiseSearch')->name('datewise.search');
Route::post('/coach-booking-validation', 'PageController@coachbookingvalidation')->name('coachbookingvalidation.fetch');
// end Frontend Pages
Auth::routes();

Route::prefix('admin')->group(function (){
    Route::get('/login', 'Auth\AdminLoginController@showLoginform')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
});

Route::group(['middleware' => ['auth:admin']], function() {
    Route::prefix('admin')->group(function() {
        Route::get('/', 'AdminController@index')->name('admin.dashbord');
        // profile
        Route::get('/profile', 'AdminController@create')->name('admin.profile');
        Route::post('/admin-profile-update', 'AdminController@adminProfileUpdate')->name('admin.profile.update');
        // slider
        Route::resource('/slider','SliderController');
        Route::get('/slider/destroy/{id}','SliderController@destroy');
        // rent
        Route::resource('/rent','RentController');
        Route::get('/rent/destroy/{id}','RentController@destroy');
        Route::post('/update-rent', 'RentController@update')->name('admin.update.rent');
        // welcome
        Route::resource('/welcomemessage','WelcomemessageController');
        // about
        Route::get('/about','AboutController@create')->name('about.create');
        Route::post('/about/store','AboutController@store')->name('about.store'); 
        // our profile
        Route::get('/ourProfile','OurProfileController@create')->name('ourProfile.create');
        Route::post('/ourProfile/store','OurProfileController@store')->name('profile.store'); 
        // Service Category
        Route::resource('/serviceCategory','BrandController');
        Route::post('/update-service-category', 'BrandController@update')->name('admin.update.brand');
        Route::get('/service-category/destroy/{id}','BrandController@destory');
        // service
        Route::get('/service','ServiceController@create')->name('service.create');
        Route::post('/service/store','ServiceController@store')->name('service.store'); 
        // booking
        Route::get('/booking','BookingController@booking')->name('booking.create');
        Route::get('/booking/{id}','BookingController@showBooking')->name('booking.show');
        Route::get('/bookingcoach/published/{id}','BookingController@bookingcoachPub')->name('bookingcoach.published');
        Route::get('/bookingcoach/unpublished/{id}','BookingController@bookingcoachUnpub')->name('bookingcoach.unpublished');
        Route::get('/bookingcoach/destroy/{id}','BookingController@destroy')->name('bookingcoach.destroy');

        // Route::post('/service/store','ServiceController@store')->name('service.store');
         // Destination
        Route::resource('/destination','DestinationController');
        Route::post('/update-destination', 'DestinationController@update')->name('admin.update.destination');
        Route::get('/destination/destroy/{id}','DestinationController@destroy');
        // coach
        Route::resource('/coach','CoachController');
        Route::post('/update-coach', 'CoachController@update')->name('admin.update.coach');
        Route::get('/coach/destroy/{id}','CoachController@destroy');
        // award
        Route::resource('/award','AwardController');
        Route::post('/update-award', 'AwardController@update')->name('admin.update.award');
        Route::get('/award/destroy/{id}','AwardController@destroy');
        // gallery
        Route::resource('/gallery','GalleryController');
        Route::post('/update-gallery', 'GalleryController@update')->name('admin.update.gallery');
        Route::get('/gallery/destroy/{id}','GalleryController@destroy');
        // client category
        Route::resource('/clientCategory','ClientcategoryController');
        Route::post('/update-clientCategory', 'ClientcategoryController@update')->name('admin.update.clientCategory');
        Route::get('/clientCategory/destroy/{id}','ClientcategoryController@destroy');
        // client
        Route::resource('/client','ClientController');
        Route::post('/update-client', 'ClientController@update')->name('admin.update.client');
        Route::get('/client/destroy/{id}','ClientController@destroy');
         // General Setting
        Route::resource('generalSetting','GeneralsettingController');
        // client slider
        Route::resource('clientSlider','ClientsliderController');
        Route::post('/update-clientSlider', 'ClientsliderController@update')->name('admin.update.clientSlider');
        Route::get('/clientSlider/destroy/{id}','ClientsliderController@destroy');
    });
});

Route::group(['middleware' => ['auth:web']], function() {
    Route::prefix('home')->group(function() 
    {
        Route::get('/', 'HomeController@index')->name('home');
       
    });
});
//clear cache
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('config:clear');
    // $exitCode = Artisan::call('route:cache');
    $exitCode = Artisan::call('route:clear');
    // $exitCode = Artisan::call('optimize');
    $exitCode = Artisan::call('view:clear');
    return '<h1>Clear Config cleared</h1>';
});

