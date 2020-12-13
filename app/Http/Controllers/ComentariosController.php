<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\Comentario;
use Illuminate\Support\Facades\DB;

class ComentariosController extends Controller
{
    function comentar(Request $req){
        $coment = new Comentario;
        $coment->conteudo = $req->conteudo;
        $coment->data = date("Y-m-d H:i:s");
        $coment->id_user = $req->id_user;
        $coment->nome_user = $req->nome_user;
        $coment->nome_user .= " ";
        $coment->nome_user .=  $req->sobrenome_user;
        $coment->id_post = $req->id_post;
        $coment->save();
        return redirect("/comentarios?id=$req->id_user&post=$req->id_post");
    }
}
