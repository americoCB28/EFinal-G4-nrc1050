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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <!-- Animate CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

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


  <!--CONTENIDO-->
  <section id="barra-contacto" class="espaciado">
    <div class="contenedor">
      <h1 class="font-weight-bold">Detalle de obra</h1>
      <p>
        <i class="fa-solid fa-location-dot"></i>

        <a href="index.php">Inicio</a> | Detalle de obra
      </p>
    </div> <!-- contenedor -->
  </section> <!-- barra-portafolio -->


  <section class="productos page-section" id="productos">
    <div class="container" id="detalleObra">

      <h1 class="font-weight-bold">Cargando obra...</h1><br>
      <br><br>
    </div>
  </section>





  <!-- footer -->
  <section class="mbr-section mbr-section-md-padding mbr-footer footer1" id="contacts1-s" style="background-color: #F3F3F3;  color: #123d7d; padding-top: 30px; padding-bottom:30px;">
    <div class="container align-items-center">
      <div class="row">
        <div class="mbr-footer-content col-xs-12 col-sm-2 me-2">
          <div><img style="height: 200px; padding-top: 10px; padding-bottom:10px;" src="imagenes/logo/logoHamelin.png"></div>
        </div>
        <div class="mbr-footer-content col-xs-12 col-md-3" style="height: 150px; padding-top: 50px">
          <p><strong></strong>
            <br><br><br>
          </p>
        </div>
        <div class="mbr-footer-content col-xs-12 col-md-3" style="height: 150px; padding-top: 50px">
          <p><strong>Contáctanos</strong>
            <br><br>Email: informacion.organicet@gmail.com<br>Teléfonos: 51 (1) 234-2345
          </p>
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
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const searchParams = new URLSearchParams(window.location.search);
      const id_obra = searchParams.get('id_obra');
      const nombre_obra = searchParams.get('nombre_obra');
      // URL de la API que deseas consumir
      var apiUrl = `https://api.hammelin.com/api/process-document/process?id=${id_obra}`;

      // Haciendo la solicitud con fetch
      fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
          console.log(data);
          mostrarDatosEnHTML(data,nombre_obra);
        })
        .catch(error => console.error('Error al obtener datos:', error));

      // Función para mostrar los datos en HTML
      function mostrarDatosEnHTML(data,nombre_obra) {
        // Obtén la referencia al elemento en el que deseas mostrar los resultados
        var resultadosDiv = document.getElementById('detalleObra');
        console.log('data', data);
        // Limpiar el contenido existente, si es necesario
        resultadosDiv.innerHTML = '';
        mostrarObra(data, nombre_obra);
        // Verificar si data es un array o un objeto antes de intentar iterar sobre él
        /*if (Array.isArray(data)) {
          // Iterar sobre un array
          data.forEach(obra => {
            mostrarObra(obra);
          });
        } else if (typeof data === 'object') {
          // Mostrar un objeto individual
          mostrarObra(data);
        } else {
          console.error('Los datos obtenidos no son ni un array ni un objeto:', data);
        }*/

        // Función para mostrar datos de una obra
        function mostrarObra(obra, nombreObra) {
          //
          var obraDiv = document.createElement('div');

          obraDiv.innerHTML = `
              <h1 class="font-weight-bold">Obra: ${nombreObra|| 'Entidad no disponible'}</h1><br>
            
              <div class="mbr-footer-content " style="height: 150px; padding-top: 50px">
                      <p><strong>¿Cuál es la finalidad de la obra?</strong>
                      <br>
                      <br>${obra?.keypoints?.finalidad}</p>
              </div>

              <div class="mbr-footer-content " style="height: 150px; padding-top: 50px">
                      <p><strong>¿Cuál es la ubicación de la obra?</strong>
                      <br>
                      <br>
                      ${obra?.keypoints?.ubicacion}</p>
              </div>

              <div class="mbr-footer-content " style="height: 150px; padding-top: 50px">
                      <p><strong>¿Cuál es el presupuesto de la obra?</strong>
                      <br>
                      <br>
                      ${obra?.keypoints?.presupuesto}</p>
              </div>

              <div class="mbr-footer-content " style="height: 150px; padding-top: 50px">
                      <p><strong>En qué plazo debería estar ejecutada la obra?</strong>
                      <br>
                      <br>
                      ${obra?.keypoints?.plazo}</p>
              </div>

              <div class="mbr-footer-content " style="height: 150px; padding-top: 50px">
                      <p><strong>¿Qué debería tener esta obra cuando esté terminada?</strong>
                      <br>
                      <br>
                      ${obra?.keypoints?.terminado}</p>
              </div>
              
              <br><br>
              <form action="enviar_mensaje.php" method="post" enctype="multipart/form-data">
              
              <!-- Asunto input -->
              <div class="form-group">
                <label for="formObservacion">Ingrese sus dudas sobre la obra</label>
                <textarea placeholder="Haz una pregunta a nuestra IA" name="observacion" class="form-control" id="formObservacion" rows="5" required></textarea>
              </div>


              <div class="text-center text-lg-start mt-4 pt-2" style="margin: auto">
                <button name="send" type="submit" class="btn btn-primary btn-xl js-scroll-trigger" style="padding-left: 4rem; padding-right: 4rem; background-color: #FF0000; color: white;">Enviar
                </button>
              </div>
            </form>
              `;
          resultadosDiv.appendChild(obraDiv);
        }
      }
    });
  </script>
</body>

</html>