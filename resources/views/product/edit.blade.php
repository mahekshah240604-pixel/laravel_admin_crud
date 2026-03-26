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
					<h2 class="title1">Product Form</h2>
					
					<div class=" form-grids row form-grids-right">
						<div class="widget-shadow " data-example-id="basic-forms"> 
							<div class="form-title">
								<h4>Edit Product information:</h4>
							</div>
							<div class="form-body">
								<form class="form-horizontal" method="POST" action="{{route('product.update',$edit->product_id)}}" enctype="multipart/form-data">
                                    @method('PATCH')
                                    @csrf
                                    <div class="form-group"> 
                                        <label for="inputEmail3" class="col-sm-2 control-label">Product Name:</label> 
                                            <div class="col-sm-9">
                                                @error('product_name')
                                                    <strong style="color: red">{{$message}}</strong>
                                                @enderror
                                              
                                                 <input type="text" class="form-control" name="product_name" id="inputEmail3" value="{{$edit->product_name}}" placeholder="Enter Product Name"> </div> 
                                            </div> 
                                    <div class="form-group"> 
                                        <label for="inputEmail3" class="col-sm-2 control-label">Product Details:</label> 
                                            <div class="col-sm-9">
                                                @error('product_details')
                                                    <strong style="color: red">{{$message}}</strong>
                                                @enderror
                                              
                                                 <input type="text" class="form-control" name="product_details" id="inputEmail3" value="{{$edit->product_details}}" placeholder="Enter Product details"> </div>
                                            </div> 
                                    <div class="form-group"> 
                                        <label for="inputEmail3" class="col-sm-2 control-label">Product Price:</label> 
                                            <div class="col-sm-9">
                                                @error('product_price')
                                                    <strong style="color: red">{{$message}}</strong>
                                                @enderror
                                              
                                                 <input type="text" class="form-control" name="product_price" id="inputEmail3" value="{{$edit->product_price}}" placeholder="Enter Product details"></div>
                                            </div>

                                    <div class="form-group"> 
                                        <label for="inputEmail3" class="col-sm-2 control-label">Category_id:</label> 
                                            <div class="col-sm-9">
                                                @error('category_id')
                                                    <strong style="color: red">{{$message}}</strong>
                                                @enderror
                                              
                                                 {{-- <input type="text" class="form-control" name="product_details" id="inputEmail3" placeholder="Enter Product details"><br> --}}
                                                 <select name="category_id" class="form-control">
                                                    <option value="">Select Category</option>
                                                        @foreach ($categories as $category)
                                                            <option value="{{$category->category_id}}" @if ($category->category_id==$edit->category_id)selected @endif>
                                                                
                                                                
                                                                            {{$category->category_name}}
                                                            </option>
                                                            
                                                        @endforeach
                                                 </select>
                                            </div> 
                                        </div>
                                    <div class="form-group"> 
                                        <label for="inputEmail3" class="col-sm-2 control-label">Product Account:</label> 
                                            <div class="col-sm-9">
                                                @error('product_account')
                                                    <strong style="color: red">{{$message}}</strong>
                                                @enderror
                                              
                                                 <input type="text" class="form-control" name="product_account" value="{{$edit->product_account}}" id="inputEmail3" placeholder="Enter Product account"> </div> 
                                            </div> 
                                    
                                    <div class="form-group"> 
                                        <label for="inputEmail3" class="col-sm-2 control-label">Product image:</label> 
                                            <div class="col-sm-9">
                                                @error('product_photopath')
                                                    <strong style="color: red">{{$message}}</strong>
                                                @enderror
                                              
                                                 <img src="/upload/{{$edit->product_photopath}}" width="100" alt="">{{$edit->product_photopath}}<input type="file" class="form-control" name="product_photopath"  id="inputEmail3" placeholder="Enter Product image"> </div> 
                                            </div> 
                                            {{-- <br> --}}
                                            <div class="col-sm-offset-2"> 
                                                        <button type="submit" class="btn btn-primary">Edit product</button>
                                                        <button type="rester" class="btn btn-danger">reset</button>
                                                        <button type="button"  onclick="window.location='product'; "class="btn btn-info">view</button>
								            </div> 
                                            
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