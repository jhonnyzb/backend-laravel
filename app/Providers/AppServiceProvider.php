<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

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
        Validator::extend('existe', function ($atributo, $valor, $parámetros, $validador) {
            $tabla = $parámetros[0];
            $columna = $parámetros[1];
            $query = DB::table($tabla)->where($columna, $valor);
            return !$query->exists();
        });

        Validator::extend('max_capacity', function ($attribute, $value, $parameters, $validator) {
            $hotelId = $parameters[0];
            $rooms_permitted = $parameters[1];

            // Realiza una consulta a la base de datos para obtener la capacidad máxima
            $busy = DB::table('hotels_typeAccommodation')->where('hotel_id', $hotelId)->get();
            $busyTotal = count($busy) +  $value;
            $valid =  $busyTotal <= $rooms_permitted;
            return $valid;
        });

    }
}
