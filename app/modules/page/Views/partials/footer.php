<div class="container footer"  style="background:<?php echo $this->partials->partials_color_fondo_footer?>">
    <div class="row align-items-center g-2">
        <div class="col-12 col-lg-1">
            <span class="svg-container">
                <svg title="Save" viewBox="0 -0.5 25 25" height="100px" width="100px" xmlns="http://www.w3.org/2000/svg" class="" style="fill:<?php echo $this->partials->partials_color_footer_bandera?>">
                    <path stroke-linejoin="round" stroke-linecap="round" stroke-width="1.5" d="M18.507 19.853V6.034C18.5116 5.49905 18.3034 4.98422 17.9283 4.60277C17.5532 4.22131 17.042 4.00449 16.507 4H8.50705C7.9721 4.00449 7.46085 4.22131 7.08577 4.60277C6.7107 4.98422 6.50252 5.49905 6.50705 6.034V19.853C6.45951 20.252 6.65541 20.6407 7.00441 20.8399C7.35342 21.039 7.78773 21.0099 8.10705 20.766L11.907 17.485C12.2496 17.1758 12.7705 17.1758 13.113 17.485L16.9071 20.767C17.2265 21.0111 17.6611 21.0402 18.0102 20.8407C18.3593 20.6413 18.5551 20.2522 18.507 19.853Z" clip-rule="evenodd" fill-rule="evenodd"></path>
                </svg>
            </span>
        </div>

        <div class="col-12 col-lg-10 pt-2 d-flex flex-column justify-content-center">
            <div class="nav-social-media justify-content-center">
                <?php if ($this->infopage->info_pagina_youtube) { ?>
                    <a href="<?php echo $this->infopage->info_pagina_youtube ?>" target="_blank" style="color:<?php echo $this->partials->partials_color_iconos?>"  >
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                    <div class="vr"></div>
                <?php } ?>
                <?php if ($this->infopage->info_pagina_facebook) { ?>
                    <a href="<?php echo $this->infopage->info_pagina_facebook ?>" target="_blank" style="color:<?php echo $this->partials->partials_color_iconos?>" >
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <div class="vr"></div>

                <?php } ?>

                <?php if ($this->infopage->info_pagina_twitter) { ?>
                    <a href="<?php echo $this->infopage->info_pagina_twitter ?>" target="_blank" style="color:<?php echo $this->partials->partials_color_iconos?>" >
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                    <div class="vr"></div>

                <?php } ?>
                <?php if ($this->infopage->info_pagina_linkedin) { ?>
                    <a href="<?php echo $this->infopage->info_pagina_linkedin ?>" target="_blank" style="color:<?php echo $this->partials->partials_color_iconos?>" >
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                    <div class="vr"></div>

                <?php } ?>
                <?php if ($this->infopage->info_pagina_instagram) { ?>
                    <a href="<?php echo $this->infopage->info_pagina_instagram ?>" target="_blank" style="color:<?php echo $this->partials->partials_color_iconos?>" >
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <div class="vr"></div>

                <?php } ?>
                <?php if ($this->infopage->info_pagina_pinterest) { ?>
                    <a href="<?php echo $this->infopage->info_pagina_pinterest ?>" target="_blank" style="color:<?php echo $this->partials->partials_color_iconos?>" >
                        <i class="fa-brands fa-pinterest-p"></i>
                    </a>
                    <div class="vr"></div>

                <?php } ?>

                <?php if ($this->infopage->info_pagina_flickr) { ?>
                    <a href="<?php echo $this->infopage->info_pagina_flickr ?>" target="_blank" style="color:<?php echo $this->partials->partials_color_iconos?>" >
                        <i class="fa-brands fa-flickr"></i>
                    </a>
                    <div class="vr"></div>

                <?php } ?>
                <?php if ($this->infopage->info_pagina_tiktok) { ?>
                    <a href="<?php echo $this->infopage->info_pagina_tiktok ?>" target="_blank" style="color:<?php echo $this->partials->partials_color_iconos?>" >
                        <i class="fa-brands fa-tiktok"></i>
                    </a>


                <?php } ?>

            </div>
            <div class="d-flex mt-3 justify-content-center ">
                <p class="" style="color:<?php echo $this->partials->partials_color_texto_footer?>"><span data-bs-toggle="modal" role="button" data-bs-target="#exampleModal" >Aviso legal </span>
                    -
                    <span data-bs-toggle="modal" role="button" data-bs-target="#modalPoliticas"> Política de privacidad</span>
                </p>

            </div>
            <div class="d-flex justify-content-center ">
                <span class="" style="color:<?php echo $this->partials->partials_color_texto_footer?>">&copy; Todos los derechos reservados Fendesa <?php echo date('Y') ?> </span>
            </div>
        </div>
        <div class="col-12 col-lg-1">
            <span class="robot-container">
                <img src="/skins/page/images/robot-15.png" class="" alt="Logo asociados">
            </span>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-semibold"><?php echo $this->infopage->info_pagina_titulo_legal ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php echo $this->infopage->info_pagina_descripcion_legal ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn text-white" data-bs-dismiss="modal"  style="background:<?php echo $this->partials->partials_color_fondo_footer?>">Cerrar</button>

            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalPoliticas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-semibold"><?php echo $this->infopage->info_pagina_titulo_politica ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php echo $this->infopage->info_pagina_descripcion_politica ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn text-white" data-bs-dismiss="modal"  style="background:<?php echo $this->partials->partials_color_fondo_footer?>">Cerrar</button>

            </div>
        </div>
    </div>
</div>
