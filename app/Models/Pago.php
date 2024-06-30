<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;

    protected $table = "factura";

    protected $fillable = ['id_usuario', 'monto_pagado', 'comprobante'];
}
