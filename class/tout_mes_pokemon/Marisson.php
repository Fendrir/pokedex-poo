<?php

class Marisson extends Pokemon {

    public function __construct($_nom,$_type,$_technique,$_pv,$_niveau,$_evolution)
    {

        $this->_nom = setNom($_nom);
        $this->_type = setType($_type);
        $this->_technique=array_push($_technique,"Fouet Lianes","Canon Graine");
        $this->_pv = setPv($_pv);
        $this->_niveau = setNiveau($_niveau);
        $this->_evolution = setEvolution($_evolution);

    }

}

// public function __construct($_nom,$_type,$_technique,$_pv,$_niveau,$_evolution)
// {

//     $this->_nom = setNom($_nom);
//     $this->_type = setType($_type);
//     $this->_technique = $_technique;
//     $this->_pv = setPv($_pv);
//     $this->_niveau = setNiveau($_niveau);
//     $this->_evolution = setEvolution($_evolution);

// }