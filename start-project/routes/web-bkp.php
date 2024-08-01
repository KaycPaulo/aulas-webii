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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clientes/{total}', function ($total) {
    

    $dados = array(
        "Victor",
        "Isaque",
        "Wynne",
        "Amanda"
    );

    $msg = "<ul>";

    if ($total <= count($dados)) {
        $cont = 0;

        foreach($dados as $item){
            $msg = $msg ."<li>$item</li>";
            $cont++;
            if($cont == $total) break;
            
        }
    }else{
        $msg = $msg ."<li>Tamanho máximo = ".count($dados);
    }

    $msg = $msg . "</ul>";
    //dd($msg);
    return $msg;
});


Route::get('/alunos/{total}/{nome?}/', function ($total, $nome = "Victor") {
    return "ok: $nome";
})->where('total', '[0-9]+')->where('nome', '[A-Za-z]+');


Route::prefix('consulta')->group(function(){
    Route::get('/', function(){
        return view('consulta.lista');
    })->name('consulta');

    Route::get('/agendar', function(){
        return view('consulta.agendar');
    })->name('consulta.agendar');

    Route::get('/cancelar', function(){
        return view('consulta.cancelar');
    })->name('consulta.cancelar');
});


Route::prefix('prova')->group(function(){
    Route::get('/', function(){
        return view("prova.prova");
    })-> name('prova');

    Route::get('/aprovado', function(){
        return view('prova.aprovado');
    })->name('prova.aprovado');

    Route::get('/reprovado', function(){
        return view('prova.reprovado');
    })->name('prova.reprovado');

    Route::get('/recuperacao', function(){
        return view('prova.recuperacao');
    })->name('prova.recuperacao');
});