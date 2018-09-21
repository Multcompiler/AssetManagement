<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategoryDescription extends Model
{
    public function descriptions(){
        return $this->belongsTo(CategoryDescription::class);
    }
    public function categories(){
        return $this->belongsTo(MainCategory::class);
    }
    public function aircrafts(){
        return $this->hasMany(AircraftStore::class);
    }
    public function armanents(){
        return $this->hasMany(ArmamentStore::class);
    }
    public function communications(){
        return $this->hasMany(CommunicationEquipmentStore::class);
    }
    public function engineering(){
        return $this->hasMany(EngineeringEquipmentStore::class);
    }
    public function explosives(){
        return $this->hasMany(ExplosiveStore::class);
    }
    public function plants(){
        return $this->hasMany(PlantStore::class);
    }
    public function vehicles(){
        return $this->hasMany(VehicleStore::class);
    }
}
