@extends('layouts')

@section('content')
  <div class="row">
    <div class="col-lg-6 col-lg-offset-3" style="margin-top:50px;">
      <form  action="/create/todo" method="post">
        {{csrf_field()}}
        <input type="text" class="form-control input-lg" name="todo" placeholder="enter the todo">
      </form>
    </div>
  </div>
  <hr>
  @foreach($todos as $todo)
    {{$todo->todo}}
    <br><hr>
  @endforeach
@endsection
