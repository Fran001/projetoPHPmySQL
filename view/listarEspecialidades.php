<?php
include_once '../style/template.php';
include_once '../control/EspecialidadeControl.php';
$especialidadeControl = new EspecialidadeControl()
       

//print_r($especialidadeControl->listarTodos());//usado para debugar o código;

//LISTAR OBJETOS
?>
<div class="col-sm-10 col-sm-offset-1">
<h1>Especialidades</h1>
<a href="" class="pull-right btn-primary btn-xs">Cadastrar Especialidades</a>
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
                <a href="">Editar</a>  
                | 
                <a href="">Deletar</a>
            </div>
        </td>
    </tr>
    
    <?php } ?>
</table>
<span> <?php echo $especialidadeControl->countRegistos(); ?> Cadastros</span>
</div>
<?php include_once '../style/footer.php';
 