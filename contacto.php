<?php $page_title='Contacto | Factor Humano' ?>
<?php $page_description='"Contacto. Ubicación. Envíenos un mensaje. San Luis 1128, Corrientes, Argentina. contacto@factorh.com.ar. Factor Humano"'?>
<?php $page_keywords='"factor, humano, corrientes, factor humano, modernizacion de empresas, factorh, salud ocupacional, higiene y seguridad, auditoria medica, novedades"' ?>
<?php include_once('layouts/header.php'); ?>

<body>
  <div class="container-fluid hero" style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('media/contacto.jpg'); background-size: cover; background-position: center; height: 40vh;">
    <div class="d-flex text-center h-100">
          <div class="my-auto w-100 text-white">
            <p class="font-weight-bold hero-title">CONTACTO</p>
          </div>
        </div>
  </div>
  <div class="container-fluid">
    <div class="row py-5">
      <div class="col-md-1"></div>
      <div class="col-md-5 pb-3" data-aos="zoom-in" data-aos-duration="1500" data-aos-once="true">
        <div style="background-color: rgba(246, 128, 34,1);text-align: center; margin: 0px 0px 20px 0px; padding:10px 10px 10px 10px">
          <h4 class="text-center text-white"> Ubicación </h4>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3643.7202253413884!2d-58.84508427586479!3d-27.469551760244006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf7a6e647137fdc6c!2sFactor+Humano!5e0!3m2!1ses-419!2sar!4v1545158274240" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <div class="col-md-5 text-center pb-3" data-aos="zoom-in" data-aos-duration="1500" data-aos-once="true">
        <div style="background-color: rgba(246, 128, 34,1);text-align: center; margin: 0px 0px 20px 0px; padding:10px 10px 10px 10px">
          <h4 class="text-center text-white"> Envíenos un mensaje </h4>
        </div>
        <form action="/web/enviar.php" method="POST" target="_blank">
          <div class="form-group">
            <input type="text" class="form-control" name="nombre" placeholder="Nombre">
            <input type="email" class="form-control mt-2" name="email" placeholder="E-mail">
            <input type="text" class="form-control mt-2" name="telefono" placeholder="Teléfono">
            <textarea class="form-control mt-2" rows="7" name="mensaje" placeholder="Mensaje..."></textarea>
          </div>
          <button type="submit" class="btn btn-primary" name="enviar">Enviar mensaje</button>
        </form>
      </div>
      <div class="col-md-1"></div>
    </div>
  </div>

  <div class="container-fluid py-4 bg-dark">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-4 py-3">
        <p style="line-height: 2em;">
          <img src="/web/media/logoynombre.png" width="270" class="d-inline-block align-top" alt=""><br><br>
          <span class="text-white"><img style="height: 3vh;" src="/web/flaticon/call.svg"> <a href="tel:+543794461020" style="text-decoration: none;color: white;"> +54 3794 501997</a></span><br>
          <span class="text-white"><img style="height: 3vh;" src="/web/flaticon/correo.svg"><a href="mailto:contacto@factorh.com.ar?Subject=Consulta%20via%20pagina%20web" target="_top" style="text-decoration: none;color: white;"> info@factorh.com.ar</a></span><br>
          <span class="text-white"><img style="height: 3vh;" src="/web/flaticon/world.svg"> www.factorh.com.ar<br>
          <span class="text-white"><img style="height: 3vh;" src="/web/flaticon/ubicacion.svg"> San Luis 1128, Corrientes, Argentina<br>
        </p>
      </div>
      <div class="col-md-4 py-3 text-center">
        <h4 class="text-white">Redes sociales</h4><br>
        <a href="https://www.facebook.com/Factor-humano-2067995699939991" target="_blank"><img style="height: 6vh;" src="/web/flaticon/facebook.svg" class="mx-1"></a>
        <a href="https://www.instagram.com/factorhumano.fh/" target="_blank"><img style="height: 6vh;" src="/web/flaticon/instagram.svg" class="mx-1"></a>
        <a href="https://wa.me/+543794501997 "><img class="mx-1" style="height: 6vh;" src="/web/flaticon/whatsapp.svg"></a>
        <a href="https://www.youtube.com/"><img style="height: 6vh;" src="/web/flaticon/youtube.svg" class="mx-1"></a>
      </div>
      <div class="col-md-2"></div>
    </div>
  </div>
  <div class="container-fluid text-center text-white py-3" style="background-color: black;">
    © 2019 Factor Humano, Todos los derechos reservados.
  </div>

</body>

