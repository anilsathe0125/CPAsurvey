                <div class="page-inner mt--5">
                    <div class="row mt--2">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <div class="card full-height">
                                <div class="card-header">
                                    <h2><b>Earning Statistics (Points)</b></h2>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="card-statistics col-md-3">
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
                                        <div class="card-statistics col-md-3">
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
                                                                    <h4 class="card-title"><?php echo ($point->points+$point->referral)-($point->redeemed+$point->reversal);?></h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card-statistics col-md-3">
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
                                        <div class="card-statistics col-md-3">
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
                        <div class="col-md-1"></div>
                    </div>
                    <div class="row mt--2">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <div class="card">
                                <div class="card-header">
                                    <ul class="nav nav-pills nav-secondary nav-pills-no-bd" id="pills-tab-without-border" role="tablist">
                                         <li class="nav-item text">
                                            <a class="nav-link active show" id="pills-allearnedpoint-tab-nobd" data-toggle="pill" href="#pills-allearnedpoint-nobd" role="tab" aria-controls="pills-allearnedpoint-nobd" aria-selected="true">ALL</a>
                                        </li>
                                        <li class="nav-item text">
                                            <a class="nav-link" id="pills-completedOffer-tab-nobd" data-toggle="pill" href="#pills-completedOffers-nobd" role="tab" aria-controls="pills-completedOffers-nobd" aria-selected="true">OFFERS COMPLETED</a>
                                        </li>
                                        <li class="nav-item submenu">
                                            <a class="nav-link" id="pills-home-tab-nobd" data-toggle="pill" href="#pills-home-nobd" role="tab" aria-controls="pills-home-nobd" aria-selected="false">SPIN & WIN</a>
                                        </li>
                                        <li class="nav-item submenu">
                                            <a class="nav-link" id="pills-profile-tab-nobd" data-toggle="pill" href="#pills-profile-nobd" role="tab" aria-controls="pills-profile-nobd" aria-selected="false">DAILY BONUS</a>
                                        </li>
                                        <li class="nav-item submenu">
                                            <a class="nav-link" id="pills-contact-tab-nobd" data-toggle="pill" href="#pills-contact-nobd" role="tab" aria-controls="pills-contact-nobd" aria-selected="true">COUPON</a>
                                        </li>
                                        <li class="nav-item submenu">
                                            <a class="nav-link" id="pills-referral-tab-nobd" data-toggle="pill" href="#pills-referrals-nobd" role="tab" aria-controls="pills-referrals-nobd" aria-selected="true">REFERRAL</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content mt-2 mb-3" id="pills-without-border-tabContent">
                                        <div class="tab-pane fade  active show" id="pills-allearnedpoint-nobd" role="tabpanel" aria-labelledby="pills-allearnedpoint-tab-nobd">
                                            <div class="table-responsive">
                                                <table id="all-points" class="display table table-striped table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Earned Points</th>
                                                            <th>Date & Time</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                        $result=$reports;
                                                        for($i=0;$i<count($result);$i++):
                                                        echo '<tr>';
                                                        echo '<td>'.$result[$i]['comment'].'</td>';
                                                        echo '<td>'.$result[$i]['point'].'</td>';
                                                        echo '<td>'.$result[$i]['date'].' '.$result[$i]['time'].'</td>';
                                                        if($result[$i]['status']==1):
                                                            echo '<td><span style="padding: 2px 4px; background-color: #5cb85c; color: white;"><b>COMPLETED</b></span></td>';
                                                        else: 
                                                            echo'<td><span style="padding: 2px 4px; background-color: #FF0000; color: white;"><b>REVERSAL</b></span></td>';
                                                        endif;
                                                        echo '</tr>';
                                                        endfor;
                                                    ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="pills-completedOffers-nobd" role="tabpanel" aria-labelledby="pills-completedOffers-nobd">
                                            <div class="table-responsive">
                                                <table id="show-completed-offers" class="display table table-striped table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Earned Points</th>
                                                            <th>Date & Time</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                        $result=$reports;
                                                        for($i=0;$i<count($result);$i++):
                                                        if($result[$i]['title']=='offers_completed'):
                                                        echo '<tr>';
                                                        echo '<td>'.$result[$i]['comment'].'</td>';
                                                        echo '<td>'.$result[$i]['point'].'</td>';
                                                        echo '<td>'.$result[$i]['date'].' '.$result[$i]['time'].'</td>';
                                                        if($result[$i]['status']==1):
                                                            echo '<td><span style="padding: 2px 4px; background-color: #5cb85c; color: white;"><b>COMPLETED</b></span></td>';
                                                        else: 
                                                            echo'<td><span style="padding: 2px 4px; background-color: #FF0000; color: white;"><b>REVERSAL</b></span></td>';
                                                        endif;
                                                        echo '</tr>';
                                                        endif;
                                                        endfor;
                                                    ?>                                                         
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-home-nobd" role="tabpanel" aria-labelledby="pills-home-tab-nobd">
                                            <div class="table-responsive">
                                                <table id="show-spin-details" class="display table table-striped table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Earned Points</th>
                                                            <th>Date & Time</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                        $result=$reports;
                                                        for($i=0;$i<count($result);$i++):
                                                        if($result[$i]['title']=='spin'):
                                                        echo '<tr>';
                                                        echo '<td>'.$result[$i]['comment'].'</td>';
                                                        echo '<td>'.$result[$i]['point'].'</td>';
                                                        echo '<td>'.$result[$i]['date'].' '.$result[$i]['time'].'</td>';
                                                        if($result[$i]['status']==1):
                                                            echo '<td><span style="padding: 2px 4px; background-color: #5cb85c; color: white;"><b>COMPLETED</b></span></td>';
                                                        else: 
                                                            echo'<td><span style="padding: 2px 4px; background-color: #FF0000; color: white;"><b>REVERSAL</b></span></td>';
                                                        endif;
                                                        echo '</tr>';
                                                        endif;
                                                        endfor;
                                                    ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-profile-nobd" role="tabpanel" aria-labelledby="pills-profile-tab-nobd">
                                            <div class="table-responsive">
                                                <table id="show-login-details" class="display table table-striped table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Earned Points</th>
                                                            <th>Date & Time</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                        $result=$reports;
                                                        for($i=0;$i<count($result);$i++):
                                                        if($result[$i]['title']=='daily_login'):
                                                        echo '<tr>';
                                                        echo '<td>'.$result[$i]['comment'].'</td>';
                                                        echo '<td>'.$result[$i]['point'].'</td>';
                                                        echo '<td>'.$result[$i]['date'].' '.$result[$i]['time'].'</td>';
                                                        if($result[$i]['status']==1):
                                                            echo '<td><span style="padding: 2px 4px; background-color: #5cb85c; color: white;"><b>COMPLETED</b></span></td>';
                                                        else: 
                                                            echo'<td><span style="padding: 2px 4px; background-color: #FF0000; color: white;"><b>REVERSAL</b></span></td>';
                                                        endif;
                                                        echo '</tr>';
                                                        endif;
                                                        endfor;
                                                    ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-contact-nobd" role="tabpanel" aria-labelledby="pills-contact-tab-nobd">
                                            <div class="table-responsive">
                                                <table id="show-coupon-details" class="display table table-striped table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Earned Points</th>
                                                            <th>Date & Time</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                        $result=$reports;
                                                        for($i=0;$i<count($result);$i++):
                                                        if($result[$i]['title']=='coupon'):
                                                        echo '<tr>';
                                                        echo '<td>'.$result[$i]['comment'].'</td>';
                                                        echo '<td>'.$result[$i]['point'].'</td>';
                                                        echo '<td>'.$result[$i]['date'].' '.$result[$i]['time'].'</td>';
                                                        if($result[$i]['status']==1):
                                                            echo '<td><span style="padding: 2px 4px; background-color: #5cb85c; color: white;"><b>COMPLETED</b></span></td>';
                                                        else: 
                                                            echo'<td><span style="padding: 2px 4px; background-color: #FF0000; color: white;"><b>REVERSAL</b></span></td>';
                                                        endif;                                                        
                                                        echo '</tr>';
                                                        endif;
                                                        endfor;
                                                    ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-referrals-nobd" role="tabpanel" aria-labelledby="pills-referrals-nobd">
                                            <div class="table-responsive">
                                                <table id="show-referral-details" class="display table table-striped table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Earned Points</th>
                                                            <th>Date & Time</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                        $result=$reports;
                                                        for($i=0;$i<count($result);$i++):
                                                        if($result[$i]['title']=='referral'):
                                                        echo '<tr>';
                                                        echo '<td>'.$result[$i]['comment'].'</td>';
                                                        echo '<td>'.$result[$i]['point'].'</td>';
                                                        echo '<td>'.$result[$i]['date'].' '.$result[$i]['time'].'</td>';
                                                        if($result[$i]['status']==1):
                                                            echo '<td><span style="padding: 2px 4px; background-color: #5cb85c; color: white;"><b>COMPLETED</b></span></td>';
                                                        else: 
                                                            echo'<td><span style="padding: 2px 4px; background-color: #FF0000; color: white;"><b>REVERSAL</b></span></td>';
                                                        endif;
                                                        echo '</tr>';
                                                        endif;
                                                        endfor;
                                                    ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="col-md-1"></div>
                    </div>
                </div>