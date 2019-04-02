<?PHP
class categorie{
	private $idcat;
	private $nomcat;
	
	function __construct($idcat,$nomcat){
		$this->idcat=$idcat;
		$this->nomcat=$nomcat;
		
	}
	
	function getidcat(){
		return $this->idcat;
	}
	function getNomcat(){
		return $this->nomcat;
	}
	

	function setNomcat($nomcat){
		$this->nomcat=$nomcat;
	}
	function setId($idcat){
		$this->idcat=$idcat;
	}
	
	
}

?>