<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\Post;
use Illuminate\Support\Facades\DB;

class FeedController extends Controller
{
    function novoPost(Request $req){
        $post = new Post;
        $post->conteudo = $req->conteudo;
        $post->data = date("Y-m-d H:i:s");
        $post->id_user = $req->id_user;
        $post->nome_user = $req->nome_user;
        $post->nome_user .= " ";
        $post->nome_user .= $req->sobrenome_user;
        $post->id_categoria = $req->id_categoria;
        $post->save();
        return redirect("/feed?id=$req->id_user&categoria=$req->id_categoria");
    }
}
