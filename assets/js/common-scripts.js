$(document).ready(function(){
    $(".loginpopup").click(function(e){
        e.preventDefault();
        $('#loginregistermodel').modal();
    });
    // code to register the user.
    $(".register-user").submit(function(event) { 
            event.preventDefault();   
            var data = $(this).serialize();

            $.ajax({
                url: "../login",
                type: "POST",
                data: data,
                success: function(response) {                    
                    if (response.success == true) {      
                        // $('.display-error').hide();                  
                        $("body").overhang({
                            type: "success",
                            message: "Welcome to PayPrizes..."
                        });                        
                        setInterval(function() {
                            window.location.href = window.location.origin+'/dashboard';
                        }, 1200);
                    }
                    if (response.success == false) {
                        $("body").overhang({
                            type: "error",
                            message: response.message
                        });
                    }
                }
            });
        });
        // function to validate email.
        function validateEmail($email) {
            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            return emailReg.test($email);
        }

        var userEmail = $('.user-detail').data('email');
        var points = $('.user-detail').data('points');
         
        //  code to update the points
        var x = document.getElementById("myAudio");
         
        function checkSession(userEmail) {
            if (userEmail != "" && typeof userEmail != "undefined") {
                $.ajax({
                    url: "../dashboard/point",
                    type: "POST",
                    data: {
                        emailToUpdatePoints: userEmail
                    },
                    // async: true,
                    success: function(data) {
                        if (data.success == true) {
                            playAudio();
                            $('.pointsInfo').attr("data-points", data.points+' Points');                            
                            $('.pointsInfo').html(data.points+' Points');
                            // notification
                            $("body").overhang({
                                type: "success",
                                message: "1 Point added in your account"
                            });
                        }
                        if (data.success == false) {
                            stopTimer();
                        }
                    }
                });
            }
        } 

        function playAudio() {
            x.play();
        } 

        // code for active window
        var myInterval;
        var notificationIntervalForUsers;
        var notificationIntervalForAdmin
        startTimer();

    window.addEventListener('focus', startTimer);
        window.addEventListener('blur', stopTimer);

        function startTimer() {

            if (typeof points != "undefined" && points != '' && points < 500) {
                myInterval = setInterval(function() { 
                    checkSessionWithCondition();
                }, 30000);
            }
            if (typeof points != "undefined" && points != '' && points >= 500) {
                myInterval = setInterval(function() {
                    checkSessionWithCondition();
                }, 30000);
            }

            //code here to check msg by admin.
            if ($.isFunction(window.checkMsgFromAdmin)) {
                //execute it
                notificationIntervalForUsers = setInterval(function(){
                    // checkMsgFromAdmin(userEmail);
                },6000);
            }
            //code to get msgs from users to admin
            if ($.isFunction(window.checkMsgFromUser)) {
                //execute it
                notificationIntervalForAdmin = setInterval(function(){
                    // checkMsgFromUser(userEmail);
                },6000);
            }             
        }

        function stopTimer() {
            window.clearInterval(myInterval);
        }

        function checkSessionWithCondition() {
            checkSession(userEmail);
        }

        $('.mark-msg-as-read').on('click',function(e){
            e.preventDefault();
            var email = $('.user-detail').data('email');

            $.ajax({
                url: "../common-files/manage-admin.php",
                type: "POST",
                data: {
                    notificationEmail: email
                },
                // async: true,
                success: function(data) {
                    
                }
            }); 
        });

        function checkNotifications(userEmail)
        {   
            $.ajax({
                url: "../common-files/manage-admin.php",
                type: "POST",
                data: {
                    chkNotifyForEmail: userEmail
                },
                // async: true,
                success: function(response) {
                    if (response.success == true && response.count != '') {
                        $(".notification").remove();
                        $("#notifDropdown").append("<span class='notification'>"+response.count+"</span>");
                    }else{
                        $(".notification").remove();
                    }
                    if (response.success == true && response.title != '') {
                         $(".notif-center").find('a:first').remove();
                         $(".notif-center").prepend("<a href='/dashboard/notifications.php'><div class='notif-icon notif-success'> <i class='fa fa-comment'></i> </div><div class='notif-content'><span class='block'>"+response.title+"</span><span class='time'>"+response.time+"</span></div></a>");
                    }
                }
            });

        }//end checkNotifications().

        // login modal pop-up
        $(window, document, undefined).ready(function() {

        $('.input').blur(function() {
            var $this = $(this);
            if ($this.val())
                $this.addClass('used');
            else
                $this.removeClass('used');
        });

    });

    $('#tab1').on('click', function() {
        $('#tab1').addClass('login-shadow');
        $('#tab2').removeClass('signup-shadow');
    });

    $('#tab2').on('click', function() {
        $('#tab2').addClass('signup-shadow');
        $('#tab1').removeClass('login-shadow'); 
    }); 

    // code to read messages on click notification
    $('.mark-msg-as-read').on('click',function(e){  
        e.preventDefault();
        var userId = $('#messageDropdown').data('id'); 
        $.ajax({
            url: "../common-files/manage-backend.php",
            type: "POST",
            data: {
                userIdSetMsgSeen : userId
            },
            // async: true,
            success: function(data) {
                
            }
        }); 
    }); 
});