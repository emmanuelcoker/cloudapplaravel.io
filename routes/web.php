<?php

use App\Models\GlobalSetting;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;



Route::get('/test', function () {
    try {
       return Rss::output_rss_feed('https://www.aljazeera.com/xml/rss/all.xml', 10);
    } catch (\Throwable $th) {
        throw $th;
    }
});




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
    $setting = GlobalSetting::first()['is_registered'] ?? null;
    if ($setting) {
        return redirect(route('login'));
    } else {
        return redirect(route('register'));
    }
});


Route::get('/clearCache', function () {
    Artisan::call('optimize:clear');
    return 'ok';
});


Auth::routes();


//set up a new company on registration
Route::post('/move_to_setup', [App\Http\Controllers\SetupController::class, 'move_to_setup'])->name('move_to_setup');
Route::get('/app-setup', [App\Http\Controllers\SetupController::class, 'index'])->name('appSetup');
 

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/fx', [App\Http\Controllers\Client\IndexController::class, 'template_sample'])->name('templateSample');
Route::get('/publish', [App\Http\Controllers\Client\IndexController::class, 'template_sample'])->name('publish');
Route::get('/publish-to-api', [App\Http\Controllers\Client\IndexController::class, 'publish_to_api'])->name('publish_to_api');
Route::get('/publish_to_zip', [App\Http\Controllers\Client\IndexController::class, 'publish_to_zip'])->name('publish_to_zip');
Route::post('/publish-to-api', [App\Http\Controllers\Client\IndexController::class, 'publishToApi'])->name('publishToApi');
Route::get('/clearPreview', [App\Http\Controllers\Client\IndexController::class, 'clearPreview'])->name('clearPreview');
Route::get('/changeTv/{id}', [App\Http\Controllers\Client\IndexController::class, 'changeTv'])->name('changeTv');





/* 
|--------------------------------------------------------------------------
| super admin
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => ['auth', 'superadmin'], 'prefix' => 'Super-Admin'], function () {
    //faq managemnt
    Route::post('/faq/sote', [App\Http\Controllers\GlobalController::class, 'store_faq'])->name('settings.store_faq');
    Route::post('/faq/update', [App\Http\Controllers\GlobalController::class, 'update_faq'])->name('settings.update_faq');

    //tutorial managemnt
    Route::post('/tutorial/sote', [App\Http\Controllers\GlobalController::class, 'store_tutorial'])->name('settings.store_tutorial');
    Route::post('/tutorial/update', [App\Http\Controllers\GlobalController::class, 'update_tutorial'])->name('settings.update_tutorial');
    Route::get('/tutorial/delete/{id}', [App\Http\Controllers\GlobalController::class, 'delete_tutorial'])->name('settings.delete_tutorial');

    Route::get('/global-settings', [App\Http\Controllers\GlobalController::class, 'index'])->name('settings.index');
    Route::post('/global-settings', [App\Http\Controllers\GlobalController::class, 'store'])->name('settings.store');
    Route::post('/training/switch', [App\Http\Controllers\GlobalController::class, 'trainingBtn'])->name('trainingBtn');
    Route::post('/page-visibility/switch', [App\Http\Controllers\GlobalController::class, 'pageVisibilityControl'])->name('pageVisibilityControl');
    Route::post('/zones/switch', [App\Http\Controllers\GlobalController::class, 'zoneSwitch'])->name('zoneSwitch');

    //plans
    Route::get('/plans', [App\Http\Controllers\GlobalController::class, 'plans'])->name('settings.plan');
    Route::post('/plans', [App\Http\Controllers\GlobalController::class, 'plan_store'])->name('plan.store');
    Route::get('/plans/delete/{id}', [App\Http\Controllers\GlobalController::class, 'plan_delete'])->name('plan.delete');
    Route::post('/plans/update', [App\Http\Controllers\GlobalController::class, 'plan_update'])->name('plan.update');

    //logs
    Route::get('/logs/login', [App\Http\Controllers\GlobalController::class, 'login_log'])->name('logs.login'); //login logs

    //permissions
    Route::get('/permission', [App\Http\Controllers\HomeController::class, 'permission'])->name('permission');
    Route::post('/permission/store', [App\Http\Controllers\HomeController::class, 'permission_store'])->name('permission.store');
   
    
});






/* 
|--------------------------------------------------------------------------
| Client
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => ['auth', 'client'], 'prefix' => 'client'], function () {
    Route::resource('profile', App\Http\Controllers\Client\SettingsController::class);

    //media
    Route::get('/media', [App\Http\Controllers\Client\MediaController::class, 'index'])->name('media.index');
    Route::post('/media', [App\Http\Controllers\Client\MediaController::class, 'store'])->name('media.store');
    Route::post('/scheduleMedia', [App\Http\Controllers\Client\MediaController::class, 'schedule'])->name('media.schedule');
    Route::post('/media/switch', [App\Http\Controllers\Client\MediaController::class, 'switch'])->name('media.switch');
    Route::post('/re-arrange-playlist', [App\Http\Controllers\Client\MediaController::class, 'positioning'])->name('positioning');


    //banner
    Route::get('/banner', [App\Http\Controllers\Client\BannerController::class, 'index'])->name('banner.index');
    Route::post('/banner', [App\Http\Controllers\Client\BannerController::class, 'store'])->name('banner.store');
    Route::post('/banner/switch', [App\Http\Controllers\Client\BannerController::class, 'switch'])->name('banner.switch');
    Route::post('/banner/positioning', [App\Http\Controllers\Client\BannerController::class, 'positioning'])->name('banner.positioning');

    //announcement
    Route::get('/announcement', [App\Http\Controllers\Client\AnnouncementController::class, 'index'])->name('announcement.index');
    Route::post('/announcement', [App\Http\Controllers\Client\AnnouncementController::class, 'store'])->name('announcement.store');
    Route::post('/announcement/change-template', [App\Http\Controllers\Client\AnnouncementController::class, 'update'])->name('announcement.update');

    //training
    Route::get('/training', [App\Http\Controllers\Client\TrainingController::class, 'index'])->name('training.index');
    Route::post('/training/image/store', [App\Http\Controllers\Client\TrainingController::class, 'store'])->name('training.store');
    Route::post('/training/image/update', [App\Http\Controllers\Client\TrainingController::class, 'update'])->name('training.update');
    Route::post('/training/switch', [App\Http\Controllers\Client\TrainingController::class, 'switch'])->name('training.switch');
    Route::post('/re-arrange-playlist/morning', [App\Http\Controllers\Client\TrainingController::class, 'morning_positioning'])->name('morning_positioning');
    Route::post('/re-arrange-playlist/afternoon', [App\Http\Controllers\Client\TrainingController::class, 'afternoon_positioning'])->name('afternoon_positioning');
    Route::post('/re-arrange-playlist/evening', [App\Http\Controllers\Client\TrainingController::class, 'evening_positioning'])->name('evening_positioning');

    //rates
    Route::get('/rates', [App\Http\Controllers\Client\RatesController::class, 'index'])->name('rates.index');
    Route::post('/rates/store', [App\Http\Controllers\Client\RatesController::class, 'store'])->name('rates.store'); //for excel file upload
    Route::post('/pta/store', [App\Http\Controllers\Client\RatesController::class, 'pta_store'])->name('pta.store'); //for excel file upload
    Route::post('/interestRate1/store', [App\Http\Controllers\Client\RatesController::class, 'interestRate1'])->name('interestRate1.store'); //for excel file upload
    Route::post('/tab names', [App\Http\Controllers\Client\RatesController::class, 'rate_tab_store'])->name('rate_tab_store'); //edit tab names 

    //news
    Route::get('/news', [App\Http\Controllers\Client\NewsController::class, 'index'])->name('news.index');
    Route::post('/rss', [App\Http\Controllers\Client\NewsController::class, 'rss'])->name('rss.store');
    Route::post('/switch', [App\Http\Controllers\Client\NewsController::class, 'switch']);
    Route::post('/re-arrange-news', [App\Http\Controllers\Client\NewsController::class, 'arrange_news'])->name('arrange_news');

    //calender
    Route::get('/calender', [App\Http\Controllers\Client\CalenderController::class, 'index'])->name('calender.index');

    //locations
    Route::get('/locations/all', [App\Http\Controllers\Client\LocationController::class, 'index'])->name('location.index');

    //template
    Route::get('/template', [App\Http\Controllers\Client\BrandingController::class, 'choose_template'])->name('template.index');
    Route::post('/template/store', [App\Http\Controllers\Client\BrandingController::class, 'store_template'])->name('template.store');

    //clock
    Route::get('/clock', [App\Http\Controllers\Client\ClockController::class, 'index'])->name('clock.index');
    Route::post('/store_logo', [App\Http\Controllers\Client\ClockController::class, 'store_logo'])->name('clock.logo');
    Route::post('/store_color', [App\Http\Controllers\Client\ClockController::class, 'store_color'])->name('clock.color');
    Route::post('/logo-switch', [App\Http\Controllers\Client\ClockController::class, 'logo_switch'])->name('clock.switch');

    //support
    Route::get('/support', [App\Http\Controllers\HomeController::class, 'support'])->name('support.index');
    Route::post('/support/store', [App\Http\Controllers\HomeController::class, 'support_store'])->name('support.store');


    //tutorials
    Route::get('/tutorial', [App\Http\Controllers\GlobalController::class, 'tutorial'])->name('settings.tutorial');

    //faqs
    Route::get('/faq', [App\Http\Controllers\GlobalController::class, 'faq'])->name('settings.faq');

    //planss
    Route::get('/plans', [App\Http\Controllers\HomeController::class, 'plans'])->name('plans');

    //activitys
    Route::get('/activities', [App\Http\Controllers\HomeController::class, 'activities'])->name('activities');
    
    

    //logo
    Route::get('/logo', [App\Http\Controllers\Client\LogoController::class, 'index'])->name('logo.index');
    Route::post('/logos', [App\Http\Controllers\Client\LogoController::class, 'store'])->name('logos.store');
    Route::post('/logos/update', [App\Http\Controllers\Client\LogoController::class, 'update'])->name('logos.update');
    Route::post('/logo/switch', [App\Http\Controllers\Client\LogoController::class, 'switch'])->name('logo.switch');
    Route::post('/logo/positioning', [App\Http\Controllers\Client\LogoController::class, 'positioning'])->name('logo.positioning');

    //company branding
    Route::get('/branding', [App\Http\Controllers\Client\BrandingController::class, 'branding'])->name('branding.index');
    Route::post('/dashboard/logo/store', [App\Http\Controllers\Client\BrandingController::class, 'logo_store'])->name('logo.store');
    Route::post('/color/store', [App\Http\Controllers\Client\BrandingController::class, 'color_store'])->name('color.store');
    //  Route::post('/clockImage/store', [App\Http\Controllers\Client\BrandingController::class, 'clockImage_store'])->name('clockImage.store');

    //userss
    Route::resource('/users', App\Http\Controllers\Client\UserController::class);


    // dark mode
    Route::post('/darkmode', [App\Http\Controllers\HomeController::class, 'darkmode'])->name('darkmode');


});
