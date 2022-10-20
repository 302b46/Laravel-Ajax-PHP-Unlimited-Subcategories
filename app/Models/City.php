<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = ['city_name', 'region_id', 'country_id'];

    
    public function region(){
        return $this->belongsTo(Region::class); 
    }

    public function country(){
        return $this->belongsTo(Country::class); 
    }

}
