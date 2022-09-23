<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use App\Models\PessoaTelefone;
use App\Models\Telefone;
use Illuminate\Http\Request;

class PessoaTelefoneController extends Controller
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
        $pessoas = Pessoa::all();

        $telefones = Telefone::all();

        return view('PeTel.create', ['pessoas' => $pessoas], ['telefones' => $telefones]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        PessoaTelefone::create([
            'pessoa_id' => $request->nome,
            'telefone_id' => $request->telefone
        ]);
    
        return redirect()->route('tela_petel');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $petels = PessoaTelefone::query()->orderBy('pessoa_id')->get();

        $mensagem = $request->session()->get('mensagem');
        
        $pessoas = Pessoa::get();

        $telefones = Telefone::get();

        return view('PeTel.show', compact('petels', ('mensagem')), ['pessoas' => $pessoas, 'telefones' => $telefones]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        PessoaTelefone::destroy($request->id);

    
        return redirect()->route('tela_petel');
    }
}
