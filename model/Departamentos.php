<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Departamentos
 *
 * @author Ciclonne
 */
class Departamentos {
    private $id;
    private $nome;
    private $numero;
    private $escritorio_id;
    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getNumero() {
        return $this->numero;
    }

    function getEscritorio_id() {
        return $this->escritorio_id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setEscritorio_id($escritorio_id) {
        $this->escritorio_id = $escritorio_id;
    }


}
