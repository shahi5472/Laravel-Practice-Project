@extends('layouts.app')

@section('title')
    Laravel | Edit Customer
@endsection

@section('content')
    <div>

        <h1 style="text-align: center">Edit Details for {{$customer->name}}</h1>

        <div class="row">

            <div class="col">
                <form action="/customers/{{$customer->id}}" method="post">
                    @method('PUT')
                    @include('customers.form')
                    <br>
                    <button class="btn btn-primary" type="submit">Save Customer</button>
                </form>
            </div>
        </div>

    </div>
@endsection



