
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>PayPrizes - Earn Free Gift Cards and Money!</title>
    <meta name="description" content="Earn points by completing free offers, paid surveys, or downloading apps. Collect enough points and claim your gift cards and money." />
    <meta name="robots" content="index,follow" />
    <meta name="google-signin-client_id" content="953539035530-4h4ag0g5p9t60ulf9eqfk9or4ekg77lk.apps.googleusercontent.com">
    <meta property="og:site_name" content="PayPrizes">
    <meta property="og:url" content="https://www.payprizes.com">
    <meta property="og:title" content="PayPrizes - Earn Free Gift Cards and Money!">
    <meta property="og:description" content="Earn points by completing free offers, paid surveys, or downloading apps. Collect enough points and claim your gift cards and money.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://www.payprizes.com/assets/img/social/banner.jpg">
    <meta property="fb:app_id" content="764670140597314">
    <meta name="twitter:site" content="@payprizes">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="PayPrizes - Earn Free Gift Cards and Money!">
    <meta name="twitter:description" content="Earn points by completing free offers, paid surveys, or downloading apps. Collect enough points and claim your gift cards and money.">
    <meta name="twitter:url" content="https://www.payprizes.com">
    <meta name="twitter:image" content="https://www.payprizes.com/assets/img/social/banner.jpg">
    <link rel="canonical" href="https://www.payprizes.com">
    <link rel="icon" href="assets/img/favicon.ico">
    <link href="assets/css/fonts.css" rel="stylesheet">
    <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/overhang.min.css" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js" async defer type="ecaef0ec50a95e17487ac1a2-text/javascript"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143268751-1" type="ecaef0ec50a95e17487ac1a2-text/javascript"></script>
<script type="ecaef0ec50a95e17487ac1a2-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-143268751-1');
</script>    <style>
        @media only screen and (max-width: 600px) {
    .col-xs-2 {
      max-width: 33.33%;
    }
  }
</style>
</head>

<body class="index">
    <header id="header" class="fixed-top homeHeader">
    <div class="container">
        <div class="logo float-left">
            <a href="/" class="scrollto"><img src="assets/img/logo.png" alt="PayPrizes" style="max-height: 38px;"></a>
        </div>
        <nav class="main-nav float-right d-none d-lg-block">
            <ul> 
                <li class="active"><a href="/" class="usersLoginStatus" data-useremail="<?php if($login) echo $profile->email;?>">Home</a></li>
                <li><a href="blog/">Blog</a></li>
                <li><a href="giveaways.php">Giveaways</a></li>
                <li><a href="how-it-works.php">How it Works</a></li>
                <?php if(!$login):?>
                <li><a href="#" class="login link loginpopup">Login | Register</a></li>
                <?php else:?>
                <li class="drop-down"><a class="link-color"><i class="fa fa-user"></i>&nbsp;My Account</a>
                        <ul>
                            <li><a href="dashboard/my_profile">My Profile</a></li>
                            <li><a href="dashboard/redeem_points">Claim Prizes</a></li>
                            <li><a href="/login?logout" onclick="if (!window.__cfRLUnblockHandlers) return false; signOut()" data-cf-modified-37849eedc6e29e631563167e-="">Logout</a></li>
                        </ul>
                    </li>
                <li><a class="link-color"><span class="label label-success"  style="font-size:15px;background-color: #4cace3; padding:7px;"><strong class="account-points-total pointInfo" data-points="<?php echo ($points->points+$points->referral)-($points->redeemed+$points->reversal);?>"><?php echo ($points->points+$points->referral)-($points->redeemed+$points->reversal);?></strong> Points</span></a></li>
            <?php endif;?>                
            </ul>
        </nav>
    </div>
</header>
<audio id="myAudio">
    <source src="common-files/filling-your-inbox.ogg" type="audio/ogg">
    </audio>    <section id="intro" class="clearfix">
        <div class="container">
                <div class="intro-img">
                    <img src="assets/img/gift-cards.png" alt="gift cards" class="img-fluid">
                </div>
            <div class="intro-info">
                <h1>Earn Points & Get Unlimited Gift Cards</h1>
    <?php if(!$login):?>            
                                <div class="text-center">
    <form method="post" class="register-user">
        <div class="input-group form-group">
            <?php if($this->input->get('refId')):?>
            <input type="text" name="registerUser[refId]" value="<?php echo $this->input->get('refId');?>" hidden>
            <?php endif;?>
            <input type="email" class="form-control form-control-lg registered-email" name="registerUser[email]" placeholder="Enter your email" required />
            <button type="submit" class="input-group-text btn-login">Get Started</button>
        </div>
        <div class="custom-control custom-checkbox text-white">
            <input type="checkbox" class="custom-control-input" id="customCheck2" name="registerUser[agree]">
            <label class="custom-control-label" for="customCheck2">I Agree <a href="privacy-policy.php" target="_blank" style="color: #41aeec;">Privacy</a> & <a href="terms-of-service.php" target="_blank" style="color: #41aeec;">Terms</a></label>
        </div>
        <br>
                    <div class="d-flex justify-content-center">
                        <button style="background: transparent; border: none;" class="g-signin2" data-width="200" data-height="40" data-longtitle="true" data-onsuccess="onSignIn" data-theme="dark"></button>
                        </div>
    </form>
</div>
<div class="modal fade" id="loginregistermodel" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background:transparent;">
                <h4 class="modal-title"><b>Login | Register</b></h4>
                <button type="button" class="close" data-dismiss="modal" style="font-weight: bold; font-size: 35px; color: black;">&times;</button>
            </div>
            <div class="modal-body">
                <form class="register-user">
                    <div class="form-group" style="text-align: left !important;">
                        <label for="inputEmail">Email Address</label>
                        <input type="email" id="inputEmail" class="form-control registered-email" placeholder="Enter email" required autofocus name="registerUser[email]">
                        <?php if($this->input->get('refId')):?>
                        <input type="text" name="registerUser[refId]" value="<?php echo $this->input->get('refId');?>" hidden>
                        <?php endif;?>
                    </div>
                    <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" id="customCheck1" name="registerUser[agree]">
                        <label class="custom-control-label" for="customCheck1">I Agree <a href="privacy-policy.php" target="_blank">Privacy</a> & <a href="terms-of-service.php" target="_blank">Terms</a></label>
                    </div>
                    <div class="d-flex justify-align-center">
                        <button class="btn btn-lg btn-login btn-block text-uppercase" type="submit">Sign in</button>
                        <hr class="my-4">
                        <button style="background: transparent; border: none;" class="g-signin2" data-width="200" data-height="40" data-longtitle="true" data-onsuccess="onSignIn" data-theme="dark"></button>
                    </div>
                </form>
            </div>
        </div>
     </div>
     </div>
    <?php else:?>     
      <div>
                    <a href="dashboard/" class="btn-get-started scrollto">GO TO DASHBOARD</a>
     </div>
     <?php endif;?>
     </div>
    </div>
    </section>
    <br>
<div class="row">
	<div class="col-lg-12 text-center">
		<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" type="ecaef0ec50a95e17487ac1a2-text/javascript"></script>
		<ins class="adsbygoogle"
		style="display:block"
		data-ad-client="ca-pub-4536007685495849"
		data-ad-slot="6501501380"
		data-ad-format="link"
		data-full-width-responsive="true"></ins>
		<script type="ecaef0ec50a95e17487ac1a2-text/javascript">
			(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</div>
</div>
<br>
<div class="latest-news-section" style="display: none;">
    <div class="ln-title text-center">UPDATES</div>
    <div class="news-ticker">
        <div class="news-ticker-contant">
            <div class="nt-item"><span class="new">New Dashboard</span>Updated new dashboard and design.</div>
            <div class="nt-item"><span class="strategy">Giveaways</span>Latest giveaways has been added.</div>
            <div class="nt-item"><span class="racing">New Offers</span>New offers and coupons has been updated.</div>
        </div>
    </div>
</div>    <main id="main">
        <section class="about">
            <div class="container">
                <header class="section-header text-center">
                    <h2>How to Earn Points?</h2>
                </header>
                <div class="row about-container">
                    <div class="col-lg-6 content order-lg-1 order-2">
                        <p>Earn points by completing surveys, downloading apps, and answering simple questions. Each completed task will provide points.</p>
                        <div class="icon-box wow fadeInUp">
                            <div class="icon"><i class="fa fa-shopping-bag"></i></div>
                            <h3 class="title">Sign Up</h3>
                            <p class="description">Quick sign up for your account to check your earnings.</p>
                        </div>
                        <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon"><i class="fa fa-photo"></i></div>
                            <h3 class="title">Earn Points</h3>
                            <p class="description">Download apps or complete simple tasks to earn points fast.</p>
                        </div>
                        <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon"><i class="fa fa-bar-chart"></i></div>
                            <h3 class="title">Get Gift Cards</h3>
                            <p class="description">Exchange your points for getting gift cards or money.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
                        <img src="assets/img/earnpoints.png" class="img-fluid" alt="earn points">
                    </div>
                </div>
            </div>
        </section>
        <section id="why-us" class="wow fadeIn">
            <div class="container">
                <div class="row row-eq-height justify-content-center">
                    <div class="col-lg-4 mb-4">
                        <div class="card wow bounceInUp counters">
                            <h4 class="card-title">Available Gift Cards</h4>
                            <div class="card-body">
                                <p class="card-text">10000+ Available gift cards by different brands are waiting for you to redeem.</p>
                                <span data-toggle="counter-up">10000</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card wow bounceInUp counters">
                            <h4 class="card-title">New Gift Cards</h4>
                            <div class="card-body">
                                <p class="card-text">5000+ New gift cards added this week. Earn points and collect these cards.</p>
                                <span data-toggle="counter-up">5000</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card wow bounceInUp counters">
                            <h4 class="card-title">Redeemed Gift Cards</h4>
                            <div class="card-body">
                                <p class="card-text">7000+ Redeemed gift cards by our users by completing simple tasks.</p>
                                <span data-toggle="counter-up">7000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="portfolio" class="clearfix" style="background-color: #ecf5ff;">
            <div class="container">
                <header class="section-header text-center">
                    <h2 class="section-title">Available Gift Cards & Rewards</h2>
                </header>
                <div class="row">
                    <div class="col-lg-12">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">Gaming</li>
                            <li data-filter=".filter-card">Shopping</li>
                            <li data-filter=".filter-web">Entertainment</li>
                        </ul>
                    </div>
                </div>
                <div class="row portfolio-container">
                    <div class="col-lg-2 col-xs-2 col-sm-2 portfolio-item">
                        <a href="airbnb.php">
                            <img src="assets/img/cards/airbnb-card.png" class="img-fluid" alt="airbnb card">
                        </a>
                    </div>
                    <div class="col-lg-2 col-xs-2 col-sm-2 portfolio-item filter-card" data-wow-delay="0.2s">
                        <a href="amazon.php">
                            <img src="assets/img/cards/amazon-card.png" class="img-fluid" alt="amazon card">
                        </a>
                    </div>
                    <div class="col-lg-2 col-xs-2 col-sm-2 portfolio-item filter-card" data-wow-delay="0.2s">
                        <a href="apple.php">
                            <img src="assets/img/cards/apple-card.png" class="img-fluid" alt="apple card">
                        </a>
                    </div>
                    <div class="col-lg-2 col-xs-2 col-sm-2 portfolio-item filter-card">
                        <a href="bitcoin.php">
                            <img src="assets/img/cards/bitcoin-card.png" class="img-fluid" alt="bitcoin card">
                        </a>
                    </div>
                    <div class="col-lg-2 col-xs-2 col-sm-2 portfolio-item filter-app" data-wow-delay="0.2s">
                        <a href="clash-of-clans.php">
                            <img src="assets/img/cards/clash-of-clans-card.png" class="img-fluid" alt="clash of clans card">
                        </a>
                    </div>
                    <div class="col-lg-2 col-xs-2 col-sm-2 portfolio-item filter-card">
                        <a href="dell.php">
                            <img src="assets/img/cards/dell-card.png" class="img-fluid" alt="dell card">
                        </a>
                    </div>
                    <div class="col-lg-2 col-xs-2 col-sm-2 portfolio-item filter-card" data-wow-delay="0.1s">
                        <a href="ebay.php">
                            <img src="assets/img/cards/ebay-card.png" class="img-fluid" alt="ebay card">
                        </a>
                    </div>
                    <div class="col-lg-2 col-xs-2 col-sm-2 portfolio-item filter-app">
                        <a href="fortnite.php">
                            <img src="assets/img/cards/fortnite-card.png" class="img-fluid" alt="fortnite card">
                        </a>
                    </div>
                    <div class="col-lg-2 col-xs-2 col-sm-2 portfolio-item filter-card">
                        <a href="gap.php">
                            <img src="assets/img/cards/gap-card.png" class="img-fluid" alt="gap card">
                        </a>
                    </div>
                    <div class="col-lg-2 col-xs-2 col-sm-2 portfolio-item filter-card">
                        <a href="google-play.php">
                            <img src="assets/img/cards/google-play-card.png" class="img-fluid" alt="google play card">
                        </a>
                    </div>
                    <div class="col-lg-2 col-xs-2 col-sm-2 portfolio-item filter-app">
                        <a href="imvu.php">
                            <img src="assets/img/cards/imvu-card.png" class="img-fluid" alt="imvu card">
                        </a>
                    </div>
                    <div class="col-lg-2 col-xs-2 col-sm-2 portfolio-item filter-card">
                        <a href="itunes.php">
                            <img src="assets/img/cards/itunes-card.png" class="img-fluid" alt="itunes card">
                        </a>
                    </div>
                    <div class="col-lg-2 col-xs-2 col-sm-2 portfolio-item filter-app">
                        <a href="league-of-legends.php">
                            <img src="assets/img/cards/league-of-legends-card.png" class="img-fluid" alt="league of legends card">
                        </a>
                    </div>
                    <div class="col-lg-2 col-xs-2 col-sm-2 portfolio-item filter-card">
                        <a href="lowes.php">
                            <img src="assets/img/cards/lowes-card.png" class="img-fluid" alt="lowes card">
                        </a>
                    </div>
                    <div class="col-lg-2 col-xs-2 col-sm-2 portfolio-item filter-card">
                        <a href="macys.php">
                            <img src="assets/img/cards/macys-card.png" class="img-fluid" alt="macys card">
                        </a>
                    </div>
                    <div class="col-lg-2 col-xs-2 col-sm-2 portfolio-item filter-card">
                        <a href="microsoft.php">
                            <img src="assets/img/cards/microsoft-card.png" class="img-fluid" alt="microsoft card">
                        </a>
                    </div>
                    <div class="col-lg-2 col-xs-2 col-sm-2 portfolio-item filter-app" data-wow-delay="0.2s">
                        <a href="minecraft.php">
                            <img src="assets/img/cards/minecraft-card.png" class="img-fluid" alt="minecraft card">
                        </a>
                    </div>
                    <div class="col-lg-2 col-xs-2 col-sm-2 portfolio-item filter-web" data-wow-delay="0.2s">
                        <a href="netflix.php">
                            <img src="assets/img/cards/netflix-card.png" class="img-fluid" alt="netflix card">
                        </a>
                    </div>
                    <div class="col-lg-2 col-xs-2 col-sm-2 portfolio-item filter-app" data-wow-delay="0.2s">
                        <a href="nintendo-eshop.php">
                            <img src="assets/img/cards/nintendo-eshop-card.png" class="img-fluid" alt="nintendo eshop card">
                        </a>
                    </div>
                    <div class="col-lg-2 col-xs-2 col-sm-2 portfolio-item" data-wow-delay="0.2s">
                        <a href="paypal.php">
                            <img src="assets/img/cards/paypal-card.png" class="img-fluid swap" alt="paypal card">
                        </a>
                    </div>
                    <div class="col-lg-2 col-xs-2 col-sm-2 portfolio-item" data-wow-delay="0.2s">
                        <a href="paysafe.php">
                            <img src="assets/img/cards/paysafe-card.png" class="img-fluid" alt="paysafe card">
                        </a>
                    </div>
                    <div class="col-lg-2 col-xs-2 col-sm-2 portfolio-item filter-app" data-wow-delay="0.1s">
                        <a href="playstation.php">
                            <img src="assets/img/cards/playstation-card.png" class="img-fluid" alt="playstation card">
                        </a>
                    </div>
                    <div class="col-lg-2 col-xs-2 col-sm-2 portfolio-item filter-app" data-wow-delay="0.1s">
                        <a href="roblox.php">
                            <img src="assets/img/cards/roblox-card.png" class="img-fluid" alt="roblox card">
                        </a>
                    </div>
                    <div class="col-lg-2 col-xs-2 col-sm-2 portfolio-item" data-wow-delay="0.1s">
                        <a href="skype.php">
                            <img src="assets/img/cards/skype-card.png" class="img-fluid" alt="skype card">
                        </a>
                    </div>
                    <div class="col-lg-2 col-xs-2 col-sm-2 portfolio-item filter-web" data-wow-delay="0.2s">
                        <a href="spotify.php">
                            <img src="assets/img/cards/spotify-card.png" class="img-fluid" alt="spotify card">
                        </a>
                    </div>
                    <div class="col-lg-2 col-xs-2 col-sm-2 portfolio-item filter-web" data-wow-delay="0.2s">
                        <a href="staples.php">
                            <img src="assets/img/cards/staples-card.png" class="img-fluid" alt="staples card">
                        </a>
                    </div>
                    <div class="col-lg-2 col-xs-2 col-sm-2 portfolio-item filter-web" data-wow-delay="0.2s">
                        <a href="starstable.php">
                            <img src="assets/img/cards/starstable-card.png" class="img-fluid" alt="starstable card">
                        </a>
                    </div>
                    <div class="col-lg-2 col-xs-2 col-sm-2 portfolio-item filter-app" data-wow-delay="0.2s">
                        <a href="steam.php">
                            <img src="assets/img/cards/steam-card.png" class="img-fluid" alt="steam card">
                        </a>
                    </div>
                    <div class="col-lg-2 col-xs-2 col-sm-2 portfolio-item filter-card">
                        <a href="walmart.php">
                            <img src="assets/img/cards/walmart-card.png" class="img-fluid" alt="walmart card">
                        </a>
                    </div>
                    <div class="col-lg-2 col-xs-2 col-sm-2 portfolio-item filter-app" data-wow-delay="0.1s">
                        <a href="xbox.php">
                            <img src="assets/img/cards/xbox-card.png" class="img-fluid" alt="xbox card">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section id="services" class="section-bg">
            <div class="container">
                <header class="section-header text-center">
                    <h2>How it Works?</h2>
                    <p>Here we provide every single step that how PayPrizes work.</p>
                </header>
                <div class="row">
                    <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="icon"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
                            <h3 class="title">Refer & Earn</h3>
                            <p class="description">The Refer & Earn option is all about referring our website to your friends/family from the given code and earn points.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="icon"><i class="ion-ios-bookmarks-outline" style="color: #e9bf06;"></i></div>
                            <h3 class="title">Offer Walls</h3>
                            <p class="description">Some of our advertisers want to reward you using offer walls for learning about their latest services and products .</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="icon"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
                            <h3 class="title">Mobile Offers</h3>
                            <p class="description">Do you like to play games on your mobile? Collect points for each completed app download and exchange them for premium gift cards.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="icon"><i class="ion-ios-speedometer-outline" style="color:#41cf2e;"></i></div>
                            <h3 class="title">Survey Routers</h3>
                            <p class="description">Some exclusive brands advertise on our site wants to understand their customers' feedback to improve their products with paid surveys.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="icon"><i class="ion-ios-world-outline" style="color: #d6ff22;"></i></div>
                            <h3 class="title">Daily Bonuses</h3>
                            <p class="description">If you live in a country with fewer offers, you can earn free login bonuses and giveaways by checking our site.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="icon"><i class="ion-ios-clock-outline" style="color: #4680ff;"></i></div>
                            <h3 class="title">Video Ads</h3>
                            <p class="description">Watch promotional videos of our advertisers to collect your points. Get paid to watch videos by sponsored advertisers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <div class="alert text-center cookiealert" role="alert">
  <b>Do you like cookies?</b> &#x1F36A; We use cookies to ensure you get the best experience on our website. Learn more about our <a href="privacy-policy.php" target="_blank">Privacy Policy</a>
  <button type="button" class="btn btn-primary btn-sm acceptcookies" aria-label="Close">
    I agree
  </button>
</div>
<script type="ecaef0ec50a95e17487ac1a2-text/javascript">
  (function () {
    "use strict";
    var cookieAlert = document.querySelector(".cookiealert");
    var acceptCookies = document.querySelector(".acceptcookies");
    if (!cookieAlert) {
      return;
    }
    cookieAlert.offsetHeight; 
    if (!getCookie("acceptCookies")) {
      cookieAlert.classList.add("show");
    }
    acceptCookies.addEventListener("click", function () {
      setCookie("acceptCookies", true, 365);
      cookieAlert.classList.remove("show");
    });
    function setCookie(cname, cvalue, exdays) {
      var d = new Date();
      d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
      var expires = "expires=" + d.toUTCString();
      document.cookie = cname + "=" + cvalue + ";" + expires;
    }
    function getCookie(cname) {
      var name = cname + "=";
      var decodedCookie = decodeURIComponent(document.cookie);
      var ca = decodedCookie.split(';');
      for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) === ' ') {
          c = c.substring(1);
        }
        if (c.indexOf(name) === 0) {
          return c.substring(name.length, c.length);
        }
      }
      return "";
    }
  })();
</script><footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 footer-info">
          <h3>PayPrizes</h3>
          <p>PayPrizes offers regular tasks like submitting your email address, filling out a simple survey, watch promotional videos. You will get awarded by points for completing all of these tasks which can be exchanged for gift cards.</p>
        </div>
        <div class="col-lg-2 col-md-6 footer-links">
          <h4>Pages</h4>
          <ul>
            <li><a href="about-us.php">About Us</a></li>
            <li><a href="contact-us.php">Contact Us</a></li>
            <li><a href="privacy-policy.php">Privacy Policy</a></li>
            <li><a href="terms-of-service.php">Terms of Service</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="help-center.php">Help Center</a></li>
            <li><a href="paid-surveys.php">Paid Surveys</a></li>
            <li><a href="affiliate-program.php">Affiliate Program</a></li>
            <li><a href="earnings-disclaimer.php">Earnings Disclaimer</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Trending</h4>
          <ul>
            <li><a href="roblox.php">Roblox</a></li>
            <li><a href="xbox.php">Xbox Live</a></li>
            <li><a href="google-play.php">Google Play</a></li>
            <li><a href="paypal.php">PayPal Money</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="copyright">
       Copyright &copy; 2020 <strong>PayPrizes</strong>, All rights reserved.
    </div>
  </div>
</footer>    <a class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <script src="assets/lib/jquery/jquery.min.js" type="ecaef0ec50a95e17487ac1a2-text/javascript"></script>
    <script src="assets/lib/jquery/jquery-migrate.min.js" type="ecaef0ec50a95e17487ac1a2-text/javascript"></script>
    <script src="assets/lib/bootstrap/js/bootstrap.bundle.min.js" type="ecaef0ec50a95e17487ac1a2-text/javascript"></script>
    <script src="assets/lib/easing/easing.min.js" type="ecaef0ec50a95e17487ac1a2-text/javascript"></script>
    <script src="assets/lib/mobile-nav/mobile-nav.js" type="ecaef0ec50a95e17487ac1a2-text/javascript"></script>
    <script src="assets/lib/wow/wow.min.js" type="ecaef0ec50a95e17487ac1a2-text/javascript"></script>
    <script src="assets/lib/waypoints/waypoints.min.js" type="ecaef0ec50a95e17487ac1a2-text/javascript"></script>
    <script src="assets/lib/counterup/counterup.min.js" type="ecaef0ec50a95e17487ac1a2-text/javascript"></script>
    <script src="assets/lib/isotope/isotope.pkgd.min.js" type="ecaef0ec50a95e17487ac1a2-text/javascript"></script>
    <script src="assets/lib/lightbox/js/lightbox.min.js" type="ecaef0ec50a95e17487ac1a2-text/javascript"></script>
    <script src="assets/js/main.js" type="ecaef0ec50a95e17487ac1a2-text/javascript"></script>
    <!--<script src="assets/js/google-signin.js?onload=onLoad" async defer></script>-->
    <script src="https://apis.google.com/js/platform.js?onload=onLoad" async defer type="ecaef0ec50a95e17487ac1a2-text/javascript"></script>
    <script src="assets/js/overhang.min.js" type="ecaef0ec50a95e17487ac1a2-text/javascript"></script>
    <script src="assets/js/common-scripts.js" type="ecaef0ec50a95e17487ac1a2-text/javascript"></script>
    <script src="assets/js/marquee.min.js" type="ecaef0ec50a95e17487ac1a2-text/javascript"></script>
    <script src="assets/js/sign-in-with-google.js" type="ecaef0ec50a95e17487ac1a2-text/javascript"></script>
    <script type="ecaef0ec50a95e17487ac1a2-text/javascript">
    $('.latest-news-section').show();
    $('.news-ticker').marquee({
        duration: 10000,
        delayBeforeStart: 0,
        direction: 'left',
        duplicated: true
    });
    </script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="ecaef0ec50a95e17487ac1a2-|49" defer=""></script></body>

</html>