<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="hom.css">
<style>
	
/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
    display: none;
}
	
/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}
	
@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
.image {
	color: #FFF;
}
</style>
	
	
<script>

var slideIndex = 0;
function showSlides() {
	
    var i;
    var slides = document.getElementsByClassName("mySlides");
   // var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
   if (slideIndex > slides.length) {slideIndex = 1}    
  /*  for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }*/
    slides[slideIndex-1].style.display = "block";  
  // dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
	
	
</head>

<body onLoad="showSlides()">
<table width="908" height="237" align="center">
	<tbody>
	
		
		<ul class="nav-area">
			<li><a href="#">home</a></li>
			<li><a href="registration.php">registration</a></li>
			<li><a href="baglogin.php">login</a></li>
			<li><a href="aboutus.php">about us</a></li>
			<li><a href="collection.php">collection</a></li>
		</ul>
		<td height="78"></div>
		<div class="Welcome-text">
			<h1><center>
			  <strong style="text-align: center; font-size: 36px; color: #524D4D; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;">Sara Handbags</strong>
			</center></h1>
			
		</div>
		
		
		<tr>
      <td colspan="2"><div class="slideshow-container">
		
		<div class="mySlides fade"><img src="img1.jpg" style="width:60%">
   <br>
  <div class="text">copyright @ sara.com </div>
</div>
		 <div class="mySlides fade">
   <img src="img2.jpg" style="width:60%">
 <br>
  <div class="text">copyright @ sara.com </div>
</div>
		 <div class="mySlides fade">
   <img src="img3.jpg" style="width:60%">
   <br>
  <div class="text">copyright @ sara.com </div>
</div>
		  
		  </td>
    </tr>
		 
	
	</table>
</body>
</html>
