<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        // Mostrar todas las tareas del usuario autenticado
        $tasks = auth()->user()->tasks;
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        // Vista para crear una nueva tarea
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        // Almacenar una nueva tarea en la base de datos
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
        ]);

        $task = new Task([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);

        auth()->user()->tasks()->save($task);

        return redirect()->route('tasks.index')->with('success', 'Tarea creada exitosamente');
    }

    public function show(Task $task)
    {
        // Vista para mostrar detalles de una tarea
        return view('tasks.show', compact('task'));
    }

    public function edit(Task $task)
    {
        // Vista para editar una tarea
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        // Actualizar una tarea en la base de datos
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
        ]);

        $task->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('tasks.index')->with('success', 'Tarea actualizada exitosamente');
    }

    public function destroy(Task $task)
    {
        // Eliminar una tarea de la base de datos
        $task->delete();

        return redirect()->route('tasks.index')->with('success', 'Tarea eliminada exitosamente');
    }    


    public function __construct()
    {
        $this->middleware('auth');
    }


}
