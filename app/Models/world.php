<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class world extends Model
{
    use HasFactory;
    protected $fillable = ['w_date', 'w_round', 'w_time', 'w_event', 'w_teamone', 'w_score', 'w_teamtwo'
    ];
}
