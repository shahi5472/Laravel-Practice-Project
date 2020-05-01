@extends('layouts.app')

@section('title')
    Laravel | Posts List
@endsection

@section('content')
    <div>

        <h1 style="text-align: center">Posts List</h1>

        <a href="{{url('/post/create')}}" class="btn btn-primary btn-sm">Create Post</a>
        <br>

        <br>
        <div class="row">
            <div class="col-12">
                @foreach($posts as $post)
                    <ul>
                        <li>{{$post->title .' Tags: '.implode(', ', $post->tags->pluck('name')->toArray())}}</li>
                        <li>{{$post->body}}</li>
                        <br>
                        <form action="{{url('/post/'.$post->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </ul>
                    <hr>
                @endforeach
            </div>
        </div>

    </div>
@endsection



