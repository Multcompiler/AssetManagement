<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehicleStore extends Model
{
    public function categories(){
        return $this->belongsTo(MainCategory::class);
    }
    public function descriptions(){
        return $this->belongsTo(CategoryDescription::class);
    }
    public function sub_descriptions(){
        return $this->belongsTo(SubCategoryDescription::class);
    }
}
