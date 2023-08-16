<h1 class="titulo-principal"><i class="fas fa-cogs"></i> <?php echo $this->titlesection; ?></h1>
<div class="container-fluid">
	<form action="<?php echo $this->route; ?>" method="post">
		<div class="content-dashboard">
			<div class="row">
				<div class="col-3">
					<label>T&iacute;tulo</label>
					<label class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text input-icono fondo-rosado "><i class="fas fa-pencil-alt"></i></span>
						</div>
						<input type="text" class="form-control" name="contactenos_titulo" value="<?php echo $this->getObjectVariable($this->filters, 'contactenos_titulo') ?>"></input>
					</label>
				</div>
				<div class="col-3">
					<label>Imagen fondo del cuadro</label>
					<label class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text input-icono fondo-azul-claro "><i class="fas fa-pencil-alt"></i></span>
						</div>
						<input type="text" class="form-control" name="contactenos_cuadro_img_fondo" value="<?php echo $this->getObjectVariable($this->filters, 'contactenos_cuadro_img_fondo') ?>"></input>
					</label>
				</div>
				<div class="col-3">
					<label>&nbsp;</label>
					<button type="submit" class="btn btn-block btn-azul"> <i class="fas fa-filter"></i> Filtrar</button>
				</div>
				<div class="col-3">
					<label>&nbsp;</label>
					<a class="btn btn-block btn-azul-claro " href="<?php echo $this->route; ?>?cleanfilter=1"> <i class="fas fa-eraser"></i> Limpiar Filtro</a>
				</div>
			</div>
		</div>
	</form>
	<div align="center">
		<ul class="pagination justify-content-center">
			<?php
			$url = $this->route;
			if ($this->totalpages > 1) {
				if ($this->page != 1)
					echo '<li class="page-item" ><a class="page-link"  href="' . $url . '?page=' . ($this->page - 1) . '"> &laquo; Anterior </a></li>';
				for ($i = 1; $i <= $this->totalpages; $i++) {
					if ($this->page == $i)
						echo '<li class="active page-item"><a class="page-link">' . $this->page . '</a></li>';
					else
						echo '<li class="page-item"><a class="page-link" href="' . $url . '?page=' . $i . '">' . $i . '</a></li>  ';
				}
				if ($this->page != $this->totalpages)
					echo '<li class="page-item"><a class="page-link" href="' . $url . '?page=' . ($this->page + 1) . '">Siguiente &raquo;</a></li>';
			}
			?>
		</ul>
	</div>
	<div class="content-dashboard">
		<div class="franja-paginas">
			<div class="row">
				<div class="col-5">
					<div class="titulo-registro">Se encontraron <?php echo $this->register_number; ?> Registros</div>
				</div>
				<div class="col-3 text-right">
					<div class="texto-paginas">Registros por pagina:</div>
				</div>
				<div class="col-1">
					<select class="form-control form-control-sm selectpagination">
						<option value="20" <?php if ($this->pages == 20) {
												echo 'selected';
											} ?>>20</option>
						<option value="30" <?php if ($this->pages == 30) {
												echo 'selected';
											} ?>>30</option>
						<option value="50" <?php if ($this->pages == 50) {
												echo 'selected';
											} ?>>50</option>
						<option value="100" <?php if ($this->pages == 100) {
												echo 'selected';
											} ?>>100</option>
					</select>
				</div>
				<div class="col-3">
					<div class="text-right"><a class="btn btn-sm btn-success" href="<?php echo $this->route . "\manage" ?><?php if ($this->padre) {
																																echo "?padre=" . $this->padre;
																															} ?><?php if ($this->tipo) {
																																	echo "&tipo=" . $this->tipo;
																																} ?>"> <i class="fas fa-plus-square"></i> Crear Nuevo</a></div>
				</div>
			</div>
		</div>
		<div class="content-table">
			<table class=" table table-striped  table-hover table-administrator text-left">
				<thead>
					<tr>
						<td>T&iacute;tulo</td>
						<?php if ($this->padre) { ?>

							<td width="100">Orden</td>
						<?php } ?>

						<td></td>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($this->lists as $content) { ?>
						<?php $id =  $content->contactenos_id; ?>
						<!-- <?php print_r($content); ?>  -->


						<tr>

							<td><?= $this->padre ? $content->contactenos_titulo_interno : $content->contactenos_titulo; ?></td>
							<?php if ($this->padre) { ?>

								<td>
									<input type="hidden" id="<?= $id; ?>" value="<?= $content->orden; ?>"></input>
									<button class="up_table btn btn-primary btn-sm"><i class="fas fa-angle-up"></i></button>
									<button class="down_table btn btn-primary btn-sm"><i class="fas fa-angle-down"></i></button>
								</td>
							<?php } ?>

							<td class="text-end">
								<div>
									<?php if (!$this->padre) { ?>
										<a class="btn btn-rosado btn-sm" href="<?php echo $this->route; ?>/?padre=<?= $id ?>" data-bs-toggle="tooltip" data-placement="top" title="Agregar"><i class="fas fa-columns"></i></a>
									<?php } ?>
									<?php if ($this->padre) { ?>

										<?php if ($content->tipo == 1) { ?>

											<a class="btn btn-verde btn-sm" href="/administracion/imagenes?album=<?= $id ?>" data-bs-toggle="tooltip" data-placement="top" title="Agregar"><i class="fas fa-image"></i></a>
										<?php } ?>
										<?php if ($content->tipo == 2) { ?>

											<a class="btn btn-rosado btn-sm" href="<?php echo $this->route; ?>/?padre=<?= $id ?>&tipo=2" data-bs-toggle="tooltip" data-placement="top" title="Agregar"><i class="fas fa-plus"></i></a>
										<?php } ?>
										<?php if ($content->tipo == 4) { ?>

											<a class="btn btn-morado btn-sm" href="/administracion/imagenes?album=<?= $id ?>" data-bs-toggle="tooltip" data-placement="top" title="Agregar imágenes"><i class="fas fa-images"></i></a>
										<?php } ?>

									<?php } ?>


									<a class="btn btn-azul btn-sm" href="<?php echo $this->route; ?>/manage?id=<?= $id ?><?php if ($this->padre) {
																																echo "&padre=" . $this->padre;
																															} ?>" data-bs-toggle="tooltip" data-placement="top" title="Editar"><i class="fas fa-pen-alt"></i></a>
									<span data-bs-toggle="tooltip" data-placement="top" title="Eliminar"><a class="btn btn-rojo btn-sm" data-bs-toggle="modal" data-bs-target="#modal<?= $id ?>"><i class="fas fa-trash-alt"></i></a></span>
								</div>
								<!-- Modal -->
								<div class="modal fade text-left" id="modal<?= $id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

											</div>
											<div class="modal-body">
												<div class="">¿Esta seguro de eliminar este registro?</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-bs-dismiss="modal">Cancelar</button>
												<a class="btn btn-danger" href="<?php echo $this->route; ?>/delete?id=<?= $id ?>&csrf=<?= $this->csrf; ?><?php echo ''; ?>">Eliminar</a>
											</div>
										</div>
									</div>
								</div>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
		<input type="hidden" id="csrf" value="<?php echo $this->csrf ?>">
		<input type="hidden" id="order-route" value="<?php echo $this->route; ?>/order"><input type="hidden" id="page-route" value="<?php echo $this->route; ?>/changepage">
	</div>
	<div align="center">
		<ul class="pagination justify-content-center">
			<?php
			$url = $this->route;
			if ($this->totalpages > 1) {
				if ($this->page != 1)
					echo '<li class="page-item"><a class="page-link" href="' . $url . '?page=' . ($this->page - 1) . '"> &laquo; Anterior </a></li>';
				for ($i = 1; $i <= $this->totalpages; $i++) {
					if ($this->page == $i)
						echo '<li class="active page-item"><a class="page-link">' . $this->page . '</a></li>';
					else
						echo '<li class="page-item"><a class="page-link" href="' . $url . '?page=' . $i . '">' . $i . '</a></li>  ';
				}
				if ($this->page != $this->totalpages)
					echo '<li class="page-item"><a class="page-link" href="' . $url . '?page=' . ($this->page + 1) . '">Siguiente &raquo;</a></li>';
			}
			?>
		</ul>
	</div>
</div>