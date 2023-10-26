<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Hotel extends Model
{
    use HasFactory;
    protected $table = 'hotels';

    public function typeRooms(): BelongsToMany
    {
        return $this->belongsToMany(typeRoom::class, 'hotels_types_room');
    }

}
