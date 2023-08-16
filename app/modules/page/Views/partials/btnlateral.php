<?php foreach ($this->botoneslaterales as $boton) { ?>

    <a 
    href="<?php echo $boton->publicidad_enlace?>" 
    <?php echo $boton->publicidad_tipo_enlace == 1 ? 'target="_blank"' : ''?>
    
    class="list_links_info" 
    data-bs-toggle="tooltip" 
    data-bs-placement="left" 
    data-bs-custom-class="custom-tooltip" 
    data-bs-title="<?php echo $boton->publicidad_texto_enlace?>">
        <img src="/images/<?php echo $boton->publicidad_imagen?>" class="" alt="Botón de <?php echo $boton->publicidad_nombre?>">
    </a>
<?php } ?>



<!-- Class Object ( [publicidad_id] => 4 [publicidad_seccion] => 103 [publicidad_nombre] => WhatsApp [publicidad_fecha] => 2023-08-15 [publicidad_imagen] => whats2.png [publicidad_imagenresponsive] => [publicidad_color_fondo] => [publicidad_video] => [publicidad_posicion] => [publicidad_descripcion] => [publicidad_estado] => 1 [publicidad_click] => 0 [publicidad_enlace] => https://api.whatsapp.com/send?phone=573185920997 [publicidad_tipo_enlace] => 1 [publicidad_texto_enlace] => Escríbenos [orden] => 4 )

stdClass Object ( [publicidad_id] => 5 [publicidad_seccion] => 103 [publicidad_nombre] => PSE [publicidad_fecha] => 2023-08-15 [publicidad_imagen] => pse.png [publicidad_imagenresponsive] => [publicidad_color_fondo] => [publicidad_video] => [publicidad_posicion] => [publicidad_descripcion] => [publicidad_estado] => 1 [publicidad_click] => 0 [publicidad_enlace] => https://www.psepagos.co/PSEHostingUI/ShowTicketOffice.aspx?ID=7100 [publicidad_tipo_enlace] => 1 [publicidad_texto_enlace] => Contin -->