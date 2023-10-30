<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelTypeAccommodation extends Model
{
    use HasFactory;
    protected $table = 'hotels_typeAccommodation';

    public function hotel()
    {
        return $this->belongsTo(Hotel::class, 'hotel_id');
    }

    public function TypeAccommodation()
    {
        return $this->belongsTo(TypeAccommodation::class, 'typeAccommodation_id');
    }

}
