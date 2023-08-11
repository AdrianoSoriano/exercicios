<?php
class Pessoa {
    //Atributos
    public string $nome;
    public int $idade;
    public string $sexo;
    public float $altura;
    public int $peso;

    //Metodos
    public function setNome(string $nome): void {
        $this->nome = $nome;
    }
    public function setIdade(int $idade): void {
        $this->idade = $idade;
    }
    public function setSexo(string $sexo): void {
        $this->sexo = $sexo;
    }
    public function setAltura(float $altura): void {
        $this->altura = $altura;
    }
    public function setPeso(int $peso): void {
        $this->peso = $peso;
    }
}
?>