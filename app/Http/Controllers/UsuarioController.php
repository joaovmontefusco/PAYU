<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\Usuario;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    function save(Request $req)
    {
        $user = new Usuario;
        $user->nome = $req->nome;
        $user->sobrenome = $req->sobrenome;
        $user->email = $req->email;
        $user->senha = $req->senha;
        $user->cidade = $req->cidade;
        $user->estado = $req->estado;
        $user->nascimento = $req->nascimento;
        $user->filhos = $req->filhos;
        $user->genero = $req->genero;
        $user->save();
        return redirect('/');
    }

    function update(Request $req)
    {
        DB::table('usuarios')->where('id', $req->id)->update(['nome' => $req->nome, 'sobrenome' => $req->sobrenome, 'email' => $req->email, 'senha' => $req->senha, 'cidade' => $req->cidade, 'estado' => $req->estado, 'nascimento' => $req->nascimento, 'filhos' => $req->filhos, 'genero' => $req->genero]);
        return redirect("/perfil?id=$req->id");
    }

    function login(Request $req)
    {
        $user = DB::table('usuarios')->where('email', $req->email)->first();
        if($user->senha == $req->senha){
            return redirect("/categorias?id=$user->id");
        }
        else{
            return redirect("/erro");
        }
    }
}
