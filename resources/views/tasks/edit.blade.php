@extends('layouts.app')

@section('content')
   <div class="container">
        <h1>Editar tarea</h1>
        <form action="{{ route('tasks.update', $task) }}" method="POST">
            @csrf
            @method('PUT')
            <label class="form-label" for="title">Título:</label>
            <input class="form-control" type="text" name="title" value="{{ $task->title }}" required>
            <br>
            <label for="description">Descripción:</label>
            <textarea class="form-control" name="description" >{{ $task->description }}</textarea>
            <br>
            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Guardar Cambios</button>
              </div>
              <div>
                <button class="btn btn-primary"><a class="text-light

                    " href="{{ route('tasks.index') }}">Volver a la lista de tareas</a>
                </button>
              </div>
        </form>
   </div>
@endsection
