<html>
<head>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id" content="887949345231-o6jlfqlgl441onipe21vdusem72sp6or.apps.googleusercontent.com">
    <script src="foo.js"></script>
</head>
<body>
<div class="g-signin2" data-onsuccess="onSignIn"></div>
<a href="#" onclick="signOut();">Sign out</a><br>
<a href="#" onclick="ifloggedIn();">Check login</a>
</body>
<script>
    function ifloggedIn() {
        var auth2 = gapi.auth2.getAuthInstance();
        if (!auth2.isSignedIn.get()) {
            console.log('sedang tidak login');
            return;
        }
        else{
            console.log('sedang login')
        }
    }
</script>
</html>