@extends('layouts')

@section('content')
<h2>List of To dos</h2>
  <div class="row" >
    <div class="col-lg-6 col-lg-offset-3 ">
      <form  action="/create/todo" method="post" >
        {{csrf_field()}}
        <input type="text" class="form-control input-lg" name="todo" placeholder="enter the todo">
      </form>
    </div>
  </div>
  <hr>
  @foreach($todos as $todo)
    {{$todo->todo}} <a href="{{ route('todo.delete', ['id'=> $todo->id] ) }}" class="btn btn-danger">x</a>
    <a href="{{ route('todo.update', ['id'=> $todo->id] ) }}" class="btn btn-primary btn-xs">Update</a>
    @if(!$todo->completed)
      <a href="{{ route('todo.completed', ['id'=>$todo->id])}}" class="btn btn-xs btn-success">Mark as completed</a>
    @else
      <span class="text-success">Completed</span>
    @endif
    <br><hr>
  @endforeach
@endsection
