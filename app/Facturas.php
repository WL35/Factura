<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facturas extends Model
{
    //
    public $timestamps=false;
    protected $table='factura';
    protected $primaryKey='fac_id';

    protected $fillable=[
'fac_id',
'cli_id',
'fac_no',
'fac_fecha',
'fac_total',
'fac_iva',
'fac_tipo_pago',
'fac_descuento',
'fac_observaciones',
'fac_estado'
    ];

}
