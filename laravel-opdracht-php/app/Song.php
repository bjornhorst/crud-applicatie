<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $guarded = [];

    public $timestamps = true;

    public function artist()
    {
        return $this->hasOne('App\Artist');
    }
}
