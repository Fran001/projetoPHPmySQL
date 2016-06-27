<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Projetos
 *
 * @author Ciclonne
 */
class Projetos {
    private $id;
    private $numero;
    private $data_inicio;
    private $data_final;
    private $valor_orcamento;
    private $descricao;
    private $orgao_financiador_id;
    private $professor_id;
    private $professor_gerente_id;
    
    function getId() {
        return $this->id;
    }

    function getNumero() {
        return $this->numero;
    }

    function getData_inicio() {
        return $this->data_inicio;
    }

    function getData_final() {
        return $this->data_final;
    }

    function getValor_orcamento() {
        return $this->valor_orcamento;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getOrgao_financiador_id() {
        return $this->orgao_financiador_id;
    }

    function getProfessor_id() {
        return $this->professor_id;
    }

    function getProfessor_gerente_id() {
        return $this->professor_gerente_id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setData_inicio($data_inicio) {
        $this->data_inicio = $data_inicio;
    }

    function setData_final($data_final) {
        $this->data_final = $data_final;
    }

    function setValor_orcamento($valor_orcamento) {
        $this->valor_orcamento = $valor_orcamento;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setOrgao_financiador_id($orgao_financiador_id) {
        $this->orgao_financiador_id = $orgao_financiador_id;
    }

    function setProfessor_id($professor_id) {
        $this->professor_id = $professor_id;
    }

    function setProfessor_gerente_id($professor_gerente_id) {
        $this->professor_gerente_id = $professor_gerente_id;
    }


}
