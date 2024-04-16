<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     */

    public function __construct(){
        
        $this->middleware('auth');
    }
    public function index()
    {
        //
        return 'TESTE';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tarefas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tarefa' => 'required',
            'data_limite_conclusao' => 'required'
        ]);

        $tarefa = Tarefa::create($request->all());

        return redirect()->route('tarefas.show', ['tarefa' => $tarefa->id]);

    }

    /**
     * Display the specified resource.
     */
    public function show(Tarefa $tarefa)
   {
        dd($tarefa->getAttributes());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tarefa $tarefa)
   {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tarefa $tarefa)
   {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tarefa $tarefa)
   {
        //
    }
}
