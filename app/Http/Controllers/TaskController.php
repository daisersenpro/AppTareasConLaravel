<?php

namespace App\Http\Controllers;

use App\Models\task;
use Illuminate\Console\View\Components\Task as ComponentsTask;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $task['tasks']= Task::all(); /* Tomamos la información */

        return view('task.index', $task); /* Mostramos la información */
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $task= request()->all(); /* Entrega instrucción  */
        Task::create($task); /* Crea la instrucción */
        return redirect('/'); /* Vueleve a la pagina de donde se envio la información */
    }

    /**
     * Display the specified resource.
     */
    public function show(task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $task= Task::findOrFail($id); /* Buscamos la información por el id */
        $task->delete(); /* Eliminamos la información */
        return redirect('/');/* Redirecciona a la ruta incial */
    }
}
