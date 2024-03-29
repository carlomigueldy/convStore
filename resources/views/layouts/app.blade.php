<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name')}}</title>

        <!-- Fonts -->
        {{-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> --}}

        <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css') }}">
        {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"> --}}
    </head>
    <body>
        <br><br>
            <div class="ui container">
            @include('inc.nav')
                @include('inc.messages')
                @yield('content')
            </div>

        <script src="{{ asset('js/semantic.min.js') }}"></script>
    </body>
</html>
