@extends('layouts')

@section('content')
  <div class="row" style="margin-top:50px; ">
    <div class="col-lg-6 col-lg-offset-3">
      <form  action="/create/todo" method="post" >
        {{csrf_field()}}
        <input type="text" class="form-control input-lg" name="todo" placeholder="enter the todo">
      </form>
    </div>
  </div>
  <hr>
  @foreach($todos as $todo)
    {{$todo->todo}} <a href="{{ route('todo.delete', ['id'=> $todo->id] ) }}" class="btn btn-danger">x</a>
    <br><hr>
  @endforeach
@endsection
