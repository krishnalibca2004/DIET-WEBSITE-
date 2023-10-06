<?php
session_start();
include_once('connection.php');

// if(isset($_SESSION['name']) && isset($_SESSION['username'] )){

// }
$_SESSION['name'];
$_SESSION['username'];
?>
<!doctype html>
<html lang="en">

<head>
  <title>Welcome Form</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="home.css">
<style>
    .container{
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        padding: 15px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      
    }.container span{
        background-color: gold;
        color: white;
        padding: 15px;
        margin: 10pxpx;
        border-radius: 8px;
        font-size: 25px;
        font-weight: 600;
        letter-spacing: 5px;
        text-transform: uppercase;
    }.container p{
        margin: 20px;
    }.container .btn{
        margin-top: -30px;
        width: 150px;
        background-color: blue;
        color: white;
        font-weight: 500;
        letter-spacing: 5px;
        text-transform: uppercase;
        border-radius: 20px;
    }.container .btn:hover{
        margin-top: -30px;
        width:200px;
        background-color: darkorange;
        font-weight: 500;
        transition: 1s;
        color: white;
    }
</style>
</head>


<body>
    <nav>
        <div class="nav-bar">
            <i class='bx bx-menu sidebarOpen' ></i>
            <!-- Replace "CodingLab" with an image logo and link it to the home page -->
            <span class="logo navLogo"><a href="welcome.php">Docami</a></span>

            <div class="menu">
                <div class="logo-toggle">
                    <!-- You can keep this part as it is -->
                   
                    <i class='bx bx-x siderbarClose'></i>
                </div>

                <!-- The rest of your navigation menu code remains the same -->
                <ul class="nav-links">
    <li><a href="#Home" style="color: white;"><span class="nav-link-hover"></span>Home</a></li>
    <li><a href="bmi.html"><span class="nav-link-hover"></span>BMI</a></li>
    <li><a href="diet.html"><span class="nav-link-hover"></span>DIET</a></li>
    <li><a href="bmr.html"><span class="nav-link-hover"></span>BMR</a></li>
    <li><a href="calorie.html"><span class="nav-link-hover"></span>CALORIES</a></li>
    <li><a href="about.html"><span class="nav-link-hover"></span>ABOUT</a></li>
    <li><a href="profile.html"><span class="nav-link-hover"></span>PROFILE</a></li>
    <li><a href="notification.html"><span class="nav-link-hover"></span>NOTIFY ME</a></li>
    <li><a href="index.php" class="#btn" style="color: white;">LOGOUT</a></li>
</ul>

            </div>

        
  
                </div>
            </div>
        </div>
    </nav>



    <section class="Home" id="Home">

    <div class="container">

        <div class="row align-items-center">
            <div class="col-lg-6 text-center">
                <img class="img-fluid" src="zdjecie1.jpg" alt="obrazek_zdrowych_owoców">
            </div>
            <div class="col-lg-6"><br><br><br><br>
                <h1 class="font-weight-bold">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DOCAMI</h1>
                <p>Basically, Docami is a diet website designed to help users 
                    track and record their daily food intake and dietary habits. Users typically input
                     details about the foods they've consumed, including meal descriptions, 
                     portion sizes, and any relevant nutritional information.
                      The website will offer features like Calorioe Calculator,BMR Calculator, BMI Calculator and diet plans according to it.
                       This data can then be used to analyze 
                      and monitor dietary patterns, calorie intake, nutrient consumption, and other relevant information, 
                      assisting users in making informed decisions about their nutrition and health goals.
                </p>
                
            </div>
        </div>
        <div class="row align-items-center">

            <div class="col-lg-6">
                <h1 class="font-weight-bold"> Why a healthy diet??</h1>
                <p>A healthy diet is essential for overall well-being. It provides essential nutrients,
                     supports optimal physical and mental function,
                      reduces the risk of chronic diseases like heart disease and diabetes, 
                      and helps maintain a healthy weight.</p>
                
            </div>
            <div class="col-lg-6 text-center">
                <img class="img-fluid" src="zdjecie2.JPG" alt="obrazek_zdrowych_produktów">
            </div>

        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 text-center">
                <img class="img-fluid" src="zdjecie3.jpg" alt="obrazek_nadasanego_dziecka">
            </div>
            <div class="col-lg-6">
                <h1 class="font-weight-bold">An underweight dont worry!!</h1>
                <p>Being underweight can impact our health and confidence, but there's no need to worry
                     we're here to support you. Consult with our healthcare professionals and nutritionists for expert
                      guidance on healthy weight gain strategies, balanced diets, and lifestyle changes. Lean on your 
                      supportive network of friends and family as we embark on this journey to better health together.</p>
                
            </div>
        </div>
        <div class="row align-items-center">

            <div class="col-lg-6">
                <h1 class="font-weight-bold">An overweight dont worry!!</h1>
                <p>Struggling with excess weight can affect our health and self-esteem, but rest assured, we're here to help. 
                    Connect with our healthcare professionals and nutritionists for expert advice on effective weight management, 
                    healthy eating plans, and lifestyle adjustments. Count on the support of your friends and family as we work 
                    together on the path to improved health and well-being.</p>
                
            </div>
            <div class="col-lg-6 text-center">
                <img class="img-fluid" src="zdjecie4.jpg" alt="obrazek_zdrowych_produktów">
            </div>

        </div>

    </div>
    <!-- Stopka powtarzalna na każdej stronie -->
   
    <!-- Poniżej skrypty bootstrapa z pakietu startowego -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>







  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>