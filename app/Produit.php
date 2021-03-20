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

    protected $fillable = ['prodLib', 'prodPrice', 'imgId'];

    public function img_prod()
    {
        return $this->belongsTo('App\Img_prod', 'imgId');
    }
}
