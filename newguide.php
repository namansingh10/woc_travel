<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trippie | Become A Guide</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="newguidestyle.css">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
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
                <a href="home.php">Home</a>
                <a href="pilgrimage.php">Pilgrimage</a>
                <a href="contact.php">Contact Us</a>
                <a href="about.php">About Us</a>
                <a href="home.php">
                        <?php
                            echo $_SESSION['name'];
                        ?>
                </a>

            </nav>
        </div>
    </header>

    <section class="bg1">

        <div class="newg">
            <h1>SAY HI TO TRIPPIE</h1>
            <p>Enter you details and submit this form to send us your details</p>
            <div class="alert">Thank you for submitting the form. We will get back to you shortly.</div>
            <form id="newguide-form">
                <input type="text" name="fname" id="fname" placeholder="Enter Your First Name" required>
                <input type="text" name="lname" id="lname" placeholder="Enter Your Last Name" required>
                <input type="text" name="age" id="age" placeholder="Enter Your Age" required>
                <input type="text" name="gender" id="gender" placeholder="Enter Your Gender" required>
                <input type="phone" name="phone" id="phone" placeholder="Enter Your Phone No." required>
                <input type="email" name="email" id="email" placeholder="Enter Your Email" required>
                <textarea name="desc" id="desc" cols="30" rows="7"
                    placeholder="Enter Any Other Queries You Might Have"></textarea>
                <br>
                <label for="myFile">Educational Document (.pdf only)</label>
                <span><input class="file" type="file" id="myFile" name="filename" required></span>
                <br>
                <label for="myPic">Passport size photo (&lt;1MB)&nbsp;&emsp;&emsp;&emsp;</label>
                <span><input class="file" type="file" id="myPic" name="filename" required></span>
                <br>
                <label for="myLang">Language Certificate (.pdf only)</label>
                <span><input class="file" type="file" id="myLang" name="filename" required></span>
                <br>
                <button class="btn" type="submit">Submit</button>
            </form>
        </div>

        <!-- ---------footer start--------- -->


        <div class="footer">
            <div class="row">
                <div class="col-1">
                    <a href="home.php"><img src="images/logo1.png" width="350px" height="200px"></a>
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
    </section>
    <!-- ---------footer end--------- -->

    <script src="https://www.gstatic.com/firebasejs/8.6.2/firebase.js"></script>
    <script src="newmain.js"></script>

</body>

</html>