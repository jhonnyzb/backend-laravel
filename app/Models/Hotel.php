<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Hotel extends Model
{
    use HasFactory;
    protected $table = 'hotels';

    public function hotelTypeAccommodation(): belongsToMany
    {
        return $this->belongsToMany(TypeAccommodation::class, "hotels_typeAccommodation", "hotel_id", 'typeAccommodation_id')->withPivot([]);
    }

}
