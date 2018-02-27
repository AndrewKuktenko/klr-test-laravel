<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function managers()
    {
        return $this->belongsToMany('App\Manager')
            //->withPivot('name','email','phone','company')
            ->withTimestamps();
    }
}