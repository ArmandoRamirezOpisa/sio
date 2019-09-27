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

    function codPremioCodProgramaCanje($info){
        $result = "
            select cd.codPremio as premio, c.codPrograma as programa
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
        return $query->result_array(); //$query->result();
    }

    function cantidadPedidoDetalle($dataCanje){
        $result = "
            SELECT SUM(cantidad) as cantidad
            FROM `PedidoDetalle`
            WHERE `codPremio` = ".$dataCanje."
            and `status` = 1
        ";
        $query = $this->db->query($result);
        return $query->result_array();
    }

    function cantidadEsDiversas($dataCanje){
        $result = "
            select sum(cantidad) as cantidad
            from ESDiversas d
            WHERE d.codPremio= ".$dataCanje."
        ";
        $query = $this->db->query($result);
        return $query->result_array();
    }

    function cantidadCanjeDetalle($dataCanje){
        $result = "
            select sum(cd2.cantidad) as cantidad
            from CanjeDetalle cd2 
            join Canje c2 on cd2.codPrograma=c2.codPrograma and cd2.FolioCanje=c2.FolioCanje
            WHERE cd2.codPremio= ".$dataCanje."
            and c2.fhProgramacion is not null
            and c2.fhProgramacion >= '2017-09-28'
            and c2.status=1
        ";
        $query = $this->db->query($result);
        return $query->result_array();
    }

    function infoActivacionesCanje($programa,$info){
        $result = "
            select concat(convert(a.fhActivacion,DATE), ' (', a.noTarjeta , ')') as Activacion
            from Activaciones a
            where a.codPrograma= ".$programa."
            and a.foliocanje= ".$info." 
            LIMIT 1
        ";
        $query = $this->db->query($result);
        if($query){
            return $query->result_array();
        }else{
            return false;
        }
    }

    function busquedaCanjeXFolio($dataPedidoDetalleCantidad,$dataESDivCantidad,$dataCanjeCDetalleCantidad,$Activacion,$info){
        $result = "
            SELECT c.codPrograma,c.FolioCanje, e.Empresa,p.Nombre,c.fhOrden,c.Calle,c.Colonia,c.Ciudad,c.Estado,
            c.cp,c.Pais,c.Telefono,p.eMail,c.PO,c.Atencion, p.Company,cd.Cantidad, cd.codPremio, 
            pr.Nombre as NombrePremio , pr.InventarioInicial + isnull(".$dataPedidoDetalleCantidad.") 
            + isnull(".$dataESDivCantidad.") - isnull(".$dataCanjeCDetalleCantidad.") as Stock,
            case when c.fhProgramacion is null then 'Sin Programar' 
            else CONCAT('Programado el ',c.fhProgramacion)  end as Programacion
            ,case when cd.fhEnvio is null then 'Sin Enviar' else concat('Enviado el ',cd.fhEnvio,' por ',
            m.Mensajeria, ' Status: ', cd.Estado, case when cd.Estado='Delivered' 
            then concat(' Recibido Por ',cd.RecibidoPor,' el ',convert(cd.FechaDeEntrega,DAte)) else '' end ) 
            end as Envio
            ,case when pr.nombre like '%Liverp%' and c.ConfirmadoGC=0 
            and c.DepositadoGC=0 then 'Tarjeta No Activada'
            when pr.nombre like '%Liverp%' and c.ConfirmadoGC=1 and c.DepositadoGC=0 
            then 'Tarjeta Confirmada. Por Depositar'
            when pr.nombre like '%Liverp%' and c.ConfirmadoGC=1 and c.DepositadoGC=1 then 'Tarjeta Activada el ' 
            CONCAT(case when ".$Activacion." = NULL then 'Desconocido'
            when ".$Activacion." <> NULL then ".$Activacion.")
            else '' end as Comentario
            ,cd.noGuia as Guia
            ,case when c.status=1 then 'Status Normal' else 'Cancelado' end as Status
            FROM Canje c
            JOIN CanjeDetalle cd on c.codprograma=cd.codprograma and c.foliocanje=cd.foliocanje
            LEFT JOIN Participante p on p.idParticipante = c.idParticipante
            LEFT JOIN Premio pr on pr.codPremio = cd.codPremio
            LEFT JOIN Empresa e on e.codPrograma = p.codPrograma and e.codEmpresa = p.codEmpresa
            left join Mensajerias m on m.idMensajeria = cd.idMensajeria
            WHERE c.foliocanje = ".$info."
            ORDER BY c.foliocanje ASC
        ";
        $query = $this->db->query($result);
        return $query->result_array();
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