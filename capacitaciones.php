<?php $page_title='Capacitaciones | Factor Humano' ?>
<?php $page_description='"Damos capacitaciones en empresas: Cuidado de la columna, hipertensión arterial y trabajo, estrés en el trabajo, hostigamiento laboral, riesgos psicosociales, vida sana, mindfulness. Ver fotos..."'?>
<?php $page_keywords='"factor, humano, corrientes, factor humano, modernizacion de empresas, factorh, salud ocupacional, higiene y seguridad, auditoria medica, novedades"' ?>

<?php include_once($_SERVER['DOCUMENT_ROOT'].'/web/layouts/header.php'); ?>

<body>
  
<!-------------- HERO DE TITULO --------------------->
  <div class="container-fluid hero" style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('/web/media/capacitaciones.jpg'); background-size: cover; background-position: center; height: 40vh;">
    <div class="d-flex text-center h-100">
          <div class="my-auto w-100 text-white">
            <p class="font-weight-bold hero-title" style="font-size: 7vh;overflow: auto;">CAPACITACIONES</p>
          </div>
        </div>
  </div>
<!-------------------------------------------------> 
	<div class="container-fluid">
    <div class="row py-5">
      <div class="col-md-1"></div>
      <div class="col-md-5 pb-3" data-aos="zoom-in" data-aos-duration="1500" data-aos-once="true">
        <div style="background-color: rgba(246, 128, 34,1);text-align: center; margin: 0px 0px 20px 0px; padding:10px 10px 10px 10px;">
          <h4 class="text-center text-white"> Damos capacitaciones en empresas: </h4>
        </div>
        <a href="/web/contacto.php" target="_blank" style="text-decoration: none;" >
	        <div class="btn-catalogo" data-aos="zoom-in" data-aos-duration="1500" data-aos-once="true"> 
	        	Cuidado de la columna
	        </div>
	    </a>
	    <a href="/web/contacto.php" target="_blank" style="text-decoration: none;" >
	        <div class="btn-catalogo" data-aos="zoom-in" data-aos-duration="1500" data-aos-once="true"> 
	        	Hipertensión arterial y trabajo
	        </div>
	    </a>
	    <a href="/web/contacto.php" target="_blank" style="text-decoration: none;" >
	        <div class="btn-catalogo" data-aos="zoom-in" data-aos-duration="1500" data-aos-once="true"> 
	        	Estrés en el trabajo
	        </div>
	    </a>
	    <a href="/web/contacto.php" target="_blank" style="text-decoration: none;" >
	        <div class="btn-catalogo" data-aos="zoom-in" data-aos-duration="1500" data-aos-once="true"> 
	        	Hostigamiento laboral
	        </div>
	    </a>
	    <a href="/web/contacto.php" target="_blank" style="text-decoration: none;" >
	        <div class="btn-catalogo" data-aos="zoom-in" data-aos-duration="1500" data-aos-once="true"> 
	        	Riesgos psicosociales
	        </div>
	    </a>
	    <a href="/web/contacto.php" target="_blank" style="text-decoration: none;" >
	        <div class="btn-catalogo" data-aos="zoom-in" data-aos-duration="1500" data-aos-once="true"> 
	        	Vida sana
	        </div>
	    </a>
	    <a href="/web/contacto.php" target="_blank" style="text-decoration: none;" >
	        <div class="btn-catalogo" data-aos="zoom-in" data-aos-duration="1500" data-aos-once="true"> 
	        	Mindfulness
	        </div>
	    </a>
      </div>
      <div class="col-md-5 text-center pb-3" data-aos="zoom-in" data-aos-duration="1500" data-aos-once="true">
        <div style="background-color: rgba(246, 128, 34,1);text-align: center; margin: 0px 0px 20px 0px; padding:10px 10px 10px 10px">
          <h4 class="text-center text-white"> Fotos </h4>
        </div>
        <div class="row justify-content-center">
		    <div class="col-md-12">
		        <div class="row">
		            <a href="/web/media/capacitaciones/cap1.jpeg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-6 my-2">
		                <img src="/web/media/capacitaciones/cap1.jpeg" class="img-fluid">
		            </a>
		            <a href="/web/media/capacitaciones/cap2.jpeg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-6 my-2">
		                <img src="/web/media/capacitaciones/cap2.jpeg" class="img-fluid">
		            </a>
		            
		        </div>
		        <div class="row">
		            <a href="/web/media/capacitaciones/cap3.jpeg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-6 my-2">
		                <img src="/web/media/capacitaciones/cap3.jpeg" class="img-fluid">
		            </a>
		            <a href="/web/media/capacitaciones/cap4.jpeg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-6 my-2">
		                <img src="/web/media/capacitaciones/cap4.jpeg" class="img-fluid">
		            </a>

		        </div>
		    </div>
		</div>
      </div>
      <div class="col-md-1"></div>
    </div>
  </div>


<script>
$(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });

</script>
</body>

<?php include_once($_SERVER['DOCUMENT_ROOT'].'/web/layouts/footer.php'); ?>	