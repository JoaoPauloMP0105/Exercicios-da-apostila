<?php

/**
 * Description of UsuariosDAO
 *
 * @author João
 */

require_once 'contatos.php';
require_once 'ConexaoDAO.php';

class UsuariosDAO {
   
    public function buscar_Tarefas($nome, $descricao, $prazo, $concluida, $prioridade) {
        $objCon = new ConexaoDAO();
        $vConn = $objCon->abrirConexao();
        
        $objUser = new Usuarios();
        $sqlBusca = "SELECT * FROM tarefas";
        $rsBusca = mysqli_query($vConn, $sqlBusca) or die(mysqli_error($vConn));
        


        if (mysqli_num_rows($rsBusca) == 0) {
            return null;
                    
        } else {
            $tblTarefa = mysqli_fetch_array($rsBusca);
            $objUser->setnome($tblTarefa['nome']);
            $objUser->setdescricao($tblTarefa['descricao']);
            $objUser->setprazo($tblTarefa['prazo']);
            $objUser->setconcluida($tblTarefa['concluida']);
            $objUser->setprioridade($tblTarefa['prioridade']);

            
            return $objUser;
        }
        
        $objCon->fecharConexao();
    }
    
    
    public function cadastrarUser($objUser) {
        
    }
    
    
    public function consultarUser($user) {
        
    }
    
    public function deletarUser($user) {
        
    }
}

?>
