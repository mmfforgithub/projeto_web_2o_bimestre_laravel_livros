<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rate;

class controllerRate extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados = Rate::all();
        return view('exibirLivro', compact('dados')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('novoLivro');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = new Rate();
        $dados->nomeLivro = $request->input('nomeLivro');
        $dados->autorLivro = $request->input('autorLivro');
        $dados->save();
        return redirect('/livro')->with('success', 'Livro registrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dados = Rate::find($id);
        if(isset($dados)){
            return view('editarLivro', compact('dados'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dados = Rate::find($id);
        if(isset($dados)){
            $dados->nomeLivro = $request->input('nomeLivro');
            $dados->autorLivro = $request->input('autorLivro');
            $dados->save();
            return redirect('/livro')->with('success', 'Livro atualizado com sucesso!');
        }
        return redirect('/livro')->with('danger', 'Erro ao atualizar.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dados = Rate::find($id);
        if(isset($dados)){
            $dados->delete();
            return redirect('/livro')->with('success', 'Livro excluído com sucesso.');
        }
        return redirect('/livro')->with('danger', 'Erro ao excluir.');
    }


    public function pesquisarLivro(){
        return view('pesquisarLivro');
    }

    
    public function procurarLivro(){
        $nome = $request->input('nomeLivro');
        $dados = DB::table('rates')->select('id', 'nomeLivro', 'autorLivro')->where(DB::raw('lower(nomeLivro)'), 'like', '%' . strtolower($nome) . '%')->get();
        return view('exibirLivro', compact('dados'));
    }
}
