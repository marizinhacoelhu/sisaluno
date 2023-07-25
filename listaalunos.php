<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<?php 
/*
 * Melhor prática usando Prepared Statements
 * 
 */
  require_once('conexao.php');
   
  $retorno = $conexao->prepare('SELECT * FROM aluno');
  $retorno->execute();

?>     
<div class="tabela">  
        <table>
  <div class="topos"></div>             
            <thead style="font-size: 40px; margin-left: 10px; margin-right:10px;">
              
                <tr>
                    <th style="margin-left: 10px; margin-right:10px;">ID</th>
                    <th>NOME</th>
                    <th>IDADE</th>
                </tr>
                
            </thead>
</div>
            <tbody>
                <tr>
                    <?php foreach($retorno->fetchall() as $value) { ?>
                        <tr>
                            <td style="font-size: 20px;"> <?php echo $value['id'] ?>   </td> 
                            <td style="font-size: 20px; margin-left: 30px;"> <?php echo $value['nome']?>  </td> 
                            <td style="font-size: 20px;"> <?php echo $value['idade']?> </td> 

                            <td>
                               <form method="POST" action="altaluno.php">
                                        <input name="id" type="hidden" value="<?php echo $value['id'];?>"/>
                                        <button name="alterar"  type="submit"  style="height: 60px; width: 160px; background-color: gray; border-radius: 20px; border-color: transparent; margin-bottom: 50px"">Alterar</button>
                                </form>

                             </td> 

                             <td>
                               <form method="GET" action="crudaluno.php">
                                        <input name="id" type="hidden" value="<?php echo $value['id'];?>"/>
                                        <button name="excluir"  type="submit"  style="height: 60px; width: 160px; background-color: gray; border-radius: 20px; border-color: transparent; margin-bottom: 50px"">Excluir</button>
                                </form>

                             </td> 


                       
                      </tr>
                    <?php  }  ?> 
                 </tr>
            </tbody>
        </table>
        </div>
        <div class="bvoltar"></div>
<?php         
   echo "<button class='button button3' style='height: 70px; width: 200px; background-color: gray; border-radius: 20px; border-color: transparent; margin-bottom: 50px'><a href='index.html'>voltar</a></button>";
?>
</div>
</body>
</html>
