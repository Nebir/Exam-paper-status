<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table='courseTypes';

    public function courseType(){
        return $this->hasMany(CourseType::class);
    }
}
