@extends('layouts.app')

@section('title')
    Laravel | Customer List
@endsection

@section('content')
    <div>

        <h1 style="text-align: center">Customer List</h1>
        @can('create', \App\Customer::class)
            <p><a href="{{url('/customers/create')}}">Add New Customer</a></p>
        @endcan

        @foreach($customers as $customer)
            <div class="row">
                <div class="col-2">
                    {{ $customer->id }}
                </div>
                <div class="col-4">
                    <a href="/customers/{{$customer->id }}">{{ $customer->name }}</a>
                </div>
                <div class="col-4">
                    {{ $customer->company->name }}
                </div>
                <div class="col-2">
                    {{ $customer->status}}
                </div>
            </div>
        @endforeach

        <div class="row">
            <div class="col-12 d-flex justify-content-center pt-5">
                {{ $customers->links() }}
            </div>
        </div>

    </div>
@endsection



