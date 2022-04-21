<?php


class Cliente{

    private $codCliente, $nome, $cpf, $email, $dtNasc, $numCel, $rua, $numCasa, $bairro, $cep, $cidade, $estado;

    

    public function getCodcliente(){
        return $this -> codCliente;
    }

    public function setCodcliente($codCliente){
        $this -> codCliente = $codCliente;
    }

    public function getNome(){
        return $this -> nome;
    }

    public function setNome($nome){
        $this -> nome = $nome;
    }
    
    public function getCpf(){
        return $this -> cpf;
    }

    public function setCpf($cpf){
        $this -> cpf = $cpf;
    }
    
    public function getEmail(){
        return $this -> email;
    }

    public function setEmail($email){
        $this -> email = $email;
    }
  
    public function getDtnasc(){
        return $this -> dtNasc;
    }

    public function setDtnasc($dtNasc){
        $this -> dtNasc = $dtNasc;
    }

    public function getNumcel(){
        return $this -> numCel;
    }

    public function setNumcel($numCel){
        $this -> numCel = $numCel;
    }

    public function getRua(){
        return $this -> rua;
    }

    public function setRua($rua){
        $this -> rua = $rua;
    }

    public function getNumcasa(){
        return $this -> numCasa;
    }

    public function setNumcasa($numCasa){
        $this -> numCasa = $numCasa;
    }

    public function getBairro(){
        return $this -> bairro;
    }

    public function setBairro($bairro){
        $this -> bairro = $bairro;
    }

    public function getCep(){
        return $this -> cep;
    }

    public function setCep($cep){
        $this -> cep = $cep;
    }

    public function getCidade(){
        return $this -> cidade;
    }

    public function setCidade($cidade){
        $this -> cidade = $cidade;
    }

    public function getEstado(){
        return $this -> estado;
    }

    public function setEstado($estado){
        $this -> estado = $estado;
    }


}


?>