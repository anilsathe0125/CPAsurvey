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

						<ul class="nav nav-pills nav-pills-danger nav-justified top-icon" role="tablist">
							<li class="nav-item">
								<a class="nav-link active show" data-toggle="pill" href="#piil-17"><i class="icon-home"></i> <span class="hidden-xs">Web Setting</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="pill" href="#piil-20"><i class="icon-lock"></i> <span class="hidden-xs">Change Password</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="pill" href="#piil-18"><i class="icon-user"></i> <span class="hidden-xs">Admob Setting</span></a>
							</li>
						</ul>

						<!-- Tab panes -->
						<div class="tab-content">

							<div id="piil-17" class="container tab-pane active show">
								<form id="save_setting"  enctype="multipart/form-data">

									<div class="form-group">
										<label for="input-1">Website Title</label>
										<input type="text" name="web_name" required class="form-control" id="input-1" placeholder="Enter Your Website Title" value="<?php echo $setn['web_name'];?>">
									</div>

									<div class="form-group">
										<label for="input-1">Company</label>
										<input type="text" name="web_author" required class="form-control" id="input-1" placeholder="Enter Your Website Name" value="<?php echo $setn['Author'];?>">
									</div>

									<div class="form-group">
										<label for="input-2">Web Icon</label>
										<input type="file" name="web_image" required class="form-control" id="input-2" >
										<p></p>
										<input type="hidden" name="web_image_logo" value="<?php echo $setn['web_logo'];?>">
										<div><img src="<?php echo base_url().'assets/img/'.$setn['web_logo'];?>" height="100px;" width="100px;"></div>
									</div>
									
									<div class="form-group">
										<label for="input-2">Host Email</label>
										<input type="text" name="host_email" required class="form-control" id="input-2" value="<?php echo $setn['host_email'];?>">
									</div>

									<div class="form-group">
										<label for="input-2">Contact Number</label>
										<input type="text" name="host_contact" required class="form-control" id="input-2" value="<?php echo $setn['contact'];?>">
									</div>

									<div class="form-group">
										<label for="input-2">Website</label>
										<input type="text" name="host_website" required class="form-control" id="input-2" value="<?php echo $setn['website'];?>">
									</div>

									<div class="form-group">
										<label for="input-2">About Us</label>
										<textarea style="height:150px !important;" name="web_desc" required class="form-control" id="input-2" ><?php echo $setn['web_desripation'];?></textarea>
									</div>

									<div class="form-group">
										<label for="input-2">Privacy Policy</label>
										<textarea style="height:250px !important;"  name="web_privacy" required class="form-control" id="input-2" ><?php echo $setn['privacy_policy'];?></textarea>
									</div>

									<div class="form-group">
										<button type="button" class="btn btn-primary shadow-primary px-5" onclick="save_setting()"> Save</button>
									</div>
								</form>
							</div>

							<div id="piil-20" class="container tab-pane fade">
								<form id="save_password" class="mx-auto">
									<div class="form-group">
										<label for="input-1">New Password</label>
										<input type="password" name="password" required class="form-control" id="password" >
									</div>
									<input type="hidden" name="admin_id" value="<?php echo $admin->id;?>">
									<div class="form-group">
										<label for="input-2">Confirm Password</label>
										<input type="password"  name="confirm_password" required class="form-control" id="confirm_password" value="">
									</div>

									<div class="form-group">
										<button type="button" class="btn btn-primary shadow-primary px-5"
										onclick="change_passwords()"> Save</button>
									</div>
								</form>
							</div>

							<div id="piil-18" class="container tab-pane fade">
								<form id="save_admob"  enctype="multipart/form-data">
									<div class="form-group">
										<label for="input-1">Publisher ID</label>
										<input type="text" name="publisher_id" class="form-control" id="input-1" placeholder="Enter Your App Name" value="<?php echo $setn['publisher_id'];?>">
									</div>

									<div class="form-group">
										<label for="input-2">Banner Ad</label>
										<select name="banner_ad"  class="form-control" id="interstital_ad">
											<option> Select Banner</option>
											<option value="yes" <?php if($setn['banner_ad']=='yes'){ echo 'selected="selected"'; } ?> >Yes</option>
											<option value="no" <?php if($setn['banner_ad']=='no'){ echo 'selected="selected"'; } ?>  >No</option>
										</select>

									</div>
									<div class="form-group">
										<label for="input-1">Banner Ad ID</label>
										<input type="text" name="banner_ad_id" required class="form-control" id="input-1" placeholder="Enter Your App Name" value="<?php echo $setn['banner_adid'];?>">
									</div>

									<div class="form-group">
										<label for="input-2">Interstital Ad</label>
										<select name="interstital_ad"  class="form-control" id="interstital_ad">
											<option> Select Banner</option>
											<option value="yes" <?php if($setn['interstital_ad']=='yes'){ echo 'selected="selected"'; } ?> >Yes</option>
											<option value="no" <?php if($setn['interstital_ad']=='no'){ echo 'selected="selected"'; } ?>  >No</option>
										</select>
									</div>
									<div class="form-group">
										<label for="input-1">Interstital Ad ID</label>
										<input type="text" name="interstital_adid" required class="form-control" id="input-1" placeholder="Enter Your App Name" value="<?php echo $setn['interstital_adid'];?>">
									</div>

									<div class="form-group">
										<label for="input-2">Interstital Ad Clicks</label>
										<input type="text" name="interstital_adid_click" required class="form-control" id="input-2" value="<?php echo $setn['interstital_adclick'];?>">
									</div>

									<div class="form-group">
										<label for="input-2">Custom Ad</label>
										<select name="custom_ad"  class="form-control" id="interstital_ad">
											<option> Select Option</option>
											<option value="yes" <?php if($setn['custom_ads']=='yes'){ echo 'selected="selected"'; } ?> >Yes</option>
											<option value="no" <?php if($setn['custom_ads']=='no'){ echo 'selected="selected"'; } ?>  >No</option>
										</select>

										<div class="form-group">
											<p></p>
											<label for="input-2">Custom ads image</label>
											<input type="file" name="web_image1" required class="form-control" id="input-2" required onchange="readURL(this,'categoryDisImage1')" >
											<input type="hidden" name="web_image_logo1" value="<?php echo $setn['custom_image'];?>">
											<p class="noteMsg">Note: Image Size must be less than 2MB. Image Height and Width less than 1000px.</p>
											<div><img  id="categoryDisImage1" src="<?php echo base_url().'assets/images/app/'.$setn['custom_image'];?>" height="60px;" width="300px;"></div>
										</div>
									</div>

									<div class="form-group">
										<button type="button" class="btn btn-primary shadow-primary px-5" onclick="save_admob()"> Save</button>
									</div>
								</form>
							</div>

						</div>
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
			url:'<?php echo base_url(); ?>asakdk/savesetting' ,
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


	function change_password(){
		var formData = new FormData($("#save_password")[0]);
		var password = jQuery('#password').val();
		var confirm_password = jQuery('#confirm_password').val();
		if(password!=confirm_password){
			toastr.error('Password and confirm password not match.');
			return false;
		}
		displayLoader();
		$.ajax({
			type:'POST',
			url:'<?php echo base_url(); ?>asakdk/change_password' ,
			data:formData,
			cache:false,
			contentType: false,
			processData: false,
			dataType: "json",
			success:function(resp){
				hideLoader();
				if(resp.status=='200'){
					document.getElementById("save_password").reset();
					toastr.success(resp.msg,'Password change sucessfully.');
					setTimeout(function(){ location.reload(); }, 500);
				}else{
					toastr.error(resp.msg);
				}
			}
		});
	}

	function save_admob(){
		var formData = new FormData($("#save_admob")[0]);
		$.ajax({
			type:'POST',
			url:'<?php echo base_url(); ?>asakdk/save_admob' ,
			data:formData,
			cache:false,
			contentType: false,
			processData: false,
			success:function(resp){
				document.getElementById("save_admob").reset();
				toastr.success('Setting saved.');
			}
		});
	}

</script>