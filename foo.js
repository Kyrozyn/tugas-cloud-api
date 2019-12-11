function onLoad() {
    gapi.load('auth2', function() {
        gapi.auth2.init();
    });
}
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

function redirectToIndex(){
    window.location.replace('loggedin.php');
}

function checkIsLoggedIn(){
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.then(function() {
        var isSignedIn = auth2.isSignedIn.get();
        var currentUser = auth2.currentUser.get();
        if (isSignedIn) {
            console.log('isLoggedIn')
        } else {
            console.log('isNotLoggedIn')
        }
    });
}
