<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
    //

    public $timestamps=false;
    protected $table='factura_detalle';
    protected $primaryKey='fad_id';

    protected $fillable=[
    'fac_id',
    'pro_id',
    'fad_cantidad',
    'fad_vu',
    'fad_vt' ];

}
