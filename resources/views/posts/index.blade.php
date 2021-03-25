@extends('layout.app')

@section('content')
    <h1>Posts</h1>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
        <a href="/posts/{{$post->id}}">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                        <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <h1>{{$post->title}}</h1>
                            <small>Written on: {{$post->created_at}} by {{$post->user->name}}</small>
                        </div>
                    </div>
                
                </div>
            </div>
        </a>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found!</p>
    @endif
@endsection