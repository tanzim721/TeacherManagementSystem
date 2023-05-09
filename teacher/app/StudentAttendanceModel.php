<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentAttendanceModel extends Model
{
    public $table='student_attendance_models';
    public $primaryKey='id';
    public $incrementing=true;
    public $keyType='int';
    public $timestamps=false;
}
