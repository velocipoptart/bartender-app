@extends('layouts.app')

@section('content')
    <div class="jumbotron bg-success">
        <h1>Menu</h1>
        <hr>
        <div class="jumbotron">
            <h2>Specials</h2>
            <a class="text-black-50" href="/specials">View All Specials</a>
        </div>
        <div class="jumbotron bg-danger">Dynamic Menu Item, Name
            <div>Price Here</div>
            <div>Picture Here</div>
            <div>Caption Here</div>
            <div>Add to Order Button</div>
        </div>
        <div class="container">Menu Item Here</div>
        <div class="container">Menu Item Here</div>
        <div class="container">Menu Item Here</div>
    </div>
@endsection