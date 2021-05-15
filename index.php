<?php
require_once("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>EMPTAL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">

<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  <style>
  .slideanim {visibility:hidden;}
.slide {
    /* The name of the animation */
    animation-name: slide;
    -webkit-animation-name: slide; 
    /* The duration of the animation */
    animation-duration: 1s; 
    -webkit-animation-duration: 1s;
    /* Make the element visible */
    visibility: visible; 
}

/* Go from 0% to 100% opacity (see-through) and specify the percentage from when to slide in the element along the Y-axis */
@keyframes slide {
    0% {
        opacity: 0;
        transform: translateY(70%);
    } 
    100% {
        opacity: 1;
        transform: translateY(0%);
    } 
}
@-webkit-keyframes slide {
    0% {
        opacity: 0;
        -webkit-transform: translateY(70%);
    } 
    100% {
        opacity: 1;
        -webkit-transform: translateY(0%);
    }
}
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
.item img{
  background-color: cover;

}
 .carousel-inner img {
    -webkit-filter: grayscale(90%);
    filter: grayscale(90%); /* make all photos black and white */ 
    width: 100%; /* Set width to 100% */
    margin: auto;
}

.carousel-caption h3 {
    color: #fff !important;
}
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
.container-fluid {
    padding: 60px 50px;
}
.bg-grey{
  background-color: #0d0d0d;
  color: #fff;
}
.logo {
  color: #fff;
      font-size: 200px !important;
  }
  .logoa {
  color: #0d0d0d;
      font-size: 200px !important;
  }
  .logo-small{
    color: #0d0d0d;
    font-size: 50px;
  }
  .bg-black{
    background-color: #0d0d0d;
    color: #fff;
  }
footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #0d0d0d;
}
.navbar-brand{
 font-family: "Bauhaus 93", Times, serif; 
}
</style>
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
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#Values">VALUES</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#news">NEWS</a></li>
        <li><a href="#contact">CONTACT</a></li>
         <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span>
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
            <li><a href="register.php"><span class="glyphicon glyphicon-pencil"></span>Sign Up</a></li> 
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="data:image/jpeg;base64,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" alt="New York">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div> 
    </div>

    <div class="item">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXrf-f293ZqDIwMmlLFYl3e_kNCzcMP_T3M2KelszesDIk_fc-nA" alt="Chicago">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div> 
    </div>

    <div class="item">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRaMwP6n1_Blgn5zmkIyPx43OPKLxnrfi41mIU0LVv-oXAfc2n3eQ" alt="Los Angeles">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div> 
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="container-fluid" id="about">
  <div class="row ">
    <div class="col-sm-8">
  <h2>About Us</h2>      
  <p>We are a worldwide distributor of premium quality industrial and electrical products.

Caparo Group has been serving the region for over 30 years and has operations in UK, USA and India.

Our customers are the biggest names in electrical, automotive, construction, aerospace, steel conversion and distribution, engineering and medical.

Our company has built a reputation based on excellent products and quality of service.</p>
</div>
<div class="col-sm-4">
  <span class="glyphicon glyphicon-signal logoa"></span>
</div>
</div>
</div>
<?php
$sql="SELECT * from awards";
  $result=$conn->query($sql);
  ?>
<div class="container-fluid bg-grey" id="Values">
  <div class="row slideanim">
  <div class="col-sm-8">
    <span class="glyphicon glyphicon-globe logo"></span>
  </div>
  <h2>Our Values</h2>
  <h4><strong>MISSION:</strong>RESPONSBLE</h4>      
  <p><strong>VISION:</strong>You can always rely on us and our network.</p>
</div>
</div>
<div class="container-fluid text-center" id="services">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-off logo-small"></span>
      <h4>POWER</h4>
      <p>12 Hrs of Manufacturing</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart logo-small"></span>
      <h4>LOVE</h4>
      <p>Fully Supportive to Customers</p>
    </div>
    <div class="col-sm-4">
  <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4>GREEN</h4>
      <p>Focus on the Environment Safety</p>
    </div>
    </div>
    <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
       <span class="glyphicon glyphicon-lock logo-small"></span>
     <h4>Employees</h4>
      <?php
      $sql="SELECT * from register";
  $result=$conn->query($sql);
  ?>
      <p><?php echo $result->num_rows;?></p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4>Awards</h4>
      <p><?php echo $result->num_rows;?></p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4>Products</h4>
      <?php
      $sql="SELECT * from parts";
  $result=$conn->query($sql);
  ?>
      <p><?php echo $result->num_rows;?></p>
    </div>
  </div>
</div>
<div class="comtainer-fluid" id="news">
<h2 class="text-center bg-black">What our customers say</h2>
<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
    <h4>"This company is the best. I am so happy with the result!"<br><span style="font-style:normal;">Michael Roe, Vice President, Comment Box</span></h4>
    </div>
    <?php
         $sql="SELECT * from news";
  $result=$conn->query($sql);
  if($result->num_rows>0) {
    while ($row=$result->fetch_assoc()) {
    ?>
    <div class="item">
      <h4><span style="font-style:normal;"><?php echo $row['heading'];?></span></h4>
    </div>
    <?php
  }
}
?>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<div class="container-fluid bg-grey" id="contact">
  <h2 class="text-center">CONTACT</h2>
  <div class="row slideanim">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> GURUGRAM,INDIA</p>
      <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p> 
    </div>
    <form action="dbcontact.php" method="POST">
    <div class="col-sm-7">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div> 
    </div>
  </form>
  </div>
</div>
<div id="googleMap" style="height:400px;width:100%;"></div>
<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a> 
</footer>
<script>
function myMap() {
var myCenter = new google.maps.LatLng(28.4987, 77.0784);
var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
var marker = new google.maps.Marker({position:myCenter});
marker.setMap(map);
}
</script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

   // Make sure this.hash has a value before overriding default behavior
  if (this.hash !== "") {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){

      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
      });
    } // End if
  });
  $(window).scroll(function() {
  $(".slideanim").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 600) {
      $(this).addClass("slide");
    }
  });
});
})
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>

</body>
</html>