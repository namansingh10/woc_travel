<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trippie</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel= "shortcut icon" type="image/x-icon" href="favicon.ico"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="scroll.css">

</head>

<body>

    <header>
        <div class="navbar">
            <div class="logo">
                <a href="home.php"><img src="images/logo1.png" width="150px" height="70px"></a>
            </div>
            <nav>
                    <a href="home.php">
                        <?php
                            echo $_SESSION['name'];
                        ?>
                    </a>
                    <a href="pilgrimage.php">Pilgrimage</a>
                    <a href="newguide.php">Become A Guide</a>
                    <a href="contact.php">Contact Us</a>
                    <a href="about.php">About Us</a>
                    <a href="index.html">Logout</a>
            </nav>
        </div>
    </header>


    <section class="bg">
        <div class="container">
            <img src="images/home.jpg" class="homepic">
            <div class="centered">
                <font size="8">TO TRAVEL IS TO LIVE</font><br>
                <p>You Don't Need Magic to Disappear. All you need is a Destination.</p>
            </div>
        </div>
		</section>


        <div class="cont2">
           <div class="bottom">
            <i>Find Your <b>HOLIDAY</b></i>
        </div>
            
                <!-- <font size="3">Where: </font> -->
                <form>
            <div class="where">
                <div class="tym">
                    <label for="when" class="form-label" id="sec">From:&nbsp;</label>
                    <input type="date" id="when" min="1997-01-01" max="2030-12-31" required>
                    <label>&nbsp;TO&nbsp;</label>
                    <input type="date" id="when2" min="1997-01-01" max="2030-12-31" required>
                </div>
                <div class="city">
                    <label for="dest" class="form-label">&emsp;&emsp;&emsp;&emsp;Where:&nbsp;</label>
                    <select id="dest" class="form-select" required>
                        <option value="0" disabled selected hidden>Choose...</option>
                        <option value="1">Delhi</option>
                        <option value="2">Mumbai</option>
                        <option value="3">Goa</option>
                    </select>
                </div>
            </div>
            <button onclick="go()" class="btn">Search</button>
        </form>
			
			<p id="error"></p>
        </div>
    
    <script type="text/javascript">
	function go() {
	    var x= document.getElementById('when').value;
		var y= document.getElementById('when2').value;
		var place= document.getElementById('dest').value;
		var today= new Date();
		var selected= new Date(x);
		if (x>y)
			alert("Invalid duration selected");
		else if (today>selected) 
			alert("Kindly choose future dates");
		else if ((x+"n").length!=1 && (y+"n").length!=1)
		    {
				if (place=="0")
				alert("Please choose a city");
				else if (place=="1")
				window.open("delhi/delhi.html", '_blank');
				else if (place=="2")
				window.open("mumbai/mumbai.html", '_blank');
				else if( place=="3")
				window.open("goa/goa.html", '_blank');
			}
		}
		
    </script>
    
    <div class="small-container">
        <h1 class="heading"><u class="under">Users Review</u></h1>
        <div class="row">
            <div class="col-3">
                <div class="cont-1">
                    <img src="images/rev1.jpg" class="pict">
                    <div class="text">
                        <p>I visited Delhi for the first time and these people made it a perfect experience. It wouldn't
                            have been possible without a guide and the guide i got was amazing with lots of experience.
                            <br><br> Rakesh Kumar <br> (2021)</p>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="cont-1">
                    <img src="images/rev2.jpg" class="pict">
                    <div class="text">
                        <p>Amazing experience with these guys. Good facility of selection of hotels and guides for Goa.
                            Checking-in to the hotel was smooth and easy thanks to Trippie. <br><br> Sanjay Patil
                            <br>
                            (2021)
                        </p>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-3">
                <div class="cont-1">
                    <img src="images/rev3.jpg" class="pict">
                    <div class="text">
                        <p>I went on a 5-day trip to Mumbai. I trusted this new startup with my trip and I am happy that
                            I took the right decision. Don't think much just book with Trippie.<br><br> Shreya
                            Mishra <br> (2020)</p>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ---------footer start--------- -->


    <div class="footer">
        <div class="row">
            <div class="col-1">
                <a href="index.html"><img src="images/logo1.png" width="350px" height="200px"></a>
            </div>
			<div class="row2">
				<div class="col-2">
					<ul>
						<li><a href="contact.php">Contact Us</a></li>
						<li><a href="about.php">About Us</a></li>
						<li><a href="">Careers</a></li>
						<li><a href="">FAQs</a></li>
						<li><a href="">Return Policy</a></li>
						<li><a href="">Terms Of Use</a></li>
					</ul>
				</div>
				<div class="col-2">
					<ul>
						<li><b><u>SOCIAL</u></b></li>
						<li><a href="">Facebook</a></li>
						<li><a href="">Twitter</a></li>
						<li><a href="">YouTube</a></li>
						<li><a href="">Instagram</a></li>
					</ul>
				</div>
			</div>
        </div>
    </div>
    <!-- ---------footer end--------- -->



</body>

</html>
