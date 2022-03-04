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
		    <h4 class="page-title">CPABuild Report</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">CPABuild</a></li>
            <li class="breadcrumb-item active" aria-current="page">CPABuild Report</li>
         </ol>
	   </div>
     </div>
    <!-- End Breadcrumb-->
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Card Record</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="default-datatable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Offer ID</th>
                        <th>User ID</th>
                        <th>PayOut</th>
                        <th>IP Adr</th>
                        <th>Date</th>
                        <th>Country</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                     <?php $i=1;foreach($report as $report){ ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $report->offerId; ?></td>
                        <td><?php echo $this->Adminmodel->get_user_email($report->subId1); ?></td>
                        <td><?php echo $report->payout; ?><i class="fa fa-dollar"></i></td>
                        <td><?php echo $report->ipAddress; ?></td>
                        <td><?php echo Date('Y-m-d',$report->unix); ?></td>
                        <td><?php echo $report->cc; ?></td>
                        <td><?php if($report->status==1):
                        echo'<span class="sp-2 bg-success text-light">COMPLETED</span>';
                        else:
                        echo'<span class="sp-2 bg-danger text-light">REVERSAL</span>';
                        endif;
                        ?></td>
                    </tr>
                <?php $i++;} ?>
 
                </tbody>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Offer ID</th>
                        <th>User ID</th>
                        <th>PayOut</th>
                        <th>IP Adr</th>
                        <th>Date</th>
                        <th>Country</th>
                        <th>Status</th>
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
