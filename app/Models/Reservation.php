<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'name',
        'datetime',
        'people'
    ];

    protected $cast = [
        'datetime' => 'datetime'
    ];

    function user()
    {
        return $this->belongsTo(User::class);
    }
}
