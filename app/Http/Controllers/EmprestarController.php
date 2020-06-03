<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\amigo;
use App\item;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AlmoxarifadoRequest;


class EmprestarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adicionar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AlmoxarifadoRequest $request)
    {
        $amigo = new amigo();
        $amigo->nome = $request->input('nome');
        $amigo->email = $request->input('email');
        $amigo->fone = $request->input('fone');
        $amigo->save();
        $item = new item();
        $item->nome = $request->input('item');
        $item->descricao = $request->input('desc');
        $item->dt_emprestimo = now()->format('Y-m-d');
        $item->amigo_id = $amigo->id;
        $item->usuario_id = Auth::user()->id;
        $item->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $recebido = item::find($id);
        $recebido->dt_devolucao = now()->format('Y-m-d');
        $recebido->update();
        return redirect()->back();
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
    }
    public function Devolvidos()
    {
         $collection = DB::table('items')->join('amigos','items.amigo_id','amigos.id')
        ->select('items.id','amigos.nome', 'amigos.email', 'amigos.fone', 'items.nome as produto', 'items.descricao as dsc', 'items.dt_emprestimo as dia', 'items.dt_devolucao')
        ->whereNotNull('items.dt_devolucao')->get();
        return view('devolvidos', compact('collection'));
    }
}
