<?php

require_once ("Conexao.php");


class ClienteDao{


    public function cadastrar(Cliente $c){


        $sql = "INSERT INTO tb_cliente(nome, cpf, email, data_nasc, celular, rua, numero, bairro, cidade, cep, estado)
                VALUES (:nome, :cpf, :email, :dtNasc, :numCel, :rua, :numCasa, :bairro, :cidade, :cep, :estado)
        ";

        
        $stmt = Conexao::getConn() -> prepare($sql);


        $stmt -> bindValue(":nome", $c -> getNome());
        $stmt -> bindValue(":cpf", $c -> getCpf());
        $stmt -> bindValue(":email", $c -> getEmail());
        $stmt -> bindValue(":dtNasc", $c -> getDtnasc());
        $stmt -> bindValue(":numCel", $c -> getNumcel());
        $stmt -> bindValue(":rua" ,$c -> getRua());
        $stmt -> bindValue(":numCasa", $c -> getNumcasa());
        $stmt -> bindValue(":bairro", $c -> getBairro());
        $stmt -> bindValue(":cidade", $c -> getCidade());
        $stmt -> bindValue(":cep", $c -> getCep());
        $stmt -> bindValue(":estado", $c -> getEstado());

        

        if($stmt -> execute()){

            return true;
            
        }else{
            
            return false;

        }

    }


    public function listar(){

        $sql = "SELECT * FROM tb_cliente";

        $stmt = Conexao::getConn() -> prepare($sql);

        $stmt -> execute();


        if($stmt->rowCount() > 0){

            $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            return $resultado;

        }else{

            return [];

        }

    }


    public function buscaDadosCliente($codCliente){

        $sql = "SELECT * FROM tb_cliente WHERE codCliente = :id";

        $stmt = Conexao::getConn() -> prepare($sql);

        $stmt -> bindValue(":id", $codCliente);

        $stmt -> execute();

        $dados = $stmt-> fetch(PDO::FETCH_ASSOC);

        return $dados;

    }


    public function editar(Cliente $c){


        $sql = "UPDATE tb_cliente SET nome = :nome, cpf = :cpf, email = :email, data_nasc = :dtNasc, celular = :numCel, rua = :rua, numero = :numCasa, bairro = :bairro, cidade = :cidade, cep = :cep, estado = :estado WHERE codCliente = :id";

        $stmt = Conexao::getConn()->prepare($sql);

        $stmt -> bindValue(":id", $c -> getCodcliente());
        $stmt -> bindValue(":nome", $c -> getNome());
        $stmt -> bindValue(":cpf", $c -> getCpf());
        $stmt -> bindValue(":email", $c -> getEmail());
        $stmt -> bindValue(":dtNasc", $c -> getDtnasc());
        $stmt -> bindValue(":numCel", $c -> getNumcel());
        $stmt -> bindValue(":rua" ,$c -> getRua());
        $stmt -> bindValue(":numCasa", $c -> getNumcasa());
        $stmt -> bindValue(":bairro", $c -> getBairro());
        $stmt -> bindValue(":cidade", $c -> getCidade());
        $stmt -> bindValue(":cep", $c -> getCep());
        $stmt -> bindValue(":estado", $c -> getEstado());


        if($stmt -> execute()){

            return true;
            
        }else{
            
            return false;

        }
        

    }


    public function deletar($codCliente){

        $sql = "DELETE FROM tb_cliente WHERE codCliente = ?";

        $stmt = Conexao::getConn()->prepare($sql);

        $stmt -> bindValue(1, $codCliente);

        
        $stmt -> execute();


    }


}


?>