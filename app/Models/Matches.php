<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Matches extends Model
{
    use SoftDeletes;

    protected $fillable = ['home_team', 'away_team', 'final_score_home', 'final_score_away', 'refree', 'match_date'];
}
