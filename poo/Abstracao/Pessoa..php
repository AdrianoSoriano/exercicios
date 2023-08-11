<?php
class Pessoa {
    
    public string $nome;
    public int $idade;
    public string $sexo;
    public float $altura;
    public float $peso;

    public function setNome(string $nome): void 
    {
        $this->nome = $nome;
    }

    public function getNome(): string
    {
        return $this->nome;    
    }

    public function setIdade(int $idade): void 
    {
        $this->idade = $idade;
    }
    
    public function getIdade(): int
    {
        return $this->idade;    
    }

    public function setSexo(string $sexo): void 
    {
        $this->sexo = $sexo;
    }
    
    public function getSexo(): string
    {
        return $this->sexo;    
    }

    public function setAltura(float $altura): void 
    {
        $this->altura = $altura;
    }
    
    public function getAltura(): float
    {
        return $this->altura;    
    }

    public function setPeso(float $peso): void 
    {
        $this->peso = $peso;
    }
    
    public function getPeso(): float
    {
        return $this->peso;    
    }

}
?>