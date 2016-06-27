<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Estudantes
 *
 * @author Ciclonne
 */
class Estudantes {
  private $id;
  private $numero_contribuinte;
  private $nome;
  private $nascimento;
  private $plano_de_cursos_id;
  private $departamentos_id;
  private $estudante_supervisor_id;
  
  function getId() {
      return $this->id;
  }

  function getNumero_contribuinte() {
      return $this->numero_contribuinte;
  }

  function getNome() {
      return $this->nome;
  }

  function getNascimento() {
      return $this->nascimento;
  }

  function getPlano_de_cursos_id() {
      return $this->plano_de_cursos_id;
  }

  function getDepartamentos_id() {
      return $this->departamentos_id;
  }

  function getEstudante_supervisor_id() {
      return $this->estudante_supervisor_id;
  }

  function setId($id) {
      $this->id = $id;
  }

  function setNumero_contribuinte($numero_contribuinte) {
      $this->numero_contribuinte = $numero_contribuinte;
  }

  function setNome($nome) {
      $this->nome = $nome;
  }

  function setNascimento($nascimento) {
      $this->nascimento = $nascimento;
  }

  function setPlano_de_cursos_id($plano_de_cursos_id) {
      $this->plano_de_cursos_id = $plano_de_cursos_id;
  }

  function setDepartamentos_id($departamentos_id) {
      $this->departamentos_id = $departamentos_id;
  }

  function setEstudante_supervisor_id($estudante_supervisor_id) {
      $this->estudante_supervisor_id = $estudante_supervisor_id;
  }


}
