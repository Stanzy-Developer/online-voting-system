<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}
.btn-special-2 {
    padding: 12px 24px;
    background-color: white;
    color: hsl(243, 80%, 62%);
    border-radius: 6px;
    border: 2px hsl(243, 80%, 62%) solid;
    transition: transform 250ms ease-in-out;
}

.btn-special-2:hover {
    transform: scale(1.10);
}

.btn-special-2:active {
    transform: scale(.9);
}
#footersection{
    margin-top:80px;
}
.h2_3{
    margin-top:30px;
}

    </style>
</head>
<body>
<header id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
          <a href="index.html"  style="color: white; font-weight: 600;"><img src="img/logo-removebg-preview.png" height="100px" width="100px" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon" style="color: white;"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto animate__animated animate__bounceInDown" style="padding-right: 50px;">
                <li class="nav-item" >
                  <a class="nav-link" href="index.html" style="color:white; font-weight: 600; text-align: center; font-size: 18px;  text-transform: capitalize; padding: 20px;">Home</a>
                </li>
                <li class="nav-item" >
                  <a class="nav-link" href="admin_dashboard.php" style="color:white; font-weight: 600; text-align: center; font-size: 18px;  text-transform: capitalize; padding: 20px;">Dashboard</a>
                </li>
                <li class="nav-item" >
                  <a class="nav-link" href="result_year.php" style="color:white; font-weight: 600; text-align: center; font-size: 18px;  text-transform: capitalize; padding: 20px;">Result</a>
                </li>
                <li class="nav-item" >
                  <a class="nav-link" href="user_suggestion.php"  style="color: white; font-weight: 600; text-align: center; font-size: 18px;  text-transform: capitalize; padding: 20px;">Suggestions</a>
                </li>
                <li class="nav-item" >
                  <a class="nav-link" href="show_contact.php"  style="color: white; font-weight: 600; text-align: center; font-size: 18px;  text-transform: capitalize; padding: 20px;">Contact</a>
                </li>
              
                <li class="nav-item">
                  <a class="nav-link" href="user_details_year.php" style="color: white; font-weight: 600; text-align: center; font-size: 18px;  text-transform: capitalize; padding: 20px;">Users</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="user_cand_year.php" style="color: white; font-weight: 600; text-align: center; font-size: 18px; text-transform: capitalize; padding: 20px;">Candidates</a>
                </li>
              
                <li class="nav-item" >
                  <a class="nav-link" href="logout.php"  style="color: white; font-weight: 600; text-align: center; font-size: 18px; text-transform: capitalize; padding: 20px;">Logout</a>
                </li>
              
              </ul>
            </div>
          </nav>
        </header>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="h2_3"> Select Result From</h2>
            <a href="validation_admin.php"><button style="margin-top:40px;" class="btn-special-2">ESG</button></a>
            </div>
            <div class="col-md-12">
            <a href="validation_2_admin.php"><button style="margin-top:60px;" class="btn-special-2">IUC</button></a>
            </div>
            <div class="col-md-12">
            <a href="validation_3_admin.php"><button style="margin-top:60px; " class="btn-special-2">OTHERS</button></a>
            </div>
        </div>
    </div>

    
</body>
</html>
<?php
include("footer.html");
?>