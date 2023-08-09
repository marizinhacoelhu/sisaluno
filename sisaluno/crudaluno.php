<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .box{
            
            padding: 10px;
            
            width: 500px;
            height: 400px;
        }
    </style>
</head>
<body>
    <div class="box">

<?php
##permite acesso as variaves dentro do aquivo conexao
require_once('conexao.php');



##cadastrar
if(isset($_GET['cadastrar'])){
        ##dados recebidos pelo metodo GET
        $nome = $_GET["nome"];
        $idade = $_GET["idade"];
        $datanascimento = $_GET['datanascimento'];
        $endereco = $_GET['endereco'];
        $matricula = $_GET['matricula'];

        ##codigo SQL
        $sql = "INSERT INTO aluno(nome,idade,datanascimento,endereco,matricula) 
        VALUES('$nome','$idade', '$datanascimento', '$endereco','$matricula')";

        ##junta o codigo sql a conexao do banco
        $sqlcombanco = $conexao->prepare($sql);

        ##executa o sql no banco de dados
        if($sqlcombanco->execute())
            {
                echo " <strong>OK!</strong> o aluno
                $nome foi Incluido com sucesso!!!";
                 
                echo " <button class='button' style='height: 60px; width: 160px; background-color: gray; border-radius: 20px; border-color: transparent; margin-bottom: 50px'><a href='index.php'>voltar</a></button>";
            }
        }
#######alterar
if(isset($_POST['update'])){

    ##dados recebidos pelo metodo POST
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $datanascimento = $_POST['datanascimento'];
    $endereco = $_POST['endereco'];
    $matricula = $_POST['matricula'];
      ##codigo sql
    $sql = "UPDATE  aluno SET nome= :nome, idade= :idade,   datanascimento= :datanascimento,  endereco= :endereco,   matricula= :matricula WHERE id= :id  ";
   
    ##junta o codigo sql a conexao do banco
    $stmt = $conexao->prepare($sql);

    ##diz o paramentro e o tipo  do paramentros
    $stmt->bindParam(':id',$id, PDO::PARAM_INT);
    $stmt->bindParam(':nome',$nome, PDO::PARAM_STR);
    $stmt->bindParam(':idade',$idade, PDO::PARAM_INT);
    $stmt->bindParam(':datanascimento',$datanascimento, PDO::PARAM_INT);
    $stmt->bindParam(':endereco',$endereco, PDO::PARAM_INT);
    $stmt->bindParam(':matricula',$matricula, PDO::PARAM_INT);
    $stmt->execute();
 


    if($stmt->execute())
        {
            echo " <strong>OK!</strong> o aluno
             $nome foi Alterado com sucesso!!!"; 

            echo " <button class='button' style='height: 70px; width: 200px; background-color: gray; border-radius: 20px; border-color: transparent; margin-bottom: 50px'><a href='index.php'>voltar</a></button>";
        }

}        


##Excluir
if(isset($_GET['excluir'])){
    $id = $_GET['id'];
    $sql ="DELETE FROM `aluno` WHERE id={$id}";
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    if($stmt->execute())
        {
            echo " <strong>OK!</strong> o aluno
             $id foi excluido!!!"; 

            echo " <button class='button'style='height: 70px; width: 200px; background-color: gray; border-radius: 20px; border-color: transparent; margin-bottom: 50px'><a href='listaalunos.php'>voltar</a></button>";
        }

}

        
?>


</div>
</body>
</html>