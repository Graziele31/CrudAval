<?php

class ClassConexao {
    #Realizará a conexão com o banco de dados

    function conectaDB() {
        try {
            $Con = new PDO("mysql:host=localhost;dbname=crud", "root", "senac");
            return $Con;
        } catch (PDOException $Erro) {
            return $Erro->getMessage();
        }
    }

}
