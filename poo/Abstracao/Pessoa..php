<?php
class Pessoa {
    
    public string $nome;
    public int $idade;
    private string $corDosOlhos;
    private string $genero;
    public float $altura;
    public float $peso;


    function __construct($nome, $idade, $corDosOlhos, $genero, $altura, $peso) {
        $this->nome = $nome;
        $this->idade = $idade;
        if($idade > 0 and $idade < 120){
            $this->idade = $idade;
        } else {
            throw new Exception("Idade não permitida");
        }
        $this->corDosOlhos = $corDosOlhos;
        if ($corDosOlhos == "Azul" || $corDosOlhos == "Castanho" || $corDosOlhos == "Verde" || $corDosOlhos == "Preto") {
            $this->corDosOlhos = $corDosOlhos;
        } else {
            throw new Exception("A cor dos olhos deve ser Azul, Castanho, Verde ou Preto.");
        }
        $this->genero = $genero;
        if ($genero == "Masculino" || $genero == "Feminino") {
            $this->genero = $genero;
        } else {
            throw new Exception("O gênero deve ser Masculino ou Feminino.");
        }
        $this->altura = $altura;
        $this->peso = $peso;
    }

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
    public function getcorDosOlhos(): string
    {
        return $this->corDosOlhos;    
    }

     public function getGenero(): string
    {
        return $this->genero;    
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