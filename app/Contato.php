<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    public function listar()
    {
        return [
            (object)['nome' => 'Maria', 'tel' => '3334555666'],
            (object)['nome' => 'Pedro', 'tel' => '7219371289']
        ];
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }


}
