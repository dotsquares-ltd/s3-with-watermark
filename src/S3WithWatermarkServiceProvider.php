<?php

namespace Dotsquares\S3WithWatermark;

use Illuminate\Support\ServiceProvider;

class S3WithWatermarkServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('dotquares\S3WithWatermark\S3WithWatermarkController');
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
