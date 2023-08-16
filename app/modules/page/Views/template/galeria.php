<div id="carouselExampleIndicators" class="carousel slide">
	<div class="carousel-indicators">
		<?php foreach ($this->imagenes as $key => $value) { ?>

			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo   $key  ?>" class=" <?php echo   $key == 0 ? 'active' : '' ?>" aria-current="true" aria-label="Slide <?php echo   $key  ?>"></button>
		<?php } ?>


	</div>
	<div class="carousel-inner slider-nosotros">
		<?php foreach ($this->imagenes as $key => $value) { ?>
			<div class="carousel-item <?php echo   $key == 0 ? 'active' : '' ?>">
				<div class="row  justify-content-center">
					<div class="col-9">
						<a data-fancybox="gallery" 
						data-src="/images/<?php echo $value->imagen_imagen; ?>"
						data-caption='<?php echo  $value->imagen_descripcion ?>'>

							<img role="button" src="/images/<?php echo $value->imagen_imagen ?>" class="w-100 img-galeria" alt="">
						</a>
					</div>

					<div class="col-9">
						<div class="text mt-2" style="">
							<?php echo $value->imagen_descripcion ?>
						</div>
					</div>


				</div>
			</div>
		<?php } ?>

	</div>
	<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
		<svg width="24" height="24" fill="<?php echo $this->contactanos->contactenos_color_fondo; ?>" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
			<path d="M20 .755l-14.374 11.245 14.374 11.219-.619.781-15.381-12 15.391-12 .609.755z" />
		</svg>
		<span class="visually-hidden">Previous</span>
	</button>
	<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
		<svg width="24" height="24" fill="<?php echo $this->contactanos->contactenos_color_fondo; ?>" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
			<path d="M4 .755l14.374 11.245-14.374 11.219.619.781 15.381-12-15.391-12-.609.755z" />
		</svg>
		<span class="visually-hidden">Next</span>
	</button>
</div>
<style>
	.carousel-indicators {
		bottom: -45px !important;
	}

	.carousel-indicators [data-bs-target] {
		width: 15px !important;
		height: 15px !important;
		border-radius: 50% !important;
		background: <?php echo $this->contactanos->contactenos_color_fondo_1; ?> !important;
		border-bottom: 0 !important;
		border-top: 0 !important;



	}

	.img-galeria {
		height: 600px;
		object-fit: contain;
	}
</style>
<script>
	const myCarouselElement = document.querySelector('#carouselExampleRide')

	const carousel = new bootstrap.Carousel(myCarouselElement, {
		interval: 2000,
		touch: false
	})
</script>