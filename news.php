<!DOCTYPE html>
<html lang="ar">
<head>
    <title>التسجيل</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
</head>
<body class="single-page blog-page">
    <header class="site-header">
        <div class="nav-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                        <div class="site-branding d-flex align-items-center">
                            <a class="d-block" href="index.html" rel="home"><img class="d-block" src="images/logo.png" alt="logo"></a>
                        </div><!-- .site-branding -->
            <nav class="site-navigation d-flex justify-content-end align-items-center">
                            <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-items-center">
                                <li class="current-menu-item"><a href="index.html">الرئيسية</a></li>
                                <li><a href="about.html">من نحن</a></li>
                                <li><a href="services.html">خداماتنا</a></li>
                                <li><a href="news.html">التسجيل</a></li>
                                <li><a href="login.html">تسجيل الدخول</a></li>
                                <li><a href="product.html">البحث</a></li>
                                <li><a href="contact.html">تواصل معنا</a></li>


                                <li class="call-btn button gradient-bg mt-3 mt-md-0">
                                    <a class="d-flex justify-content-center align-items-center" href="#"><img src="images/emergency-call.png"> +34 586 778 8892</a>
                                </li>
                            </ul>
                        </nav><!-- .site-navigation -->

                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .nav-bar -->

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>News</h1>

                    <div class="breadcrumbs">
                        <ul class="d-flex flex-wrap align-items-center p-0 m-0">
                            <li><a href="#">الرئيسية</a></li>
                            <li>التسجيل </li>
                        </ul>
                    </div><!-- .breadcrumbs -->
                </div>
            </div>
        </div>

        <?php include('server.php') ?>

<!DOCTYPE html>

<html lang="en">

<head>

 <meta charset="utf-8">

 <meta http-equiv="X-UA-Compatible" content="IE=edge">

 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <meta name="description" content="">

 <meta name="author" content="">

 <title>SB Admin - Start Bootstrap Template</title>

 <!-- Bootstrap core CSS-->

 <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

 <!-- Custom fonts for this template-->

 <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

 <!-- Custom styles for this template-->

 <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

 <div class="container">

   <div class="card card-register mx-auto mt-5">

     <div class="card-header">Register an Account</div>

     <div class="card-body">

       <form method="post" action="register.php">

         <?php include('errors.php'); ?>

         <div class="form-group">

           <div class="form-row">

             <div class="col-md-12">

               <label for="exampleInputName">Username</label>

               <input class="form-control" id="exampleInputName" type="text"   name="username" value="<?php echo $username; ?>" >

             </div>

           </div>

         </div>

         <div class="form-group">

           <label for="exampleInputEmail1">Email address</label>

           <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" name="email" value="<?php echo $email; ?>" >

         </div>

         <div class="form-group">

           <div class="form-row">

             <div class="col-md-6">

               <label for="exampleInputPassword1">Password</label>

               <input class="form-control" id="exampleInputPassword1" type="password" name="password_1" >

             </div>

            <div class="col-md-6">

               <label for="exampleInputPassword1">Confirm Password</label>

               <input class="form-control" id="exampleInputPassword2" type="password" name="password_2" >

             </div>

           </div>

         </div>

          <button type="submit" class="btn btn-primary btn-block" name="reg_user">Register</button>

       </form>

       <div class="text-center">

         <a class="d-block small mt-3" href="login.html">Login Page</a>

           <a class="d-block small" href="forgot-password.html">Forgot Password?</a>

       </div>

     </div>

   </div>

 </div>

 <!-- Bootstrap core JavaScript-->

 <script src="vendor/jquery/jquery.min.js"></script>

 <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 <!-- Core plugin JavaScript-->

 <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>


                    <div class="col-12 col-md-6 col-lg-4 mt-5 mt-md-0">
                        <div class="foot-links">
                          <h2>روابط سريعة</h2>

                          <ul class="p-0 m-0">
                              <li><a href="index.html">الرئيسية</a></li>
                              <li><a href="about.html">من نحن</a></li>
                              <li><a href="#">الاقسام</a></li>
                              <li><a href="contact.html">تواصل معنا</a></li>
                              <li><a href="news.html">الاسئلة الاكثر شيوعا</a></li>
                              <li><a href="services.html">شهادات</a></li>
                            </ul>
                        </div><!-- .foot-links -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer-widgets -->
    </footer><!-- .site-footer -->

    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='js/swiper.min.js'></script>
    <script type='text/javascript' src='js/jquery.countdown.min.js'></script>
    <script type='text/javascript' src='js/circle-progress.min.js'></script>
    <script type='text/javascript' src='js/jquery.countTo.min.js'></script>
    <script type='text/javascript' src='js/jquery.barfiller.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>
</body>
</html>
