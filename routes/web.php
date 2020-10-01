<?php

use Illuminate\Support\Facades\Route;

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

/*
Route::get('/', function () {
    return view('welcome');
});

*/

Route::get('/' , 'App\Http\Controllers\HomeController');
Route::view('/teste' , 'teste');


Route::prefix('tarefas')->group(function(){

    Route::get('/', 'App\Http\Controllers\TarefasController@list'); //listagem de tarefas
    
    Route::get('add', 'App\Http\Controllers\TarefasController@add'); //  Tela de adição de nova tarefa
    Route::post('add', 'App\Http\Controllers\TarefasController@addAction'); // Ação de adição de nova tarefa

    Route::get('edit/{id}' , 'App\Http\Controllers\TarefasController@edit'); // Tela de edição
    Route::post('edit/{id}', 'App\Http\Controllers\TarefasController@editAction'); // Ação de edição

    Route::get('delete/{id}' , 'App\Http\Controllers\TarefasController@del'); // Ação de deletar

    Route::get('marcar/{id}' , 'App\Http\Controllers\TarefasController@done'); // Marcar resolvido/não

});



Route::prefix('/config')->group(function(){

    Route::get('/' , 'App\Http\Controllers\Admin\ConfigController@index');
    Route::post('/' , 'App\Http\Controllers\Admin\ConfigController@index');
    Route::get('info' ,'App\Http\Controllers\Admin\ConfigController@info');
    Route::get('permissoes' , 'App\Http\Controllers\Admin\ConfigController@permissoes');

});

    Route::fallback(function(){
        return view('404');
    });





/*
Route::get('/config' , function(){
   
   // return redirect()->route('permissoes');
   // redirecionando o /config para /permissoes através do nome da rota
   
    return view('config');
});

Route::get('/config/info' , function(){
    echo "Configurações INFO";
})->name('info');


Route::get('/config/permissoes' , function(){
    echo "Configurações PERMISSÕES";
})->name('permissoes');

*/

/*

Route::get('/teste', function () {
   return view('teste');
}); 

Route::get('/noticia/{slug}' , function($slug) {
    echo "Slug: ".$slug ;
});

Route::get('noticia/{slug}/comentario/{id}' , function($slug , $id){
    echo "Mostrando o comentario id: ".$id." da noticia: ".$slug;
});


Route::get('/user/{name}' , function($name){
    echo "Nome: " .$name;
})->where('name' , '[a-z]+');
// expresssão regular (filtros);


Route::get('/user/{id}' , function($id){
    echo "ID: " .$id;
});
*/