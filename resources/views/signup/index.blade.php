<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Glance Design Dashboard an Admin Panel Category Flat Bootstrap Responsive Website Template | Tables :: w3layouts</title>
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
			<div class="main-page">
				<div class="tables">
					<h2 class="title1">Tables</h2>
                           <div class="panel-body widget-shadow">
						<h4>Basic Table:</h4>
						<table class="table">
							<thead>
								<tr>
								  <th>#</th>
								  <th>Name</th>
								  <th>mobileno</th>
								  <th>Email</th>
                                   <th>Password</th>
                                  <th>Gender</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($mydata as $userdata)
                                    <tr>
                                        <td>{{$userdata->signup_id}}</td>
                                        <td>{{$userdata->name}}</td>
                                        <td>{{$userdata->mobileno}}</td>
                                        <td>{{$userdata->email}}</td>
                                        <td>{{$userdata->password}}</td>
                                        <td>{{$userdata->gender}}</td>
                                        <td>
                                            <form action="{{route('signup.destroy',$userdata->signup_id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" value="delete">
                                            </form>
                                        </td>
                                        <td><a href="{{route('signup.edit',$userdata->signup_id)}}">Edit</a></td>
                                    </tr>
                                @endforeach
							</tbody>
						</table>
					</div>

					
				</div>
			</div>
		</div>
		<!--footer-->
		@include('theampart/footer')
        <!--//footer-->
	</div>
	
	<!-- side nav js -->
	<script src='js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="js/classie.js"></script>
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
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.js"> </script>
	
</body>
</html>