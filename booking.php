<!DOCTYPE html>
<html>
  <head>
    <title>Booking form</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 16px;
      color: #eee;
      }
      body {
      background: url("images/order6.jpeg") no-repeat center;
      background-size: cover;
      }
      h1, h2 {
      text-transform: uppercase;
      font-weight: 400;
      }
      h2 {
      margin: 0 0 0 8px;
      }
      .main-block {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100%;
      padding: 25px;
      background: rgba(0, 0, 0, 0.5); 
      }
      .left-part, form {
      padding: 25px;
      }
      .left-part {
      text-align: center;
      }
      .fa-graduation-cap {
      font-size: 72px;
      }
      form {
      background: rgba(0, 0, 0, 0.4); 
      }
      .title {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
      }
      .info {
      display: flex;
      flex-direction: column;
      }
      input, select {
      padding: 5px;
      margin-bottom: 30px;
      background: transparent;
      border: none;
      border-bottom: 1px solid #eee;
      }
      input::placeholder {
      color: #eee;
      }
      option:focus {
      border: none;
      }
      option {
      background: black; 
      border: none;
      }
      .btn-item, button {
      padding: 10px 5px;
      margin-top: 20px;
      border-radius: 5px; 
      border: none;
      background: #26a9e0; 
      text-decoration: none;
      font-size: 15px;
      font-weight: 400;
      color: #fff;
      }
      .btn-item {
      display: inline-block;
      margin: 20px 5px 0;
      }
      button {
      width: 100%;
      }
      button:hover, .btn-item:hover {
      background: #85d6de;
      }
      @media (min-width: 568px) {
      html, body {
      height: 100%;
      }
      .main-block {
      flex-direction: row;
      height: calc(100% - 50px);
      }
      .left-part, form {
      flex: 1;
      height: auto;
      }
      }
      .alert-success{
        margin: -9px 0 12px 0;
        padding: 10px;
        border-radius: 5px; 
        color: #155724;
        background: #d4edda;
        border: 1px solid #c3e6cb;
      }
      .alert-error{
        margin: -9px 0 12px 0;
        padding: 10px;
        border-radius: 5px; 
        color: #721c24;
        background: #f8d7da;
        border: 1px solid #f5c6cb;
      }
    </style>
  </head>
  <body>
    <div class="main-block">
      <div class="left-part">
        <i class="fas fa-graduation-cap"></i>
        <h1>Book into our courses</h1>
        <p>MahendiArt provides free 1-2 week trial for our classes and provide a earning platform as well as a better training for our learner.</p>
        <div class="btn-group">
          <a class="btn-item" href="aboutus.html">More about courses</a>
          <a class="btn-item" href="services.html">our services</a>
        </div>
      </div>
      <form action="booking.php" method="POST">
      <?php 
      error_reporting(0);
        $email = "";
        $user = "";
        if(isset($_POST['submit'])){
          $email = $_POST["email"];
          $user = $_POST['name'];
              $subject = "Thanks for reserved your seat. - MahendiArt";
              $message1 = "You will always receive latest updates from us. Your classes information we will send on your email or on your contact number. And we won't share or sell your information to anyone.";
              $sender = "From: hetakship412@gmail.com";
                  if(mail($email, $user, $subject, $message1, $sender)){
                    ?>
                    <div class="alert-success"><?php echo $user ?><?php echo " "; ?>Thanks for reserved your seat.</div>
                    <?php
                    $email = "";
                    $user = "";
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
          mysqli_select_db($con,'booking');
          $user = $_POST['name'];
          $email = $_POST['email'];
          $number = $_POST['number'];
          $address = $_POST['address'];
          $role = $_POST['role'];

          $query = "insert into booking(name, email, number, address, role) 
          values('$user', '$email', '$number', '$address', '$role')";
          // echo "<br> $query";
          mysqli_query($con,$query);

      ?>



        <div class="title">
          <i class="fas fa-pencil-alt"></i><pre>  </pre> 
          <h2>Book your seat here</h2>
        </div>
        <div class="info">
          <input class="fname" type="text" name="name" placeholder="Full name" value="<?php echo $user ?>" required>
          <input type="email" name="email" placeholder="Email" value="<?php echo $email ?>" required>
          <input type="text" name="number" placeholder="Phone number" value="<?php echo $number ?>" required>
          <input type="text" name="address" placeholder="Address" value="<?php echo $address ?>" required>
          <select name="role" value="<?php echo $role ?>" required>
            <option value="course-type">Select your Role</option>
            <option value="learner">Learner</option>
            <option value="tutor">Tutor</option>
            <option value="other">Others</option>
          </select>
        </div>
        <button type="submit" name="submit">Submit</button>
      </form>
    </div>
  </body>
</html>