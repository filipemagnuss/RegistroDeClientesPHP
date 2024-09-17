<?php

require_once("../model/cliente.php");

class ClienteController{

    public function salvarCliente(){

        $pagina = require_once("../view/criar.php");
        
        if($_SERVER['REQUEST_METHOD'] === 'POST'){

            $cliente = new Cliente(
            
                $_POST['nome'],
                $_POST['cpf'],
                $_POST['nomeDoPai'],
                $_POST['nomeDaMae'],
                $_POST['saldoDevedor']
            ); 
            $cliente->salvarCliente();
    
        }

        return $pagina;
        
    }

    public function listarCliente(){

        $cliente = new Cliente();
        $listaDeClientes = $cliente->listarCliente();

        $pagina = require_once("../view/listar.php");

        return $pagina;
    }
}

$metodo = "listarCliente";
if(isset($_GET['metodo']))
{
    $metodo = $_GET['metodo'];
}

$clienteController = new ClienteController();
$clienteController->$metodo(); 