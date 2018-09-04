@extends('layouts.app')

@section('content')
    <div class="jumbotron bg-success">
        <h1>Menu</h1>
        <hr>
        <div class="jumbotron">
            <h2>Specials</h2>
            <a class="text-black-50" href="/specials">View All Specials</a>
        </div>
        <div class="jumbotron">
            <h2>Drinks</h2>
            <a class="text-black-50" href="/drinks">View All Drinks</a>
        </div>
        <div class="jumbotron">
            <h2>Food</h2>
            <a class="text-black-50" href="/food">View All Food</a>
        </div>
    </div>
@endsection