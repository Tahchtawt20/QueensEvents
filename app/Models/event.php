<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User;

class event extends Model
{
    use HasFactory;
    protected $table ='event';
    protected $fillable=['name' , 'theme' ,'date_event' , 'time_event' , 'id_type' , 'id_user'];

    public function eventType(): BelongsTo 
    { 
        return $this->belongsTo(eventType::class , 'id_type'); 

    }
    public function user() : BelongsTo
{
    return $this->belongsTo(User::class,'id_user');
}
    

}



