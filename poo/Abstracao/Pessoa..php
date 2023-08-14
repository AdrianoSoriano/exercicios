<?php
class Pessoa {
    
    private string $nome;
    private int $idade;
    private string $corDosOlhos;
    private string $genero;
    private float $altura;
    private float $peso;


    public function __construct($nome, $idade, $corDosOlhos, $genero, $altura, $peso) {
        $this->nome = $nome;
        $this->setIdade($idade);
        $this->setcorDosOlhos($corDosOlhos);
        $this->setgenero($genero);
        $this->setAltura($altura);
        $this->setPeso($peso);
    }

    public function setNome(string $nome): void 
    {
        $this->nome = $nome;
    }

    public function getNome(): string
    {
        return $this->nome;    
    }

    private function setIdade(int $idade): void 
    {
        if(($idade < 0) || ($idade > 100)){
            echo "Idade não permitida";
            exit();
        }

        $this->idade = $idade;
    }
    
    public function getIdade(): int
    {
        return $this->idade;    
    }

    private function setCorDosOlhos(string $corDosOlhos): void
    {
        $opcao = ["Azul", "Castanho", "Verde", "Preto"];

        if(in_array($corDosOlhos, $opcao)) {
            $this->corDosOlhos = $corDosOlhos;
            return;
        }
        echo "A cor dos olhos deve ser Azul, Castanho, Verde ou Preto.";
            exit();
    }

    public function getCorDosOlhos(): string
    {
        return $this->corDosOlhos;    
    }

    private function setGenero(string $genero): void
    {
        $opcao = ["Masculino", "Feminino"];

        if(in_array($genero, $opcao)){
            $this->genero = $genero;
            return;
        }
        echo "O gênero deve ser Masculino ou Feminino.";
            exit();
    }

    public function getGenero(): string
    {
        return $this->genero;    
    }

    private function setAltura(float $altura): void 
    {
        if(($altura < 0) || ($altura >2.10)){
            echo "Altura não permitida";
            exit();
        }

        $this->altura = $altura;
    }
    
    public function getAltura(): float
    {
        return $this->altura;    
    }

    private function setPeso(float $peso): void 
    {
        if($peso < 0){
            echo "Peso não permitida";
            exit();
        }

        $this->peso = $peso;
    }
    
    public function getPeso(): float
    {
        return $this->peso;    
    }

}
?>