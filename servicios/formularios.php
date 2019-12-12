<?php $page_title='Formularios | Factor Humano' ?>
<?php $page_description='"Descargar formularios. Formularios laborales: Solicitud de reingreso, Alta médica / Fin de tratamiento. IOSCor: Solicitud de internación domiciliaria, Renovación Internación domiciliaria, Consentimiento informado para internación domiciliaria."'?>
<?php $page_keywords='"factor, humano, corrientes, factor humano, modernizacion de empresas, factorh, salud ocupacional, higiene y seguridad, auditoria medica, novedades"' ?>

<?php include_once($_SERVER['DOCUMENT_ROOT'].'/web/layouts/header.php'); ?>

<body>
  
<!-------------- HERO DE TITULO --------------------->
  <div class="container-fluid hero" style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('/web/media/formularios.jpg'); background-size: cover; background-position: center; height: 40vh;">
    <div class="d-flex text-center h-100">
          <div class="my-auto w-100 text-white">
            <p class="font-weight-bold hero-title">Formularios</p>
          </div>
        </div>
  </div>
<!------------------------------------------------->  
  <div class="container-fluid">
    <div class="row py-5">
      <div class="col-md-1"></div>
      <div class="col-md-5 pb-3" data-aos="zoom-in" data-aos-duration="1500" data-aos-once="true">
        <div style="background-color: rgba(246, 128, 34,1);text-align: center; margin: 0px 0px 20px 0px; padding:10px 10px 10px 10px">
          <h4 class="text-center text-white"> Laborales </h4>
        </div>
        <a href="/web/servicios/form-sol-reingreso.php" target="_blank" style="text-decoration: none;">
          <div class="btn-descarga-pdf">
              <i class="fa fa-file-pdf-o" style="font-size:22px"> </i> 
                Solicitud de reingreso
          </div>
        </a>
        <a href="form-alt-med-fin-trat.php" target="_blank"  style="text-decoration: none;">
          <div class="btn-descarga-pdf">
              <i class="fa fa-file-pdf-o" style="font-size:22px"> </i> 
                Alta médica / Fin de tratamiento
          </div>
        </a>  
      </div>
      <div class="col-md-5 text-center pb-3" data-aos="zoom-in" data-aos-duration="1500" data-aos-once="true">
        <div style="background-color: rgba(246, 128, 34,1);text-align: center; margin: 0px 0px 20px 0px; padding:10px 10px 10px 10px">
          <h4 class="text-center text-white"> IOSCor </h4>
        </div>
        <a href="form-sol-id.php" target="_blank" style="text-decoration: none;">
          <div class="btn-descarga-pdf">
              <i class="fa fa-file-pdf-o" style="font-size:25px"> </i> 
                Solicitud de internación domiciliaria
          </div>
        </a>
        <a href="form-renov-id.php" target="_blank" style="text-decoration: none;">
          <div class="btn-descarga-pdf">
              <i class="fa fa-file-pdf-o" style="font-size:25px"> </i> 
                Renovación internación domiciliaria
          </div>
        </a>
        <a href="form-consent-inf-id.php" target="_blank" style="text-decoration: none;">
          <div class="btn-descarga-pdf">
              <i class="fa fa-file-pdf-o" style="font-size:25px"> </i> 
                Consentimiento informado para internación domiciliaria
          </div>
        </a>
      </div>
      <div class="col-md-1"></div>
    </div>
  </div>

</body>

<?php include_once($_SERVER['DOCUMENT_ROOT'].'/web/layouts/footer.php'); ?>