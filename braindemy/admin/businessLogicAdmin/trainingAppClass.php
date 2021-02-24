<?php 
class TrainingApp{
    private $name;
    private $email;
    private $trainingid;

    public function __construct($name,  $email, $trainingid)
    {
        $this->name = $name;
        $this->email = $email;
        $this->trainingid = $trainingid;
    }

    public function getName(){
		return $this->name;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getTrainingid(){
		return $this->trainingid;
	}

	public function setTrainingid($trainingid){
		$this->trainingid = $trainingid;
	}


}
?>