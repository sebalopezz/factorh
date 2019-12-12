<!DOCTYPE html>
<html>
<head>
  <!------------- SEO ----------->
    <title><?php echo ($page_title);?></title>
    <meta name="description" content=<?php echo ($page_description);?>>
    <meta name="keywords" content=<?php echo ($page_keywords);?>>
  <!----------------------------->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/web/libs/css/main.css" />
  <link rel="icon" href="/web/favicon.png" type="image/png">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Fuentes de google-->
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <style type="text/css"> body{  font-family:'Lato', sans-serif;}</style>
   <!-- AOS SCROLL-->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-131136647-1"></script>
  <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-131136647-1');
  </script>
  <!-- SCRIPT DROPDOWN---->
  <script> 
    function toggleDropdown (e) {
      let _d = $(e.target).closest('.dropdown'),
      _m = $('.dropdown-menu', _d);
      setTimeout(function(){
        let shouldOpen = e.type !== 'click' && _d.is(':hover');
        _m.toggleClass('show', shouldOpen);
        _d.toggleClass('show', shouldOpen);
        $('[data-toggle="dropdown"]', _d).attr('aria-expanded', shouldOpen);
      }, e.type === 'mouseleave' ? 300 : 0);
    }
    $('body')
      .on('mouseenter mouseleave','.dropdown',toggleDropdown)
      .on('click', '.dropdown-menu a', toggleDropdown);
  </script>

  <!-- LIGHTBOX BS4-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>

  <!---->
</head>

<!---------------NAVBAR--------------------------->
  <nav class="navbar navbar-expand-lg navbar-dark bg-navbar fixed-top py-0">
    <a class="navbar-brand w-50 p-0 m-0" href="/web/index.php">
      <img src="/web/media/logoynombre.png" width="270" class="d-inline-block align-top" alt="">
      <!--<span class="text-white" style="font-family: 'Times New Roman', Times, serif">FACTOR HUMANO</span>-->
    </a>
    <button class="navbar-toggler my-3" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <!--<a class="nav-item nav-link text-white p-3" href="/web/index.php">HOME<span class="sr-only">(current)</span></a>-->
        <ul class="navbar-nav">
          <li class="nav-item dropdown nav-link p-0">
            <a class="nav-link text-white p-3" href="#" id="navbardrop"data-toggle="dropdown" >
              DEPARTAMENTOS
            </a>
            <!-- Le saque el data-toggle="dropdown" para q no se mantenga al hacer clic y le saque la clase dropdown-toggle-->
            <div class="dropdown-menu rounded-0 border-0 m-0 p-0" style="background-color: rgba(255,255,255,0.8)">
              <a class="dropdown-item py-3 font-weight-bold" href="/web/deptos/saludoc.php">Salud ocupacional</a>
              <a class="dropdown-item py-3 font-weight-bold" href="/web/deptos/higyseg.php">Higiene y seguridad</a>
              <a class="dropdown-item py-3 font-weight-bold" href="/web/deptos/gestper.php">Gestión de personas</a>
              <a class="dropdown-item py-3 font-weight-bold" href="/web/deptos/inform.php">Informática aplicada a la salud</a>
            </div>
          </li>
          <li class="nav-item dropdown nav-link p-0"> 
            <a class="nav-link text-white p-3" href="#" id="navbardrop" data-toggle="dropdown">
              SERVICIOS
            </a>
            <div class="dropdown-menu rounded-0 border-0 m-0 p-0" style="background-color: rgba(255,255,255,0.8)">
              <a class="dropdown-item py-3 font-weight-bold" href="/web/servicios/formularios.php">Formularios</a>
              <a class="dropdown-item py-3 font-weight-bold" href="/web/servicios/biblioteca.php">Biblioteca</a>
            </div>
          </li>
        </ul>
        <a class="nav-item nav-link text-white p-3" href="/web/ventas.php">VENTAS</a>
        <a class="nav-item nav-link text-white p-3" href="/web/capacitaciones.php">CAPACITACIONES </a>
        <a class="nav-item nav-link text-white p-3" href="/web/novedades.php">NOVEDADES</a>
        <a class="nav-item nav-link text-white p-3" href="/web/contacto.php">CONTACTO</a>
        
      </div>
    </div>
  </nav>
<!------------------------------------------------>

<!------SCRIPT PARA NAVBAR OPACITY SCROLL--------->
    <script> 
      function checkScroll(){
        var startY = $('.navbar').height() * 2; //The point where the navbar changes in px

        if($(window).scrollTop() > startY){ 
          $('.navbar').addClass("scrolled");}
        else{
          $('.navbar').removeClass("scrolled");}
        }

      if($('.navbar').length > 0){
          $(window).on("scroll load resize", function(){checkScroll();});
      }
    </script>
<!------------------------------------------------>

<!------SCRIPT PARA ANIMACIONES DE SCROOL (AOS)--->
    <script>
        AOS.init();
    </script>
<!------------------------------------------------>

<script>
  setTimeout(function() {
    $('#modal-contacto').modal();
}, 15000);
  /* Un segundo es = 1000*/
</script>

<div class="container-fluid">
  <div class="modal fade" id="modal-contacto">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark text-white">
        
          <!-- Modal Header -->
          <div class="modal-header">
            <img src="/web/media/logoynombre.png" width="270" class="d-inline-block align-top" alt="">
            <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
          </div>
          
          <!-- Modal body -->
          <div class="modal-body text-center">
            <h4> Obtenga un presupuesto personalizado ahora mismo</h4>
            <form action="/web/enviar.php" method="POST" target="_blank">
              <div class="form-group">
                <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                <input type="email" class="form-control mt-2" name="email" placeholder="E-mail">
                <input type="text" class="form-control mt-2" name="telefono" placeholder="Teléfono">
                <textarea class="form-control mt-2" rows="3" name="mensaje" placeholder="Mensaje..."></textarea>
              </div>
              <button type="submit" class="btn btn-primary px-5" name="enviar">Enviar mensaje</button>
            </form>
          </div>
        
          
        </div>
      </div>
  </div>
</div>