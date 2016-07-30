<?php
include_once '../style/template.php';
include_once '../control/EspecialidadeControl.php';
$especialidadeControl = new EspecialidadeControl();
        
        if(isset($_GET['id'])){
            $especialidadeControl->deletar();
            
        }
       

//print_r($especialidadeControl->listarTodos());//usado para debugar o código;

//LISTAR OBJETOS
?>
<div class="col-sm-10 col-sm-offset-1">
<h1>Especialidades</h1>
<a href="cadastrarEspecialidade.php" class="pull-right btn-primary btn-xs">Cadastrar Especialidades</a>
<table class="jumbotron table table-striped">
    <tr>
        <th>id</th>
        <th>Nome</th>
    <!--Aumentando o tamanho da coluna peincipal para receber listar/deletar-->
        <th></th>  
       
    </tr>
    <?php
    foreach ($especialidadeControl->listarTodos()as $especialidade){
    ?>
    
    <tr>
        <td><?php echo $especialidade->id;?></td>
        <td><?php echo $especialidade->nome;?></td>
        <!--Adicionando os campos editar|deletar-->
         <td>
            <div class="pull-right">
                <?php echo "<a href='editarEspecialidade.php?acao=editar&id=".$especialidade->id."'>Editar</a> "?>  
                 
                <?php echo "<a href='listarEspecialidades.php?acao=deletar&id=".$especialidade->id."'>Deletar</a> "?>
                
            </div>
        </td>
    </tr>
        
    <?php } ?>
</table>
<span> <?php echo $especialidadeControl->countRegistos(); ?> Cadastros</span>
</div>
<?php include_once '../style/footer.php';
 