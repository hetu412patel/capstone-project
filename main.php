<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Mahendi Design</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <header>
        <nav>
        <div class="logo"><span>M</span>ahendi<span>A</span>rt</div>
        <input type="checkbox" id="click">
        <label for="click" class="menu-btn">
            <i class="fas fa-bars"></i>
        </label>
        <ul>
            <li><a class="active" href="main.php">Home</a></li>
            <li><a href="aboutus.html">About</a></li>
            <li><a href="gallery.html">Gallery</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="order-booking.html">Order/Booking</a></li>
            <li><a href="contact.php">ContactUs</a></li>
        </ul>
        </nav>
    </header>
    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        
        
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/caresoul1.jpg" alt="Los Angeles" width="1400" height="660">
          </div>
          <div class="carousel-item">
            <img src="images/caresoul2.jpg" alt="Chicago" width="1400" height="660">
          </div>
          <div class="carousel-item">
            <img src="images/caresoul3.jpg" alt="New York" width="1400" height="660">
          </div>
        </div>
        
        
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
      
      <section class="my-5">
        <div class="py-5">
          <h1 class="text-center"><mark>About Us</mark></h1>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
              <img src="images/order.png" alt="" class="img-fluid aboutimg">
            </div>
            <div class="col-lg-6 col-md-6 col-12">
              <h2 class="display-4">Welcome to the MahendiArt</h2>
              <p class="py-3" id="b"><em>Join with us as a tutor or as a learner and earn money.</em></p><br>
              <p id="a">This is one earning platform. A person who design different types
              of mahendi can apply as a tutor and earn money. A person who learn the mahendi design is also
              join in this platform. There are many courses also available.</p>
              <a href="aboutus.html" class="btn btn-success">Check more</a>
            </div>
          </div>
        </div>
      </section>

      <section class="my-5">
      <div class="py-5">
          <h1 class="text-center"><mark>Our Detais & Services</mark></h1>
        </div>
      <div class="container">
        <div class="row">
            <div class="col-xl-3">
              <div class="single-box">
                <div class="icon-area"><i class="fa fa-users"></i></div>
                <div class="numbers"><h3>120+</h3></div>
                <div class="name" style="font-size: large;"><p>Tutor At Work</p></div>
              </div>
            </div>
            <div class="col-xl-3">
              <div class="single-box">
                <div class="icon-area"><i class="fa fa-users"></i></div>
                <div class="numbers"><h3>620+</h3></div>
                <div class="name" style="font-size: large;"><p>Satisfied Learner</p></div>
              </div>
            </div>
            <div class="col-xl-3">
              <div class="single-box">
                <div class="icon-area"><i class="fa fa-users"></i></div>
                <div class="numbers"><h3>480+</h3></div>
                <div class="name" style="font-size: large;"><p>Happy Clients</p></div>
              </div>
            </div>
            <div class="col-xl-3">
              <div class="single-box">
                <div class="icon-area"><i class="fa fa-users"></i></div>
                <div class="numbers"><h3>50+</h3></div>
                <div class="name" style="font-size: large;"><p>Working Teams</p></div>
              </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3">
              <div class="single-box">
                <div class="numbers"><h3>Instant Mahendi</h3></div>
                <div class="name"><p>We are here for you at any time using this instant service and solve user's problem. </p></div>
                <a href="services.html" class="btn btn-success">Check more</a>
              </div>
            </div>
            <div class="col-xl-3">
              <div class="single-box">
                <div class="numbers"><h3>Back-hand Mahendi</h3></div>
                <div class="name"><p>We also provide only back-hand side mahendi service for the user on their demand.</p></div>
                <a href="services.html" class="btn btn-success">Check more</a>
              </div>
            </div>
            <div class="col-xl-3">
              <div class="single-box">
                <div class="numbers"><h3>Tatoo Mahendi</h3></div>
                <div class="name"><p>If you interested in tatoo mahendi, for that also we provide a better service.</p></div>
                <a href="services.html" class="btn btn-success">Check more</a>
              </div>
            </div>
            <div class="col-xl-3">
              <div class="single-box">
                <div class="numbers"><h3>Finger Mahendi</h3></div>
                <div class="name"><p>If you interested in finger mahendi, for that also we provide a better service.</p></div>
                <a href="services.html" class="btn btn-success">Check more</a>
              </div>
            </div>
        </div>
      </div>
      </section>


      <section class="my-5">
      <div class="py-5">
          <h1 class="text-center"><mark>Your Feedback Is Important For Us</mark></h1>
        </div>
        <div class="w-50 m-auto">
          <form action="main.php" method="post">
          <?php 
          error_reporting(0);
            if(empty($experience)){
              $error = "select anyone...";
            }
              $email = "";
              $user = "";
              if(isset($_POST['submit'])){
                $email = $_POST["email"];
                $user = $_POST["name"];
                    $subject = "Thanks for giving your feedback. - MahendiArt";
                    $message1 = "You will always receive latest updates from us. And we won't share or sell your information to anyone.";
                    $sender = "From: hetakship412@gmail.com";
                        if(mail($email, $user, $subject, $message1, $sender)){
                          ?>
                          <div class="alert-success"><?php echo $user ?><?php echo " "; ?>Thanks for giving your feedback.</div>
                          <?php
                          $email = "";
                      }else{
                          ?>
                          <div class="alert-error">Failed while sending your email.</div>
                          <?php
                      }
                }
                $con=mysqli_connect('localhost','root');
                if($con){
                    // echo "connection sucessful";
                }else{
                    echo "No connection";
                }
                error_reporting(0);
                mysqli_select_db($con,'feedback');
                $experience = $_POST['rate'];
                $user = $_POST['name'];
                $email = $_POST['email'];
                $number = $_POST['number'];
                $message = $_POST['comment'];

                $query = "insert into feedback(experience, name, email, mobileno, comment) 
                values('$experience', '$user', '$email', '$number', '$message')";
                // echo "<br> $query";
                mysqli_query($con,$query);
          ?>
            <div class="form-group">
              <label for="experiance">How do you rate your overall experiance</label><span style="color: red;"><?php echo "       "; ?>*<?php echo $error ?></span><br>
                <input type="radio" name="rate" value="bad">Bad
                <input type="radio" name="rate" value="average">Average
                <input type="radio" name="rate" value="good">Good
                <input type="radio" name="rate" value="excellent">Excellent
            </div>
            <div class="form-group">
              <label for="username">User-Name:</label>
                <input type="text" name="name" class="form-control" value="<?php echo $user ?>" required>
            </div>
            <div class="form-group">
              <label for="email">User-Email:</label>
                <input type="email" name="email" class="form-control" value="<?php echo $email ?>" required>
            </div>
            <div class="form-group">
              <label for="username">Mobile-Number:</label>
                <input type="text" name="number" class="form-control" value="<?php echo $number ?>" required>
            </div>
            <div class="form-group">
              <label for="comments">Comments:</label>
                <textarea name="comment" cols="30" rows="5" class="form-control" value="<?php echo $message ?>" required></textarea>
            </div>
            <button type="submit" class="btn btn-success" name="submit">Post Comment</button>
          </form>
        </div>
      </section>


      
          
      <footer>
        <div class="content1">
          <div class="left box">
            <div class="upper">
              <div class="topic">About us</div>
              <p>This is one earning and learning platform. A person who design different types
                of mahendi can apply as a tutor and earn money. A person who want to learn the mahendi design is also
                join at this platform. There are many different interesting courses are available.</p>
            </div>
            <div class="lower">
              <div class="topic">Contact us</div>
              <div class="phone">
                <a href="#"><i class="fa fa-phone"></i>+000 0000 0000</a>
              </div>
              <div class="email">
                <a href="#"><i class="fa fa-envelope"></i>abc@gmail.com</a>
              </div>
            </div>
          </div>
          <div class="middle box">
            <div class="topic">Our Task</div>
            <div><a href="#">Designing</a></div>
            <div><a href="#">Thinking</a></div>
            <div><a href="#">Learning</a></div>
            <div><a href="#">Teaching</a></div>
            <div><a href="#">Multitasking</a></div>
            
          </div>
          <div class="right box">
            <div class="topic">Subscribe us</div>
            <form action="main.php" method="post">
              <?php 
              $useremail = "";
              if(isset($_POST['subscribe'])){
                $useremail = $_POST["email"];
                if(filter_var($useremail, FILTER_VALIDATE_EMAIL)){
                    $subject = "Thanks for subscrbing us - MahendiArt";
                    $message = "You will always receive latest updates from us. And we won't share or sell your information to anyone.";
                    $sender = "From: hetakship412@gmail.com";
                        if(mail($useremail, $subject, $message, $sender)){
                          ?>
                          <div class="alert-success"><?php echo $useremail ?><?php echo " "; ?>Thanks for subscribing us.</div>
                          <?php
                          $useremail = "";
                      }else{
                          ?>
                          <div class="alert-error">Failed while sending your email.</div>
                          <?php
                      }
                }else{
                    ?>
                    <div class="alert-error"><?php echo $useremail ?><?php echo " " ?>is not a valid email!</div>
                    <?php
                }
            }
            $con=mysqli_connect('localhost','root');
            if($con){
                // echo "connection sucessful";
            }else{
                echo "No connection";
            }
            error_reporting(0);
            mysqli_select_db($con,'subscribe');
            $useremail = $_POST['email'];
            
            $query = "insert into subscriber(email) 
            values('$useremail')";
            // echo "<br> $query";
            mysqli_query($con,$query);

              ?>
              <input type="email" placeholder="Enter email address" name="email" value="<?php echo $useremail ?>" required>
              <input type="submit" name="subscribe" value="Send">
              <div class="media-icons">
                <a href="#"><i class="fa fa-facebook-f"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
              </div>
            </form>
          </div>
        </div>
        <div class="bottom">
          <p>Copyright © 2021 <a href="#">MahendiArt</a> All rights reserved</p>
        </div>
      </footer>
</body>
</html>