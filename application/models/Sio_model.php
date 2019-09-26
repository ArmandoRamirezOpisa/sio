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

    function codPremioCanje($info){
        $result = "
            select cd.codPremio as premio
            from Canje as c join CanjeDetalle as cd on c.codPrograma = cd.codPrograma 
            and c.folioCanje = cd.folioCanje 
            left join Participante as p on p.idParticipante = c.idParticipante
            left join Premio as pr on pr.codPremio = cd.codPremio
            left join Empresa as e on e.codPrograma = p.codPrograma
            and e.codEmpresa = p.codEmpresa
            left join Mensajerias as m on m.idMensajeria = cd.idMensajeria
            where c.folioCanje = ".$info."
            ORDER BY c.foliocanje ASC
        ";
        $query = $this->db->query($result);
        return $query->result();
    }

    function cantidadPedidoDetalle($dataCanje){
        $result = "
            SELECT SUM(cantidad) 
            FROM `PedidoDetalle` 
            WHERE `codPremio` = ".$dataCanje." and `status` = 1
        ";
        $query = $this->db->query($result);
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