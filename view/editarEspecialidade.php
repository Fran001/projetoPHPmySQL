<?php include_once '../style/template.php';
      include_once '../control/EspecialidadeControl.php';
      $espControl = new EspecialidadeControl();
      
    $id = $_GET['id'];
    $especialidade = $espControl->buscar($id);
    if(isset($_POST['salvar'])){
        $espControl->editar();
        echo 'clicou no botão';
    }
?>
<div class="col-sm-5 col-sm-offset-3 jumbotron" > <!--//Alinhamento do código-->
        <h2>Editar Especialidade</h2>

        <form method="POST">
            <input type="hidden" name="id" value="<?php echo $especialidade->id?>">
            <label>Nome da Especialidade</label>
                
            <input class="form-control" name="nome_especialidade" required="" value="<?php echo $especialidade->nome;?>"> 
            <br>
            <input name="salvar" type="submit" value="Salvar" class="btn-info btn-sm">
        </form>
</div>


<?php include_once '../style/footer.php';?>