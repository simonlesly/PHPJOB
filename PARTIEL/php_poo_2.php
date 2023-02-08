<?php

//Définition de la classe Entreprise
class Entreprise {
//Attributs
	public $nom;
	public $vocation;
	public $adr;

//Méthodes et fonctions

	function __construct($nom, $vocation, $adr) {
		$this->nom = $nom;
		$this->vocation = $vocation;
		$this->adr = $adr;
	}
}

//Définition de la classe Personne
class Personne {
//Attributs
	private $numero;
	private $nom;
	private $prenom;
	private $daten;
	public $adr;
	public $ent;

//Méthodes
	function __construct($numero, $nom, $prenom, $dn, $adr, $ent) {
		$this->num = $numero;
		$this->nom = $nom;
		$this->prenom = $prenom;
		$this->daten = $daten;
		$this->adr = $adr;
		$this->ent = $ent;
	}

	public function getNumero() {
		return $this->numero;
	} 
	public function getNom() {
		return $this->nom;
	} 
	public function getPrenom() {
		return $this->prenom;
	} 
	public function getDaten() {
		return $this->daten;
	} 


	public function afficher() {
		echo "id : ".$this->num."<br/>";
		echo "Nom : ".$this->nom."<br/>";
		echo "Prénoms : ".$this->prenom."<br/>";
		echo "Date de naissance : ".$this->dn."<br/>";
		echo "Adresse : ".$this->adr."<br/>";
		echo "Entreprise : ".$this->ent->nom." - ".$this->ent->vocation." - ".$this->ent->adr;
	}

}

?>

