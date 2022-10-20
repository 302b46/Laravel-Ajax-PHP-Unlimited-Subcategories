<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $fillable = ['country_name', 'region_id'];

    public function region(){
        return $this->belongsTo(Region::class); 
    }

    public function cities(){
        return $this->hasMany(City::class); 
    }
}
