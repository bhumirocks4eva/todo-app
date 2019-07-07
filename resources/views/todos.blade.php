@extends('layouts')

@section('content')
  @foreach($todos as $todo)
    {{$todo->todo}}
    <br><hr>
  @endforeach
@endsection
