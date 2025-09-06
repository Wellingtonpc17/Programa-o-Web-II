<?php

class Cliente
{
    public function __construct($nome, $email, $senha, $cpf)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->cpf = $cpf;
    }

    public $nome;
    public $email;
    public $senha;
    public $cpf;

    public function exibirDados()
    {
        echo "<h2>Cliente</h2>";
        echo "Nome: " . $this->nome . "<br>";
        echo "Email: " . $this->email . "<br>";
        echo "CPF: " . $this->cpf . "<br>";
    }

    public function comprar()
    {
        echo "Compra realizada com sucesso!<br><br>";
    }

}

?>