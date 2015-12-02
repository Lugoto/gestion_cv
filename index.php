<?php
session_start();



require_once('./vues/header.php');


if(!isset($_REQUEST['uc']) ){
     $_REQUEST['uc'] = 'accueil';
}    
$uc = $_REQUEST['uc'];

switch($uc){
    case 'accueil':{  
                 ob_end_flush();
                include("vues/accueil.php") ;
                break;
    }
     case 'user':{  
                //ob_end_flush();
                include("controllers/c_user.php") ;
                break;
    }
     case 'enterprise':{  
                 ob_end_flush();
                include("vues/connection.html") ;
                break;
    }
       

}

require_once('./vues/footer.html')
?>