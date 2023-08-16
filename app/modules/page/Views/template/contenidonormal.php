<div class="text mt-5" style="">
	<?php echo $this->primerRegistro->contactenos_descripcion2; ?>
</div>
<?php if (count($this->imagenes) >= 1 || $this->primerRegistro->contactenos_interna_img) { ?>

<div class="row mt-5">

	<!-- -------------
            INICIO SLIDER 
          ----------------->

	<?php if (count($this->imagenes) >= 1) { ?>
		<div class="col-5 ">



			<div class="autoplay ">


				<?php foreach ($this->imagenes as $imagen) { ?>
					<a data-fancybox="gallery" data-src="/images/<?php echo $imagen->imagen_imagen; ?>">

						<img class="mt-2 rounded" role="button" src="/images/<?php echo $imagen->imagen_imagen; ?>" width="150" height="150" alt="" />
					</a>

				<?php } ?>

			</div>

		</div>
	<?php } ?>
	<!-- -------------
            FIN SLIDER 
          ----------------->
	<!-- -------------
            INICIO IMAGEN 
          ----------------->
	<?php if ($this->primerRegistro->contactenos_interna_img) { ?>
		<?php if ($this->primerRegistro->contactenos_interna_img && count($this->imagenes) <= 0) { ?>

			<div class="col-12 d-flex justify-content-center align-items-center">
			<?php } else { ?>
				<div class="col-7 d-flex justify-content-center align-items-center">
				<?php } ?>

				<img class="img-fluid h-100" src="/images/<?php echo $this->primerRegistro->contactenos_interna_img; ?>" alt="" style="object-fit: contain;">
				</div>


			</div>
		<?php } ?>
</div>
<?php } ?>


<!-- -------------
            FIN IMAGEN 
          ----------------->