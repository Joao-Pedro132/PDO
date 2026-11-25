<?php
require_once 'Conexao.php';

class ProdutoDAO{
    // Criar um atributo private da conexao
    private $conexao;

    // No método construtor fazemos a conexão com o banco
    public function __construct(){
        $banco = new Conexao();
        $this->conexao = $banco->conectar();
    }

    //  Método de listar todos os dados do banco
    public function listar(){
        // Select no banco de dados
        $sql = "SELECT * FROM produtos";

        // Chamando um método da classe PDO
        $comando = $this->conexao->query($sql);

        // Retorna a listagem completa em formato de array
        return $comando->fetchALL();
    }

    // Método de cadastro no banco de dados
    public function cadastrar($nome, $preco, $quantidade){
        // Cadastrar o comando insert no banco
        $sql = "INSERT INTO produtos (nome, preco, quantidade) VALUES (:nome, :preco, :quantidade)";
        
        // prepara a execução do comando SQL
        $comandoInsert = $this->conexao->prepare($sql);

        // Executa o comando passando os valores
        $comandoInsert->execute(["nome" => $nome, "preco" => $preco, "quantidade" => $quantidade]);
    }

    // Método para listar um item pelo id
    public function buscarPorId($id){
        $sql = "SELECT * FROM produtos WHERE id = :id";

        $comandoSelect = $this->conexao->prepare($sql);

        $comandoSelect->execute(["id" => $id]);

        return $comandoSelect->fetch();
    }

    // Método de atualizar produto 
    public function atualizarProduto($id, $nome, $preco, $quantidade){
        $sql = "UPDATE produtos SET nome = :nome, preco = :preco, quantidade = :quantidade WHERE id = :id";

        $comandoUpdate = $this->conexao->prepare($sql);

        $comandoUpdate->execute(["nome" => $nome, "preco" => $preco, "quantidade" => $quantidade, "id" => $id]);
    }

    // Método de excluir produto
    public function excluirPorId($id){
        $sql = "DELETE FROM produtos WHERE id = :id";

        $comandoDelete = $this->conexao->prepare($sql);

        $comandoDelete->execute(["id" => $id]);
    }
}
?>