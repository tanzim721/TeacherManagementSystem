<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GalleryModel extends Model
{
    public $table='gallery';
    public $primaryKey='id';
    public $incrementing=true;
    public $keyType='int';
    public $timestamps=false;
}
