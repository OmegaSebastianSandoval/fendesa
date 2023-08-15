<h1 class="titulo-principal"><i class="fas fa-cogs"></i> <?php echo $this->titlesection; ?></h1>
<div class="container-fluid">
	<form class="text-left" enctype="multipart/form-data" method="post" action="<?php echo $this->routeform;?>"  data-bs-toggle="validator">
		<div class="content-dashboard">
			<input type="hidden" name="csrf" id="csrf" value="<?php echo $this->csrf ?>">
			<input type="hidden" name="csrf_section" id="csrf_section" value="<?php echo $this->csrf_section ?>">
			<?php if ($this->content->imagen_id) { ?>
				<input type="hidden" name="id" id="id" value="<?= $this->content->imagen_id; ?>" />
			<?php }?>
			<div class="row">
				<div class="col-3 form-group">
					<label for="imagen_nombre"  class="control-label">Nombre</label>
					<label class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text input-icono  fondo-verde-claro " ><i class="fas fa-pencil-alt"></i></span>
						</div>
						<input type="text" value="<?= $this->content->imagen_nombre; ?>" name="imagen_nombre" id="imagen_nombre" class="form-control"  required >
					</label>
					<div class="help-block with-errors"></div>
				</div>
				<div class="col-3 form-group">
					<label for="imagen_imagen" >Imagen</label>
					<input type="file" name="imagen_imagen" id="imagen_imagen" class="form-control  file-image" data-buttonName="btn-primary" accept="image/gif, image/jpg, image/jpeg, image/png"  <?php if(!$this->content->imagen_id){ echo 'required'; } ?>>
					<div class="help-block with-errors"></div>
					<?php if($this->content->imagen_imagen) { ?>
						<div id="imagen_imagen_imagen">
							<img src="/images/<?= $this->content->imagen_imagen; ?>"  class="img-thumbnail thumbnail-administrator" />
							<div><button class="btn btn-danger btn-sm" type="button" onclick="eliminarImagen('imagen_imagen','<?php echo $this->route."/deleteimage"; ?>')"><i class="glyphicon glyphicon-remove" ></i> Eliminar Imagen</button></div>
						</div>
					<?php } ?>
				</div>
				<div class="col-3 form-group">
					<label for="imagen_fecha"  class="control-label">Fecha</label>
					<label class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text input-icono  fondo-cafe " ><i class="fas fa-calendar-alt"></i></span>
						</div>
					<input type="text" value="<?php if($this->content->imagen_fecha){ echo $this->content->imagen_fecha; } else { echo date('Y-m-d'); } ?>" name="imagen_fecha" id="imagen_fecha" class="form-control"   data-provide="datepicker" data-date-format="yyyy-mm-dd" data-date-language="es"  >
					</label>
					<div class="help-block with-errors"></div>
				</div>
		<div class="col-3 form-group">
			<label   class="control-label">Activar</label>
				<input type="checkbox" name="imagen_estado" value="1" class="form-control switch-form " <?php if ($this->getObjectVariable($this->content, 'imagen_estado') == 1) { echo "checked";} ?>   ></input>
				<div class="help-block with-errors"></div>
		</div>
				<input type="hidden" name="imagen_album"  value="<?php if($this->content->imagen_album){ echo $this->content->imagen_album; } else { echo $this->album; } ?>">
			</div>
		</div>
		<div class="botones-acciones">
			<button class="btn btn-guardar" type="submit">Guardar</button>
			<a href="<?php echo $this->route; ?>?album=<?php if($this->content->imagen_album){ echo $this->content->imagen_album; } else { echo $this->album; } ?>" class="btn btn-cancelar">Cancelar</a>
		</div>
	</form>
</div>