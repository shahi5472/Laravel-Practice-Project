@extends('layouts.app')

@section('title', 'Laravel | Details for '.$customer->name)

@section('content')
    <div>

        <h1 style="text-align: center">Details for {{$customer->name}}</h1>

        <div>
            <div>
                {{ $customer->id }}
            </div>
            <br>

            <div>
                {{ $customer->name }}
            </div>
            <br>

            <div>
                {{ $customer->email }}
            </div>
            <br>

            <div>
                {{ $customer->company->name }}
            </div>
            <br>

            <div>
                {{ $customer->status }}
            </div>
            <br>
        </div>

        <div class="row">
            <a href="{{url('/customers/'.$customer->id.'/edit')}}" class="btn btn-success">Edit</a>
            &nbsp;&nbsp;&nbsp;
            <form action="{{url('/customers/'.$customer->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>

    </div>

@endsection



