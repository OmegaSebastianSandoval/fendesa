<div class="container" style="margin-bottom: 300px;">

  <!--
   ***************************************
    INICIO CABECERA
     ***************************************
    -->
  <div class="contactanos-header pe-5" style="background:<?php echo $this->contactanos->contactenos_color_fondo; ?>; color: <?php echo $this->contactanos->contactenos_color_txt; ?>;">
    <div class="row  h-100 d-flex align-items-center">
      <div class="col-md-5 d-flex align-items-center justify-content-center">
        <!--
   ***************************************
    INICIO CUADRADO
     ***************************************
    -->
        <div class="cuadrado" style="background:<?php echo $this->contactanos->contactenos_cuadro_color; ?>">
          <img class="" src="/images/<?php echo $this->contactanos->contactenos_cuadro_img; ?>" alt="">
          <!--
   ***************************************
    INICIO BANDERA DEL CUADRADO
     ***************************************
    -->
          <span class="svg-container-home">
            <svg title="Save" viewBox="0 -0.5 25 25" height="85px" width="100px" xmlns="http://www.w3.org/2000/svg" class="" style="fill:<?php echo $this->contactanos->contactenos_color_bandera; ?>">
              <path stroke-linejoin="round" stroke-linecap="round" stroke-width="1.5" d="M18.507 19.853V6.034C18.5116 5.49905 18.3034 4.98422 17.9283 4.60277C17.5532 4.22131 17.042 4.00449 16.507 4H8.50705C7.9721 4.00449 7.46085 4.22131 7.08577 4.60277C6.7107 4.98422 6.50252 5.49905 6.50705 6.034V19.853C6.45951 20.252 6.65541 20.6407 7.00441 20.8399C7.35342 21.039 7.78773 21.0099 8.10705 20.766L11.907 17.485C12.2496 17.1758 12.7705 17.1758 13.113 17.485L16.9071 20.767C17.2265 21.0111 17.6611 21.0402 18.0102 20.8407C18.3593 20.6413 18.5551 20.2522 18.507 19.853Z" clip-rule="evenodd" fill-rule="evenodd"></path>
            </svg>
          </span>
          <!--
   ***************************************
    FIN BANDERA DEL CUADRADO
     ***************************************
    -->
        </div>
        <!--
   ***************************************
    FIN CUADRADO
     ***************************************
    -->
      </div>
      <!--
   ***************************************
    CONTACTANOS LOGO PRINCIPAL Y TITULO
     ***************************************
    -->
      <div class="col-md-5 d-flex align-items-center justify-content-center">

        <img class="icon" src="/images/<?php echo $this->contactanos->contactenos_logo; ?>" alt="">

        <h1>
          <?php echo $this->contactanos->contactenos_titulo; ?>
        </h1>
      </div>
      <!--
   ***************************************
    CONTACTANOS LOGO PRINCIPAL Y TITULO
     ***************************************
    -->
      <!--
   ***************************************
   INICIO OPCIONES PARTE DERECHA DE LA CABECERA
     ***************************************
    -->
      <div class="col-12 col-md-2 d-flex gap-2 align-items-end flex-column">
      <?php include(APP_PATH. "modules/page/Views/partials/btnlateral.php")?>


      </div>
      <!--
   ***************************************
   FIN OPCIONES PARTE DERECHA DE LA CABECERA
     ***************************************
    -->

    </div>


  </div>
  <!--
   ***************************************
   INICIO IMAGEN HORIZONTAL Y BOTON IR A FENDYSHOP
     ***************************************
    -->
  <div class="row d-flex justify-content-end align-items-center mt-1">
    <div class="col-5">
      <img class="w-100" src="/images/<?php echo $this->contactanos->contactenos_cuadro_img_fondo; ?>" alt="" style=" margin-top: -40px;">
    </div>
    <div class="col-3 d-flex align-items-end justify-content-end">


      <!--
   ***************************************
   INICIO BOTON IR A FENDYSHOP
     ***************************************
    -->
      <div class="btn-conteiner">
        <a class="btn-content" target="_blank" href="<?php echo $this->contactanos->contactenos_btn1_link; ?>" style="background:<?php echo $this->contactanos->contactenos_boton_color_fondo; ?>; color: <?php echo $this->contactanos->contactenos_color_txt; ?>;">



          <span class="btn-title" style="background:<?php echo $this->contactanos->contactenos_boton_color; ?>;">
            <img class="icon" src="/images/<?php echo $this->contactanos->contactenos_img_fendy; ?>" alt="" style="width: 40px;">
            <?php echo $this->contactanos->contactenos_titulo_boton; ?>
          </span>



          <span class="icon-arrow">
            <svg width="66px" height="43px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <path id="arrow-icon-one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                <path id="arrow-icon-two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                <path id="arrow-icon-three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
              </g>
            </svg>
          </span>
        </a>
      </div>
      <!--
   ***************************************
   FIN BOTON IR A FENDYSHOP
     ***************************************
    -->
    </div>
  </div>
  <!--
   ***************************************
   FIN IMAGEN HORIZONTAL Y BOTON
     ***************************************
    -->

  <!--
   ***************************************
    FIN CABECERA
     ***************************************
    -->

  <div class="row" style="margin-top: 100px;">

    <!--
   ***************************************
    INICIO BOTONES FLOTANTES 
     ***************************************
    -->
    <div class="col-1 d-flex gap-3 justify-content-center flex-column align-items-center">
      <?php foreach ($this->botones as $boton) { ?>

        <a href="/page/conocenos?id=<?php echo $boton->contactenos_id; ?>" class="btn-flotante" style="background: <?php if ($boton->contactenos_id == $this->primerRegistro->contactenos_id) {
                                                                                                                      echo $this->contactanos->contactenos_color_fondo;
                                                                                                                    } else {
                                                                                                                      echo $this->contactanos->contactenos_color_fondo_1;
                                                                                                                    } ?>;">
          <img src="/images/<?php echo $boton->contactenos_logo2; ?>" class="img-fluid w-75" alt="">
        </a>
      <?php } ?>


    </div>
    <!--
   ***************************************
    FIN BOTONES FLOTANTES 
     ***************************************
    -->

    <div class="col-11 contenedor-section">
      <!--
   ***************************************
    INICIO BANDERA
     ***************************************
    -->
      <span class="svg-container-contacto">
        <svg title="Save" viewBox="0 -0.5 25 25" height="85px" width="100px" xmlns="http://www.w3.org/2000/svg" class="" style="fill:<?php echo $this->contactanos->contactenos_color_bandera; ?>">
          <path stroke-linejoin="round" stroke-linecap="round" stroke-width="1.5" d="M18.507 19.853V6.034C18.5116 5.49905 18.3034 4.98422 17.9283 4.60277C17.5532 4.22131 17.042 4.00449 16.507 4H8.50705C7.9721 4.00449 7.46085 4.22131 7.08577 4.60277C6.7107 4.98422 6.50252 5.49905 6.50705 6.034V19.853C6.45951 20.252 6.65541 20.6407 7.00441 20.8399C7.35342 21.039 7.78773 21.0099 8.10705 20.766L11.907 17.485C12.2496 17.1758 12.7705 17.1758 13.113 17.485L16.9071 20.767C17.2265 21.0111 17.6611 21.0402 18.0102 20.8407C18.3593 20.6413 18.5551 20.2522 18.507 19.853Z" clip-rule="evenodd" fill-rule="evenodd"></path>
        </svg>
      </span>
      <!-- ***************************************
    FIN BANDERA
     *************************************** -->
      <section class="section-1" style="background: <?php echo $this->contactanos->contactenos_color_fondo_1; ?>;">

        <div class="content-left justify-content-start align-items-start">
          <!--***************************************
    INICIO ICONO CIRCULAR
     *************************************** -->
          <img class="icon2" src="/images/<?php echo $this->primerRegistro->contactenos_logo2; ?>" alt="" style="background: <?php echo $this->contactanos->contactenos_color_fondo; ?>;">
          <!--***************************************
    FIN ICONO CIRCULAR
     *************************************** -->

          <!--***************************************
    INICIO DESCRIPCION
     *************************************** -->
          <div class="text mt-5" style="line-height: 1;">
            <?php echo $this->primerRegistro->contactenos_descripcion; ?>
          </div>

          <!--***************************************
    FIN DESCRIPCION
     *************************************** -->

          <!--***************************************
     INICIO DOS BOTONES
     *************************************** -->
          <div class="buttons mt-5 d-grid gap-5">


            <!--***************************************
     INICIO PRIMER BOTON
     *************************************** -->

            <div class="btn-conteiner">


              <a class="btn-content" href="<?php echo $this->contactanos->contactenos_btn4_link; ?>" style="background:<?php echo $this->contactanos->contactenos_btn2_color; ?>; color: <?php echo $this->contactanos->contactenos_color_txt; ?>;">



                <span class="btn-title" style="background:<?php echo $this->contactanos->contactenos_btn4_color; ?>;">
                  <img class="icon" src="/images/<?php echo $this->contactanos->contactenos_btn4_img; ?>" alt="" style="width: 40px;">
                  <?php echo $this->contactanos->contactenos_btn4_txt; ?>
                </span>



                <span class="icon-arrow">
                  <svg width="66px" height="43px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <path id="arrow-icon-one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                      <path id="arrow-icon-two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                      <path id="arrow-icon-three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
                    </g>
                  </svg>
                </span>
              </a>
            </div>

            <!--***************************************
     FIN PRIMER BOTON
     *************************************** -->

            <!--***************************************
    INICIO SEGUNDO BOTON
     *************************************** -->
          </div>
          <div class="buttons mt-5 d-grid gap-5">
            <div class="content-enviar">

              <div class="btn-conteiner">

                <a class="btn-content border-0" href="<?php echo $this->contactanos->contactenos_btn5_link; ?>" style="background:<?php echo $this->contactanos->contactenos_btn3_color; ?>; color: <?php echo $this->contactanos->contactenos_color_txt; ?>;">



                  <span class="btn-title" style="background:<?php echo $this->contactanos->contactenos_btn5_color; ?>;">
                    <img src="/images/<?php echo $this->contactanos->contactenos_btn5_img; ?>" alt="" style="width: 40px;">
                    <?php echo $this->contactanos->contactenos_btn5_txt; ?>
                  </span>



                  <span class="icon-arrow">
                    <svg width="66px" height="43px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <path id="arrow-icon-one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                        <path id="arrow-icon-two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                        <path id="arrow-icon-three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
                      </g>
                    </svg>
                  </span>
                </a>
              </div>
            </div>
          </div>

          <!--***************************************
    FIN SEGUNDO BOTON
     *************************************** -->

          <!--***************************************
     FIN DOS BOTONES
     *************************************** -->

        </div>




        <section class="section-2" style="background: <?php echo $this->contactanos->contactenos_color_fondo_2; ?>;">

          <!--***************************************
    TITULO CONTNEIDO
     *************************************** -->
          <h2 style="color: <?php echo $this->contactanos->contactenos_color_fondo; ?>;"><?php echo $this->primerRegistro->contactenos_titulo_interno; ?></h2>



          <?php if ($this->primerRegistro->tipo == 1) { ?>
            
            <?php include( "../app/modules/page/Views/template/contenidonormal.php"); ?>
          <?php } else if ($this->primerRegistro->tipo == 2 ) { ?>
            
            <?php include("../app/modules/page/Views/template/contenidoslider.php"); ?>
          <?php } else if ($this->primerRegistro->tipo == 4 ) { ?>
            
            <?php include("../app/modules/page/Views/template/galeria.php"); ?>
          <?php } ?>
         
        </section>
      </section>
    </div>


  </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {


    $('.autoplay').slick({
      dots: true,
      infinite: false,
      speed: 300,
      slidesToShow: 3,
      arrows: false,
      rows: 2,
      slidesToScroll: 6,
      responsive: [{
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
    Fancybox.bind('[data-fancybox="gallery"]', {
      Images: {
        content: (_ref, slide) => {
          let rez = "<picture>";

          const media = slide.media.split(";");

          slide.sources.split(";").map((source, index) => {
            rez += `<source
          media="${media[index] || ""}"
          srcset="${source}"
        />`;
          });

          rez += `<img src="${slide.src}" alt="" />`;

          rez += "</picture>";

          return rez;
        },
   
      },
    });
  });
</script>



<style>
  .autoplay {
    height: 100%;
    margin: auto;
    display: grid;
    place-content: center
  }

  .slick-dots {
    position: initial;
  }

  .slick-dots li.slick-active button:before {
    color: <?php echo $this->contactanos->contactenos_color_fondo; ?> !important;
    opacity: 1;
    font-size: 1rem !important;
  }

  .slick-dots li button:before {
    color: <?php echo $this->contactanos->contactenos_color_fondo; ?> !important;
    opacity: .5;
    font-size: 1rem !important;
  }

  .slick-track {
    display: flex;
    gap: 10px;
    width: auto;
    min-width: 100px;
  }

  .slick-slide img {
    width: 80px !important;
    height: 80px !important;
    object-fit: cover;

  }

  .input {
    height: 40px;
    border-radius: 20px;
    border: 2px solid <?php echo $this->contactanos->contactenos_color_fondo_1; ?>;
    outline: none;
    transition: 200ms ease-in;
    padding-left: 1rem;
    width: 100%;
  }

  .textarea {
    height: 300px;

  }


  .input:focus {
    border-bottom: 4px solid <?php echo $this->contactanos->contactenos_color_fondo_1; ?>;
    padding-top: 2px;
  }

  .input::placeholder {
    color:
      <?php echo $this->contactanos->contactenos_color_fondo_1; ?>;
    opacity: 0.5;
  }





  /* +++++++++++++++++++++++++++++++++++
  INICIO BOTON PRINCIPAL CONTACTENOS 
  +++++++++++++++++++++++++++++++++++++*/

  .btn-conteiner {
    display: flex;
    justify-content: center;

  }

  .btn-content {
    display: flex;
    align-items: center;
    padding-right: 10px;

    text-decoration: none;
    font-family: 'Poppins', sans-serif;
    font-weight: 500;
    font-size: 12px;

    transition: 1s;
    border-radius: 50px;

  }

  .btn-title {
    display: flex;
    justify-content: center;
    align-items: center;
    padding-right: 10px;
    margin: 9px;
    border-radius: 27px;
    width: 160px;
  }

  .btn-content:hover,
  .btn-content:focus {
    transition: 0.5s;
    -webkit-animation: btn-content 1s;
    animation: btn-content 1s;
    outline: 0.1em solid transparent;
    outline-offset: 0.2em;

  }

  .btn-content .icon-arrow {
    transition: 0.5s;
    margin-right: 0px;
    transform: scale(0.6);
  }

  .btn-content:hover .icon-arrow {
    transition: 0.5s;
    margin-right: 25px;
  }

  .icon-arrow {
    width: 20px;
    margin-left: 15px;
    position: relative;
    top: 6%;
  }

  /* SVG */
  #arrow-icon-one {
    transition: 0.4s;
    transform: translateX(-60%);
  }

  #arrow-icon-two {
    transition: 0.5s;
    transform: translateX(-30%);
  }

  .btn-content:hover #arrow-icon-three {
    animation: color_anim 1s infinite 0.2s;
  }

  .btn-content:hover #arrow-icon-one {
    transform: translateX(0%);
    animation: color_anim 1s infinite 0.6s;
  }

  .btn-content:hover #arrow-icon-two {
    transform: translateX(0%);
    animation: color_anim 1s infinite 0.4s;
  }



  /* SVG animations */
  @keyframes color_anim {
    0% {
      fill: white;
    }

    50% {
      fill:
        <?php echo $this->contactanos->contactenos_boton_color; ?>;
    }

    100% {
      fill: white;
    }
  }

  /* Button animations */
  @-webkit-keyframes btn-content {
    0% {
      outline: 0.2em solid <?php echo $this->contactanos->contactenos_boton_color; ?>;
      outline-offset: 0;
    }
  }

  @keyframes btn-content {
    0% {
      outline: 0.2em solid <?php echo $this->contactanos->contactenos_boton_color; ?>;
      outline-offset: 0;
    }
  }

  /* +++++++++++++++++++++++++++++++++++
  FIN BOTON PRINCIPAL CONTACTENOS 
  +++++++++++++++++++++++++++++++++++++*/


  /* +++++++++++++++++++++++++++++++++++
  INICIO BOTON ENVIAR MENSAJE
  +++++++++++++++++++++++++++++++++++++*/
  .btn-conteiner {
    display: flex;
    justify-content: center;

  }

  .btn-content {
    display: flex;
    align-items: center;
    padding-right: 10px;

    text-decoration: none;
    font-family: 'Poppins', sans-serif;
    font-weight: 500;
    font-size: 12px;

    transition: 1s;
    border-radius: 50px;

  }

  .btn-title {
    display: flex;
    justify-content: center;
    align-items: center;
    padding-right: 10px;
    margin: 9px;
    border-radius: 27px;
    width: 160px;
  }

  .content-enviar .btn-content:hover,
  .content-enviar .btn-content:focus {
    transition: 0.5s;
    -webkit-animation: btn-content2 1s;
    animation: btn-content2 1s;
    outline: 0.1em solid transparent;
    outline-offset: 0.2em;

  }

  .btn-content .icon-arrow {
    transition: 0.5s;
    margin-right: 0px;
    transform: scale(0.6);
  }

  .btn-content:hover .icon-arrow {
    transition: 0.5s;
    margin-right: 25px;
  }

  .icon-arrow {
    width: 20px;
    margin-left: 15px;
    position: relative;
    top: 6%;
  }

  /* SVG */
  #arrow-icon-one {
    transition: 0.4s;
    transform: translateX(-60%);
  }

  #arrow-icon-two {
    transition: 0.5s;
    transform: translateX(-30%);
  }

  .content-enviar .btn-content:hover #arrow-icon-three {
    animation: color_anim2 1s infinite 0.2s;
  }

  .content-enviar .btn-content:hover #arrow-icon-one {
    transform: translateX(0%);
    animation: color_anim2 1s infinite 0.6s;
  }

  .content-enviar .btn-content:hover #arrow-icon-two {
    transform: translateX(0%);
    animation: color_anim2 1s infinite 0.4s;
  }

  /* SVG animations */
  @keyframes color_anim2 {
    0% {
      fill: white;
    }

    50% {
      fill:
        <?php echo $this->contactanos->contactenos_btn5_color; ?>;
    }

    100% {
      fill: white;
    }
  }

  /* Button animations */
  @-webkit-keyframes btn-content2 {
    0% {
      outline: 0.2em solid <?php echo $this->contactanos->contactenos_btn5_color; ?>;
      outline-offset: 0;
    }
  }

  @keyframes btn-content2 {
    0% {
      outline: 0.2em solid <?php echo $this->contactanos->contactenos_btn5_color; ?>;
      outline-offset: 0;
    }
  }

  /* +++++++++++++++++++++++++++++++++++
  FIN BOTON ENVIAR MENSAJE
  +++++++++++++++++++++++++++++++++++++*/
</style>