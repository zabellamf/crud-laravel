<?php

namespace App\Http\Controllers;

use App\Artigo;
use Illuminate\Http\Request;

class ArtigoController extends Controller
{
    public function listarArtigos()
    {
        $artigos = Artigo::all();

        return view('site.artigos', [
            'artigos' => $artigos
        ]);
    }

    public function  listarArtigosPrincipais()
    {
        $artigos = Artigo::all();

        return view('site.home', [
            'artigos' => $artigos
        ]);
    }

    public function criar(Request $request)
    {
        $artigo = new Artigo();
        $artigo->nome = request('nome');
        $artigo->descricao = request('descricao');

        $artigo->save();

        return redirect('/novo');
    }
}
