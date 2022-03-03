<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<meta name="author" content="Danu andrean">
	<meta name="description" content="migunani website">
	<meta name="keywords" content="architecture jasa arsitek">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- title -->
	<title>@yield('title')</title>

	<link rel="shortcut icon"  href="{{asset('image/logo1.png') }}" >
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css"/>

	<!-- sosmed -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--icon  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
	
	
	<!-- slick -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
	
	<!-- login -->
	<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js'></script>
	<script src='http://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/MorphSVGPlugin.min.js?r=182'></script>
		

	<link rel="stylesheet" href="{{asset('css/main.css') }}" >

	@yield('link')
    
</head>
<body>

@yield('nav')
  
	<!-- --jumbotro-- -->
@yield('jumbotron')
	
@yield('container')
@yield('content')



<script>
	var modal = document.getElementById("myModal");

	// Get the button that opens the modal
	var btn = document.getElementById("myBtn");

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close-no")[0];

	// When the user clicks the button, open the modal 
	// btn.onclick = function() {
	// modal.style.display = "block";
	// }

	// When the user clicks on <span> (x), close the modal
	// span.onclick = function() {
	// modal.style.display = "none";
	// }

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	}
</script>


@yield('script')
@yield('force')
</body>
</html>