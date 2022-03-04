
<?php $setn=array(); 
foreach($settinglist as $set){
 $setn[$set->key]=$set->value;
}
?> 
<!-- Start wrapper-->
<div id="wrapper">

  <!--Start sidebar-wrapper-->
  <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
   <div class="brand-logo">
    <a href="<?php echo base_url();?>asakdk">
     <img src="<?php echo base_url().'assets/img/'.$setn['web_logo']; ?>" class="logo-icon" >
     <h5 class="logo-text"><?php echo $setn['web_name'];?></h5>
   </a>
 </div>

 <ul class="sidebar-menu do-nicescrol">

  <li>
    <a href="<?php echo base_url();?>asakdk/dashboard" class="waves-effect">
      <i class="icon-home"></i><span>Dashboard</span><i class="fa fa-angle-right pull-right"></i>
    </a>
  </li>

  <li>
    <a href="<?php echo base_url();?>asakdk/rcouponlist" class="waves-effect">
      <i class="zmdi zmdi-card"></i><span>Redeem Coupon</span>
      <i class="fa fa-angle-right float-right"></i>
    </a>
    <ul class="sidebar-submenu">
      <li><a href="<?php echo base_url();?>asakdk/addrcoupon"><i class="fa fa-long-arrow-right"></i> Add Coupon</a></li>
      <li><a href="<?php echo base_url();?>asakdk/rcouponlist"><i class="fa fa-long-arrow-right"></i> List Coupon</a></li>

    </ul>
  </li>
  
  <li>
    <a href="<?php echo base_url();?>asakdk/cardlist" class="waves-effect">
      <i class="zmdi zmdi-card-giftcard"></i><span>Redeem Card</span>
      <i class="fa fa-angle-right float-right"></i>
    </a>
    <ul class="sidebar-submenu">
      <li><a href="<?php echo base_url();?>asakdk/addcard"><i class="fa fa-long-arrow-right"></i> Add Card</a></li>
      <li><a href="<?php echo base_url();?>asakdk/cardlist"><i class="fa fa-long-arrow-right"></i> List Card</a></li>

    </ul>
  </li>

  <li>
    <a href="#" class="waves-effect">
      <i class="fa fa-gift" aria-hidden="true"></i><span>Offers</span>
      <i class="fa fa-angle-right float-right"></i>
    </a>
    <ul class="sidebar-submenu">
      <li><a href="<?php echo base_url();?>asakdk/social_list"><i class="fa fa-long-arrow-right"></i>Social Offer</a></li>
    </ul>
  </li>

  <li>
    <a href="#" class="waves-effect">
      <i class="ti-image"></i><span>Reports</span>
      <i class="fa fa-angle-right float-right"></i>
    </a>
    <ul class="sidebar-submenu">
      <li><a href="<?php echo base_url();?>asakdk/cpa_report"><i class="fa fa-long-arrow-right"></i>CPABuild Reports</a></li>
    </ul>
  </li>
  
  <li>
    <a href="<?php echo base_url();?>asakdk/userlist" class="waves-effect">
      <i class="fa fa-user"></i><span>User</span>
      <i class="fa fa-angle-right float-right"></i>
    </a>
    <ul class="sidebar-submenu">
       <li><a href="<?php echo base_url();?>asakdk/adduser"><i class="fa fa-long-arrow-right"></i> Add User</a></li>
      <li><a href="<?php echo base_url();?>asakdk/userlist"><i class="fa fa-long-arrow-right"></i> List User</a></li>
    </ul>
  </li> 

  <li>
    <a href="<?php echo base_url();?>asakdk/settingpage" class="waves-effect">
      <i class="fa fa-cogs"></i><span>Setting</span>
      <i class="fa fa-angle-right float-right"></i>
    </a>
    <ul class="sidebar-submenu">
       <li><a href="<?php echo base_url();?>asakdk/settingpage"><i class="fa fa-long-arrow-right"></i> Common Setting</a></li>
      <li><a href="<?php echo base_url();?>asakdk/setting_cpa_build"><i class="fa fa-long-arrow-right"></i> CPABuild Setting</a></li>
    </ul>
  </li>

  <li>
    <a href="<?php echo base_url();?>login?logout" class="waves-effect">
      <i class="icon-power mr-2"></i><span>Logout</span>
    </a>
  </li>
</ul>

</div>
<!--End sidebar-wrapper-->
