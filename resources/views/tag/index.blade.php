@extends('layouts.app')

@section('title')
    Laravel | Tags List
@endsection

@section('content')
    <div>

        <h1 style="text-align: center">Tags List</h1>

        <br>
        <div class="row">
            <div class="col-12">
                @foreach($tags as $tag)
                    <ul>
                        <li>{{$tag->name}}</li>
                    </ul>
                @endforeach
            </div>
        </div>

    </div>
@endsection



