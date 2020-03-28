@extends('layouts.app')

@section('title')
    Laravel | Add New Customer
@endsection

@section('content')
    <div>

        <h1 style="text-align: center">Add New Customer</h1>
        <p><a href="/customers">Customer List</a></p>

        <div class="row">

            <div class="col">
                <form action="/customers/create" method="post">
                    @include('customers.form')
                    <br>
                    <button class="btn btn-primary" type="submit">Add Customer</button>
                </form>
            </div>

        </div>

    </div>
@endsection



