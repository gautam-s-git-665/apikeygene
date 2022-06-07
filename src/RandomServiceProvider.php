<?php

namespace RandomPackage\Random;
use Illuminate\Support\ServiceProvider;

class RandomServiceProvider extends ServiceProvider{

    public function boot(){

        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }


    public function register(){

    }
}


