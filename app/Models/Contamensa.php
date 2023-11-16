<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Contamensa extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "contamensa";
    protected $primaryKey= "id";
    protected $fillable = [
        'nombre','correo', 'telefono', 'mensaje'];
}
