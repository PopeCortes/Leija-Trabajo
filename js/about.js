 var holaMundoDiv = document.getElementById('viewRldolutions');

 var texto = `Bienvenidos a ЯLsolutions`;

 function mostrarTextoLetraPorLetra(index) {
   if (index < texto.length) {
     holaMundoDiv.innerHTML += texto.charAt(index);
     setTimeout(function() {
         mostrarTextoLetraPorLetra(index + 1);
        }, 150);
    }
}

 mostrarTextoLetraPorLetra(0);