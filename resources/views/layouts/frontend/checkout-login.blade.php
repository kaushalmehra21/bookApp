<!doctype html>
<html class="no-js" lang="en">
<head>
	<link rel="stylesheet" href="{{ asset('/frontend/css/bootstrap/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/frontend/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('/frontend/css/default.css') }}">

	<!-- FontsOnline -->
	<link href='https://fonts.googleapis.com/css?family=Merriweather:300,300italic,400italic,400,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic,900italic,900,100italic,100' rel='stylesheet' type='text/css'>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="{{ asset('/frontend/js/vendor/bootstrap.min.js') }}"></script>
</head>
<body>
	<div class="wrapper push-wrapper">
		<!-- Main Content -->
	    <main class="main-content">
	        @yield('content')
	    </main>
    <!-- Main Content -->
	</div>
	
	<div class=" marginTop20">&nbsp;</div>
	<div class=" marginTop20">&nbsp;</div>
	<footer class="footer">
		<div class="col-md-4 col-lg-4 col-sm-12">&nbsp;</div>
		<div class="col-md-4 col-lg-4 col-sm-12" style="text-align:center;">
			<span> &copy; BOOKS STOCK</span>
		</div>
		<div class="col-md-4 col-lg-4 col-sm-12">&nbsp;</div>
	</footer>
	<script>
		$(document).ready(function(){
			$("#password_forgot").hide();
			$("#user_forgot").click(function(){
				$("#password_forgot").show();
				$("#password_forgot").slidedown();
			});
		});

		// cl = checkout-login
		$(document).on('blur', '#cl_page_isEmailExistTrgr', function() {

            var email = $(this).val();
            var _token = $('#_token').val();

            $.ajax({
                url : '<?php echo url('/users/is-email-exist') ?>',
                data: { 
                    'email' : email,
                    '_token' : _token
                },
                success: function(data){
                    if(data=='0')
                    {
                        
                        $('#emailExistMsgSpan').html('email not exist');
                    }
                    else
                    {
                        $('#emailExistMsgSpan').html('');
                        $('#cl_RegisterBtn').prop("disabled", false);
                    }
                    //alert(data);
                    //console.log(data);
                }
            });
        });
	</script>
</body>
</html>