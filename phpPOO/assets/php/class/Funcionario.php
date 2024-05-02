nome,cpf,endereco,salario,cargo,acesso
<?php 
class Funcionario{
    private int $id_Funcionario;
    private string $Nome_Funcionario;
    private int $cpf_Funcionario;
    private string $endereco_Funcionario;
    private int $idade_Funcionario;
    private string $cargo_Funcionario;
    private float $salario_Funcionario;
    private int $acesso_Funcionario;
    private string $senha_Funcionario;

    public function getIdFuncionario(): int
    {
        return $this->id_Funcionario;
    }

    public function setIdFuncionario(int $id_Funcionario): self
    {
        $this->id_Funcionario = $id_Funcionario;

        return $this;
    }

    public function getNomeFuncionario(): string
    {
        return $this->Nome_Funcionario;
    }

    public function setNomeFuncionario(string $Nome_Funcionario): self
    {
        $this->Nome_Funcionario = $Nome_Funcionario;

        return $this;
    }

    public function getCpfFuncionario(): int
    {
        return $this->cpf_Funcionario;
    }

    public function setCpfFuncionario(int $cpf_Funcionario): self
    {
        $this->cpf_Funcionario = $cpf_Funcionario;

        return $this;
    }

    public function getEnderecoFuncionario(): string
    {
        return $this->endereco_Funcionario;
    }

    public function setEnderecoFuncionario(string $endereco_Funcionario): self
    {
        $this->endereco_Funcionario = $endereco_Funcionario;

        return $this;
    }

    public function getIdadeFuncionario(): int
    {
        return $this->idade_Funcionario;
    }

    public function setIdadeFuncionario(int $idade_Funcionario): self
    {
        $this->idade_Funcionario = $idade_Funcionario;

        return $this;
    }

    public function getCargoFuncionario(): string
    {
        return $this->cargo_Funcionario;
    }

    public function setCargoFuncionario(string $cargo_Funcionario): self
    {
        $this->cargo_Funcionario = $cargo_Funcionario;

        return $this;
    }


    public function getSalarioFuncionario(): float
    {
        return $this->salario_Funcionario;
    }


    public function setSalarioFuncionario(float $salario_Funcionario): self
    {
        $this->salario_Funcionario = $salario_Funcionario;

        return $this;
    }

    public function getAcessoFuncionario(): int
    {
        return $this->acesso_Funcionario;
    }

    public function setAcessoFuncionario(int $acesso_Funcionario): self
    {
        $this->acesso_Funcionario = $acesso_Funcionario;

        return $this;
    }

    public function getSenhaFuncionario(): string
    {
        return $this->senha_Funcionario;
    }

    public function setSenhaFuncionario(string $senha_Funcionario): self
    {
        $this->senha_Funcionario = $senha_Funcionario;

        return $this;
    }
}

?>