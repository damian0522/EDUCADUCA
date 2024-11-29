<!DOCTYPE html>
<html lang="es">

  <head class="header">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educaduca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">

    <div class="container">
      <div class="logo">
        <h1>EDUCADUCA</h1>
        <p>APRENDE CON NOSOTROS ONLINE</p>
      </div>
      <div class="contact-info">
        <p>Lunes - Viernes: 8:00AM-8:00PM</p>
        <p>Llámanos: 315-098-0044</p>
      </div>
      <div class="buttons-social">
        <button class="social-btn">
          <i class="fa-brands fa-facebook"></i>
        </button>
        <button class="social-btn">
          <i class="fa-brands fa-twitter"></i>
        </button>
        <button class="social-btn">
          <i class="fa-brands fa-instagram"></i>
        </button>
        <button class="social-btn">
          <i class="fa-brands fa-tiktok"></i>
        </button>
      </div>
    </div>
    <br>

    <nav>
      <ul>
        <li>
        <button type="button" class="btn btn-secondary menu-btn">
          Home
        </button>
        </li>
        <li>
          <button type="button" class="btn btn-secondary menu-btn"
            data-bs-toggle="popover" data-bs-placement="bottom"
            data-bs-custom-class="custom-popover"
            data-bs-title="Cursos"
            data-bs-content="Todos nuestros cursos disponibles.">
            Cursos
          </button>
        </li>
        <li>
          <button type="button" class="btn btn-secondary menu-btn"
            data-bs-toggle="popover" data-bs-placement="bottom"
            data-bs-custom-class="custom-popover"
            data-bs-title="Historia"
            data-bs-content="Un poco de nuestra trayectoria.">
            Historia
          </button>
        </li>
        <li>
          <button type="button" class="btn btn-secondary menu-btn"
            data-bs-toggle="popover" data-bs-placement="bottom"
            data-bs-custom-class="custom-popover"
            data-bs-title="Oficinas"
            data-bs-content="Oficinas disponibles">
            Oficinas
          </button>
        </li>
        <li>
          <button type="button" class="btn btn-secondary menu-btn"
            data-bs-toggle="popover" data-bs-placement="bottom"
            data-bs-custom-class="custom-popover"
            data-bs-title="Certificados"
            data-bs-content="Genera tu certificado.">
            Certificados
          </button>
        </li>
        <li>
          <button type="button" class="btn btn-secondary menu-btn"
            data-bs-toggle="popover" data-bs-placement="bottom"
            data-bs-custom-class="custom-popover"
            data-bs-title="Servicios"
            data-bs-content="Otros servicios generales.">
            Servicios
          </button>
        </li>
        <li>
          <button type="button" class="btn btn-secondary menu-btn"
            data-bs-toggle="popover" data-bs-placement="bottom"
            data-bs-custom-class="custom-popover"
            data-bs-title="Contacto"
            data-bs-content="Toda nuestra informacion de contacto, correo, tel, etc.">
            Contacto
          </button>
        </li>
      </ul>
      <button> CERTIFICATE </button>
    </nav>
  </head>

  <body>
    <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
      <button type="button" class="btn btn-primary" data-tooltip="Aumentar letra" id="btnAumentar">+</button>
      <button type="button" class="btn btn-primary" data-tooltip="Reducir letra" id="btnReducir">-</button>
      <button type="button" class="btn btn-primary" data-tooltip="Invertir colores" id="btnLucecita"><i class="fa fa-lightbulb"></i></button>
    </div>



    <main class="main-content">
      <div class="content">
        <h2>Bienvenido a Educaduca</h2>
        <h1>Aprende con los mejores expertos</h1>
        <p>Certifícate en AWS, AZURE.</p>
        <br>
        <div class="buttons">
          <a href="#" class="btn-primary">COMENZAR AHORA!</a>
          <a href="#" class="btn-secondary">VER CURSO ONLINE GRATUITO - > </a>
        </div>
      </div>
    </main>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
