<?php

namespace App\Providers;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        Response::macro('success', function ($data,$code) {
            return Response::make([
                "status" => "OK",
                "info" => [
                    "name" => "Fraccionamientos Colima"
                ],
                "data" => $data,
                "code" => $code,

            ]);
        });

        Response::macro('failure', function ($data,$code) {
            return Response::make([
                "status" => "ERROR",
                "error" => $data,
                "code" => $code,
                
            ]);
        });
    }
}
