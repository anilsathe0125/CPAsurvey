<?php
$this->load->view('admin/comman/header');
?>

<?php $setn=array(); 
foreach($settinglist as $set){
 $setn[$set->key]=$set->value;
}
?> 

<div class="clearfix"></div>

<div class="content-wrapper">
  <div class="container-fluid">

    <!--Start Dashboard Content-->
    
    <div class="row mt-4">
      <div class="col-12 col-lg-6 col-xl-3">
        <div class="card gradient-knight">
          <div class="card-body">
            <div class="media">
              <span class="text-white" style="font-size:30px;"><i class="fa fa-usd"></i></span>
              <div class="media-body text-left" style="margin-left: 10px">
                <a href="<?php echo base_url();?>/asakdk/dashboard">
                  <h4 class="text-white">0</h4>
                  <h5 class="text-white">Total Income</<h5>
                </a>
                </div>
                <div class="align-self-center"><span id="dash-chart-1"></span></div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card gradient-scooter">
            <div class="card-body">
              <div class="media">
                <span class="text-white" style="font-size:30px;"><i class="fa fa-credit-card"></i></span>
               <div class="media-body text-left" style="margin-left: 10px">
                <a href="<?php echo base_url();?>/asakdk/rcouponlist">
                  <h4 class="text-white"><?php echo $rcoupon;?></h4>
                  <h5 class="text-white">Coupon</h5>
                </a>
                </div>
                <div class="align-self-center"><span id="dash-chart-3"></span></div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card gradient-blooker">
            <div class="card-body">
              <div class="media">
                <span class="text-white" style="font-size:30px;"><i class="fa fa-gift"></i></span>
                <div class="media-body text-left" style="margin-left: 10px">
                  <a href="<?php echo base_url();?>/asakdk/dashboard">
                    <h4 class="text-white">0</h4>
                    <h5 class="text-white">Gift Cards</h5>
                 </a>
                  </div>
                  <div class="align-self-center"><span id="dash-chart-1"></span></div>
                </div>
              </div>
            </div>
          </div>

        </div><!--End Row-->

        
        <div class="row mt-4">

         <div class="col-12 col-lg-6 col-xl-3">
          <div class="card gradient-quepal">
            <div class="card-body">
              <div class="media">
                 <span class="text-white" style="font-size:30px;"><i class="fa fa-user"></i></span>
                <div class="media-body text-left" style="margin-left: 10px">
                  <a href="<?php echo base_url();?>/asakdk/userlist">
                    <h4 class="text-white"><?php echo $register_user;?></h4>
                    <h5 class="text-white">Active User</h5>
                 </a>
                  </div>
                  <div class="align-self-center"><span id="dash-chart-3"></span></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 col-xl-3">
            <div class="card gradient-meridian">
              <div class="card-body">
                <div class="media">
                  <span class="text-white" style="font-size:30px;"><i class="fa fa-list-alt"></i></span>
                  <div class="media-body text-left" style="margin-left: 10px">
                    <a href="<?php echo base_url();?>/asakdk/dashboard">
                      <h4 class="text-white">0</h4>
                      <h5 class="text-white"> </h5>
                    </a>
                    </div>
                    <div class="align-self-center"><span id="dash-chart-1"></span></div>
                  </div>
                </div>
              </div>
            </div>

            
            <div class="col-12 col-lg-6 col-xl-3">
              <div class="card gradient-redmist">
                <div class="card-body">
                  <div class="media">
                    <span class="text-white" style="font-size:30px;"><i class="fa fa-money"></i></span>
                    <div class="media-body text-left" style="margin-left: 10px">
                      <a href="<?php echo base_url();?>/asakdk/dashboard">
                        <h4 class="text-white">0</h4>
                        <h5 class="text-white"> </h5>
                     </a>
                      </div>
                      <div class="align-self-center"><span id="dash-chart-3"></span></div>
                    </div>
                  </div>
                </div>
              </div>
            </div><!--End Row-->

            <!--End Dashboard Content-->

          </div>
          <!-- End container-fluid-->

        </div><!--End content-wrapper-->
        <?php
        $this->load->view('admin/comman/footerpage');
        ?>

