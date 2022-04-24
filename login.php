<?php include "connection.php";
if(isset($_POST['save']))
{
    // Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$sql = "INSERT INTO `login` (`Email`, `Password`) VALUES ('$Email', '$Password')";
if(mysqli_query($conn,$sql)){
    echo "Records added successfully.";
    
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
mysqli_close($conn);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Font Nunito -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- CSS Stylesheet -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" href="imgs/favicon.ico">
    <title>Login</title>
</head>

<body>
    <!-- Navbar -->
    <nav id="mainNavbar" class="navbar navbar-expand-lg navbar-light bg-light fixed-top py-0">
        <div class="container">
            <a href="index.html" class="img-fluid navbar-brand"><img src="nav-logo.jpg" class="img-hover"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="justify-content-end collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item pr-2">
                        <a href="index.html" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="login.html" class="nav-link">Login</a>
                            
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            
                        </div>
                    </li>
                    <li class="nav-item pr-2">
                        <a href="register.html" class="nav-link">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Login--->
    <h1 class="display-4 section-heading form-gap mb-5 text-center">Login</h1>
    <section id="login-form" class="container">
        <div class="col-lg-5 col-md-7 login-form card">
            <div class="card-body my-4">
                <div class="container">
                <form action="login.php" method="post">
                    <form class="mb-4">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="Email" class="form-control" id="Email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="Password" class="form-control" id="Password" placeholder="Password" required>
                        </div>
                        <button type="submit" name="save" id="submit" value="submit" class="mt-3 btn btn-lg btn-primary slide-btn">Login</button>
                    </form>
                    <p class="d-inline">Haven't registered yet? </p><span class="a-underline"><a href="register.html">Register now</a></span>
                </div>
            </div>
        </div>

    </section><br><br><br>

   <!-- Contact Us -->
    <footer id="contact-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-5 center vertical-center">
                    <img src="logo.png" class="footer-logo img-fluid img-hover">
                </div>
                <div class="col-4 col-sm-2 center">
                    <ul>
                        <li>
                            <p><a href="index.html">Home</a></p>
                        </li>
                        <li>
                            <p><a href="login.html">Login</a></p>
                        </li>
                        <li>
                            <p><a href="register.html">Register</a></p>
                        </li>
                    </ul>
                </div>
                <div class="col-8 col-sm-5 center">
                    <ul>
                        <li>
                            <p><i class="fab fa-instagram mr-2 "></i><a href="# ">EHS</a></p>
                        </li>
                        <li>
                            <p><i class="fab fa-facebook mr-2 "></i><a href="# ">EHS</a></p>
                        </li>
                        <li>
                            <p><i class="fab fa-twitter mr-2 "></i><a href="# ">EHS</a></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>