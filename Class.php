<?php //
/**
 * UploadClass nos permite tener metodo o rutinas para realizar el envio de
 * los datos o registros a nuestra base de datos.
 *
 */
//$doc = $_SERVER['DOCUMENT_ROOT'];
require_once ($_SERVER["DOCUMENT_ROOT"] . "/cliente/DbPdo.php");
class DOMClass{


   protected function _getDbh(){
        return DbPdo::getInstance()->getConn();
    }
    /**
    * valida_usuario.php
    */
   public function BuscaClintes($idEmpresa){
       $sql = "SELECT *"
               . " FROM cliente"
               . " WHERE idEmpresa = '$idEmpresa'";
        $stm = $this->_getDbh()->prepare($sql);
       $stm->execute();
       return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
    /**
    * seleccion_empresa_usuario.php
    */

}
