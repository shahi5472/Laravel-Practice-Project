@extends('layouts.app')

@section('title')
    Laravel | Company
@endsection

@section('content')
    <div>

        <h1 style="text-align: center">Company {{$number}}</h1>

        <br>
        <div class="row">
            <div class="col-12">
                @foreach($companies as $company)
                    <ul>
                        <li>{{$company->name}}</li>
                    </ul>
                @endforeach
            </div>
        </div>

        <div class="row">
            <div class="col-12 d-flex justify-content-center pt-5">
                {{ $companies->links() }}
            </div>
        </div>

    </div>
@endsection



