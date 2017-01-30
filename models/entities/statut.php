<?php 
class Statut{
	private $statutId;
	private $libelle;

	public function getIdStatut() {
		return $this->statutId;
	}

	public function setIdStatut($idStatut) {
		$this->IdStatut = $idStatut;
	}

	public function getLibelle() {
		return $this->libelle;
	}

	public function setLibelle($libelle) {
		$this->libelle = $libelle;
	}
}
?>