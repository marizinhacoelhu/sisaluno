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
  
  
<h2 style="margin-left: 700px; color:black; margin-left: -30px; font-size: 60px;">Cadastro de Professor:</h2> 
  <form method="GET" action="crudprof.php" style="height: 750px; width: 800px;  margin-left: 200px; margin-top: 20px; padding-top: -50px;display: flex; justify-content: center; align-items:center; flex-direction: column">
   
 
  <label for="">Nome</label> <br>
    <input type="text" name="nome" style= "width: 250px; height: 30px; border-radius: 20px; border-color: transparent;"> <br>

    <label for="">Idade</label><br>
    <input type="text" name="idade" style= "width: 250px; height: 30px; border-radius: 20px; border-color: transparent;"> <br>
    <label for="">data nascimento</label> <br>
    <input type="date" name="datanascimento" style= "width: 150px; height: 30px; border-radius: 20px; border-color: transparent;"> <br>
    <label for="">endereco</label> <br>
    <input type="text" name="endereco" style= "width: 250px; height: 30px; border-radius: 20px; border-color: transparent;"> <br>
    <br>
    <label for="">estatus</label>
    <input type="radio" name="estatus"  style= "width: 250px; height: 30px; border-radius: 20px; border-color: transparent;" value="1"> on <br>
    <input type="radio" name="estatus"   style= "width: 250px; height: 30px; border-radius: 20px; border-color: transparent;"value="2"> off <br>
    <br>
    <br>
    <input type="submit" name="cadastrar" value="cadastrar" style = "height: 40px; width: 100px;   border-color: transparent; margin-bottom: 40px"><a href="cadprof.php" style = "text-decoration: none; color: white; font-size: larger;">
    <button class="button" style = "height: 40px; width: 100px;  border-color: transparent; margin-bottom: 40px"><a href="cadprof.php" style = "text-decoration: none; color: white; font-size: larger;"><a href="cadprof.php" ><a href="index.php">voltar</a></button>
     

     
     </form>
</body>
</html>