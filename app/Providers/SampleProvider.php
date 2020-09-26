<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SampleProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('test', function(){
    return new \App\test("something is happening right now");
});
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
