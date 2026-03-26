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

<?php echo $__env->make('theampart/asset', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
	<?php echo $__env->make('theampart/sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
		<!--left-fixed -navigation-->
		
		<!-- header-starts -->
		<?php echo $__env->make('theampart/header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h2 class="title1">Tables</h2>
                           <div class="panel-body widget-shadow">
						<h4>product Table:</h4>
						<table class="table">
							<thead>
								<tr>
								  <th>#</th>
								  <th>product_name</th>
                                  <th>product_details</th>
                                  <th>product_price</th>
                                  <th>category_id</th>
                                  <th>product_account</th>
                                  <th>product_photopath</th>
								</tr>
							</thead>
							<tbody>
								<?php $__currentLoopData = $mydata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $userdata): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($userdata->product_id); ?></td>
                                        <td><?php echo e($userdata->product_name); ?></td>
                                        <td><?php echo e($userdata->product_details); ?></td>
                                        <td><?php echo e($userdata->product_price); ?></td>
                                        <td><?php echo e($userdata->category_id); ?></td>
                                        <td><?php echo e($userdata->product_account); ?></td>
                                        <td><img src="/upload/<?php echo e($userdata->product_photopath); ?>" width="100" alt=""></td>
                                        <td>
                                            <form action="<?php echo e(route('product.destroy',$userdata->product_id)); ?>" method="post">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
						                            <input type="submit" value="delete">
                                            </form>
                                        </td>
                                        <td><a href="<?php echo e(route('product.edit',$userdata->product_id)); ?>">Edit</a></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</tbody>
						</table>
					</div>

					
				</div>
			</div>
		</div>
		<!--footer-->
		<?php echo $__env->make('theampart/footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
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
</html><?php /**PATH C:\xampp\htdocs\laravel\admin\resources\views\product\index.blade.php ENDPATH**/ ?>