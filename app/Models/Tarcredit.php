<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tarcredit extends Model
{
    use HasFactory;

    protected $table = "tarcredit";
    protected $primaryKey= "id";
    protected $fillable = [
        'nombretar','numtar','fechaexp', 'cvv']; 
}
