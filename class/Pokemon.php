<?php

class Pokemon {

    private $_nom;                // variable du nom de pokemon
    private $_type;               // variable pour définir le type d'élément du pokemon
    private $_technique =[];      // tableau pour stocker les différentes techniques propre aux pokemon
    private $_pv;                 // variable des points de vie d'un pokemon
    private $_niveau;             // variable du niveau d'un pokemon
    private $_evolution;          // variable evolution d'un pokemon
    private $_defense;
    private $_attaque;
    

    public function __construct ($_nom,$_type,$_technique,$_pv,$_niveau,$_evolution)
    {

        $this->setNom( $_nom );
        $this->setType($_type);
        $this->addTechnique($_technique);
        $this->setPv($_pv);
        $this->setNiveau($_niveau);
        $this->setEvolution($_evolution);

        echo $this->getNom()." de type ".$this->getType()." avec comme techniques ".implode(",",$this->getTechnique())." qui a ".$this->getPv()." points de vie et qui est au niveau : ".$this->getNiveau()." </br>Evolution : ".$this->getEvolution();

    }

    public function combat(){

        $joueur=1;
        if ($joueur===1){

             if ($this->_pv<=0)
                $_pv = $this->getAttaque()-$this->getDefense();
                $joueur=2;

        }elseif ($joueur===2) {

            $_pv = $this->getAttaque()-$this->getDefense();
            $joueur=1;
            
        }else{

            return "erreur";

        }

    }

    public function setAttaque($_attaque){

        $this->_attaque=$_attaque;

    }

    public function getAttaque(){

        return $this->_attaque;

    }

    public function setDefense($_defense){

        $this->_defense=$_defense;

    }

    public function getDefense(){

        return $this->_defense;

    }

    public function addTechnique($_technique){
        if(is_array($_technique) )
            $this->_technique = array_merge($this->_technique, $_technique);
            else
            array_push($this->_technique, $_technique);
    }

    public function getTechnique(){

        return $this->_technique;

    }

    public function setType($_type){

        $this->_type=$_type;

    }

    public function getType(){

        return $this->_type;

    }

    public function setNom($_nom){

        $this->_nom=$_nom;

    }

    public function getNom(){

        return $this->_nom;

    }

    public function setPv($_pv){

        $this->_pv=$_pv;

    }

    public function getPv(){

        return $this->_pv;

    }

    public function setNiveau($_niveau){

        $this->_niveau=$_niveau;

    }

    public function getNiveau(){

        return $this->_niveau;

    }

    public function setEvolution($_evolution){

        $this->_evolution=$_evolution;

    }

    public function getEvolution(){

        return $this->_evolution;

    }

}