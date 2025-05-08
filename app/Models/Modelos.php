<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelos extends Model
{
    use HasFactory;

    protected $fillable = ['marca', 'modelo', 'ano', 'cor', 'preco', 'aluguel'];
}
