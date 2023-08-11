<div class="container">
    <main class="main-principal">
        <!-- --------------------
        INICIO SECCION 1
        ------------------ -->
        <section class="row sec1 ps-5  pe-5 pt-4" style="background:<?php echo $this->primerRuleta->ruleta_color_fondo1 ?>; color:<?php echo $this->primerRuleta->ruleta_color_txt1 ?>">
            <div class="col-12 col-md-4">
                <!-- --------------------
                        INICIO BOTON PRINCIPAL, DE LA PARTE IZQUIERDA
                 ------------------ -->
                <div class="mb-3">


                    <?php if ($this->primerRuleta->ruleta_enlace_principal) { ?>

                        <a href="<?php echo $this->primerRuleta->ruleta_enlace_principal ?>" class="ir_fendy" style="color:<?php echo $this->primerRuleta->ruleta_color_txt1 ?>">
                            <img src="/images/<?php echo $this->primerRuleta->ruleta_fendyshop_icono ?>" alt="" style="background:<?php echo $this->primerRuleta->ruleta_fendyshop_fondo ?>">
                            <?php echo $this->primerRuleta->ruleta_fendyshop_txt ?> </a>
                    <?php } ?>


                </div>
                <!-- --------------------
                        FIN BOTON PRINCIPAL, DE LA PARTE IZQUIERDA
                 ------------------ -->

                <!-- --------------------
                    INICIO CATEGORIAS DESTACADAS PARTE IZQUIERDA, SI HAY LINK SE IMPRIME
                 ------------------ -->

                <span class="mt-2 fendy_categorias" style="color:<?php echo $this->primerRuleta->ruleta_color_txt1 ?>">
                    <?php echo $this->primerRuleta->ruleta_categorias ?></span>

                <!-- --------------------
                     SI HAY LINK SE IMPRIME
                 ------------------ -->
                <?php if ($this->primerRuleta->ruleta_enlace_cat1) { ?>

                    <a href="<?php echo $this->primerRuleta->ruleta_enlace_cat1 ?>" class="list_links_fendy" style="color:<?php echo $this->primerRuleta->ruleta_color_txt1 ?>">
                        <img src="/images/<?php echo $this->primerRuleta->ruleta_categoria1_img ?>" alt="" style="background:<?php echo $this->primerRuleta->ruleta_categoria1_color ?>">
                        <?php echo $this->primerRuleta->ruleta_categoria1 ?></a>
                <?php } ?>
                <!-- --------------------
                     SI HAY LINK SE IMPRIME
                 ------------------ -->


                <?php if ($this->primerRuleta->ruleta_enlace_cat2) { ?>

                    <a href="<?php echo $this->primerRuleta->ruleta_enlace_cat2 ?>" class="list_links_fendy" style="color:<?php echo $this->primerRuleta->ruleta_color_txt1 ?>">
                        <img src="/images/<?php echo $this->primerRuleta->ruleta_categoria2_img ?>" alt="" style="background:<?php echo $this->primerRuleta->ruleta_categoria2_color ?>">
                        <?php echo $this->primerRuleta->ruleta_categoria2 ?></a>
                <?php } ?>


                <?php if ($this->primerRuleta->ruleta_enlace_cat3) { ?>
                    <a href="<?php echo $this->primerRuleta->ruleta_enlace_cat3 ?>" class="list_links_fendy" style="color:<?php echo $this->primerRuleta->ruleta_color_txt1 ?>">
                        <img src="/images/<?php echo $this->primerRuleta->ruleta_categoria3_img ?>" alt="" style="background:<?php echo $this->primerRuleta->ruleta_categoria3_color ?>">
                        <?php echo $this->primerRuleta->ruleta_categoria3 ?></a>
                <?php } ?>
                
                <!-- --------------------
                    FIN CATEGORIAS DESTACADAS PARTE IZQUIERDA, SI HAY LINK SE IMPRIME
                 ------------------ -->
            </div>
            <div class="col-12 col-md-4 ps-4">




                <!-- --------------------
                INICIO RULETA
                ------------------ -->
                <div class="circle">
                    <div class="circle2">
                        <div class="row d-flex justify-content-center align-items-center gap-5">

                            <!-- --------------------
                            INICIO OPCIONES DE LA RULETA
                            se traen los demas contenidos, si hay info se imprime el circulo
                            ------------------ -->
                            <div class="col-1 circulo-contenedor">
                                <?php if ($this->ruleta[2]->ruleta_id) { ?>

                                    <div class="circle4" style="margin-top: 98px; background: <?php echo $this->primerRuleta->ruleta_color_fondo1 ?>;">
                                        <a href="/page/index/?id=<?php echo $this->ruleta[2]->ruleta_id ?>">

                                            <img src="/images/<?php echo $this->ruleta[2]->ruleta_icono_principal ?>" alt="">

                                        </a>
                                    </div>
                                <?php } ?>

                            </div>
                            <div class="col-1 circulo-contenedor">

                                <?php if ($this->ruleta[0]->ruleta_id > 0) { ?>


                                    <div class="circle4" style="margin-top: 28px; margin-left: 6px;background: <?php echo $this->primerRuleta->ruleta_color_fondo1 ?>;">

                                        <a href="/page/index/?id=<?php echo $this->ruleta[0]->ruleta_id ?>">

                                            <img src="/images/<?php echo $this->ruleta[0]->ruleta_icono_principal ?>" alt="">

                                        </a>
                                    </div>
                                <?php } ?>

                            </div>
                            <!-- --------------------
                            INICIO OPCION PRINCIPAL, SIEMPRE SE MUESTRA EL ICONO PRINCIPAL DEL CONTENIDO
                            ------------------ -->
                            <div class="col-1 circulo-contenedor">
                                <div class="circle3" style="background: <?php echo $this->primerRuleta->ruleta_color_ruleta ?>;">
                                    <a href="/page/index/?id=<?php echo $this->primerRuleta->ruleta_id ?>">
                                        <img src="/images/<?php echo $this->primerRuleta->ruleta_icono_principal ?>" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- --------------------
                            FIN OPCION PRINCIPAL
                            ------------------ -->


                            <div class="col-1 circulo-contenedor">
                                <?php if ($this->ruleta[1]->ruleta_id) { ?>

                                    <div class="circle4" style="margin-top: 28px; margin-right: 6px;background: <?php echo $this->primerRuleta->ruleta_color_fondo1 ?>;">
                                        <a href="/page/index/?id=<?php echo $this->ruleta[1]->ruleta_id ?>">

                                            <img src="/images/<?php echo $this->ruleta[1]->ruleta_icono_principal ?>" alt="">

                                        </a>
                                    </div>
                                <?php } ?>


                            </div>

                            <div class="col-1 circulo-contenedor">
                                <?php if ($this->ruleta[3]->ruleta_id) { ?>

                                    <div class="circle4" style="margin-top: 98px; margin-right: 60px;background: <?php echo $this->primerRuleta->ruleta_color_fondo1 ?>;">

                                        <a href="/page/index/?id=<?php echo $this->ruleta[3]->ruleta_id ?>">

                                            <img src="/images/<?php echo $this->ruleta[3]->ruleta_icono_principal ?>" alt="">

                                        </a>
                                    </div>
                                <?php } ?>

                            </div>
                            <!-- --------------------
                            FIN OPCIONES DE LA RULETA
                            ------------------ -->

                        </div>

                    </div>
                </div>
                <!-- --------------------
                FIN RULETA
                ------------------ -->






            </div>
            <!-- --------------------
             INICIO OPCIONES DEL LADO IZQUIERDO, ESTAN FIJAS
              ------------------ -->
            <div class="col-12 col-md-4 d-flex p-0 gap-2 align-items-end flex-column">
                <img src="/skins/page/images/3blanco.png" class="img_menu mb-3" alt="">

                <a href="https://api.whatsapp.com/send?phone=<?php echo ($this->infopage->info_pagina_whatsapp) ?>" target="_blank" class="list_links_info" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="custom-tooltip" data-bs-title="Escríbenos"><img src="/skins/page/images/whats.png" class="" alt=""></a>
                <a href="https://www.psepagos.co/PSEHostingUI/ShowTicketOffice.aspx?ID=7100" class="list_links_info" target="_blank" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="custom-tooltip" data-bs-title="Continuar pago"><img src="/skins/page/images/pse.png" class="" alt=""></a>


            </div>
            <!-- --------------------
             FIN OPCIONES DEL LADO IZQUIERDO
              ------------------ -->
        </section>
        <!-- --------------------
        INICIO SECCION 1
        ------------------ -->
        <!-- --------------------
        INICIO SECCION 3, DONDE ESTÁ CASI TODO EL CONTENIDO
        ------------------ -->
        <section class=" row sec3" style="background:<?php echo $this->primerRuleta->ruleta_color_fondo3 ?>">
            <!-- --------------------
      INICIO BANDERA DE LA IZQUIERDA
        ------------------ -->
            <span class="svg-container-home">
                <svg title="Save" viewBox="0 -0.5 25 25" height="85px" width="80px" xmlns="http://www.w3.org/2000/svg" class="" style="fill:<?php echo $this->partials->partials_color_bandera_afiliate ?>">
                    <path stroke-linejoin="round" stroke-linecap="round" stroke-width="1.5" d="M18.507 19.853V6.034C18.5116 5.49905 18.3034 4.98422 17.9283 4.60277C17.5532 4.22131 17.042 4.00449 16.507 4H8.50705C7.9721 4.00449 7.46085 4.22131 7.08577 4.60277C6.7107 4.98422 6.50252 5.49905 6.50705 6.034V19.853C6.45951 20.252 6.65541 20.6407 7.00441 20.8399C7.35342 21.039 7.78773 21.0099 8.10705 20.766L11.907 17.485C12.2496 17.1758 12.7705 17.1758 13.113 17.485L16.9071 20.767C17.2265 21.0111 17.6611 21.0402 18.0102 20.8407C18.3593 20.6413 18.5551 20.2522 18.507 19.853Z" clip-rule="evenodd" fill-rule="evenodd"></path>
                </svg>
            </span>
            <!-- --------------------
      FIN BANDERA DE LA IZQUIERDA
        ------------------ -->

            <!-- --------------------
        INICIO CONTENIDO DE LA IZQUIERDA
        ------------------ -->
            <div class="col-12 col-md-4 descrip">
                <?php echo $this->primerRuleta->ruleta_descripcion ?>

                <?php if ($this->primerRuleta->ruleta_enlace_info) { ?>

                    <a href="<?php echo $this->primerRuleta->ruleta_enlace_info ?>" target="_blank" class="info" style="color: <?php echo $this->primerRuleta->ruleta_color_info ?>;">
                        <img src="/images/<?php echo $this->primerRuleta->ruleta_img_info ?>" alt="" style="background: <?php echo $this->primerRuleta->ruleta_color_info ?>;">
                        <?php echo $this->primerRuleta->ruleta_txt_info ?></a>
                <?php } ?>
            </div>
            <!-- --------------------
        FIN CONTENIDO DE LA IZQUIERDA
        ------------------ -->
            <!-- --------------------
       INICIO CIRCULO Y TRIANGULO DE LA RULETA E IMAGEN CABEZON
        ------------------ -->
            <div class="col-12 col-md-4">
                <div class="contenedor">
                    <!-- Any website -->
                    <div id="wrapper">

                        <div id="light"></div>
                    </div>
                    <div class='triangle' style="background: <?php echo $this->primerRuleta->ruleta_color_ruleta ?>;">
                    </div>
                    <div class="ruleta" style="background: <?php echo $this->primerRuleta->ruleta_color_ruleta ?>;">
                    </div>
                </div>
                <div class="cabezote">
                    <img src="/images/<?php echo $this->primerRuleta->ruleta_img_cabezon ?>" class="" alt="Imagen de cabezote">
                </div>
            </div>
            <!-- --------------------
       FIN CIRCULO Y TRIANGULO DE LA RULETA E IMAGEN CABEZON
        ------------------ -->
            <!-- --------------------
        INICIO CONTENIDO DE LA DERECHA, LINKS DE INTERES
        ------------------ -->
            <div class="col-12 col-md-4 px-3">
                <span class="text-decoration-underline">
                    <?php echo $this->primerRuleta->ruleta_txt_links_interes ?>
                </span>

                <?php if ($this->primerRuleta->ruleta_enlace_link1) { ?>
                    <a href="<?php echo $this->primerRuleta->ruleta_enlace_link1 ?>" class="list_links_interes" style="background: <?php echo $this->primerRuleta->ruleta_fondo_iconos ?>;" target="<?php echo $this->primerRuleta->ruleta_abrir_link1 == 1 ? '_blank' : '' ?>">
                        <img src="/images/<?php echo $this->primerRuleta->ruleta_img_link1 ?>" alt="" style="background: <?php echo $this->primerRuleta->ruleta_fondo_link1 ?>;">
                        <?php echo $this->primerRuleta->ruleta_txt_link1 ?></a>
                <?php } ?>


                <?php if ($this->primerRuleta->ruleta_enlace_link2) { ?>

                    <a href="<?php echo $this->primerRuleta->ruleta_enlace_link2 ?>" target="<?php echo $this->primerRuleta->ruleta_abrir_link2 == 1 ? '_blank' : '' ?>" class="list_links_interes" style="background: <?php echo $this->primerRuleta->ruleta_fondo_iconos ?>;">
                        <img src="/images/<?php echo $this->primerRuleta->ruleta_img_link2 ?>" alt="" style="background: <?php echo $this->primerRuleta->ruleta_fondo_link2 ?>;">
                        <?php echo $this->primerRuleta->ruleta_txt_link2 ?></a>

                <?php } ?>



                <?php if ($this->primerRuleta->ruleta_enlace_link3) { ?>

                    <a href="<?php echo $this->primerRuleta->ruleta_enlace_link3 ?>" target="<?php echo $this->primerRuleta->ruleta_abrir_link3 == 1 ? '_blank' : '' ?>" class="list_links_interes" style="background: <?php echo $this->primerRuleta->ruleta_fondo_iconos ?>;">
                        <img src="/images/<?php echo $this->primerRuleta->ruleta_img_link3 ?>" alt="" style="background: <?php echo $this->primerRuleta->ruleta_fondo_link3 ?>;">
                        <?php echo $this->primerRuleta->ruleta_txt_link3 ?></a>
                <?php } ?>

            </div>
            <!-- --------------------
        FIN CONTENIDO DE LA DERECHA, LINKS DE INTERES
        ------------------ -->

        </section>
        <!-- --------------------
        FIN SECCION 3
        ------------------ -->



        <!-- --------------------
        INICIO SECCION 2, DONDE ESTA LOS ICONOS DE REDES E INFORMACION LEGAL
        ------------------ -->
        <section class="sec2 d-flex align-items-end justify-content-center" style="background:<?php echo $this->primerRuleta->ruleta_color_fondo2 ?>">
            <div class="col-12 col-lg-10 pt-2 d-flex  justify-content-evenly">
                <div class="d-flex justify-content-center align-items-center ">
                    <span class="legal-index" style="color:<?php echo $this->primerRuleta->ruleta_color_txt2 ?>">&copy;
                        Todos los derechos reservados Fendesa <?php echo date('Y') ?> </span>
                </div>
                <div class="d-flex mt-3 justify-content-center align-items-center ">
                    <p class="" style="color:<?php echo $this->primerRuleta->ruleta_color_txt2 ?>"><span class="legal-index" data-bs-toggle="modal" role="button" data-bs-target="#exampleModal">Aviso legal </span>
                        -
                        <span data-bs-toggle="modal" class="legal-index" role="button" data-bs-target="#modalPoliticas">
                            Política de privacidad</span>
                    </p>

                </div>
                <div class="nav-social-media nav-social-media-index justify-content-center align-items-center">

                    <?php if ($this->infopage->info_pagina_youtube) { ?>
                        <a href="<?php echo $this->infopage->info_pagina_youtube ?>" target="_blank" style="color:<?php echo $this->primerRuleta->ruleta_color_txt2 ?>">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                        <div class="vr"></div>
                    <?php } ?>
                    <?php if ($this->infopage->info_pagina_facebook) { ?>
                        <a href="<?php echo $this->infopage->info_pagina_facebook ?>" target="_blank" style="color:<?php echo $this->primerRuleta->ruleta_color_txt2 ?>">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <div class="vr"></div>

                    <?php } ?>

                    <?php if ($this->infopage->info_pagina_twitter) { ?>
                        <a href="<?php echo $this->infopage->info_pagina_twitter ?>" target="_blank" style="color:<?php echo $this->primerRuleta->ruleta_color_txt2 ?>">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                        <div class="vr"></div>

                    <?php } ?>
                    <?php if ($this->infopage->info_pagina_linkedin) { ?>
                        <a href="<?php echo $this->infopage->info_pagina_linkedin ?>" target="_blank" style="color:<?php echo $this->primerRuleta->ruleta_color_txt2 ?>">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                        <div class="vr"></div>

                    <?php } ?>
                    <?php if ($this->infopage->info_pagina_instagram) { ?>
                        <a href="<?php echo $this->infopage->info_pagina_instagram ?>" target="_blank" style="color:<?php echo $this->primerRuleta->ruleta_color_txt2 ?>">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <div class="vr"></div>

                    <?php } ?>
                    <?php if ($this->infopage->info_pagina_pinterest) { ?>
                        <a href="<?php echo $this->infopage->info_pagina_pinterest ?>" target="_blank" style="color:<?php echo $this->primerRuleta->ruleta_color_txt2 ?>">
                            <i class="fa-brands fa-pinterest-p"></i>
                        </a>
                        <div class="vr"></div>

                    <?php } ?>

                    <?php if ($this->infopage->info_pagina_flickr) { ?>
                        <a href="<?php echo $this->infopage->info_pagina_flickr ?>" target="_blank" style="color:<?php echo $this->primerRuleta->ruleta_color_txt2 ?>">
                            <i class="fa-brands fa-flickr"></i>
                        </a>
                        <div class="vr"></div>

                    <?php } ?>
                    <?php if ($this->infopage->info_pagina_tiktok) { ?>
                        <a href="<?php echo $this->infopage->info_pagina_tiktok ?>" target="_blank" style="color:<?php echo $this->primerRuleta->ruleta_color_txt2 ?>">
                            <i class="fa-brands fa-tiktok"></i>
                        </a>


                    <?php } ?>

                </div>


            </div>
        </section>
        <!-- --------------------
        FIN SECCION 2, DONDE ESTA LOS ICONOS DE REDES E INFORMACION LEGAL
        ------------------ -->
    </main>

</div>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-semibold">
                    <?php echo $this->infopage->info_pagina_titulo_legal ?>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php echo $this->infopage->info_pagina_descripcion_legal ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn text-white" data-bs-dismiss="modal" style="background:<?php echo $this->primerRuleta->ruleta_color_fondo2 ?>">Cerrar</button>

            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalPoliticas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-semibold">
                    <?php echo $this->infopage->info_pagina_titulo_politica ?>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php echo $this->infopage->info_pagina_descripcion_politica ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn text-white" data-bs-dismiss="modal" style="background:<?php echo $this->primerRuleta->ruleta_color_fondo2 ?>">Cerrar</button>

            </div>
        </div>
    </div>
</div>