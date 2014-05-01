<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SlugClass
 *
 * @author Magali
 */
class SlugClass {

    protected $slug;

    public function __construct($nom){
        $this->slug = $nom;
    }
        
    public function CreationSlug($nom) {
        $nom = utf8_decode($nom);
        $nom = strtolower(strtr($nom, utf8_decode('ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ()[]\'"~$&%*@ç!?;,:/\^¨€{}<>|+.- '), 'aaaaaaaaaaaaooooooooooooeeeeeeeecciiiiiiiiuuuuuuuuynn    --      c  ---    e       --'));
        $nom = str_replace(' ', '_', $nom);
        $nom = str_replace('---', '_', $nom);
        $nom = str_replace('--', '_', $nom);
        return $nom;
    }

}
