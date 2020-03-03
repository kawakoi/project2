<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }    

    public function index()
    {
        if (request()->has('empty')) {
            $users = [];
        } else {
            $users = [
                'Tommy',
                'Jerry',
                'Lucas',
                'Alonso',
                'Jenifer',
                'Johnatan',
                'Lee',
                'Alguien',
                '<script>alert("hola")</script>'

            ];
        }
        $title =  "Listado de usuarios";
        //dd(compact('title','users'));


        return view('users.index', [
            'users' => $users,
            'title' => 'Listado de usuarios'
            ]);
        // return view('users')->with('users', $users)
        //                     ->with('title', $title);
       //return view('users.index', compact('title', 'users'));
    }

    public function show($id)
    {
        return view('users.show', ['id' => $id]);
    }

    public function create()
    {
        return 'Crear un Nuevo Ususario';
    }

    public function edit($id)
    {
        return 'Edita el usuario ' . $id;
    }
}
