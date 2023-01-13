

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(redirectToPosition);
    } else { 
       alert ("Geolocation is not supported by this browser.");
    }
}

function redirectToPosition(position) {
    window.location='home.php?latitude='+position.coords.latitude+'&longitude='+position.coords.longitude;
}