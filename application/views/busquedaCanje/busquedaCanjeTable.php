        <?php if($dataCanje){?>
        <label for="canje">Canje: <span>Folio:<?php echo $dataCanje[0]['folioCanje'] ?></span></label>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">codPrograma</th>
                    <th scope="col">FolioCanje</th>
                    <th scope="col">Empresa</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Ver mas</th>
                    <th scope="col">Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php $count = 0; ?>
                <?php  foreach($dataCanje as $data){ ?>
                <tr>
                    <th scope="row"><?php echo $count++; ?></th>
                    <td><?php echo $data['codPrograma']; ?></td>
                    <td><?php echo $data['folioCanje']; ?></td>
                    <td><?php echo $data['empresa']; ?></td>
                    <td><?php echo $data['nombre']; ?></td>
                    <td><button id="id=<?php echo $data['folioCanje']; ?>"  type="button" class="info-data" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-info-circle"></i></button></td>
                    <td><button id="<?php echo $data['folioCanje']; ?>" type="button" class="info-data" data-toggle="modal" data-target="#ModalEdit"><i class="fas fa-edit"></i></button></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <?php }?>