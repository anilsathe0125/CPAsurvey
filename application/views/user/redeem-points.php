<style type="text/css">
    .gcard {
        margin-top: 10px;
        margin-bottom: 10px;
        width: 33.33%;
    }
    
    @media (min-width: 992px) 
    .gcard {
        flex: 0 0 16.66667%;
        max-width: 16.66667%;
    }
    
    @media (min-width: 576px) .gcard {
        flex: 0 0 16.66667%;
        max-width: 16.66667%;
    }
    
    #gift-card-info {
        display: none;
    } 
    .form-group-default label:not(.error) {
        font-size: 12.5px !important;
        letter-spacing: .06em;
        text-transform: uppercase;
        font-weight: 400;
    } 
    .form-group-default .form-control {
        font-size: 20px;
        font-weight: 500;
    }
</style>
                <div class="page-inner mt--5">
                    <div class="row mt--2 cls" style="display: none;">
                        <div class="col-md-8" id="choose-gifts">
                            <div class="card" id="prizes">
                                <div class="card-header text-center">
                                    <h2><b>Redeem Gift Card</b></h2>
                                                                        <div class="alert alert-warning animated shake" role="alert" style="background-color: #fff3cd; text-align: center;">
                                               <strong>Remember! </strong>Complete remaining 10 offer(s) from <strong>"Earn Points"</strong> section to submit your claim request.                                             
                                    </div>
                                                                    </div>
                                <form id="redeem-gift-card" data-verified="">
                                    <div class="card-body">
                                        <div class="form-group form-group-default">
                                            <label>Select gift card</label>
                                            <select class="form-control" id="gift-card-name">
                                            </select>
                                        </div>
                                        <div class="form-group form-group-default">
                                            <label>Select Amount</label>
                                            <select class="form-control" id="gift-card-values">
                                            </select>
                                        </div>
                                        <div class="form-group form-group-default">
                                            <label>Select Country</label>
                                            <select class="form-control" id="country" data-country = >
                                                                                            </select>
                                            <input type="hidden" id="getImgSrc" value="">
                                        </div>
                                        <div class="form-group">
                                            <p class="text-center condition-info" data-required="1000" style="color: red; font-weight: bold; font-size: 16px;">1000 POINTS REQUIRED</p>
                                        </div>
                                    </div>

                                    <div class="card-footer text-center">
                                        <button class="btn btn-success color-green btn-block" type="submit" style="font-weight: bold; font-size: 18px;">Redeem</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h2><b>Instructions:</b></h2>
                                </div>
                                <div id="description"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt--2">
                        <div class="col-md-12">
                            <div class="card">
                                <!-- <div class="card-header">
									<h2><b>Redeem Gift Card/Money</b></h2>
									</div> -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-2 gcard">
                                            <a href="#" class="redeem scrollto"> <img src="../assets/img/cards/airbnb-card.png" class="img-fluid" alt="" data-title="Airbnb" id="airbnb"></a>
                                        </div>
                                        <div class="col-md-2 gcard">
                                            <a href="#" class="redeem scrollto"> <img src="../assets/img/cards/amazon-card.png" class="img-fluid" alt="" data-title="Amazon" id="amazon"> </a>
                                        </div>
                                        <div class="col-md-2 gcard">
                                            <a href="#" class="redeem scrollto"> <img src="../assets/img/cards/apple-card.png" class="img-fluid" alt="" data-title="Apple" id="Apple"> </a>
                                        </div>
                                        <div class="col-md-2 gcard">
                                            <a href="#" class="redeem scrollto"> <img src="../assets/img/cards/bitcoin-card.png" class="img-fluid" alt="" data-title="Bitcoin" id="bitcoin-card"> </a>
                                        </div>
                                        <!-- <div class="col-md-2 gcard">
											<a href="#" class="redeem scrollto"> <img src="../assets/img/cards/clash-of-clans-card.png" class="img-fluid" alt="" data-title="COC" id="clashofclan"> </a>
											</div> -->
                                        <div class="col-md-2 gcard">
                                            <a href="#" class="redeem scrollto"> <img src="../assets/img/cards/dell-card.png" class="img-fluid" alt="" data-title="Dell" id="dell-card"> </a>
                                        </div>
                                        <div class="col-md-2 gcard">
                                            <a href="#" class="redeem scrollto"> <img src="../assets/img/cards/ebay-card.png" class="img-fluid" alt="" data-title="eBay" id="ebay-card"> </a>
                                        </div>
                                        <!-- <div class="col-md-2 gcard">
											<a href="#" class="redeem scrollto"> <img src="../assets/img/cards/fortnite-card.png" class="img-fluid" alt="" data-title="Fortnite" id="fortnite-card"> </a>
											</div> -->
                                        <div class="col-md-2 gcard">
                                            <a href="#" class="redeem scrollto"> <img src="../assets/img/cards/gap-card.png" class="img-fluid" alt="" data-title="GAP" id="gap-card"> </a>
                                        </div>
                                        <div class="col-md-2 gcard">
                                            <a href="#" class="redeem scrollto"> <img src="../assets/img/cards/google-play-card.png" class="img-fluid" alt="" data-title="Google Play" id="google-card"> </a>
                                        </div>
                                        <div class="col-md-2 gcard">
                                            <a href="#" class="redeem scrollto"> <img src="../assets/img/cards/imvu-card.png" class="img-fluid" alt="" data-title="IMVU" id="imvu-card"> </a>
                                        </div>
                                        <div class="col-md-2 gcard">
                                            <a href="#" class="redeem scrollto"> <img src="../assets/img/cards/itunes-card.png" class="img-fluid" alt="" data-title="iTunes" id="itunes-card"> </a>
                                        </div>
                                        <!-- <div class="col-md-2 gcard">
											<a href="#" class="redeem scrollto"> <img src="../assets/img/cards/league-of-legends-card.png" class="img-fluid" alt="" data-title="League of Legends" id="league-legends"> </a>
											</div> -->
                                        <div class="col-md-2 gcard">
                                            <a href="#" class="redeem scrollto"> <img src="../assets/img/cards/lowes-card.png" class="img-fluid" alt="" data-title="Lowe's" id="lowes-card"></a>
                                        </div>
                                        <div class="col-md-2 gcard">
                                            <a href="#" class="redeem scrollto"> <img src="../assets/img/cards/macys-card.png" class="img-fluid" alt="" data-title="Macy's" id="macys-card"></a>
                                        </div>
                                        <div class="col-md-2 gcard">
                                            <a href="#" class="redeem scrollto"> <img src="../assets/img/cards/microsoft-card.png" class="img-fluid" alt="" data-title="Microsoft" id="microsoft-card"></a>
                                        </div>
                                        <div class="col-md-2 gcard">
                                            <a href="#" class="redeem scrollto"> <img src="../assets/img/cards/minecraft-card.png" class="img-fluid" alt="" data-title="Minecraft" id="minecraft-card"> </a>
                                        </div>
                                        <div class="col-md-2 gcard">
                                            <a href="#" class="redeem scrollto"> <img src="../assets/img/cards/netflix-card.png" class="img-fluid" alt="" data-title="Netflix" id="netflix-card"> </a>
                                        </div>
                                        <div class="col-md-2 gcard">
                                            <a href="#" class="redeem scrollto"> <img src="../assets/img/cards/nintendo-eshop-card.png" class="img-fluid" alt="" data-title="Nintendo eShop" id="nintendo-eshop"> </a>
                                        </div>
                                        <div class="col-md-2 gcard">
                                            <a href="#" class="redeem scrollto"> <img src="../assets/img/cards/paypal-card.png" class="img-fluid" alt="" data-title="PayPal" id="paypal-card"> </a>
                                        </div>
                                        <div class="col-md-2 gcard">
                                            <a href="#" class="redeem scrollto"> <img src="../assets/img/cards/paysafe-card.png" class="img-fluid" alt="" data-title="Paysafe" id="paysafe-card"> </a>
                                        </div>
                                        <div class="col-md-2 gcard">
                                            <a href="#" class="redeem scrollto"> <img src="../assets/img/cards/playstation-card.png" class="img-fluid" alt="" data-title="PlayStation" id="playstation-card"> </a>
                                        </div>
                                        <div class="col-md-2 gcard">
                                            <a href="#" class="redeem scrollto"> <img src="../assets/img/cards/roblox-card.png" class="img-fluid" alt="" data-title="Roblox" id="roblox-card"> </a>
                                        </div>
                                        <div class="col-md-2 gcard">
                                            <a href="#" class="redeem scrollto"> <img src="../assets/img/cards/skype-card.png" class="img-fluid" alt="" data-title="Skype" id="skype-card"> </a>
                                        </div>
                                        <div class="col-md-2 gcard">
                                            <a href="#" class="redeem scrollto"> <img src="../assets/img/cards/spotify-card.png" class="img-fluid" alt="" data-title="Spotify" id="spotify-card"> </a>
                                        </div>
                                        <div class="col-md-2 gcard">
                                            <a href="#" class="redeem scrollto"> <img src="../assets/img/cards/staples-card.png" class="img-fluid" alt="" data-title="Staples" id="staples-card"> </a>
                                        </div>
                                        <div class="col-md-2 gcard">
                                            <a href="#" class="redeem scrollto"> <img src="../assets/img/cards/starstable-card.png" class="img-fluid" alt="" data-title="StarStable" id="starstable-card"> </a>
                                        </div>
                                        <div class="col-md-2 gcard">
                                            <a href="#" class="redeem scrollto"> <img src="../assets/img/cards/steam-card.png" class="img-fluid" alt="" data-title="Steam" id="steam-card"> </a>
                                        </div>
                                        <div class="col-md-2 gcard">
                                            <a href="#" class="redeem scrollto"> <img src="../assets/img/cards/walmart-card.png" class="img-fluid" alt="" data-title="Walmart" id="walmart-card"> </a>
                                        </div>
                                        <div class="col-md-2 gcard">
                                            <a href="#" class="redeem scrollto"> <img src="../assets/img/cards/xbox-card.png" class="img-fluid" alt="" data-title="Xbox" id="xbox-card"> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt--2">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header text-center">
                                    <h2><b>Claim Statistics</b></h2>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                    <table id="example" class="table bg-white table-bordered table-hover dataTable no-footer" style="width:100%; color: black;" role="grid" aria-describedby="example_info">
                                        <thead>
                                            <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="User: activate to sort column descending" style="width: 108.2px;">User</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Gift Card: activate to sort column ascending" style="width: 163.4px;">Gift Card</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Unit Price: activate to sort column ascending" style="width: 174.6px;">Unit Price</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Description: activate to sort column ascending" style="width: 197.8px;">Description</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 130px;">Status</th></tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>