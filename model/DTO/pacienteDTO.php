<?php

class pacienteDTO {

    private $cpf;
    private $nome;
    private $endereco;
    private $telefone;
    private $email;
    private $sexo;

    public function __getCpf() { return $this->cpf; }
    public function __setCpf($cpf) { $this->cpf = $cpf; }

    public function __getNome() { return $this->nome; }
    public function __setNome($nome) { $this->nome = $nome; }

    public function __getEndereco() { return $this->endereco; }
    public function __setEndereco($endereco) { $this->endereco = $endereco; }

    public function __getTelefone() { return $this->telefone; }
    public function __setTelefone($telefone) { $this->telefone = $telefone; }

    public function __getEmail() { return $this->email; }
    public function __setEmail($email) { $this->email = $email; }

    public function __getSexo() { return $this->sexo; }
    public function __setSexo($sexo) { $this->sexo = $sexo; }
}

?>
