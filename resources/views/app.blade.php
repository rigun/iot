<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>TiemSchedule</title>
        <link rel='stylesheet' href='https://netdna.bootstrapcdn.com/font-awesome/2.0/css/font-awesome.css'>

        <link href="{{ asset('css/login.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="mainLayout">
            <app-layout></app-layout>
        </div>
    </body>
   

<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/style.js') }}"></script>
    
</html>
