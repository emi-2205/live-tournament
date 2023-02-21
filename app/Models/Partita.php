<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partita extends Model
{
    use HasFactory;

    protected $table = 'partita';

    protected $fillable = [
        'red_team_ID',
        'blue_team_ID',
        'red_goals',
        'blue_goals',
        'live',
        'finished',
        'date',
    ];
    
}
