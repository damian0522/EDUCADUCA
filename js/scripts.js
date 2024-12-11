//Logica para funcionalidad de los bototes de ayuda
let tamanoLetra = 1; // Factor inicial de tamaño de letra
const tamanoLetraMax = 4; // Tamaño máximo permitido
const tamanoLetraMin = 0.25; // Tamaño mínimo permitido

// Logica para cuando haga click salga formulario
document.getElementById("btn-register").addEventListener("click", function () {
  document.getElementById("register-container").style.display = "block";
});

// Logica para cuando de click en la X cierre el formulario
document.getElementById("close-form-btn").addEventListener("click", function () {
  document.getElementById("register-container").style.display = "none";
});

// Logica para que cuando haya registro exitoso me envie alerta y se refresque la pantalla
document.getElementById("register-form").addEventListener("submit", function (event) {
  event.preventDefault(); // Evita la recarga de la página

  const formData = new FormData(this);

  fetch("db/register_users.php", {
    method: "POST",
    body: formData,
  })
    .then((response) => response.json())
    .then((data) => {
      const alertBox = document.getElementById("alert-box");
      if (data.success) {
        alertBox.textContent = data.message;
        alertBox.style.backgroundColor = "green";
        document.getElementById("register-container").style.display = "none"; // Oculta el formulario tras el éxito
        // Refresca la pantalla tras un breve tiempo
        setTimeout(() => location.reload(), 3000);
      } else {
        alertBox.textContent = data.message;
        alertBox.style.backgroundColor = "red";
      }
      alertBox.style.display = "block"; // Muestra la alerta
    })
    .catch((error) => {
      console.error("Error:", error);
    });
});

// Logica para cuando haga click salga formulario
document.getElementById("btn-login").addEventListener("click", function () {
  document.getElementById("login-container").style.display = "block";
});

// Logica para cuando de click en la X cierre el formulario
document.getElementById("close-login-btn").addEventListener("click", function () {
  document.getElementById("login-container").style.display = "none";
});

//Logica para logearse
document.getElementById("login-form").addEventListener("submit", function (event) {
  event.preventDefault(); // Evita la recarga de la página

  const formData = new FormData(this);

  fetch("db/login_users.php", {
    method: "POST",
    body: formData,
  })
    .then((response) => response.json())
    .then((data) => {
      const alertBox = document.getElementById("alert-box");
      if (data.success) {
        alertBox.textContent = data.message;
        alertBox.style.backgroundColor = "green";
        document.getElementById("login-container").style.display = "none";
        // Refresca la pantalla tras un breve tiempo
        setTimeout(() => location.reload(), 3000);
      } else {
        alertBox.textContent = data.message;
        alertBox.style.backgroundColor = "red";
      }
      alertBox.style.display = "block"; // Muestra la alerta
    })
    .catch((error) => {
      console.error("Error:", error);
    });
});


// Función para cambiar el tamaño de la letra
function cambiarTamanoLetra(direccion) {
  // Calculamos el nuevo tamaño de letra
  tamanoLetra = tamanoLetra * (1 + direccion * 0.25);
  
  // Aseguramos que el tamaño no sea menor que 0.25 ni mayor que 4
  if (tamanoLetra > tamanoLetraMax) tamanoLetra = tamanoLetraMax;
  if (tamanoLetra < tamanoLetraMin) tamanoLetra = tamanoLetraMin;
  
  // Aplicamos el nuevo tamaño de letra a todo el body de la página
  document.body.style.fontSize = tamanoLetra + "em";

  // Guardamos el tamaño de la letra en el localStorage
  localStorage.setItem("tamanoLetra", tamanoLetra);
}

// Función para invertir los colores
function invertirColores() {
  const body = document.body;
  body.classList.toggle('invertido'); // Activamos o desactivamos la clase 'invertido'
  
  // Guardamos la preferencia en localStorage
  if (body.classList.contains('invertido')) {
    localStorage.setItem('modoInvertido', 'true');
  } else {
    localStorage.setItem('modoInvertido', 'false');
  }
}

// Al cargar la página, verificamos las configuraciones guardadas
window.onload = function () {
  // Recuperar el tamaño de letra del localStorage
  if (localStorage.getItem("tamanoLetra")) {
    tamanoLetra = parseFloat(localStorage.getItem("tamanoLetra"));
    document.body.style.fontSize = tamanoLetra + "em";
  }
  
  // Verificamos si la preferencia de colores invertidos está activada
  if (localStorage.getItem('modoInvertido') === 'true') {
    document.body.classList.add('invertido');
  }

  // Agregar eventos de clic para los botones
  document.getElementById('btnAumentar').addEventListener('click', function() {
    cambiarTamanoLetra(1); // Aumenta el tamaño de la letra
  });

  document.getElementById('btnReducir').addEventListener('click', function() {
    cambiarTamanoLetra(-1); // Reduce el tamaño de la letra
  });

  document.getElementById('btnLucecita').addEventListener('click', function() {
    invertirColores(); // Invierte los colores de la página
  });
};



// scripts.js
document.addEventListener('DOMContentLoaded', () => {
    console.log('Educaduca está listo.');
  });

// Hover para botones del menu
document.addEventListener('DOMContentLoaded', function () {
  const popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
  const popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
    return new bootstrap.Popover(popoverTriggerEl);
  });
});
