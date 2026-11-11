<?php

class Conexao{
    // IP do banco de dados
    private string $servidor = "localhost";
    // Nome do database
    private string $banco = "aula_pdo";
    // Usúario para fazer login no banco
    private string $usuario = "root";
    // Senha para fazer login no banco
    private string $senha = "";


    // Método de conexão 
    public function conectar(){
        // COnfiguração padrão de banco Mysql / MariaDB
        $dns = "mysql:host=$this->servidor;dbname=$this->banco;charset=utf8mb4";

        // Criando objeto da Classe PDO
        $conexao = new PDO($dns, $this->usuario, $this->senha, [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ]);

        // Retornar o Objeto da Conexão
        return $conexao;
    }
}

?>