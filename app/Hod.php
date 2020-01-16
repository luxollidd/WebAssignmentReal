<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Hod extends Authenticatable
{
    public function department(){
        return $this->belongsTo(Department::class);
    }

    use Notifiable;

        protected $guard = 'hod';

        protected $fillable = [
            'name', 'email', 'password',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];
}
