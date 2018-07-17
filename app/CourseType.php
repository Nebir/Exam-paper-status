<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseType extends Model
{
    protected $table='courseTypes';

    public function course(){
        return $this->hasOne(Course::class);
    }
}
