	<?PHP
	class Technicien{
		private $cin;
		private $nom;
		private $prenom;
		private $date;
		private $lieu;
		private $specialite;
		private $salaire;
		function __construct($cin,$nom,$prenom,$date,$lieu,$specialite,$salaire){
			$this->cin=$cin;
			$this->nom=$nom;
			$this->prenom=$prenom;
			$this->date=$date;
			$this->lieu=$lieu;
			$this->specialite=$specialite;
			$this->salaire=$salaire;
		}
		
		function getCin(){
			return $this->cin;
		}
		function getNom(){
			return $this->nom;
		}
		function getPrenom(){
			return $this->prenom;
		}
		function getDate(){
			return $this->date;
		}
		function getLieu(){
			return $this->lieu;
		}
		function getSpecialite(){
			return $this->specialite;
		}
		function getSalaire(){
			return $this->salaire;
		}

		function setNom($nom){
			$this->nom=$nom;
		}
		function setPrenom($prenom){
			$this->prenom;
		}
		function setDate($date){
			$this->date=$date;
		}
		function setLieu($lieu){
			$this->lieu=$lieu;
		}
		function setSpecialite($specialite){
			$this->specialite=$specialite;
		}
		function setSalaire($salaire){
			$this->salaire=$salaire;
		}
		
	}

	?>