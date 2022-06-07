<?php

use Illuminate\Support\Facades\Route;

Route::get('/random',function(){
    return 'randompackage';
});

Route::get('/test/work',function(){

    return "work";

});

Route::get('/another',function(){

    return "another";

});