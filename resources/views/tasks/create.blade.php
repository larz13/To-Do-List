@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Nueva tarea</h1>
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Titulo</label>
                <input type="text" name="title" class="form-control" id="exampleFormControlInput1">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Descripcion</label>
                <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <div class="mb-3">
                <button class="btn btn-primary" type="submit">Guardar</button>
              </div>
              <div>
                <button class="btn btn-primary"><a class="text-light" href="{{ route('tasks.index') }}">Volver a la lista de tareas</a>
                </button>
              </div>
        </form>
    </div>
@endsection
