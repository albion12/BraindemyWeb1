<?php 
class Event
{
    private $title;
    private $content;
    private $startDate;
    private $endDate;
    private $image;

    public function __construct($title, $content, $image, $startDate, $endDate)
    {
        $this->title = $title;
        $this->content = $content;
        $this->image = $image;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getStartDate()
    {
        return $this->startDate;
    }

    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }
}
?>