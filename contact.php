<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            min-height: 100vh;
            background: url(images/contact.jpg) no-repeat;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .contact-section {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .contact-info {
            color: white;
            max-width: 500px;
            line-height: 65px;
            padding-left: 50px;
            font-size: 18px;
        }

        .contact-info i {
            margin-right: 20px;
            font-size: 25px;
        }

        .contact-form {
            max-width: 700px;
            margin-right: 50px;
        }

        .contact-info,
        .contact-form {
            flex: 1;
        }

        .contact-form h2 {
            color: white;
            text-align: center;
            font-size: 35px;
            text-transform: uppercase;
            margin-bottom: 30px;
        }

        .contact-form .text-box {
            background: black;
            color: white;
            border: none;
            width: calc(50% - 10px);
            height: 50px;
            padding: 12px;
            font-size: 15px;
            border-radius: 5px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            opacity: 0.9;
        }

        .contact-form .text-box:first-child {
            margin-right: 15px;
        }

        .contact-form textarea {
            background: black;
            color: white;
            border: none;
            width: 100%;
            padding: 12px;
            font-size: 15px;
            min-height: 200px;
            max-height: 400px;
            resize: vertical;
            border-radius: 5px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            opacity: 0.9;
        }

        .contact-form .send-btn {
            float: right;
            background: #2E94E3;
            color: white;
            border: none;
            width: 120px;
            height: 40px;
            font-size: 15px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
            transition-property: background;
        }

        .contact-form .send-btn:hover {
            background: #0582E3;
        }

        @media screen and (max-width:950px) {
            .contact-section {
                flex-direction: column;
            }

            .contact-info .contact-form {
                margin: 30px 50px;
            }

            .contact-form h2 {
                font-size: 30px;
            }

            .contact-form .text-box {
                width: 100%;
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
    <div class="contact-section">
        <div class="contact-info">
            <div><i class="fas fa-map-marker-alt"></i>Address,City,Country</div>
            <div><i class="fa fa-envelope"></i>abc@gmail.com</div>
            <div><i class="fa fa-phone"></i>+00 0000 000 000</div>
            <div><i class="fas fa-clock"></i>Mon-Fri 8:00 AM to 8:00 PM</div>
        </div>
        <div class="contact-form">
            <h2>Contact Us</h2>
            <form action="contact.php" class="contact" method="POST">
            <?php 
              $email = "";
              if(isset($_POST['submit'])){
                $email = $_POST["email"];
                
                    $subject = "Thanks for contacting us - MahendiArt";
                    $message1 = "You will always receive latest updates from us. And we won't share or sell your information to anyone.";
                    $sender = "From: hetakship412@gmail.com";
                        if(mail($email, $subject, $message1, $sender)){
                          ?>
                          <div class="alert-success"><?php echo $email ?><?php echo " "; ?>Thanks for contacting us. Your data is sucessfully sent.</div>
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
                mysqli_select_db($con,'usercontact');
                $user = $_POST['name'];
                $email = $_POST['email'];
                $message = $_POST['message'];

                $query = "insert into userinfodata(user, email, message) 
                values('$user', '$email', '$message')";
                // echo "<br> $query";
                mysqli_query($con,$query);
            ?>
                <input type="text" name="name" class="text-box" placeholder="Your name" value="<?php echo $user ?>" required>
                <input type="email" name="email" class="text-box" placeholder="Your E-mail" value="<?php echo $email ?>"required>
                <textarea name="message" cols="30" rows="5" placeholder="Your message" value="<?php echo $message ?>" required></textarea>
                <input type="submit" class="send-btn" name="submit" value="Send">
            </form>
        </div>
    </div>
</body>

</html>