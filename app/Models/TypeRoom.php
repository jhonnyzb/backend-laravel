<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class TypeRoom extends Model
{
    use HasFactory;
    protected $table = 'types_room';

    public function hotels(): BelongsToMany
    {
        return $this->belongsToMany(Hotel::class, 'hotels_types_room');
    }
}
