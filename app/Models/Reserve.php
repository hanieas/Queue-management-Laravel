<?php

namespace App\Models;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserve extends Model 
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'turn_id',
    ];
}
