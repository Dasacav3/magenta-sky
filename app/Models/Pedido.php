<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    const CREATED_AT = 'fechaCreacion';
    const UPDATED_AT = 'fechaEdicion';
}
