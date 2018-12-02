@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts)>0)
        @foreach ($posts as $post)
                    <div class='card p-3 well'>
                    <div class='row col-md-4 col-sm-4'>
                    <img style='width:100%' src='/storage/cover_images/{{$post->cover_image}}'>
                    </div>
                    <div class='row col-md-8 col-sm-8'>
                        <table class='table-stripped table-hover col-sm-12 col-md-12'>
                                <tr>
                                    <td>
                                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                                        <small>written on : {{$post->created_at}} by {{$post->user->name}}</small>
                                    </td>
                                    @if(Auth::id()==$post->user->id)
                                        <td>
                                            <a href="/posts/{{$post->id}}/edit" class="btn btn-info">Edit</a>
                                        </td>
                                        <td>
                                                {!! Form::open(['action' => ['PostsController@destroy',$post->id], 'method'=>'POST', 'class'=>'btn float-right']) !!}
                                                {{Form::hidden('_method','DELETE')}}
                                                {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                                                {!! Form::close() !!}
                                        </td>
                                    @endif
                            </tr>
                            </table>
                     </div>
                </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No post found</p>
    @endif
@endsection