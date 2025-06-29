@extends('emails.master')
@section('content')
    <p>Hi Dear, Thanks for Payment.</p>
    <p>Please find the login credentials below.</p>
    <h2 style="text-align: center">Total Amount - {{ $amount }} </h2> <br>
    <h2 style="text-align: center">Status - PAID </h2> <br>
    <p>Thanks.</p>
    <p>NOMBRE</p>
@endsection