<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'ResumeController@index');
Route::post('message', function (\Illuminate\Http\Request $request) {
    $attemptToWriteObject = [
        "hirename" => $request->hirename,
        "hirephone" => $request->hirephone,
        "hireemail" => $request->hireemail,
        "hiremessage" => $request->hiremessage,
        "hiremessage" => $request->hiremessage,
        "hiremessage" => $request->hiremessage,
        "deleted" => 0,
    ];

    $array = json_decode(file_get_contents('settings/message.json'), true);
    $array[array_key_last($array) + 1] = $attemptToWriteObject;
    file_put_contents('settings/message.json', json_encode($array));
    return back()->with('success', message('save'));
});
Route::match(['get', 'post'], 'login', 'LoginController@login')->name('login');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('backend\pages\profile\profile');
    });
    // Profile
    Route::controller('ServiceController')->prefix('services')->name('service.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('list', 'list')->name('list');
        Route::post('store', 'store')->name('store');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::post('update', 'update')->name('update');
        Route::post('{service}/delete', 'destroy')->name('destroy');
    });
    // Service
    Route::controller('ServiceController')->prefix('services')->name('service.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('list', 'list')->name('list');
        Route::post('store', 'store')->name('store');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::post('update', 'update')->name('update');
        Route::post('{service}/delete', 'destroy')->name('destroy');
    });
    // Portfolio
    Route::controller('PortfolioController')->prefix('portfolios')->name('portfolio.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('list', 'list')->name('list');
        Route::post('store', 'store')->name('store');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::post('update', 'update')->name('update');
        Route::post('{portfolio}/delete', 'destroy')->name('destroy');
    });
    // Skill
    Route::controller('SkillController')->prefix('skills')->name('skill.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('list', 'list')->name('list');
        Route::post('store', 'store')->name('store');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::post('update', 'update')->name('update');
        Route::post('{skill}/delete', 'destroy')->name('destroy');
    });
    // Experience
    Route::controller('ExperienceController')->prefix('experiences')->name('experience.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('list', 'list')->name('list');
        Route::post('store', 'store')->name('store');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::post('update', 'update')->name('update');
        Route::post('{experience}/delete', 'destroy')->name('destroy');
    });
    // Education
    Route::controller('EducationController')->prefix('educations')->name('education.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('list', 'list')->name('list');
        Route::post('store', 'store')->name('store');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::post('update', 'update')->name('update');
        Route::post('{education}/delete', 'destroy')->name('destroy');
    });
    // Pricing
    Route::controller('PricingController')->prefix('pricings')->name('pricing.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('list', 'list')->name('list');
        Route::post('store', 'store')->name('store');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::post('update', 'update')->name('update');
        Route::post('{pricing}/delete', 'destroy')->name('destroy');
    });
    // Testimonial
    Route::controller('TestimonialController')->prefix('testimonials')->name('testimonial.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('list', 'list')->name('list');
        Route::post('store', 'store')->name('store');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::post('update', 'update')->name('update');
        Route::post('{testimonial}/delete', 'destroy')->name('destroy');
    });
    // Auth
    Route::post('update-profile', 'ResumeController@updateProfile')->name('update_profile');
    Route::post('update-image', 'ResumeController@updateImage')->name('update_image');
    Route::post('logout', 'LoginController@logout')->name('logout');
    Route::post('update-setting', 'ResumeController@updateSetting')->name('update_setting');
    // Hire Message
    Route::controller('ResumeController')->prefix('messages')->name('message.')->group(function () {
        Route::get('/', function () {
            return view('backend.pages.hireinfo.index', ['messages' => json_decode(file_get_contents('settings/message.json'), true)]);
            // dd(\File::json('settings/message.json'));
        });

        Route::post('{message}/delete', 'destroy')->name('destroy');
    });
});


Route::get('go', 'ResumeController@zip');
