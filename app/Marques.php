<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marques extends Model
{
    //

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['marqCode', 'marqLib'];

    public function produits()
    {
        return $this->hasMany('App\Produit');
    }
}
