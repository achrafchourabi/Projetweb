<?PHP
class Employe{
	private $CIN;
	private $nom;
	private $prenom;
	private $sexe;
	private $dateNaissance;
	private $nomSociete;
	private $adresse;
	private $ville;
	private $codePostal;
	private $pays;
	private $tel;
	private $fax;
	private $email;
	private $mdp;
	function __construct($CIN,$nom,$prenom,$sexe,$dateNaissance,$nomSociete,$adresse,$ville,$codePostal,$pays,$tel,$fax,$email,$mdp){
		$this->CIN=$CIN;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->sexe=$sexe;
		$this->dateNaissance=$dateNaissance;
		$this->nomSociete=$nomSociete;
		$this->adresse=$adresse;
		$this->ville=$ville;
		$this->codePostal=$codePostal;
		$this->pays=$pays;
		$this->tel=$tel;
		$this->fax=$fax;
		$this->email=$email;
		$this->mdp=$mdp;
	}
	
	function getCIN(){
		return $this->CIN;
	}
	function getNom(){
		return $this->nom;
	}
	function getPrenom(){
		return $this->prenom;
	}
	function getSexe(){
		return $this->sexe;
	}
	function getDateNaissance(){
		return $this->$dateNaissance;
	}
	function getNomSociete(){
		return $this->$nomSociete;
	}
	function getAdresse(){
		return $this->$adresse;
	}
	function getVille(){
		return $this->$ville;
	}
	function getCodePostal(){
		return $this->$codePostal;
	}
	function getPays(){
		return $this->$pays;
	}
	function getTel(){
		return $this->$tel;
	}
	function getFax(){
		return $this->$fax;
	}
	function getEmail(){
		return $this->$email;
	}
	function getMdp(){
		return $this->$mdp;
	}

    function setCin(){
		return $this->CIN;
	}
	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrenom($prenom){
		$this->prenom;
	}
	function setSexe(){
		return $this->sexe;
	}
	function setDateNaissance(){
		return $this->$dateNaissance;
	}
	function setNomSociete(){
		return $this->$nomSociete;
	}
	function setAdresse(){
		return $this->$adresse;
	}
	function setVille(){
		return $this->$ville;
	}
	function setCodePostal(){
		return $this->$codePostal;
	}
	function setPays(){
		return $this->$pays;
	}
	function setTel(){
		return $this->$tel;
	}
	function setFax(){
		return $this->$fax;
	}
	function setEmail(){
		return $this->$email;
	}
	function setMdp(){
		return $this->$mdp;
	}
	
}

?>