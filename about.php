<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trippie | About Us</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="aboutstyle.css">
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
        <section class="contact">
            <div class="conthead">
                <br>
                <h2>ABOUT TRIPPIE</h2><br>
            </div>
            <div class="maint">
                <h1>Trippie : A one stop place for all your Travel Needs</h1>
                <p>Our platform connects user clients, hotel partners, and tour and travel guides, serving multiple
                    needs. Clients can use our platform to search and discover various places to visit famous Indian
                    cities, can book hotels and authorized guides in those cities, write and read reviews given by other
                    users all at the same place.</p>
                <br>
                <h1>Plan what places to visit !</h1>
                <p>India is one of the most famous tourist locations because of its unique cultural flavor, a perfect
                    mix of natural beauty, and cool climate. Explore renowned tourist places in Indian more under our
                    <span>“Places to Visit“</span> section so that you don’t regret missing a visit to any
                    of them.
                </p>
                <br>
                <h1>Exclusive !</h1>
                <p>What makes India unique is its spiritual heritage. Our service, as promised, is a one-stop place for
                    tours that provides an <span>entirely separate dedicated section for unique pilgrimage sites.</span>
                    Here, users
                    can look at all pilgrimage destinations at once and progress a spiritual booking in just a few easy
                    steps.
                </p>
                <br>
                <h1>Let language not be a barrier !</h1>
                <p>With the country boasting over 1000 languages, let not the Linguistic diversity become a hindrance
                    and discomfort in your tour. Find expert Indian guides with multiple languages support with full
                    India tourist location knowledge, which relieves users from the headache of finding a perfect guide
                    and managing tours to turn your trip into a dream visit. Get your best personal travel guide and
                    plan your trip with expert advice in our <span>“Guides”</span> service. We have a broad ever-growing
                    database of
                    genuine, energetic, talented, affordable tour guides across major cities and famous tourist
                    attractions all over India.
                </p>
                <br>
                <h1>Get your stay and guides at the same place !</h1>
                <p>In addition, users can view and book best-rated budget and luxury hotels at the same platform for all
                    sorts of tourists, making our service a complete tool to handle your tour, promising <span>full
                        coordination between guide and hotel booking.</span>
                </p>
                <br>
            </div>
        </section>

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
