<?php
include_once '../model/Professores.php';
class ProfessoresControl {
    public function inserir(){
      $nome = $_POST['nome_professor'];
      $numero_contribuinte = $_POST['contrib_professor'];
      $nascimento = $_POST['nascimento_professor'];
      $carga_horaria = $_POST['cargaHoraria_professor'];
      $professor = new professores();
      $professor->setNumero_contribuinte($numero_contribuinte);
      $professor->setNome($nome);
      $professor->setNascimento($nascimento);
      $professor->setCarga_horaria($carga_horaria);
      $professor->salvar();
    }
    public function listarTodos(){
      $professor = new professores();   
      
        
    }
    public function buscar(){
        
        
    }
    public function editar(){
        
        
    }
    public function deletar(){
        
        
    }
}
