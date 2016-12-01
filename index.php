<?php

//define host
include 'includes/config.php';
//make connection
include 'includes/database.php';

include 'views/head.html';

include 'views/header.html';

$action=isset($_GET['action'])?$_GET['action']:'home';

    switch($action) {
        case 'admin':

            include 'views/insert_form.html';
            include 'model/cms.php';
            break;

        case 'home':
			
            echo 'home';
            break;
    }
	
include 'views/footer.html';

?>
