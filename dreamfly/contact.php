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
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .pagebody{
        height: 100vh;
        width: 100%;
    }
    .container{
        position: relative;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px 100px;

    }
    .contact-box{
        max-width: 1000px;
        display: grid;
        grid-template-columns: repeat(2,1fr);
        justify-content: center;
        align-items: center;
        text-align: center;
        background-color: #fff;
        box-shadow: 0px 0px 19px 5px rgba(0, 0, 0, 0.19);
    }
    .left{
        background-size: cover;
        height: 80%;

    }
    .right{
        padding: 25px 40px;
    }
    h2{
        position: relative;
        padding: 0 0 10px;
        margin-bottom: 10px;
    }
    h2:after{
        content: '';
        position: absolute;
        left: 50%;
        bottom: 0;
        transform: translateX(-50%);
        height: 4px;
        width: 60px;
        border-radius: 2px;
        background-color: orange;
    }
    .field{
        width: 110%;
        border: 2px solid rgba(0,0,0,0);
        outline: none;
        background-color: rgba(230, 230, 230, 0.6);
        padding: 0.5rem 1rem;
        font-size: 1.1rem;
        margin-bottom: 22px;
        transition: .3s;

    }
    .field:hover{
        background-color: rgba(41, 40, 39, 0.1);
    }
    textarea{
        min-height: 150px;
    }
    .btn{
        width: 100%;
        padding: 0.5rem 1rem;
        background-color: orange;
        color: #fff;
        font-size: 1.1rem;
        border: none;
        outline: none;
        cursor: pointer;
        transition: .3s;
    }
    .btn:focus{
        background-color: #27ae60;
    }

    
</style>

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
                        <a class="nav-link" href="http://localhost/dreamfly/book.php">Book</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="http://localhost/dreamfly/contact.php">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="pagebody">
        <div class="container">
            <div class="contact-box">
                <div class="left">
                    <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3748.9578963964145!2d73.76192931439091!3d20.010281727140644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddeb80dce9a655%3A0x1f761cea04933847!2sKBT%20Circle!5e0!3m2!1sen!2sin!4v1649746573096!5m2!1sen!2sin"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
                </div>
                <div class="right">
                    <h2>Contact Us</h2>
                    <form action="" method="post">

                    <input type="text" class="field" name="name" required placeholder="Name">
                    <input type="text" class="field" name="email" required placeholder="Email" />
                    <input type="text" class="field" name="phone" required placeholder="Phone" />
                    <textarea placeholder="Message" name="msg" required class="field"></textarea>
                    <button class="btn" name="submit">Send</button>

                </form>

                </div>
            </div>
        </div>
    </div>




    <?php
if (isset($_POST['submit'])) {   

$severname="localhost";
$username="root";
$pass="";
$dbname="dreamfly";

$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$msg=$_POST["msg"];
 




$conn =new mysqli($severname , $username , $pass , $dbname);

if($conn -> connect_error){
  die("connection failed: ". $conn->connect_error);
}


$sql="insert into contact_page(name,email,phone,msg)
values('$name','$email','$phone','$msg')"; 


      
if($conn->query($sql)==TRUE){

  
        echo '<script>alert("Your contact save successfully")</script>';
    }


  

else{
  echo "Error: " . $sql ."<br />" . $conn->error;
}
$conn->close();
}
?>


    <footer class="container">
        
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

</body>

</html>