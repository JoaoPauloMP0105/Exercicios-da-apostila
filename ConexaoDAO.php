<?php

/**
 * Description of ConexaoDAO
 *
 * @author Joao
 */
class ConexaoDAO {
    private $host, $user, $password, $dbName;
    public $vConn;
    
    //método responsável por abrir a conexão com o banco de dados
    public function abrirConexao() {
        $host = "localhost";
        $user = "root";
        $password = "";
        $dbName = "tarefas";   
        
        $vConn = mysqli_connect($host, $user, $password, $dbName);
        //mysqli_charset_set('utf8');
        return $vConn;
    }
    
    
    //méotodo responsável por fechar a conexão com o banco de dados
    public function fecharConexao() {        
        mysqli_close($vConn);        
    }    
}

?>
