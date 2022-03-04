    function onSignIn(googleUser) {
    var profile = googleUser.getBasicProfile();
    console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
    var id_token = googleUser.getAuthResponse().id_token;
        $.ajax({
            url: "../login",
            type: "POST",
            data: {token:id_token},
            success: function(response) {
                if (response.success == true) {
                    window.location.replace("/dashboard/");
                }
            }
        });
    }

    function signOut() {
        var auth2 = gapi.auth2.getAuthInstance();
        auth2.signOut().then(function () {
            console.log('User signed out.');
        });
    }

    function onLoad() {
        gapi.load('auth2', function() {
            gapi.auth2.init();
        });
    }