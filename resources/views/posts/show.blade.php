@extends('layouts.app')

@section('content')

<a href='/posts' class="btn btn-info">Go back</a>
    <h1>{{$post->title}}</h1>
    

    <div class="">
        {!!$post->body!!}
    </div>
    <hr>
    <small>written on : {{$post->created_at}}</small>
@endsection