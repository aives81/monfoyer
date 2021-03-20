<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Img_prod extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['imgLib'];

    public function produits()
    {
        return $this->hasMany('App\Produit');
    }
}
