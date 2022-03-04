<?php
$this->load->view('admin/comman/header');
?>

<div class="content-wrapper">
	<div class="container-fluid">
		<div class="clearfix"></div>
		<div class="row">
			<?php $setn=array(); foreach($settinglist as $set){
				$setn[$set->key]=$set->value;
			}
			?>
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body"> 
				   <div class="card-title">CPABuild Setting</div>
				   <hr>
				    <form id="save_setting"  enctype="multipart/form-data">
					 <div class="form-group row">
					  <label for="input-4" class="col-sm-2 col-form-label">CPABuild User ID</label>
					  <div class="col-sm-10">
						<input type="text" name="cpa_uid" class="form-control" id="input-1" placeholder="Enter Your CPABuild User ID" value="<?php echo $setn['CPA_UID'];?>">
					  </div>
					</div>
					<div class="form-group row">
					  <label for="input-5" class="col-sm-2 col-form-label">CPABuild API Key</label>
					  <div class="col-sm-10">
						<input type="text" name="cpa_key" class="form-control" id="input-1" placeholder="Enter Your CPABuild API Key" value="<?php echo $setn['CPA_API_KEY'];?>">
					  </div>
					</div>
					 <div class="form-group row">
					  <label for="input-1" class="col-sm-2 col-form-label"></label>
					  <div class="col-sm-10">
						<button type="button" class="btn btn-primary shadow-primary px-5" onclick="save_setting()">SUBMIT</button>
					  </div>
					</div>
					</form>
					</div>
				</div>
			</div>
		</div>  
	</div>
</div>
<?php
$this->load->view('admin/comman/footerpage');
?>

<script type="text/javascript">

	function save_setting(){
		var formData = new FormData($("#save_setting")[0]);
		displayLoader();
		$.ajax({
			type:'POST',
			url:'<?php echo base_url(); ?>asakdk/save_cpa_setting' ,
			data:formData,
			cache:false,
			contentType: false,
			processData: false,
			dataType: "json",
			success:function(resp){
				hideLoader();
				if(resp.status=='200'){
					document.getElementById("save_password").reset();
					toastr.success(resp.msg,'App Setting change sucessfully.');
					setTimeout(function(){ location.reload(); }, 500);
				}else{
					toastr.error(resp.msg);
				}
			}
		});
	}
</script>