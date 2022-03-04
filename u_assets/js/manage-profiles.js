$(document).ready(function(){
	if($('#show-spin-details').length){
		$('#show-spin-details').DataTable();
	}
	if($('#show-login-details').length){
		$('#show-login-details').DataTable();
	}
	if($('#show-coupon-details').length){
		$('#show-coupon-details').DataTable();
	} 
	if($('#show-referral-details').length){
		$('#show-referral-details').DataTable();
	}
    if($('#all-points').length){
        $('#all-points').DataTable();
    }
	if ($('.image-picker').length) {
		$(".image-picker").imagepicker();
	}
    // code to validate and update user profile.
    if ($("#updateUser").length) {
           $("#updateUser").validate({
            validClass: "success",
            rules: {
                first_name: {required: true},    
                last_name: {required: true},    
                email: {
                    required: true,
                    email:true
                },    
                mobile_no: {
                    required: true, 
                },    
                dob: {
                    required:true,
                    date: true
                },    
                address: {required: true},    
                city: {required: true},    
                gender: {required: true},    
                state: {required: true},    
                country: {required: true},    
                zipcode: {required: true},    
                profile_image: {required: true} 
            },        
            highlight: function(element) {
                $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
            },
            success: function(element) {
                $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
            },
            submitHandler: function(form) { 
                // check website urls 
                var fbUrl = $('#fburl').val();  
                var instaUrl = $('#instaurl').val();  
                // code to validate facebook url.                 
                if (fbUrl != '' && validate_urlfb(fbUrl) != true) {
                    swal('Please enter valid facebook url', {
                        icon: "error",
                        buttons : {
                            confirm : {
                                className: 'btn btn-danger'
                            }
                        }
                    });
                    return false;
                }
                // code to validate instagram url.
                if (instaUrl != '' && validate_urlInsta(instaUrl) != true) {
                    swal('Please enter valid instagram url', {
                        icon: "error",
                        buttons : {
                            confirm : {
                                className: 'btn btn-danger'
                            }
                        }
                    });
                    return false;
                } 
                var data = $(form).serialize();              
                $.ajax({
                    url: "../common-files/manage-backend.php",
                    type: "POST",
                    data: data,
                    success: function(response) {
                        if (response.success == true) {

                            swal(response.message, {
                                icon: "success",
                                buttons : {
                                    confirm : {
                                        className: 'btn btn-success'
                                    }
                                }
                            }).then(function(){ 
                                if (response.userId != '') {
                                    checkProfileCompleted(response.userId);
                                }else{
                                    // location.reload();
                                } 
                            });                     
                        } 
                    } 
                });
            }
        }); 
    }

    // function to validate social media urls url.
    function validate_urlfb(url)
    {
        if (/^(https?:\/\/)?((w{3}\.)?)facebook.com\/.*/i.test(url))
            return true;     
        return false;
    }    
    // function to validate social media urls url.
    function validate_urlInsta(url)
    {
        if (/^(https?:\/\/)?((w{3}\.)?)instagram.com\/.*/i.test(url))
            return true;     
        return false;
    }  

    function checkProfileCompleted(userId)
    {
        $.ajax({
            url: "../common-files/manage-backend.php",
            type: "POST",
            data: {checkProfileCompleted:userId},
            success: function(response) {
                if (response.success == true) { 
                    playAudio();
                    swal("Welcome offer points added in your account", {
                        icon: "success",
                        buttons : {
                            confirm : {
                                className: 'btn btn-success'
                            }
                        }
                    }).then(function(){
                        document.location.href="/dashboard";
                    });
                } 
                if (response.success == false) {
                    document.location.href="/dashboard/my-profile.php";
                }
            } 
        });
    }

    function playAudio() {
     var x = document.getElementById("myAudio");   
        var playPromise = x.play();

        if (playPromise !== undefined) {
        playPromise.then(_ => { 
        })
        .catch(error => { 
        });
        }
    }
});