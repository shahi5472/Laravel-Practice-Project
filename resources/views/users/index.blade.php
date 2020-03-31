@extends('layouts.app')

@section('title')
    Laravel | User
@endsection

@section('content')
    <div>

        <h1 style="text-align: center">Users</h1>

        <br>
        <div class="row">
            <div class="col-12">
                @foreach($users as $user)
                    <ul>
                        <a href="{{'/user/'.$user->id}}">
                            <li>{{$user->name}}</li>
                        </a>
                    </ul>
                @endforeach
            </div>
        </div>

    </div>
@endsection
