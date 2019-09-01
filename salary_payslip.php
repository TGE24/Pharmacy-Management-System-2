<!DOCTYPE html>
<html lang="en">
<?php include('connectiontest.php'); ?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Nimedco Pharmacy</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  
</head>
<body>
    <!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark primary-color">

<!-- Navbar brand -->
<a class="navbar-brand" href="index.html">NimedcoPharmacy - Salary Managment</a>

<!-- Collapse button -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
  aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<!-- Collapsible content -->
<div class="collapse navbar-collapse" id="basicExampleNav">

  <!-- Links -->
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="salary_dashboard.php">Dasboard
        <span class="sr-only">(current)</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="salary_attendance_view.php">Attendance</a>
      <span class="sr-only">(current)</span>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="salary_payroll.php">Payroll</a>
    </li>
  

  </ul>
  <!-- Links -->

  <form class="form-inline my-2 my-lg-0 align-self-stretch">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</div>
<!-- Collapsible content -->

</nav>
<!--/.Navbar-->
  <br><br>
 
   

  <?php


if(isset($_POST['gpayslip'])){
  
    $empID = $_POST['empID'];
    $payrollyear = $_POST['payrollyear'];
    $payrollmonth = $_POST['payrollmonth'];
    $bonus = $_POST['bonus'];
    $panelties = $_POST['panelties'];
    $tax = $_POST['tax'];
    $basic = 22000;

    $fullPayment = $basic + $bonus - $panelties - ($basic/100) * $tax;

    echo "Employee ID: " . $empID. "<br>";
    echo "Payroll Year: " . $payrollyear. "<br>";
    echo "Payroll Month: " . $payrollmonth. "<br>";
    echo "Bonus: " . $bonus. "<br>";
    echo "Panelties: " . $panelties. "<br>";
    echo "Tax: " .$tax."%"."<br>";
    echo "FullPayment: " . $fullPayment. "<br> <br> <br>";
?>

<button type="submit"  id="form" name="gpayslip" class="btn btn-primary btn-md">Genarate Pay Slip</button>
<?php
  $sql = "INSERT INTO salary_payslip(empID, payrollYear, payrollMonth, bonus, panelties, tax, dayPayment, fullPayment )
  VALUES ('$empID','$payrollyear','$payrollmonth','$bonus','$panelties','$tax','$fullPayment','$fullPayment')";

  if ($conn->query($sql) === TRUE) {
      echo "New record created successfully"."<br> <br> <br>";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
  
  
} 
?>     
 <!--
   
CREATE TABLE salary_payslip(
    
payslipId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
empId VARCHAR(30) NOT NULL,
payrollYear YEAR NOT NULL,
payrollMonth VARCHAR(30) NOT NULL,
bonus FLOAT(30) NOT NULL,
panelties FLOAT(30) NOT NULL,
tax FLOAT(30) NOT NULL,
otPayment FLOAT(30) NOT NULL,
dayPayment FLOAT(30) NOT NULL,
fullPayment FLOAT(30) NOT NULL,
payslip_gdate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    
) -->
             
  <!--    Footer start-->

<!-- Footer -->
<footer class="page-footer font-small mdb-color pt-4">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Footer links -->
    <div class="row text-center text-md-left mt-3 pb-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Nimedco Pharmacy</h6>
        <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
          consectetur
          adipisicing elit.</p>
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
        <p>
          <a href="#!">Drugs</a>
        </p>
        <p>
          <a href="#!">Medicine</a>
        </p>
        <p>
          <a href="#!">Child Items</a>
        </p>
        <p>
          <a href="#!">Energy Drinks</a>
        </p>
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
        <p>
          <a href="#!">Your Account</a>
        </p>
        <p>
          <a href="#!">Medicines</a>
        </p>
        <p>
          <a href="#!">Delivery</a>
        </p>
        <p>
          <a href="#!">Help</a>
        </p>
      </div>

      <!-- Grid column -->
      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
        <p>
          <i class="fas fa-home mr-3"></i> NimedcoPharmacy, Meerigama</p>
        <p>
          <i class="fas fa-envelope mr-3"></i> nimedcopharmacy@.com</p>
        <p>
          <i class="fas fa-phone mr-3"></i> + 94 770 828 319</p>
        <p>
          <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Footer links -->

    <hr>

    <!-- Grid row -->
    <div class="row d-flex align-items-center">

      <!-- Grid column -->
      <div class="col-md-7 col-lg-8">

        <!--Copyright-->
        <p class="text-center text-md-left">© 2019 Copyright:
          <a href="https://mdbootstrap.com/education/bootstrap/">
            <strong> NimedcoPharmacy.com</strong>
          </a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-5 col-lg-4 ml-lg-0">

        <!-- Social buttons -->
        <div class="text-center text-md-right">
          <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-google-plus-g"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

</footer>
<!-- Footer -->

<!--Ens of the footer-->        




<!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <script type="text/javascript" src="js/mdb.js"></script>
  <script type="text/javascript" src="js/salary.js"></script>
</body>

</html>