<?php 
class Training{
    private $title;
    private $content;
    private $image;

    public function __construct($title,  $content, $image)
    {
        $this->title = $title;
        $this->content = $content;
        $this->image = $image;
    }

    public function getTitle(){
		return $this->title;
	}

	public function setTitle($title){
		$this->title = $title;
	}

	public function getContent(){
		return $this->content;
	}

	public function setContent($content){
		$this->content = $content;
	}

	public function getImage(){
		return $this->image;
	}

	public function setImage($image){
		$this->image = $image;
	}

}
?>