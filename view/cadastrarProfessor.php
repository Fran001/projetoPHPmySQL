<?php 
include_once '../style/template.php';
include_once '../control/ProfessoresControl.php';

    $profControl = new ProfessoresControl();
            
        
    if (isset($_POST['salvar'])){
        $profControl->inserir();
        
    }

?>
<div class="col-sm-5 col-sm-offset-3 jumbotron" > <!--//Alinhamento do código-->
        <h2>Cadastro de Professores</h2>

        <form method="POST">
            <label>Número do Contribuinte</label>                
            <input class="form-control" name="contrib_professor" required=""> 
            <br>
            <label>Nome</label>                
            <input class="form-control" name="nome_professor" required=""> 
            <br>
            <div class="row">
                <div class="col-sm-6">
                    <label>Data de Nascimento</label>
                    <input class="form-control" name="nascimento_professor" type="date" required=""> 
                </div>    
                    
                <div class="col-sm-6">    
                    <label>Carga Horária</label>
                    <input class="form-control" name="cargaHoraria_professor" type="number" required="">
                </div>    
                   
            </div>
             <br>   
            <input name="salvar" type="submit" value="Salvar" class="btn-info btn-sm">
        </form>
</div>

<?php 
include_once '../style/footer.php';

?>