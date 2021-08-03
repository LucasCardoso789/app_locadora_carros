<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'imagem'];

    public function rules() {
        return [
<<<<<<< HEAD
            'nome' => 'required|unique:marcas,nome,'.$this->id.'|min:3',
            'imagem' => 'required'
        ];

        /*
            1) tabela
            2) nome da coluna que será pesquisada na tabela3
            3) id do registro que será desconsiderado na pesquisa
        */
=======
            'nome' => 'required|unique:marcas,nome, '.$this->id.'|min:3',
            'imagem' => 'required'
        ];
>>>>>>> ce62d51f9efce93f258916c13072e10d606ade50
    }

    public function feedback() {
        return [
            'required' => 'O campo :attribute é obrigatório',
            'nome.unique' => 'O nome da marca já existe',
<<<<<<< HEAD
            'nome.min' => 'O nome deve ter no mínimo 3 caracteres'
=======
            'nome.min' => 'O nome precisa ter no mínimo 3 caracteres'
>>>>>>> ce62d51f9efce93f258916c13072e10d606ade50
        ];
    }
}
