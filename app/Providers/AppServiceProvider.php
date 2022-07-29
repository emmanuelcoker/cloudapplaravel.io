<?php

namespace App\Providers;

use App\Models\Announce;
use App\Models\Country;
use App\Models\GlobalSetting;
use App\Models\Tab;
use App\Models\Tv;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('auth.register', function ($view) {  
            $view->with('countries', Country::all());
        });
        
        View::composer('layouts.templates', function ($view) {
            $view->with('announce', Announce::where('tv_id', session()->get('tv')['id'])->first());
        });

        View::composer('layouts.client.default', function ($view) {
            $data['setting'] = GlobalSetting::first();
            $data['tab'] = Tab::first();
            $data['tvs'] = Tv::all();
            $view->with($data);
        });
    }
}
