<?php

namespace App\Support\Facades;

use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\Route;

class Visa extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'visa';
    }

    /**
     * Register the typical authentication routes for an application.
     *
     * @return void
     */
    public static function routes()
    {
      Route::get('/login', 'Auth\VisaController@login')->name('login');
      Route::get('/register', 'Auth\VisaController@register')->name('register');
      Route::post('/logout', 'Auth\VisaController@logout')->name('logout');
    }
}
