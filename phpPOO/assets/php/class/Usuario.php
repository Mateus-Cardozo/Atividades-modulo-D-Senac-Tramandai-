<?php
class Usuario
{
    private int $id_Usuario;
    private string $nome_Usuario;
    private string $cpf_Usuario;
    private string $endereco_Usuario;
    private int $idade_Usuario;
    private string $senha_Usuario;
    private float $valor_Usuario;
    private bool $status_Usuario;
    private ?int $extrato_id;
    public function getIdUsuario(): int
    {
        return $this->id_Usuario;
    }

    public function setIdUsuario(int $id_Usuario): self
    {
        $this->id_Usuario = $id_Usuario;

        return $this;
    }

    public function getNomeUsuario(): string
    {
        return $this->nome_Usuario;
    }

    public function setNomeUsuario(string $nome_Usuario): self
    {
        $this->nome_Usuario = $nome_Usuario;

        return $this;
    }

    public function getCpfUsuario(): string
    {
        return $this->cpf_Usuario;
    }

    public function setCpfUsuario(string $cpf_Usuario): self
    {
        $this->cpf_Usuario = $cpf_Usuario;

        return $this;
    }

    public function getEnderecoUsuario(): string
    {
        return $this->endereco_Usuario;
    }

    public function setEnderecoUsuario(string $endereco_Usuario): self
    {
        $this->endereco_Usuario = $endereco_Usuario;

        return $this;
    }

    public function getIdadeUsuario(): int
    {
        return $this->idade_Usuario;
    }

    public function setIdadeUsuario(int $idade_Usuario): self
    {
        $this->idade_Usuario = $idade_Usuario;

        return $this;
    }

    public function getSenhaUsuario(): string
    {
        return $this->senha_Usuario;
    }

    public function setSenhaUsuario(string $senha_Usuario): self
    {
        $this->senha_Usuario = $senha_Usuario;

        return $this;
    }

    public function getValorUsuario(): float
    {
        return $this->valor_Usuario;
    }

    public function setValorUsuario(float $valor_Usuario): self
    {
        $this->valor_Usuario = $valor_Usuario;

        return $this;
    }

    public function isStatusUsuario(): bool
    {
        return $this->status_Usuario;
    }

    public function setStatusUsuario(bool $status_Usuario): self
    {
        $this->status_Usuario = $status_Usuario;

        return $this;
    }

    public function getExtratoId(): ?int
    {
        return $this->extrato_id;
    }

    public function setExtratoId(?int $extrato_id): self
    {
        $this->extrato_id = $extrato_id;
        return $this;
    }

    public function obterExtrato(): array
    {
        // Aqui você irá buscar o extrato do usuário no banco de dados e retorná-lo
        // Retorna um array com as transações do extrato (data, tipo, valor)
        return [
            ['data' => '2023-09-17 10:00:00', 'tipo' => 'Depósito', 'valor' => 100.00],
            ['data' => '2023-09-17 12:30:00', 'tipo' => 'Saque', 'valor' => 50.00],
            // ... Adicione outras transações do extrato aqui
        ];
    }
    }
?>
