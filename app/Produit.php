<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['prodLib', 'prodCat', 'prodImg', 'marqId'];

    public function marque()
    {
        return $this->belongsTo('App\Marques', 'marqId');
    }
}
