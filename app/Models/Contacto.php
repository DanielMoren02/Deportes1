<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contacto extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "contacto";
    protected $primaryKey= "id";
    protected $fillable = [
        'nombre','apellido','telefono', 'correo'];   
    
}
