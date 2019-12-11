<html>
<head>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id" content="887949345231-o6jlfqlgl441onipe21vdusem72sp6or.apps.googleusercontent.com">

</head>
<body>
<div class="g-signin2" data-onsuccess="onSignIn"></div>
<a href="#" onclick="signOut();">Sign out</a>

</body>
<script>
    function onSignIn(googleUser) {
        var profile = googleUser.getBasicProfile();
        console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
        console.log('Name: ' + profile.getName());
        console.log('Image URL: ' + profile.getImageUrl());
        console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
    }

    function signOut() {
        var auth2 = gapi.auth2.getAuthInstance();
        auth2.signOut().then(function () {
            console.log('User signed out.');
        });
    }

    /**
     * The Sign-In client object.
     */
    var auth2;

    /**
     * Initializes the Sign-In client.
     */
    var initClient = function() {
        gapi.load('auth2', function(){
            /**
             * Retrieve the singleton for the GoogleAuth library and set up the
             * client.
             */
            auth2 = gapi.auth2.init({
                client_id: '887949345231-o6jlfqlgl441onipe21vdusem72sp6or.apps.googleusercontent.com'
            });

            // Attach the click handler to the sign-in button
            auth2.attachClickHandler('signin-button', {}, onSuccess, onFailure);
        });
    };

    /**
     * Handle successful sign-ins.
     */
    var onSuccess = function(user) {
        console.log('Signed in as ' + user.getBasicProfile().getName());
    };

    /**
     * Handle sign-in failures.
     */
    var onFailure = function(error) {
        console.log(error);
    };
</script>
</html>