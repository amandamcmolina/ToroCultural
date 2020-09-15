<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projeto;
use App\User;
use App\Habilidade;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        if (Auth::check()){
            // $projetos = Projeto::search('')->where('user_id', auth()->user()->id);
            $projetos = Projeto::where('user_id', auth()->user()->id)->take(4)->get();
            $users = User::find(auth()->user()->id);
            $projetos_colaborando = $users->projeto_user_colaborador;
                $habilidades = $users->habilidades;
                // conta quantas pessoas o usuario segue
                $seguindo = $users->seguindo()->count();
                $seguindo_user = $users->seguindo;
                $seguidores = $users->seguidores()->count();
                $seguidores_users = $users->seguidores;
                $experiences = $users->experience()->get();
                $projetos_seguidos = $users->user_projetoSeguido;
                
            return view('home', compact('users','projetos', 'habilidades', 'seguindo', 'seguindo_user', 'seguidores','seguidores_users', 'experiences', 'projetos_seguidos', 'projetos_colaborando'));
        }
    }

    public function show($username)
    {
        //Abre a página de outro usuario

        $user = User::where('username', $username)->first();
        if($user->id == auth()->user()->id){
            return redirect('/home');
        }
        $projetos = Projeto::where('user_id', $user->id)->take(3)->get();
        $projetos_colaborando = $user->projeto_user_colaborador()->take(3)->get();
        $username = $user->username;
        $habilidades = $user->habilidades;
        // conta quantas pessoas o usuario segue
        $seguindo = $user->seguindo()->count();
        $seguindo_user = $user->seguindo;
        $seguidores = $user->seguidores()->count();
        $seguidores_users = $user->seguidores;
        $experiences = $user->experience()->get();
        $projetos_seguidos = $user->user_projetoSeguido;

        //Verificando se o usuario logado segue o perfil show
        function pegaIdSeguidores($seguidores_users)
        {
            $id_seguidores = [];
            for ($i=0; $i < count($seguidores_users); $i++) { 
                $id_seguidores[] = $seguidores_users[$i]->id;
            }
            return $id_seguidores;
        }

        $id_seguidores = pegaIdSeguidores($seguidores_users);

        function verificaId($id_seguidores)
        {
            if(in_array(auth()->user()->id, $id_seguidores)){
                return true;
            }
        }

        $seguididoPeloLogado = verificaId($id_seguidores);

        return view('show-user', compact('user', 'username','projetos', 'habilidades', 'seguindo', 'seguindo_user', 'seguidores','seguidores_users', 'experiences', 'projetos_seguidos', 'projetos_colaborando', 'seguididoPeloLogado'));
    }

    public function edit($id)
    {

        $habilidades = Habilidade::all();
            $idHabilidades = [];
            for($i = 0; $i <count($habilidades); $i++){
                $idHabilidades[] = $habilidades[$i]->id;
            };

        $habilidades_user = User::find(auth()->user()->id)->habilidades;
        
            $id_habilidades = [];
            for($i = 0; $i <count($habilidades_user); $i++){
                $id_habilidades[] = $habilidades_user[$i]->id;
            };
            
        function verifica($idHabilidades, $id_habilidades){
            if(in_array($id_habilidades, $idHabilidades)){
                return true;
            };   
        }

        $check_validacao = verifica($idHabilidades, $id_habilidades);
         
        
        return view('users.edit', compact('habilidades', 'id_habilidades'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        request()->validate(
            [
                'habilidades' =>'required',
            ]
        );

        
        if($request->hasfile('imagem') && $request->imagem->isvalid()){ //name do input 
            $imagePath = $request->file('imagem');
            $imageName = $imagePath->getClientOriginalName();
            $path = $request->file('imagem')->storeAs('img/users', $imageName, 'public');
            $user->url_foto = $path;
        }

        $user->username = request('username');
        $user->descricao = request('descricao');
        $user->aniversario = request('aniversario');
        $user->profissao = request('profissao');
        $habilidades = $request->get('habilidades'); //array:[2, 3, 8]
        $user->update();           
        
        $user->habilidades()->sync($habilidades);

        return redirect('/home');
    }

    public function delete($id)
    {
        User::find($id)->delete();
        return redirect('/');

    }

    public function experiencia()
    {
        return view('users.experiencias.create');
    }

    //SEGUIR
    public function seguir($id)
    {
        $user_logado = User::find(auth()->user()->id);
        $user_seguido = User::find($id);
        //$id -> quem será seguido -> user_id
        //auth::user()->id -> user_seguindo_id
        $user_logado->seguindo()->attach(['user_seguindo_id' => auth()->user()->id], ['user_id' => $id]);

        return redirect('/perfil/'.$user_seguido->username);
    }

    public function unfollow($id)
    {
        $user_logado = User::find(auth()->user()->id);
        $user_seguido = User::find($id);

        $user_logado->seguindo()->attach(['user_seguindo_id' => auth()->user()->id], ['user_id' => $id]);

        DB::table('user_userseguindo')
                ->where('user_id', $id)
                ->where('user_seguindo_id', auth()->user()->id)
                ->delete();

                return redirect('/perfil/'.$user_seguido->username);
    }
}
