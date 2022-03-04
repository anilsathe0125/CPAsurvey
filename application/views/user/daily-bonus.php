<div class="page-inner mt--5">
                            <div class="row mt--2">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                             
                                            <div class="row">
                                                <div class="col-md-12">
                                                                                                                <div class="alert alert-warning animated shake" role="alert" style="background-color: #fff3cd; text-align: center;">
                                                                       <strong>Remember! </strong>Complete remaining 9 offer(s) from <strong>"Earn Points"</strong> section to submit your claim request. 
                                                            </div>
                                                                                                    </div>
                                            </div> 
                                            <div class="row">
                                            <?php
                                            $list=array();
                                            $month = date('m',time());
                                            $year =  date('Y',time());
                                            for($d=1; $d<=31; $d++)
                                            {
                                                $time=mktime(12, 0, 0, $month, $d, $year);          
                                                if(date('m', $time)==$month): 
                                                $points = $this->db->get_where('all_point',array('uid'=>$profile->email,'date'=>date('Y-m-d', $time)))->row()->point;
                                            ?>
                                            <div class="col-md-2 dailylogin-bonus-card <?php if(date('d', $time)>date('d',time())) echo'bg-blur';?>">
                                                <div class="card text-center" style="border:1px solid #337ab7;">
                                                    <div class="card-header color-blue text-white">
                                                        <h3><b>Day <?php echo date('d', $time)?></b></h3>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="mb-2"> <img class="img-fluid" src="/u_assets/img/daily_bonus/daily-bonus-<?php echo $points==null?'failed':'success';?>.png" style=" max-height: 80px;"> </div>
                                                        <h5 class="card-title"><?php echo date('d M Y', $time);?></h5>
                                                    </div>
                                                    <div class="card-footer">
                                                        <?php echo $points==null?'NO':$points;?> Points Added                                                            
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                            endif;
                                            }
                                            ?>        






                                                    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
            <div class="row mt--2">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header text-center">
                  <h2><b>Frequently Asked Questions</b></h2>
                </div>
                <div class="card-body">
                  <section id="tab" style="margin-top: 10px;" class="accordion-section clearfix mt-3" aria-label="Question Accordions">
                  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                      <div class="panel-heading p-3 mb-3" role="tab" id="heading0">
                      <h3 class="panel-title">
                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse0" aria-expanded="true" aria-controls="collapse0">
                        What is a Daily Bonus?
                        </a>
                      </h3>
                      </div>
                      <div id="collapse0" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading0">
                      <div class="panel-body px-3 mb-4">
                      <p class="p-faq">A Daily Bonus is an offer only available for our regular users.
                      </p>
                      </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading p-3 mb-3" role="tab" id="heading1">
                      <h3 class="panel-title">
                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                        How to get a Daily Bonus?
                        </a>
                      </h3>
                      </div>
                      <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
                      <div class="panel-body px-3 mb-4">
                        <p class="p-faq">A Daily Bonus will be given to your account, and for this, you have to check your account and log in every day. The more active you are, the more points you will win.</p>
                      </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading p-3 mb-3" role="tab" id="heading2">
                      <h3 class="panel-title">
                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2">
                        How to check my Daily Bonus points?
                        </a>
                      </h3>
                      </div>
                      <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                      <div class="panel-body px-3 mb-4">
                        <p class="p-faq">In the profile section, go to the Statistics and click on the Daily Bonus page. You will get all the information regarding your daily bonus earned each day wise.</p>
                      </div>
                      </div>
                    </div>

                    </div>
                  </section>
                </div>
              </div>
            </div>
    </div>
</div>