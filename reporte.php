<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HAMMELIN IA</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/estilosform.css">
	<!--CSS Magnific-->
	<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css">

	<!-- CSS del tema -->
	<link rel="stylesheet" href="css/creative.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
	
	<!--Font Awesome-->
	<link
	rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>


    <!-- Animate CSS -->
	<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

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
            <a class="nav-link js-scroll-trigger" href="productos.php">DETALLE OBRAS</a>
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
            <h1 class="font-weight-bold">Reportes</h1>
            <a>
                <i class="fa-solid fa-location-dot"></i>
    
                <a href="index.php">Inicio</a>  |  Reporte
            </p>
        </div> <!-- contenedor -->
    </section> <!-- barra-contacto -->

<section class="productos page-section">
  <div class="container">
    <h1 class="  font-weight-bold" >Envíanos tu reporte</h1><br>
      <div class="container" style="margin-top: 40px">
      <h4 style="text-align: center">¿Tienes algun indicio de corrupcion? Envia tu reporte, todos juntos contra la corrupcion.</h4>
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-md-9 col-lg-4 col-xl-4">
              <img src="imagenes/1946006.png" class="img-fluid" alt="Sample image">
          </div>
          <div class="col-md-8 col-lg-6 col-xl-6 offset-xl-1" style="margin-top: 40px">
              <form id="reporteForm" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="formObra">Obra</label>
                    <select name="obra" id="formObra" class="form-control form-control-lg" required>
                      <option value="1">Obra 1</option>
                      <option value="2">Obra 2</option>
                      <option value="3">Obra 3</option>
                      <option value="4">Obra 4</option>
                    </select>
                  </div>
                  <!-- Name input -->
                  <div class="form-group">
                      <label for="formNombre">Nombre</label>
                      <input name="nombre" type="text" id="formNombre" class="form-control form-control-lg" required/>
                  </div>
                  <!-- LastName input -->
                  <div class="form-group">
                      <label for="formApellido">Apellidos</label>
                      <input name="apellidos" type="text" id="formApellido" class="form-control form-control-lg" required/>
                  </div>

                  <!-- Phone input -->
                  <div class="form-group">
                      <label for="formTel">Telefono</label>
                      <input name="telefono" type="number" id="formTel" class="form-control form-control-lg" maxlength="9" required/>
                  </div>

                  <div class="form-group">
                      <label for="formEmail">Correo</label>
                      <input name="correo" type="email" id="formEmail" class="form-control form-control-lg" required/>
                  </div>

                  <!-- Asunto input -->
                  <div class="form-group">
                      <label for="formObservacion">Observacion</label>
                      <textarea name="observacion" class="form-control" id="formObservacion" rows="3"></textarea required>
                  </div>

                  <div class="form-group">
                      <label for="formSatisfacion">Nivel de sastifaccion</label>
                      <input name="telefono" type="number" id="formSatisfacion" class="form-control form-control-lg" maxlength="9" required/>
                  </div>
                  
                  <div>
                    <div class="custom-file">
                      <input type="file" name="multimedia[]" id="formMultimedia" class="custom-file-input" multiple required accept="image/*,video/*">
                      <label class="custom-file-label" for="formMultimedia">Seleccionar archivos</label>
                    </div>
                  </div>

                  <div class="text-center text-lg-start mt-4 pt-2" style="margin: auto">
                      <button name="send" type="button" class="btn btn-primary btn-xl js-scroll-trigger" style="padding-left: 4rem; padding-right: 4rem; background-color: #FF0000; color: white;" onclick="enviarReporte()">Enviar
                      </button>
                  </div>
              </form>
              <!-- Agregar un elemento para mostrar el mensaje de éxito -->
              <div id="mensajeExito" style="display: none; margin-top: 20px; text-align: center; color: green;">
                ¡Reporte enviado con éxito!
              </div>
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
<script>
  function enviarReporte() {
    var form = document.getElementById('reporteForm');
    var formData = new FormData(form);

    fetch('https://api.hammelin.com/api/reports', {
      method: 'PUT',
      headers:{'Content-type': 'application/json'},
      body: JSON.stringify({
        "idObra": document.getElementById("formObra").value,
        "nombres": document.getElementById("formNombre").value,
        "apellidos": document.getElementById("formApellido").value,
        "telefono": document.getElementById("formTel").value,
        "correo": document.getElementById("formEmail").value,
        "observacion": document.getElementById("formObservacion").value,
        "satisfaccionPorc": parseFloat(document.getElementById("formSatisfacion").value),
        "docsJson": {}
    }),
    })
    .then(response => response.json())
    .then(data => {
      // Manejar la respuesta de la API
      console.log('Respuesta de la API:', data);
       // Mostrar el mensaje de éxito
      var mensajeExito = document.getElementById('mensajeExito');
      mensajeExito.style.display = 'block';
    })
    .catch(error => {
      console.error('Error al enviar el reporte:', error);
    });
  }
</script>
<script>
  // Función para llenar el select con opciones de la API
  function llenarSelectConOpciones() {
    // URL de la API que devuelve las opciones para el select
    var apiUrl = 'https://api.hammelin.com/api/works/latest';

    fetch(apiUrl)
      .then(response => response.json())
      .then(data => {
        console.log('Datos de la API:', data);

        // Obtener el elemento select
        var selectObra = document.getElementById('formObra');

        // Limpiar las opciones actuales
        selectObra.innerHTML = '';

        // Asegurarse de que data.results sea un array antes de intentar iterar sobre él
        if (Array.isArray(data.results)) {
          // Iterar sobre los datos de la API y agregar opciones al select
          data.results.forEach(opcion => {
            var option = document.createElement('option');
            option.value = opcion.id_obra; // Asignar el valor de la opción
            option.text = opcion.descripcion; // Asignar el texto de la opción
            selectObra.appendChild(option);
          });
        } else {
          console.error('Los datos obtenidos no son un array:', data);
        }
      })
      .catch(error => console.error('Error al obtener opciones:', error));
  }

  // Llenar el select al cargar la página
  document.addEventListener('DOMContentLoaded', llenarSelectConOpciones);

  // Resto de tu código...
</script>
</body>
</html>





