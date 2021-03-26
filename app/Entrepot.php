<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrepot extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'entLib', 'entImg', 'entLat', 'entLong', 'entJourDispo', 'entHeureDispo',
        'manualDispoActiv', 'entDispoActiv', 'validAdmin', 'entSlug', 'entDescripPlace', 'entAdminActiv', 'comId', 'id'
    ];

    public function communes()
    {
        return $this->belongsTo('App\Commune', 'comId');
    }

    public function users()
    {
        return $this->belongsTo('App\User', 'id');
    }
}
