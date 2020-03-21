<?php

$conn=new mysqli("localhost","root","","tinsaa");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM registration";
$result = $conn->query($sql);

   
   ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Finance Business - Contact Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-finance-business.css">
    <link rel="stylesheet" href="assets/css/owl.css">
<!--

Finance Business TemplateMo

https://templatemo.com/tm-545-finance-business

-->
<style>
table, td, th {
  border: 1px solid black;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th {
  height: 50px;
}
</style>
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html">
            <span style="font-size: 80px;color: rgb(26, 128, 0);">ት</span></span>
            <span style="font-size: 50px;color: yellow;">ን</span></span>
            <span style="font-size: 50px;color: yellow;">ሳ</span></span>
            <span style="font-size: 50px;color: red;">ኤ</span></span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="news.php">News</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>News</h1>
            <span>What is new today!!!</span>
          </div>
        </div>
      </div>
    </div>
    
    <table >
    <h2 style="text-align:center">Registration history</h2>
     <tr>
       <th>fullName</th>
       <th>age</th>
       <th>sex</th>
       <th>birthPlace</th>
       <th>currentCity</th>
       <th>status</th>
       <th>workStatus</th>
       <th>pNum</th>
       <th>email</th>
       <th>password</th>
     </tr>
     <?php
     if ($result->num_rows > 0) {
        while($rows=$result->fetch_assoc())
         {
     ?> 
         <tr>
           <td><?php echo $rows['fullName']; ?></td>
           <td><?php echo $rows['age']; ?></td>
           <td><?php echo $rows['sex']; ?></td>
           <td><?php echo $rows['birthPlace']; ?></td>
           <td><?php echo $rows['currentCity']; ?></td>
           <td><?php echo $rows['status']; ?></td>
           <td><?php echo $rows['workStatus']; ?></td>
           <td><?php echo $rows['pNum']; ?></td>
           <td><?php echo $rows['email']; ?></td>
           <td><?php echo $rows['password']; ?></td>
         </tr>
         <?php
         }
        }
        else
        {
          echo "0 results";
        }
        $conn->close();
      ?>
  
    </table>  
      <!-- Footer Starts Here -->
      <footer>
        <div class="container">
          <div class="row">
            <div class="col-md-3 footer-item">
              <h4>ትንሳኤ</h4>
              <p>This is an Ethiopian people for Ethiopian people</p>
              <ul class="social-icons">
                <li><a rel="nofollow" href="https://fb.com/templatemo" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-behance"></i></a></li>
              </ul>
            </div>
            <div class="col-md-3 footer-item">
              <h4>Useful Links</h4>
              <ul class="menu-list">
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Telegram</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Twitter</a></li>
              </ul>
            </div>
            <div class="col-md-3 footer-item">
              <h4>Best Pages</h4>
              <ul class="menu-list">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Privacy Policy</a></li>
              </ul>
            </div>
            <div class="col-md-3 footer-item last-item">
              <h4>Comment Us</h4>
              <div class="contact-form">
                <form id="contact footer-contact" action="" method="post">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <fieldset>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                      </fieldset>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <fieldset>
                        <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Comment" required=""></textarea>
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                      </fieldset>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </footer>
      
      <div class="sub-footer">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <p>Copyright &copy; 2020 Tinsaa Co., Ltd.</p>
            </div>
          </div>
        </div>
      </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>