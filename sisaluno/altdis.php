<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    require_once('conexao.php');

   $id = $_POST['id'];

   ##sql para selecionar apens um aluno
   $sql = "SELECT * FROM disciplina where id= :id";
   
   # junta o sql a conexao do banco
   $retorno = $conexao->prepare($sql);

   ##diz o paramentro e o tipo  do paramentros
   $retorno->bindParam(':id',$id, PDO::PARAM_INT);

   #executa a estrutura no banco
   $retorno->execute();

  #transforma o retorno em array
   $array_retorno=$retorno->fetch();
   
   ##armazena retorno em variaveis
   $nomedisciplina  = $array_retorno['nomedisciplina'];
   $ch = $array_retorno['ch'];
   $id = $array_retorno['id'];
   $semestre = $array_retorno['semestre'];
   $idprofessor = $array_retorno['idprofessor'];


?>

<form method="POST" action="cruddis.php" style ='height: 450px; width: 800px; background-color: rgb(227, 181, 196); border-radius: 15px; margin-left: 200px; margin-top: 20px; padding-top: px;display: flex; justify-content: center; align-items:center; flex-direction: column'>

<input type="text" name="nomedisciplina" style= " display: flex; width: 700px; height: 30px; border-radius: 20px; border-color: transparent; border-top: 20px; border-bottom: 20px; align-content: space-around;" id="" value=<?php echo $nomedisciplina?>  > <br>
                                              
      <input type="text" name="ch" style= "width: 700px; height: 30px; border-radius: 20px; border-color: transparent;" id="" value=<?php echo $ch ?> > <br>
  
      <input type="date" name="semestre" style= "width: 700px; height: 30px; border-radius: 20px; border-color: transparent;" id="" value=<?php echo $semestre ?> > <br>

      <input type="text" name="idprofessor"  style= "width: 700px; height: 30px; border-radius: 20px; border-color: transparent;" id="" value=<?php echo $idprofessor ?> > <br>

      <br>


      <input type="submit" name="update" style = "height: 40px; width: 100px; background-color: gray; border-radius: 20px; border-color: transparent; margin-bottom: 40px" style = "text-decoration: none; color: white; font-size: larger;" value="Alterar">
</form>
</body>
</html>