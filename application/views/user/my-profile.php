<div class="page-inner mt--5">
                            <div class="row mt--2">
                                <div class="col-md-1"></div>
                                <div class="col-md-10">
                                    <div class="card card-profile">
                                        <div class="card-header" style="background-image: url('u_assets/img/cover.jpg');height: 250px;">
                                            <div class="profile-picture">
                                                <div class="avatar" style="width: 8rem; height: 8rem;">
                                                    <img src="u_assets/img/user_images/profile_image5.png" alt="..." class="avatar-img rounded-circle">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="user-profile text-center">
                                                <div class="name">
                                                    <?php echo $profile->fname;?>                                                </div>
                                                <div class="desc">
                                                    <?php echo $profile->state;?>
                                                    <?php echo $profile->country;?>
                                                    <?php echo $profile->zip;?>  
                                                    </div>
                                                                                                <div class="view-profile">
                                                    <a href="edit-profile.php" class="btn btn-secondary btn-block" style="font-weight: bold; font-size: 18px;">EDIT PROFILE</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row mt-3">
                                                <div class="col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>Name</label>
                                                        <input type="text" class="form-control" name="name" placeholder="Name" value="<?php echo $profile->fname;?>" disabled="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>Email</label>
                                                        <input type="email" class="form-control" name="email" placeholder="Name" value="<?php echo $profile->email;?>" disabled="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>Date of Birth</label>
                                                        <input type="text" class="form-control" id="datepicker" name="datepicker" value="<?php echo $profile->dob;?>" disabled="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>Gender</label>
                                                        <input type="text" class="form-control" id="gender" name="gender" value="<?php echo $profile->gender;?>" disabled="">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-md-12">
                                                    <div class="form-group form-group-default">
                                                        <label>Contact Number</label>
                                                        <input type="text" class="form-control" value="<?php echo $profile->cnumber;?>" name="phone" placeholder="Phone" disabled="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-md-12">
                                                    <div class="form-group form-group-default">
                                                        <label>Address</label>
                                                        <input type="text" class="form-control" value="<?php echo $profile->address;?>" name="address" placeholder="Address" disabled="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                        </div>