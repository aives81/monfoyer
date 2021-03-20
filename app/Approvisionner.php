<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Approvisionner extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'oldQte', 'newQte', 'dateApp', 'entId', 'prodId'
    ];
}
