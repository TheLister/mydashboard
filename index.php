<!DOCTYPE html>
<html lang="en">
<?php

    require_once('/dbconfig.php');
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);

    }
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Nuck.co</title>

    <?php
        //insert view log
        // Attempt insert query execution

        $view_ip = $_SERVER['REMOTE_ADDR'];
        $sql = "INSERT INTO view_log (view_ip) VALUES ('$view_ip')";
    ?>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/thumbnail-gallery.css" rel="stylesheet">

    <!-- Temporary navbar container fix -->
    <style>
    .navbar-toggler {
        z-index: 1;
    }

    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    </style>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-toggleable-md navbar-inverse bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
            <a class="navbar-brand" href="#">Nuck.co</a>
            <div class="collapse navbar-collapse" id="navbarExample">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./insert.php">Add New</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
		<h1 class="text-center">Frequently Used Links </h1>
        <br />
        <div class="row text-center text-lg-left">


        <?php
            $sql = "SELECT ID, tile_url, tile_img_url FROM tiles";
            $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo '<div class="col-lg-3 col-md-4 col-xs-6 tile"><a target="_blank" href="';
                echo $row["tile_url"];
                echo '" class="d-block mb-4 h-100"><img class="img-fluid img-thumbnail" src="';
                echo $row["tile_img_url"];
                echo '" alt=""></a></div>';
            }
        } else {
            echo "0 results";
        }

        ?>



            <div class="col-lg-3 col-md-4 col-xs-6">
                <a  target="_blank" href="https://mail.google.com/mail/u/0/#inbox" class="d-block mb-4 h-100">
					<img class="img-fluid img-thumbnail" src="./img/gmail.png" alt="">
                </a>
            </div>
            <!--
            <div class="col-lg-3 col-md-4 col-xs-6">
                <a target="_blank" href="https://it.wtamu.edu" class="d-block mb-4 h-100">
					<h1>WTAMU IT</h1>
					<img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 ">
                <a target="_blank" href="https://www.wtamu.edu/search/" class="d-block mb-4 h-100">
					<h1> WTAMU Search </h1>
					<img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6">
                <a target="_blank" href="https://wtclass.wtamu.edu" class="d-block mb-4 h-100">
					<h1>WTClass</h1>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6">
                <a target="_blank" href="https://digitalocean.com" class="d-block mb-4 h-100">
                    <h1>Digital Ocean</h1>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6">
                <a target="_blank" href="https://messenger.com" class="d-block mb-4 h-100">
                    <h1>Messenger</h1>
                </a>
            </div> -->
            <div class="col-lg-3 col-md-4 col-xs-6">
                <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6">
                <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6">
                <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6">
                <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6">
                <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6">
                <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
                </a>
            </div> -->
        </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-inverse">
        <div class="container">
            <p class="m-0 text-center text-white">
				<a href="https://chrome.google.com/webstore/detail/cnkhddihkmmiiclaipbaaelfojkmlkja?ct=recommended" target="_blank">Open this page with every new tab</a>
				<br />
			Copyright &copy; Nuck.co 2017</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>
<?php $conn->close(); ?>
</html>
