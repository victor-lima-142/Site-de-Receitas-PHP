<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passo extends Model
{
    use HasFactory;
    protected $primarykey = 'id';

    protected $fillable = [
        'descricao', 'receita'
    ];

    public function receita()
    {
        return $this->belongsTo(Receita::class);
    }
}
