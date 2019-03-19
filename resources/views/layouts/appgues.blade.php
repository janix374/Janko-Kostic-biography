<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>{{config('app.name', 'Janko Kostic')}}</title>



    <!-- Fonts -->

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">




    <!-- Styles-->
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}" type="text/css" >


</head>
<body>
<div id="app">

    @include('inc.navbar')
    <div class="container appbeck">
        @include('inc.messages')
        @yield('content')
    </div>
    @include('inc.footer')
    <script src="{{ mix('/js/app.js') }}"></script>

</div>
</body>
</html>
