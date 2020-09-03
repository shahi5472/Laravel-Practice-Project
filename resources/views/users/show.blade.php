@extends('layouts.app')

@section('title', 'Laravel | Details for '.$user->name)


@section('content')
    <div>

        <h1 style="text-align: center">Details for {{$user->name}}</h1>

        <div>
            <div>
                {{ $user->id }}
            </div>
            <br>

            <div>
                {{ $user->name }}
            </div>
            <br>

            <div>
                {{ $user->email }}
            </div>
            <br>
        </div>

        <div class="row">
            <a href="{{url('/user/'.$user->id.'/edit')}}" class="btn btn-success">Edit</a>
            &nbsp;&nbsp;&nbsp;
            <form action="{{url('/user/'.$user->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>

    </div>

@endsection
