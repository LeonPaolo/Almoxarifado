<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\item;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $collection = DB::table('items')->join('amigos','items.amigo_id','amigos.id')
        ->join('users', 'items.usuario_id', 'users.id')
        ->select('items.id','amigos.nome', 'amigos.email', 'amigos.fone', 'items.nome as produto', 'items.descricao as dsc', 'items.dt_emprestimo as dia')
        ->whereNull('items.dt_devolucao')->get();
        return view('home', compact('collection'));        
    }
}
