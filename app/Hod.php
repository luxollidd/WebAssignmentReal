<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Hod extends Authenticatable
{
    public function department(){
        return $this->hasOne(Department::class);
    }

    use Notifiable;

        protected $guard = 'hod';

        protected $fillable = [
            'name', 'email', 'password', 'department_id'
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];
}
