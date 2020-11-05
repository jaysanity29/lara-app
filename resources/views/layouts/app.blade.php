<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CCE - @yield('title')</title>
    
  <link rel="stylesheet" href='https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>
  <link rel="stylesheet" type="text/css" href="css/util.css">
   <!--  <link rel="stylesheet" type="text/css" href="css/main.css"> -->
    <srcipt src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></srcipt>
    <link rel="stylesheet" href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    
</head>
<body>
    <div id="app">
        @yield('content')
  </div>
     <script src="{{ asset('js/app.js') }}" defer></script>
</body>
<style>
  body {
    background-color: #fcfcfc;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh
}

</style>
</html>
