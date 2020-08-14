        <?php if($dataCanje){?>
        <label for="canje">Canje: <span>Folio:<?php echo $dataCanje[0]['FolioCanje'] ?></span></label>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">codPrograma</th>
                    <th scope="col">FolioCanje</th>
                    <th scope="col">Cod Premio</th>
                    <th scope="col">Nombre Premio</th>
                    <th scope="col">Nombre Participante</th>
                    <th scope="col">Fecha Orden</th>
                    <th scope="col">Ver mas</th>
					<th scope="col">Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php  foreach($dataCanje as $data){ ?>
                <tr>
                    <td><?php echo $data['codPrograma']; ?></td>
                    <td><?php echo $data['FolioCanje']; ?></td>
                    <td><?php echo $data['codPremio']; ?></td>
					<td><?php echo $data['NombrePremio']; ?></td>
                    <td><?php echo $data['Nombre']; ?></td>
                    <td><?php echo $data['fhOrden']; ?></td>
					<td><a href="http://www.opisa.com/sio/Welcome/verMasCanje/?folio=<?php echo $data['FolioCanje']; ?>" target="_blank" class="info-data"><i class="fas fa-info-circle"></i></a></td>
                    <td><a href="http://www.opisa.com/sio/Welcome/detalleCanje/?folio=<?php echo $data['FolioCanje']; ?>" target="_blank" class="info-data"><i class="fas fa-info-circle"></i></a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <?php }?>
