<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 'email', 'password', 'bairro_user', 'local_trabalho', 'instituicao_ensino'
        // , 'imagem'
    ];

    // public function genero(){
    //     return $this->hasOne('App\Genero', 'id', 'id_genero');
    // }

    // public function getImagemImageAttribute($value){
    //     return $this->imagem == null ? asset('img/null.png') : asset($this->imagem);
    // }
}




// <!-- php artisan make:model Local -->