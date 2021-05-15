 <?php
session_start();
if(!$_SESSION['userid'])
{
  header("Location: index.php");
  exit();
}
require_once("db.php");
 ?>
 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">

<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <style type="text/css">
  body{
   margin-top: 20px;
  background-image: url("data:image/jpeg;base64,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");
  background-size: cover; 
  color: white;
  }
</style>
    <title>EMPTAL</title>
  </head>
  <body>
     <style>
       .navbar {
    margin-bottom: 0;
    background-color: #0d0d0d;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
}
.navbar .dropdown-menu{
  background-color: #0d0d0d;
}
.navbar li a, .navbar .navbar-brand {
    color: #fff !important;
}

.navbar-nav li a:hover, .navbar-nav li.active a {
    color: #f4511e !important;
    background-color: #fff !important;
}

.navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
}
.login{
  margin-top:80px ;
  color: #0d0d0d;
  font-style: bold;
}
.well{
  background-color: #0d0d0d;
}
.btn{
  background-color: #0d0d0d;
}
.table{
  margin-top: 20px;
  border-color: #0d0d0d;
  font-family: "Times New Roman", Times, serif;
  font-size: 20px;
}
.bg-dark{
  background-color: #0d0d0d;
  color: #fff;
  border-color: #0d0d0d;
}
.text-dark{
  color: #0d0d0d;
}
.navbar-brand{
 font-family: "Bauhaus 93", Times, serif; 
}
    </style>
  <header>
   <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="index.php">EMPTAL</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
            <li><a href="dashboard.php">DASHBOARD</a></li> 
         <li><a href="logout.php">LOGOUT<span class="glyphicon glyphicon-log-out logo"></span></a></li> 
      </ul>
    </div>
  </div>
</nav>
</header>
<style type="text/css">
  .jumbotron{
  margin-top: 20px;
  width: 500px;
  background-size: cover;
  border: 1px; 
}
</style>
<section>
  <div class="container login">
    <div class="row my-3">
        <div class="col">
            <h2 class="text-dark">Attendance</h2>
        </div>
    </div>
    <div class="row py-2">
        <div class="col-md-4 py-1">
           <div class="jumbotron jumbotron-fluid">
                <div class="container text-center">
                    <canvas id="chDonut1"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<form method="POST" action="record.php">
<div class="container text-center">
<div class="form-inline">
  <div class="form-row">
    <div class="form-group ml-5 mt-3">
      <h3 class="text-dark"><b>Attendance Record:</h3>
      <input type="Date" class="form-control text-center ml-3 col-md-12 mt-3 "  name="Date">
      <button type="submit" class="btn btn-outline-success btn-lg ml-3 mt-3" name="submit">Search</button>
    </div>
  </div>
</div>

</div>
</form>
</section>

<?php
$sql="SELECT SUM(present) as present,SUM(absent) as absent ,SUM(late) as late FROM attendance WHERE name='$_SESSION[name]'";
    $result=$conn->query($sql);
    if ($result->num_rows>0) {
      while($row=$result->fetch_assoc()){
        $p=$row['present'];
        $a=$row['absent'];
        $l=$row['late'];
        $total=($p+$a+$l);
        $pre=($p/$total)*100;
        $ab=($a/$total)*100;
        $la=($l/$total)*100;
      }

    }
?>
<section>
<div class="container text-center">
  <div class="row">
    <table id="myTable" class="table table-bordered">
      <thead class="bg-dark text-center">
    <th class="text-center">Present</th>
    <th class="text-center">Absent</th>
    <th class="text-center">Late</th>
  </thead>
  <tbody class="text-dark">
    
        <tr>
          <td><?php echo $p; ?></td>
          <td><?php echo $a; ?></td>
          <td ><?php echo $l; ?></td>
        </tr>
  </tbody>
    </table>
  </div>
</div>
</div>
</section>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js"></script>
     <script type="text/javascript" >
   //doughnut
/* chart.js chart examples */

// chart colors
var colors = ['#007bff','#28a745','#333333','#c3e6cb','#dc3545','#6c757d'];
var p="<?php echo $pre ?>";
var a="<?php echo $ab ?>";
var l="<?php echo $la ?>";

var donutOptions = {
  cutoutPercentage: 70
};

// donut 1
var chDonutData1 = {
    labels: ['Present','Absent','Late'],
    datasets: [
      {
        backgroundColor: colors.slice(1,4),
        borderWidth: 0,
        data: [p, a, l]
      }
    ]
};

var chDonut1 = document.getElementById("chDonut1");
if (chDonut1) {
  new Chart(chDonut1, {
      type: 'pie',
      data: chDonutData1,
      options: donutOptions
  });
}




    </script>

     
  </body>
</html> 