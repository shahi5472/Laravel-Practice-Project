@extends('layouts.app')

@section('title')
    Laravel | Create Post
@endsection

@section('content')
    <div>

        <h1 style="text-align: center">Create Post</h1>

        <br>
        <div class="row">
            <div class="col-12">
                <form method="post" action="{{url('/post/create')}}">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="form-group">
                        <label for="body">Body</label>
                        <textarea name="body" id="body" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Post Tag</label>
                        <select class="form-control" name="tag" id="exampleFormControlSelect1">
                            <option>Select Tag</option>
                            @foreach($tags as $tag)
                                <option value="{{$tag->id}}">{{$tag->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>

    </div>
@endsection



