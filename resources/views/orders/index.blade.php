@extends('layouts.app')

@section('content')
    <h1>Orders In Progress</h1>
    @if(count($orders) >= 1)
        @foreach ($orders as $order)
            <div>
            <h3>ID: {{$order->id}}</h3>
            <h3>Name {{$order->name}}</h3>
            <h3>Drink: {{$order->drink}}</h3>
            <h3>Notes: {{$order->note}}</h3>
            <h3>How many: {{$order->numOfSameItems}}</h3>
            <small>Created at: {{$order->created_at}}</small>
            <a href="/orders/{{$order->id}}">Show</a>
            </div>
        @endforeach
    @endif
@endsection