<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Waiting for approval</title>
</head>

<body>
	<div id="app">
   	<div class=container4>
   <a-result status="403" title="Pending Account" sub-title="Your account is pending for approval.">
    <template #extra>
      <a-button type="primary" href="/">
        Back Home
      </a-button>
    </template>
  </a-result>
 
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

</style>
<script src="{{ asset('js/app.js')}}"></script>
</html>