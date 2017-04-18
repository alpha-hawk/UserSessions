<?php

namespace App\Services\UserSessions;

use Illuminate\Support\ServiceProvider;
use App\Services\UserSessions\Repositories\UserSessionRepositoryInterface;
use App\Services\UserSessions\Repositories\UserSessionRepository;

class UserSessionsServiceProvider extends ServiceProvider
{
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
        $this->app->singleton('user.sessions', function($app){
            return new Sessions($app['App\Services\UserSessions\Repositories\UserSessionRepositoryInterface']);
        });
        $this->app->alias('user.sessions', Sessions::class);
        $this->registerRepositories();
    }
    
    protected function registerRepositories(){
        $this->app->singleton('App\Services\UserSessions\Repositories\UserSessionRepositoryInterface',
                'App\Services\UserSessions\Repositories\UserSessionRepository');
    }
}
