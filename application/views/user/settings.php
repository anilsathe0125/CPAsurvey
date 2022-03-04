<div class="page-inner mt--5">
                                            <!--<div class="row mt--2">-->
                        <!--    <div class="col-md-1"></div>-->
                        <!--    <div class="col-md-10">-->
                        <!--        <div class="card">-->
                        <!--            <div class="card-header">-->
                        <!--                <h2><b>Verify Email</b></h2>-->
                        <!--            </div>-->
                        <!--            <form id="verify-email">-->
                        <!--                <div class="card-body">-->
                        <!--                    <div class="row">-->
                        <!--                        <div class="col-md-12">-->
                        <!--                            <div class="form-group">-->
                        <!--                                <input type="email" class="form-control" id="user-email" name="verifyEmail[email]" value="" readonly>-->
                        <!--                                <input type="hidden" id="user-id" name="verifyEmail[user_id]" value="">-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!--                        <div class="col-md-12 text-center">-->
                        <!--                            <div class="form-group">-->
                        <!--                                <button class="btn btn-primary btn-block" id="otp-verify-email" style="font-weight: bold; font-size: 18px;">SEND VERIFICATION CODE</button>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!--                    <div class="row show-otp-section" style="display: none;">-->
                        <!--                        <div class="col-md-12">-->
                        <!--                            <div class="form-group">-->
                        <!--                                <input type="text" class="form-control" id="email2" name="verifyEmail[otp]"placeholder="Enter verification code" required="">-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!--                    <div class="row show-otp-section" style="display: none;">-->
                        <!--                        <div class="col-md-12 text-center">-->
                        <!--                            <div class="form-group">-->
                        <!--                                <button class="btn btn-success color-green" style="font-weight: bold; font-size: 18px;">SUBMIT</button>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--            </form>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                                        <div class="row mt--2" id="update-password-section">
                            <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <div class="card">
                                <div class="card-header">
                                    <h2><b>Update Password</b></h2>
                                </div>
                                <form id="updatePassword"> 
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="password" class="form-control" id="old-password" placeholder="Enter old password" name="updatePassword[oldPassword]" required="">
                                                    <input type="hidden" name="updatePassword[id]" value="246949"> 
                                                                                                            <center><small><b>Your default password is 123456</b>
                                                    </small></center>
                                                                                                    </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="password" class="form-control" id="new-password" placeholder="Enter new password" name="updatePassword[newPassword]" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="password" class="form-control" id="confirm-password" placeholder="Confirm new password" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <div class="form-group">
                                                    <button class="btn btn-success color-green text-white btn-block" type="submit" style="font-weight: bold; font-size: 18px;">SAVE</button>
                                                </div>
                                            </div>
                                        </div>  
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row mt--2" style="display: none;" id="forgot-password-section">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <div class="card">
                                    <div class="card-header">
                                        <h2><b>Forgot Password</b></h2>
                                    </div>
                                    <form id="forgot-password">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="email-address-forgot" name="forgotPassword[email]" value="microsaini@gmail.com" readonly="">
                                                        <input type="hidden" id="user-id" name="forgotPassword[user_id]" value="246949">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 text-center">
                                                    <div class="form-group">
                                                        <button class="btn btn-primary btn-block" id="reset-password" style="font-weight: bold; font-size: 18px;">RESET PASSWORD</button>
                                                    </div>
                                                </div>
                                            </div>  
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <div class="row mt--2">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <div class="card">
                                <div class="card-header">
                                    <h2><b>Update Email </b></h2>
                                </div>
                                <form id="update-email">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" id="old-email-address" value="microsaini@gmail.com" readonly=""> 
                                                    <input type="hidden" id="user-emailaddress" name="updateEmail[id]" value="246949">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12" id="adjust-otp">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" id="new-email-address" placeholder="Enter new email" name="updateEmail[email]" data-user="246949" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group" id="send-otp-condition"> 
                                                    <div id="update-email-loader" style="display: none; margin-top: 10px;"> 
                                                        <div class="is-loading is-loading-lg"></div><br> 
                                                    </div>
                                                    <br>
                                                    <button class="btn btn-warning color-yellow btn-block" style="font-weight: bold; font-size: 18px;">UPDATE</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row condition" style="display: none;">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="verification-code" placeholder="Enter verification code" name="updateEmail[otp]">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row condition" style="display: none;">
                                            <div class="col-md-12 text-center">
                                                <div class="form-group"> 
                                                    <button class="btn btn-success color-green btn-block" type="submit" style="font-weight: bold; font-size: 18px;">SUBMIT</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>         
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row mt--2">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <div class="card">
                                <div class="card-header">
                                    <h2><b>Delete Account</b></h2>
                                </div>
                                <div class="card-body">
                                    <form id="delete-account">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="dlt" placeholder="Enter word 'DELETE' in capital" name="deleteAccount[delete]" required="">
                                                    <input type="hidden" name="deleteAccount[id]" value="246949">
                                                    <input type="hidden" name="deleteAccount[email]" value="microsaini@gmail.com">
                                                </div>
                                            </div>
                                                <div class="col-md-12 text-center">
                                                    <div class="form-group">
                                                        <button class="btn btn-danger btn-red btn-block" type="submit" style="font-weight: bold; font-size: 18px;">DELETE ACCOUNT</button>
                                                    </div>
                                                </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>