<?php 
include('connection.php');
extract($_REQUEST);
if(isset($send))
{
  $uid=mysqli_fetch_assoc(mysqli_query($con,"select id from user where email='$e' "));
  $userid = $uid["id"];
mysqli_query($con,"insert into feedback values('','$userid','$n','$e','$mob','$star','$star2','$star3','','$msg')");	
$msg= "<h4 style='color:green;'>feedback sent successfully</h4>";
}
?>
<!-- Footer1 Start Here-->

<footer style="background-color: white;">
    <div class="container-fluid" style="display: flex;">
	<div class="col-sm-12 hov">
		<h1 style="position:relative;top:-10px; color:#212221; font-family: Verdana, Geneva, Tahoma, sans-serif;">About Us<h1>
    <p class="text-justify" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Alpha Royal hotels is an establishment that provides paid lodging on a short-term basis. Facilities provided may range from a modest-quality mattress in a small room to large suites with bigger, higher-quality beds, a dresser, a refrigerator and other kitchen facilities, upholstered chairs, a flat screen television, and en-suite bathrooms. Small, lower-priced hotels may offer only the most basic guest services and facilities. Larger, higher-priced hotels may provide additional guest facilities such as a swimming pool, business center</p><br>
      <!---<center><a href="about.php" class="btn btn-danger"><b>Read More..</b></a></center><br><br><br>--->
 
	</div>&nbsp;&nbsp;
	<div class="col-sm-12 text-justify">
	       <h1 style="position:relative;top:-10px; color:#212221; font-family: Verdana, Geneva, Tahoma, sans-serif;">Contact Us</h1><br>
      <p style=""><strong>Address:&nbsp;</strong>Bangalore</p>
      <p style=""><strong>Email-Id:&nbsp;</strong>AlphaRoyalHotel@gmail.com</p>
      <p style=""><strong>Contact Us:&nbsp;</strong>(+91) 7483358199</p><br><br><br>
     <!---<center><img src="image/devlop/img2.png"class="img-responsive"style="width:200px;height:150px;border-radius:100%;"></center>
---></div>&nbsp;

  <!--Feedback Start Here-->
	<div class="col-sm-12 text-center "  >
      <div class="panel panel-primary" style=" border: solid 1px #212221;">
        <div class="panel-heading" style="background-color: #212221; border: none;">Feedback</div>
          <div class="panel-body">
            <?php echo @$msg; ?>
      <div class="feedback">
      <form method="post"><br>
        <div class="form-group">
          <input type="text" name="n" class="form-control" id="#"placeholder="Enter Your Name"required>
        </div>
        <div class="form-group">
          <input type="Email" name="e" class="form-control" id="#"placeholder="Email"required>
        </div>
        <div class="form-group">
          <input type="Number" name="mob" class="form-control" id="#"placeholder="Mobile Number"required>
        </div>
        <div class="form-group">
        <label for="star">Bed:</label>

                  <select name="star" id="rat">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
        </div>
        <div class="form-group">
        <label for="star2">Service:</label>

                  <select name="star2" id="rat">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>

                  </select>
        </div>
        <div class="form-group">

        <label for="star3">Food:</label>

                  <select name="star3" id="rat">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
        </div>
        <div class="form-group">
          <textarea type="Text" name="msg" class="form-control" id="#"placeholder="Type Your Message"required></textarea>
        </div>
          <input type="submit" value="send" name="send" class="btn btn-primary btn-group-justified"required>
      </form> 
         
        </div>
         
       </div>
       
      </div>
      <?php
  include('Social ican.php')
?>
    </div>

    <!--Feedback Panel Close here-->

  </div>
</footer>
<!--Footer1 Close Here-->

<!--Footer2 start Here-->



<!--Footer2 start Here-->