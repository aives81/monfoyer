<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adresse extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['adrLib', 'adrLat','adrLong', 'id'];

    public function users()
    {
        return $this->belongsTo('App\User', 'id');
    }
}
