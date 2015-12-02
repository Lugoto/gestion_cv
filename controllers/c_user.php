<?php
//controller user
if(!isset($_REQUEST['action']) ){
     $_REQUEST['action'] = 'default';
}
$action = $_REQUEST['action'];
require_once('modeles/m_user.php');
switch($action){


	//bouton submit de connexion
	case 'toConnnect' :{
		//On récupère les informations du formulaire
		$identifiant = $_POST['identifiant'];
		$motDePasse = $_POST['motDePasse'];

		//On regarde si l'user existe en base
		$user = User::toConnect($identifiant,$motDePasse);

		//S'il existe on met dans la superglobale SESSION ses informations

		if($user){
			$_SESSION['id_user'] = $user[0]['id_user'];
			$_SESSION['identifiant'] = $user[0]['identifiant'];
		}

		// Dans tous les cas on redirige sur l'index (pour l'instant)
		header('Location: ./index.php');
		break;
	}

	case 'toDisconnect':{
		include('vues/user/v_deconnection.html');
		header('Location: ./index.php');
		break;
	}



	case 'index' :{
		$listAllUser = User::index();
		include('vues/user/v_index.html');
		break;
	}



	case 'view' :{
		$idUser = $_GET['id'];
		$user = User::view($idUser);
		include('vues/user/v_view.html');
		break;
	}

	case 'inscription':{
		include('vues/user/v_add.php');
		break;
	}

	case 'add' :{
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$adresse_rue = $_POST['adresse_rue'];
		$adresse_cp = $_POST['adresse_cp'];
		$adressse_ville = $_POST['adressse_ville'];
		$email = $_POST['email'];
		$date_de_naissance = $_POST['date_de_naissance'];
		$photo = $_POST['photo'];
		$identifiant = $_POST['identifiant'];
		$mot_de_passe = $_POST['mot_de_passe'];
		User::Inscription($nom,$prenom,$adresse_rue,$adresse_cp,$adressse_ville,$email,$date_de_naissance,$photo,$identifiant,$mot_de_passe);

		// header('Location: ./index.php');
		break;
	}


	case 'edit' :{
		//TODO
		break;
	}

	case 'delete' :{
		//TODO
		break;
	}



    default:
    	header('Location: ./index.php');
    	break;
}

?>
