<?php

namespace App\Providers;

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
        
        $this->app->bind('UsersList', function($app){

            return new \App\LaravelDBUsersList;

        });

        $this->app->bind('UserFinder', function($app){

            return new \App\LaravelDBUserFinder;

        });

        $this->app->bind(\App\Http\Controllers\UsersListController::class, function($app){

            return new \App\Http\Controllers\UsersListController(
                $app->make('UsersList')
            );

        });

        $this->app->bind(\App\Http\Controllers\UserDetailsController::class, function($app){

            return new \App\Http\Controllers\UserDetailsController(
                $app->make('UserFinder')
            );

        });

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
