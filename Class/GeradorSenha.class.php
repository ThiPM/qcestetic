<?php
class GeradorSenha{
    private $tamanho;
    private $maiusculas;
    private $minusculas;
    private $numeros;

    function __construct()
    {
        $this->tamanho = 8;
        $this->maiusculas = true;
        $this->minusculas = true;
        $this->numeros = true;
    }
    function senha(){
        $ma = "ABCDEFGHIJKLMNOPQRSTUVYXWZ";
        $mi = "abcdefghijklmnopqrstuvyxwz"; 
        $nu = "0123456789";
        $senha = '';

        if ($this->maiusculas){
                $senha .= str_shuffle($ma);
        }
        if ($this->minusculas){
                $senha .= str_shuffle($mi);
        }

        if ($this->numeros){
                $senha .= str_shuffle($nu);
        }

        return substr(str_shuffle($senha),0,$this->tamanho);
}
}
$senha = new GeradorSenha();
$senha->senha();

?>