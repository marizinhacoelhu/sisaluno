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
   
  $retorno = $conexao->prepare('SELECT * FROM professor');
  $retorno->execute();

?>     
<div class="tabela">  
        <table>
  <div class="topos"></div>             
            <thead style="font-size: 40px; margin-left: 10px; margin-right:10px;">
              
                <tr>
                    <th style="margin-left: 10px; margin-right:10px;">ID</th>
                    <th style="font-size: 15px;">NOME</th>
                    <th style="font-size: 15px;">IDADE</th>
                    <th style="font-size: 15px;">ENDERECO</th>
                    <th style="font-size: 15px;">DATA NACIMENTOS</th>
                    <th style="font-size: 15px;">ESTATUS</th>
                </tr>
                
            </thead>
</div>
            <tbody>
                <tr>
                    <?php foreach($retorno->fetchall() as $value) { ?>
                        <tr>
                        <td style="font-size: 15px;"> <?php echo $value['id'] ?>   </td> 
                            <td style="font-size: 15px; margin-left: 30px;"> <?php echo $value['nome']?>  </td> 
                            <td style="font-size: 15px;"> <?php echo $value['idade']?> </td> 
                            <td style="font-size: 15px;"> <?php echo $value['endereco']?> </td>
                            <td style="font-size: 15px;"> <?php echo $value['datanascimento']?> </td>
                            <td style="font-size: 15px;"> <?php echo $value['estatus']?> </td>

                            <td>
                               <form method="POST" action="altprof.php">
                                        <input name="id" type="hidden" value="<?php echo $value['id'];?>"/>
                                        <button name="alterar"  type="submit"  style="height: 60px; width: 160px; border-color: transparent; margin-bottom: 50px">Alterar</button>
                                </form>

                             </td> 

                             <td>
                               <form method="GET" action="crudprof.php">
                                        <input name="id" type="hidden" value="<?php echo $value['id'];?>"/>
                                        <button name="excluir"  type="submit"  style="height: 60px; width: 160px; border-color: transparent; margin-bottom: 50px">Excluir</button>
                                </form>

                             </td> 


                       
                      </tr>
                    <?php  }  ?> 
                 </tr>
            </tbody>
        </table>
        </div>
        
<?php         
   echo "<button class='button button3' style='height: 70px; width: 200px;  border-color: transparent; margin-bottom: 50px'><a href='index.php'>voltar</a></button>";
?>