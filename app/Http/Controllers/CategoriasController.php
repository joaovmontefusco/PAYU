<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\Categoria;
use Illuminate\Support\Facades\DB;

class CategoriasController extends Controller
{
    function novaCategoria(Request $req)
    {
        $categoria = new Categoria;
        $categoria->nome = $req->nome;
        $categoria->conteudo = $req->conteudo;
        $categoria->id_user = $req->id_user;
        $categoria->save();
        return redirect("/confirmacao?id=$req->id_user");
    }
}
