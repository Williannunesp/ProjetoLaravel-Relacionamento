<?php

namespace App\Http\Controllers;

use App\Models\Telefone;
use Illuminate\Http\Request;

class TelefoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Telefone.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Telefone::create([
            "numero"=> $request->telefone
        ]);
        
        return redirect()->route('tela_telefone');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $telefones = Telefone::query()->orderBy('numero')->get();

        $mensagem = $request->session()->get('mensagem');
        

        return view('Telefone.show', compact('telefones', ('mensagem')));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $telefones = Telefone::query()->orderBy('numero')->get();

        $mensagem = $request->session()->get('mensagem');
        

        return view('Telefone.show', compact('telefones', ('mensagem')));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Telefone::destroy($request->id);

    
        return redirect()->route('tela_telefone');
    }
}
