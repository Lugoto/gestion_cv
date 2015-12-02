<?php
include_once('./fct/Connection.php');
class User{

	function __construct()
	{

	}

	public static function toConnect($identifiant,$motDePasse)
	{
		$bdd = Connection::db_connect();
		$req = $bdd->query('SELECT * FROM user
			WHERE identifiant ="' .$identifiant . '"
			AND mot_de_passe = "'.$motDePasse.'"  ');
		$reponse = $req->fetchAll();
		return $reponse ? $reponse : "Erreur connexion";
	}

	// affiche tous les users
	public static function index()
	{
		$bdd = Connection::db_connect();
		$req = $bdd->query('SELECT * FROM user');
		$reponse = $req->fetchAll();
		return $reponse ? $reponse : "erreur ou liste d'user vide.";
	}

	// affiche un user particulier
	public static function view($idUser)
	{
		$bdd = Connection::db_connect();
		$req = $bdd->query('SELECT * FROM user WHERE id_user ="' .$idUser  . '"');
		$reponse = $req->fetchAll();
		return $reponse ? $reponse : "erreur ou utilisateur non trouvé.";
	}

	// ajoute un user (inscription)
	// je vous aiderai pour le md5 si besoin.

	public static function Inscription($nom,$prenom,$adresse_cp,$adresse_ville,$adresse_rue,$email,$date_de_naissance,$photo,$identifiant,$mot_de_passe){
      $co=Connection::db_connect();
      $req = $co->prepare('INSERT INTO User (nom, prenom, adresse_cp, adresse_ville, adresse_rue, email, date_de_naissance, photo, identifiant, mot_de_passe) VALUES (:nom, :prenom, :adresse_cp, :adresse_ville, :adresse_rue, :email, :date_de_naissance, :photo, :identifiant, :mot_de_passe)');

			$req->bindParam(':nom',$nom);
			$req->bindParam(':prenom',$prenom);
			$req->bindParam(':adresse_cp',$adresse_cp);
			$req->bindParam(':adresse_ville',$adresse_ville);
			$req->bindParam(':adresse_rue',$adresse_rue);
			$req->bindParam(':email',$email);
			$req->bindParam(':date_de_naissance',$date_de_naissance);
			$req->bindParam(':photo',$photo);
			$req->bindParam(':identifiant',$identifiant);
			$req->bindParam(':mot_de_passe',$mot_de_passe);

            $req->execute();
	}

	// modifie un user
	public static function edit($idUSer)
	{

	}
	// supprime un user
	public static function delete($idUser)
	{

	}


}

?>
