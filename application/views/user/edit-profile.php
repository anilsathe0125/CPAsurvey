<style type="text/css">
/* line 6, source/sass/image-picker.scss */
ul.thumbnails.image_picker_selector {
  overflow: auto;
  list-style-image: none;
  list-style-position: outside;
  list-style-type: none;
  padding: 0px;
  margin: 0px; }
  /* line 15, source/sass/image-picker.scss */
  ul.thumbnails.image_picker_selector ul {
    overflow: auto;
    list-style-image: none;
    list-style-position: outside;
    list-style-type: none;
    padding: 0px;
    margin: 0px; }
  /* line 25, source/sass/image-picker.scss */
  ul.thumbnails.image_picker_selector li.group_title {
    float: none; }
  /* line 30, source/sass/image-picker.scss */
  ul.thumbnails.image_picker_selector li {
    margin: 0px 12px 12px 0px;
    float: left; }
    /* line 35, source/sass/image-picker.scss */
    ul.thumbnails.image_picker_selector li .thumbnail {
      padding: 6px;
      border: 1px solid #DDD;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none; }
      /* line 42, source/sass/image-picker.scss */
      ul.thumbnails.image_picker_selector li .thumbnail img {
        -webkit-user-drag: none; }
    /* line 48, source/sass/image-picker.scss */
    ul.thumbnails.image_picker_selector li .thumbnail.selected {
      background: #08C; }
</style>
<div class="page-inner mt--5">
                                <div class="row mt--2">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <form id="updateUser" method="post" action="/dashboard/edit_profile/update" enctype="multipart/form-data" novalidate="novalidate">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h2 class="detailsh2"><b>General Details</b></h2>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="firstname">First Name</label>
                                                                <span class="required-label">*</span>
                                                                <input type="text" class="form-control" name="first_name" id="firstname" placeholder="Enter first name" value="<?php echo $profile->fname;?>">
                                                                <input type="hidden" name="id" value="<?php echo $profile->uid;?>">
                                                                <input type="hidden" name="updateProfileForm" value="1">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="lastname">Last Name</label>
                                                                <span class="required-label">*</span>
                                                                <input type="text" class="form-control" name="last_name" id="lastname" placeholder="Enter last name" value="<?php echo $profile->lname;?>">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="email">Email Address</label>
                                                                <span class="required-label">*</span>
                                                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address" value="<?php echo $profile->email;?>" disabled="">
                                                            </div>
                                                        </div> 
                                                        <div class="col-md-6">
                                                            <div class="form-group" style="padding-left: 10px;">
                                                                <label for="mobileno">Contact Number</label>
                                                                <input type="text" class="form-control" name="mobile_no" id="mobileno" placeholder="Enter contact number" value="<?php echo $profile->cnumber;?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="dateofbirth">Date of Birth</label>
                                                                <span class="required-label">*</span>
                                                                <input type="date" name="dob" max="3000-12-31" min="1000-01-01" class="form-control" id="dateofbirth" value="<?php echo $profile->dob;?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-check">
                                                                <label>Gender</label>
                                                                <span class="required-label">*</span>
                                                                <br>
                                                                <label class="form-radio-label pb-4">
                                                                    <input class="form-radio-input" type="radio" name="gender" value="male" checked="" style="margin-top: 15px;">
                                                                    <span class="form-radio-sign">Male</span>
                                                                </label>
                                                                <label class="form-radio-label ml-3">
                                                                    <input class="form-radio-input" type="radio" name="gender" value="female">
                                                                    <span class="form-radio-sign">Female</span>
                                                                </label>
                                                                <label class="form-radio-label ml-3">
                                                                    <input class="form-radio-input" type="radio" name="gender" value="other">
                                                                    <span class="form-radio-sign">Other</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="addressbox">Address</label>
                                                                <span class="required-label">*</span>
                                                                <div class="input-group">
                                                                    <textarea class="form-control" aria-label="With textarea" placeholder="Enter address" name="address" id="addressbox"><?php echo $profile->address;?></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="city">City</label>
                                                                <span class="required-label">*</span>
                                                                <input type="text" class="form-control" name="city" id="city" placeholder="Enter city" value="<?php echo $profile->city;?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="state">State</label>
                                                                <span class="required-label">*</span>
                                                                <input type="text" class="form-control" name="state" id="state" placeholder="Enter state" value="<?php echo $profile->state;?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="country">Country</label>
                                                                <span class="required-label">*</span>
                                                                <select class="form-control form-control-lg" name="country" id="country">
                                                                                                                                            <option value="India" selected="">
                                                                            India                                                                        </option>
                                                                                                                                        </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="pincode">ZIP/PIN Code</label>
                                                                <input type="text" class="form-control" name="zipcode" id="pincode" placeholder="Enter ZIP/PIN code" value="<?php echo $profile->zip;?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label class="form-label">Profile Image</label>
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-4">
                                                                <select class="image-picker show-labels show-html form-control" name="profile_image" style="display: none;">
                                                                    <option value="/u_assets/img/user_images/profile_image8.png">/u_assets/img/user_images/profile_image8.png</option>
                                                                    <option data-img-src="/u_assets/img/user_images/profile_image1.png" value="/u_assets/img/user_images/profile_image1.png">Offerwal</option>
                                                                    <option data-img-src="/u_assets/img/user_images/profile_image10.png" value="/u_assets/img/user_images/profile_image10.png">Offerwal</option>
                                                                    <option data-img-src="/u_assets/img/user_images/profile_image2.png" value="/u_assets/img/user_images/profile_image2.png">Offerwal</option>
                                                                    <option data-img-src="/u_assets/img/user_images/profile_image3.png" value="/u_assets/img/user_images/profile_image3.png">Offerwal</option>
                                                                    <option data-img-src="/u_assets/img/user_images/profile_image4.png" value="/u_assets/img/user_images/profile_image4.png">Offerwal</option>
                                                                    <option data-img-src="/u_assets/img/user_images/profile_image5.png" value="/u_assets/img/user_images/profile_image5.png">Offerwal</option>
                                                                    <option data-img-src="/u_assets/img/user_images/profile_image6.png" value="/u_assets/img/user_images/profile_image6.png">Offerwal</option>
                                                                    <option data-img-src="/u_assets/img/user_images/profile_image7.png" value="/u_assets/img/user_images/profile_image7.png">Offerwal</option>
                                                                    <option data-img-src="/u_assets/img/user_images/profile_image8.png" value="/u_assets/img/user_images/profile_image8.png">Offerwal</option>
                                                                    <option data-img-src="/u_assets/img/user_images/profile_image9.png" value="/u_assets/img/user_images/profile_image9.png">Offerwal</option>
                                                                </select>
                                                                <ul class="thumbnails image_picker_selector">
                                                                    <li><div class="thumbnail"><img class="image_picker_image" src="/u_assets/img/user_images/profile_image1.png"></div></li>
                                                                    <li><div class="thumbnail"><img class="image_picker_image" src="/u_assets/img/user_images/profile_image10.png"></div></li>
                                                                    <li><div class="thumbnail"><img class="image_picker_image" src="/u_assets/img/user_images/profile_image2.png"></div></li>
                                                                    <li><div class="thumbnail"><img class="image_picker_image" src="/u_assets/img/user_images/profile_image3.png"></div></li>
                                                                    <li><div class="thumbnail"><img class="image_picker_image" src="/u_assets/img/user_images/profile_image4.png"></div></li>
                                                                    <li><div class="thumbnail"><img class="image_picker_image" src="/u_assets/img/user_images/profile_image5.png"></div></li>
                                                                    <li><div class="thumbnail"><img class="image_picker_image" src="/u_assets/img/user_images/profile_image6.png"></div></li>
                                                                    <li><div class="thumbnail"><img class="image_picker_image" src="/u_assets/img/user_images/profile_image7.png"></div></li>
                                                                    <li><div class="thumbnail selected"><img class="image_picker_image" src="/u_assets/img/user_images/profile_image8.png"></div></li>
                                                                    <li><div class="thumbnail"><img class="image_picker_image" src="/u_assets/img/user_images/profile_image9.png"></div></li>
                                                                </ul>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header">
                                                    <h2 class="detailsh2"><b>Payment Details</b></h2>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="paypal">PayPal Email</label>
                                                                <input type="email" class="form-control" name="paypal_email" id="paypal" placeholder="Enter PayPal address" value="<?php echo $profile->pal_email;?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="bitcoin">Bitcoin Wallet</label>
                                                                <input type="text" class="form-control" name="bitcoin_address" id="bitcoin" placeholder="Enter Bitcoin address" value="<?php echo $profile->pbit_address;?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header">
                                                    <h2 class="detailsh2"><b>Social Details</b></h2>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="fburl">Facebook Profile</label>
                                                                <div class="input-icon">
                                                                    <span class="input-icon-addon">
                                                            <i class="fa fa-external-link-square-alt"></i>
                                                            </span>
                                                                    <input type="text" class="form-control" placeholder="Facebook URL" name="fb_url" id="fburl" value="<?php echo $profile->fprofile;?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="instaurl">Instagram Profile</label>
                                                                <div class="input-icon">
                                                                    <span class="input-icon-addon">
                                                                <i class="fa fa-external-link-square-alt"></i>
                                                                </span>
                                                                    <input type="text" class="form-control" placeholder="Instagram URL" name="insta_url" id="instaurl" value="<?php echo $profile->instapro;?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <button class="btn btn-success btn-block" style="font-weight: bold; font-size: 18px;">SAVE</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                  <div class="col-md-1"></div>
                                </div>
                            </div>
<script src="/u_assets/js/manage-profiles.js" type="text/javascript"></script>                             
<script src="/u_assets/plugins/image-picker/image1-picker.js" type="text/javascript"></script>                            