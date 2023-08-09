<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="tudo" style="background-color: rgb(227, 181, 196);">
<?php 

/*
 * Melhor prática usando Prepared Statements
 * 
 */
  require_once('conexao.php');
   
  $retorno = $conexao->prepare('SELECT * FROM disciplina');
  $retorno->execute();

?>     
<div class="tabela">  
        <table>
  <div class="topos"></div>             
            <thead style="font-size: 40px; margin-left: 10px; margin-right:10px;">
              
                <tr>
                    <th style="font-size: 15px;">ID</th>
                    <th style="font-size: 15px;">NOMEDISCIPLINA</th>
                    <th style="font-size: 15px;">CH</th>
                    <th style="font-size: 15px;">SEMESTRE</th>
                    <th style="font-size: 15px;">IDPROFESSOR</th>
                </tr>
                
            </thead>
</div>
            <tbody>
                <tr>
                    <?php foreach($retorno->fetchall() as $value) { ?>
                        <tr>
                            <td style="font-size: 15px;"> <?php echo $value['id'] ?>   </td> 
                            <td style="font-size: 15px; margin-left: 30px;"> <?php echo $value['nomedisciplina']?>  </td> 
                            <td style="font-size: 15px;"> <?php echo $value['ch']?> </td> 
                            <td style="font-size: 15px;"> <?php echo $value['semestre']?> </td>
                            <td style="font-size: 15px;"> <?php echo $value['idprofessor']?> </td>

                            <td>
                               <form method="POST" action="altdis.php">
                                        <input name="id" type="hidden" value="<?php echo $value['id'];?>"/>
                                        <button name="alterar"  type="submit"  style="height: 60px; width: 160px; background-color: gray; border-radius: 20px; border-color: transparent; margin-bottom: 50px">Alterar</button>
                                </form>

                             </td> 

                             <td>
                               <form method="GET" action="cruddis.php">
                                        <input name="id" type="hidden" value="<?php echo $value['id'];?>"/>
                                        <button name="excluir"  type="submit"  style="height: 60px; width: 160px; background-color: gray; border-radius: 20px; border-color: transparent; margin-bottom: 50px">Excluir</button>
                                </form>

                             </td> 


                       
                      </tr>
                    <?php  }  ?> 
                 </tr>
            </tbody>
        </table>
        </div>
        <div class="voltar"></div>
<?php         
   echo "<button class='button button3' style='height: 70px; width: 200px; background-color: gray; border-radius: 20px; border-color: transparent; margin-bottom: 50px'><a href='index.php'>voltar</a></button>";
?>
</div>
</div>
</body>
</html>