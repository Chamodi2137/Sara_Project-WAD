<!doctype html>
<html>
    <head>
        <title>About Us</title>
        <link href="https://fonts:googleapis.com/css?family=Bitter" rel="stylesheet">
        <link rel="stylesheet" href="aboutstyle.css">
        
    </head>
    <body>
		
		
      
		<div class="detail-section"> <a href="contact.php"><b><button>Contact us</button></b> </a> </div>
  
		
        <div class="header">
            <div class="main">
                <h1>About Us..</h1>
                <p>
                    Sara handbags is a handbag shop in Srilanka that sells modern handbags based on customer needs. Sara handbags has proven its reliability through 5 decades of serving you. Sara handbags  has proven its commitment to giving you not only a piece of bags but a beautiful experience to cherish throughout your life. Sara handbags  stands by its lifetime’s guarantee by being with you forever. Best Handbags in Sri Lanka. <span id="dots">...</span><span id="more">
                    In 2000, Sara handbags  opened its doors to the world. The first Sara handbags  showroom was opened at colombo by Mr. Sarath  who was a visionary and undoubtedly, ahead of his time.

The name Sara was given to this bags boutique to signify the exquisite pieces of bag it has always been reputed for. Fashion forward, vibrant, beautiful and authentic in design and materials; Sara handbags is a name that embodies a rich history of always giving its customers the widest range of handbags.</span>
                </p>
                <br>
                <button type="button" id="read" onclick="read()">Read more</button>
                <script type="text/javascript">
                    var i=0;
                    function read(){
                        if(!i){
                            document.getElementById("more").style.display = "inline";
                            document.getElementById("dots").style.display = "none";
                            document.getElementById("read").innerHTML="Read less";
                            i=1;
                        }
                        else{
                            document.getElementById("more").style.display = "none";
                            document.getElementById("dots").style.display = "inline";
                            document.getElementById("read").innerHTML="Read more";
                            i=0;
                        }
                    }
                </script>
            </div>
        </div>
		
    </body>
</html>
