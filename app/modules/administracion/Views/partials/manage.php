<h1 class="titulo-principal"><i class="fas fa-cogs"></i> <?php echo $this->titlesection; ?></h1>
<div class="container-fluid">
	<form class="text-left" enctype="multipart/form-data" method="post" action="<?php echo $this->routeform;?>"  data-bs-toggle="validator">
		<div class="content-dashboard">
			<input type="hidden" name="csrf" id="csrf" value="<?php echo $this->csrf ?>">
			<input type="hidden" name="csrf_section" id="csrf_section" value="<?php echo $this->csrf_section ?>">
			<?php if ($this->content->partials_id) { ?>
				<input type="hidden" name="id" id="id" value="<?= $this->content->partials_id; ?>" />
			<?php }?>
			<div class="row">
				<div class="col-3 form-group">
					<label for="partials_color_fondo_header"  class="control-label">Color fondo header</label>
					<label class="input-group">
						<div class="input-group-prepend">
							
						</div>
						<input  value="<?= $this->content->partials_color_fondo_header; ?>" name="partials_color_fondo_header" id="partials_color_fondo_header"  type="text " class="form-control form-control-color"   >
					</label>
					<div class="help-block with-errors"></div>
				</div>
				<div class="col-3 form-group">
					<label for="partials_color_texto_header"  class="control-label">Color texto header</label>
					<label class="input-group">
						<div class="input-group-prepend">
						
						</div>
						<input  value="<?= $this->content->partials_color_texto_header; ?>" name="partials_color_texto_header" id="partials_color_texto_header"  type="text" class="form-control form-control-color"   >
					</label>
					<div class="help-block with-errors"></div>
				</div>
				<div class="col-3 form-group">
					<label for="partials_color_fondo_btn_asociados"  class="control-label">Color fondo bot&oacute;n asociados</label>
					<label class="input-group">
						<div class="input-group-prepend">
							
						</div>
						<input  value="<?= $this->content->partials_color_fondo_btn_asociados; ?>" name="partials_color_fondo_btn_asociados" id="partials_color_fondo_btn_asociados"  type="text" class="form-control form-control-color"   >
					</label>
					<div class="help-block with-errors"></div>
				</div>
				<div class="col-3 form-group">
					<label for="partials_color_txt_btn_asociados"  class="control-label">Color texto bot&oacute;n asociados</label>
					<label class="input-group">
						<div class="input-group-prepend">
							
						</div>
						<input  value="<?= $this->content->partials_color_txt_btn_asociados; ?>" name="partials_color_txt_btn_asociados" id="partials_color_txt_btn_asociados"  type="text" class="form-control form-control-color"   >
					</label>
					<div class="help-block with-errors"></div>
				</div>
				<div class="col-3 form-group">
					<label for="partials_color_bandera_asociados"  class="control-label">Color bandera asociados</label>
					<label class="input-group">
						<div class="input-group-prepend">
							
						</div>
						<input  value="<?= $this->content->partials_color_bandera_asociados; ?>" name="partials_color_bandera_asociados" id="partials_color_bandera_asociados"  type="text" class="form-control form-control-color"   >
					</label>
					<div class="help-block with-errors"></div>
				</div>
				<div class="col-3 form-group">
					<label for="partials_color_fondo_btn_afiliate"  class="control-label">Color fondo bot&oacute;n afiliate</label>
					<label class="input-group">
						<div class="input-group-prepend">
							
						</div>
						<input  value="<?= $this->content->partials_color_fondo_btn_afiliate; ?>" name="partials_color_fondo_btn_afiliate" id="partials_color_fondo_btn_afiliate"  type="text" class="form-control form-control-color"   >
					</label>
					<div class="help-block with-errors"></div>
				</div>
				<div class="col-3 form-group">
					<label for="partials_color_txt_btn_afiliate"  class="control-label">Color texto bot&oacute;n afiliate</label>
					<label class="input-group">
						<div class="input-group-prepend">
							
						</div>
						<input  value="<?= $this->content->partials_color_txt_btn_afiliate; ?>" name="partials_color_txt_btn_afiliate" id="partials_color_txt_btn_afiliate"  type="text" class="form-control form-control-color"   >
					</label>
					<div class="help-block with-errors"></div>
				</div>
				<div class="col-3 form-group">
					<label for="partials_color_bandera_afiliate"  class="control-label">Color bandera afiliate</label>
					<label class="input-group">
						<div class="input-group-prepend">
							
						</div>
						<input  value="<?= $this->content->partials_color_bandera_afiliate; ?>" name="partials_color_bandera_afiliate" id="partials_color_bandera_afiliate"  type="text" class="form-control form-control-color"   >
					</label>
					<div class="help-block with-errors"></div>
				</div>
				<div class="col-3 form-group">
					<label for="partials_color_fondo_footer"  class="control-label">Color fondo footer</label>
					<label class="input-group">
						<div class="input-group-prepend">
							
						</div>
						<input  value="<?= $this->content->partials_color_fondo_footer; ?>" name="partials_color_fondo_footer" id="partials_color_fondo_footer"  type="text" class="form-control form-control-color"   >
					</label>
					<div class="help-block with-errors"></div>
				</div>
				<div class="col-3 form-group">
					<label for="partials_color_iconos"  class="control-label">Color iconos</label>
					<label class="input-group">
						<div class="input-group-prepend">
							
						</div>
						<input  value="<?= $this->content->partials_color_iconos; ?>" name="partials_color_iconos" id="partials_color_iconos"  type="text" class="form-control form-control-color"   >
					</label>
					<div class="help-block with-errors"></div>
				</div>
				<div class="col-3 form-group">
					<label for="partials_color_texto_footer"  class="control-label">Color texto footer</label>
					<label class="input-group">
						<div class="input-group-prepend">
							
						</div>
						<input  value="<?= $this->content->partials_color_texto_footer; ?>" name="partials_color_texto_footer" id="partials_color_texto_footer"  type="text" class="form-control form-control-color"   >
					</label>
					<div class="help-block with-errors"></div>
				</div>
				<div class="col-3 form-group">
					<label for="partials_color_footer_bandera"  class="control-label">Color footer bandera</label>
					<label class="input-group">
						<div class="input-group-prepend">
							
						</div>
						<input  value="<?= $this->content->partials_color_footer_bandera; ?>" name="partials_color_footer_bandera" id="partials_color_footer_bandera"  type="text" class="form-control form-control-color"   >
					</label>
					<div class="help-block with-errors"></div>
				</div>
			</div>
		</div>
		<div class="botones-acciones">
			<button class="btn btn-guardar" type="submit">Guardar</button>
			<a href="/administracion/panel" class="btn btn-cancelar">Cancelar</a>
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
