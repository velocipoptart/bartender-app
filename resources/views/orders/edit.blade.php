@extends('layouts.app')

@section('content')
    <h1>Edit Order</h1>
    {!! Form::open(['action' => ['OrdersController@update', $order->id], 'method' => 'POST']) !!}
        <div>
            {{Form::label('name', 'Name')}}
            {{Form::text('name', $order->name, ['class' => 'form-control', 'placeholder' => 'Name'])}}
        </div>
        <div>
            {{Form::label('drink', 'Drink')}}
            {{Form::text('drink', $order->drink, ['class' => 'form-control', 'placeholder' => 'Drink'])}}
        </div>
        <div>
            {{Form::label('note', 'Note')}}
            {{Form::text('note', $order->note, ['class' => 'form-control', 'placeholder' => 'Note'])}}
        </div>
        <div>
            {{Form::label('numOfSameItems', 'Number of Same Items')}}
            {{Form::text('numOfSameItems', $order->numOfSameItems, ['class' => 'form-control', 'placeholder' => 'How Many?'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit ('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection