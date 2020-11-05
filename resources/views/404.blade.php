<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Page not found</title>
</head>

<body>
	<div id="app">
   	<div class=container4>
   <a-result status="404" title="404" sub-title="Sorry, the page you visited does not exist." />
    
</div>
	</div>
</body>
<style>
	div.container4 {
    height: 10em;
    position: relative;
     margin: 0;
    position: absolute;
    top: 20%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%)  }
div.container4 h2 {
   }
#components-layout-demo-side .logo {
  height: 32px;
  background: rgba(255, 255, 255, 0.2);
  margin: 16px;
}
</style>
<script src="{{ asset('js/app.js')}}"></script>
</html>