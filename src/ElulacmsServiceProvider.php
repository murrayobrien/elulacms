<?php

namespace Murrayobrien\Elulacms; 

use Illuminate\Support\ServiceProvider; 

class ElulacmsServiceProvider extends ServiceProvider{
    
    public function boot(){
        //Routes
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        //Views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'elulacms');
        //Public
        $this->publishes([
            __DIR__.'/../public' => public_path('vendor/elulacms'),
        ], 'public');
    }

    public function register(){
    }
}