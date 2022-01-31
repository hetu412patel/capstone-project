<!DOCTYPE html>
<html>
  <head>
    <title>Order form</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
      html, body {
      height: 100%;
      }
      body, input, select { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 16px;
      color: #eee;
      }
      h1, h3 {
      font-weight: 400;
      }
      h1 {
      font-size: 46px;
      letter-spacing: 0.4rem;
      text-transform: uppercase;
      text-decoration: underline;
      }
      h3 {
      color: #1c87c9;
      }
      .main-block, .info {
      display: flex;
      flex-direction: column;
      }
      .main-block {
      justify-content: center;
      align-items: center;
      width: 100%; 
      min-height: 100%;
      background: url("images/order3.jpg") no-repeat center;
      background-size: cover;
      }
      form {
      width: 80%; 
      padding: 25px;
      margin-bottom: 20px;
      background: rgba(0, 0, 0, 0.9);
      }
      input, select {
      padding: 5px;
      margin-bottom: 20px;
      background: transparent;
      border: none;
      border-bottom: 1px solid #eee;
      }
      input::placeholder {
      color: #eee;
      }
      option {
      background: black; 
      border: none;
      }
      .metod {
      display: flex; 
      }
      button {
      display: block;
      width: 200px;
      padding: 10px;
      margin: 20px auto 0;
      border: none;
      border-radius: 5px; 
      background: #1c87c9; 
      font-size: 14px;
      font-weight: 600;
      color: #fff;
      }
      button:hover {
      background: #095484;
      }
      @media (min-width: 568px) {
      .info {
      flex-flow: row wrap;
      justify-content: space-between;
      }
      input {
      width: 46%;
      }
      input.fname {
      width: 100%;
      }
      select {
      width: 48%;
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
      <h1>ORDER NOW</h1>
      <form action="order.php" method="POST">
      <?php 
      error_reporting(0);
        $email = "";
        $user = "";
        if(isset($_POST['submit'])){
          $email = $_POST["email"];
          $user = $_POST["name"];
              $subject = "Thanks for giving us order for your event. - MahendiArt";
              $message1 = "You will always receive latest updates from us. We will reach at your define address on given time. We will always in touch with you.";
              $sender = "From: hetakship412@gmail.com";
                  if(mail($email, $user, $subject, $message1, $sender)){
                    ?>
                    <div class="alert-success"><?php echo $user ?><?php echo " "; ?>Thanks for giving us order for your event.</div>
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
          mysqli_select_db($con,'order');
          $user = $_POST['name'];
          $email = $_POST['email'];
          $number = $_POST['number'];
          $todaydate = $_POST['today-date'];
          $orderdate = $_POST['order-date'];
          $dateofevent = $_POST['event-date'];
          $eventtime = $_POST['event-time'];
          $eventlocation = $_POST['event-location'];
          $eventtype = $_POST['event-type'];
          $noofguests = $_POST['noofguests'];
          $pickuptime = $_POST['pickuptime'];

          $query = "insert into mahendiorder(name, email, number, today-date, order-date, event-date, event-time, event-location, event-type, noofguests, pickuptime) 
          values('$user', '$email', '$number', '$todaydate', '$orderdate', '$dateofevent', '$eventtime', '$eventlocation', '$eventtype', '$noofguests', '$pickuptime')";
          // echo "<br> $query";
          mysqli_query($con,$query);
      
      ?>

        <div class="info">
          <input class="fname" type="text" name="name" placeholder="Full name" value="<?php echo $user ?>" required>
          <input type="email" name="email" placeholder="Email" value="<?php echo $email ?>" required>
          <input type="text" name="number" placeholder="Phone number" value="<?php echo $number ?>" required>
          <input type="text" name="today-date" placeholder="Today's date" value="<?php echo $todaydate ?>" required>
          <input type="text" name="order-date" placeholder="Order's date" value="<?php echo $orderdate ?>" required>
          <input type="text" name="event-date" placeholder="Date of event" value="<?php echo $dateofevent ?>" required>
          <input type="text" name="event-time" placeholder="Time of event" value="<?php echo $eventtime ?>" required>
          <input type="text" name="event-location" placeholder="Event location" value="<?php echo $eventlocation ?>" required>
          <input type="text" name="event-type" placeholder="Type of event" value="<?php echo $eventtype ?>" required>
          <select name="guests" value="<?php echo $noofguests ?>" required>
            <option value="number">Number of guests</option>
            <option value="10">10</option>
            <option value="20">20</option>
            <option value="30">30</option>
            <option value="40">40</option>
            <option value="50">50</option>
            <option value="50">More than 50</option>
          </select>
          <select name="pickuptime" value="<?php echo $pickuptime ?>" required>
            <option value="time">Pick up time</option>
            <option value="8">8:00am</option>
            <option value="9">9:00am</option>
            <option value="10">10:00am</option>
            <option value="12">12:00pm</option>
            <option value="1">1:00pm</option>
            <option value="3">3:00pm</option>
            <option value="6">6:00pm</option>
            <option value="7">7:00pm</option>
          </select>
        </div>
        <button class="button" type="submit" name="submit">Submit</button>
      </form>
    </div>
  </body>
</html>