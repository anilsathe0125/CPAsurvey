<?php
$this->load->view('admin/comman/header');
?>

<div class="clearfix"></div>

<div class="content-wrapper">
	<div class="container-fluid">
		<!-- Breadcrumb-->
		<div class="row pt-2 pb-2">
			<div class="col-sm-9">
				<h4 class="page-title">Add Category</h4>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a></li>
					<li class="breadcrumb-item"><a href="javaScript:void();">Coupon</a></li>
					<li class="breadcrumb-item active" aria-current="page">Update Coupon</li>
				</ol>
			</div>
			<div class="col-sm-3">
				<div class="btn-group float-sm-right">
					<a href="<?php echo base_url();?>asakdk/rcouponlist" class="btn btn-outline-primary waves-effect waves-light">Coupon List</a>
				</div>
			</div>
		</div>
		<!-- End Breadcrumb-->
		<?php // print_r($coupon);?>
		<div class="row">
			<div class="col-lg-10 mx-auto">
				<div class="card">
					<div class="card-body">
						<div class="card-title">Update Coupon</div>
						<hr>
						<form id="edit_coupon_form"  enctype="multipart/form-data">
							<div class="form-group">
								<label for="input-1">Coupon Name</label>
								<input type="text" name="coupon_name" class="form-control" id="input-1" placeholder="Enter Your Coupon Name" value="<?php echo $coupon[0]->rcname;?>">
							</div>
							<div class="form-group">
								<label for="input-1">Coupon Code</label>
								<input type="text" name="coupon_code" class="form-control" id="input-1" placeholder="Enter Your Coupon Code" value="<?php echo $coupon[0]->rccode;?>">
							</div>
							<div class="form-group">
								<label for="input-1">Coupon Points</label>
								<input type="text" name="coupon_points" class="form-control" id="input-1" placeholder="Enter Your Coupon Points" value="<?php echo $coupon[0]->rcpoints;?>">
							</div>
							<div class="form-group">
								<label for="input-1">Coupon Expiry Date</label>
								<input type="date" name="coupon_expiry" class="form-control" id="input-1" placeholder="Enter Your Coupon Expiry Date" value="<?php echo $coupon[0]->rcexpire;?>">
							</div>
							<input type="hidden" name="id" value="<?PHP echo $coupon[0]->rcid; ?>">

							<div class="form-group">
								<label for="input-2">Coupon Image</label>
								<input type="file" name="coupon_image" class="form-control" id="input-2" onchange="readURL(this,'showImage')">
								<input type="hidden" name="couponimage" value="<?php echo $coupon[0]->img; ?>">
								<p class="noteMsg">Note: Image Size must be lessthan 2MB.Image Height and Width less than 1000px.</p>
								<div><img id="showImage" src="<?php echo base_url().'assets/img/cards/'.$coupon[0]->img; ?>" height="100px;" width="100px;"></div>
							</div>
							<div class="form-group">
								<button type="button" onclick="updateCoupon()" class="btn btn-primary shadow-primary px-5">Update</button>
							</div>
						</form>
					</div>
				</div>


			</div></div></div>
		</div>
		<?php
		$this->load->view('admin/comman/footerpage');
		?>
		<script type="text/javascript">
			function updateCoupon(){
				var category_name=jQuery('input[name=coupon_name]').val();
				if(category_name==''){
					toastr.error('Please enter coupon name','failed');
					return false;
				}
				$("#dvloader").show();

				var formData = new FormData($("#edit_coupon_form")[0]);
				$.ajax({
					type:'POST',
					url:'<?php echo base_url(); ?>asakdk/updatecoupon',
					data:formData,
					cache:false,
					contentType: false,
					processData: false,
					dataType: 'json', 
					success:function(resp){
						$("#dvloader").hide();
						if(resp.status=='200'){
							document.getElementById("edit_coupon_form").reset();
							toastr.success(resp.msg);
							window.location.replace('<?php echo base_url(); ?>asakdk/rcouponlist');
						}else{
							toastr.error(resp.msg);
						}
					}
				});
			}
		</script>