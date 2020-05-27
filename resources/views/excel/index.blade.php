@extends('layouts.app')

@section('title')
    Laravel | Excel Sheet
@endsection

@section('content')
    <div>

        <h1 style="text-align: center">Excel Sheet {{$number}}</h1>

        <a href="{{url('/excel/create')}}">Import Email From Excel Sheet</a>

        <br>
        <a href="{{url('/send-email')}}">Send Email</a>

        <br>
        <div class="row">
            <div class="col-12">
                <br>
                @foreach($transactions as $transaction)
                    <ul>
                        <li>{{$transaction->name_on_card}}</li>
                        <li>{{$transaction->card_no}}</li>
                    </ul>
                @endforeach
            </div>
        </div>

        <div class="row">
            <div class="col-12 d-flex justify-content-center pt-5">
                {{ $transactions->links() }}
            </div>
        </div>

    </div>
@endsection



