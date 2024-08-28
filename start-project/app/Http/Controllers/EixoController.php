<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eixo;

class EixoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Eixo::with('curso')->get();
        return view('eixo.index', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('eixo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if($request->hasFile('foto')) {
            
            $eixo = new Eixo();
            $eixo->name = $request->name;
            $eixo->description = $request->description;
            $eixo->save();
            $ext = $request->file('foto')->getClientOriginalExtension();
            $nome_arq = $eixo->id . "_" . time() . "." . $ext; 
            $request->file('foto')->storeAs("public/", $nome_arq);
            $eixo->path = $nome_arq;
            $eixo->save();
            return redirect()->route('eixo.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){

        $eixo = Eixo::find($id);
    
        if(isset($eixo)){
            return view('eixo.show', compact('eixo'));
        }

        return "<h1>EIXO NÃO ENCONTRADO</h1>";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $eixo = Eixo::find($id);

        if(isset($eixo)){
            return view('eixo.edit', compact('eixo'));
        }

        return "<h1>EIXO NÃO ENCONTRADO</h1>";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $eixo = Eixo::find($id);

        if(isset($eixo)){
            $eixo->name = $request->name;
            $eixo->description = $request->description;
            $eixo->save();
            return redirect()->route('eixo.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $eixo = Eixo::find($id);
        if(isset($eixo)){
            $eixo->delete();
            return redirect()->route('eixo.index');
        }
        return"<h1>EIXO NÃO ENCONTRADO</h1>";
    }
}
