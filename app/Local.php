<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    protected $table = 'locais';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nome_local', 'bairro', 'endereco', 'imagem'
        // , 'id_genero'
    ];

    // public function genero(){
    //     return $this->hasOne('App\Genero', 'id', 'id_genero');
    // }

    public function getImagemImageAttribute($value){
        return $this->imagem == null ? asset('img/sem_imagem.jpg') : asset($this->imagem);
    }
}




// <!-- php artisan make:model Local -->