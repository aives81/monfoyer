<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['comLib', 'villeId'];

    public function villes()
    {
        return $this->belongsTo('App\Ville', 'villeId');
    }

    public function entrepots()
    {
        return $this->hasMany('App\Entrepot');
    }
}
