@extends('layouts.app')

@section('content')
    <h1>Orders In Progress</h1>
    @if(count($orders) >= 1)
    <div class="container">
        <div class="row">
        @foreach ($orders as $order)
            <div class="col-3 bg-info mt-1 mr-1 p-3">
            <h3>ID: {{$order->id}}</h3>
            <h3>Name: {{$order->name}}</h3>
            <h3>Drink: {{$order->drink}}</h3>
            <h3>Notes: {{$order->note}}</h3>
            <h3>How many: {{$order->numOfSameItems}}</h3>
            <small>Created at: {{$order->created_at->format('H:i')}}</small>

            <div class="d-flex flex-row justify-content-end ">
                    <button type="button" class="btn btn-primary" ><a href="/orders/{{$order->id}}"style="color:white;">Show</a></button>
                    <button type ="button" class="btn btn-primary"><a class="text-white"href="/orders/{{$order->id}}/edit">Edit</a></button>
                    {{Form::open(['action' => ['OrdersController@destroy', $order->id], 'method' => 'POST'])}}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['class' => 'btn btn-primary'])}}
                    {{Form::close()}}
                </div>
            </div>
        @endforeach
        </div>
    </div>
    @endif
@endsection