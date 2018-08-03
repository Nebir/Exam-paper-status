<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    /*protected $table='courses';

    public function courseType(){
        return $this->hasMany(CourseType::class);
    }*/

    /*public function department()
    {
        return $this->belongsTo('App\Department','dept_id');
    }*/

    public function department(){
        return $this->belongsTo(Department::class, 'dept_id', 'id');
    }
}
