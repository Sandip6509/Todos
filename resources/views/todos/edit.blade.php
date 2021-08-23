@extends('layouts.app')
@section('title')
   Todo Edit
@endsection
@section('content')
    <h1 class="text-center">Edit Todos</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Edit todo</div>
                <div class="card-body">
                    <form action="{{ route('todos.update',$todo->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Name" class="form-control" value="{{ $todo->name }}">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <textarea name="description" placeholder="Description" cols="30" rows="10" class="form-control">{{ $todo->description }}</textarea>
                            @error('description')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Update Todo</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection