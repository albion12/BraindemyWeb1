<?php 
class Contact{
    private $username;
    private $email;
    private $text;

    public function __construct($username,  $email, $text)
    {
        $this->username = $username;
        $this->email = $email;
        $this->text = $text;
    }

    public function getUsername(){
		return $this->username;
	}

	public function setUsername($username){
		$this->username = $username;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getText(){
		return $this->text;
	}

	public function setText($text){
		$this->text = $text;
	}
}
?>