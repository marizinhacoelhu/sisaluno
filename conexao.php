<?php 
//Criar as constantes com as credencias de acesso ao banco de dados
define('HOST', '127.0.0.1:3306');
define('USUARIO', 'root');
define('SENHA', '1213');
define('DBNAME', 'sisaluno');

//Criar a conexão com banco de dados usando o PDO e a porta do banco de dados
//Utilizar o Try/Catch para verificar a conexão.
try {

    $conexao = new pdo('mysql:host=' . HOST . ';dbname=' .
                                     DBNAME, USUARIO, SENHA);
} catch (PDOException $e) {
    echo "Erro: Conexão com banco de dados não foi realizada com sucesso.
     Erro gerado " . $e->getMessage();
}


?>