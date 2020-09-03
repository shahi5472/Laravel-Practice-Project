@extends('layouts.app')

@section('title')
    Laravel | Home
@endsection

@section('content')
    <h1 id="home" style="text-align: center">Home</h1>
@endsection


@section('scripts')
    <script>
        $(document).ready(function () {
            $("#home").mouseover(function () {
                $("#home").css("background-color", "red");
            });

            $("#home").mouseout(function () {
                $("#home").css("background-color", "");
            });
        })
    </script>
@endsection
