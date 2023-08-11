<h1 class="titulo-principal"><i class="fas fa-cogs"></i> <?php echo $this->titlesection; ?></h1>
<div class="container-fluid">
	<form class="text-left" enctype="multipart/form-data" method="post" action="<?php echo $this->routeform; ?>" data-bs-toggle="validator">
		<div class="content-dashboard">
			<input type="hidden" name="csrf" id="csrf" value="<?php echo $this->csrf ?>">
			<input type="hidden" name="csrf_section" id="csrf_section" value="<?php echo $this->csrf_section ?>">
			<?php if ($this->content->ruleta_id) { ?>
				<input type="hidden" name="id" id="id" value="<?= $this->content->ruleta_id; ?>" />
			<?php } ?>
			<div class="row ">
				<p class="fs-2 text-muted fw-bold">Opciones principales</p>

				<div class="col-12 col-md-3 form-group">

					<label for="ruleta_icono_principal">Icono principal</label>
					<input type="file" name="ruleta_icono_principal" id="ruleta_icono_principal" class="form-control  file-image" data-buttonName="btn-primary" accept="image/gif, image/jpg, image/jpeg, image/png">
					<div class="help-block with-errors"></div>
					<?php if ($this->content->ruleta_icono_principal) { ?>
						<div id="imagen_ruleta_icono_principal">
							<img src="/images/<?= $this->content->ruleta_icono_principal; ?>" class="img-thumbnail thumbnail-administrator" />
							<div><button class="btn btn-danger btn-sm" type="button" onclick="eliminarImagen('ruleta_icono_principal','<?php echo $this->route . "/deleteimage"; ?>')"><i class="glyphicon glyphicon-remove"></i> Eliminar Imagen</button></div>
						</div>
					<?php } ?>

				</div>
				<div class="col-12 col-md-3 form-group">
					<label for="ruleta_color_fondo1" class="control-label">Color de fondo rectangulo 1</label>
					<label class="input-group">

						<input type="text" value="<?= $this->content->ruleta_color_fondo1; ?>" name="ruleta_color_fondo1" id="ruleta_color_fondo1" class="form-control  form-control-color">
					</label>
					<div class="help-block with-errors"></div>
				</div>

				<div class="col-12 col-md-3 form-group">
					<label for="ruleta_color_txt1" class="control-label">Color del texto rectangulo 1</label>
					<label class="input-group">

						<input type="text" value="<?= $this->content->ruleta_color_txt1; ?>" name="ruleta_color_txt1" id="ruleta_color_txt1" class="form-control form-control-color">
					</label>
					<div class="help-block with-errors"></div>
				</div>
				<div class="col-12 col-md-3 form-group d-grid h-50">
					<label class="control-label">Activo</label>
					<input type="checkbox" name="ruleta_estado" value="1" class="form-control switch-form " <?php if ($this->getObjectVariable($this->content, 'ruleta_estado') == 1) {
																												echo "checked";
																											} ?>></input>
					<div class="help-block with-errors"></div>
				</div>
			</div>
			<hr>

			<div class="row mt-5">
				<p class="fs-2 text-muted fw-bold">Contenido primer bloque</p>


				<p class="fs-5 text-muted fw-bold">Ajustes título principal y título categorías destacadas, de la parte izquierda</p>

				<div class="col-12 col-md-2 form-group">
					<label for="ruleta_fendyshop_txt" class="control-label">Titulo principal</label>
					<label class="input-group">

						<input type="text" value="<?= $this->content->ruleta_fendyshop_txt; ?>" name="ruleta_fendyshop_txt" id="ruleta_fendyshop_txt" class="form-control">
					</label>
					<div class="help-block with-errors"></div>
				</div>
				<div class="col-12 col-md-2 form-group">
					<label for="ruleta_enlace_principal" class="control-label">Enlace principal</label>
					<label class="input-group">

						<input type="text" value="<?= $this->content->ruleta_enlace_principal; ?>" name="ruleta_enlace_principal" id="ruleta_enlace_principal" class="form-control">
					</label>
					<div class="help-block with-errors"></div>
				</div>

				<div class="col-12 col-md-2 form-group">



					<label for="ruleta_fendyshop_fondo" class="control-label">Color del fondo icono principal</label>
					<label class="input-group">

						<input type="text" value="<?= $this->content->ruleta_fendyshop_fondo; ?>" name="ruleta_fendyshop_fondo" id="ruleta_fendyshop_fondo" class="form-control form-control-color">
					</label>
					<div class="help-block with-errors"></div>
				</div>


				<div class="col-12 col-md-2  form-group">
					<label for="ruleta_categorias" class="control-label">Título categorias</label>
					<label class="input-group">

						<input type="text" value="<?= $this->content->ruleta_categorias; ?>" name="ruleta_categorias" id="ruleta_categorias" class="form-control ">
					</label>
					<div class="help-block with-errors"></div>


				</div>
				<div class="col-12 col-md-4 form-group">
					<label for="ruleta_fendyshop_icono">Icono titulo princpal</label>
					<input type="file" name="ruleta_fendyshop_icono" id="ruleta_fendyshop_icono" class="form-control  file-image" data-buttonName="btn-primary" accept="image/gif, image/jpg, image/jpeg, image/png">
					<div class="help-block with-errors"></div>
					<?php if ($this->content->ruleta_fendyshop_icono) { ?>
						<div id="imagen_ruleta_fendyshop_icono">
							<img src="/images/<?= $this->content->ruleta_fendyshop_icono; ?>" class="img-thumbnail thumbnail-administrator" />
							<div><button class="btn btn-danger btn-sm" type="button" onclick="eliminarImagen('ruleta_fendyshop_icono','<?php echo $this->route . "/deleteimage"; ?>')"><i class="glyphicon glyphicon-remove"></i> Eliminar Imagen</button></div>
						</div>
					<?php } ?>
				</div>
			</div>
			<div class="row">
				<p class="fs-5 text-muted fw-bold">Ajustes primer categoría destacada</p>

				<div class="col-12 col-md-2 form-group">
					<label for="ruleta_categoria1" class="control-label">Titulo categoria 1</label>
					<label class="input-group">

						<input type="text" value="<?= $this->content->ruleta_categoria1; ?>" name="ruleta_categoria1" id="ruleta_categoria1" class="form-control">
					</label>
					<div class="help-block with-errors"></div>
				</div>
				<div class="col-12 col-md-2 form-group">
					<label for="ruleta_enlace_cat1" class="control-label">Enlace categoria 1</label>
					<label class="input-group">

						<input type="text" value="<?= $this->content->ruleta_enlace_cat1; ?>" name="ruleta_enlace_cat1" id="ruleta_enlace_cat1" class="form-control">
					</label>
					<div class="help-block with-errors"></div>
				</div>

				<div class="col-12 col-md-2 form-group">
					<label for="ruleta_categoria1_color" class="control-label">Color fondo categoría 1</label>
					<label class="input-group">

						<input type="text" value="<?= $this->content->ruleta_categoria1_color; ?>" name="ruleta_categoria1_color" id="ruleta_categoria1_color" class="form-control form-control-color">
					</label>
					<div class="help-block with-errors"></div>
				</div>

				<div class="col-12 col-md-2 form-group">
					<label class="control-label">Categoria 1 abrir</label>
					<label class="input-group">

						<select class="form-control" name="ruleta_categoria1_abrir">
							<option value="">Seleccione...</option>
							<?php foreach ($this->list_ruleta_categoria1_abrir as $key => $value) { ?>
								<option <?php if ($this->getObjectVariable($this->content, "ruleta_categoria1_abrir") == $key) {
											echo "selected";
										} ?> value="<?php echo $key; ?>" /> <?= $value; ?></option>
							<?php } ?>
						</select>
					</label>
					<div class="help-block with-errors"></div>
				</div>
				<div class="col-12 col-md-4 form-group">
					<label for="ruleta_categoria1_img">Icono categoría 1</label>
					<input type="file" name="ruleta_categoria1_img" id="ruleta_categoria1_img" class="form-control  file-image" data-buttonName="btn-primary" accept="image/gif, image/jpg, image/jpeg, image/png">
					<div class="help-block with-errors"></div>
					<?php if ($this->content->ruleta_categoria1_img) { ?>
						<div id="imagen_ruleta_categoria1_img">
							<img src="/images/<?= $this->content->ruleta_categoria1_img; ?>" class="img-thumbnail thumbnail-administrator" />
							<div><button class="btn btn-danger btn-sm" type="button" onclick="eliminarImagen('ruleta_categoria1_img','<?php echo $this->route . "/deleteimage"; ?>')"><i class="glyphicon glyphicon-remove"></i> Eliminar Imagen</button></div>
						</div>
					<?php } ?>
				</div>
			</div>
			<div class="row">
				<p class="fs-5 text-muted fw-bold">Ajustes segunda categoría destacada</p>

				<div class="col-12 col-md-2 form-group">
					<label for="ruleta_categoria2" class="control-label">Titulo categoria 2</label>
					<label class="input-group">

						<input type="text" value="<?= $this->content->ruleta_categoria2; ?>" name="ruleta_categoria2" id="ruleta_categoria2" class="form-control">
					</label>
					<div class="help-block with-errors"></div>
				</div>
				<div class="col-12 col-md-2 form-group">
					<label for="ruleta_enlace_cat2" class="control-label">Enlace categoria 2</label>
					<label class="input-group">

						<input type="text" value="<?= $this->content->ruleta_enlace_cat2; ?>" name="ruleta_enlace_cat2" id="ruleta_enlace_cat2" class="form-control">
					</label>
					<div class="help-block with-errors"></div>
				</div>

				<div class="col-12 col-md-2 form-group">
					<label for="ruleta_categoria2_color" class="control-label">Color fondo categoría 2</label>
					<label class="input-group">

						<input type="text" value="<?= $this->content->ruleta_categoria2_color; ?>" name="ruleta_categoria2_color" id="ruleta_categoria2_color" class="form-control form-control-color">
					</label>
					<div class="help-block with-errors"></div>
				</div>

				<div class="col-12 col-md-2 form-group">
					<label class="control-label">Categoria 2 abrir</label>
					<label class="input-group">

						<select class="form-control" name="ruleta_categoria2_abrir">
							<option value="">Seleccione...</option>
							<?php foreach ($this->list_ruleta_categoria2_abrir as $key => $value) { ?>
								<option <?php if ($this->getObjectVariable($this->content, "ruleta_categoria2_abrir") == $key) {
											echo "selected";
										} ?> value="<?php echo $key; ?>" /> <?= $value; ?></option>
							<?php } ?>
						</select>
					</label>
					<div class="help-block with-errors"></div>
				</div>
				<div class="col-12 col-md-4 form-group">
					<label for="ruleta_categoria2_img">Icono categoría 2</label>
					<input type="file" name="ruleta_categoria2_img" id="ruleta_categoria2_img" class="form-control  file-image" data-buttonName="btn-primary" accept="image/gif, image/jpg, image/jpeg, image/png">
					<div class="help-block with-errors"></div>
					<?php if ($this->content->ruleta_categoria2_img) { ?>
						<div id="imagen_ruleta_categoria2_img">
							<img src="/images/<?= $this->content->ruleta_categoria2_img; ?>" class="img-thumbnail thumbnail-administrator" />
							<div><button class="btn btn-danger btn-sm" type="button" onclick="eliminarImagen('ruleta_categoria2_img','<?php echo $this->route . "/deleteimage"; ?>')"><i class="glyphicon glyphicon-remove"></i> Eliminar Imagen</button></div>
						</div>
					<?php } ?>
				</div>
			</div>
			<div class="row">
				<p class="fs-5 text-muted fw-bold">Ajustes tercera categoría destacada</p>

				<div class="col-12 col-md-2 form-group">
					<label for="ruleta_categoria3" class="control-label">Titulo categoria 3</label>
					<label class="input-group">

						<input type="text" value="<?= $this->content->ruleta_categoria3; ?>" name="ruleta_categoria3" id="ruleta_categoria3" class="form-control">
					</label>
					<div class="help-block with-errors"></div>
				</div>
				<div class="col-12 col-md-2 form-group">
					<label for="ruleta_enlace_cat3" class="control-label">Enlace categoria 3</label>
					<label class="input-group">

						<input type="text" value="<?= $this->content->ruleta_enlace_cat3; ?>" name="ruleta_enlace_cat3" id="ruleta_enlace_cat3" class="form-control">
					</label>
					<div class="help-block with-errors"></div>
				</div>

				<div class="col-12 col-md-2 form-group">
					<label for="ruleta_categoria3_color" class="control-label">Color fondo categoría 3</label>
					<label class="input-group">

						<input type="text" value="<?= $this->content->ruleta_categoria3_color; ?>" name="ruleta_categoria3_color" id="ruleta_categoria3_color" class="form-control form-control-color">
					</label>
					<div class="help-block with-errors"></div>
				</div>

				<div class="col-12 col-md-2 form-group">
					<label class="control-label">Categoria 3 abrir</label>
					<label class="input-group">

						<select class="form-control" name="ruleta_categoria3_abrir">
							<option value="">Seleccione...</option>
							<?php foreach ($this->list_ruleta_categoria3_abrir as $key => $value) { ?>
								<option <?php if ($this->getObjectVariable($this->content, "ruleta_categoria3_abrir") == $key) {
											echo "selected";
										} ?> value="<?php echo $key; ?>" /> <?= $value; ?></option>
							<?php } ?>
						</select>
					</label>
					<div class="help-block with-errors"></div>
				</div>
				<div class="col-12 col-md-4 form-group">
					<label for="ruleta_categoria3_img">Icono categoría 3</label>
					<input type="file" name="ruleta_categoria3_img" id="ruleta_categoria3_img" class="form-control  file-image" data-buttonName="btn-primary" accept="image/gif, image/jpg, image/jpeg, image/png">
					<div class="help-block with-errors"></div>
					<?php if ($this->content->ruleta_categoria3_img) { ?>
						<div id="imagen_ruleta_categoria3_img">
							<img src="/images/<?= $this->content->ruleta_categoria3_img; ?>" class="img-thumbnail thumbnail-administrator" />
							<div><button class="btn btn-danger btn-sm" type="button" onclick="eliminarImagen('ruleta_categoria3_img','<?php echo $this->route . "/deleteimage"; ?>')"><i class="glyphicon glyphicon-remove"></i> Eliminar Imagen</button></div>
						</div>
					<?php } ?>
				</div>
			</div>





			<hr>


			<div class="row mt-5">
				<p class="fs-2 text-muted fw-bold">Contenido segundo bloque</p>
				<p class="fs-5 text-muted fw-bold">Ajustes generales de la sección</p>


				<div class="col-12 col-md-3 form-group">
					<label for="ruleta_color_fondo3" class="control-label">Color de fondo rectangulo 3</label>
					<label class="input-group">

						<input type="text" value="<?= $this->content->ruleta_color_fondo3; ?>" name="ruleta_color_fondo3" id="ruleta_color_fondo3" class="form-control form-control-color">
					</label>
					<div class="help-block with-errors"></div>
				</div>
				<div class="col-12 col-md-3 form-group">
					<label for="ruleta_color_txt3" class="control-label">Color del texto rectangulo 3</label>
					<label class="input-group">

						<input type="text" value="<?= $this->content->ruleta_color_txt3; ?>" name="ruleta_color_txt3" id="ruleta_color_txt3" class="form-control form-control-color">
					</label>
					<div class="help-block with-errors"></div>
				</div>
				<div class="col-12 col-md-3 form-group">
					<label for="ruleta_color_bandera" class="control-label">Color de la bandera</label>
					<label class="input-group">

						<input type="text" value="<?= $this->content->ruleta_color_bandera; ?>" name="ruleta_color_bandera" id="ruleta_color_bandera" class="form-control form-control-color">
					</label>
					<div class="help-block with-errors"></div>
				</div>
				<div class="col-12 col-md-3 form-group">
					<label for="ruleta_color_ruleta" class="control-label">Color de la ruleta</label>
					<label class="input-group">

						<input type="text" value="<?= $this->content->ruleta_color_ruleta; ?>" name="ruleta_color_ruleta" id="ruleta_color_ruleta" class="form-control form-control-color">
					</label>
					<div class="help-block with-errors"></div>
				</div>
			</div>
			<div class="row mt-5">

				<p class="fs-5 text-muted fw-bold">Ajustes texto de información (Se encuentra del lado izquierdo, debajo del texto)</p>
				<div class="col-12 col-md-3 form-group">
					<label for="ruleta_txt_info" class="control-label">Texto información</label>
					<label class="input-group">

						<input type="text" value="<?= $this->content->ruleta_txt_info; ?>" name="ruleta_txt_info" id="ruleta_txt_info" class="form-control">
					</label>
					<div class="help-block with-errors"></div>
				</div>
				<div class="col-12 col-md-3 form-group">
					<label for="ruleta_enlace_info" class="control-label">Enlace información</label>
					<label class="input-group">

						<input type="text" value="<?= $this->content->ruleta_enlace_info; ?>" name="ruleta_enlace_info" id="ruleta_enlace_info" class="form-control">
					</label>
					<div class="help-block with-errors"></div>
				</div>
				<div class="col-12 col-md-3 form-group">
					<label for="ruleta_color_info" class="control-label">Color texto información</label>
					<label class="input-group">

						<input type="text" value="<?= $this->content->ruleta_color_info; ?>" name="ruleta_color_info" id="ruleta_color_info" class="form-control form-control-color">
					</label>
					<div class="help-block with-errors"></div>
				</div>
				<div class="col-12 col-md-3 form-group">
					<label for="ruleta_img_info">Icono información</label>
					<input type="file" name="ruleta_img_info" id="ruleta_img_info" class="form-control  file-image" data-buttonName="btn-primary" accept="image/gif, image/jpg, image/jpeg, image/png">
					<div class="help-block with-errors"></div>
					<?php if ($this->content->ruleta_img_info) { ?>
						<div id="imagen_ruleta_img_info">
							<img src="/images/<?= $this->content->ruleta_img_info; ?>" class="img-thumbnail thumbnail-administrator" />
							<div><button class="btn btn-danger btn-sm" type="button" onclick="eliminarImagen('ruleta_img_info','<?php echo $this->route . "/deleteimage"; ?>')"><i class="glyphicon glyphicon-remove"></i> Eliminar Imagen</button></div>
						</div>
					<?php } ?>
				</div>
				<div class="row mt-5">

					<p class="fs-5 text-muted fw-bold">Ajustes título links de interés (Se encuentra del lado derecho)</p>

					<div class="col-12 col-md-3 form-group">
						<label for="ruleta_txt_links_interes" class="control-label">Texto links de interes</label>
						<label class="input-group">

							<input type="text" value="<?= $this->content->ruleta_txt_links_interes; ?>" name="ruleta_txt_links_interes" id="ruleta_txt_links_interes" class="form-control">
						</label>
						<div class="help-block with-errors"></div>
					</div>
					<div class="col-12 col-md-3 form-group">
						<label for="ruleta_fondo_iconos" class="control-label">Color fondo enlaces de interés</label>
						<label class="input-group">

							<input type="text" value="<?= $this->content->ruleta_fondo_iconos; ?>" name="ruleta_fondo_iconos" id="ruleta_fondo_iconos" class="form-control form-control-color">
						</label>
						<div class="help-block with-errors"></div>
					</div>
				</div>

				<div class="row mt-5">

					<p class="fs-5 text-muted fw-bold">Ajustes texto de información (Se encuentra del lado izquierdo, debajo del texto)</p>
					<div class="col-12 col-md-2 form-group">
						<label for="ruleta_txt_link1" class="control-label">Texto link de interes 1</label>
						<label class="input-group">

							<input type="text" value="<?= $this->content->ruleta_txt_link1; ?>" name="ruleta_txt_link1" id="ruleta_txt_link1" class="form-control">
						</label>
						<div class="help-block with-errors"></div>
					</div>
					<div class="col-12 col-md-2 form-group">
						<label for="ruleta_enlace_link1" class="control-label">Enlace link de interes 1</label>
						<label class="input-group">

							<input type="text" value="<?= $this->content->ruleta_enlace_link1; ?>" name="ruleta_enlace_link1" id="ruleta_enlace_link1" class="form-control">
						</label>
						<div class="help-block with-errors"></div>
					</div>

					<div class="col-12 col-md-2 form-group">
						<label for="ruleta_fondo_link1" class="control-label">Color fondo link de interés 1</label>
						<label class="input-group">

							<input type="text" value="<?= $this->content->ruleta_fondo_link1; ?>" name="ruleta_fondo_link1" id="ruleta_fondo_link1" class="form-control form-control-color">
						</label>
						<div class="help-block with-errors"></div>
					</div>
					<div class="col-12 col-md-2 form-group">
						<label class="control-label">Abrir link de interés 1</label>
						<label class="input-group">

							<select class="form-control" name="ruleta_abrir_link1">
								<option value="">Seleccione...</option>
								<?php foreach ($this->list_ruleta_abrir_link1 as $key => $value) { ?>
									<option <?php if ($this->getObjectVariable($this->content, "ruleta_abrir_link1") == $key) {
												echo "selected";
											} ?> value="<?php echo $key; ?>" /> <?= $value; ?></option>
								<?php } ?>
							</select>
						</label>
						<div class="help-block with-errors"></div>
					</div>
					<div class="col-12 col-md-4 form-group">
						<label for="ruleta_img_link1">Icono link de interés 1</label>
						<input type="file" name="ruleta_img_link1" id="ruleta_img_link1" class="form-control  file-image" data-buttonName="btn-primary" accept="image/gif, image/jpg, image/jpeg, image/png">
						<div class="help-block with-errors"></div>
						<?php if ($this->content->ruleta_img_link1) { ?>
							<div id="imagen_ruleta_img_link1">
								<img src="/images/<?= $this->content->ruleta_img_link1; ?>" class="img-thumbnail thumbnail-administrator" />
								<div><button class="btn btn-danger btn-sm" type="button" onclick="eliminarImagen('ruleta_img_link1','<?php echo $this->route . "/deleteimage"; ?>') "><i class="glyphicon glyphicon-remove"></i> Eliminar Imagen</button></div>
							</div>
						<?php } ?>
					</div>
				</div>
				<div class="row mt-5">

					<p class="fs-5 text-muted fw-bold">Ajustes generales de la sección</p>
					<div class="col-12 col-md-2 form-group">
						<label for="ruleta_txt_link2" class="control-label">Texto link de interes 2</label>
						<label class="input-group">

							<input type="text" value="<?= $this->content->ruleta_txt_link2; ?>" name="ruleta_txt_link2" id="ruleta_txt_link2" class="form-control">
						</label>
						<div class="help-block with-errors"></div>
					</div>
					<div class="col-12 col-md-2 form-group">
						<label for="ruleta_enlace_link2" class="control-label">Enlace link de interes 2</label>
						<label class="input-group">

							<input type="text" value="<?= $this->content->ruleta_enlace_link2; ?>" name="ruleta_enlace_link2" id="ruleta_enlace_link2" class="form-control">
						</label>
						<div class="help-block with-errors"></div>
					</div>

					<div class="col-12 col-md-2 form-group">
						<label for="ruleta_fondo_link2" class="control-label">Color fondo link de interés 2</label>
						<label class="input-group">

							<input type="text" value="<?= $this->content->ruleta_fondo_link2; ?>" name="ruleta_fondo_link2" id="ruleta_fondo_link2" class="form-control form-control-color">
						</label>
						<div class="help-block with-errors"></div>
					</div>
					<div class="col-12 col-md-2 form-group">
						<label class="control-label">Abrir link de interés 2</label>
						<label class="input-group">

							<select class="form-control" name="ruleta_abrir_link2">
								<option value="">Seleccione...</option>
								<?php foreach ($this->list_ruleta_abrir_link2 as $key => $value) { ?>
									<option <?php if ($this->getObjectVariable($this->content, "ruleta_abrir_link2") == $key) {
												echo "selected";
											} ?> value="<?php echo $key; ?>" /> <?= $value; ?></option>
								<?php } ?>
							</select>
						</label>
						<div class="help-block with-errors"></div>
					</div>
					<div class="col-12 col-md-4 form-group">
						<label for="ruleta_img_link2">Icono link de interés 2</label>
						<input type="file" name="ruleta_img_link2" id="ruleta_img_link2" class="form-control  file-image" data-buttonName="btn-primary" accept="image/gif, image/jpg, image/jpeg, image/png">
						<div class="help-block with-errors"></div>
						<?php if ($this->content->ruleta_img_link2) { ?>
							<div id="imagen_ruleta_img_link2">
								<img src="/images/<?= $this->content->ruleta_img_link2; ?>" class="img-thumbnail thumbnail-administrator" />
								<div><button class="btn btn-danger btn-sm" type="button" onclick="eliminarImagen('ruleta_img_link2','<?php echo $this->route . "/deleteimage"; ?>')"><i class="glyphicon glyphicon-remove"></i> Eliminar Imagen</button></div>
							</div>
						<?php } ?>
					</div>
				</div>
				<div class="row mt-5">

					<p class="fs-5 text-muted fw-bold">Ajustes generales de la sección</p>
					<div class="col-12 col-md-2 form-group">
						<label for="ruleta_txt_link3" class="control-label">Texto link de interes 3</label>
						<label class="input-group">

							<input type="text" value="<?= $this->content->ruleta_txt_link3; ?>" name="ruleta_txt_link3" id="ruleta_txt_link3" class="form-control">
						</label>
						<div class="help-block with-errors"></div>
					</div>
					<div class="col-12 col-md-2 form-group">
						<label for="ruleta_enlace_link3" class="control-label">Enlace link de interes 3</label>
						<label class="input-group">

							<input type="text" value="<?= $this->content->ruleta_enlace_link3; ?>" name="ruleta_enlace_link3" id="ruleta_enlace_link3" class="form-control">
						</label>
						<div class="help-block with-errors"></div>
					</div>

					<div class="col-12 col-md-2 form-group">
						<label for="ruleta_fondo_link3" class="control-label">Color fondo link de interés 3</label>
						<label class="input-group">

							<input type="text" value="<?= $this->content->ruleta_fondo_link3; ?>" name="ruleta_fondo_link3" id="ruleta_fondo_link3" class="form-control form-control-color">
						</label>
						<div class="help-block with-errors"></div>
					</div>
					<div class="col-12 col-md-2 form-group">
						<label class="control-label">Abrir link de interés 3</label>
						<label class="input-group">

							<select class="form-control" name="ruleta_abrir_link3">
								<option value="">Seleccione...</option>
								<?php foreach ($this->list_ruleta_abrir_link3 as $key => $value) { ?>
									<option <?php if ($this->getObjectVariable($this->content, "ruleta_abrir_link3") == $key) {
												echo "selected";
											} ?> value="<?php echo $key; ?>" /> <?= $value; ?></option>
								<?php } ?>
							</select>
						</label>
						<div class="help-block with-errors"></div>
					</div>
					<div class="col-12 col-md-4 form-group">
						<label for="ruleta_img_link3">Icono link de interés 3</label>
						<input type="file" name="ruleta_img_link3" id="ruleta_img_link3" class="form-control  file-image" data-buttonName="btn-primary" accept="image/gif, image/jpg, image/jpeg, image/png">
						<div class="help-block with-errors"></div>
						<?php if ($this->content->ruleta_img_link3) { ?>
							<div id="imagen_ruleta_img_link3">
								<img src="/images/<?= $this->content->ruleta_img_link3; ?>" class="img-thumbnail thumbnail-administrator" />
								<div><button class="btn btn-danger btn-sm" type="button" onclick="eliminarImagen('ruleta_img_link3','<?php echo $this->route . "/deleteimage"; ?>')"><i class="glyphicon glyphicon-remove"></i> Eliminar Imagen</button></div>
							</div>
						<?php } ?>
					</div>
				</div>
				<div class="row mt-5">

					<p class="fs-5 text-muted fw-bold">Ajustes generales de la sección</p>
					<div class="col-12 col-md-3 form-group">
						<label for="ruleta_img_cabezon">Imagen cabezón</label>
						<input type="file" name="ruleta_img_cabezon" id="ruleta_img_cabezon" class="form-control  file-image" data-buttonName="btn-primary" accept="image/gif, image/jpg, image/jpeg, image/png">
						<div class="help-block with-errors"></div>
						<?php if ($this->content->ruleta_img_cabezon) { ?>
							<div id="imagen_ruleta_img_cabezon">
								<img src="/images/<?= $this->content->ruleta_img_cabezon; ?>" class="img-thumbnail thumbnail-administrator" />
								<div><button class="btn btn-danger btn-sm" type="button" onclick="eliminarImagen('ruleta_img_cabezon','<?php echo $this->route . "/deleteimage"; ?>')"><i class="glyphicon glyphicon-remove"></i> Eliminar Imagen</button></div>
							</div>
						<?php } ?>
					</div>
					<div class="col-12 col-md-3 form-group">
						<label for="ruleta_img_fondocabezon">Imagen fondo cabezón</label>
						<input type="file" name="ruleta_img_fondocabezon" id="ruleta_img_fondocabezon" class="form-control  file-image" data-buttonName="btn-primary" accept="image/gif, image/jpg, image/jpeg, image/png">
						<div class="help-block with-errors"></div>
						<?php if ($this->content->ruleta_img_fondocabezon) { ?>
							<div id="imagen_ruleta_img_fondocabezon">
								<img src="/images/<?= $this->content->ruleta_img_fondocabezon; ?>" class="img-thumbnail thumbnail-administrator" />
								<div><button class="btn btn-danger btn-sm" type="button" onclick="eliminarImagen('ruleta_img_fondocabezon','<?php echo $this->route . "/deleteimage"; ?>')"><i class="glyphicon glyphicon-remove"></i> Eliminar Imagen</button></div>
							</div>
						<?php } ?>
					</div>

					<div class="col-12 form-group">
						<label for="ruleta_descripcion" class="form-label">Descripción</label>
						<textarea name="ruleta_descripcion" id="ruleta_descripcion" class="form-control tinyeditor mt-5" row="10"><?= $this->content->ruleta_descripcion; ?></textarea>

						<div class="help-block with-errors"></div>
					</div>



				</div>
				<hr>

			</div>
			<hr>


			<div class="row mt-5 mt-5">
				<p class="fs-2 text-muted fw-bold">Contenido bloque final</p>
				<div class="col-12 col-md-3 form-group">
					<label for="ruleta_color_fondo2" class="control-label">Color de fondo rectangulo 2</label>
					<label class="input-group">

						<input type="text" value="<?= $this->content->ruleta_color_fondo2; ?>" name="ruleta_color_fondo2" id="ruleta_color_fondo2" class="form-control form-control-color">
					</label>
					<div class="help-block with-errors"></div>
				</div>

				<div class="col-12 col-md-3 form-group">
					<label for="ruleta_color_txt2" class="control-label">Color del texto rectangulo 2</label>
					<label class="input-group">

						<input type="text" value="<?= $this->content->ruleta_color_txt2; ?>" name="ruleta_color_txt2" id="ruleta_color_txt2" class="form-control form-control-color">
					</label>
					<div class="help-block with-errors"></div>
				</div>
			</div>
			<div class="botones-acciones">
				<button class="btn btn-guardar" type="submit">Guardar</button>
				<a href="<?php echo $this->route; ?>" class="btn btn-cancelar">Cancelar</a>
			</div>
	</form>
</div>

<script>
	const colorInputs = document.querySelectorAll('.form-control-color');
	colorInputs.forEach((input) => {
		const colorPicker = document.createElement('div');
		input.insertAdjacentElement('afterend', colorPicker);
		const pickr = Pickr.create({
			el: colorPicker,
			default: input.value,
			components: {
				preview: true,
				opacity: true,
				hue: true,
				interaction: {
					hex: true,
					rgba: true,
					hsla: true,
					hsva: true,
					cmyk: true,
					input: true,
					clear: true,
					save: true
				}
			}
		});
		pickr.on('change', (color) => {
			input.value = color.toHEXA().toString();
			input.style.backgroundColor = color.toHEXA().toString();
		});
	});
</script>
<style>
	.img-thumbnail {

		background-color: #939393;

	}
</style>