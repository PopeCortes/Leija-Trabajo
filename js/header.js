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
document
  .getElementById("modMoon")
  .classList.toggle("hidden", !isDarkModeStored);

//! Inicio de sesión Y Registro de Usuario 👦

const cardInicioSesion = document.getElementById("cardInicioSesion");
const cardRegistroUser = document.getElementById("cardRegistroUser");

document.getElementById("usersLogin").addEventListener("click", () => {
  toggleCardVisibility(cardInicioSesion)();
  document.getElementById("sesionView").classList.toggle("hidden");
});

document
  .getElementById("btnExitLogin")
  .addEventListener("click", toggleCardVisibility(cardInicioSesion));

document
  .getElementById("btnExitRegister")
  .addEventListener("click", toggleCardVisibility(cardRegistroUser));

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
document
  .getElementById("btnMostrarPassRegister")
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
function toggleCart() {
  const cardCartComplete = document.getElementById("cardCartComplete");
  const sesionView = document.getElementById("sesionView");
  cardCartComplete.classList.toggle("hidden");
  sesionView.classList.add("hidden");
}

function toggleUserView() {
  const cardCartComplete = document.getElementById("cardCartComplete");
  const sesionView = document.getElementById("sesionView");
  sesionView.classList.toggle("hidden");
  cardCartComplete.classList.add("hidden");
}

function cardCart() {
  document.getElementById("cardCart").addEventListener("click", () => {
    toggleCart();
  });
}

function btnUserView() {
  document.getElementById("btnUserView").addEventListener("click", () => {
    toggleUserView();
  });
}

btnUserView();
cardCart();

//! Card Heart
function toggleHeart(card) {
  card.classList.toggle("fa-solid");
}

document.querySelectorAll("#heartCard").forEach((heartCard) => {
  heartCard.addEventListener("click", () => {
    toggleHeart(heartCard);
    btnUserView();
  });
});
