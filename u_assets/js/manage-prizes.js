$(document).ready(function(){
	$('.redeem').on('click',function(e){
		e.preventDefault();
  		
  		var id = $(this).find('img').attr('id');  
		var title = $(this).find('img').data('title');
		var imgSrc = $(this).find('img').attr('src');
		 
		$('#gift-card-name').html('');
		$('#getImgSrc').html('');
        $('#gift-card-name').append($('<option></option>').attr("value", id).html(title));
		$('#getImgSrc').val(imgSrc);
 		
		 	$.ajax({
	            type: 'POST',
	            url: '/dashboard/redeem',
	            data: {
	                type: id
	            },
	            dataType: 'json',
	            cache: false,
	            success: function(response) {	
	                if (typeof response.getDetail != "undefined" && response.getDetail != '') {
	                    $('#description').html("");
	                    if (response.desc != '') {
	                        $('#description').append(response.desc); 	                    
	                    } 
	                    // $('#country').html('');
	                    var country = $('body').data('country');
	                    if (country != '') { 
                            $('#country').append($('<option></option>').attr("value", country).html(country));
	                    }  
	                    $.each(response.getDetail, function(key, value) {
	                        $('#gift-card-values').html("");
	                        $.each(value, function(priceKey, priceValue) {
	                            $('#gift-card-values').append($('<option></option>').attr("value", priceKey).html(priceValue).attr('data-slug', id).attr('data-val', priceValue));
	                        });
	                    });
	                    $('.condition-info').html($('.pointsData').html()+' POINTS REQUIRED');
	                    $('.condition-info').attr('data-required', $('.pointsData').html());
	                }
	            },
	        }); 
		  
	        $('html, body').animate({
		        scrollTop: $("#prizes").offset().top
		    }, 1000);
		    $('.cls').show(); 
		});

	// code to set gift card values
	$('#gift-card-values').on('change', function(e) {
        var optionValue = $(this).val();
        var slug = $(this).find(':selected').data('slug');
        $.ajax({
            type: 'POST',
            url: '../common-files/manage-backend.php',
            data: {
                slug: slug,
                option: optionValue
            },
            dataType: 'json',
            cache: false,
            success: function(response) {
                if (response.success == true) {
                    $('.pointsData').html(response.points);
                    $('.condition-info').html(response.points+' POINTS REQUIRED');
                    $('.condition-info').append($('.condition-info').attr('data-required', response.points));
                }
            },
        });
    }); 

    // code to submit claim prizes
    $("#redeem-gift-card").submit(function(event) {
	        event.preventDefault(); 
	        var data = $(this).serialize();

        var formData = new FormData(this)
        swal({
				title: 'Enter Password', 
				content: '',
				content: {
					element: "input",
					attributes: {
						placeholder: "Enter your password",
						type: "password",
						id: "input-field",
						className: "form-control"
					},
				},
				closeOnClickOutside: false,
				buttons: {
					cancel: {
						visible: false,
						className: 'btn btn-danger'
					},
					confirm: {
						className : 'btn btn-success'
					}, 
				},
			}).then(
			function() {
				var pass = $('#input-field').val();
				if (pass != '') {
					var up = $('.user-detail').data('pass');
					if (pass != up) {
						swal("Error!", "You entered wrong password", {
							icon : "error",
							buttons: {
								confirm: {
									className : 'btn btn-danger'
								}
							},
						}); 
						return false;
					}else{
						var isVerified = $('#redeem-gift-card').data('verified');
				    	if (isVerified == 0) {
				    		swal({
							title: 'You are not verified?',
							text: "You won't be able to revert this!",
							icon: 'warning',
							buttons:{
								cancel: {
									visible: true,
									text : 'No, cancel!',
									className: 'btn btn-danger'
								},
								confirm: {
									text : 'Yes, Verified Now!',
									className : 'btn btn-success'
								}
							}
						}).then((willDelete) => {
							 // alert('mail sent ');
						});
				    	}else{
				    		var email = $('.user-detail').data('email');
				    		var giftcardName = $('#gift-card-name').val();
				    		var gValue = $('#gift-card-values').find(':selected').data('val');
				    		var requiredPoints = $('.condition-info').data('required');
				    		var getImgSrc = $('#getImgSrc').val();
				    		var country = $('#country').data('country');

				    		  
			    		 	$.ajax({	
					            url: "../common-files/manage-backend.php",
					            type: "POST",
					            data: {email:email,giftcard:giftcardName,val:gValue,required:requiredPoints,getImgSrc:getImgSrc,country:country},
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
										// setTimeout(function(){ location.reload(); }, 3000);
									}
									if (response.success == false) {
										swal("Error!", response.message, {
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
				    	}  
					}
				}else{
					swal("Error!", "Password cannot be empty", {
						icon : "error",
						buttons: {
							confirm: {
								className : 'btn btn-danger'
							}
						},
					});
				}
			}); 
    	});

    	//code to initiate datatable
    	$('#show-gift-claim-history').DataTable();    	 
	});
 