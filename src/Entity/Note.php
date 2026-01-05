<?php

class Note
{

    private $id;
    private $title;
    private $importance;
    private $content;
    private $createdAt;
    // private $themeId;


    public function __construct($title, $importance, $content)
    {
        $this->title = $title;
        $this->importance = $importance;
        $this->content = $content;
        // $this->themeId = $themeId;
    }


    public function getId(){return $this->id;}
    public function getTitle(){return $this->title;}
    public function getImportance(){return $this->importance;}
    public function getContent(){return $this->content;}
    // public function getThemeId(){return $this->themeId;}

    public function setId($id){$this->id = $id;}
    public function setTitle($title){$this->title = $title;}
    public function setImportance($importance){$this->importance = $importance;}
    public function setContent($content){$this->content = $content;}
    public function setCreatedAt($date){ $this->createdAt = $date;}

}
