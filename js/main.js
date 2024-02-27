//! Theme Dark 🌙
const toggleDarkMode = () => {
  const isDarkMode = document.documentElement.classList.toggle("dark");
  localStorage.setItem("darkMode", isDarkMode ? "dark" : "light");
  document.getElementById("modSun").classList.toggle("hidden", isDarkMode);
  document.getElementById("modMoon").classList.toggle("hidden", !isDarkMode);
};

document.getElementById("modSun").addEventListener("click", toggleDarkMode);
document.getElementById("modMoon").addEventListener("click", toggleDarkMode);

// Inicialización del modo oscuro
const isDarkModeStored = localStorage.getItem("darkMode") === "dark";
document.documentElement.classList.toggle("dark", isDarkModeStored);
document.getElementById("modSun").classList.toggle("hidden", isDarkModeStored);
document.getElementById("modMoon").classList.toggle("hidden", !isDarkModeStored);


//! Inicio de sesión Y Registro de Usuario 👦

const cardInicioSesion = document.getElementById("cardInicioSesion");
const cardRegistroUser = document.getElementById("cardRegistroUser");

document.getElementById("usersLogin").addEventListener("click", () => {
  toggleCardVisibility(cardInicioSesion)();
  document.getElementById("sesionView").classList.toggle("hidden");
});

document.getElementById("btnExitLogin").addEventListener("click", toggleCardVisibility(cardInicioSesion));

document.getElementById("btnExitRegister").addEventListener("click", toggleCardVisibility(cardRegistroUser));

document.getElementById("btnRegistrarme").addEventListener("click", () => {
  toggleCardVisibility(cardInicioSesion)();
  toggleCardVisibility(cardRegistroUser)();
});

document.getElementById("yaTengoCuenta").addEventListener("click", () => {
  toggleCardVisibility(cardInicioSesion)();
  toggleCardVisibility(cardRegistroUser)();
});

function toggleCardVisibility(card) {
  return () => {
    card.classList.toggle("hidden");
    document.body.classList.toggle("overflow-hidden");
  };
}

//! Mostrar contraseña y no mostrar Contraseña 🔑

let passView = false;

document.getElementById("btnMostrarPass").addEventListener("click", () => {
  document.getElementById("password").type = passView ? "password" : "text";

  const checkPassIcon = document.getElementById("checkPass");
  if (passView) {
    checkPassIcon.classList.remove("fa-eye");
    checkPassIcon.classList.add("fa-eye-slash");
  } else {
    checkPassIcon.classList.remove("fa-eye-slash");
    checkPassIcon.classList.add("fa-eye");
  }

  passView = !passView;
});
document.getElementById("btnMostrarPassRegister")
  .addEventListener("click", () => {
    document.getElementById("passwordRegistro").type = passView
      ? "password"
      : "text";

    const checkPassIcon = document.getElementById("checkPassRegistro");
    if (passView) {
      checkPassIcon.classList.remove("fa-eye");
      checkPassIcon.classList.add("fa-eye-slash");
    } else {
      checkPassIcon.classList.remove("fa-eye-slash");
      checkPassIcon.classList.add("fa-eye");
    }

    passView = !passView;
  });

//! Cart 🛒

document.getElementById("cardCart").addEventListener("click", () => {
  document.getElementById("cardCartComplete").classList.toggle("hidden");
  document.getElementById("sesionView").classList.add("hidden");
});

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

//! Users View
document.getElementById("btnUserView").addEventListener("click", () => {
  document.getElementById("sesionView").classList.toggle("hidden");
});

//! Card Heart
document.querySelectorAll("#heartCard").forEach((heartCard) => {
  heartCard.addEventListener("click", () => {
    heartCard.classList.toggle("fa-solid");
    console.log("Card Heart");
  });
});

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

    const puntoDeCambio = footerView.offsetTop - window.innerHeight;

    if (scrollY >= puntoDeCambio) {
      filtrosScroll.classList.remove("fixed");
      console.log("add fixed");
      
      
    } else {
      // filtrosScroll.classList.add("fixed");
      
      console.log("remove fixed");
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
