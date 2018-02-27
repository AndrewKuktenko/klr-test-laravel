<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    public function projects()
    {
        return $this->belongsToMany('App\Project')
            //->withPivot('name','price','executor','start_at','finish_at')
            ->withTimestamps();
    }
}

