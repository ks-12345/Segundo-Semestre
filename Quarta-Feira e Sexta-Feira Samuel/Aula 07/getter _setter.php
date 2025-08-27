<?php 

Class Pessoa {
    private $nome;
    private $cpf;
    private $telefone;
    private $idade;
    private $email;
    private $senha;

    public function __construct($nome, $cpf, $telefone, $idade, $email, $senha) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->telefone = $telefone;
        $this->idade = $idade;
        $this->email = $email;
        $this->senha = $senha;
    }
    public function setNome($nome) {
        $this->nome = ucwords(strtolower($nome));
    }
    public function getNome() {
        return $this->nome;
    }
    public function setCpf($cpf) {
        $this->cpf = preg_replace('/\D/', '', $cpf);
    }
    public function getCpf() {
        return $this->cpf;
    }
    public function setTelefone($telefone) {
        $this->telefone = preg_replace('/\D/', '', $telefone);
    }
    public function getTelefone() {
        return $this->telefone;
    }
    public function setIdade($idade){
        $this->idade = abs(int)$idade;
    }
    public function getIdade(){
        return $this->idade;
    }
}
?>