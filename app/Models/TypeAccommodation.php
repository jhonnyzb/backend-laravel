<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeAccommodation extends Model
{
    use HasFactory;
    protected $table = 'types_accommodation'; // Especifica el nombre de la tabla pivote

    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id');
    }

    public function accommodation()
    {
        return $this->belongsTo(Accommodation::class, 'accommodation_id');
    }

    public function hotels()
    {
        return $this->belongsToMany(Hotel::class, 'hotels_typeAccommodation', 'typeAccommodation_id', 'hotel_id');
    }
}
