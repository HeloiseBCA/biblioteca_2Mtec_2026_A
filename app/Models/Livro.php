<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    //
    protected $table = 'LIVROS';

    protected $primaryKey = 'LVRCODIGO';

    protected $fillable = [
        'LVRTITULO',
        'LVRISBN',
        'LVREDICAO',
        'LVRDTPUBLIC',
        'LVRSINOPSE',
        'LVRFAIXAETARIA',
    ];

    protected function casts(): array
    {
        return [
            'LVREDICAO' => 'integer',
            'LVRDTPUBLIC' => 'date',
            'LVRFAIXAETARIA' => 'integer',
        ];
    }
}
