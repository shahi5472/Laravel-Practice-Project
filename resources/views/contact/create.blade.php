@extends('layouts.app')

@section('title')
    Laravel | Contact Us
@endsection

@section('content')
    <h1 style="text-align: center">Contact Us</h1>

    <form action="/contact" method="post">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" autocomplete="off" id="customer_name"
                   name="name"
                   value="{{old('name')}}"
                   class="form-control">
            <div style="color: red">{{$errors->first('name')}}</div>
        </div>
        <br>
        <div>
            <label for="email">E-mail</label>
            <input type="email" autocomplete="off"
                   id="customer_email" name="email"
                   value="{{old('email')}}"
                   class="form-control">
            <div style="color: red">{{$errors->first('email')}}</div>
        </div>
        <br>
        <div>
            <label for="message">Message</label>
            <textarea type="text" autocomplete="off"
                      id="message" name="message"
                      value="{{old('message')}}"
                      cols="30" rows="5"
                      class="form-control"></textarea>
            <div style="color: red">{{$errors->first('message')}}</div>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Send E-mail</button>
    </form>
@endsection
