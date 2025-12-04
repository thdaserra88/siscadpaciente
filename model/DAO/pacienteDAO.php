<?php

class PacienteDAO {

    private $conexao;

    public function __construct($conexao) {
        $this->conexao = $conexao;
    }

    public function cadastrarPaciente($dto) {
        try {
            $sql = "INSERT INTO paciente (cpf, nome, endereco, telefone, email, sexo)
                    VALUES (:cpf, :nome, :endereco, :telefone, :email, :sexo)";
    
            $stmt = $this->conexao->prepare($sql);
    
            $stmt->bindValue(":cpf", $dto->__getCpf());
            $stmt->bindValue(":nome", $dto->__getNome());
            $stmt->bindValue(":endereco", $dto->__getEndereco());
            $stmt->bindValue(":telefone", $dto->__getTelefone());
            $stmt->bindValue(":email", $dto->__getEmail());
            $stmt->bindValue(":sexo", $dto->__getSexo());
    
            $stmt->execute();
            return true;
    
        } catch (PDOException $e) {
    
            
            if ($e->getCode() == 23000) {
                return "cpf_existente";
            }
    
            return false;
        }
    }
    

    public function listarPacientes() {
        $sql = "SELECT * FROM paciente ORDER BY nome";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function buscar($termo) {
        $sql = "SELECT * FROM paciente 
                WHERE nome LIKE :t OR cpf LIKE :t ORDER BY nome";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(":t", "%$termo%");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function consultarCpf($cpf) {
        $sql = "SELECT * FROM paciente WHERE cpf = :cpf";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(":cpf", $cpf);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function excluirPaciente($cpf) {
        $sql = "DELETE FROM paciente WHERE cpf = :cpf";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(":cpf", $cpf);
        return $stmt->execute();
    }

    public function alterarPaciente($dto) {
        $sql = "UPDATE paciente 
                SET nome=:nome, endereco=:endereco, telefone=:telefone, email=:email, sexo=:sexo
                WHERE cpf=:cpf";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(":nome", $dto->__getNome());
        $stmt->bindValue(":endereco", $dto->__getEndereco());
        $stmt->bindValue(":telefone", $dto->__getTelefone());
        $stmt->bindValue(":email", $dto->__getEmail());
        $stmt->bindValue(":sexo", $dto->__getSexo());
        $stmt->bindValue(":cpf", $dto->__getCpf());

        return $stmt->execute();
    }
}

?>