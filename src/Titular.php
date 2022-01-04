<?php

class Titular
{
    private CPF $cpf;
    private Endereco $endereco;
    private string $nome;

    public function __construct(string $nome, CPF $cpf,  Endereco $endereco)
    {
        $this-> cpf = $cpf;
        $this-> nome = $nome;
        $this-> endereco = $endereco;
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
    public function recuperaEndereco()
    {
        return $this->endereco;
    }

}