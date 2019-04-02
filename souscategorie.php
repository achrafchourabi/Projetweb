<?PHP
class SousCategorie{
	private $idsouscat;
	private $nomsouscat;
	private $numcat;
	
	function __construct($idsouscat,$nomsouscat,$numcat){
		$this->idsouscat=$idsouscat;
		$this->nomsouscat=$nomsouscat;
		$this->numcat=$numcat;
		
	}
	
	function getidsouscat(){
		return $this->idsouscat;
	}
	function getnomsouscat(){
		return $this->nomsouscat;
	}
	function getcat(){
		return $this->numcat;
	}
	

	function setidsouscat($idsouscat){
		$this->idsouscat=$idsouscat;
	}
	function setnomsouscat($nomsouscat){
		$this->nomsouscat=$nomsouscat;
	}
	function setcat($categorie){
		$this->numcat=$numcat;
	}
	
	
}

?>