<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Noticia;

class NoticiaController extends Controller
{
    public function index(){
       /* //se crea el array
        $noticias = array();
        //se añaden elementos al archivo
        $noticias[] = ['titulo'=>'Yaquis toman la carretera'];
        $noticias[] = ['titulo'=>'Pavimentan todas las calles'];*/

        //aqui se le dice que vaya a la base de datos, a la tabla de noticia y se traiga todo lo que encuentre
        $noticias = Noticia::all();

        $argumentos = array();
        $argumentos['noticias'] = $noticias;
        //la vista acepta el nombre de la vista y los argumentos
        return view('noticias.index',$argumentos);
    }

    public function show($id){
        //Busca un registro a partir de la llave primaria Select * from noticias where id = 4
        $noticia = Noticia::find($id);

        $argumentos = array();
        $argumentos['noticia'] = $noticia;

        return view('noticias.show',$argumentos);
    }
}
