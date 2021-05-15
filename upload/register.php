 <?php
session_start();
if(isset($_SESSION['userid'])){
  header("Location:dashboard.php");
  exit();
}
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
   <script>
            function validatePassword(password) {
                
                // Do not show anything when the length of password is zero.
                if (password.length === 0) {
                    document.getElementById("msg").innerHTML = "";
                    return;
                }
                // Create an array and push all possible values that you want in password
                var matchedCase = new Array();
                matchedCase.push("[$@$!%*#?&]"); // Special Charector
                matchedCase.push("[A-Z]");      // Uppercase Alpabates
                matchedCase.push("[0-9]");      // Numbers
                matchedCase.push("[a-z]");     // Lowercase Alphabates

                // Check the conditions
                var ctr = 0;
                for (var i = 0; i < matchedCase.length; i++) {
                    if (new RegExp(matchedCase[i]).test(password)) {
                        ctr++;
                    }
                }
                // Display it
                var color = "";
                var strength = "";
                switch (ctr) {
                    case 0:
                    case 1:
                    case 2:
                        strength = "Very Weak";
                        color = "red";
                        break;
                    case 3:
                        strength = "Medium";
                        color = "orange";
                        break;
                    case 4:
                        strength = "Strong";
                        color = "green";
                        break;
                }
                document.getElementById("msg").innerHTML = strength;
                document.getElementById("msg").style.color = color;
            }
        </script>
<style type="text/css">
  body{
   margin-top: 20px;
  background-image: url("");
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
.form{
  color:#0d0d0d;
  margin-top: 80px;
}
.btn{
  background-color: #0d0d0d;
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
      <a class="navbar-brand" href="index.php">XYZ</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">LOGIN</a></li> 
        
      </ul>
    </div>
  </div>
</nav>
</header>
<section>
<div class="container text-dark form">
<div class="row">
<div class="col-md-4 col-md-offset-4 well">
<h2 class="text-center color">Register</h2>
  <form action="adduser.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name" placeholder="Name">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" name="email" placeholder="Email">
    </div>
    <div class="form-group">
      <label for="pass">Password</label>
      <input type="password" class="form-control" name="pass" data-toggle="tooltip" title="Password Must be Alphanumeric"onkeyup="validatePassword(this.value);"placeholder="Password"><span id="msg"></span>
    </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" name="address" placeholder="Address">
  </div>
	<div class="form-group col-md-6">
      <label for="gender">Gender</label>
      <select name="gender" class="form-control">
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    <option value="others">Others</option>
  </select>
    </div>
    <div class="form-group col-md-6">
      <label for="mobile">Mobile No.</label>
      <input type="text" class="form-control" name="mobile" maxlength="10" minlength="10" autocomplete="off" onkeypress="return validatephone(event);" placeholder="Mobile">
    </div>
	<div class="form-group">
    <label for="Department">Teacher/Stuents</label>
    <select name="Department" class="form-control">
    <option value="teacher">Teacher</option>
    <option value="student">Student</option>
  </select>
  </div>
  <div class="form-group">
      <label for="mobile">Profile Photo</label>
      <input type="file"  name="profile">
    </div>
  <div class="form-group">
    <button type="submit" class="btn btn-primary btn-block" name="submit">Register</button>
  </div>
  <?php
   if(isset($_SESSION['registererror'])){
   ?>
   <div>
   <p class="text-center c">This email address is used before!</p> 
    </div>
  <?php
   unset($_SESSION['registererror']);}
   ?> 
  </form>
</div>
</div>
</div>
</section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script type="text/javascript">
      function validatephone(event){
        var key=window.event?event.keyCode:event.which;
        if (event.keyCode==8 || event.keyCode==46 || event.keyCode==37 || event.keyCode==39) {return true;}else if (key<48 || key>57) {return false;}else return true;
      }
      function validatesex(event) {
        var key=window.event?event.keyCode:event.which;
        if (event.keyCode==8 || event.keyCode==46 || event.keyCode==37 || event.keyCode==39) {return true;}else if (key==70 || key==77 || key==102 || key==109) {return true;}else return false;
      }
    
               
      
    </script>
  </body>
</html> 