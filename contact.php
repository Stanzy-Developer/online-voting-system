<?php
$name = $_REQUEST['txtName'];
$email   = $_REQUEST['txtEmail'];
$message = $_REQUEST['txtMessage'];


//database connection
include('dbConnect.php');
include('header.html');

$sql = "INSERT into contact(name,email,message) values(:name,:email,:message)";

$stmt = $pdo->prepare($sql);

$stmt->bindParam(":name",$name);
$stmt->bindParam(":email",$email);
$stmt->bindParam(":message",$message);

$stmt->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <!-- Bootstrap CSS --> 
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
     <title></title>
     <style>
    .fa-check{
    font-size: 80px;
    color: #27ae60;
    font-weight: bold;
    height: 110px;
    width: 110px;
    border: 1px solid #27ae60;
    text-align: center;
    padding-top: 13px;
    border-radius: 50%;
    box-sizing: border-box;
    margin: 40px 0 0 0px;
    }

    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        scroll-behavior: smooth;
        text-align: center;
        font-family: 'Poppins', sans-serif;
    }
     </style>
</head>
<body>
    <div class="container-fluid" id="cont-3">
           <section>
               <div class="container">
                   <div class="row">
                       <div class="col-md-12">
                        <i class="fa fa-check" aria-hidden="true" ></i>
                        <H1 style="margin-top: 40px;">Successfully Submitted</H1>
                       </div>
                       <div class="col-md-12">
                           <p>Go Home Click this Link -><a href="index.html">Click Me</a></p>
                       </div>
                   </div>
               </div>
           </section>
           <section>
               <div class="container" style="margin-top:190px">
                   <div class="row">
                       <div class="col-md-12">

                       </div>
                   </div>
               </div>
           </section>
           <section>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6">
                  <hr>
                  <div class="Footer">
                  <ul style="display: flex;">
                  <li style="list-style: none; padding: 10px; "><a href="index.html" style="text-decoration: none; color: #a517ba;">Home</a></li>
                  <li style="list-style: none; padding: 10px; "><a href="about.php" style="text-decoration: none; color: #a517ba;">About</a></li>
                  <li style="list-style: none; padding: 10px; "><a href="suggestion.html" style="text-decoration: none; color: #a517ba;">Suggestion</a></li>
                  <li style="list-style: none; padding: 10px; "><a href="contact_form.php" style="text-decoration: none; color: #a517ba;">Contact</a></li>
                </ul>
                  </div>
                </div>
                <div class="col-md-6">
                  <hr>
                  <div style="text-align:center; margin: auto auto;">
                   <p style="text-align:center; margin: auto auto; padding: 15px;">Copyright© 2022 Clings Technology. All Rights Reserved.</p>
                  </div>
                </div>
              </div>
            </div>
            </section>
            

            <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>    
    <script src="js/bootstrap.min.js"></script>  
    