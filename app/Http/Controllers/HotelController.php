<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    //
    public function getHotels()
    {
        $hotels = Hotel::all();
        return $hotels;
    }

    public function createHotel(Request $request)
    {
        $hotel = new Hotel;
        $hotel->name = $request->name;
        $hotel->city = $request->city;
        $hotel->address = $request->address;
        $hotel->nit = $request->nit;
        $hotel->Habitaciones = $request->rooms;
        $hotel->save();
        return $hotel;
    }
}
