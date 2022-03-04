$(document).ready(function(){

    if ($('#all-points').length) {
        $('#all-points').DataTable();
    }

    if ($('#show-completed-offers').length) {
        $('#show-completed-offers').DataTable();
    }

    if ($('#show-spin-details').length) {
        $('#show-spin-details').DataTable();
    }
    if ($('#show-login-details').length) {
        $('#show-login-details').DataTable();
    }
    if ($('#show-coupon-details').length) {
        $('#show-coupon-details').DataTable();
    }
    if ($('#show-referral-details').length) {
        $('#show-referral-details').DataTable();
    }
    // code to use auto-complete plugin.
    var options= {
            url: function(phrase) {
                return "api/localSearch.php";
            }
            , getValue: function(element) {
                return element.name;
            }
            , ajaxSettings: {
                dataType: "json", method: "POST", data: {
                    dataType: "json"
                }
            }
            , preparePostData: function(data) {
                data.phrase=$("#search-site").val(); 
                return data;
            }
            , requestDelay: 400
        };

        if ($("#search-site").length) {
            $("#search-site").easyAutocomplete(options);
        }

        //code to redirect to searched result
        $('.search-icon').on('click',function(e){
            e.preventDefault(); 
            var value = $('#search-site').val();  
            if (value != "") {
                $.ajax({
                    url: "../common-files/manage-backend.php",
                    type: "POST",
                    data: {localSearch:value},
                    success: function(response) {
                        if (response.success == true) {
                            window.location.href=response.url; 
                        } 
                    } 
                });
            } 
        }) 
});