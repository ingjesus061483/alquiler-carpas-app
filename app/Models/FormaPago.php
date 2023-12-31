<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormaPago extends Model
{
    use HasFactory;
    public function facturas(){
        return $this->hasMany(FacturaEncabezado::class,'forma_pago_id');
    }
    public function pagos_detalle()
    {
        return $this->hasMany(PagoDetalle::class,'forma_pago_id');

    }
}
