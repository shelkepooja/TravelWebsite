<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>DreamFly Travelling Website</title>
  <!-- map location icon -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
    integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<style>
  .btn {
    background-color: orange;

  }

  section {
    padding: 10px 10px;

  }

  .heading {
    text-align: center;
    padding-bottom: 3rem;
    padding-top: 2rem;
    color: var(--text-color-1);
    /* font-size: 4rem; */

  }
   h1:after{
        content: '';
        position: absolute;
        left: 50%;
        /* bottom: 10px; */
        transform: translateX(-50%);
        height: 5px;
        width: 100px;
        border-radius: 2px;
        background-color: orange;
        margin-top:60px;
    }

  .packages .box-container {
    width: 80%;
    margin-left: 160px;
    /* margin-right: 100px; */
    margin-bottom: 50px;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(20rem, .5fr));
    gap: 1.5rem;
  }

  .packages .box-container .box {
    background-color: rgb(255, 253, 253);
    border-radius: .5rem;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);

  }

  .packages .box-container .box .image {
    height: 20rem;
    width: 100%;
    padding: 1.5rem;
    position: relative;
  }

  .packages .box-container .box .image img {
    height: 100%;
    width: 100%;
    object-fit: cover;
    border-radius: .5rem;

  }

  .packages .box-container .box .image h3 {
    position: absolute;
    top: 2.5rem;
    left: 2.5rem;
    font-size: 1rem;
    color: #fff;
    background: rgba(0, 0, 0, .5);
    border-radius: .5rem;
    font-weight: lighter;
    padding: .5rem 1.5rem;
  }

  .packages .box-container .box .image h3 i {
    color: orange;
  }

  .packages .box-container .box .content {
    padding: 1.5rem;
    padding-top: 0;
  }

  .packages .box-container .box .content .price {
    font-weight: 600;
    /* color: orange */
    font-size: 1.5rem;

  }

  .packages .box-container .box .content .price span {
    font-weight: lighter;
    color: grey;
    font-size: 1.0rem;
    text-decoration: line-through;
    margin: 20px;

  }
  .country{
    margin-left: 180px;
    margin-bottom: 20px;
    color:rgb(190, 159, 36)
  }
</style>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">DreamFly</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active"  href=" http://localhost/dreamfly/home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/dreamfly/about.php">About</a>
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

  <!-- pakages section -->

  <section class="packages" id="packages">
    <h1 class="heading">Our packages</h1>
    <?php
// if (isset($_POST['readmore'])) {   
    $severname="localhost";
    $username="root";
    $pass="";
    $dbname="dreamfly";
    
    $conn =new mysqli($severname , $username , $pass , $dbname);

    if($conn -> connect_error){
      die("connection failed: ". $conn->connect_error);
    }
    
    
    $sql="SELECT * FROM `destination` WHERE `country_name`='India'";
    
    $result=$conn->query($sql);
 

foreach($result->fetch_assoc() as $row){?>

    <div class="box-container">  
      <div class="box">
        <div class="image">
          
      <?php 
   echo '<img src="data:img/jpeg;base64,'.base64_encode($row['destination_image']).'" >';?>
          
          <h3><i class='fas fa-map-marker-alt'></i><?= $row['destination_name']; ?></h3>

        </div>
        <div class="content">
          <div class="price"><?= $row["price_original"]; ?><span><?= $row["price_offered"]; ?></span></div>
          <div class="city"><?= $row["city_name"]; ?></div>
          <p><?= $row["description"]; ?></p>
          <a href="#" class="btn">Book Now</a>
        </div>
      </div>
    </div>
<!-- <?php  $conn->close(); } ?> -->

  </section>

  <footer class="container2">
    <!-- <p class="float-end"><a href="#">Back to top</a></p> -->
    <center>
      <p class="footer">© 2021–2022 travel, Inc.</p>
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


</body>

</html>