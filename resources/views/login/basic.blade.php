<html>
	<head>
		<title>Twitter</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"/>
        <!-- <link rel="stylesheet" href="assets/css/style-complete.css"/> -->
        <link rel="stylesheet" href="{{asset('assets/css/index_style.css')}} ">
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">

		<link rel="shortcut icon" type="image/png" href="assets/images/twitter.svg">
	</head>
<body>


  @include('login.header')
  @yield('content')
  @include('login.footer')

</main>

<script src="{{asset('assets/js/jquery-3.4.1.slim.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/mine.js')}}"></script>


<script>
     $(document).ready(function(){
        $("#exampleModalCenter").modal('show');
    });
</script>

</body>
</html>
