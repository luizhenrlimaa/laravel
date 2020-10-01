<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConfigController extends Controller
{



    public function index(Request $request){
        
     
        //$estado = $request->input('estado' , 'SP');
       // $nome = $request->input('nome' , 'Visitante');

       $nome = 'Luiz';
       $idade = 22;

       $lista = [
         'farinha',
         'ovo',
         'farinha 2',
         'ovo 2'
       ];

       $data = [
           'nome' => $nome,
           'idade' => $idade,
           'lista'  => $lista
       ];

     
        return view('admin.config' , $data);


        /* // all (tudo) , input (prioriza a requisição) , query (url)
        $data = $request->all();

        print_r($data);
        
        echo "Meu nome é ".$data['nome'];

        echo "Minha idade é ".$data['idade']; 

        // has (se existe) / filled (se está preenchido) / missing  
        if($request->filled('estado')){
            echo "TEM ESTADO!";
        } else{
            echo "NÃO TEM ESTADO!";
        } */
            
    }

    public function info(){
        echo 'Configurações INFO 3';
    }

    public function permissoes(){
        echo 'Configurações PERMISSÔES 3';
    }

}
