<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Glance Design Dashboard an Admin Panel Category Flat Bootstrap Responsive Website Template | Login Page :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
@include('theampart/asset')

</head> 
<body class="cbp-spmenu-push">
<div class="main-content">
	@include('theampart/sidebar')
		<!--left-fixed -navigation-->		
		<!-- header-starts -->
			@include('theampart/header')

		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page login-page ">
				<h2 class="title1">Login</h2>
				<div class="widget-shadow">
					<div class="login-body">
						<form action="{{route('login.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @error('email')
                                <strong style="color: red">{{$message}}</strong>
                            @enderror
							<input type="email" class="user" name="email" value="{{old('email')}}" placeholder="Enter Your Email">
                            <br>
                            @error('password')
                                <strong style="color: red">{{$message}}</strong>
                            @enderror
							<input type="password" name="password" class="lock" placeholder="Password">
                            <br>
							<div class="forgot-grid">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Remember me</label>
								<div class="forgot">
									<a href="#">forgot password?</a>
								</div>
								<div class="clearfix"> </div>
							</div>
							<input type="submit" name="Sign In" value="Log In">
							<div class="registration">
								Don't have an account ?
								<a class="" href="signup.html">
									Create an account
								</a>
							</div>
						</form>
					</div>
				</div>
				
			</div>
		</div>
		<!--footer-->
			@include('theampart/footer')

        <!--//footer-->
	</div>
	
	<!-- side nav js -->
	@include('/theampart/sidebarscript')
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	<!-- Classie --><!-- for toggle left push menu script -->
	@include('/theampart/headerscript')
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->
		
	<!--scrolling js-->
	@include('/theampart/sidebarscript')
	@include('/theampart/sidebarscript')
	<!--//scrolling js-->
	
	<!-- Bootstrap Core JavaScript -->
	@include('/theampart/sidebarscript')
	<!-- //Bootstrap Core JavaScript -->
   
</body>
</html>