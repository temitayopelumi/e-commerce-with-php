<?php

namespace App\Providers;

use App\Contracts\CategoryContract;
use App\Repositories\CategoryRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    protected $repositories =[
        CategoryContract::class => CategoryRepository::class,
    ];
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        foreach ($this->repositories as $interface => $implementation){
            $this->app->bind($interface,  $implementation);
        }
    }
}
