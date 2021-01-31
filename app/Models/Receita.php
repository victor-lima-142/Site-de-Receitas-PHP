<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receita extends Model
{
    use HasFactory;
    protected $primarykey = "id";

    protected $fillable = [
        'nome', 'origem', 'tempo', 'ingredientes',
        'preparo', 'foto', 'user'
    ];
}