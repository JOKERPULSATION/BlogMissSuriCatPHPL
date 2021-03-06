<?php 

class StatutRepository{

	
	public function getAllSt ($pdo){

			//Effectuer la requête en bdd pour récupérer l'ensemble des commandes enregistrés en bdd
			$resultats = $pdo->query('SELECT p.id, p.civilite, p.nom, p.prenom, co.ref, co.date_cmd, co.date_expedition, p.ville, c.bic, c.iban, s.libelle FROM personne p LEFT JOIN client c ON p.id = c.id INNER JOIN commande co ON c.id = co.client_id INNER JOIN statut s ON co.statut_id = s.id');

			$resultats->setFetchMode(PDO::FETCH_OBJ);

			//Boucler sur tous les enregistrements récupérés grâce à votre requête SELECT
			//et pour chaque enregistrement :
			// 1 -  instancier un objet commande
			// 2 -  hydrater ses attributs avec les valeurs récupérées en bdd
			// 3 - pour chaque objet commande instanciés et hydratés, les ajouter dans un tableau
			// 4 - retourner ensuite ce tableau avec l'instruction return

			$listeStatut = array();

			while($obj = $resultats->fetch()){	
				//var_dump($obj);

				//die();
				
				$statut = new Statut();
				$statut->setLibelle($obj->libelle);
						
				$listeStatut[] = $statut;

			}

			return $listeStatut;

}
}
 ?>

 <p>a</p>