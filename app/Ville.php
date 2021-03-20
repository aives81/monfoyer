<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['villeLib'];

    public function communes()
    {
        return $this->hasMany('App\Commune');
    }
}
