<?php
$this->load->view('admin/comman/header');
?>

<?php $setn=array(); 
foreach($settinglist as $set){
	$setn[$set->key]=$set->value;
}
?> 

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/toastr.min.js"></script>

<div class="clearfix"></div>

<div class="content-wrapper">
	<div class="container-fluid">
		<!-- Breadcrumb-->
		<div class="row pt-2 pb-2">
			<div class="col-sm-9">
				<h4 class="page-title">Add Coupon</h4>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a></li>
					<li class="breadcrumb-item"><a href="javaScript:void();">Coupon</a></li>
					<li class="breadcrumb-item active" aria-current="page">Add Coupon</li>
				</ol>
			</div>
			<div class="col-sm-3">
				<div class="btn-group float-sm-right">
					<a href="<?php echo base_url();?>asakdk/rcouponlist" class="btn btn-outline-primary waves-effect waves-light">Coupon List</a>
				</div>
			</div>
		</div>
		<!-- End Breadcrumb-->

		<div class="row">
			<div class="col-lg-10 mx-auto">
				<div class="card">
					<div class="card-body">
						<div class="card-title">Add Coupon</div>
						<hr>
						<form id="coupon_form"  enctype="multipart/form-data">
							<div class="form-group">
								<label for="input-1">Coupon Name</label>
								<input type="text" name="coupon_name" class="form-control" id="name">
							</div>
							<div class="form-group">
								<label for="input-1">Coupon Code</label>
								<input type="text" name="coupon_code" class="form-control" id="name">
							</div>
							<div class="form-group">
								<label for="input-1">Coupon Points</label>
								<input type="text" name="coupon_points" class="form-control" id="name">
							</div>
							<div class="form-group">
								<label for="input-1">Coupon Expiry Date</label>
								<input type="date" name="coupon_expiry" class="form-control" id="name">
							</div>
							<div class="form-group">
								<label for="input-2">Coupon Image</label>
								<input type="file" name="coupon_image" class="form-control" id="input-2" onchange="readURL(this,'showImage')" >
								<p class="noteMsg">Note: Image Size must be lessthan 2MB.Image Height and Width less than 1000px.</p>
								<img id="showImage" src="<?php echo base_url().'assets/img/placeholder.png';?>" height="100px" width="100px"/>
							</div>
							<div class="form-group">
								<button type="button" onclick="saveCoupon()" class="btn btn-primary shadow-primary px-5">Save</button>
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
			function saveCoupon(){

				var formData = new FormData($("#coupon_form")[0]);
				var category = $("#name").val();
				if(category == '') {
					toastr.error('Please enter Category Name.');
					$("#category").focus();
					return false;
				}
				$("#dvloader").show();
				$.ajax({
					type:'POST',
					url:'<?php echo base_url(); ?>asakdk/savercoupon',
					data:formData,
					cache:false,
					contentType: false,
					processData: false,
					dataType: 'json', 
					success:function(resp){
						$("#dvloader").hide();
						if(resp.status=='200'){
							document.getElementById("coupon_form").reset();
							toastr.success(resp.msg);
							// window.location.replace('<?php echo base_url(); ?>index.php/admin/categorylist');
						}else{
							toastr.error(resp.msg);
						}
					}
				});
			}
		</script>