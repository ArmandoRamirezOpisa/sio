						<?php if($mensajerias){ ?>
						<select class="form-control" id="mensajeria">
							<?php foreach($mensajerias as $mensajeria){ ?>
							<option value="<?php echo $mensajeria['idMensajeria']; ?>"><?php echo $mensajeria['mensajeria']; ?></option>
							<?php } ?>
    					</select>
						<?php } ?>
