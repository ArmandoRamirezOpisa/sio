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
        $result = "
            SELECT  c.codPrograma,c.FolioCanje, e.Empresa,p.Nombre,c.fhOrden,c.Calle,c.Colonia,c.Ciudad,c.Estado,c.cp,c.Pais,c.Telefono,p.eMail,c.PO,c.Atencion, p.Company
            ,cd.Cantidad, cd.codPremio, pr.Nombre as NombrePremio
            , pr.InventarioInicial + ifnull((select sum(pd2.cantidad) from PedidoDetalle pd2 WHERE pd2.codpremio=cd.codpremio and pd2.status=1),0)
            + ifnull((select sum(cantidad) from ESDiversas d WHERE d.codPremio=cd.codPremio),0)
            - ifnull((select sum(cd2.cantidad) from CanjeDetalle cd2 join Canje c2 on cd2.codPrograma=c2.codPrograma and cd2.FolioCanje=c2.FolioCanje WHERE cd2.codPremio=pr.codPremio and c2.fhProgramacion is not null  and c2.fhProgramacion >= '2017-09-28' and c2.status=1),0) as Stock
            ,case when c.fhProgramacion is null then 'Sin Programar' else concat('Programado el ',c.fhProgramacion)  end as Programacion
            ,case when cd.fhEnvio is null then 'Sin Enviar' else concat('Enviado el ',cd.fhEnvio,' por ',m.Mensajeria, ' Status: ', cd.Estado, case when cd.Estado='Delivered' then concat(' Recibido Por ',cd.RecibidoPor,' el ',date_format(cd.FechaDeEntrega,'%d/%m/%Y')) else '' end )  end as Envio
            ,case when pr.nombre like '%Liverp%' and c.ConfirmadoGC=0 and c.DepositadoGC=0 then 'Tarjeta No Activada'
            when pr.nombre like '%Liverp%' and c.ConfirmadoGC=1 and c.DepositadoGC=0 then 'Tarjeta Confirmada. Por Depositar'
            when pr.nombre like '%Liverp%' and c.ConfirmadoGC=1 and c.DepositadoGC=1 then CONCAT('Tarjeta Activada el ' , ifnull((select concat(date_format(a.fhActivacion,'%d/%m/%Y'), ' (', a.noTarjeta , ')')  from Activaciones a where a.codPrograma=c.codPrograma and a.foliocanje=c.foliocanje LIMIT 1),'Desconocido')) else '' end as Comentario
            ,cd.noGuia as Guia,case when c.status=1 then 'Status Normal' else 'Cancelado' end as Status
            FROM Canje c 
            JOIN CanjeDetalle cd on c.codprograma=cd.codprograma and c.foliocanje=cd.foliocanje
            LEFT JOIN Participante p on p.idParticipante = c.idParticipante
            LEFT JOIN Premio pr on pr.codPremio = cd.codPremio
            LEFT JOIN Empresa e on e.codPrograma = p.codPrograma and e.codEmpresa = p.codEmpresa
            left join Mensajerias m on m.idMensajeria = cd.idMensajeria
            WHERE  c.foliocanje = ".$info."
            ORDER BY c.foliocanje asc
        ";
        $query = $this->db->query($result);
        if($query){
            return $query->result_array();
        }else{
            return false;
        }
    }

    function busquedaCanjeXNombre($info){
        $result = "
            SELECT  c.codPrograma,c.FolioCanje, e.Empresa,p.Nombre,c.fhOrden,c.Calle,c.Colonia,c.Ciudad,c.Estado,c.cp,c.Pais,c.Telefono,p.eMail,c.PO,c.Atencion, p.Company
            ,cd.Cantidad, cd.codPremio, pr.Nombre as NombrePremio
            , pr.InventarioInicial + ifnull((select sum(pd2.cantidad) from PedidoDetalle pd2 WHERE pd2.codpremio=cd.codpremio and pd2.status=1),0)
            + ifnull((select sum(cantidad) from ESDiversas d WHERE d.codPremio=cd.codPremio),0)
            - ifnull((select sum(cd2.cantidad) from CanjeDetalle cd2 join Canje c2 on cd2.codPrograma=c2.codPrograma and cd2.FolioCanje=c2.FolioCanje WHERE cd2.codPremio=pr.codPremio and c2.fhProgramacion is not null  and c2.fhProgramacion >= '2017-09-28' and c2.status=1),0) as Stock
            ,case when c.fhProgramacion is null then 'Sin Programar' else concat('Programado el ',c.fhProgramacion)  end as Programacion
            ,case when cd.fhEnvio is null then 'Sin Enviar' else concat('Enviado el ',cd.fhEnvio,' por ',m.Mensajeria, ' Status: ', cd.Estado, case when cd.Estado='Delivered' then concat(' Recibido Por ',cd.RecibidoPor,' el ',date_format(cd.FechaDeEntrega,'%d/%m/%Y')) else '' end )  end as Envio
            ,case when pr.nombre like '%Liverp%' and c.ConfirmadoGC=0 and c.DepositadoGC=0 then 'Tarjeta No Activada'
            when pr.nombre like '%Liverp%' and c.ConfirmadoGC=1 and c.DepositadoGC=0 then 'Tarjeta Confirmada. Por Depositar'
            when pr.nombre like '%Liverp%' and c.ConfirmadoGC=1 and c.DepositadoGC=1 then CONCAT('Tarjeta Activada el ' , ifnull((select concat(date_format(a.fhActivacion,'%d/%m/%Y'), ' (', a.noTarjeta , ')')  from Activaciones a where a.codPrograma=c.codPrograma and a.foliocanje=c.foliocanje limit 1),'Desconocido')) else '' end as Comentario
            ,cd.noGuia as Guia,case when c.status=1 then 'Status Normal' else 'Cancelado' end as Status
            FROM Canje c
            JOIN CanjeDetalle cd on c.codprograma=cd.codprograma and c.foliocanje=cd.foliocanje
            LEFT JOIN Participante p on p.idParticipante = c.idParticipante
            LEFT JOIN Premio pr on pr.codPremio = cd.codPremio
            LEFT JOIN Empresa e on e.codPrograma = p.codPrograma and e.codEmpresa = p.codEmpresa
            left join Mensajerias m on m.idMensajeria = cd.idMensajeria
            WHERE p.nombre like concat('%','".$info."','%')
            ORDER BY c.foliocanje ASC
        ";
        $query = $this->db->query($result);
        if($query){
            return $query->result_array();
        }else{
            return false;
        }
    }

    function busquedaCanjeXPO($info){
        $result = "
            SELECT  c.codPrograma,c.FolioCanje, e.Empresa,p.Nombre,c.fhOrden,c.Calle,c.Colonia,c.Ciudad,c.Estado,c.cp,c.Pais,c.Telefono,p.eMail,c.PO,c.Atencion, p.Company
            ,cd.Cantidad, cd.codPremio, pr.Nombre as NombrePremio
            , pr.InventarioInicial + ifnull((select sum(pd2.cantidad) from PedidoDetalle pd2 WHERE pd2.codpremio=cd.codpremio and pd2.status=1),0)
            + ifnull((select sum(cantidad) from ESDiversas d WHERE d.codPremio=cd.codPremio),0)
            - ifnull((select sum(cd2.cantidad) from CanjeDetalle cd2 join Canje c2 on cd2.codPrograma=c2.codPrograma and cd2.FolioCanje=c2.FolioCanje WHERE cd2.codPremio=pr.codPremio and c2.fhProgramacion is not null  and c2.fhProgramacion >= '2017-09-28' and c2.status=1),0) as Stock
            ,case when c.fhProgramacion is null then 'Sin Programar' else concat('Programado el ',c.fhProgramacion)  end as Programacion
            ,case when cd.fhEnvio is null then 'Sin Enviar' else concat('Enviado el ',cd.fhEnvio,' por ',m.Mensajeria, ' Status: ', cd.Estado, case when cd.Estado='Delivered' then concat(' Recibido Por ',cd.RecibidoPor,' el ',date_format(cd.FechaDeEntrega,'%d/%m/%Y')) else '' end )  end as Envio
            ,case when pr.nombre like '%Liverp%' and c.ConfirmadoGC=0 and c.DepositadoGC=0 then 'Tarjeta No Activada'
            when pr.nombre like '%Liverp%' and c.ConfirmadoGC=1 and c.DepositadoGC=0 then 'Tarjeta Confirmada. Por Depositar'
            when pr.nombre like '%Liverp%' and c.ConfirmadoGC=1 and c.DepositadoGC=1 then CONCAT('Tarjeta Activada el ' , ifnull((select concat(date_format(a.fhActivacion,'%d/%m/%Y'), ' (', a.noTarjeta , ')')  from Activaciones a where a.codPrograma=c.codPrograma and a.foliocanje=c.foliocanje limit 1),'Desconocido')) else '' end as Comentario
            ,cd.noGuia as Guia,case when c.status=1 then 'Status Normal' else 'Cancelado' end as Status
            FROM Canje c 
            JOIN CanjeDetalle cd on c.codprograma=cd.codprograma and c.foliocanje=cd.foliocanje
            LEFT JOIN Participante p on p.idParticipante = c.idParticipante
            LEFT JOIN Premio pr on pr.codPremio = cd.codPremio
            LEFT JOIN Empresa e on e.codPrograma = p.codPrograma and e.codEmpresa = p.codEmpresa
            left join Mensajerias m on m.idMensajeria = cd.idMensajeria
            WHERE c.PO like concat('%','".$info."','%')
            ORDER BY c.foliocanje asc
        ";
        $query = $this->db->query($result);
        if($query){
            return $query->result_array();
        }else{
            return false;
        }
    }

    function busquedaCanjeXCP($info){
        $result = "
            SELECT  c.codPrograma,c.FolioCanje, e.Empresa,p.Nombre,c.fhOrden,c.Calle,
            c.Colonia,c.Ciudad,c.Estado,c.cp,c.Pais,c.Telefono,p.eMail,
            c.PO,c.Atencion, p.Company,cd.Cantidad, cd.codPremio, pr.Nombre as NombrePremio
            , pr.InventarioInicial + ifnull((select sum(pd2.cantidad) from PedidoDetalle pd2 WHERE pd2.codpremio=cd.codpremio and pd2.status=1),0)
            + ifnull((select sum(cantidad) from ESDiversas d WHERE d.codPremio=cd.codPremio),0)
            - ifnull((select sum(cd2.cantidad) from CanjeDetalle cd2 join Canje c2 on cd2.codPrograma=c2.codPrograma and cd2.FolioCanje=c2.FolioCanje WHERE cd2.codPremio=pr.codPremio and c2.fhProgramacion is not null  and c2.fhProgramacion >= '2017-09-28' and c2.status=1),0) as Stock
            ,case when c.fhProgramacion is null then 'Sin Programar' else concat('Programado el ',c.fhProgramacion)  end as Programacion
            ,case when cd.fhEnvio is null then 'Sin Enviar' else concat('Enviado el ',cd.fhEnvio,' por ',m.Mensajeria, ' Status: ', cd.Estado, case when cd.Estado='Delivered' then concat(' Recibido Por ',cd.RecibidoPor,' el ',date_format(cd.FechaDeEntrega,'%d/%m/%Y')) else '' end )  end as Envio
            ,case when pr.nombre like '%Liverp%' and c.ConfirmadoGC=0 and c.DepositadoGC=0 then 'Tarjeta No Activada'
            when pr.nombre like '%Liverp%' and c.ConfirmadoGC=1 and c.DepositadoGC=0 then 'Tarjeta Confirmada. Por Depositar'
            when pr.nombre like '%Liverp%' and c.ConfirmadoGC=1 and c.DepositadoGC=1 then CONCAT('Tarjeta Activada el ' , ifnull((select concat(date_format(a.fhActivacion,'%d/%m/%Y'), ' (', a.noTarjeta , ')')  from Activaciones a where a.codPrograma=c.codPrograma and a.foliocanje=c.foliocanje LIMIT 1),'Desconocido')) else '' end as Comentario
            ,cd.noGuia as Guia,case when c.status=1 then 'Status Normal' else 'Cancelado' end as Status 
            from Canje c
            JOIN CanjeDetalle cd on c.codprograma=cd.codprograma and c.foliocanje=cd.foliocanje
            LEFT JOIN Participante p on p.idParticipante = c.idParticipante
            LEFT JOIN Premio pr on pr.codPremio = cd.codPremio
            LEFT JOIN Empresa e on e.codPrograma = p.codPrograma and e.codEmpresa = p.codEmpresa
            left join Mensajerias m on m.idMensajeria = cd.idMensajeria
            where c.cp = '".$info."'
            ORDER BY c.foliocanje ASC
        ";
        $query = $this->db->query($result);
        if($query){
            return $query->result_array();
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