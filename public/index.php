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
    }
echo $city;

include_once('../src/controllers/HomeController.php');


include_once '../views/home/' . $_page . '.php';

?>
