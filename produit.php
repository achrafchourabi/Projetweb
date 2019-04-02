<?PHP
class produit{
	private $id;
	private $nom;
	private $idsouscat;
	private $idcat ;
	private $prix;
	private $qte;
		private $etat;
		private $remise;

	function __construct($id,$nom,$idsouscat,$idcat,$prix,$qte,$etat,$remise){
		$this->id=$id;
		$this->nom=$nom;
		$this->idsouscat=$idsouscat;
		$this->idcat=$idcat ;
		$this->prix=$prix;
		$this->qte=$qte;
		$this->etat=$etat;
		$this->remise=$remise;
		

	}
	
	function getid(){
		return $this->id;
	}
	function getcat(){
		return $this->idcat;
	}
	function getNom(){
		return $this->nom;
	}
	function getsouscat(){
		return $this->idsouscat;
	}
	function getprix(){
		return $this->prix;
	}
	function getqte(){
		return $this->qte;
	}
	function getetat(){
		return $this->etat;
	}
	function getremise(){
		return $this->remise;
	}

	function setNom($nom){
		$this->nom=$nom;
	}

	function setcat($cat){
		$this->idcat=$idcat;
	}
	function setsouscat($souscat){
		$this->idsouscat=$idsouscat;
	}
	function setprix($prix){
		$this->prix=$prix;
	}
	function setqte($qte){
		$this->qte=$qte;
	}
	function setetat($etat){
		$this->etat=$etat;
	}
	function setremise($remise){
		$this->remise=$remise;
	}
	
}

?>