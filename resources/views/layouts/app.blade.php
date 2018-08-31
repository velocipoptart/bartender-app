<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name','BartenderApp')}}</title>


    </head>
    <body>
        <div class="container">

            <a href="/">Home</a>
            <a href="/about">about</a>
            <a href="/orders/create">Order</a>
            <a href="/orders">queue(employee only)</a>
        </div>
        <div class="container">
            @include('inc.messages')
            @yield('content')
        </div>

    </body>
</html>
