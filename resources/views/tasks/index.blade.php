@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Todas las tareas</h1>
        <div class="d-flex">
        <div class="p-2 flex-grow-1">
            <ul>
                @foreach($tasks as $task)
                    <li class="mt-3">
                        <h3><b>{{ $task->title }}</b></h3>
                        <button class="btn btn-primary">
                            <a class="text-light" href="{{ route('tasks.show', $task) }}">Ver detalles</a>
                        </button>
                        <button class="btn btn-success" >
                            <a class="text-light" href="{{ route('tasks.edit', $task) }}">Editar</a>
                        </button>
                        <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Eliminar</button>
                        </form>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class=" mt-4 p-4">
            <button class="btn btn-primary">
                <a class="text-light" href="{{ route('tasks.create') }}">Nueva tarea</a>
            </button>
        </div>
      </div>
    </div>
@endsection
