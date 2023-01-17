<?php



$_page = 'home';
$city = "";

if (isset($_GET['page']) && !empty($_GET['page'])) {
    switch ($_GET['page']) {
        case '':
            $_page = '404';
		case 'home':
            $_page = 'home';
        default:
            $_page = '404';
            break;
    }
}

if (isset($_GET['city']) && !empty($_GET['city'])) 
    {
        $city=$_GET['city'];
        include_once('../src/controllers/HomeController.php');
    }


// On récupère les positions dans le GET dans les variables PHP
if (isset($_GET['latitude']) && !empty($_GET['latitude']) && isset($_GET['longitude']) && !empty($_GET['longitude'])) 
    {
        $latitude=$_GET['latitude'];
        $longitude=$_GET['longitude'];
        include_once('../src/controllers/HomeController.php');
    }


include_once '../views/home/' . $_page . '.php';

?>
