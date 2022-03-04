$(document).ready(function(){
 	$(".show-modal").on("click", function(e){
 		e.preventDefault();
	  	$('#offerinfo').modal('show');
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
	  	$(".model-offer-url").attr("href", offerurl); 
	});
});