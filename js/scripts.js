let tamanoLetra = 1; // Factor inicial de tamaño de letra
const tamanoLetraMax = 4; // Tamaño máximo permitido
const tamanoLetraMin = 0.25; // Tamaño mínimo permitido

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
  