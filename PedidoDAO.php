<?php
require_once 'Conexao.php';

class PedidoDAO{
    // Criar um atributo private da conexao
    private $conexao;

    // No método construtor fazemos a conexão com o banco
    public function __construct(){
        $banco = new Conexao();
        $this->conexao = $banco->conectar();
    }

    // Método de cadastro no banco de dados
    public function cadastrar($idProduto, $quantidade){
        // Cadastrar o comando insert no banco
        $sql = "INSERT INTO pedidos (produto_id, quantidade) VALUES (:idProduto, :quantidade)";
        
        // prepara a execução do comando SQL
        $comandoInsert = $this->conexao->prepare($sql);

        // Executa o comando passando os valores
        $comandoInsert->execute(["idProduto" => $idProduto, "quantidade" => $quantidade]);
    }

}
?>