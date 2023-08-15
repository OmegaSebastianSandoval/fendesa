<h1 class="titulo-principal"><i class="fas fa-cogs"></i>
	<?php echo $this->titlesection; ?>
</h1>
<div class="container-fluid">
	<form class="text-left" enctype="multipart/form-data" method="post" action="<?php echo $this->routeform; ?>" data-bs-toggle="validator">
		<div class="content-dashboard">
			<input type="hidden" name="csrf" id="csrf" value="<?php echo $this->csrf ?>">
			<input type="hidden" name="contactenos_padre" id="contactenos_padre" value="<?php echo $this->padre ?>">
			<input type="hidden" name="tipo" id="tipo" value="<?php echo $this->tipo ?>">

			<input type="hidden" name="csrf_section" id="csrf_section" value="<?php echo $this->csrf_section ?>">
			<?php if ($this->content->contactenos_id) { ?>
				<input type="hidden" name="id" id="id" value="<?= $this->content->contactenos_id; ?>" />
			<?php } ?>
			<?php if (!$this->padre) { ?>

				<div class="row">

					<p class="fs-2 text-muted fw-bold">Cabecera</p>
					<div class="col-3 form-group">
						<label for="contactenos_titulo" class="control-label">T&iacute;tulo</label>
						<label class="input-group">

							<input type="text" value="<?= $this->content->contactenos_titulo; ?>" name="contactenos_titulo" id="contactenos_titulo" class="form-control" required>
						</label>
						<div class="help-block with-errors"></div>
					</div>
					<div class="col-3 form-group">
						<label for="contactenos_color_txt" class="control-label">Color del texto</label>
						<label class="input-group">

							<input type="text" value="<?= $this->content->contactenos_color_txt; ?>" name="contactenos_color_txt" id="contactenos_color_txt" class="form-control form-control-color">
						</label>
						<div class="help-block with-errors"></div>
					</div>

					<div class="col-3 form-group">
						<label for="contactenos_color_fondo" class="control-label">Color fondo</label>
						<label class="input-group">

							<input type="text" value="<?= $this->content->contactenos_color_fondo; ?>" name="contactenos_color_fondo" id="contactenos_color_fondo" class="form-control form-control-color">
						</label>
						<div class="help-block with-errors"></div>
					</div>
					<div class="col-3 form-group">
						<label for="contactenos_logo">Logo principal</label>
						<input type="file" name="contactenos_logo" id="contactenos_logo" class="form-control  file-image" data-buttonName="btn-primary" accept="image/gif, image/jpg, image/jpeg, image/png">
						<div class="help-block with-errors"></div>
						<?php if ($this->content->contactenos_logo) { ?>
							<div id="imagen_contactenos_logo">
								<img src="/images/<?= $this->content->contactenos_logo; ?>" class="img-thumbnail thumbnail-administrator" />
								<div><button class="btn btn-danger btn-sm" type="button" onclick="eliminarImagen('contactenos_logo','<?php echo $this->route . "/deleteimage"; ?>')"><i class="glyphicon glyphicon-remove"></i> Eliminar Imagen</button></div>
							</div>
						<?php } ?>
					</div>
				</div>
				<hr>
				<div class="row mt-5">
					<p class="fs-2 text-muted fw-bold">Cuadrado de la cabecera</p>

					<div class="col-4 form-group">
						<label for="contactenos_color_bandera" class="control-label">Color bandera</label>
						<label class="input-group">

							<input type="text" value="<?= $this->content->contactenos_color_bandera; ?>" name="contactenos_color_bandera" id="contactenos_color_bandera" class="form-control form-control-color">
						</label>
						<div class="help-block with-errors"></div>
					</div>
					<div class="col-4 form-group">
						<label for="contactenos_cuadro_color" class="control-label">Color del cuadro</label>
						<label class="input-group">

							<input type="text" value="<?= $this->content->contactenos_cuadro_color; ?>" name="contactenos_cuadro_color" id="contactenos_cuadro_color" class="form-control form-control-color">
						</label>
						<div class="help-block with-errors"></div>
					</div>

					<div class="col-4 form-group">
						<label for="contactenos_cuadro_img">Imagen del cuadro</label>
						<input type="file" name="contactenos_cuadro_img" id="contactenos_cuadro_img" class="form-control  file-image" data-buttonName="btn-primary" accept="image/gif, image/jpg, image/jpeg, image/png">
						<div class="help-block with-errors"></div>
						<?php if ($this->content->contactenos_cuadro_img) { ?>
							<div id="imagen_contactenos_cuadro_img">
								<img src="/images/<?= $this->content->contactenos_cuadro_img; ?>" class="img-thumbnail thumbnail-administrator" />
								<div><button class="btn btn-danger btn-sm" type="button" onclick="eliminarImagen('contactenos_cuadro_img','<?php echo $this->route . "/deleteimage"; ?>')"><i class="glyphicon glyphicon-remove"></i> Eliminar Imagen</button></div>
							</div>
						<?php } ?>
					</div>
				</div>
				<hr>
				<div class="row mt-5">
					<p class="fs-2 text-muted fw-bold">Imágenes y botón de la cabecera </p>

					<div class="col-4 form-group">
						<label for="contactenos_cuadro_img_fondo">Imagen horizontal fendyShop</label>
						<input type="file" name="contactenos_cuadro_img_fondo" id="contactenos_cuadro_img_fondo" class="form-control  file-image" data-buttonName="btn-primary" accept="image/gif, image/jpg, image/jpeg, image/png">
						<div class="help-block with-errors"></div>
						<?php if ($this->content->contactenos_cuadro_img_fondo) { ?>
							<div id="imagen_contactenos_cuadro_img_fondo">
								<img src="/images/<?= $this->content->contactenos_cuadro_img_fondo; ?>" class="img-thumbnail thumbnail-administrator" />
								<div><button class="btn btn-danger btn-sm" type="button" onclick="eliminarImagen('contactenos_cuadro_img_fondo','<?php echo $this->route . "/deleteimage"; ?>')"><i class="glyphicon glyphicon-remove"></i> Eliminar Imagen</button></div>
							</div>
						<?php } ?>
					</div>
					<div class="col-4 form-group">
						<label for="contactenos_img_fendy">Imagen botón fendy</label>
						<input type="file" name="contactenos_img_fendy" id="contactenos_img_fendy" class="form-control  file-image" data-buttonName="btn-primary" accept="image/gif, image/jpg, image/jpeg, image/png">
						<div class="help-block with-errors"></div>
						<?php if ($this->content->contactenos_img_fendy) { ?>
							<div id="imagen_contactenos_img_fendy">
								<img src="/images/<?= $this->content->contactenos_img_fendy; ?>" class="img-thumbnail thumbnail-administrator" />
								<div><button class="btn btn-danger btn-sm" type="button" onclick="eliminarImagen('contactenos_img_fendy','<?php echo $this->route . "/deleteimage"; ?>')"><i class="glyphicon glyphicon-remove"></i> Eliminar Imagen</button></div>
							</div>
						<?php } ?>
					</div>
					<div class="col-4 form-group">
						<label for="contactenos_titulo_boton" class="control-label">Texto bot&oacute;n principal</label>
						<label class="input-group">

							<input type="text" value="<?= $this->content->contactenos_titulo_boton; ?>" name="contactenos_titulo_boton" id="contactenos_titulo_boton" class="form-control">
						</label>
						<div class="help-block with-errors"></div>
					</div>
					<div class="col-4 form-group">
						<label for="contactenos_boton_color" class="control-label">Color bot&oacute;n</label>
						<label class="input-group">

							<input type="text" value="<?= $this->content->contactenos_boton_color; ?>" name="contactenos_boton_color" id="contactenos_boton_color" class="form-control form-control-color">
						</label>
						<div class="help-block with-errors"></div>
					</div>
					<div class="col-4 form-group">
						<label for="contactenos_boton_color_fondo" class="control-label">Color fondo bot&oacute;n</label>
						<label class="input-group">

							<input type="text" value="<?= $this->content->contactenos_boton_color_fondo; ?>" name="contactenos_boton_color_fondo" id="contactenos_boton_color_fondo" class="form-control form-control-color">
						</label>
						<div class="help-block with-errors"></div>
					</div>
					<div class="col-4 form-group">
						<label for="contactenos_btn1_link" class="control-label">Link botón principal</label>
						<label class="input-group">

							<input type="text" value="<?= $this->content->contactenos_btn1_link; ?>" name="contactenos_btn1_link" id="contactenos_btn1_link" class="form-control">
						</label>
						<div class="help-block with-errors"></div>
					</div>
				</div>
				<hr>
			<?php } ?>

			<div class="row">
				<p class="fs-2 text-muted fw-bold">Ajustes del contenido</p>
				<?php if ($this->padre && !$this->tipo) { ?>
					<div class="row">

						<div class="col-6 form-group mb-2">
							<label for="tipo">Seleccione el tipo</label>
							<select class="form-control" name="tipo" id="tipo" required>
								<option value="">Seleccione...</option>
								<option value="1" <?php  if($this->content->tipo == '1'
								){ echo "selected";}?> >Contenido </option>
								<option value="2" <?php  if($this->content->tipo == '2'
								){ echo "selected";}?> >Slider imagen </option>Slider contenido </option>


							</select>
						</div>
					</div>

				<?php } ?>
				<?php if ($this->padre && !$this->tipo) { ?>

					<div class="col-4 form-group">
						<label for="contactenos_logo2">Logo</label>
						<input type="file" name="contactenos_logo2" id="contactenos_logo2" class="form-control  file-image" data-buttonName="btn-primary" accept="image/gif, image/jpg, image/jpeg, image/png">
						<div class="help-block with-errors"></div>
						<?php if ($this->content->contactenos_logo2) { ?>
							<div id="imagen_contactenos_logo2">
								<img src="/images/<?= $this->content->contactenos_logo2; ?>" class="img-thumbnail thumbnail-administrator" />
								<div><button class="btn btn-danger btn-sm" type="button" onclick="eliminarImagen('contactenos_logo2','<?php echo $this->route . "/deleteimage"; ?>')"><i class="glyphicon glyphicon-remove"></i> Eliminar Imagen</button></div>
							</div>
						<?php } ?>
					</div>
				<?php } ?>

				<?php if ($this->padre) { ?>

					<div class="col-4 form-group">
						<label for="contactenos_titulo_interno" class="control-label">Título interno</label>
						<label class="input-group">

							<input type="text" value="<?= $this->content->contactenos_titulo_interno; ?>" name="contactenos_titulo_interno" id="contactenos_titulo_interno" class="form-control" <?php if ($this->padre) {
																																																		echo "required";
																																																	} ?>>
						</label>
						<div class="help-block with-errors"></div>
					</div>
					<div class="col-4 form-group">
						<label for="contactenos_cargo" class="control-label">Cargo</label>
						<label class="input-group">

							<input type="text" value="<?= $this->content->contactenos_cargo; ?>" name="contactenos_cargo" id="contactenos_cargo" class="form-control" >
						</label>
						<div class="help-block with-errors"></div>
					</div>
					<div class="col-4 form-group">
						<label for="contactenos_interna_img">Imagen interna del contenido</label>
						<input type="file" name="contactenos_interna_img" id="contactenos_interna_img" class="form-control  file-image" data-buttonName="btn-primary" accept="image/gif, image/jpg, image/jpeg, image/png">
						<div class="help-block with-errors"></div>
						<?php if ($this->content->contactenos_interna_img) { ?>
							<div id="imagen_contactenos_interna_img">
								<img src="/images/<?= $this->content->contactenos_interna_img; ?>" class="img-thumbnail thumbnail-administrator" />
								<div><button class="btn btn-danger btn-sm" type="button" onclick="eliminarImagen('contactenos_interna_img','<?php echo $this->route . "/deleteimage"; ?>')"><i class="glyphicon glyphicon-remove"></i> Eliminar Imagen</button></div>
							</div>
						<?php } ?>
					</div>
				<?php } ?>

				<?php if (!$this->padre) { ?>

					<div class="col-4 form-group">
						<label for="contactenos_color_bandera2" class="control-label">Color bandera del contenido</label>
						<label class="input-group">

							<input type="text" value="<?= $this->content->contactenos_color_bandera2; ?>" name="contactenos_color_bandera2" id="contactenos_color_bandera2" class="form-control form-control-color">
						</label>
						<div class="help-block with-errors"></div>
					</div>
					<div class="col-4 form-group">
						<label for="contactenos_color_fondo_1" class="control-label">Color fondo izquierda y borde de las cajas de texto </label>
						<label class="input-group">

							<input type="text" value="<?= $this->content->contactenos_color_fondo_1; ?>" name="contactenos_color_fondo_1" id="contactenos_color_fondo_1" class="form-control form-control-color">
						</label>
						<div class="help-block with-errors"></div>
					</div>
					<div class="col-4 form-group">
						<label for="contactenos_color_fondo_2" class="control-label">Color fondo derecha</label>
						<label class="input-group">

							<input type="text" value="<?= $this->content->contactenos_color_fondo_2; ?>" name="contactenos_color_fondo_2" id="contactenos_color_fondo_2" class="form-control form-control-color">
						</label>
						<div class="help-block with-errors"></div>
					</div>
					<div class="col-4 form-group">
						<label for="contactenos_escribenos" class="control-label">Título del contenido</label>
						<label class="input-group">

							<input type="text" value="<?= $this->content->contactenos_escribenos; ?>" name="contactenos_escribenos" id="contactenos_escribenos" class="form-control">
						</label>
						<div class="help-block with-errors"></div>
					</div>
					<div class="col-4 form-group">
						<label for="contactenos_color_escribenos" class="control-label">Color del título del contenido</label>
						<label class="input-group">

							<input type="text" value="<?= $this->content->contactenos_color_escribenos; ?>" name="contactenos_color_escribenos" id="contactenos_color_escribenos" class="form-control form-control-color">
						</label>
						<div class="help-block with-errors"></div>
					</div>
					<div class="col-4 form-group">
						<label for="contactenos_btn6_color" class="control-label">Bot&oacute;n enviar color</label>
						<label class="input-group">

							<input type="text" value="<?= $this->content->contactenos_btn6_color; ?>" name="contactenos_btn6_color" id="contactenos_btn6_color" class="form-control form-control-color">
						</label>
						<div class="help-block with-errors"></div>
					</div>
					<div class="col-4 form-group">
						<label for="contactenos_btn1_color" class="control-label">Botón enviar color fondo</label>
						<label class="input-group">

							<input type="text" value="<?= $this->content->contactenos_btn1_color; ?>" name="contactenos_btn1_color" id="contactenos_btn1_color" class="form-control form-control-color">
						</label>
						<div class="help-block with-errors"></div>
					</div>
					<div class="col-4 form-group">
						<label for="contactenos_btn6_txt" class="control-label">Bot&oacute;n enviar texto</label>
						<label class="input-group">

							<input type="text" value="<?= $this->content->contactenos_btn6_txt; ?>" name="contactenos_btn6_txt" id="contactenos_btn6_txt" class="form-control">
						</label>
						<div class="help-block with-errors"></div>
					</div>
					<div class="col-4 form-group">
						<label for="contactenos_btn6_img">Bot&oacute;n enviar icono</label>
						<input type="file" name="contactenos_btn6_img" id="contactenos_btn6_img" class="form-control  file-image" data-buttonName="btn-primary" accept="image/gif, image/jpg, image/jpeg, image/png">
						<div class="help-block with-errors"></div>
						<?php if ($this->content->contactenos_btn6_img) { ?>
							<div id="imagen_contactenos_btn6_img">
								<img src="/images/<?= $this->content->contactenos_btn6_img; ?>" class="img-thumbnail thumbnail-administrator" />
								<div><button class="btn btn-danger btn-sm" type="button" onclick="eliminarImagen('contactenos_btn6_img','<?php echo $this->route . "/deleteimage"; ?>')"><i class="glyphicon glyphicon-remove"></i> Eliminar Imagen</button></div>
							</div>
						<?php } ?>
					</div>
				<?php } ?>

			</div>

			<hr>

			<?php if (!$this->padre) { ?>

				<!-- -------------------------
			INICIO DOS BOTONES----------- -->
				<div class="row mt-5">
					<p class="fs-2 text-muted fw-bold">Ajustes botón afiliate aquí</p>

					<!-- -------------------------
			INICIO BOTON AFILIATE
			----------- -->
					<div class="col-2 form-group">
						<label for="contactenos_btn4_txt" class="control-label">Bot&oacute;n afiliate texto</label>
						<label class="input-group">

							<input type="text" value="<?= $this->content->contactenos_btn4_txt; ?>" name="contactenos_btn4_txt" id="contactenos_btn4_txt" class="form-control">
						</label>
						<div class="help-block with-errors"></div>
					</div>
					<div class="col-2 form-group">
						<label for="contactenos_btn4_color" class="control-label">Bot&oacute;n afiliate color</label>
						<label class="input-group">

							<input type="text" value="<?= $this->content->contactenos_btn4_color; ?>" name="contactenos_btn4_color" id="contactenos_btn4_color" class="form-control form-control-color">
						</label>
						<div class="help-block with-errors"></div>
					</div>
					<div class="col-3 form-group">
						<label for="contactenos_btn2_color" class="control-label">Bot&oacute;n afiliate color fondo</label>
						<label class="input-group">

							<input type="text" value="<?= $this->content->contactenos_btn2_color; ?>" name="contactenos_btn2_color" id="contactenos_btn2_color" class="form-control form-control-color">
						</label>
						<div class="help-block with-errors"></div>
					</div>

					<div class="col-3 form-group">
						<label for="contactenos_btn4_link" class="control-label">Bot&oacute;n afiliate link</label>
						<label class="input-group">

							<input type="text" value="<?= $this->content->contactenos_btn4_link; ?>" name="contactenos_btn4_link" id="contactenos_btn4_link" class="form-control">
						</label>
						<div class="help-block with-errors"></div>
					</div>
					<div class="col-2 form-group">
						<label for="contactenos_btn4_img">Bot&oacute;n afiliate icono</label>
						<input type="file" name="contactenos_btn4_img" id="contactenos_btn4_img" class="form-control  file-image" data-buttonName="btn-primary" accept="image/gif, image/jpg, image/jpeg, image/png">
						<div class="help-block with-errors"></div>
						<?php if ($this->content->contactenos_btn4_img) { ?>
							<div id="imagen_contactenos_btn4_img">
								<img src="/images/<?= $this->content->contactenos_btn4_img; ?>" class="img-thumbnail thumbnail-administrator" />
								<div><button class="btn btn-danger btn-sm" type="button" onclick="eliminarImagen('contactenos_btn4_img','<?php echo $this->route . "/deleteimage"; ?>')"><i class="glyphicon glyphicon-remove"></i> Eliminar Imagen</button></div>
							</div>
						<?php } ?>
					</div>
					<!-- -------------------------
			FIN BOTON AFILIATE
			----------- -->
				</div>
				<hr>
				<div class="row mt-5">
					<p class="fs-2 text-muted fw-bold">Ajustes botón contáctanos</p>

					<!-- -------------------------
			INICIO BOTON CONTACTANOS
			----------- -->
					<div class="col-2 form-group">
						<label for="contactenos_btn5_txt" class="control-label">Bot&oacute;n contactanos texto</label>
						<label class="input-group">

							<input type="text" value="<?= $this->content->contactenos_btn5_txt; ?>" name="contactenos_btn5_txt" id="contactenos_btn5_txt" class="form-control">
						</label>
						<div class="help-block with-errors"></div>
					</div>
					<div class="col-2 form-group">
						<label for="contactenos_btn5_color" class="control-label">Bot&oacute;n contactanos color</label>
						<label class="input-group">

							<input type="text" value="<?= $this->content->contactenos_btn5_color; ?>" name="contactenos_btn5_color" id="contactenos_btn5_color" class="form-control form-control-color">
						</label>
						<div class="help-block with-errors"></div>
					</div>
					<div class="col-2 form-group">
						<label for="contactenos_btn3_color" class="control-label">Color fondo botón contáctanos</label>
						<label class="input-group">

							<input type="text" value="<?= $this->content->contactenos_btn3_color; ?>" name="contactenos_btn3_color" id="contactenos_btn3_color" class="form-control form-control-color">
						</label>
						<div class="help-block with-errors"></div>
					</div>

					<div class="col-2 form-group">
						<label for="contactenos_btn5_link" class="control-label">Bot&oacute;n contactanos ink</label>
						<label class="input-group">

							<input type="text" value="<?= $this->content->contactenos_btn5_link; ?>" name="contactenos_btn5_link" id="contactenos_btn5_link" class="form-control">
						</label>
						<div class="help-block with-errors"></div>
					</div>
					<div class="col-4 form-group">
						<label for="contactenos_btn5_img">Bot&oacute;n contactanos icono</label>
						<input type="file" name="contactenos_btn5_img" id="contactenos_btn5_img" class="form-control  file-image" data-buttonName="btn-primary" accept="image/gif, image/jpg, image/jpeg, image/png">
						<div class="help-block with-errors"></div>
						<?php if ($this->content->contactenos_btn5_img) { ?>
							<div id="imagen_contactenos_btn5_img">
								<img src="/images/<?= $this->content->contactenos_btn5_img; ?>" class="img-thumbnail thumbnail-administrator" />
								<div><button class="btn btn-danger btn-sm" type="button" onclick="eliminarImagen('contactenos_btn5_img','<?php echo $this->route . "/deleteimage"; ?>')"><i class="glyphicon glyphicon-remove"></i> Eliminar Imagen</button></div>
							</div>
						<?php } ?>
					</div>
					<!-- -------------------------
			FIN BOTON CONTACTANOS
			----------- -->
				</div>
				<!-- -------------------------
			FIN  DOS BOTONES
			----------- -->
			<?php } ?>

			<hr>
			<div class="row mt-5 d-none">





				<div class="col-2 form-group">
					<label for="contactenos_btn2_img">Bot&oacute;n 2 icono</label>
					<input type="file" name="contactenos_btn2_img" id="contactenos_btn2_img" class="form-control  file-image" data-buttonName="btn-primary" accept="image/gif, image/jpg, image/jpeg, image/png">
					<div class="help-block with-errors"></div>
					<?php if ($this->content->contactenos_btn2_img) { ?>
						<div id="imagen_contactenos_btn2_img">
							<img src="/images/<?= $this->content->contactenos_btn2_img; ?>" class="img-thumbnail thumbnail-administrator" />
							<div><button class="btn btn-danger btn-sm" type="button" onclick="eliminarImagen('contactenos_btn2_img','<?php echo $this->route . "/deleteimage"; ?>')"><i class="glyphicon glyphicon-remove"></i> Eliminar Imagen</button></div>
						</div>
					<?php } ?>
				</div>


				<div class="col-2 form-group">
					<label for="contactenos_btn3_img">Bot&oacute;n 3 icono</label>
					<input type="file" name="contactenos_btn3_img" id="contactenos_btn3_img" class="form-control  file-image" data-buttonName="btn-primary" accept="image/gif, image/jpg, image/jpeg, image/png">
					<div class="help-block with-errors"></div>
					<?php if ($this->content->contactenos_btn3_img) { ?>
						<div id="imagen_contactenos_btn3_img">
							<img src="/images/<?= $this->content->contactenos_btn3_img; ?>" class="img-thumbnail thumbnail-administrator" />
							<div><button class="btn btn-danger btn-sm" type="button" onclick="eliminarImagen('contactenos_btn3_img','<?php echo $this->route . "/deleteimage"; ?>')"><i class="glyphicon glyphicon-remove"></i> Eliminar Imagen</button></div>
						</div>
					<?php } ?>
				</div>

			</div>




			<div class="row">
				<p class="fs-2 text-muted fw-bold">Descripción de la parte izquierda del contenido</p>

				<div class="col-12 form-group">
					<textarea name="contactenos_descripcion" id="contactenos_descripcion" class="form-control tinyeditor mt-5" rows="10"><?= $this->content->contactenos_descripcion; ?></textarea>
					<div class="help-block with-errors"></div>
				</div>

			</div>
			<?php if ($this->padre) { ?>


				<div class="row">
					<p class="fs-2 text-muted fw-bold">Descripción principal</p>

					<div class="col-12 form-group">
						<textarea name="contactenos_descripcion2" id="contactenos_descripcion2" class="form-control tinyeditor mt-5" rows="10"><?= $this->content->contactenos_descripcion2; ?></textarea>
						<div class="help-block with-errors"></div>
					</div>


					<!-- <div class="col-2 form-group">
					<label for="contactenos_descripcion2" class="control-label">Bot&oacute;n 3 link</label>
					<label class="input-group">

						<input type="text" value="<?= $this->content->contactenos_descripcion2; ?>" name="contactenos_descripcion2" id="contactenos_descripcion2" class="form-control">
					</label>
					<div class="help-block with-errors"></div>
				</div> -->
				</div>
			<?php } ?>

		</div>
		<div class="botones-acciones">
			<button class="btn btn-guardar" type="submit">Guardar</button>
			<a href="<?php echo $this->route; ?><?php if ($this->padre) {
													echo "?padre=" . $this->padre;
												} ?>" class="btn btn-cancelar">Cancelar</a>
		</div>
	</form>
</div>

<style>
	.img-thumbnail {

		background-color: #939393;

	}
</style>

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