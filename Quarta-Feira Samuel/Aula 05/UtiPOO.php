<?php

// Criar uma classe simples
class Carro { //criando classe (molde para criação de objetos)

    public $Marca; //criando atributo marca
    public $Modelo; //criando atributo modelo
    public $Ano; //criando atributo ano de fabric.
    public $Revisao; //criando atributo  "precisa de revisão?"
    public $N_donos; //criando atributo número de donos
    public $Cor; //criando atributo cor
    public $Placa; //criando atributo placa

    public function __construct($Marca, $Modelo, $Ano, $Revisao, $N_donos) {
        $this->Marca = $Marca;
        $this->Modelo = $Modelo;
        $this->Ano = $Ano;
        $this->Revisao = $Revisao;
        $this->N_donos = $N_donos;
        $this->Cor = $Cor;
        $this->Placa = $Placa;
    }
}

$carro1 = new Carro("Porsche", "911", 2020, false, 1);
$carro2 = new Carro("Mitsubishi", "Lancer", 1945, true, 1);

?>