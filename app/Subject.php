<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public function applications(){
        return $this->hasMany(Application::class);
    }

    public function department(){
        return $this->belongsTo(Department::class);
    }
}
