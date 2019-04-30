<?PHP
class coms {
	private $idcom;
	private $texte;
	
	function __construct($idcom,$texte){
		$this->idcom=$idcom;
		$this->texte=$texte;
		
	}
	
	function getidcom(){
		return $this->idcom;
	}
	function gettexte(){
		return $this->texte;
	}
	

	function settexte($texte){
		$this->texte=$texte;
	}
	function setidcom($idcat){
		$this->idcom=$idcom;
	}
	
	
}

?>