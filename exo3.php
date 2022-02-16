<?php

class Guerrier{
    public $niveau;
    public $nom;
    public $age;
    public $force;
    public $arme;

    
    public function __construct($NI, $N, $A,$AR,$F)
    {
        $this->niveau = $NI;
        $this->nom = $N;
        $this->age = $A;
        $this ->force = $F;
        $this ->arme = $AR;
    }

   
     public function getniveau(){
        return $this->niveau =1;
    }

    public function getnom(){
        return $this->nom;
    }

    
    public function getAge(){
        return $this->age;
    }
    public function getForce(){
        return $this->force =100;
    }
    


    public function setniveau($Newniveau){
        $this->niveau = $Newniveau;
    }

    public function setnom($Newnom){
        $this->nom = $Newnom;
    }

    
    public function setAdresseMail($NewAge){
        $this->age = $NewAge;
    }
    public function setForce($NewForce){
        $this->force = $NewForce;
    }

  
    public function getInfo(){
        return "niveau : " . $this->niveau.'<br>'. "nom : " .$this->nom.'<br>'. "age : " .$this->age . "<br>".$this->force. "<br>";}

  }