<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>DreamFly Travelling Website</title>
    <style>
        .card {
            margin-top: 20px;
            margin-left: 300px;
            border: solid 1px #dbdad7;
            width: 60%;
            padding-left: 10px !important;
            padding-bottom: 10px !important;
            padding-right: 10px !important;
            padding-top: 0px !important;
        }

        .card-title {
            margin: auto;
            padding: 15px;
            background-color: #2f7fad;
            color: white;
            width: 80%
        }

        div.card-body {
            padding: 0px
        }

        .custom-select {
            width: 100%
        }

        .btn2 {
            margin-left: 10%
        }

        input {
            outline: 0 !important;
            border-width: 0 0 2px !important;
            border-color: #d1d1cf !important
        }

        input:focus {
            border-color: #d1d1cf !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important
        }

        select {
            outline: 0 !important;
            border-width: 0 0 2px !important;
            border-color: #d1d1cf !important
        }

        select:focus {
            border-color: #d1d1cf !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important
        }

        .radiobtn {
            margin-left: 3.5%
        }

        .icons {
            margin: auto !important
        }

        .fa {
            border-radius: 25px;
            width: 10%;
            margin-left: 5%;
            border: solid 2px #dbdad7;
            margin-top: 5%;
            text-align: center
        }

        .fa-plane {
            color: #1cad9f
        }

        .fa-taxi {
            color: #c2f700
        }

        .fa-train {
            color: red
        }

        @media only screen and (max-width: 600px) {
            .card {
                margin: auto;
                border: solid 1px #dbdad7;
                width: 90%;
                padding-left: 10px !important;
                padding-bottom: 10px !important;
                padding-right: 10px !important;
                padding-top: 0px !important
            }

            .fa {
                border-radius: 25px;
                width: 15%;
                margin-left: 5%;
                border: solid 2px #dbdad7;
                margin-top: 5%;
                text-align: center
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
                        <a class="nav-link" href="http://localhost/dreamfly/about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/dreamfly/tour.php">Tours</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="http://localhost/dreamfly/book.php">Book</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/dreamfly/contact.php">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Card-->
    <div class="card shadow mb-5 bg-white rounded">
        <!--Card-Body-->
        <div class="card-body">
            <!--Card-Title-->
            <p class="card-title text-center shadow mb-5 rounded">Travel Booking Form</p>
            <form action="" method="post">
                <div class="icons text-center">
                    <i class="fa fa-plane fa-2x" aria-hidden="true"></i>
                    <i class="fa fa-taxi fa-2x" aria-hidden="true"></i>
                    <i class="fa fa-train fa-2x" aria-hidden="true"></i>
                </div>
                <hr>
                <p class="searchText"><strong>Search For Cheap Flights</strong></p>
                <!--First Row-->
                <div class="row mb-3 mt-3"> <label class="radiobtn"><input type="radio" name="flights" value="one_way">One
                        Way</label> <label class="radiobtn"><input type="radio" name="flights" value="round_trip">Round
                        Trip</label> </div>
                <!--Second Row-->
                <div class="row">
                    <div class="col-sm-6">
                         <select class="browser-default custom-select mb-4" name="from_city" id="select" required>
                            <option value="" disabled="" selected="">From City/Airport</option>
                            <option value="1">New Delhi</option>
                            <option value="2">Mumbai</option>
                            <option value="3">Bangalore</option>
                        </select> </div>
                    <div class="col-sm-6"> 
                        <select class="browser-default custom-select mb-4" name="to_city"id="select" required>
                            <option value="" disabled="" selected="">To City/Airport</option>
                            <option value="1">New Delhi</option>
                            <option value="2">Mumbai</option>
                            <option value="3">Bangalore</option>
                        </select> </div>
                </div>
                <!--Third Row-->
                <div class="row">
                    <div class="col-sm-6"> 
                        <input placeholder="&#xf073; Departing" type="datetime-local"
                       name="departing"  id="date-picker-example" class="form-control datepicker mb-4"
                            style="font-family:Arial, FontAwesome" required> </div>
                    <div class="col-sm-6"> 
                        <input placeholder="&#xf073; Arriving" type="datetime-local"
                        name="arriving" id="date-picker-example" class="form-control datepicker"
                            style="font-family:Arial, FontAwesome" required>
                    </div>
                </div>
                <!--Fourth Row-->
                <div class="row mt-4">
                    <div class="col-sm-6"> 
                        <select class="browser-default custom-select mb-4" name="travel_class" id="select" required>
                            <option value="" disabled="" selected="">Travel Class</option>
                            <option value="1">Economy Class</option>
                            <option value="2">First Class</option>
                            <option value="3">Business Class</option>
                        </select> </div>

                </div>
                <!--Fifth Row-->
                <div class="row">
                    <div class="col-sm-4"> 
                        <select class="browser-default custom-select mb-4" name="kids_count" id="select" required>
                            <option value="" disabled="" selected="">Kids(0-14)</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select> </div>
                    <div class="col-sm-4"> 
                        <select class="browser-default custom-select mb-4" name="adult_count" id="select" required>
                            <option value="" disabled="" selected="">Adults(15-64)</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select> </div>
                    <div class="col-sm-4"> 
                        <select class="browser-default custom-select mb-4" name="senior_count" id="select" required>
                            <option value="" disabled="" selected="">Seniors(65+)</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select> </div>
                </div> <button class="btn btn-primary" style="color=white" name="submit"  >Submit</button>
                <button class="btn btn-primary" style="color=white" name="submit"  >Cancel</button></div>
                
        </form>
    </div>





    <?php
if (isset($_POST['submit'])) {   

$severname="localhost";
$username="root";
$pass="";
$dbname="dreamfly";

$chepflight=$_POST["flights"];
$fromcity=$_POST["from_city"];
$tocity=$_POST["to_city"];
$departing=$_POST["departing"];
$arriving=$_POST["arriving"];
$travel_class=$_POST["travel_class"];
$kids_count=$_POST["kids_count"];
$adult_count=$_POST["adult_count"];
$senior_count=$_POST["senior_count"];




$conn =new mysqli($severname , $username , $pass , $dbname);

if($conn -> connect_error){
  die("connection failed: ". $conn->connect_error);
}


$sql="insert into flight_booking(flights,from_city,to_city,departing,arriving,travel_class,kids_count,adult_count,senior_count)
values('$chepflight','$fromcity','$tocity','$departing','$arriving','$travel_class','$kids_count','$adult_count','$senior_count')"; 



if($conn->query($sql)==TRUE){

   
        echo '<script>alert("Your flight booked successfully")</script>';
    


  
}
else{
  echo "Error: " . $sql ."<br />" . $conn->error;
}
$conn->close();
}
?>




<footer class="container">
        <!-- <p class="float-end"><a href="#">Back to top</a></p> -->
        <p>© 2021–2022 travel, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
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

</body>

</html>