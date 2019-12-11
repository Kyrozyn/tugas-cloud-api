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

function ifloggedIn() {
    var auth2 = gapi.auth2.getAuthInstance();
    if (!auth2.isSignedIn.get()) {
        console.log('sedang tidak login');
        return false;
    }
    else{
        return true;
        console.log('sedang login')
    }
}

function protect(){
    if (!ifloggedIn()){
        redirectToLogin();
    }
}

function protectLogin(){
    if(ifloggedIn()){
        redirectToIndex();
    }
}

function redirectToIndex(){
    window.location.replace('loggedin.php');
}

function redirectToLogin(){
    window.location.replace('index.php');
}