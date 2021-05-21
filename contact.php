<?php
$insert = false;
if(isset($_POST['name'])) {

    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if(!$con) {
        die("CONNECTION FAILED DUE TO".mysqli_connect_error());
    }

    // echo "CONNECTION SUCCESSFUL";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $sql = "INSERT INTO `woc_trippie`.`contact` (`name`, `email`, `msg`, `date`) VALUES ('$name', '$email', '$message', current_timestamp());";
    // echo $sql;

    if($con->query($sql) == true){
        // echo "SUCCESSFULLY INSERTED";
        $insert = true;
    }
    else{
        echo "ERROR : $sql <br> $con->error";
    }

    $con->close();

}

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
                <a href="index.html">Home</a>
                <a href="pilgrimage.html">Pilgrimage</a>
                <a href="contact.html">Contact Us</a>
                <a href="">About Us</a>
                <a href="login/login.html">Sign In</a>

            </nav>
        </div>
    </header>

    <section class="bg1">
        <section class="contact">
            <div class="conthead">
                <br>
                <h2>SAY HI TO TRIPPIE</h2><br>
                <h3>WE ARE ALWAYS HERE TO HELP YOU !!</h3><br>
                <p>Thank you for submitting the form. We will get back to you shortly.</p>
            </div>

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



</body>

</html>