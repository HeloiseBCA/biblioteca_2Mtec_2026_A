<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LivroResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return ['codigo' => $this->LVRCODIGO, 'titulo' => $this->LVRTITULO, 'isbn' => $this->LVRISBN, 'edicao' => $this->LVREDICAO, 'data_publicacao' => $this->LVRDTPUBLIC?->format('Y-m-d'), 'sinopse' => $this->LVRSINOPSE, 'faixa_etaria' => $this->LVRFAIXAETARIA];
    }
}
