<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,500,700,400italic|Material+Icons">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        </head>
    <body style="background-color: white;">
        <div id="app">
            <router-view></router-view>
        </div>
        <script src="{{ asset('js/app.js?v=1.22')}}" type="text/javascript"></script>
    </body>
</html>
