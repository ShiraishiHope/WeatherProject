

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(redirectToPosition);
    } else { 
       alert ("Geolocation is not supported by this browser.");
    }
    
}

function redirectToPosition(position) {
window.location='getPosition.php?latitude='+position.coords.latitude+'&long='+position.coords.longitude;
}
