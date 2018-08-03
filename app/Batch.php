<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    /*protected $table='batches';

    public function department(){
        return $this->hasone(Department::class);
    }*/
    public function department(){
        return $this->belongsTo(Department::class, 'dept_id', 'id');
    }
}
