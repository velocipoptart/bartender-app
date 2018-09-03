@extends('layouts.app')

@section('content')
    <a href="/orders">Back</a>
    <h1>{{$order->name}}</h1>
    <div>
        <h3>Drink: {{$order->drink}}</h3>
        <h3>Notes: {{$order->note}}</h3>
        <h3>How many: {{$order->numOfSameItems}}</h3>
        <small>Created at: {{$order->created_at}}</small>
        <hr>
        <a href="/orders/{{$order->id}}/edit">Edit</a>
        {{Form::open(['action' => ['OrdersController@destroy', $order->id], 'method' => 'POST'])}}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete')}}
        {{Form::close()}}
    </div>

@endsection