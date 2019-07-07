@extends('layouts')

@section('content')
  <div class="row" style="margin-top:50px; ">
    <div class="col-lg-6 col-lg-offset-3">
      <form  action="{{ route('todo.save', ['id'=> $todo->id] ) }}" method="post" >
        {{csrf_field()}}
        <input type="text" class="form-control input-lg" name="todo" value="{{$todo->todo}}">
      </form>
    </div>
  </div>
@endsection
