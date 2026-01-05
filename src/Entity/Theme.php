<?php

class Theme
{

    private $id;
    private $title;
    private $color;
    private $limit;
    private $createdAt;
    private $tags = [];
    private $notes = [];


    public function __construct($title, $color, $limit)
    {
        $this->title = $title;
        $this->color = $color;
        $this->limit = $limit;
    }

    public function getId(){return $this->id;}
    public function getTitle(){return $this->title;}
    public function getColor(){return $this->color;}
    public function getLimit(){return $this->limit;}
    public function getCreatedAt(){return $this->createdAt;}
    public function getTags(){return $this->tags;}
    public function getNotes(){return $this->notes;}

    public function setId($id){$this->id = $id;}
    public function setTitle($title){$this->title = $title;}
    public function setColor($color){$this->color = $color;}
    public function setLimit($limit){$this->limit = $limit;}
    public function setCreatedAt($date){ $this->createdAt = $date;}
    public function setTags($tags){$this->tags = $tags;}
    public function setNotes($notes){$this->notes = $notes;}
}