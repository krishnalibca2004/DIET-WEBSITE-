<!doctype html>
<html lang="en">

<head>
  <title>Login</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <!-- swiper cdn link -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <!-- custom css link -->
    
  <!-- Bootstrap CSS v5.2.1 -->
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

  <link rel="stylesheet" href="style.css">
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
                            <span class="logo"><a href="">CodingLab</a></span>
                            <i class='bx bx-x siderbarClose'></i>
                        </div>
          
                        <!-- The rest of your navigation menu code remains the same -->
                        <ul class="nav-links">
                          <li><a href="index.php" style="color: white;"><span class="nav-link-hover"></span>Home</a></li>
                          <li><a href="index.php"><span class="nav-link-hover"></span>BMI</a></li>
                          <li><a href="index.php"><span class="nav-link-hover"></span>DIET</a></li>
                          <li><a href="index.php"><span class="nav-link-hover"></span>BMR</a></li>
                          <li><a href="index.php"><span class="nav-link-hover"></span>CALORIES</a></li>
                          <li><a href="index.php"><span class="nav-link-hover"></span>ABOUT</a></li>
                          <li><a href="index.php"><span class="nav-link-hover"></span>PROFILE</a></li>
                          <li><a href="index.php"><span class="nav-link-hover"></span>NOTIFY ME</a></li>
                          <li><a href="index.php"><span class="nav-link-hover"></span>signup/login</a></li>
                      </ul>
                    </div>
          
                
          
                        </div>
                    </div>
                </div>
            </nav>

  <section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex align-items-center justify-content-center h-100">
        <div class="col-md-8 col-lg-7 col-xl-6">
          <img src="login.jpeg" class="img-fluid" alt="Phone image" height="300px" width="600px">
        </div>
        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
          <form action="login.php" method="post">
            <p class="text-center h1 fw-bold mb-4 mx-1 mx-md-3 mt-3">Login </p>
            <!-- Email input -->
            <div class="form-outline mb-4">
              <label class="form-label" for="form1Example13"> <i class="bi bi-person-circle"></i> Username</label>
              <input type="email" id="form1Example13" class="form-control form-control-lg py-3" name="username" autocomplete="off" placeholder="enter your e-mail" style="border-radius:25px ;" />

            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <label class="form-label" for="form1Example23"><i class="bi bi-chat-left-dots-fill"></i> Password</label>
              <input type="password" id="form1Example23" class="form-control form-control-lg py-3" name="password" autocomplete="off" placeholder="enter your password" style="border-radius:25px ;" />

            </div>


            <!-- Submit button -->
            <!-- <button type="submit" class="btn btn-primary btn-lg">Login in</button> -->
            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
              <input type="submit" value="Sign in" name="login" class="btn btn-warning btn-lg text-light my-2 py-3" style="width:100% ; border-radius: 30px; font-weight:600;" />
            </div>

          </form><br>
          <palign="center">i don't have any account <a href="register.php" class="text-warning" style="font-weight:600;text-decoration:none;">Register Here</a></p>
        </div>
      </div>
    </div>
  </section>





<!-- jquery cdn link -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- swiper cdn link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<!-- custom js link -->
<script src="script.js"></script>


  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>