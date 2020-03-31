@extends('layouts.app')

@section('title')
    Laravel | Add New Customer
@endsection

@section('content')
    <div>

        <h1 style="text-align: center">Add New Customer</h1>
        <p><a href="{{ url('/customers') }}">Customer List</a></p>

        <div class="row">

            <div class="col">
                <form action="{{url('/customers/create')}}" method="post" enctype="multipart/form-data">
                    @include('customers.form')
                    <br>
                    <button class="btn btn-primary" type="submit">Add Customer</button>
                </form>
            </div>

        </div>

    </div>
@endsection



