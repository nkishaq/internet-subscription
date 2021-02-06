<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppRepositoryProvider extends ServiceProvider
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
        //
        $this->app->bind(
            'App\Repositories\Subscriptions\ISubscriptions',
            'App\Repositories\Subscriptions\SubscriptionsRepository'
        );

        $this->app->bind(
            'App\Repositories\SubscriptionClass\ISubscriptionClass',
            'App\Repositories\SubscriptionClass\SubscriptionClassRepository'
        );
        $this->app->bind(
            'App\Repositories\SubscriptionRule\ISubscriptionRule',
            'App\Repositories\SubscriptionRule\SubscriptionRuleRepository'
        );

        $this->app->bind(
            'App\Repositories\SubscriptionClassRule\ISubscriptionClassRule',
            'App\Repositories\SubscriptionClassRule\SubscriptionClassRuleRepository'
        );
    }
}
