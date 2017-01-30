<?php 
class Statut{
	private $statutId;
	private $libelle;

	public function getStatutId() {
		return $this->statutId;
	}

	public function setStatutId($statutId) {
		$this->statutId = $statutId;
	}

	public function getLibelle() {
		return $this->libelle;
	}

	public function setLibelle($libelle) {
		$this->libelle = $libelle;
	}
}
?>