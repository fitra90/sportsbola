<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
    use SoftDeletes;

    protected $fillable = ['team_name', 'team_logo', 'team_est_since', 'team_address', 'team_city'];
}
