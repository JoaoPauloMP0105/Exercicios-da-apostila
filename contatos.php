<?php

/**
 * Description of Usuarios
 *
 * @author Joao
 */
class Usuarios {
    
    private $nome, $descricao, $prazo, $concluida, $prioridade;
    
    
    // GETTERS E SETTERS
    function getnome() {
        return $this->nome;
    }
    
    function setnome($nome) {
        $this->nome = $nome;
    }

    function getdescricao() {
        return $this->descricao;
    }
    
    function setdescricao($descricao) {
        $this->descricao = $descricao;
    }

    function getprazo() {
        return $this->prazo;
    }
    

    function setprazo($prazo) {
        $this->prazo = $prazo;
    }

    function getconcluido() {
        return $this->concluido;
    }
    

    function setconcluido($concluido) {
        $this->concluido = $concluido;
    }

    function getprioridade() {
        return $this->prioridade;
    }
    

    function setprioridade($prioridade) {
        $this->prioridade = $prioridade;
    }


}

?>
