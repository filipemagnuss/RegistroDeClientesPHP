<?php

class Cliente{
    public ?String $nome;

    public ?String $cpf;

    public ?String $nomeDoPai;

    public ?String $nomeDaMae;

    public ?float $saldoDevedor;

    public function __construct(
        ?String $nome = '',
        ?String $cpf = '',
        ?String $nomeDaMae = '',
        ?String $nomeDoPai = '',
        ?float $saldoDevedor = 0

    )
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->nomeDaMae = $nomeDaMae;
        $this->nomeDoPai = $nomeDoPai;
        $this->saldoDevedor = $saldoDevedor;
    }

    public function criaConexaoComBanco()
    {
        $host = 'mysql';
        $user = 'root';
        $pass = '1q2w3e4r5t';
        $db = 'db';
        $port = '3306';

        $conn = new mysqli($host, $user, $pass, $db, $port);
        if($conn->connect_errno){

            echo "Falha: {$conn->connect_errno}";
            exit();
    
        }

        return $conn;
    }


    public function salvarCliente(){

        $conn = $this->criaConexaoComBanco();

        $sql = "INSERT INTO clientes (nome, cpf, nomeDaMae,  nomeDoPai, saldoDevedor)
        values ('{$this->nome}' , '{$this->cpf}' , '{$this->nomeDoPai}' , '{$this->nomeDaMae}' , '{$this->saldoDevedor}')";

        if($conn->query($sql) === TRUE) {

            echo "Registro salvo com sucesso";

        }
        else{

            echo "Erro ao salvar no banco de dados";

        }

    }

    public function listarCliente(){

        $conn = $this->criaConexaoComBanco();

        $resultado = mysqli_query($conn, 'select * from clientes');

        return $resultado;

    }
}