<?php

namespace App\Http\Controllers;

use App\Models\Tipo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tipos = Tipo::all();
        return view('tipos.index', compact('tipos'));

    }

    public function create()
    {
        //

        return view('tipos.create');
    }
    public function store(Request $request)
    {
        //
        $tipos= new Tipo;
        $tipos->nombre=$request->nombre;
        $tipos ->save();
        return Redirect::to('tipos');
    }
    public function edit($id){
        $tipo = Tipo::findOrFail($id);
        return view('tipos.edit', compact('tipo'));
        return $tipo;
    }
    public function update($id,$request){
        $tipo =Tipo::FindOrFail($id);
        return $request;
    }

}   