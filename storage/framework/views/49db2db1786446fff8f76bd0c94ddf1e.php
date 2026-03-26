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
				<div class="forms">
					<h2 class="title1">Product Form</h2>
					
					<div class=" form-grids row form-grids-right">
						<div class="widget-shadow " data-example-id="basic-forms"> 
							<div class="form-title">
								<h4>Add Product information:</h4>
							</div>
							<div class="form-body">
								<form class="form-horizontal" method="POST" action="<?php echo e(route('product.store')); ?>" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group"> 
                                        <label for="inputEmail3" class="col-sm-2 control-label">Product Name:</label> 
                                            <div class="col-sm-9">
                                                <?php $__errorArgs = ['product_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <strong style="color: red"><?php echo e($message); ?></strong>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                              
                                                 <input type="text" class="form-control" name="product_name" id="inputEmail3" value="<?php echo e(old('product_name')); ?>" placeholder="Enter Product Name"> </div> 
                                            </div> 
                                    <div class="form-group"> 
                                        <label for="inputEmail3" class="col-sm-2 control-label">Product Details:</label> 
                                            <div class="col-sm-9">
                                                <?php $__errorArgs = ['product_details'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <strong style="color: red"><?php echo e($message); ?></strong>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                              
                                                 <input type="text" class="form-control" name="product_details" id="inputEmail3" value="<?php echo e(old('product_details')); ?>" placeholder="Enter Product details"> </div>
                                            </div> 
                                    <div class="form-group"> 
                                        <label for="inputEmail3" class="col-sm-2 control-label">Product Price:</label> 
                                            <div class="col-sm-9">
                                                <?php $__errorArgs = ['product_price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <strong style="color: red"><?php echo e($message); ?></strong>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                              
                                                 <input type="text" class="form-control" name="product_price" id="inputEmail3" value="<?php echo e(old('product_price')); ?>" placeholder="Enter Product details"></div>
                                            </div>

                                    <div class="form-group"> 
                                        <label for="inputEmail3" class="col-sm-2 control-label">Category_id:</label> 
                                            <div class="col-sm-9">
                                                <?php $__errorArgs = ['category_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <strong style="color: red"><?php echo e($message); ?></strong>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                              
                                                 
                                                 <select name="category_id" class="form-control">
                                                    <option value="">Select Category</option>
                                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($category->category_id); ?>">
                                                                            <?php echo e($category->category_name); ?>

                                                            </option>
                                                            
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                 </select>
                                            </div> 
                                        </div>
                                    <div class="form-group"> 
                                        <label for="inputEmail3" class="col-sm-2 control-label">Product Account:</label> 
                                            <div class="col-sm-9">
                                                <?php $__errorArgs = ['product_account'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <strong style="color: red"><?php echo e($message); ?></strong>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                              
                                                 <input type="text" class="form-control" name="product_account" value="<?php echo e(old('product_account')); ?>" id="inputEmail3" placeholder="Enter Product account"> </div> 
                                            </div> 
                                    
                                    <div class="form-group"> 
                                        <label for="inputEmail3" class="col-sm-2 control-label">Product image:</label> 
                                            <div class="col-sm-9">
                                                <?php $__errorArgs = ['product_photopath'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <strong style="color: red"><?php echo e($message); ?></strong>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                              
                                                 <input type="file" class="form-control" name="product_photopath" value="<?php echo e(old('product_photopath')); ?>" id="inputEmail3" placeholder="Enter Product image"> </div> 
                                            </div> 
                                            
                                            <div class="col-sm-offset-2"> 
                                                        <button type="submit" class="btn btn-primary">Add product</button>
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
					<?php echo $__env->make('theampart/footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <!--//footer-->
	</div>
	
	<!-- side nav js -->
	<?php echo $__env->make('/theampart/sidebarscript', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	<!-- Classie --><!-- for toggle left push menu script -->
	<?php echo $__env->make('/theampart/headerscript', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
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
	<?php echo $__env->make('/theampart/sidebarscript', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
	<?php echo $__env->make('/theampart/sidebarscript', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
	<!--//scrolling js-->
	
	<!-- Bootstrap Core JavaScript -->
	<?php echo $__env->make('/theampart/sidebarscript', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
   
</body>
</html><?php /**PATH C:\xampp\htdocs\laravel\admin\resources\views\product\create.blade.php ENDPATH**/ ?>