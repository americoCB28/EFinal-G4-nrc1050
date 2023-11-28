<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HAMMELIN IA</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">

	<!--CSS Magnific-->
	<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css">

	<!-- CSS del tema -->
	<link rel="stylesheet" href="css/creative.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
	
	<!--Font Awesome-->
	<link
	rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>


    <!-- Animate CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

  <style>
    .thumbnail img {
      display: block;
      margin: 0 auto;
    }
  </style>

</head>

<body>

<!-- Menú de navegación -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
      <img src="imagenes/logo/logoHamelin.png" width="200"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php">INICIO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="nosotros.php">NOSOTROS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="detalle.php">DETALLE OBRAS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="reporte.php">REPORTE</a>
          </li>

        </ul>
      </div>
    </div>
</nav>


  <!-- Encabezado -->
<header class="masthead" id="about">


    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center text-center animate__animated animate__backInLeft">
            <div class="col-lg-10 align-self-end">
                <!-- texto para poner en negrita - text-uppercase -->
                <h1 class="  font-weight-bold" style=" font-family:'Poppins'; font-size: 70px;  ;color: #ffffff">
                ¡Bienvenido a Hammelin IA! 
                </h1>
                <hr class="dividir m-4">
            </div>

            <div class="col-lg-8 align-self-baseline" style="color: white">
                <p>¡Conviértete en un héroe anticorrupción!
                </p>
                <a class="btn btn-primary btn-xl js-scroll-trigger" style="background-color: #FF0000; color: white" href="#nosotros">Conócenos</a>
            </div>
        </div>
    </div>

</header>

<!--sobre nosotros-->

<section class="nosotros" id="nosotros">
    <div class="container">
        <h1 class="  font-weight-bold" >Nosotros</h1><br>
        <p>En Hammelin IA creemos en una estado más transparente y honesto.</p>
        <p>Nuestra propósito es facilitar la transparencia y fiscalización de contrataciones gubernamentales mediante la automatización de la extracción de información y la notificación a ciudadanos cercanos.</p>
        <div class="servicio boton">
        <a class="btn btn-primary btn-xl js-scroll-trigger" style="background-color: #FF0000; color: white" href="nosotros.php">Conoce más sobre nosotros</a>
        </div>
    </div>
</section>

<section id="servicios">
    <div class="contenedor" style="padding-top: 15px; padding-bottom: 60px">
    <div class="titulo-port">
            <h2 class=" font-weight-bold">Las últimas obras del estado</h2>
        </div>
        <div class="fila" id="ultimasObras">
            <div class="columna">
                <div class="caja-overflow">
                    <h3>Obra 1</h3>
                    <img src="imagenes/logo/servicios1.jpg" alt="" class="img_ajustarancho">
                    <p>Disfruta de una deliciosa selección de platillos frescos y saludables para ti y tus
                        invitados. </p>
                    <a class="btn btn-primary btn-xl js-scroll-trigger" style="background-color: #FF0000; color: white;" href="contacto.php">Ver detalle</a>
                    <br>
                    <br>
                </div>
            </div>
            <div class="columna">
                <div class="caja-overflow">
                    <h3>Obra 2</h3>
                    <img src="imagenes/logo/servicios2.jpg" alt="" class="img_ajustarancho">
                    <p>Organizamos eventos especiales para promover un estilo de vida saludable y ecológico.</p>
                    <a class="btn btn-primary btn-xl js-scroll-trigger" style="background-color: #FF0000; color: white;" href="contacto.php">Ver detalle</a>
                    <br>
                    <br>
                </div>
            </div>
            <div class="columna">
                <div class="caja-overflow">
                    <h3>Obra 3</h3>
                    <img src="imagenes/logo/servicios3.jpg" alt="" class="img_ajustarancho">
                    <p>¿Quieres disfrutar de nuestros productos orgánicos desde la comodidad de tu hogar?.</p>
                    <a class="btn btn-primary btn-xl js-scroll-trigger" style="background-color: #FF0000; color: white;" href="contacto.php">Ver detalle</a>
                    <br>
                    <br>
                </div>
            </div>
            <div class="columna">
                <div class="caja-overflow">
                    <h3>Obra 4</h3>
                    <img src="imagenes/logo/servicios4.jpg" alt="" class="img_ajustarancho">
                    <p>Nuestro equipo de expertos en nutrición te ayudarán a comer más sano</p>
                    <a class="btn btn-primary btn-xl js-scroll-trigger" style="background-color: #FF0000; color: white;" href="contacto.php">Ver detalle</a>
                    <br>
                    <br>
                </div>
            </div>
        </div>
        
    </div>
</section>

<!--Seccion reporte-->

<section id="portafolio" class="text-center" style="padding-bottom: 80px;">
    <div class="container">
        <div class="titulo-port">
            <h2 class=" font-weight-bold">Reporta y fiscaliza con nosotros</h2>
            <h5>Sé parte del cambio y defiende tus derechos</h5>
            <hr>
        </div>
        <div class="row service-item-margin">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 zero-padding text-center services-list">
                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 zero-padding">
                    <img src="imagenes/lupa.png" alt="" style="height: 60px">
                </div>
                <div class="col-lg-10 col-md-9 col-sm-9 col-xs-12 zero-padding service-item-title">

                    <h3>¿Porque reportar<br> <!-- &amp; --> con nosotros?</h3>
                    <hr>
                    <p>Reportar casos de corrupción en obras del estado es una acción importante para promover la transparencia, la rendición de cuentas y el buen gobierno</p>
                    <a href="reporte.php" class="btn btn-light btn-xl js-scroll-trigger" style="background-color: #FF0000; color: white;"> QUIERO REPORTAR <span class="glyphicon glyphicon-triangle-right"></span></a>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 second-box text-center services-list">
            <img src="imagenes/logo/servicios1.jpg" alt="" class="img_ajustarancho">
            </div>

            

        </div>
    </div>
</section>

  <!-- INICIO DEL SLIDER -->

<div class="row">
    <div class="col">
        
        <div class="carousel slide" id="slideshow" data-ride="carousel">
            
        <!-- INDICADORES -->
        <ol class="carousel-indicators">
            <li data-target="#slideshow" data-slide-to="0" class="active"></li>
            <li data-target="#slideshow" data-slide-to="1"></li>
            <li data-target="#slideshow" data-slide-to="2"></li>

        </ol>


        <!-- SLIDES -->
            <div class="carousel-inner">
                
                <div class="carousel-item active">
                    <img src="imagenes/slider/obra1 (1).jpeg" class="d-block w-100">
                </div>

                <div class="carousel-item">
                    <img src="imagenes/slider/obra1 (2).jpeg" class="d-block w-100">
                </div>

                <div class="carousel-item">
                    <img src="imagenes/slider/obra1 (1).jpg" class="d-block w-100">
                </div>

                <div class="carousel-item">
                    <img src="imagenes/slider/obra1 (2).jpg" class="d-block w-100">
                </div>

                <div class="carousel-item">
                    <img src="imagenes/slider/obra1 (3).jpg" class="d-block w-100">
                </div>
            </div>

        <!-- Controles -->
            <a href="#slideshow" class="carousel-control-prev" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>	
            </a>

            <a href="#slideshow" class="carousel-control-next" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>	
            </a>

        </div>


    </div>
</div>

<!-- FIN DEL SLIDE -->

<!-- SECCION PRODUCTOS -->

<section class="section section-60 section-md-90 bg-gray-lighter novi-background  align-items-center text-center" style="padding-top: 80px; padding-bottom: 80px">
        <div class="container ">
        <h1 class="font-weight-bold" style="color: #123d7d ">Nuestro Equipo</h1><br>
          <div class="row row-40 row-lg-60 align-items-center justify-content-center text-center">
            <div class="col-sm-6 col-md-4 col-lg-4">
              <div class="thumbnail thumbnail-variant-1">
                <div>
                    <img src="imagenes/giovany.png" alt="" width="189" height="189"/>
                </div>
                <br>
                <div>
                  <h5 style="color: #123d7d;">Giovany Temoche</h5>
                  <p>Desarrollador de Software</p>
                </div>
              </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-4 ">
              <div class="thumbnail thumbnail-variant-1  ">
                <div class="align-items-center justify-content-center ">
                    <img src="imagenes/johannif.png" alt="" width="189" height="189"/>
                </div><br>
                <div >
                  <h5  style="color: #123d7d;">Johanni Quispe</h5>
                  <p>Desarrolladora de Software</p>
                </div>
              </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-4">
              <div class="thumbnail thumbnail-variant-1">
                <div class="thumbnail-image"><img src="imagenes/americo.jpg" alt="" width="189" height="189" />
                  <div class="thumbnail-image-inner"><a class="novi-icon icon icon-md material-icons-local_phone link-primary-inverse-v2" href="tel:#"></a><a class="novi-icon icon icon-md-smaller fa-envelope-o link-white" href="mailto:#"></a></div>
                </div><br>
                <div >
                  <h5  style="color: #123d7d;">Americo Cornelio</h5>
                  <p>Desarrollador de Software</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4">
              <div class="thumbnail thumbnail-variant-1">
                <div class="thumbnail-image"><img src="imagenes/elver.png" alt="" width="189" height="189"/>
                  <div class="thumbnail-image-inner"><a class="novi-icon icon icon-md material-icons-local_phone link-primary-inverse-v2" href="tel:#"></a><a class="novi-icon icon icon-md-smaller fa-envelope-o link-white" href="mailto:#"></a></div>
                </div><br>
                <div >
                  <h5  style="color: #123d7d;">Elver Santos</h5>
                  <p>Administrador de Negocios Internacionales</p>
                </div>
              </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-4">
              <div class="thumbnail thumbnail-variant-1">
                <div class="thumbnail-image"><img src="imagenes/mari.png" alt="" width="189" height="189"/>
                  <div class="thumbnail-image-inner"><a class="novi-icon icon icon-md material-icons-local_phone link-primary-inverse-v2" href="tel:#"></a><a class="novi-icon icon icon-md-smaller fa-envelope-o link-white" href="mailto:#"></a></div>
                </div><br>
                <div >
                  <h5  style="color: #123d7d;">Mariselva Abad</h5>
                  <p>Contadora pública</p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>

     



<!--SECCION FONDO MOVIBLE-->
<section class="fondo">
	
</section>

<!-- SECCION contacto -->
  
<section class="nosotros page-section">
    <div class="container">

      <div class="justify-content-center text-center">
        <h1>Obras mejor calificadas</h1><br>
        <h5>En esta seccion encontraras las obras mejor calificadas por los peruanos</h5>
      </div>
      <br>
      <div class="fila" id="obrasMejor">
        <div class="columna">
            <div class="caja-overflow">
                <h3>Obra 1</h3>
                <img src="imagenes/logo/servicios1.jpg" alt="" class="img_ajustarancho">
                <p>Disfruta de una deliciosa selección de platillos frescos y saludables para ti y tus
                    invitados. </p>
                <a class="btn btn-primary btn-xl js-scroll-trigger" style="background-color: #123d7d; color: white;" href="contacto.php">Ver detalle</a>
                <br>
                <br>
            </div>
            
        </div>
        <div class="columna">
            <div class="caja-overflow">
                <h3>Obra 2</h3>
                <img src="imagenes/logo/servicios2.jpg" alt="" class="img_ajustarancho">
                <p>Organizamos eventos especiales para promover un estilo de vida saludable y ecológico.</p>
                <a class="btn btn-primary btn-xl js-scroll-trigger" style="background-color: #1d5986; color: white;" href="contacto.php">Ver detalle</a>
                <br>
                <br>
            </div>
        </div>
        <div class="columna escala">
            <div class="caja-overflow">
                <h3>Obra 3</h3>
                <img src="imagenes/logo/servicios3.jpg" alt="" class="img_ajustarancho">
                <p>¿Quieres disfrutar de nuestros productos orgánicos desde la comodidad de tu hogar?.</p>
                <a class="btn btn-primary btn-xl js-scroll-trigger" style="background-color: #123d7d; color: white;" href="contacto.php">Ver detalle</a>
                <br>
                <br>
            </div>
        </div>
        <div class="columna">
            <div class="caja-overflow">
                <h3>Obra 4</h3>
                <img src="imagenes/logo/servicios4.jpg" alt="" class="img_ajustarancho">
                <p>Nuestro equipo de expertos en nutrición te ayudarán a comer más sano</p>
                <a class="btn btn-primary btn-xl js-scroll-trigger" style="background-color: #1d5986; color: white;" href="contacto.php">Ver detalle</a>
                <br>
                <br>
            </div>
        </div>
      </div>
    </div>
  </section>


  <!-- footer -->
  <section class="mbr-section mbr-section-md-padding mbr-footer footer1" id="contacts1-s" style="background-color: #F3F3F3;  color: #123d7d; padding-top: 30px; padding-bottom:30px;" >
    
    <div class="container align-items-center">
        <div class="row">
            <div class="mbr-footer-content col-xs-12 col-sm-2 me-2">
                <div><img style="height: 200px; padding-top: 10px; padding-bottom:10px;" src="imagenes/logo/logoHamelin.png"></div>
            </div>
            <div class="mbr-footer-content col-xs-12 col-md-3" style="height: 150px; padding-top: 50px">
                <p><strong></strong>
                    <br><br><br></p>
            </div>
            
            <div class="mbr-footer-content col-xs-12 col-md-3" style="height: 150px; padding-top: 50px">
                <p><strong>Contáctanos</strong>
                    <br><br>Email: informacion.organicet@gmail.com<br>Teléfonos: 51 (1) 234-2345</p>
            </div>
            
            <div class="mbr-footer-content col-xs-12 col-md-3" style="height: 150px; padding-top: 50px">
                <p><strong>Trabaja con nuestro equipo Hammelin IA</strong><br><br>
                Email: equipo.hammelin.ia@gmail.com</p>
            </div>
            
        </div>
    </div>
</section>

<!--wow-->
<script src="js/wow.min.js"></script>
<script>
    new WOW().init();
</script>

<!--Bootsrapp JavaScrpr-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!--Plugin JAVASCRIPT-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

<!--Creative JS-->
<script src="creativejs/creative.min.js"></script>

<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // URL de la API que deseas consumir
        var apiUrl = "https://api.hammelin.com/api/works/latest";

        // Haciendo la solicitud con fetch
        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                console.log(data);
                mostrarDatosEnHTML(data.results.slice(0, 5));
            })
            .catch(error => console.error('Error al obtener datos:', error));

        // Función para mostrar los datos en HTML
        function mostrarDatosEnHTML(data) {
            // Obtén la referencia al elemento en el que deseas mostrar los resultados
            var resultadosDiv = document.getElementById('ultimasObras');
            console.log('data',data);
            // Limpiar el contenido existente, si es necesario
            resultadosDiv.innerHTML = '';

           // Verificar si data es un array o un objeto antes de intentar iterar sobre él
          if (Array.isArray(data)) {
              // Iterar sobre un array
              data.forEach(obra => {
                  mostrarObra(obra);
              });
          } else if (typeof data === 'object') {
              // Mostrar un objeto individual
              mostrarObra(data);
          } else {
              console.error('Los datos obtenidos no son ni un array ni un objeto:', data);
          }
          
          // Función para mostrar datos de una obra
          function mostrarObra(obra) {
              var obraDiv = document.createElement('div');
              obraDiv.innerHTML = `
                  <div class="columna">
                    <div class="caja-overflow" style="padding: 10px; height: 400px;">
                        <h5 style="font-size: 15px" >${obra.entidad || 'Entidad no disponible'}</h5>
                        <h5 style="font-size: 14px" >Costo: S/. ${obra.licitacion_val || 'Entidad no disponible'}</h5>
                        <p style="font-size: 12px;"><strong>Descripcion: </strong>${obra.descripcion || 'Descripcion no disponible'}</p>
                        <a class="btn btn-primary btn-xl js-scroll-trigger" style="background-color: #FF0000; color: white;" href="detalle.php?id_obra=${obra.id_obra}&nombre_obra=${obra.descripcion}">Ver detalle</a>
                        <br>
                        <br>
                    </div>
                </div>
              `;
              resultadosDiv.appendChild(obraDiv);
          }
        }
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // URL de la API que deseas consumir
        var apiUrl = "https://api.hammelin.com/api/works/best";

        // Haciendo la solicitud con fetch
        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                console.log(data);
                mostrarDatosEnHTML(data.results.slice(0, 3));
            })
            .catch(error => console.error('Error al obtener datos:', error));

        // Función para mostrar los datos en HTML
        function mostrarDatosEnHTML(data) {
            // Obtén la referencia al elemento en el que deseas mostrar los resultados
            var resultadosDiv = document.getElementById('obrasMejor');
            console.log('data',data);
            // Limpiar el contenido existente, si es necesario
            resultadosDiv.innerHTML = '';

           // Verificar si data es un array o un objeto antes de intentar iterar sobre él
          if (Array.isArray(data)) {
              // Iterar sobre un array
              data.forEach(obra => {
                  mostrarObra(obra);
              });
          } else if (typeof data === 'object') {
              // Mostrar un objeto individual
              mostrarObra(data);
          } else {
              console.error('Los datos obtenidos no son ni un array ni un objeto:', data);
          }
          
          // Función para mostrar datos de una obra
          function mostrarObra(obra) {
              var obraDiv = document.createElement('div');
              obraDiv.innerHTML = `
                  <div class="columna">
                    <div class="caja-overflow" style="padding: 0px; height: 400px;">
                        <h5 style="font-size: 15px" >${obra.entidad || 'Entidad no disponible'}</h5>
                        <p style="font-size: 12px;"><strong>Descripcion: </strong>${obra.descripcion || 'Descripcion no disponible'}</p>
                        <p style="font-size: 12px;"><strong>Porcentaje Satisfacción: </strong>${obra.porc_satis_obra || 'Descripcion no disponible'}</p>
                        <canvas id="chart-${obra.id_obra}" style="height: 50px; width: 50px;></canvas>
                        <a class="btn btn-primary btn-xl js-scroll-trigger" style="background-color: #FF0000; color: white;" href="">Ver detalle</a>
                        <br>
                        <br>
                    </div>
                </div>
              `;
              resultadosDiv.appendChild(obraDiv);

              // Llama a la función para dibujar el gráfico
              dibujarGrafico(obra.id_obra, obra.porc_satis_obra, obra);
          }

          function dibujarGrafico(idCanvas, porcentajeSatisfaccion, obra) {
            var idCanvas = 'chart-' + obra.id_obra;
            var ctx = document.getElementById(idCanvas).getContext('2d');
            var chart = new Chart(ctx, {
              type: 'bar',
              data: {
                labels: ['Satisfacción'],
                datasets: [{
                  label: 'Porcentaje de satisfaccion',
                  data: [porcentajeSatisfaccion || 0],
                  backgroundColor: 'rgba(75, 192, 192, 0.2)',
                  borderColor: 'rgba(75, 192, 192, 1)',
                  borderWidth: 1
                }]
              },
              options: {
                scales: {
                  y: {
                    beginAtZero: true,
                    max: 100
                  }
                }
              }
            });
          }
        }
    });
</script>
</body>
</html>