@extends('emails.master')
@section('content')
    <p>Hi Dear, Thanks for Registration Our Portal</p>
    <p>Please find the login credentials below.</p>
    <h2 style="text-align: center">Email - {{ $email }} </h2> <br>
    <h2 style="text-align: center">Password - </h2> <br>
    <p>Thanks.</p>
    <p>NOMBRE</p>
@endsection