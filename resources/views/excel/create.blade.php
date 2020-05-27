@extends('layouts.app')

@section('title')
    Laravel | Excel Sheet Import
@endsection

@section('content')
    <div>

        <h1 style="text-align: center">Excel Sheet Import</h1>

        <br>
        <div class="row">
            <div class="col-sm-6">
                <form action="{{url('/excel')}}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="form-control">
                        <input type="file" name="file">
                    </div>
                    <br>
                    <div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection



