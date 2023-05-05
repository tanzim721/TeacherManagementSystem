<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseCodeModel extends Model
{
    public $table='course_code_models';
    public $primaryKey='id';
    public $incrementing=true;
    public $keyType='int';
    public $timestamps=false;
}
