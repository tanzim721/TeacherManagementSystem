<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CTandAssignmentModel extends Model
{
    public $table='c_tand_assignment_models';
    public $primaryKey='id';
    public $incrementing=true;
    public $keyType='int';
    public $timestamps=false;
}
