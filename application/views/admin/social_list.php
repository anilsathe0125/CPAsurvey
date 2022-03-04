<?php
 $this->load->view('admin/comman/header');
?>

<link href="<?php echo base_url();?>assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Social Offers</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Offers</a></li>
            <li class="breadcrumb-item active" aria-current="page">Social Offers</li>
         </ol>
	   </div>
     <div class="col-sm-3">
       <div class="btn-group float-sm-right">
           <a href="<?php echo base_url();?>asakdk/add_social" class="btn btn-outline-primary waves-effect waves-light">Add Social Offer</a>
      </div>
     </div>
     </div>
    <!-- End Breadcrumb-->
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i>Social Offer Record</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="default-datatable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Image</th>
                        <th>Social Network</th>
                        <th>Link</th>
                        <th>Points</th>
                        <th>Created date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                     <?php $i=1;foreach($social as $soc){ ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><img src="<?php echo base_url().''.$soc->so_image; ?>" height="100px;" width="100px;"></td>
                        <td><?php echo $soc->so_network; ?></td>
                        <td><?php echo $soc->so_link; ?></td>
                        <td><?php echo $soc->so_points; ?></td>
                        <td><?php echo $soc->so_date; ?></td>
                        <td><a href="javaScript:void(0)"  onclick="status_change('<?php echo $soc->soid; ?>','social_offer')" id="social_offer<?php echo $soc->so_status; ?>"><?php echo $soc->so_status; ?></a>
                        <input type="hidden" name="status_change" id="status_change_social_offer<?php echo $soc->soid; ?>" value="<?php echo $soc->so_status; ?>">
                      </td>
                      <td><a href="#" data-toggle="modal" data-target="#mymodal" data-id="/asakdk/edit_social?id=<?php echo $soc->soid; ?>" id="menu" title="Edit Social Offer">Edit </a> | <a href="javaScript:void(0)" onclick="delete_record('<?php echo $soc->soid; ?>','social_offer')">Delete</a></td>
                    </tr>
                <?php $i++;} ?>
 
                </tbody>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Points</th>
                        <th>Code</th>
                        <th>Created date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div><!-- End Row-->

<?php
 $this->load->view('admin/comman/footerpage');
?>

 <script>
     $(document).ready(function() {
      //Default data table
       $('#default-datatable').DataTable();
      } );

    </script>
