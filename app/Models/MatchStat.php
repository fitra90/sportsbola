<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MatchStat extends Model
{
    use SoftDeletes;
    protected $fillable = ['idmatches', 'idplayers', 'related_players', 'event_type', 'event', 'event_time'];
    
}
