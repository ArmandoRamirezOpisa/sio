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