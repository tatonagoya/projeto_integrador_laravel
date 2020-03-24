<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */  

    protected function create(array $data)
    {
        // dd($request->all());
        // die; 

        return User::create(
            
            
            [
                'name' => $data['name'], 
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'bairro_user' => $data['bairro_user'],
                'local_trabalho' => $data['local_trabalho'],
                'instituicao_ensino' => $data['instituicao_ensino'],
                'imagem' => $data['imagem']
            ]
    
    );
    }


    // public function create()
    // {
    //     $perfis = User::all();

    //     return view('home')->with('perfis', $locais);
    // }



    public function index(){
        $locais = User::paginate(50);

        return view('home')->with('perfis', $perfis);
    }

    public function show($id, Request $request){
        $perfis = User::paginate(50);

        return view('perfil', ['perfil' => Local::findOrFail($id)])->with('perfis', $perfis);

       
        // return view('local')->with([
        //     'local' => $local ]);
    }


   

    // public function create()
    // {
    //     $perfis = User::all();

    //     return view('home')->with('perfis', $perfis);
    // }



    public function store(Request $request)
    {
        $perfis = User::find($id);
        
        $request->validate([
            'name' => 'required',
            'password' => 'required|min:6|confirmed'
           
        ]);
        
        
        
        // $request->validate([
        //     'nome_local' => 'required|min:10',
        //     'bairro' => 'required|min:5',
        //     'endereco' => 'required|min:10',
        //     'imagem' => 'nullable|min:3'
        // ]);

        // $request->all();


       
        $arquivo = $request->file('imagem');
        
        if(empty($arquivo))
        {
            $caminhoRelativo = null;
        } else {
            $arquivo->storePublicly('uploads');
            $caminhoAbsoluto = public_path()."/storage/uploads";
            $nomeArquivo = $arquivo->getClientOriginalName();
            $caminhoRelativo = "storage/uploads/$nomeArquivo";
            $arquivo->move($caminhoAbsoluto, $nomeArquivo);
        }

        User::create([
            'bairro_user' => $request->input('bairro_user'),
            'local_trabalho' => $request->input('local_trabalho'),
            'instituicao_ensino' => $request->input('instituicao_ensino'),
            // ,
            // 'duracao' => $request->input('duracao'),
            'imagem' => $caminhoRelativo
            // 'id_genero' => $request->input('genero')
        ]);

        return redirect('/home');

    }






    
    //retornando formulario para editar filmes
    public function edit($id){
        $perfil = User::find($id);

        // $generos = Genero::all();

        return view('editarPerfil')->with([
            'perfil' => $perfil
            // , 
            // 'generos' => $generos
        ]);
    }

    public function update(Request $request, $id)
    { 
        
        // dd($request->all());
        // die;
    
        $perfil = User::find($id);
        
        $request->validate([
            'name' => 'required',
            'password' => 'required|min:6|confirmed'
            
            ]);
            
            


        $arquivo = $request->file('imagem');

        if(empty($arquivo)){
            $caminhoRelativo = $perfil->imagem;
        } else {
            $arquivo->storePublicly('uploads');
            $caminhoAbsoluto = public_path()."/storage/uploads";
            $nomeArquivo = $arquivo->getClientOriginalName();
            $caminhoRelativo = "storage/uploads/$nomeArquivo";
            $arquivo->move($caminhoAbsoluto, $nomeArquivo);
        }



        $perfil->name = $request->input('name');
        
        $perfil->password = bcrypt($request->input('password'));
        $perfil->bairro_user = $request->input('bairro_user');
        $perfil->local_trabalho = $request->input('local_trabalho');
        $perfil->instituicao_ensino = $request->input('instituicao_ensino');
        $perfil->imagem = $caminhoRelativo;

        // var_dump($user);
        // die;

        $perfil->save();

        return redirect('/home');
    }










}
