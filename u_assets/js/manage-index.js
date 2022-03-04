$(document).ready(function(){
    $("#add-password").submit(function(event) {
        event.preventDefault(); 
        var newPass     = $('#new-password').val();
        var confirmPass = $('#confirm-password').val();

        if (newPass != confirmPass) {
            swal("Error!", "Password not matched. Please enter correct password.", {
                icon : "error",
                buttons: {
                    confirm: {
                        className : 'btn btn-danger'
                    }
                },
            });
            return false;
        }
        var data = $(this).serialize();

        $.ajax({
            url: "../common-files/manage-backend.php",
            type: "POST",
            data: data,
            success: function(response) { 
                if (response.success == true) {
                    swal("Success", response.message, {
                        icon : "success",
                        buttons: {
                            confirm: {
                                className : 'btn btn-success'
                            }
                        },
                    });
                    setInterval(function() {
                        location.reload();
                    }, 1200);
                }else{
                    swal("Error", 'Password not updated', {
                        icon : "error",
                        buttons: {
                            confirm: {
                                className : 'btn btn-success'
                            }
                        },
                    });
                }
            } 
        });
    });
    // code to handle offer modal
    $(".show-modal").on("click", function(e){
        e.preventDefault();
        $('#offerinfo').modal('show');
        var offerId = $(this).data('offerid');    
        var offerTitle = $(this).data('offer-title');    
        var offerDescription = $(this).data('offer-description');  
        var converstionDesc = $(this).data('conversion-desc');  
        var Offerpoint = $(this).data('offer-point');  
        var offerurl = $(this).data('offer-link');  
        var networkName = $(this).data('network-name');  
        $('.modal-offer-title').html(offerTitle); 
        $('.modal-offer-description').html(offerDescription); 
        $('.modal-conversion-desc').html(converstionDesc); 
        $('.model-offer-points').html(Offerpoint+' Points'); 
        $(".model-network-name").html(networkName); 
        $('.modal-offer-title').attr("data-offerid",offerId); 
        $('.model-offer-points').attr("data-points",Offerpoint); 
        $(".model-offer-url").attr("href", offerurl);

    });


    $('.model-offer-url').on('click',function(){                       
                $(document).idle({
                  onIdle: function(){
                    var userId = $('.title').data('userid');
                    var offerId = $('.modal-offer-title').data('offerid');    
                    var points = $('.model-offer-points').data('points'); 

                    $.ajax({
                        url: "../common-files/manage-backend.php",
                        type: "POST",
                        data: {
                            offerUserId: userId,
                            offerId: offerId,
                            points:points
                        }, 
                        success: function(response) {
                            if (response.success == true) {
                                playAudio();
                                $('#offerinfo').modal('hide');
                                swal("Success", 'Points has been credited in your account.', {
                                    icon : "success",
                                    buttons: {
                                        confirm: {
                                            className : 'btn btn-success'
                                        }
                                    },
                                }).then(function(){
                                    location.reload();
                                });
                            } 
                            if (response.success == false) {
                                playAudio();
                                $('#offerinfo').modal('hide');
                                swal("Error!", response.message, {
                                    icon : "error",
                                    buttons: {
                                        confirm: {
                                            className : 'btn btn-danger'
                                        }
                                    },
                                }).then(function(){
                                    location.reload();
                                });
                            }
                        }
                    });
                  },
                  onActive: function(){
                    // alert('Hey, I\'m back!');
                  },
                  idle: 15000
                });
            });

            // $('#welcomemsg').modal('show');
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
            // code to set cpabuild offers
            $("#cpaoffers").load("offers_api/cpabuild-api.php", function() {
                $('#cpaoffers').removeClass('is-loading is-loading-lg');
                loadJS('u_assets/js/manage-api-popup.js');
                return false;
            });

            function loadJS(file) {
                var jsElm = document.createElement("script");
                jsElm.type = "application/javascript";
                jsElm.src = file;
                document.body.appendChild(jsElm);
            }

            // code to handle captcha
            $('#set-internal-captcha').submit(function(e){
                e.preventDefault();
                var data = $(this).serialize(); 
                $.ajax({
                    url: "../common-files/manage-backend.php",
                    type: "POST",
                    data: data,
                    success: function(response) { 
                        if (response.success == true) {
                            location.reload();
                        }else{
                            swal("Please verify captcha", {
                                icon : "error",
                                buttons: {
                                    confirm: {
                                        className : 'btn btn-danger'
                                    }
                                },
                            });
                        }
                    } 
                });              
            });
            
        // code to show password model on the index page of dashboard.
        $('#myModal').modal('show');
        
        // $(function() {
        //     $(this).bind("contextmenu", function(e) {
        //         e.preventDefault();
        //     });
        // });
        //remove loader after loading successful offers
        
        //$("#adcentmediaoffers").load("offers_api/adcentmedia-api.php", function() {
       //   $('#adcentmediaoffers').removeClass('is-loading is-loading-lg');
          //  loadJS('u_assets/js/manage-api-popup.js');
          //  return false;
       // });
        $("#cpabuildoffers").load("/dashboard/cpabuild_api", function() {
            $('#cpabuildoffers').removeClass('is-loading is-loading-lg');
            loadJS('u_assets/js/manage-api-popup.js');
            return false;
        });
        $("#adgemOffers").load("offers_api/adgem-api.php", function() {
            $('#adgemOffers').removeClass('is-loading is-loading-lg');
            //loadJS('u_assets/js/manage-api-popup.js');
            return false;
        });
        //$("#wannadsOffers").load("offers_api/wannads-survey-api.php", function() {
        //    $('#wannadsOffers').removeClass('is-loading is-loading-lg');
         //   loadJS('u_assets/js/manage-api-popup.js');
         //   return false;
       // });
        // $("#adwork-media").load("offers_api/adwork-media-api.php", function() {
        //     $('#adwork-media').removeClass('is-loading is-loading-lg');
        //     loadJS('u_assets/js/manage-api-popup.js');
        //     return false;
        // }); 
        
        function loadJS(file) {
            var jsElm = document.createElement("script");
            jsElm.type = "application/javascript";
            jsElm.src = file;
            document.body.appendChild(jsElm);
        }
});