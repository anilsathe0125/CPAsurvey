<?php
$this->load->view('admin/comman/header');
?>

<div class="clearfix"></div>

<div class="content-wrapper">
	<div class="container-fluid">
		<!-- Breadcrumb-->
		<div class="row pt-2 pb-2">
			<div class="col-sm-9">
				<h4 class="page-title">Add Card</h4>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a></li>
					<li class="breadcrumb-item"><a href="javaScript:void();">Card</a></li>
					<li class="breadcrumb-item active" aria-current="page">Update Card</li>
				</ol>
			</div>
			<div class="col-sm-3">
				<div class="btn-group float-sm-right">
					<a href="<?php echo base_url();?>asakdk/rcardlist" class="btn btn-outline-primary waves-effect waves-light">Card List</a>
				</div>
			</div>
		</div>
		<!-- End Breadcrumb-->
		<?php // print_r($card);?>
		<div class="row">
			<div class="col-lg-10 mx-auto">
				<div class="card">
					<div class="card-body">
						<div class="card-title">Update Card</div>
						<hr>
						<form id="edit_card_form"  enctype="multipart/form-data">
							<div class="form-group">
								<label for="input-1">Card Name</label>
								<input type="text" name="card_name" class="form-control" id="input-1" placeholder="Enter Your card Name" value="<?php echo $card[0]->rc_name;?>">
							</div>
							<div class="form-group">
								<label for="input-1">Card Price</label>
								<input type="text" name="card_price" class="form-control" id="input-1" placeholder="Enter Your card Price" value="<?php echo $card[0]->rc_price;?>">
							</div>
							<div class="form-group">
								<label for="input-1">Card Points</label>
								<input type="text" name="card_points" class="form-control" id="input-1" placeholder="Enter Your card Points" value="<?php echo $card[0]->rc_points;?>">
							</div>
							<div class="form-group">
								<label for="input-4">Card Description</label>
							    <textarea rows="8" name="card_desc" class="form-control" id="basic-textarea"><?php echo $card[0]->rc_desc;?></textarea>
							</div>
							<input type="hidden" name="id" value="<?PHP echo $card[0]->rc_id; ?>">

							<div class="form-group">
								<label for="input-2">Card Image</label>
								<input type="file" name="card_image" class="form-control" id="input-2" onchange="readURL(this,'showImage')">
								<input type="hidden" name="cardimage" value="<?php echo $card[0]->rc_image; ?>">
								<p class="noteMsg">Note: Image Size must be lessthan 2MB.Image Height and Width less than 1000px.</p>
								<div><img id="showImage" src="<?php echo base_url().'assets/img/cards/'.$card[0]->rc_image; ?>" height="100px;" width="100px;"></div>
							</div>
							<div class="form-group">
								<button type="button" onclick="updateCard()" class="btn btn-primary shadow-primary px-5">Update</button>
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
			function updateCard(){
				var Card_name=jQuery('input[name=card_name]').val();
				if(Card_name==''){
					toastr.error('Please enter card name','failed');
					return false;
				}
				$("#dvloader").show();

				var formData = new FormData($("#edit_card_form")[0]);
				$.ajax({
					type:'POST',
					url:'<?php echo base_url(); ?>asakdk/updatecard',
					data:formData,
					cache:false,
					contentType: false,
					processData: false,
					dataType: 'json', 
					success:function(resp){
						$("#dvloader").hide();
						if(resp.status=='200'){
							document.getElementById("edit_card_form").reset();
							toastr.success(resp.msg);
							window.location.replace('<?php echo base_url(); ?>asakdk/cardlist');
						}else{
							toastr.error(resp.msg);
						}
					}
				});
			}
		</script>