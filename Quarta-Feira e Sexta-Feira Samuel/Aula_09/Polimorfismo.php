<?php  
// Polimorfismo


// O termo Polimorfimo significa "varias formas".
// Associando isso a Programaçao Orientada a Objetos, o 
// conceito se trata de varias classes e suas instancias (objetos) respondendo a uma mesmo metodo de formas diferentes. 
// No exemplo do Interface da Aula_09, termos um metodo calcularArea() que responde de froma diferentes a classe Quadrado , a classe Pentagono
// a  classe Circulo . Isso quer dizer que a funçao é a mesma - calcular a area da forma geometrica - mas a operaçao musa de acordo com a figura.

//Crie um metodo chamado "mover()", onde ele responde a varias formas diferente, para as sub-classes: Carro, Aviao, Barco e Elevador. Dica: Utilize Interfaces.



Interface Veiculos {
    public function mover(): void;
}

class Carro implements Veiculos {
    public function mover(): void {
        echo "O carro esta anda";
    }
}

class Aviao implements Veiculos {
    public function mover (): void {
        echo "O Avião esta voar";
    }
}

class Barco implements Veiculos {
    public function mover (): void {
        echo "O Barco esta navega";
    }
}

class Elevador implements Veiculos {
    public function mover (): void {
        echo "O Elevador esta subindo ou descendo";
    }
}

?>