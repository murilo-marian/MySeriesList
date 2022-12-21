<?php

include_once "./conf.inc.php";
function pesquisaPorEmail($email)
{
    try {
        $conexao = new PDO(MYSQL_DSN, DB_USER, DB_PASSWORD);

        //query
        $query = 'SELECT * FROM usuario WHERE email = :email';

        //preparar consulta
        $stmt = $conexao->prepare($query);

        $stmt->bindValue(':email', $email);
        //executar
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    } catch (PDOException $e) {
        print('Erro  ao conectar como banco  de dados... <br>' . $e->getMessage());
        die();
    }
}
