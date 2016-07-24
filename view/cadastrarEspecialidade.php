<?php include_once '../style/template.php';
      include_once '../control/EspecialidadeControl.php';
      $espControl = new EspecialidadeControl();
      
      if (isset($_POST['salvar'])){
       $espControl->inserir();
       
        
      }
?>
<div class="col-sm-5 col-sm-offset-3 jumbotron" > <!--//Alinhamento do código-->
        <h2>Nova Especialidade</h2>

        <form method="POST">
            <label>Nome da Especialidade</label>
                
            <input class="form-control" name="nome_especialidade" required=""> 
            <br>
            <input name="salvar" type="submit" value="Salvar" class="btn-info btn-sm">
        </form>
</div>


<?php include_once '../style/footer.php';?>