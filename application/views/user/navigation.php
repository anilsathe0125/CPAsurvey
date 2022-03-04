<div class="sidebar sidebar-style-2" data-background-color="dark1">	
		 <div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="<?php echo $profile->pimage;?>" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span class="user-detail" data-email = "<?php echo $profile->email;?>" data-points="<?php echo ($point->points+$point->referral)-($point->redeemed+$point->reversal);?>" data-pass="Xjac3LGwiNq.gKY">
									<font><b>Edit Profile</b></font>									<span class="user-level">Beginner</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="/dashboard/my_profile">
											<span class="link-collapse">My Profile</span>
										</a>
									</li>
									<li>
										<a href="/dashboard/edit_profile">
											<span class="link-collapse">Edit Profile</span>
										</a>
									</li>
									<li>
										<a href="/dashboard/statistics">
											<span class="link-collapse">Statistics</span>
										</a>
									</li>
									<li>
										<a href="/dashboard/settings">
											<span class="link-collapse">Settings</span>
										</a>
									</li>
									<li>
										<a href="../login?logout" onclick="if (!window.__cfRLUnblockHandlers) return false; signOut();" data-cf-modified-d4d107fd82b5d8e93c776951-="">
											<span class="link-collapse">Logout</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item active">
							<a href="statistics.php" style="background-color: #5cb85c !important; color: white !important;">
								<i class="fa fa-bell animated swing infinite"></i>
								<p class="pointsInfo" data-points="<?php echo ($point->points+$point->referral)-($point->redeemed+$point->reversal);?>"><?php echo ($point->points+$point->referral)-($point->redeemed+$point->reversal);?></p>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">MENU</h4>
						</li>
						<li class="nav-item ">
							<a href="/dashboard" aria-expanded = "">
								<i class="fas fa-home icon-dashboard"></i>
								<p>Dashboard</p>
							</a>
						</li>
						<li class="nav-item ">
							<a data-toggle="collapse" href="#specialoffers" aria-expanded="">
								<i class="fas fa-coins icon-earnpoint"></i>
								<p>Earn Points</p>
								<span class="caret"></span>
							</a>
							<div class="collapse " id="specialoffers">
								<ul class="nav nav-collapse">
									<li>
										<a href="/dashboard/top_offers">
											<span class="sub-item">Top Offers</span>
										</a>
									</li>
									<li>
										<a href="/dashboard/offerwalls">
											<span class="sub-item">Offer Walls</span>
										</a>
									</li>
									<li>
										<a href="/dashboard/surveys">
											<span class="sub-item">Surveys</span>
										</a>
									</li>
									<li>
										<a href="/dashboard/paid_surveys">
											<span class="sub-item">Paid Surveys</span>
										</a>
									</li>
									<li>
										<a href="/dashboard/mobile_offers">
											<span class="sub-item">Mobile Offers</span>
										</a>
									</li>
									<li>
										<a href="/dashboard/video_ads">
											<span class="sub-item">Video Ads</span>
										</a>
									</li>
									<li>
										<a href="/dashboard/social_offers">
											<span class="sub-item">Social Offers</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item ">
							<a data-toggle="collapse" href="#base" aria-expanded="">
								<i class="fas fa-calendar-alt icon-dailpoll"></i>
								<p>Reward & Bonus</p>
								<span class="caret"></span>
							</a>
							<div class="collapse " id="base">
								<ul class="nav nav-collapse">
									<li>
										<a href="/dashboard/spin_and_win">
											<span class="sub-item">Spin & Win</span>
										</a>
									</li>
									<li>
										<a href="/dashboard/daily_bonus">
											<span class="sub-item">Daily Bonus</span>
										</a>
									</li>
									<li>
										<a href="/dashboard/daily_deals">
											<span class="sub-item">Daily Deals</span>
										</a>
									</li>
									<li>
										<a href="/dashboard/daily_quiz">
											<span class="sub-item">Daily Quiz</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item ">
							<a href="/dashboard/refer_and_earn">
								<i class="fas fa-user-friends icon-referandearn"></i>
								<p>Refer & Earn</p>
							</a>
						</li>
						<li class="nav-item ">
							<a href="/dashboard/giveaway">
								<i class="fas fa-trophy icon-giveaway"></i>
								<p>Giveaways</p>
							</a>
						</li>
						<li class="nav-item ">
							<a href="/dashboard/redeem_points">
								<i class="fas fa-money-bill-alt icon-claimprizes"></i>
								<p>Claim Prizes</p>
							</a>
						</li>
						<li class="nav-item ">
							<a href="/dashboard/coupons">
								<i class="fas fa-ticket-alt icon-coupon"></i>
								<p>Apply Coupon</p>
							</a>
						</li> 
					</ul>
				</div>
			</div>
		</div>