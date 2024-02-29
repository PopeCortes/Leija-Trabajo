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

const arrowUp = document.getElementById("ordenarArriba");
const arrowDown = document.getElementById("ordenarAbajo");
const textViewOrdenar = document.getElementsByClassName("textViewOrdenar");

let destacados = document.getElementById("destacados");
let masRecientes = document.getElementById("masRecientes");
let alto_bajo = document.getElementById("alto-bajo");
let bajo_alto = document.getElementById("bajo-alto");

if (arrowDown) {
}
