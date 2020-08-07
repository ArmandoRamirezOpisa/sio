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
					<th scope="col">Mas info</th>
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
                    <td><button id="<?php echo $data['FolioCanje']; ?>"  type="button" class="info-data" data-toggle="modal" data-target="#moreInfo" onclick="verMasInfo(this)"><i class="fas fa-info-circle"></i></button></td>
					<td><button id="<?php echo $data['FolioCanje']; ?>"  type="button" class="info-data" data-toggle="modal" data-target="#ModalEdit" onclick="editarInfo(this)"><i class="fas fa-info-circle"></i></button></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <?php }?>
