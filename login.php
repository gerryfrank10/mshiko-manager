<?php
   include("connect.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
    
      $myusername = $_POST['uname'];
      $mypassword = $_POST['password'];

      if(empty(trim($_POST["uname"]))){
        $username_err = "Please enter username";
    } else{
        $username = trim($_POST["uname"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
      // Prepare a select statement
      $sql = "SELECT id FROM users WHERE uname = '$myusername' and pass = '$mypassword'";

      $result = mysqli_query($db,$sql)or die(mysqli_error($db));
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
         $_SESSION['login_id'] = $row['id'];
         
         header("location: shop.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.9.3, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.9.3, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo-128x128-1.png" type="image/x-icon">
  <meta name="description" content="Web Page Builder Description">
  <title>Login | Mshiko Manager</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
  <section class="menu cid-s5SRSarPQi" once="menu" id="menu1-4">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="https://mobirise.co">
                         <img src="assets/images/logo-150x150.png" alt="Mobirise" title="" style="height: 3.8rem;">
                    </a>
                </span>
            </div>
        </div>

    </nav>
</section>

<section class="mbr-section content5 cid-s5VRgyCWkH mbr-parallax-background" id="content5-q">

    

    <div class="mbr-overlay" style="opacity: 0.7; background-color: rgb(35, 35, 35);">
    </div>

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">LOGIN</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-white pb-3 mbr-fonts-style display-5"><strong>A SINGLE USERNAME AND PASSWORD GETS YOU IN!</strong><br><strong>SIGNED IN ALREADY?</strong><br><strong><a href="signup.php">SIGN UP HERE</a></strong></h3>
                
                
            </div>
        </div>
    </div>
</section>

<section class="mbr-section form1 cid-s5T49cDFOb" id="form1-6">

    

    
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                
                
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" data-form-type="formoid">
                    <form class="mbr-form" action="" method="post" data-form-title="Mobirise Form">
                        <div class="row row-sm-offset">
                            <div class="col-md-4 multi-horizontal" data-for="name">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="name-form1-6">Name</label>
                                    <input type="text" class="form-control" name="name" data-form-field="Name" required="" id="name-form1-6">
                                </div>
                            </div>
                        </div>
                        <div class="row row-sm-offset">
                            <div class="col-md-4 multi-horizontal" data-for="email">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="email-form1-6">Password</label>
                                    <input type="password" class="form-control" name="email" data-form-field="Email" required="" id="email-form1-6">
                                </div>
                            </div>
                            </div>
                        <span class="input-group-btn"><button href="" type="submit" class="btn btn-form btn-secondary display-4">LOGIN</button></span>
                    </form>
            </div>
        </div>
    </div>
</section>

<section once="" class="cid-s5T3FyOMpk" id="footer6-5">

    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="col-12">
                <p class="mbr-text mb-0 mbr-fonts-style display-7"><em>
                    © Copyright <?php echo date("Y"); ?> MshikoManager - All Rights Reserved
                </em></p>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>
  
  
</body>
</html>