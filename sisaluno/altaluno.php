<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
    require_once('conexao.php');

   $id = $_POST['id'];

   ##sql para selecionar apens um aluno
   $sql = "SELECT * FROM aluno where id= :id";
   
   # junta o sql a conexao do banco
   $retorno = $conexao->prepare($sql);

   ##diz o paramentro e o tipo  do paramentros
   $retorno->bindParam(':id',$id, PDO::PARAM_INT);

   #executa a estrutura no banco
   $retorno->execute();

  #transforma o retorno em array
   $array_retorno=$retorno->fetch();
   
   ##armazena retorno em variaveis
   $nome = $array_retorno['nome'];
   $idade = $array_retorno['idade'];
   $id = $array_retorno['id'];
   $endereco = $array_retorno['endereco'];
   $matricula = $array_retorno['matricula'];



?>

  <form method="POST" action="crudaluno.php" style ='height: 450px; width: 800px;  margin-left: 200px; margin-top: 20px; padding-top: px;display: flex; justify-content: center; align-items:center; flex-direction: column'>

  <input type="text" name="nome" style= " display: flex; width: 700px; height: 30px;  border-color: transparent; border-top: 20px; border-bottom: 20px; align-content: space-around;" id="" value=<?php echo $nome?> > <br>
                                                
  <input type="text" name="idade" style= "width: 700px; height: 30px;  border-color: transparent;" id="" value=<?php echo $idade ?> > <br>
  
  <input type="date" name="datanascimento" style= "width: 700px; height: 30px;  border-color: transparent;" id="" value=<?php echo $id ?> > <br>

  <input type="text" name="endereco"  style= "width: 700px; height: 30px;  border-color: transparent;" id="" value=<?php echo $endereco ?> > <br>


  <input type="text" name="matricula"  style= "width: 700px; height: 30px;  border-color: transparent;" id="" value=<?php echo $matricula ?> ><br>
        <input type="submit" name="update" style = "height: 40px; width: 100px;  border-color: transparent; margin-bottom: 40px" style = "text-decoration: none; color: white; font-size: larger;" value="Alterar">
  </form>
</body>
</html>