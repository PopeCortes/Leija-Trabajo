<?php require 'header.php';
require './PHP/view.php';
?>

<section class="mb-[5rem] py-5 px-3">
    <div class="">
        <div class="">
            <div class="">
                <!-- Titulos -->
                <div id="" class="flex justify-between px-[5rem] py-5 items-center">
                    <div class="">
                        <h1 class="text-[1.3rem] textViewOrdenar">Destacados</h1>
                    </div>
                    <div class="">
                        <ul class="flex space-x-7 items-center">
                            <!-- <li><button>Mostrar Filtros <i class="fa-solid fa-sliders"></i></button></li> -->
                            <li><button id="ocultarFiltros" class="flex items-center "><span id="textFiltro">Ocultar filtros</span> <i class="fa-solid fa-sliders ml-2"></i></button></li>
                            <li class="relative"><button id="btnOrdenar">Ordenar por : <span class="textViewOrdenar ml-2">Destacados</span> <i id="ordenarArriba" class=" fa-solid fa-chevron-down ml-1"></i> </button>
                                <div id="containerOrden" class="hidden absolute z-30 top-8 right-0 bg-white text-black border border-gray-500 dark:bg-[#1B4F72] dark:text-white rounded-md px-5 py-3 w-[200px]">
                                    <ul class="space-y-2">
                                        <li class="w-full"><a id="destacados" class="flex justify-end hover:scale-[1.05] transition-all w-full" href="#">Destacados</a></li>
                                        <li class="w-full"><a id="masRecientes" class="flex justify-end hover:scale-[1.05] transition-all w-full" href="#">Más recientes</a></li>
                                        <li class="w-full"><a id="alto-bajo" class="flex justify-end hover:scale-[1.05] transition-all w-full" href="#">Precio: alto-bajo</a></li>
                                        <li class="w-full"><a id="bajo-alto" class="flex justify-end hover:scale-[1.05] transition-all w-full" href="#">Precio: bajo-alto</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                <div class="flex relative">
                    <!--//! Filtros -->
                    <div id="filtroProduct" class="relative w-[350px] bg-white dark:bg-slate-900 ">
                        <div id="filtrosScroll" class=" top-7  w-[90%] mx-auto px-7 py-3 space-y-2">
                            <div class="absolute top-0 left-0 px-7 py-3 space-y-2">


                                <?php for ($i = 0; $i < 7; $i++) { ?>
                                    <!--  -->
                                    <div class="flex">
                                        <button class="flex space-x-3 items-center btnCategories">
                                            <span class="relative block rounded-md w-[20px] h-[20px] border dark:border-[#5499C7] border-[#1A5276]">
                                                <i class="fa-solid  absolute flex justify-center items-center top-0 bottom-0 left-0 right-0 mx-auto viewCheck"></i>
                                            </span>
                                            <span class="dark:text-white text-black">Categoria</span>
                                        </button>
                                    </div>
                                    <!--  -->

                                <?php } ?>



                            </div>
                        </div>
                    </div>

                    <!--//! Productos -->
                    <div class="w-[100%] px-7">
                        <div class="">
                            <div class="flex items-center justify-center">
                                <div id="gridProducts" class="">

                                    <div class="grid grid-cols-3 gap-6" id="cardContainer"></div>




                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    const data = [
        <?php foreach ($dtsProducts as $product) { ?> {
                id: <?php echo $product['id'] ?>,
                num_part: "<?php echo $product['num_parte'] ?>",
                precio: <?php echo $product['precio'] ?>,
                cantidad: <?php echo $product['cantidad'] ?>,
                marca: "<?php echo $product['marca'] ?>",
                descripcion: "<?php echo $product['descripcion'] ?>",

            },
        <?php } ?>
    ];


    // Función para generar las tarjetas
    function generateCards() {
        const cardContainer = document.getElementById("cardContainer");

        // Limpiamos el contenedor antes de agregar nuevas tarjetas
        cardContainer.innerHTML = "";

        // Iteramos sobre los datos y creamos una tarjeta para cada uno
        data.forEach(item => {
            const card = `
      <div class="card w-[260px] h-[400px] group rounded-md dark:border-gray-800 border overflow-hidden dark:bg-slate-950">
        <div class="relative w-full h-full">
          <div class="relative z-20 w-full flex justify-between p-[10px]">
            <h2>${item.marca}</h2>
            <a href="#Heart" class="text-[#2453d4] transition-all duration-[0.3s]">
              <i id="heartCard" data-idItems="${item.id}" class="fa-regular fa-heart"></i>
            </a>
          </div>
          <a href="#" class="absolute w-full top-0 h-full group-hover:h-[85%] transition-all duration-[0.4s] top-0 bg-zinc-100 dark:bg-slate-950 p-[8px] left-0 z-[11]">
            <img class="w-full h-[250px] group-hover:h-[200px] transition-all duration-[0.4s] object-contain" src="https://rlsolutions.com.mx/Admin/img/964434185.jpg" alt="${item.num_part}">
            <div class="text-[1.1rem] py-[8px]">
              <h2>${item.num_part}</h2>
              <span>$${item.precio} <span class="text-[11px] text-gray-600">MXN</span></span>
            </div>
          </a>
          <a class="flex absolute z-[10] w-full h-[15%] bg-[#2453d4] text-white text-[13px] justify-between items-center bottom-0 left-0 right-0 mx-auto p-[20px] py-[27px] uppercase" href="#aggCart">
            <span>Agregar al carrito</span>
            <span><i class="fa-solid fa-cart-plus"></i></span>
          </a>
        </div>
      </div>
    `;
            // Agregamos la tarjeta al contenedor
            cardContainer.innerHTML += card;
        });
    }

    // Llamamos a la función para generar las tarjetas al cargar la página
    window.addEventListener("load", generateCards);
</script>

<?php require 'footer.php'; ?>