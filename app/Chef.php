<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * App\Chef
 *
 * @mixin \Eloquent
 */
class Chef extends Authenticatable
{
    protected $table = 'chef';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'nom', 'prenom', 'login', 'email', 'password', 'date_naissance', 'sexe',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
