<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type_users extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['typeLib'];

    public function users()
    {
        return $this->hasMany('App\User');
    }
}
