<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>About US Page</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
        }

        html {
            box-sizing: border-box;
        }

        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }

        .column {
            float: left;
            width: 33.3%;
            margin-bottom: 16px;
            padding: 0 8px;
        }


        .row {
            width: 70%;
            margin-left: 200px;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            margin: 8px;
        }

        .about-section {
            padding: 50px;
            text-align: center;
            background-color: #474e5d;
            color: white;
            background-image: url('./bg.jpg');
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
        }

        .container {
            padding: 0 16px;
            margin-top: 50px;
        }

        .container::after,
        .row::after {
            content: "";
            clear: both;
            display: table;
        }

        .title {
            color: grey;
        }

        .button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
        }

        .button:hover {
            background-color: rgb(85, 85, 85);
        }

        .heading {
            margin-top: 20px;
            margin-bottom: 20px;

        }
       .container2 {

            color: rgb(3, 3, 3);
        }

        .icons a {
            text-decoration: none;
            color: rgb(19, 23, 255);
        }

        .icons ion-icon {
            color: rgb(10, 10, 10);
            font-size: 30px;
            padding-left: 30px;
            padding-top: 5px;
            transition: 0.3s ease;
            margin-bottom: 20px;
        }

        .icons ion-icon:hover {
            color: #dd7f2d;
        }

        @media screen and (max-width: 900px) {
            .row {

                margin-left: 60px;
            }

        }

        /* mobile screen */
        @media screen and (max-width: 500px) {
            .column {
                width: 100%;
                display: block;
            }

        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">DreamFly</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link "  href=" http://localhost/dreamfly/home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="http://localhost/dreamfly/about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/dreamfly/tour.php">Tours</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/dreamfly/book.php">Book</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/dreamfly/contact.php">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="about-section">
        <h1>DreamFly</h1>
        <p>The World Is A Book</p>
        <p>and those who do not travel read only one page</p>
    </div>

    <h2 class="heading" style="text-align:center">Our Team</h2>
    <div class="row">
        <div class="column">
            <div class="card">
                <img src="about1.jpg" alt="Mike" style="width:100%">
                <div class="container">
                    <h2>Mike Ross</h2>
                    <p class="title">CEO & Founder</p>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>

                    <div class="icons">
                        <a href="#">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                        <a href="#">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                        <a href="#">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                        <a href="#">
                            <ion-icon name="logo-google"></ion-icon>
                        </a>
                        
                    </div>


                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="about2.jpg" alt="Mike" style="width:100%">
                <div class="container">
                    <h2>John Doe</h2>
                    <p class="title">Art Director</p>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>

                    <div class="icons">
                        <a href="#">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                        <a href="#">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                        <a href="#">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                        <a href="#">
                            <ion-icon name="logo-google"></ion-icon>
                        </a>
                       
                    </div>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="about3.jpg" alt="Mike" style="width:100%">
                <div class="container">
                    <h2>Isha</h2>
                    <p class="title">Designer</p>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>

                    <a href="contact.html">
                        <div class="icons">
                            <a href="#">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </a>
                            <a href="#">
                                <ion-icon name="logo-instagram"></ion-icon>
                            </a>
                            <a href="#">
                                <ion-icon name="logo-twitter"></ion-icon>
                            </a>
                            <a href="#">
                                <ion-icon name="logo-google"></ion-icon>
                            </a>
                           
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <footer class="container2">
        <p class="float-end"><a href="#">Back to top</a></p>
        <center>
            <p>© 2021–2022 travel, Inc.</p>
        </center>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>

    <!-- icon script -->
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>


</body>

</html>