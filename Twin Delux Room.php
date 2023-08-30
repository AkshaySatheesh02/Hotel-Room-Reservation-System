<!DOCTYPE html>
<html>
<head>
<title>Alpha Royal Hotels</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="icon" href="./logo/logo2.png" type="image/ico">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="css/style.css"rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
</head>
<body style="margin-top:50px;">
	<?php
      include('Menu Bar.php')
  ?><br><br><br>
	<div class="container-fluid"style="margin-top:2%;">
		<div class="continer">
			<div class="row">
				<div class="col-sm-2"></div>
				<div class="col-sm-7">
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="image/Twin Delux Room/img1.jpg"class="thumbnail" alt="img1">
    </div>

    <div class="item">
      <img src="image/Twin Delux Room/img2.jpg"class="thumbnail" alt="im2">
    </div>

    <div class="item">
       <img src="image/Twin Delux Room/img3.jpg"class="thumbnail" alt="im3">
    </div>

    <div class="item">
       <img src="image/Twin Delux Room/img4.jpg"class="thumbnail" alt="img4">
    </div>

    <div class="item">
       <img src="image/Twin Delux Room/img5.jpg"class="thumbnail" alt="img5">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
		<h2 class="Ac_Room_Text">Twin Delux Room</h2>
		<p class="text-justify">The Contemporary yet simple designed twin bedded rooms are well equipped with modern amenities. Fresh Decor and refined ambiance is the winning combination to make these rooms an ideal choice for discerning business traveler.</p>
    <div class="row">
      <h2>Amenities</h2>
      <img src="image/icon/wifi.png">
      </div>
	</div>
				<div class="col-sm-3">
					<div class="panel panel-primary">
					<div class="panel-heading">
						<h4 align="center">Room Type</h4>
					</div><br>
					<div class="panel-body-right text-center">	
						<a href="Delux Room.php">Delux Room</a><hr>
						<a href="Standard Room.php">Standard Room</a><hr>
						<a href="Luxurious Suite.php">Luxurious Suite</a><hr>
            <a href="Twin Delux Room.php">Twin Delux Room</a><hr>
            <a href="Suit Room.php">Suit Room</a><hr>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
  <?php
      include('footer.php')
  ?>
</body>
</html>
