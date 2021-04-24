<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    include 'database.php';
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone = $_POST['phone'];

 
    
        $sql="INSERT INTO `users` (`name`, `email`, `phone`, `timestamp`) VALUES ( '$name', '$email','$phone', current_timestamp())";
        
        $result = mysqli_query($conn , $sql);
        
        if($result)
        {
          echo'<script type="text/javascript">alert("Welcome to DLF Camellias:)");</script>';
          echo '<script> location.href = "welcome.php"; </script> ';
        }
       

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DLF Camellias</title>

	<!-- BOOTSTRAP 4.4.1 -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" />

	<!-- ANIMATE CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" />

	<!-- FONT AWESOME 4.7.0 -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="style.css">

</head>
<body>

<!-- Modal -->
<div class="modal animated shake" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
        	<div class="col-md-6 p-0">
        		<img src="https://images.pexels.com/photos/3617467/pexels-photo-3617467.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
        	</div>
        	<div class="col-md-6 p-0">
        		<div class="formWrap">
	        		<h1>Enter Your Details</h1>
	        		<p><small>Get more ideas and inspiration in your inbox</small></p>
	        		<hr>
					<form action="index.php" method="post">
						<input type="text" placeholder="Name" name="name" required>
						<input type="email" placeholder="Email" name="email"required>
						<input type="number" placeholder="Phone Number" name="phone" required>
						<input class="submit" type="submit" value="Submit">
					</form>
					<hr>
					<p><a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
						<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
						<a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
					</p>
				</div>
        	</div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- JQUERY 3.4.1 CDN LINK -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- BOOTSTRAP 4.4.1 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>

<script>
	
	$(window).on('load', function(){
		setTimeout(function(){
			$('#myModal').modal('show')
		}, 500);  // 3000 = 3 second // 500 = 0.5 second
	});

</script>
</body>
</html>