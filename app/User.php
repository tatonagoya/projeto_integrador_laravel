<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'bairro_user', 'local_trabalho', 'instituicao_ensino'
        // , 'imagem'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];





    // public function profileUpdate(Request $request){
    //     $data = $request->all();

    //     if ($data['password'] != null){
            
    //         $data['password'] = bcrypt($data['password']);
       
    //     } else {
    //         unset($data)['password'];
    //     }

    //     $update = auth()->user()->uptade($data);

    //     if ($update){
    //         return redirect()(
    //                     ->route('home')
    //                     ->with('success', 'Sucesso ao atualizar...');
    //     } else {
    //         return redirect()(
    //                     ->back()
    //                     ->with('error', 'Falha ao atualizar o perfil...');
    //     }
    
    // }


    // public function profileUpdate(Request $request){
    //     $data = $request->all();

    //     if ($data['password'] != null){
            
    //         $data['password'] = bcrypt($data['password']);
       
    //     } else {
    //         unset($data)['password'];
    //     }

    //     $update = auth()->user()->uptade($data);

    //     if ($update){
    //         return redirect('/home')             
    //     }
    
    // }



}
