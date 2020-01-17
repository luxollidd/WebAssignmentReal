<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registrar extends Model
{
    public function department(){
        return $this->hasOne(Department::class);
    }
}
