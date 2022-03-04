<?php 
$profile = $this->db->get_where('user' , array('email'=>$this->session->userdata('user_email')))->row();
$point   = $this->db->get_where('pont_tbl' , array('uid'=>$this->session->userdata('user_email')))->row();
?>
<!DOCTYPE html>
<html lang="en">
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
        <title><?php echo $page_title;?> - PayPrizes</title>
        <meta name="description" content="#" />
        <meta name="robots" content="noindex,nofollow" />
        <meta name="google-signin-client_id" content="953539035530-4h4ag0g5p9t60ulf9eqfk9or4ekg77lk.apps.googleusercontent.com">
        <link rel="icon" href="../assets/img/favicon.ico">
        <link rel="stylesheet" href="/u_assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="/u_assets/css/atlantis.css">
        <link rel="stylesheet" href="/u_assets/css/demo.css">
        <link rel="stylesheet" href="/u_assets/css/responsive.css">
        <link href="../assets/css/overhang.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/u_assets/plugins/easyautocomplete/easy-autocomplete.min.css">
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="/u_assets/js/plugin/webfont/webfont.min.js" type="d4d107fd82b5d8e93c776951-text/javascript"></script>
        <script src="/u_assets/js/googlewebfont2.js" type="d4d107fd82b5d8e93c776951-text/javascript"></script>
        <script src="https://www.google.com/recaptcha/api.js" async defer type="d4d107fd82b5d8e93c776951-text/javascript"></script>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143268751-1" type="d4d107fd82b5d8e93c776951-text/javascript"></script>
<script type="d4d107fd82b5d8e93c776951-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-143268751-1');
</script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" media="all">
<link rel="stylesheet" href="/u_assets/css/fonts.min.css" media="all">
</head>
<body> 
                        <div class="wrapper" id="get-user" data-userid ="<?php echo $profile->uid;?>">
         
<div class="main-header">
	<div class="logo-header" data-background-color="blue">
		<a href="/" class="logo">
			<font size="+2" style="color: white; font-weight: bold;">PayPrizes</font>
		</a>
		<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon">
				<i class="icon-menu"></i>
			</span>
		</button>
		<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
		<div class="nav-toggle">
			<button class="btn btn-toggle toggle-sidebar">
				<i class="icon-menu"></i>
			</button>
		</div>
	</div>
	<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue">
		<div class="container-fluid">
			<div class="collapse" id="search-nav">
				<div class="navbar-left navbar-form nav-search mr-md-3">
					<div class="input-group">
						<div class="input-group-prepend">
							<button class="btn btn-search pr-1">
								<i class="fa fa-search search-icon"></i>
							</button>
						</div>
						<input type="text" placeholder="Search ..." id="search-site" class="form-control">
					</div>
				</div>
			</div>
			<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
				<li class="nav-item toggle-nav-search hidden-caret">
					<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
						<i class="fa fa-search"></i>
					</a>
				</li> 
				<li class="nav-item dropdown hidden-caret">
					<a class="nav-link dropdown-toggle mark-msg-as-read" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-bell"></i>
											</a>
					<ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
													<li>
								<div class="dropdown-title">You have no new notifications.</div>
							</li>
												<li>
							<div class="notif-scroll scrollbar-outer">
								<div class="notif-center">
									 
								</div>
							</div>
						</li>
						<li>
							<a class="see-all" href="/dashboard/notifications">See all notifications<i class="fa fa-angle-right"></i> </a>
						</li>
					</ul>
				</li>
				<li class="nav-item dropdown hidden-caret">
					<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
						<div class="avatar-sm">
							<img src="<?php echo $profile->pimage;?>" alt="..." class="avatar-img rounded-circle">
						</div>
					</a>
					<ul class="dropdown-menu dropdown-user animated fadeIn">
						<div class="dropdown-user-scroll scrollbar-outer">
							<li>
								<div class="user-box">
									<div class="avatar-lg"><img src="<?php echo $profile->pimage;?>" alt="image profile" class="avatar-img rounded"></div>
									<div class="u-text">
										<h4><font><b><a href="/dashboard/edit_profile">Edit Profile</a></b></font></h4>
										<a href="/dashboard/my_profile" class="btn btn-xs btn-secondary btn-sm">MY PROFILE</a>
									</div>
								</div>
							</li>
							<li>
								<div class="dropdown-divider"></div>
<a class="dropdown-item" href="notifications.php">Notifications</a><!-- 
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="chat-support.php">Chat Support</a> -->
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="settings.php">Settings</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="../login?logout" onclick="if (!window.__cfRLUnblockHandlers) return false; signOut()" data-cf-modified-d4d107fd82b5d8e93c776951-="">Logout</a>
</li>
</div>
</ul>
</li>
</ul>
</div>
</nav>
</div>        <style type="text/css">
	.icon-bell{
	color: #f29825 !important;	
	}
	.icon-dashboard{
	color: #ac6bec !important;
	}
	.icon-dailpoll{
	color: #00a8ff !important;	
	}
	.icon-earnpoint{
	color: #46c35f !important;	
	}
	.icon-referandearn{
	color: #f5465e !important;	
	}
	.icon-giveaway{
	color: #f29825 !important;	
	}
	.icon-claimprizes{
	color: #ac6bec !important;	
	}
	.icon-coupon{
	color: #00a8ff !important;	
	}
	.icon-inbox{
	color: #46c35f !important;
	}
</style>
    <?php include 'navigation.php';?>
		<audio id="myAudio" allow="autoplay">
			<source src="/u_assets/sounds/definite.mp3" type="audio/mp3">
		</audio>
<div class="main-panel is-loading is-loading-lg" id="loader">
            <div class="content">
                <div class="panel-header bg-primary-gradient">
                    <div class="page-inner py-5">
                        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                            <div>
                                <h1 class="text-white pb-2 fw-bold"><?php echo $page_title;?></h1>
                            </div>
                        </div>
                    </div>
                </div>
            <?php include $page_name.'.php';?>
            </div>
            <footer class="footer">
	<div class="container-fluid">
		<nav class="pull-left">
			<strong> © 2020 <a href="/" style="text-decoration-line: none;">PayPrizes.com</a>, All rights reserved.</strong>
		</nav>
		<div class="copyright ml-auto">
			<strong> <a href="../privacy-policy.php" target="_blank" style="text-decoration-line: none;">Privacy Policy</a> | <a href="../terms-of-service.php" target="_blank" style="text-decoration-line: none;">Terms of Service</a></strong>
		</div>				
	</div>
</footer><div class="modal fade bd-example-modal-lg" id="offerinfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="card modal-content">
                <div class="card-header modal-header bg-primary text-white">
                    <h3 class="modal-offer-title" id="exampleModalLabel" data-offerid = ''><b>Take a Survey</b></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="card-body">
                    <p style="font-size: 15px;" class="modal-offer-description">Complete a survey and get rewarded instantly. Can be completed multiple times.</p>

                    <div class="row text-center mb-2">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <table class="table">
                                <tr>
                                    <th><font size="+1" >Reward</font></th>
                                    <th><font size="+1">Network</font></th>
                                </tr>
                                <tr>
                                    <th class="model-offer-points" data-points= ''><font size="+1" color="green">120 Points</font></th>
                                    <th><font size="+1" color="green" class="model-network-name">OgAds</font></th>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-2"></div> 
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="card-title"><b>Convertion Requirement</b></h5>
                            <p style="font-size: 14px; color: #8129e2; font-weight: bold;" class="modal-conversion-desc">Recived a reward by Completing Survey.</p>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button type="button" class="btn btn-black btn-border" data-dismiss="modal">Close</button>
                    <a href="" class="btn btn-success text-white model-offer-url" rel="noopener noreferrer nofollow" target="_blank" style="background-color: #5cb85c !important;"><b>Start Offer</b></a>
                </div>
        </div>
    </div>
</div><div class="modal fade" id="welcomemsg">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"><b>Notice</b></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>        
</div>
</div>
        <script src="/u_assets/js/core/bootstrap.min.js" type="d4d107fd82b5d8e93c776951-text/javascript"></script>
        <script src="/u_assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js" type="d4d107fd82b5d8e93c776951-text/javascript"></script>
        <script src="/u_assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js" type="d4d107fd82b5d8e93c776951-text/javascript"></script>
        <script src="../assets/lib/easing/easing.min.js" type="d4d107fd82b5d8e93c776951-text/javascript"></script>
        <script src="../assets/js/overhang.min.js" type="d4d107fd82b5d8e93c776951-text/javascript"></script>      
        <script src="/u_assets/js/plugin/sweetalert/sweetalert.min.js" type="d4d107fd82b5d8e93c776951-text/javascript"></script>
        <script src="/u_assets/js/atlantis.min.js" type="d4d107fd82b5d8e93c776951-text/javascript"></script>
        <script src="/u_assets/js/demo.js" type="d4d107fd82b5d8e93c776951-text/javascript"></script>
        <script src="/u_assets/js/manage-index.js" type="d4d107fd82b5d8e93c776951-text/javascript"></script>
        <script src="/u_assets/plugins/easyautocomplete/jquery.easy-autocomplete.min.js" type="d4d107fd82b5d8e93c776951-text/javascript"></script>
        <script src="/u_assets/js/jquery.idle.min.js" type="d4d107fd82b5d8e93c776951-text/javascript"></script>
        <script src="/u_assets/js/user-dashboard-common.js" type="d4d107fd82b5d8e93c776951-text/javascript"></script>
        <script src="../assets/js/common-scripts.js" type="d4d107fd82b5d8e93c776951-text/javascript"></script>
        <script src="/u_assets/js/manage-api-popup.js" type="d4d107fd82b5d8e93c776951-text/javascript"></script>
        <?php if($page_name=='redeem-points'):?>
        <script src="/u_assets/js/manage-prizes.js" type="text/javascript"></script>
        <?php endif;?>
        <script src="https://apis.google.com/js/platform.js?onload=onLoad" async defer type="d4d107fd82b5d8e93c776951-text/javascript"></script>
        <script src="../assets/js/sign-in-with-google.js" type="d4d107fd82b5d8e93c776951-text/javascript"></script>
    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="d4d107fd82b5d8e93c776951-|49" defer=""></script></body> 
</html>