<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\FeedController;
use Illuminate\Support\Facades\DB;
use App\Models\Models\Categoria;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::get('/categorias', function () {
    $categorias = new Categoria;
    $categorias = DB::table('categorias')->get();
    $id = $_GET['id'];
    return view('categorias', compact('categorias', 'id'));
});

Route::get('/novaCategoria', function () {
    $id = $_GET['id'];
    return view('solicitacao', compact('id'));
});

Route::get('/feed', function () {
    $id = $_GET['id'];
    $categoriaId = $_GET['categoria'];
    $categoria = DB::table('categorias')->where('id', $categoriaId)->first();
    $posts = DB::table('posts')->where('id_categoria', $categoriaId)->get();
    $user = DB::table('usuarios')->where('id', $id)->first();
    return view('feed', compact('id', 'categoria', 'posts', 'user'));
});

Route::get('/comentarios', function () {
    $id = $_GET['id'];
    $postId = $_GET['post'];
    $user = DB::table('usuarios')->where('id', $id)->first();
    $post = DB::table('posts')->where('id', $postId)->first();
    $comentarios = DB::table('comentarios')->where('id_post', $postId)->get();
    return view('modalComent', compact('id', 'comentarios', 'post', 'user'));
});

Route::get('/perfil', function () {
    $id = $_GET['id'];
    $user = DB::table('usuarios')->where('id', $id)->first();
    return view('perfil', compact('user'));
});

Route::get('/confirmacao', function () {
    $id = $_GET['id'];
    return view('confirmacao', compact('id'));
});

Route::get('/erro', function () {
    return view('incorreto');
});

Route::post('submit', 'UsuarioController@save');
Route::post('atualizar', 'UsuarioController@update');
Route::post('login', 'UsuarioController@login');
Route::post('novaCategoria', 'CategoriasController@novaCategoria');
Route::post('novoPost', 'FeedController@novoPost');
Route::post('comentar', 'ComentariosController@comentar');
