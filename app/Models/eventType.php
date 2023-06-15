<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class eventType extends Model
{
    use HasFactory;

    protected $table = 'event_type';

    public function event(): HasMany 
    { 
        return $this->hasMany(event::class , 'id'); 
    }

}
