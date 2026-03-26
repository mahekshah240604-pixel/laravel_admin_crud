<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Glance Design Dashboard an Admin Panel Category Flat Bootstrap Responsive Website Template | Forms :: w3layouts</title>
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
				<div class="forms">
					<h2 class="title1">Category Form</h2>
					
					<div class=" form-grids row form-grids-right">
						<div class="widget-shadow " data-example-id="basic-forms"> 
							<div class="form-title">
								<h4>Add category information:</h4>
							</div>
							<div class="form-body">
								<form class="form-horizontal" method="POST" action="{{route('category.store')}}" enctype="multipart/form-data">
                                    @csrf
                                     <div class="form-group"> 
                                        <label for="inputEmail3" class="col-sm-2 control-label">Category Name:</label> 
                                            <div class="col-sm-9">
                                                @error('category_name')
                                                    <strong style="color: red">{{$message}}</strong>
                                                @enderror
                                              
                                                 <input type="text" class="form-control" name="category_name" id="inputEmail3" placeholder="Enter catagory name"> </div> 
                                            </div> 
                                            <div class="col-sm-offset-2"> 
                                                        <button type="submit" class="btn btn-primary">Add category</button>
                                                        <button type="rester" class="btn btn-danger">reset</button>
                                                        <button type="button"  onclick="window.location='category'; "class="btn btn-info">view</button>
								            </div> 

                                </form> 
							</div>
						</div>
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
   
</body>
</html>