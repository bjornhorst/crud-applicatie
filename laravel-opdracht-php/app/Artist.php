<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Song;
class Artist extends Model
{
    protected $guarded = [];

    public function songs()
    {
        return $this->hasMany('App\Song','artistName', 'artist');
    }
}
