<?PHP 
class Evaluation{
	private $id;
	private $note;
	private $type;
	function __construct($id,$type,$note){
		$this->id=$id;
		$this->note=$note;
		$this->type=$type;	
	}
	function getId(){
		return $this->id;
	}
	function getNote(){
		return $this->note;
	}
	function getType(){
		return $this->type;
	}

	function setNote($note){
		$this->note=$note;
	}
	function setType($type){
		$this->type=$type;
	}
}
?>