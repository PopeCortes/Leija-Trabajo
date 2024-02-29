//! Mejores Productos

if (document.getElementById("btnMasVendidos")) {
  document.getElementById("btnMasVendidos").addEventListener("click", () => {
    const btnMasVendidos = document.getElementById("btnMasVendidos");
    btnMasVendidos.classList.add("bg-blue-600", "text-white");
    btnNuevosProducts.classList.remove("bg-blue-600", "text-white");
    divMasVendidos.classList.remove("hidden");
    divNuevoProductos.classList.add("hidden");
  });
}

if (document.getElementById("btnNuevosProducts")) {
  document.getElementById("btnNuevosProducts").addEventListener("click", () => {
    const btnNuevosProducts = document.getElementById("btnNuevosProducts");
    btnNuevosProducts.classList.add("bg-blue-600", "text-white");
    btnMasVendidos.classList.remove("bg-blue-600", "text-white");
    divMasVendidos.classList.add("hidden");
    divNuevoProductos.classList.remove("hidden");
  });
}

//!
//!
//! productos.php
//!
//!

const filtrosScroll = document.getElementById("filtrosScroll");

if (filtrosScroll) {
  window.addEventListener("scroll", function () {
    const scrollY = window.scrollY || window.pageYOffset;

    const puntoDeCambio = 200;

    if (scrollY >= puntoDeCambio) {
      filtrosScroll.classList.add("fixed");
    } else {
      filtrosScroll.classList.remove("fixed");
    }
  });
}

const footerView = document.getElementById("footerView");

if (footerView && filtrosScroll) {
  window.addEventListener("scroll", function () {
    const scrollY = window.scrollY || window.pageYOffset;

    const puntoDeCambio = footerView.offsetTop - window.innerHeight / 2;

    if (scrollY >= puntoDeCambio) {
      filtrosScroll.classList.remove("fixed");
    }
  });
}

const gridProducts = document.getElementById("gridProducts");
const textFiltro = document.getElementById("textFiltro");
const filtroProduct = document.getElementById("filtroProduct");
let filtrosOcultos = false;

if (document.getElementById("ocultarFiltros")) {
  document.getElementById("ocultarFiltros").addEventListener("click", () => {
    if (filtrosOcultos === true) {
      textFiltro.innerHTML = "Ocultar filtros";
      gridProducts.classList.add("grid-cols-3");
      gridProducts.classList.remove("grid-cols-4");
      filtroProduct.classList.remove("hidden");
      filtrosOcultos = false;
      localStorage.setItem("filter", "false");
    } else if (filtrosOcultos === false) {
      textFiltro.innerHTML = "Mostrar filtros";
      gridProducts.classList.add("grid-cols-4");
      gridProducts.classList.remove("grid-cols-3");
      filtroProduct.classList.add("hidden");
      filtrosOcultos = true;
      localStorage.setItem("filter", "true");
    }
  });
}

// Configuración inicial basada en el localStorage
const filterState = localStorage.getItem("filter");

if (filterState === "true") {
  textFiltro.innerHTML = "Mostrar filtros";
  gridProducts.classList.add("grid-cols-4");
  gridProducts.classList.remove("grid-cols-3");
  filtroProduct.classList.add("hidden"); // No necesitas toggle aquí, solo quitar la clase
  filtrosOcultos = true;
} else if (filterState === "false") {
  textFiltro.innerHTML = "Ocultar filtros";
  gridProducts.classList.add("grid-cols-3");
  gridProducts.classList.remove("grid-cols-4");
  filtroProduct.classList.remove("hidden"); // No necesitas toggle aquí, solo agregar la clase
  filtrosOcultos = false;
}

const btnOrdenar = document.getElementById("btnOrdenar");
const ordenarArriba = document.getElementById("ordenarArriba");
const textViewOrdenar = document.getElementsByClassName("textViewOrdenar");
const containerOrden = document.getElementById("containerOrden");

const destacados = document.getElementById("destacados");
const masRecientes = document.getElementById("masRecientes");
const alto_bajo = document.getElementById("alto-bajo");
const bajo_alto = document.getElementById("bajo-alto");

function ordenarProducts() {
  btnOrdenar.addEventListener("click", () => {
    ordenarArriba.classList.toggle("fa-chevron-up");
    ordenarArriba.classList.toggle("fa-chevron-down");
    containerOrden.classList.toggle("hidden");
  });

  destacados.addEventListener("click", () => {
    for (let i = 0; i < textViewOrdenar.length; i++) {
      textViewOrdenar[i].textContent = "Destacados";
    }
    localStorage.setItem("ordenar", "destacados");
  });

  masRecientes.addEventListener("click", () => {
    for (let i = 0; i < textViewOrdenar.length; i++) {
      textViewOrdenar[i].textContent = "Más Recientes";
    }
    localStorage.setItem("ordenar", "masRecientes");
  });

  alto_bajo.addEventListener("click", () => {
    for (let i = 0; i < textViewOrdenar.length; i++) {
      textViewOrdenar[i].textContent = "Alto a Bajo";
    }
    localStorage.setItem("ordenar", "alto_bajo");
  });

  bajo_alto.addEventListener("click", () => {
    for (let i = 0; i < textViewOrdenar.length; i++) {
      textViewOrdenar[i].textContent = "Bajo a Alto";
    }
    localStorage.setItem("ordenar", "bajo_alto");
  });
}

if (containerOrden) {
  ordenarProducts();

  if (localStorage.getItem("ordenar") === "destacados") {
    for (let i = 0; i < textViewOrdenar.length; i++) {
      textViewOrdenar[i].textContent = "Destacados";
    }
  } else if (localStorage.getItem("ordenar") === "masRecientes") {
    for (let i = 0; i < textViewOrdenar.length; i++) {
      textViewOrdenar[i].textContent = "Más Recientes";
    }
  } else if (localStorage.getItem("ordenar") === "alto_bajo") {
    for (let i = 0; i < textViewOrdenar.length; i++) {
      textViewOrdenar[i].textContent = "Alto a Bajo";
    }
  } else if (localStorage.getItem("ordenar") === "bajo_alto") {
    for (let i = 0; i < textViewOrdenar.length; i++) {
      textViewOrdenar[i].textContent = "Bajo a Alto";
    }
  }
}
