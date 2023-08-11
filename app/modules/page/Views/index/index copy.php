<div class="container">
    <main>
        <section class="row sec1 ps-5  pe-5 pt-4">
            <div class="col-12 col-md-4">
                <div class="mb-3">
                    <a href="#" class="ir_fendy text-white"> <img src="/skins/page/images/tarjetablanco.png" alt=""> FendyShop</a>
                </div>

                <span class="mt-2 fendy_categorias">Categorías destacadas</span>
                <a href="#" class="list_links_fendy"><img src="/skins/page/images/tarjetablanco.png" alt=""> Boletería</a>
                <a href="#" class="list_links_fendy"><img src="/skins/page/images/tarjetablanco.png" alt=""> Viajes</a>
                <a href="#" class="list_links_fendy"><img src="/skins/page/images/tarjetablanco.png" alt=""> Tecnología</a>

            </div>
            <div class="col-12 col-md-4 ps-4">Column</div>
            <div class="col-12 col-md-4 d-flex p-0 gap-2 align-items-end flex-column">
                <img src="/skins/page/images/3blanco.png" class="img_menu mb-3" alt="">

                <a href="#" class="list_links_info" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="custom-tooltip" data-bs-title="Escríbenos"><img src="/skins/page/images/3blanco.png" class="" alt=""></a>
                <a href="#" class="list_links_info" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="custom-tooltip" data-bs-title="Continuar pago"><img src="/skins/page/images/3blanco.png" class="" alt=""></a>


            </div>
        </section>
        <section class=" row sec3">
            <span class="svg-container-home">
                <svg title="Save" viewBox="0 -0.5 25 25" height="85px" width="80px" xmlns="http://www.w3.org/2000/svg" class="" style="fill:<?php echo $this->partials->partials_color_bandera_afiliate ?>">
                    <path stroke-linejoin="round" stroke-linecap="round" stroke-width="1.5" d="M18.507 19.853V6.034C18.5116 5.49905 18.3034 4.98422 17.9283 4.60277C17.5532 4.22131 17.042 4.00449 16.507 4H8.50705C7.9721 4.00449 7.46085 4.22131 7.08577 4.60277C6.7107 4.98422 6.50252 5.49905 6.50705 6.034V19.853C6.45951 20.252 6.65541 20.6407 7.00441 20.8399C7.35342 21.039 7.78773 21.0099 8.10705 20.766L11.907 17.485C12.2496 17.1758 12.7705 17.1758 13.113 17.485L16.9071 20.767C17.2265 21.0111 17.6611 21.0402 18.0102 20.8407C18.3593 20.6413 18.5551 20.2522 18.507 19.853Z" clip-rule="evenodd" fill-rule="evenodd"></path>
                </svg>
            </span>

            <div class="col-12 col-md-4">
                <p class="titulo">BIENVENIDOS A</p>
                <p class="titulo-color">FENDESA ONLINE</p>
                <P class="subtitulo">Nuestro portal digital diseñado para ti</P>

            </div>
            <div class="col-12 col-md-4">
                <div class="ruleta"></div>
                <div class="cabezote">
                    <img src="/images/cabezote1.png" class="" alt="Imagen de cabezote">
                </div>
            </div>
            <div class="col-12 col-md-4 px-3">
                <span class="text-decoration-underline">Links de interés</span>

                <a href="#" class="list_links_interes"> <img src="/skins/page/images/tarjetablanco.png" alt=""> Créditos</a>
                <a href="#" class="list_links_interes"><img src="/skins/page/images/esrrellablanco.png" alt=""> Convenios</a>
                <a href="#" class="list_links_interes"><img src="/skins/page/images/corazonblanco.png" alt=""> Ahorros</a>

            </div>

        </section>

        <section class="sec2">

        </section>
    </main>

</div>

<style>
    main {

        gap: 1rem;
        display: grid;
        place-items: center;
        position: relative;
        margin-bottom: 200px;
    }


    .sec1 {
        background-color: red;
        height: 400px;
        border-radius: 50px;
        width: 85%;
        background: var(--rojo);


    }

    .sec2 {
        background-color: blue;
        height: 280px;
        border-radius: 50px;
        width: 85%;
        background: #00F4F5;


    }

    .sec3 {
        align-items: center;
        height: 330px;
        width: 75%;
        border-radius: 50px;
        position: absolute;
        margin-top: 150px;
        background: rgb(255, 255, 255);
        background: linear-gradient(90deg, rgba(255, 255, 255, 1) 0%, rgba(219, 219, 222, 1) 100%);
        z-index: 9;
    }

    .sec3 .svg-container-home {
        position: absolute;
        top: -23px;
        left: 35px;
    }

    .list_links_interes {
        background: #f04263;
        margin-top: 20px;
        color: #FFF;
        padding: 7px 10px 7px 25px;
        border-radius: 50px;
        display: block;
        text-decoration: none;
    }

    .list_links_interes img {
        background: #00dcdd;
        width: 2.5rem;
        border-radius: 50%;
        padding: 5px;
    }

    .titulo {

        font-family: 'Mongoose-Light';
        margin: 0;
        font-size: 2rem;
        line-height: 40px;

    }


    .titulo-color {
        font-family: 'Mongoose-Black_0';
        font-size: 3rem;
        font-weight: bold;
        color: #f04263;
        margin: 0;
        line-height: 30px;
    }

    .subtitulo {
        margin: 0;
        line-height: 30px;
        font-weight: 100;
        font-family: 'Poppins-ExtraLight';

    }

    .ir_fendy {

        font-size: 1rem;
        font-family: 'Poppins-Medium';
        font-weight: 500;
    }

    .ir_fendy img {
        width: 3rem;
        background: #00dcdd;
        border-radius: 50%;

    }

    .fendy_categorias {
        /* font-family: 'Poppins-Light'; */
        font-family: 'Poppins-Light';
        color: #FFF;
        font-size: 0.9rem;
        text-decoration: underline;

    }

    .list_links_fendy {
        color: #FFF;
        padding: 5px 0px;
        border-radius: 20px;
        display: block;
        text-decoration: none;
        font-family: 'Poppins-ExtraLight';

    }

    .list_links_fendy img {
        background: #00dcdd;
        width: 2rem;
        border-radius: 50%;
        padding: 5px;
    }

    .img_menu {
        width: 3rem;
    }

    .list_links_info img {
        width: 2.5rem;

    }

    .custom-tooltip {
        --bs-tooltip-bg: #ffffff4d;
        font-family: 'Poppins-ExtraLight';


    }

    .ruleta {
        width: 300px;
        height: 300px;
        background: #00dcdd;
        border-radius: 50%;
        position: absolute;
        top: -82px;
        /* margin-left: - */
    }

    .ruleta::after  {
        content: "";
  position: absolute;
  bottom: 99%;
    left: 50%;

  margin-left: -20px; /* Ajusta este valor para mover el triángulo hacia la izquierda o derecha */
  border-left: 20px solid transparent;
  border-right: 20px solid transparent;
  border-bottom: 40px solid #00dcdd;
  border-top-left-radius: 20px;
  border-top-right-radius: 20px;
    }

    .cabezote img {
        width: 279px;
        height: 430px;
        position: absolute;
        bottom: 0;
        /* margin-left: -60px; */
    }

    .cabezote {
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>
<script>


</script>