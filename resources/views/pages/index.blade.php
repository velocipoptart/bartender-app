@extends('layouts.app')

@section('content')
    <div class="jumbotron bg-success">
        <h1>{{$title}}</h1>
        <hr>
        <p>Customers can access order here<a class="text-black-50" href="/orders/create">Order</a></p>
        <p>Bartenders can access queue here<a class="text-black-50" href="/orders">Queue(employee only)</a></p>
    </div>
@endsection



