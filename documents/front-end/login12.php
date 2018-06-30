<html/>

	<head>
		<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		<style>
		
		</style>
	</head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
	$(document).ready(function(){
		$("#password_forgot").hide();
		$("#user_forgot").click(function(){
			$("#password_forgot").show();
			$("#password_forgot").slidedown();
		});
		
	});
	</script>
	<body>
		<div class="col-md-12 col-lg-12 col-sm-12 marginTop80 ">
			<div class="col-md-4 col-lg-4 col-sm-12">&nbsp;</div>
			<div class="col-md-4 col-lg-4 col-sm-12">
				<div class="col-md-12 col-lg-12 col-sm-12  ">
					<div class="form-group">
					  <label for="usr" style="font-size:20px">Login</label>
					  
					</div>
					<div class="form-group">
					  <label for="usr">Email:</label>
					  <input type="email" name="email" class="form-control" id="usr">
					</div>
					
					<div class="form-group">
					  <label for="usr">Password:</label>
					  <input type="password" name="email" name="password" class="form-control" id="usr">
					</div>
					
					<div class="form-group">
					  
					  <input type="submit" value="continue" class="form-control" id="usr" style="background-color:#f0c14b">
					</div>
					<div class="form-group">
					  <label for="usr" style="color:lightblue" id="user_forgot" >Need Help</label>
					  
					</div>
					<div class="form-group" id="password_forgot">
					  <label for="usr" style="color:lightblue" >Forgot Password</label>
					  
					</div>
					<hr>
					<a>Don't have a account register here</a>
				</div>
			</div>
			<div class="col-md-4 col-lg-4 col-sm-12">&nbsp;</div>
			
		</div>
		
		
		<div class=" marginTop20">&nbsp;</div>
		<div class=" marginTop20">&nbsp;</div>
		<footer class="footer">
			<div class="col-md-4 col-lg-4 col-sm-12">&nbsp;</div>
			<div class="col-md-4 col-lg-4 col-sm-12" style="text-align:center;">
				<span> &copy BOOKS STOCK</span>
			</div>
			<div class="col-md-4 col-lg-4 col-sm-12">&nbsp;</div>
		</footer>
	</body>
</html>