<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
Use App\Models\Setting;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Schema;

class SettingServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if (!\App::runningInConsole()&&count(Schema::getColumnListing('settings'))){
            $settings = Setting::all();
            foreach ($settings as $key => $setting){
                Config::set('settings.'.$setting->key,$setting->value);
            }
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('settings', function($app){
            return new Setting();
        });
        $loader = \illuminate\Foundation\AliasLoader::getInstance();
        $loader->alias('Setting', Setting::class);
    }
}
