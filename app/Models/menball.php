<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menball extends Model
{
    use HasFactory;
     protected $fillable = ['date', 'round', 'time', 'event', 'teamone', 'score', 'teamtwo'
    ];
}
