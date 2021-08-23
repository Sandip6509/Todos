@extends('layouts.app')
@section('title')
   Single Todo: {{ $todo->name }}
@endsection
@section('content')
    <h1 class="text-center">{{  $todo->name }}</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-default">
                <div class="card-header">
                    Details
                </div>
                <div class="card-body">
                    {{ $todo->description }}
                </div>
            </div>
            <a href="{{ route('todos.edit',$todo->id) }}" class="btn btn-info btn-sm my-2">Edit</a>
            <form action="{{ route('todos.destroy',$todo->id) }}" method="post" class="pull-right">
                @csrf
                @method('DELETE')
                <input type="submit" class="btn btn-danger btn-sm">
            </form>
        </div>
    </div>
@endsection