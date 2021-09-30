<?php
class Livre{
    private $id;
    private $titre;
    private $auteur;
    private $resume;
    private $nbPages;
    private $image;

    public function __construct($id,$titre,$auteur,$resume,$nbPages,$image){
        $this->id = $id;
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->resume = $resume;
        $this->nbPages = $nbPages;
        $this->image = $image;
    }

    public function getId(){return $this->id;}
    public function setId($id){$this->id = $id;}

    public function getTitre(){return $this->titre;}
    public function setTitre($titre){$this->titre = $titre;}

    public function getAuteur(){return $this->auteur;}
    public function setAuteur($auteur){$this->auteur = $auteur;}

    public function getResume(){return $this->resume;}
    public function setResume($resume){$this->resume = $resume;}

    public function getNbPages(){return $this->nbPages;}
    public function setNbPages($nbPages){$this->nbPages = $nbPages;}

    public function getImage(){return $this->image;}
    public function setImage($image){$this->image = $image;}
}


