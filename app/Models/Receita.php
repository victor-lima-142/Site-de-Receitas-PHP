<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Receita extends Model
{
    use HasFactory;
    protected $primarykey = "id";

    protected $fillable = [
        'nome', 'origem', 'tempo', 'ingredientes',
        'preparo', 'foto', 'user'
    ];
}