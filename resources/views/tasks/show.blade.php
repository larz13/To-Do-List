@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalles de la tarea</h1>
        <label class="form-label" for="title">Título:</label>
        <input class="form-control" disabled type="text" name="title" value="{{ $task->title }}" required>
        <br>
        <label for="description">Descripción:</label>
        <textarea class="form-control" disabled name="description" >{{ $task->description }}</textarea>
        <br>
        <div>
        <button class="btn btn-primary"><a class="text-light" href="{{ route('tasks.index') }}">Volver a la lista de tareas</a>
        </button>
        </div>
    </div>
@endsection
