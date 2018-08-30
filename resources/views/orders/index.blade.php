@extends('layouts.app')

@section('content')
    <h1>Orders In Progress</h1>
    @if(count($orders) >= 1)
        @foreach ($orders as $order)
            <div>
            <h3>ID: {{$order->id}}</h3>
            <h3>In Progress: {{$order->inProgress}}</h3>
            <h3>Notes: {{$order->note}}</h3>
            <h3>Number of same items: {{$order->numOfSameItems}}</h3>
            <h3>Order is ready: {{$order->orderIsReady}}</h3>
            <small>Created at: {{$order->created_at}}</small>
            </div>
        @endforeach
    @endif
@endsection