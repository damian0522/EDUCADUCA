<!DOCTYPE html>
<html lang="es">

<header class="header">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educaduca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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
        <a href="https://www.facebook.com" target="_blank" rel="noopener noreferrer">
            <button class="social-btn"><i class="fa-brands fa-facebook"></i></button>
        </a>
        <a href="https://www.twitter.com" target="_blank" rel="noopener noreferrer">
            <button class="social-btn"><i class="fa-brands fa-twitter"></i></button>
        </a>
        <a href="https://www.instagram.com" target="_blank" rel="noopener noreferrer">
            <button class="social-btn"><i class="fa-brands fa-instagram"></i></button>
        </a>
        <a href="https://www.tiktok.com" target="_blank" rel="noopener noreferrer">
            <button class="social-btn"><i class="fa-brands fa-tiktok"></i></button>
        </a> 
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
            data-bs-content="Explora nuestros cursos online diseñados para brindarte el conocimiento necesario en diversas áreas. Desde programación hasta diseño gráfico, cada curso es impartido por expertos con años de experiencia.">
            Cursos
        </button>
        </li>
        <li>
        <button type="button" class="btn btn-secondary menu-btn"
            data-bs-toggle="popover" data-bs-placement="bottom"
            data-bs-custom-class="custom-popover"
            data-bs-title="Historia"
            data-bs-content="Nuestra historia comenzó hace décadas con una visión clara: brindar acceso a la educación de calidad. Desde pequeños inicios hasta convertirse en una referencia mundial, hemos formado a miles de estudiantes alrededor del mundo.">
            Historia
        </button>
        </li>
        <li>
        <button type="button" class="btn btn-secondary menu-btn"
            data-bs-toggle="popover" data-bs-placement="bottom"
            data-bs-custom-class="custom-popover"
            data-bs-title="Oficinas"
            data-bs-content="Contamos con oficinas ubicadas en diferentes partes del mundo. Desde la moderna sede en Nueva York hasta nuestra nueva oficina en Tokio, estamos disponibles para ofrecerte atención personalizada en tu zona.">
            Oficinas
        </button>
        </li>
        <li>
        <button type="button" class="btn btn-secondary menu-btn"
            data-bs-toggle="popover" data-bs-placement="bottom"
            data-bs-custom-class="custom-popover"
            data-bs-title="Certificados"
            data-bs-content="Nuestros cursos no solo te brindan conocimientos, sino también la oportunidad de obtener certificados oficiales que validan tu formación. Reconocidos a nivel mundial, nuestros certificados son la puerta a nuevas oportunidades.">
            Certificados
        </button>
        </li>
        <li>
        <button type="button" class="btn btn-secondary menu-btn"
            data-bs-toggle="popover" data-bs-placement="bottom"
            data-bs-custom-class="custom-popover"
            data-bs-title="Servicios"
            data-bs-content="Además de nuestros cursos, ofrecemos una variedad de servicios diseñados para ayudarte a alcanzar tus objetivos. Desde asesoría personalizada hasta desarrollo de proyectos, estamos aquí para apoyarte en cada paso.">
            Servicios
        </button>
        </li>
        <li>
        <button type="button" class="btn btn-secondary menu-btn"
            data-bs-toggle="popover" data-bs-placement="bottom"
            data-bs-custom-class="custom-popover"
            data-bs-title="Contacto"
            data-bs-content="¿Tienes preguntas? ¡Estamos aquí para ayudarte! Contáctanos a través de nuestro correo: contacto@educacion.com o llámanos al +123 456 7890. También puedes encontrarnos en nuestras redes sociales para más actualizaciones.">
            Contacto
        </button>
        </li>
    </ul>
    <button id="btn-login"> LOGIN </button>
    </nav>

    <div id="alert-box" class="alert-box"></div>
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
          <button id="btn-register" class="btn-primary">COMENZAR AHORA!</button>
          <a href="https://www.youtube.com" target="_blank" rel="noopener noreferrer">
            <button class="btn-secondary">VER CURSO ONLINE GRATUITO - > </button>
        </a> 
        </div>
      </div>
    </main>

    <div id="register-container">
        <form id="register-form" method="POST">
            <button type="button" id="close-form-btn">&times;</button>
            <h2>Registro de Usuario</h2>
            <input type="text" placeholder="Nombre" id="nombre" name="nombre" required>
            <input type="text" placeholder="Apellido" id="apellido" name="apellido" required>
            <input type="email" placeholder="Email" id="email" name="email" required>
            <button type="submit">Registrarse</button>
        </form>
    </div>

    <div id="login-container">
    <form id="login-form" method="POST">
        <button type="button" id="close-login-btn">&times;</button>
        <h2>Inicio de Sesión</h2>
        <input type="text" placeholder="Nombre" id="login-nombre" name="nombre" required>
        <input type="email" placeholder="Email" id="login-email" name="email" required>
        <button type="submit">Iniciar Sesión</button>
    </form>
</div>


    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
