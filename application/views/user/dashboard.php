                <div class="page-inner mt--5">
                    <div class="row mt--2">
                        <div class="col-md-12">
                            <div class="card full-height">
                                <div class="card-header">
                                    <h2><b>Earning Statistics (Points)</b></h2>                                    
                                </div>
                                
                                    <div class="card-body"> 
                                        <div class="row">
                                            <div class="col-md-3 card-statistics">
                                                <a class="nounderline" href="<?php echo base_url();?>dashboard/refer_and_earn">
                                                    <div class="card card-stats card-primary color-blue card-round">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-5">
                                                                    <div class="icon-big text-center">
                                                                        <i class="flaticon-users"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="col-7 col-stats">
                                                                    <div class="numbers">
                                                                        <p class="card-category"><b>REFERRAL</b></p>
                                                                        <h4 class="card-title"><?php echo $point->referral;?></h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-md-3 card-statistics">
                                                <a class="nounderline" href="<?php echo base_url();?>dashboard/statistics">
                                                    <div class="card card-stats card-info color-yellow card-round">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-5">
                                                                    <div class="icon-big text-center">
                                                                        <i class="flaticon-coins"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="col-7 col-stats">
                                                                    <div class="numbers">
                                                                        <p class="card-category"><b>TOTAL</b></p>
                                                                        <h4 class="card-title pointsInfo"><?php echo ($point->points+$point->referral)-($point->redeemed+$point->reversal);?></h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-md-3 card-statistics">
                                                <a class="nounderline" href="<?php echo base_url();?>dashboard/redeem_points">
                                                    <div class="card card-stats card-success color-green card-round">
                                                        <div class="card-body ">
                                                            <div class="row">
                                                                <div class="col-5">
                                                                    <div class="icon-big text-center">
                                                                        <i class="flaticon-success"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="col-7 col-stats">
                                                                    <div class="numbers">
                                                                        <p class="card-category"><b>REDEEMED</b></p>
                                                                        <h4 class="card-title"><?php echo $point->redeemed;?></h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-md-3 card-statistics">
                                                <a class="nounderline" href="<?php echo base_url();?>dashboard/statistics">
                                                    <div class="card card-stats card-secondary color-red card-round">
                                                        <div class="card-body ">
                                                            <div class="row">
                                                                <div class="col-5">
                                                                    <div class="icon-big text-center">
                                                                        <i class="flaticon-error"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="col-7 col-stats">
                                                                    <div class="numbers">
                                                                        <p class="card-category"><b>REVERSAL</b></p>
                                                                        <h4 class="card-title"><?php echo $point->reversal;?></h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div> 
                            </div>
                        </div>
                    </div>                   
                                        <div class="row mt--2" >
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h2><b>Today's Special Offers</b></h2>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                          
                                                    <div class="col-md-2 homeoffercard d-flex align-items-stretch api-offer-card">
                                                    <a href="https://www.xyz.com/">
                                                        <div class="card text-center">
                                                            <img class="card-img-top" src="..//u_assets/img/offers_images/visa1000.jpg" alt="Card image cap">
                                                            <a class="card-footer btn btn-primary text-white btn-block show-modal" href="#" class="title" data-offer-title="Get free VISA credit card on VCCGenerator" data-offer-description="To complete the offer you need to generate 15 Visa credit card codes." data-offer-link="https://www.vccgenerator.com/" data-conversion-desc="To complete the offer you need to generate 15 Visa credit card codes." data-network-name="VCCGenerator" data-offer-point="100"><b>Earn 100 Points</b></a>
                                                        </div>
                                                    </a>
                                                </div>   
                                                                                                         
                                              
                                                    <div class="col-md-2 homeoffercard d-flex align-items-stretch api-offer-card">
                                                    <a href="https://www.xyz.com/blog/best-antivirus/">
                                                        <div class="card text-center">
                                                            <img class="card-img-top" src="..//u_assets/img/offers_images/payprizes-antivirus-offer.jpg" alt="Card image cap">
                                                            <a class="card-footer btn btn-primary text-white btn-block show-modal" href="#" class="title" data-offer-title="Free  Antivirus Softwares for 2020" data-offer-description="To complete this offer you need to click on the 'Start Offer' button below and select the option with 'antivirus'." data-offer-link="https://www.payprizes.com/blog/best-antivirus/" data-conversion-desc="To complete this offer you need to click on the 'Start Offer' button below and select the option with 'antivirus'." data-network-name="PayPrizes" data-offer-point="200"><b>Earn 200 Points</b></a>
                                                        </div>
                                                    </a>
                                                </div>   
                                                                                                         
                                             
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     
                    <div class="row mt--2">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h2><b>CPABuild Offers</b>&nbsp;<a href="dashboard/cpabuild_offers" class="btn btn-info btn-xs" style ="float:right"><b>VIEW ALL</b></a></h2>
                                </div>
                                <div class="card-body">
                                    <div class="row is-loading is-loading-lg" id="cpabuildoffers">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt--2">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h2><b>AdGem Offers</b>&nbsp;<a href="dashboard/adgem_offers" class="btn btn-info btn-xs" style ="float:right"><b>VIEW ALL</b></a></h2>
                                </div>
                                <div class="card-body">
                                    <div class="row is-loading is-loading-lg" id="adgemOffers">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt--2">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h2><b>Most Popular Ways to Earn</b></h2>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-2 homeoffercard">
                                            <a href="dashboard/top_offers">
                                                <div class="card text-center">
                                                    <img class="card-img-top" src="/u_assets/img/earn_points/top-offers.png" alt="Card image cap">
                                                    <button class="btn btn-primary btn-block card-body"><b>TOP OFFERS</b></button>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-2 homeoffercard">
                                            <a href="dashboard/offerwalls">
                                                <div class="card text-center">
                                                    <img class="card-img-top" src="/u_assets/img/earn_points/offerwall.png" alt="Card image cap">
                                                    <button class="btn btn-primary btn-block card-body"><b>OFFERWALLS</b></button>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-md-2 homeoffercard">
                                            <a href="dashboard/surveys">
                                                <div class="card text-center">
                                                    <img class="card-img-top" src="/u_assets/img/earn_points/survey-routes.png" alt="Card image cap">
                                                    <button class="btn btn-primary btn-block card-body"><b>SURVEYS</b></button>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-md-2 homeoffercard">
                                            <a href="dashboard/paid_surveys">
                                                <div class="card text-center">
                                                    <img class="card-img-top" src="/u_assets/img/daily_poll/daily-task.png" alt="Card image cap">
                                                    <button class="btn btn-primary btn-block card-body"><b>PAID SURVEYS</b></button>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-2 homeoffercard">
                                            <a href="dashboard/mobile_offers">
                                                <div class="card text-center">
                                                    <img class="card-img-top" src="/u_assets/img/earn_points/mobile-reward.png" alt="Card image cap">
                                                    <button class="btn btn-primary btn-block card-body"><b>MOBILE OFFERS</b></button>
                                                </div>
                                            </a>
                                        </div>
                                         <div class="col-md-2 homeoffercard">
                                            <a href="dashboard/video_ads">
                                                <div class="card text-center">
                                                    <img class="card-img-top" src="/u_assets/img/earn_points/video-ads.png" alt="Card image cap">
                                                    <button class="btn btn-primary btn-block card-body"><b>VIDEO ADS</b></button>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt--2">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h2><b>Daily Rewards & Bonus</b></h2>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-2 homeoffercard">
                                            <a href="dashboard/spin_and_win">
                                                <div class="card text-center">
                                                    <img class="card-img-top" src="/u_assets/img/daily_poll/spin-and-win.png" alt="Card image cap">
                                                    <button class="btn btn-primary btn-block card-body"><b>SPIN & WIN</b></button>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-md-2 homeoffercard">
                                            <a href="dashboard/daily_bonus">
                                                <div class="card text-center">
                                                    <img class="card-img-top" src="/u_assets/img/daily_poll/daily-login-bonus.png" alt="Card image cap">
                                                    <button class="btn btn-primary btn-block card-body"><b>DAILY BONUS</b></button>
                                                </div>
                                            </a>
                                        </div>
                                         <div class="col-md-2 homeoffercard">
                                            <a href="dashboard/daily_deals">
                                                <div class="card text-center">
                                                    <img class="card-img-top" src="/u_assets/img/earn_points/deal-of-the-day.png" alt="Card image cap">
                                                    <button class="btn btn-primary btn-block card-body"><b>DAILY DEALS</b></button>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-md-2 homeoffercard">
                                            <a href="daily-quiz.php">
                                                <div class="card text-center">
                                                    <img class="card-img-top" src="/u_assets/img/daily_poll/daily-quiz.png" alt="Card image cap">
                                                    <button class="btn btn-primary btn-block card-body"><b>DAILY QUIZ</b></button>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-2 homeoffercard">
                                            <a href="dashboard/refer_and_earn">
                                                <div class="card text-center">
                                                    <img class="card-img-top" src="/u_assets/img/daily_poll/refer-and-earn.png" alt="Card image cap">
                                                    <button class="btn btn-primary btn-block card-body"><b>REFER & EARN</b></button>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-2 homeoffercard">
                                            <a href="dashboard/giveaway">
                                                <div class="card text-center">
                                                    <img class="card-img-top" src="/u_assets/img/daily_poll/giveaway.png" alt="Card image cap">
                                                    <button class="btn btn-primary btn-block card-body"><b>GIVEAWAYS</b></button>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>