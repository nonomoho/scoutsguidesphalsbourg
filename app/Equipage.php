<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipage extends Model
{
    protected $table = 'equipage';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function user(){
        return $this->hasMany(User::class);
    }
}
