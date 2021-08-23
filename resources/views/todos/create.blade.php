@extends('layouts.app')
@section('title')
   Todo Create
@endsection
@section('content')
    <h1 class="text-center">Create Todos</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Create new todo</div>
                <div class="card-body">
                    <form action="{{ route('todos.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Name" class="form-control">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <textarea name="description" placeholder="Description" cols="30" rows="10" class="form-control"></textarea>
                            @error('description')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Create Todo</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection