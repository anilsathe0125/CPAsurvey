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
				<h4 class="page-title">Add Social Offer</h4>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a></li>
					<li class="breadcrumb-item"><a href="javaScript:void();">Social Offer</a></li>
					<li class="breadcrumb-item active" aria-current="page">Add Social Offer</li>
				</ol>
			</div>
			<div class="col-sm-3">
				<div class="btn-group float-sm-right">
					<a href="<?php echo base_url();?>asakdk/social_list" class="btn btn-outline-primary waves-effect waves-light">Social Offer List</a>
				</div>
			</div>
		</div>
		<!-- End Breadcrumb-->

		<div class="row">
			<div class="col-lg-10 mx-auto">
				<div class="card">
					<div class="card-body">
						<div class="card-title">Add Social Offer</div>
						<hr>
						<form id="social_form"  enctype="multipart/form-data">
                            <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">NETWORK</label>
                            </div>
                                <select id="social" name="network" class="custom-select" id="inputGroupSelect01">
                                <option selected="" value="facebook">Facebook</option>
                                <option value="twitter">Twitter</option>
                                <option value="youtube">Youtube</option>
                                <option value="instagram">Instagram</option>
                                </select>
                            </div>
							<div class="form-group">
								<label for="input-1">Social Network Link</label>
								<input type="text" name="social_link" class="form-control" id="link" requireded>
							</div>
							<div class="form-group">
								<label for="input-1">Offer Points</label>
								<input type="text" name="social_points" class="form-control" id="points" requireded>
							</div>
							<div class="form-group">
								<button type="button" onclick="saveSocial()" class="btn btn-primary shadow-primary px-5">Save</button>
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
			function saveSocial(){

				var formData = new FormData($("#social_form")[0]);
				var social = $("#name").val();
				if(social == '') {
					toastr.error('Please enter Card Name.');
					$("#social").focus();
					return false;
				}
				$("#dvloader").show();
				$.ajax({
					type:'POST',
					url:'<?php echo base_url(); ?>asakdk/save_social',
					data:formData,
					cache:false,
					contentType: false,
					processData: false,
					dataType: 'json', 
					success:function(resp){
						$("#dvloader").hide();
						if(resp.status=='200'){
							document.getElementById("social_form").reset();
							toastr.success(resp.msg);
							window.location.replace('<?php echo base_url(); ?>asakdk/social_list');
						}else{
							toastr.error(resp.msg);
						}
					}
				});
			}
		</script>