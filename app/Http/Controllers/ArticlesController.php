<?php

namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller{

    //Este método hará que se oculte las páginas o métodos utilizados en este controlador
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        
        $articulos = Article::all();
        return view('articulos.index', compact('articulos'));
    }

    public function show($id){
        $articulo = Article::find($id);

        return view('articulos.show', compact('articulo'));
    }

    public function crear(){
        return view('articulos.crear');
    }

     
    public function store(Request $request){
        //$data = request()->all();

        // Article::create([
        //     'autor' => $data['autor'],
        //     'title'  => $data['title'],
        //     'body'   => $data['body']
        // ]);
       
        $validateData = $request->validate([
            'autor' => 'required',
            'titulo' => 'required|unique:articles|max:12',
            'cuerpo'  => 'required'
        ]);
        

       
        $articulo = new Article;
        $articulo->autor = $request->autor;
        $articulo->titulo = $request->titulo;
        $articulo->cuerpo = $request->cuerpo;
        
        $articulo->save();


        //return redirect()->route('todos_articulos');
        return redirect('/articulos');
    }

    public function update($id){
        $articulo = Article::find($id);
        return view('articulos.update', ['articulo' => $articulo]);
    }

    public function store_update(Request $request, $id){
       
        $validateData = $request->validate([
            'autor' => 'required',
            'titulo' => 'required|unique:articles|max:12',
            'cuerpo'  => 'required'
        ]);
        
        $articulo = Article::find($id);
        $articulo->autor = $request->autor;
        $articulo->title = $request->titulo;
        $articulo->body = $request->cuerpo;
        
        $articulo->save();


        //return redirect()->route('todos_articulos');
        return redirect('/articulos');

    }

    public function delete($id){
        $article = Article::find($id);
        $article->delete();

        return redirect('/articulos');
    }
}
