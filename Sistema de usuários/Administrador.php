<?php

require_once 'Cliente.php';

class Administrador extends Cliente
{

    public $loginAdmin;

    public function __construct($nome, $email, $senha, $cpf, $loginAdmin)
    {
        parent::__construct($nome, $email, $senha, $cpf);
        $this->loginAdmin = $loginAdmin;
    }



    public function cadastrarProdutos()
    {
        echo "<h2>Administrador</h2>";
        echo "Produto cadastrado com sucesso!<br>";
    }
    public function dadosadm()
    {
        echo "Nome adm: {$this->nome}, Email adm: {$this->email}";
    }


}

?>