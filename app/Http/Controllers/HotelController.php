<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestAddRoom;
use App\Http\Requests\RequestCreateHotel;
use App\Models\Hotel;
use App\Models\HotelTypeAccommodation;
use App\Models\TypeAccommodation;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    //
    public function getHotels()
    {
        $hotels = Hotel::with([
            'hotelTypeAccommodation.type:id,name', // Selecciona solo el campo 'nombre' de la relación 'type'
            'hotelTypeAccommodation.accommodation:id,name', // Selecciona solo el campo 'nombre' de la relación 'accommodation'
        ])->get();

        return $hotels;
    }

    public function getTypesAccommodation()
    {
        $types = TypeAccommodation::with('type', 'accommodation')->get();
        return $types;
    }


    public function createHotel(RequestCreateHotel $request)
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

    public function addRooms(RequestAddRoom $request)
    {

        for ($i = 0; $i < $request->rooms; $i++) {
            $addRoom = new HotelTypeAccommodation();
            $addRoom->hotel_id = $request->hotel_id;
            $addRoom->typeAccommodation_id = $request->type_accommodation;
            $addRoom->save();
        }

        return response()->json(['message' => 'Recurso creado'], 201);
    }
}
