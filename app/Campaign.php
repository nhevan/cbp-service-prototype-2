<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $fillable = ['name'];

    public function presets(){
       return $this->hasMany(Preset::class);
    }
}
