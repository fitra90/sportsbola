<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Player extends Model
{
    use SoftDeletes;

    protected $fillable = ['idteams', 'player_name', 'player_height', 'player_weight', 'player_position', 'player_shirt_number'];
}
