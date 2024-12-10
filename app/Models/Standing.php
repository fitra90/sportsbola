<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Standing extends Model
{
    use SoftDeletes;

    protected $fillable = ['idteams', 'goal_scored', 'goal_conceeded', 'points'];
}
