 <div id="mymodal" class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
      <div class="modal-dialog card">
        <div class="modal-content p-0 b-0">
          <div class="panel panel-color panel-primary card-body">
            <div class="card-title">
              <button type="button" class="close m-t-5" data-dismiss="modal" aria-hidden="true">×</button>
              <div class="panel-title text-light" id="model-title">Edit</div>
              <hr>
            </div>
            <div class="modal-body">
              <div id="is-loading is-loading-lg" style="display: none; text-align: center;"> <img src="http://anil2gtv.buzz/assets/images/preloader.gif"> </div>
              
              <!-- content will be load here -->
              <div id="dynamic-content"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
<a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
 <!--End Back To Top Button-->
 
 <!--Start footer-->
 <footer class="page-footer">
  <div class="container"  >
  </div>
</footer>
<!--End footer-->
<style>
  .bordered {
    width: 100%;
    height: 120px;
    padding: 10px;
    border: 10px solid red;
  }
</style>

</div><!--End wrapper-->
<div style="display:none" id="dvloader"><img src="<?php echo base_url();?>/assets/img/loading.gif" /></div>

<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url();?>/assets/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/popper.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>

<!-- simplebar js -->
<script src="<?php echo base_url();?>/assets/plugins/simplebar/js/simplebar.js"></script>

<!-- waves effect js -->
<script src="<?php echo base_url();?>/assets/js/waves.js"></script>
<!-- sidebar-menu js -->
<script src="<?php echo base_url();?>/assets/js/sidebar-menu.js"></script>
<!-- Custom scripts -->
<script src="<?php echo base_url();?>/assets/js/app-script.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/toastr.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/sweetalert.js"></script>
<script src="<?php echo base_url();?>/assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $(document).on('click', '#menu', function(e) {
            e.preventDefault();
            var url = $(this).data('id');// it will get action url
            var title = $(this).attr('title');//it will get title 
            $('#dynamic-content').html('');// leave it blank before ajax call
            $('#model-title').html(title);
            $('#modal-loader').show(); // load ajax loader
            $.ajax({
                    url: url,
                    type: 'POST',
                    dataType: 'html'
                })
            .done(function(data) {
                console.log(data);
                $('#dynamic-content').html('');
                $('#dynamic-content').html(data); // load response 
                $('#modal-loader').hide(); // hide ajax loader 
            })
            .fail(function() {
                $('#dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
                $('#modal-loader').hide();
            });
        });
    });
</script>

<script src="<?php echo base_url();?>/assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url();?>/assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url();?>assets/js/common.js"></script>

<script type="text/javascript">
  function status_change(id,tablename){
    var status = $('#status_change_'+tablename+id).val();
    if(status=='enable'){
      var status_a='disable';
    }else{
      var status_a='enable';
    } 
    swal({
      title: "Are you sure?",
      text: "You want to "+status_a+" "+tablename+"!",
      type: "warning",
      showCancelButton: true,
      confirmButtonClass: "btn-danger",
      confirmButtonText: "Yes,"+ status_a +" it!",
      cancelButtonText: "No!",
      closeOnConfirm: false,
      closeOnCancel: false
    },
    function(isConfirm) {
      if (isConfirm) {
       $.ajax({
        type:'POST',
        url:'<?php echo base_url(); ?>asakdk/status_change',
        data:{tablename:tablename,id:id,status:status},
        success:function(resp){
          swal( "Your "+tablename+"  has been "+ status_a+ ".", "success");
          jQuery('#'+tablename+id).html(status_a); 
          jQuery('#status_change_'+tablename+id).val(status_a); 

        }
      });
       
     } else {
      swal("Cancelled", "Your "+tablename+" is safe :)", "error");
    }
  });
  }
  function delete_record(id,tablename){
    swal({
      title: "Are you sure?",
      text: "You will not be able to recover this "+tablename+"!",
      type: "warning",
      showCancelButton: true,
      confirmButtonClass: "btn-danger",
      confirmButtonText: "Yes, delete it!",
      cancelButtonText: "No, cancel plx!",
      closeOnConfirm: false,
      closeOnCancel: false
    },
    function(isConfirm) {
      if (isConfirm) {
       $.ajax({
        type:'POST',
        url:'<?php echo base_url(); ?>asakdk/delete_record',
        data:{tablename:tablename,id:id},
        success:function(resp){
          swal("Deleted!", "Your "+tablename+"  has been deleted.", "success");

          setTimeout(function(){ location.reload(); }, 1500);

        }
      });
       
     } else {
      swal("Cancelled", "Your "+tablename+" is safe :)", "error");
    }
  });
  }

</script>

</body>

</html>
