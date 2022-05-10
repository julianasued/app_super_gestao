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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', function () {
    return 'Home';
});

Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/sobrenos', 'SobreNosController@sobreNos')->name('site.sobrenos');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::post('/contato', 'ContatoController@contato')->name('site.contato');
Route::get('/login', function(){ 
    return 'Login';
})->name('site.login');

//Agrupamento de Rotas
Route::prefix('app')->group(function(){

    Route::get('/clientes', function(){ 
        return 'Clientes';
    })->name('app.clientes');

    Route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedores');

    Route::get('/produtos', function(){ 
        return 'Produtos';
    })->name('app.produtos');
});

//Primeiro modo de redirecionamento de rotas
// Redirecionamento de Rotas
/* Route::get('/rota1', function(){ 
    echo 'Rota 1';
})->name('site.rota1');

Route::redirect('/rota2', '/rota1'); */

Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');

//rota de fallback -> disponivel caso a rota n seja encontrada
Route::fallback(function(){
//echo "A rota acessada não existe. <a href="/">clique aqui</a> para ir para página inicial
echo "A rota acessada não existe. <a href=".route('site.index').">Clique aqui</a> para ir para página inicial";

});

/* Route::get('/rota1', function(){ 
    echo 'Rota 1';
})->name('site.rota1');
 */
/* Route::get('/rota2', function(){ 
    return redirect()->route('site.rota1');
})->name('site.rota2'); */


// nome, categoria, assunto, mensagem

// Enviando Parâmetros
/* Route::get('/contato/{nome?}/{categoria?}/{assunto?}/{mensagem?}', function(
    string $nome = 'Desconhecido', 
        string $categoria = 'Informação', 
            string $assunto = 'Contato', 
                string $mensagem = 'mensagem não informada'){
    echo "Parâmetros: $nome - $categoria - $assunto - $mensagem";
}); */

/* Route::get('/contato/{nome}/{categoria_id}', function(
    string $nome = 'Desconhecido', 
        int $categoria_id = 1 // 1 - Informação
        ){
    echo "Parâmetros: $nome - $categoria_id";
})->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');
 */

/* verbo http
get
post
put
putch
delete
options
*/