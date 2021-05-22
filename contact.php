<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trippie | Contact Us</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="contstyle.css">
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
                <a href="index.html"><img src="images/logo1.png" width="150px" height="70px"></a>
            </div>
            <nav>
                <a href="index.php">Home</a>
                <a href="pilgrimage.php">Pilgrimage</a>
                <a href="contact.php">Contact Us</a>
                <a href="">About Us</a>
                <a href="index.php">
                        <?php
                            echo $_SESSION['name'];
                        ?>
                </a>

            </nav>
        </div>
    </header>

    <section class="bg1">
        <section class="contact">
            <div class="conthead">
                <br>
                <h2>SAY HI TO TRIPPIE</h2><br>
                <h3>WE ARE ALWAYS HERE TO HELP YOU !!</h3>
            </div>
            <div class="alert">Your message has been sent</div>
            <form id="contact-form">
                <input name="name" type="text" class="form-control" placeholder="Your Name" id="name" required>
                <br>
                <input name="phone" type="text" class="form-control" placeholder="Phone No." id="phone" required>
                <br>
                <input name="email" type="text" class="form-control" placeholder="Your Email" id="email" required>
                <br>
                <textarea name="message" class="form-control" placeholder="Message" rows="4" id="message"
                    required></textarea>
                <br>
                <button class="bttn" type="submit">SEND MESSAGE</button>
            </form>

        </section>

        <!-- ---------footer start--------- -->


        <div class="footer">
            <div class="row">
                <div class="col-1">
                    <a href="index.html"><img src="images/logo1.png" width="350px" height="200px"></a>
                </div>
                <div class="row2">
                    <div class="col-2">
                        <ul>
                            <li><a href="">Contact Us</a></li>
                            <li><a href="">About Us</a></li>
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
    <script src="main.js"></script>

</body>

</html>
