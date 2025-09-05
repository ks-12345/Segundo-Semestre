<?php

//modificadores de acesso:
    //existem 3 tipos: 
    // -public, 
    // -private,
    // -protected

    //public class NomeDaAtributo: métodos e atributos públicos

    //private class NomeDaAtributo: métodos e atributos privados para acesso somente dentro da classe. utilizamos os getters e setters para acessar esses atributos

    //protected class NomeDaAtributo: métodos e atributos protegidos para acesso somente dentro da classe e suas subclasses

    //pacotes: sintaxe logo no inicio do código, que atribui de onde os arquivos pertencem, ou seja, o caminho da pasta em que ele está contido. 

    //Exemplo:

    //namespace aula 09;

    //Caso tenham mais arquivos que formam o backend de uma página Web e possuem a mesma raiz, o namespace será o mesmo.

    namespace Aula_08;

Interface Pagamento {
    public function pagar($valor): void;

}

class CartaoDeCredito implements Pagamento {
    public function pagar($valor): void {
        echo "Pagamento realizado com cartão de crédito valor de R$ $valor\n";
    }
}

class PIX implements Pagamento {
    public function pagar ($valor): void {
        echo "Pagamento realizado com PIX valor de R$ $valor\n";
    }
}

interface Forma {

    public function calcularArea($metros): void;
}
class Quadrado implements Forma {

    public function calcularArea($metros): void {
        $area = $metros * $metros;
        echo "Área do quadrado: $area m²\n";
    }
}

class Circulo implements Forma {

    public function calcularArea($metros): void {
        $area = pi() * ($metros * $metros);
        echo "Área do círculo: $area m²\n";
    }
}
    ?>