@extends('layouts.app')

@section('content')
    <h1>Create Order</h1>
    {!! Form::open(['action' => 'OrdersController@store', 'method' => 'POST']) !!}
        <div>
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
        </div>
        <div>
            {{Form::label('drink', 'Drink')}}
            {{Form::text('drink', '', ['class' => 'form-control', 'placeholder' => 'Drink'])}}
        </div>
        <div>
            {{Form::label('note', 'Note')}}
            {{Form::text('note', '', ['class' => 'form-control', 'placeholder' => 'Note'])}}
        </div>
        <div>
            {{Form::label('numOfSameItems', 'Number of Same Items')}}
            {{Form::text('numOfSameItems', '', ['class' => 'form-control', 'placeholder' => 'How Many?'])}}
        </div>

        {{Form::submit ('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection