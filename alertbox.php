<!DOCTYPE html>
<html>
<head><title>Alpha Royal Hotels</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="icon" href="./logo/logo2.png" type="image/ico">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="css/style.css"rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="margin-top:50px;">
	<script>
		$(document).ready(function(){
			$('#myModal').modal('show');

		});


	</script>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"style="margin-top:10%;">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content"id="primary">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <center><img src="image/clipart/user.png" class="img-circle" alt="Bird" width="200" height="130"></center>
      </div>
      <div class="modal-body">
        <form>
              <div class="form-group">
                <input type="Email" class="form-control" id="#"placeholder="Email Id" required>
              </div>
            <div class="form-group">
                <input type="Password" class="form-control" id="#"placeholder="Password" required>
            </div>
        <div class="forget text-center"> <!-- Forget Class -->
        	<a href="Forgot account.php">Forget Your Password</a> <b>|</b>
        	<a href="Registation form.php">Create New Account</a>
    	</div>
      	</form>
      </div>
      <div class="modal-footer">
        <a href="#" class="btn btn-primary">Login</a>
         <a href="#" class="btn btn-default"data-dismiss="modal">Close</a>
      </div>
    </div>
  </div>
</div>
</body>
</html>