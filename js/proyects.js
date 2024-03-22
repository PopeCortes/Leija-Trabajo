const dhlApiUrl = "https://developer.dhl.com/user/144774/apps/nely";
const clientId = "gzgJ2ALAKJXkAQZQ";
const apiKey = "61KbpsWe9VLPa79KHGmAWHsNYG55edZd";

const requestOptions = {
  method: "GET",
  headers: {
    "DHL-API-Key": apiKey,
    "DHL-API-User-Id": clientId,
    "Content-Type": "application/json",
  },
};

fetch(dhlApiUrl, requestOptions)
  .then((response) => response.json())
  .then((data) => {
    // Procesa los datos de respuesta según sea necesario
    console.log(data);
  })
  .catch((error) => {
    console.error("Error al obtener datos de la API de DHL:", error);
  });
