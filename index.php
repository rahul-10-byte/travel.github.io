<!DOCTYPE html>
<html lang="en">

<head>
    <title>Travel & Tourism</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="gallery.css">
    <link rel="stylesheet" type="text/css" href="places.css">
 
</head>

<body onload="startTime()">



    <!--Navigation Menu-->
    <header class="bg-img">
        <nav>
            <div>
                <ul>
                    <li><img src="logo.png"></li>
                    <li><a href="#Home" class="active">Home</a></li>
                    <li><a href="#About">About</a></li>
                    <li><a href="#Gallery">Gallery</a></li>
                    <li><a href="#Contact">Contact</a></li>
                    <div class="search-container">
                        <form action="https://www.google.com/search" class="searchform" method="get" name="searchform" target="_blank">
                            <input name="sitesearch" type="hidden" value="">
                            <input autocomplete="on" class="form-control search" name="q" placeholder="Search for Places..." required="required" type="text">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </ul>
            </div>
        </nav>
        <main class="font">
            <section class="fontstyle">
                <h2>"It's better to see something once,<br> than to hear about it thousand times..."</h2>
                <hr>
                <h4>Welcome to INDIA</h4>
                <hr>
                <a href="">Learn more</a>
            </section>
        </main>
    </header>










    <div style="font-family: 'Yanone Kaffeesatz', sans-serif;  margin-bottom: auto;"><br><br><br>
        <div class="container" style=" font-size: 26pt;">
            <div class="row" style="display: flex; justify-content: center;">
                <span class="col-lg-4 col-md-4 col-12 " style="padding-right: 20%">
                    <figure class="text-center">
                        <img src="motorbike.png" class="img-fluid" width="120" height="120">
                        <figcaption><b>Roads</b></figcaption>
                        <caption></caption>
                    </figure>
                </span>
                <span class="col-lg-4 col-md-4 col-12" style="padding-right: 20%;">
                    <figure class="text-center">
                        <img src="camping-tent.png" class="img-fluid" width="120" height="120">
                        <figcaption><b>Village life</b></figcaption>
                    </figure>
                </span>
                <span class="col-lg-4 col-md-4 col-12" style="">
                    <figure class="text-center">
                        <img src="camera.png" class="img-fluid" width="120" height="120">
                        <figcaption><b>Memories</b></figcaption>
                    </figure>
                </span>
            </div>
        </div><br><br><br>
    </div>
    <article>









        <!-- About Us-->
        <div class="row" id="About">
            <div class="column">
                <p style="font-size: 45px; text-decoration: underline;"><b>Our INDIA</b> - A country with Different Culture</p><br>
                <br>
                <p style="font-size: 18pt; font-family: calibri">India is a diverse country, a fact that is visibly prominent in its people, culture and climate. From the eternal snows of the Himalayas to the cultivated peninsula of far South, from the deserts of the West to the humid deltas of the East, from the dry heat and cold of the Central Plateau to the cool forest foothills, Indian lifestyles clearly glorify the geography.</p>
            </div>
            <div class="column">
                <img src="https://i.pinimg.com/originals/21/40/22/214022020b57864d6fb15e3c8ff531f9.jpg" style="max-height: 405px;">
            </div>
        </div>
    </article>







    <!--gallery-->
    <section class="font py-5 fontstyle">.............................................<br>
        <h1 class="fontstyle" style="font-size: 30pt;">Gallery</h1>
        ...........................................................<br>
        <div class="gallery fontstyle" id="Gallery">
            <ul>
                <li>
                    <span>Ancient Sculptures</span>
                    <img src='1.jpg' /></li>
                <li>
                    <span>The Cold Desert-Leh</span>
                    <img src='2.jpg' /></li>
                <li>
                    <span>View Of The Himalayas - Uttarakhand</span>
                    <img src='3.jpg' /></li>
                <li>
                    <span>Symbol of Love- Taj Mahal</span>
                    <img src='4.jpg' />
                </li>
                <li>
                    <span>Varanasi - The city of Temples</span>
                    <img src='5.jpg' />
                </li>
            </ul>
        </div><br><br>
    </section>








    <!--best places-->
    <section style="padding-bottom: 30px;">
    	<h1 class="fontstyle" style="font-size: 30pt; outline: dashed;">Top Destinations</h1><br>

    <main class="page-content">
        <div class="card">
            <div class="content">
                <h2 class="title">Mumbai</h2>
                <p class="copy">Check out all of these gorgeous mountain trips with beautiful views of, you guessed it, the mountains</p><button class="btn">View Trips</button>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <h2 class="title">Pune</h2>
                <p class="copy">Plan your next beach trip with these fabulous destinations</p><button class="btn">View Trips</button>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <h2 class="title">Jaipur</h2>
                <p class="copy">It's the desert you've always dreamed of</p><button class="btn">View Trips</button>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <h2 class="title">Goa</h2>
                <p class="copy">Seriously, straight up, just blast off into outer space today</p><button class="btn">View Trips</button>
            </div>
        </div>
         <div class="card">
            <div class="content">
                <h2 class="title">Leh Ladakh</h2>
                <p class="copy">Check out all of these gorgeous mountain trips with beautiful views of, you guessed it, the mountains</p><button class="btn">View Trips</button>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <h2 class="title">Agra</h2>
                <p class="copy">Plan your next beach trip with these fabulous destinations</p><button class="btn">View Trips</button>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <h2 class="title">Hampi</h2>
                <p class="copy">It's the desert you've always dreamed of</p><button class="btn">View Trips</button>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <h2 class="title">Munnar</h2>
                <p class="copy">Seriously, straight up, just blast off into outer space today</p><button class="btn">View Trips</button>
            </div>
        </div>
    </main>
</section>



<section class="contact" id="Contact" style="text-align: center; background: #f2f2f2; padding-bottom: 20px; padding-top: 10px;">
	<div class="py-5">
		<h1 class="fontstyle" style="font-size: 30pt; text-align: center; "> Contact </h1>
	</div>

	<div class="w-100 m-auto">
		<form action="userinfo.php" method="post">
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="user" autocomplete="off" class="form-control" required>
            </div>

            <div class="form-group">
				<label>Email ID</label>
				<input type="text" name="email" autocomplete="off" class="form-control" required>
            </div>

            <div class="form-group">
				<label>Mobile</label>
				<input type="text" name="mobile" autocomplete="off" class="form-control">
            </div>

   			<div>
   			<label for="country">Country</label>
    			<select id="country" name="country">
      				<option value="australia">Australia</option>
      				<option value="canada">Canada</option>
      				<option value="usa">USA</option>
   				</select>
  			</div>

            <div class="form-group">
				<label>Message</label>
                 <textarea class="form-control msg" name="message" id="message" rows="6" required></textarea>
            </div>
			<button type="submit" class="btn btn-success">Submit</button>
		</form>
	</div>
</section>

 <!--top cursor -->
    <a id="button"></a>
  

     



<footer class="footer-distributed">

			<div class="footer-right">

				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-instagram"></i></a>
				<a href="#"><i class="fa fa-github"></i></a>

			</div>

			<div class="footer-left">

				<p class="footer-links">
					<a class="link-1" href="#">Home</a>

					<a href="#">Blog</a>

					<a href="#">Pricing</a>

					<a href="#">About</a>

					<a href="#">Faq</a>

					<a href="#">Contact</a>
				</p>
				<p style="color: white; font-size: 15pt;">Indian Time - <span id="realTime"></span> (+5:30)</p><br><br>
				<p>Company Name &copy; 2020</p>
			</div>

		</footer>






     <footer style="font-size: 30pt; position: bottom;" class="font">
    </footer>
</body>
<script type="text/javascript">
////live time
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('realTime').innerHTML = h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}

function checkTime(i) {
    if (i < 10) { i = "0" + i }; // add zero in front of numbers < 10
    return i;
}





///back to top
var btn = $('#button');

$(window).scroll(function() {
    if ($(window).scrollTop() > 300) {
        btn.addClass('show');
    } else {
        btn.removeClass('show');
    }
});

btn.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: 0 }, '300');
});
</script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</html>