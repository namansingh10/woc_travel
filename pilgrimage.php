<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trippie | Pilgrimage</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="pilgrimage.css">
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
        <div class="container">
            <img src="images/pil1.jpg" class="homepic">
            <div class="centered">
                <font size="8">PILGRIMAGE IN INDIA</font><br>
                <p>The land of temples</p>
            </div>
        </div>

        <p class="about">Thousands of people come to India from all over the world seeking spiritual enlightenment.
            Incidentally, most of these pilgrimage sites are tucked away in places blessed with unparalleled natural
            beauty.<br><br><b>Trippie brings you the best-curated pilgrimage packages.</b></p>
        <hr>
        <!-- Adding holy places -->


        <div class="categh">
            <img src="images/shirdi.jpg" class="picmove" width="250px" align="left">
            <div class="move">
                <h1>Shirdi Sai Baba</h1>

                <p>The holy town of Shirdi in Maharashtra is synonymous with Sai Baba ??? the saint who was revered by
                    followers of all religions and who is said to have performed several miracles. Devotees throng his
                    shrine year-round and the main festivals celebrated are Ramnavami, Guru Purnima and Vijayadashmi.
                </p>
                <br>

                <button class="btn" id="hotel">Book your pilgrimage</button>
            </div>
        </div>
        </div>
        <hr>


        <div class="categh">
            <img src="images/tirupati.jpg" class="picmove" width="250px" align="left">
            <div class="move">
                <h1>Tirupati</h1>

                <p>The Tirumala Venkateswara Temple near Tirupati is one of the holiest in India. The temple is
                    dedicated to
                    Lord Venkateswara who is an incarnation of Lord Vishnu. Millions of devotees visit the temple every
                    year, especially during the annual nine-day Brahmotsavan festival in October.</p><br>

                <button class="btn" id="hotel">Book your pilgrimage</button>
            </div>
        </div>
        </div>
        <hr>


        <div class="categh">
            <img src="images/somnath.jpg" class="picmove" width="250px" align="left">
            <div class="move">
                <h1>Somnath and Dwarka</h1>

                <p>The majestic seaside temples of Dwarka and Somnath are truly awe-inspiring. Dwarka is one of the four
                    shrines comprising the Char Dham and home to the Jagat Mandir, also known as Dwarkadheesh Temple
                    dedicated to Lord Krishna. The Somnath temple is one of the 12 holy Jyotirlingas of Lord Shiva.</p>
                <br>
                <button class="btn" id="hotel">Book your pilgrimage</button>
            </div>
        </div>
        </div>
        <br>
        <hr>


        <div class="categh">
            <img src="images/rames.jpg" class="picmove" width="250px" align="left">
            <div class="move">
                <h1>Rameswaram</h1>

                <p>The Ramanathaswamy temple in Rameswaram is one of the 12 Jyotirlinga shrines of Lord Shiva and is
                    also a
                    part of the Char Dham circuit. Located on Pamban Island and connected to mainland India by a bridge,
                    a
                    trip to Rameswaram is a must-do whether you???re religious-minded or not. Mahashivratri and Navratri
                    are
                    especially popular festivals here.</p>

                <button class="btn" id="hotel">Book your pilgrimage</button>
            </div>
        </div>
        </div>

        <hr>

        <div class="categh">
            <img src="images/devi.jpg" class="picmove" width="250px" align="left">
            <div class="move">
                <h1>Vaishno Devi</h1>

                <p>One of the most important Indian pilgrimages is to the Vaishno Devi shrine, near Katra in Jammu. The
                    temple is at a height of 5,300 feet and can be reached by an arduous climb. It???s dedicated to the
                    goddess Shakti and is one of the 51 Shakti Peethas. Navratri is the biggest festival celebrated
                    here.
                </p><br>

                <button class="btn" id="hotel">Book your pilgrimage</button>
            </div>
        </div>
        </div>
        <hr>
        <div class="categh">
                <img src="images/varansi.jpg" class="picmove" width="250px" align="left">
                <div class="move">
                    <h1>Varanasi</h1>

            <p>The ancient city of Varanasi is considered one of the most holy cities and there are several temples
                located on the banks of the Ganga river. The Kashi Vishwanath Temple and Sankat Mochan Temple are two of
                the most visited in the city. The annual Ganga Mahotsav celebrates the rich cultural heritage of India.
            </p>
            <br>
            <button class="btn" id="hotel">Book your pilgrimage</button>
        </div>
        </div>
        </div>
        <hr>




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



</body>

</html>
