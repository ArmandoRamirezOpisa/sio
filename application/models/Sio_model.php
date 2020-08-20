<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sio_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    function loginSIO($loginUserDataSio) {

        $resultado = "
            SELECT idUsuario,nombreUsuario,pwd,usuario
            FROM Usuarios_SIO 
            WHERE nombreUsuario = '".$loginUserDataSio['userSio']."'
            and pwd = '".$loginUserDataSio['passwordSio']."'
        ";

        $query = $this->db->query($resultado);
        return $query->result();
    }

    function busquedaCanjeXFolio($info){
        $result = "CALL spu_GetCanjesXFolio(".$info.");";
        $query = $this->db->query($result);
        if($query){
            return $query->result_array();
        }else{
            return false;
        }
    }

    function busquedaCanjeXFolio2($folioCanje){
        $result = "CALL spu_GetCanjesXFolio2(".$folioCanje['folioCanje'].");";
        $query = $this->db->query($result);
        if($query){
            return $query->result_array();
        }else{
            return false;
        }
    }

    function busquedaCanjeXNombre($info){
        $result = "CALL spu_GetCanjeXNombre('".$info."');";
        $query = $this->db->query($result);
        if($query){
            return $query->result_array();
        }else{
            return false;
        }
    }

    function busquedaCanjeXNombre2($folioCanje){
        $result = "CALL spu_GetCanjeXNombre2('".$folioCanje."');";
        $query = $this->db->query($result);
        if($query){
            return $query->result_array();
        }else{
            return false;
        }
    }

    function busquedaCanjeXPO($info){
        $result = "CALL spu_GetCanjeXPO('".$info."');";
        $query = $this->db->query($result);
        if($query){
            return $query->result_array();
        }else{
            return false;
        }
    }

    function busquedaCanjeXCP($info){
        $result = "CALL spu_GetCanjeXCP('".$info."');";
        $query = $this->db->query($result);
        if($query){
            return $query->result_array();
        }else{
            return false;
        }
    }

    function busquedaCanjeXGuia($info){
        $result = "CALL spu_GetCanjeXGuia('".$info."');";
        $query = $this->db->query($result);
        if($query){
            return $query->result_array();
        }else{
            return false;
        }
    }

    function busquedaCanjeXCompany($info){
        $result = "CALL spu_GetCanjeXCompany('".$info."');";
        $query = $this->db->query($result);
        if($query){
            return $query->result_array();
        }else{
            return false;
        }
    }

    function canjeAEditar($loginUserDataSio){
        $result = "CALL spu_GetCanjeInformacionAEditar('".$loginUserDataSio['folioCanjeDetalle']."');";
        $query = $this->db->query($result);
        if($query){
            return $query->result_array();
        }else{
            return false;
        }
	}
	
	function mensajeriaData(){
		$resultado = "CALL spu_Get_ListMensajeria();";
        $queryMensajeria = $this->db->query($resultado);
        if($queryMensajeria){
			return $queryMensajeria->result_array();
        }else{
            return false;
        }
	}

    function updateNameUser($nameUserDataSio){
        $query = $this->db->query("
            UPDATE `Usuarios_SIO` 
            SET `usuario`='".$nameUserDataSio['newUserSio']."'
            WHERE idUsuario = ".$this->session->userdata('idUsuario')
        );
        if ($query){
            return true;
        }else{
            return false;
        }
    }

    function updatePwd($pwsDataSio){
        $query = $this->db->query("
            UPDATE `Usuarios_SIO` 
            SET `pwd`='".$pwsDataSio['newPassword']."'
            WHERE idUsuario = ".$this->session->userdata('idUsuario')
        );
        if ($query){
            return true;
        }else{
            return false;
        }
    }
    
}
