<?php

class Titular
{
    private CPF $cpf;
    private string $nome;

    public function __construct(string $nome, CPF $cpf)
    {
        $this-> cpf = $cpf;
        $this-> nome = $nome;
        $this-> validaNome($nome);

    }

    public function recuperaCpf()
    {
        return $this->cpf->recuperaNumero();
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function validaNome($nome)
    {
        if (strlen($nome) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }

    }

}