@extends('layouts.app')

@section('content')
    <button type ="button" class="btn btn-primary"><a class="text-white" href="/orders">Back</a></button>
    <h1>{{$order->name}}</h1>
    <div class="container jumbotron bg-info mt-1 mr-1 p-3">
        <h3 class="display-3">Drink: {{$order->drink}}</h3>
        <h3>Notes: {{$order->note}}</h3>
        <h3>How many: {{$order->numOfSameItems}}</h3>
        <hr>
        <small>Created at: {{$order->created_at}}</small><br>

        <div class="d-flex flex-row justify-content-end ">
            <button type ="button" class="btn btn-primary"><a class="text-white"href="/orders/{{$order->id}}/edit">Edit</a></button>
            {{Form::open(['action' => ['OrdersController@destroy', $order->id], 'method' => 'POST'])}}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-primary'])}}
            {{Form::close()}}
        </div>
    </div>

@endsection