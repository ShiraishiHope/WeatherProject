<?php

require_once('../src/controllers/HomeController.php');

$_page = 'home';

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

include_once '../views/pages/' . $_page . '.php';

?>