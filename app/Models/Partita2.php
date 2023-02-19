<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Partita extends Model
{
    protected $table = 'partita';

    // protected $fillable = [
    //     'red_team_ID',
    //     'blue_team_ID',
    //     'red_goals',
    //     'blue_goals',
    //     'live',
    //     'finished',
    //     'date',
    // ];

    // guarded è l'opposto di fillable, gli attributi specificati non possono essere asseganti in massa (not mass-assignable)
    // protected $guarded = ['id', 'stato', 'proprietario_id' , 'chat_id', 'assegnatario_id'];

}
