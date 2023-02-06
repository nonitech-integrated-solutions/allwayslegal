<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('logged-in', function ($user) {
            return $user;
        });

        Gate::define('is-admin', function ($user) {
            return $user->hasAnyRole('admin');
        });

        Gate::define('is-lawyer', function ($user) {
           return $user->hasAnyRoles(['admin', 'lawyer']);
        });


        Gate::define('is-client', function ($user) {
           return $user->hasAnyRoles(['admin', 'client']);
        });

        

    }
}
