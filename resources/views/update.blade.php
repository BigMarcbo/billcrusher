@extends('layout')

@section('content')

    <div class="row">
        
        <div class="col-lg-16 col-lg-offset-3">
        
            <form action="{{ route('todos.save', ['id' => $todo->id ]) }}" method="post">

                {{ csrf_field() }}
            
                <input type="text" class="form-control input-lg" name="todo" value="{{ $todo->todo }}" placeholder="Create a new todo">

            </form>
        
        </div>

    </div>

    <hr>


   




@stop