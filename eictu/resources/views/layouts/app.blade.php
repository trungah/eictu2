<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ url("/css/app.css") }}" rel="stylesheet">
    <link href="{{ url("/css/jumbotron-narrow.css") }}" rel="stylesheet">
    <link href="{{ url("/css/app.css") }}" rel="stylesheet">
    <link href="{{ url("/css/bootstrap.min.css") }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


</head>

<body>

<div class="container">
    @yield($name)
</div> <!-- /container -->
<script src={{url("/js/ie10-viewport-bug-workaround.js")}}></script>

<script src="{{ url("/js/app.js") }}"></script>
</body>
</html>
