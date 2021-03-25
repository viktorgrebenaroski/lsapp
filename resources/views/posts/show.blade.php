@extends('layout.app')

@section('content')
    <a href="/posts" class="btn btn-info">Go back</a>
    <div class="card">
        <div class="card-body">
        <h1>{{$post->title}}</h1>
        <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
        <br><br>
        <p>{!! $post->body !!}</p>
        <small>{{$post->created_at}} by {{$post->user->name}}</small>
        </div>
    </div> 
    <hr>
    @if (!Auth::guest())
        @if (Auth::user()->id == $post->user_id)
            
        
    <a href="/posts/{{$post->id}}/edit" class="btn btn-warning">Edit</a>
    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
    @endif
    @endif
@endsection