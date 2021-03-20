<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'nom', 'pnom', 'avatar', 'tel', 'dateNaiss', 'genre', 'email', 'password', 'typeId', 'idParrain'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function entrepots()
    {
        return $this->hasMany('App\Entrepot');
    }

    public function adresses()
    {
        return $this->hasMany('App\Adresse');
    }

    public function type_users()
    {
        return $this->belongsTo('App\Type_users', 'typeId');
    }
}
