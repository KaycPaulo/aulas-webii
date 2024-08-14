<?php

namespace App\Http\Controllers;

use App\Models\Eixo;
use Illuminate\Http\Request;

class EixoController extends Controller
{
    public function index(){
        $data = Eixo::all();
        return view('eixo.index', compact(['data']));
    }

    public function create(){
        return view('eixo.create');
    }

    public function store(Request $request){
        $eixo = new Eixo();
        $eixo->name = $request->name;
        $eixo->description = $request->description;
        $eixo->save();

        return redirect()->route('eixo.index');
    }
}
