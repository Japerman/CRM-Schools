<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="styleshhet" href="/css/app.css" >
    <script src="/js/app.js" defer></script>
     <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>html, body, #app{ height: 100%;}</style>
    <title>@yield('title')</title>
</head>
<body>
    <div id="app" class="d-flex flex-column h-screen justify-content-between">
        <header>
            @include('partials.nav')
            @include('partials.session-status')
        </header>
        <main class="py-4">
            @yield('content')
        </main>
        <footer class="bg-white text-center text-black-50 py-3 shadow">
            {{config('app.name')}} | Copyright @ {{date('Y')}}
        </footer>
    </div>
</body>
</html>
