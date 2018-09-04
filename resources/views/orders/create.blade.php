@extends('layouts.app')

@section('content')
<div class="jumbotron bg-success">
    <h1>Create Order</h1>
    <h1>View Menu</h1>
    {!! Form::open(['action' => 'OrdersController@store', 'method' => 'POST']) !!}
        <div class="my-3">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
        </div>
        <div class="my-3">
            {{Form::label('drink', 'Drink')}}
            {{  Form::select('drink', ['Beer' => 'Beer', 'Whiskey' => 'Whiskey', 'Absinthe' => 'Absinthe', 'CHoco Milk' => 'CHoco Milk'],  'Beer', ['class' => 'form-control' ]) }}

        </div>
        <div class="my-3">
            {{Form::label('note', 'Note')}}
            {{Form::text('note', '', ['class' => 'form-control', 'placeholder' => 'Note'])}}
        </div>
        <div class="my-3">
            {{Form::label('numOfSameItems', 'How many of this drink would you like?')}}
            {{Form::selectRange('numOfSameItems', 1, 10)}}

        </div>

        {{Form::submit ('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
</div>
@endsection