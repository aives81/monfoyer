<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class visite extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['visiteIp', 'visiteDate'];
}
