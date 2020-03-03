<?php

namespace App\Http\Controllers;
use App\Pastel;
use Illuminate\Http\Request;

class PastelController extends Controller
{
    public function index(){

        $pasteles = Pastel::all();
        return view('pasteles.index', compact('pasteles'));
    }

    public function show($id){
        $pastel = Pastel::find($id);

        return view('pasteles.show', compact('pastel'));
    }

    public function crear(){
        return view('pasteles.crear');
    }

    public function store(Request $request){

        $validateData = $request->validate([
            'titulo' => 'required|unique:pastels',
            'ingredientes' => 'required',
            'preparacion'  => 'required'
        ]);

        $pastel = new Pastel;
        $pastel->titulo = $request->titulo;
        $pastel->ingredientes = $request->ingredientes;
        $pastel->preparacion = $request->preparacion;

        $pastel->save();

        return redirect('/pasteles');
    }
}
