<?php

namespace App\Providers;

// use Laravel\Passport\Passport;
// use Carbon\Carbon;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::define('developer', function ($user) {
            if (in_array($user->username, ['faridsh'])) {
                return true;
            } else {
                return false;
            }
        });
        // Passport::routes();
        // \App::environment('production') || 
        // ->middleware('can:developer')
        // @can('developer')      @endcan
        // if (\Gate::allows('developer')) {
        // }
    }
}
