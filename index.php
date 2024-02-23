<?php require 'header.php'; ?>


<!-- ADS -->
<section class="w-[100%] mx-auto">
    <div class="h-[80vh] relative">

        <video autoplay loop muted class="min-w-[1440px] mx-auto h-[100%] object-cover" loading="lazy" preload="none">
            <source class="w-[100%] h-[100%]" src="videos/RLsolutions.mp4" type="video/mp4">
        </video>


        <div class="absolute top-[35%] py-[1.3rem] rounded-xl bg-black/10 left-0 right-0 w-[700px] mx-auto backdrop-blur-md flex justify-center items-center text-white text-6xl font-bold text-center uppercase drop-shadow-xl">RLSOLUTIONS <br> MOTION & CONTROL</div>
    </div>

    <div class="flex justify-around my-[5rem]">
        <p class="w-[500px] text-center font-semibold text-[#154360] dark:text-[#A9CCE3]">
            "La tienda ofrece soluciones en distribución y control eléctrico para proyectos de construcción comercial, industrial y proyectos especiales. ¡No dudes en visitar la tienda para encontrar los productos de alta calidad que necesitas para tus proyectos! 🛒."
        </p>
        <div class="block text-left bg-[#154360] w-[280px] rounded-md p-[12px]">
            <p class="text-[1.3rem]  text-white">
                ¡Productos y Proyectos de Calidad!
            </p>
            <ul class="flex space-x-[7px]">
                <li><i class="fa-solid fa-star text-white"></i></li>
                <li><i class="fa-solid fa-star text-white"></i></li>
                <li><i class="fa-solid fa-star text-white"></i></li>
                <li><i class="fa-solid fa-star text-white"></i></li>
                <li><i class="fa-solid fa-star text-white"></i></li>
            </ul>
        </div>
    </div>
</section>


<section class="my-[2rem]">
    <div class="w-[100%] flex justify-center text-center my-[2rem]">
        <div class="mx-auto">
            <h2 class="font-semibold mb-5">Mejores productos</h2>
            <ul class="flex space-x-[2rem] text-[1.1rem]">
                <li><a href="#Mas_Vendidos" id="btnMasVendidos" class="rounded-full text-white bg-blue-600 py-[4px] px-[10px]">Más vendidos</a></li>
                <li><a href="#Nuevos_Productos" id="btnNuevosProducts" class="rounded-full py-[4px] px-[10px]">Nuevos productos</a></li>
            </ul>
        </div>
    </div>




    <div class="">
        <div class="flex items-center justify-center">
            <div id="divMasVendidos" class="grid grid-cols-4 gap-6">

                <!-- Card -->
                <div class=" w-[260px] h-[400px] group rounded-md dark:border-gray-800 border overflow-hidden dark:bg-slate-950">
                    <div class="relative w-[100%] h-[100%]">
                        <div class="relative z-30 w-full flex justify-between p-[10px]">
                            <h2>Allen brandley</h2>
                            <a href="#Heart" class="text-[#2453d4] transition-all duration-[0.3s]">
                                <i id="heartCard" data-idItems="1" class="fa-regular fa-heart"></i>
                            </a>
                        </div>
                        <a href="#" class="absolute w-[100%] top-0 h-[100%] group-hover:h-[85%] transition-all duration-[0.4s] top-0 bg-zinc-100 dark:bg-slate-950 p-[8px] left-0 z-[11]">
                            <img class="w-full h-[250px] group-hover:h-[200px] transition-all duration-[0.4s] object-contain" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-102.png" alt="">
                            <div class="text-[1.1rem] py-[8px]">
                                <h2>Mouse Videogame</h2>
                                <span>$1,450 <span class="text-[11px] text-gray-600">MXN</span> </span>
                            </div>
                        </a>

                        <a class="flex absolute z-[10] w-[100%] h-[15%] bg-[#2453d4] text-white text-[13px] justify-between items-center bottom-0 left-0 right-0 mx-auto p-[20px] py-[27px] uppercase" href="#aggCart">
                            <span>Agregar al carrito</span>
                            <span><i class="fa-solid fa-cart-plus"></i></span>
                        </a>
                    </div>
                </div>
                <!-- End - Card -->







                <div class=" w-[260px] h-[400px] group rounded-md dark:border-gray-800 border overflow-hidden dark:bg-slate-950">
                    <div class="relative w-[100%] h-[100%]">
                        <div class="relative z-30 w-full flex justify-between p-[10px]">
                            <h2>Allen brandley</h2>
                            <a href="#Heart" class="text-[#2453d4] transition-all duration-[0.3s]">
                                <i id="heartCard" data-idItems="2" class="fa-regular fa-heart"></i>
                            </a>
                        </div>
                        <a href="#" class="absolute w-[100%] top-0 h-[100%] group-hover:h-[85%] transition-all duration-[0.4s] top-0 bg-zinc-100 dark:bg-slate-950 p-[8px] left-0 z-[11]">
                            <img class="w-full h-[250px] group-hover:h-[200px] transition-all duration-[0.4s] object-contain" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-102.png" alt="">
                            <div class="text-[1.1rem] py-[8px]">
                                <h2>Mouse Videogame</h2>
                                <span>$1,450 <span class="text-[11px] text-gray-600">MXN</span> </span>
                            </div>
                        </a>

                        <a class="flex absolute z-[10] w-[100%] h-[15%] bg-[#2453d4] text-white text-[13px] justify-between items-center bottom-0 left-0 right-0 mx-auto p-[20px] py-[27px] uppercase" href="#aggCart">
                            <span>Agregar al carrito</span>
                            <span><i class="fa-solid fa-cart-plus"></i></span>
                        </a>
                    </div>
                </div>
                <div class=" w-[260px] h-[400px] group rounded-md dark:border-gray-800 border overflow-hidden dark:bg-slate-950">
                    <div class="relative w-[100%] h-[100%]">
                        <div class="relative z-30 w-full flex justify-between p-[10px]">
                            <h2>Allen brandley</h2>
                            <a href="#Heart" class="text-[#2453d4] transition-all duration-[0.3s]">
                                <i id="heartCard" data-idItems="3" class="fa-regular fa-heart"></i>
                            </a>
                        </div>
                        <a href="#" class="absolute w-[100%] top-0 h-[100%] group-hover:h-[85%] transition-all duration-[0.4s] top-0 bg-zinc-100 dark:bg-slate-950 p-[8px] left-0 z-[11]">
                            <img class="w-full h-[250px] group-hover:h-[200px] transition-all duration-[0.4s] object-contain" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-102.png" alt="">
                            <div class="text-[1.1rem] py-[8px]">
                                <h2>Mouse Videogame</h2>
                                <span>$1,450 <span class="text-[11px] text-gray-600">MXN</span> </span>
                            </div>
                        </a>

                        <a class="flex absolute z-[10] w-[100%] h-[15%] bg-[#2453d4] text-white text-[13px] justify-between items-center bottom-0 left-0 right-0 mx-auto p-[20px] py-[27px] uppercase" href="#aggCart">
                            <span>Agregar al carrito</span>
                            <span><i class="fa-solid fa-cart-plus"></i></span>
                        </a>
                    </div>
                </div>
                <div class=" w-[260px] h-[400px] group rounded-md dark:border-gray-800 border overflow-hidden dark:bg-slate-950">
                    <div class="relative w-[100%] h-[100%]">
                        <div class="relative z-30 w-full flex justify-between p-[10px]">
                            <h2>Allen brandley</h2>
                            <a href="#Heart" class="text-[#2453d4] transition-all duration-[0.3s]">
                                <i id="heartCard" data-idItems="4" class="fa-regular fa-heart"></i>
                            </a>
                        </div>
                        <a href="#" class="absolute w-[100%] top-0 h-[100%] group-hover:h-[85%] transition-all duration-[0.4s] top-0 bg-zinc-100 dark:bg-slate-950 p-[8px] left-0 z-[11]">
                            <img class="w-full h-[250px] group-hover:h-[200px] transition-all duration-[0.4s] object-contain" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-102.png" alt="">
                            <div class="text-[1.1rem] py-[8px]">
                                <h2>Mouse Videogame</h2>
                                <span>$1,450 <span class="text-[11px] text-gray-600">MXN</span> </span>
                            </div>
                        </a>

                        <a class="flex absolute z-[10] w-[100%] h-[15%] bg-[#2453d4] text-white text-[13px] justify-between items-center bottom-0 left-0 right-0 mx-auto p-[20px] py-[27px] uppercase" href="#aggCart">
                            <span>Agregar al carrito</span>
                            <span><i class="fa-solid fa-cart-plus"></i></span>
                        </a>
                    </div>
                </div>
                <div class=" w-[260px] h-[400px] group rounded-md dark:border-gray-800 border overflow-hidden dark:bg-slate-950">
                    <div class="relative w-[100%] h-[100%]">
                        <div class="relative z-30 w-full flex justify-between p-[10px]">
                            <h2>Allen brandley</h2>
                            <a href="#Heart" class="text-[#2453d4] transition-all duration-[0.3s]">
                                <i id="heartCard" data-idItems="2" class="fa-regular fa-heart"></i>
                            </a>
                        </div>
                        <a href="#" class="absolute w-[100%] top-0 h-[100%] group-hover:h-[85%] transition-all duration-[0.4s] top-0 bg-zinc-100 dark:bg-slate-950 p-[8px] left-0 z-[11]">
                            <img class="w-full h-[250px] group-hover:h-[200px] transition-all duration-[0.4s] object-contain" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-102.png" alt="">
                            <div class="text-[1.1rem] py-[8px]">
                                <h2>Mouse Videogame</h2>
                                <span>$1,450 <span class="text-[11px] text-gray-600">MXN</span> </span>
                            </div>
                        </a>

                        <a class="flex absolute z-[10] w-[100%] h-[15%] bg-[#2453d4] text-white text-[13px] justify-between items-center bottom-0 left-0 right-0 mx-auto p-[20px] py-[27px] uppercase" href="#aggCart">
                            <span>Agregar al carrito</span>
                            <span><i class="fa-solid fa-cart-plus"></i></span>
                        </a>
                    </div>
                </div>
                <div class=" w-[260px] h-[400px] group rounded-md dark:border-gray-800 border overflow-hidden dark:bg-slate-950">
                    <div class="relative w-[100%] h-[100%]">
                        <div class="relative z-30 w-full flex justify-between p-[10px]">
                            <h2>Allen brandley</h2>
                            <a href="#Heart" class="text-[#2453d4] transition-all duration-[0.3s]">
                                <i id="heartCard" data-idItems="3" class="fa-regular fa-heart"></i>
                            </a>
                        </div>
                        <a href="#" class="absolute w-[100%] top-0 h-[100%] group-hover:h-[85%] transition-all duration-[0.4s] top-0 bg-zinc-100 dark:bg-slate-950 p-[8px] left-0 z-[11]">
                            <img class="w-full h-[250px] group-hover:h-[200px] transition-all duration-[0.4s] object-contain" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-102.png" alt="">
                            <div class="text-[1.1rem] py-[8px]">
                                <h2>Mouse Videogame</h2>
                                <span>$1,450 <span class="text-[11px] text-gray-600">MXN</span> </span>
                            </div>
                        </a>

                        <a class="flex absolute z-[10] w-[100%] h-[15%] bg-[#2453d4] text-white text-[13px] justify-between items-center bottom-0 left-0 right-0 mx-auto p-[20px] py-[27px] uppercase" href="#aggCart">
                            <span>Agregar al carrito</span>
                            <span><i class="fa-solid fa-cart-plus"></i></span>
                        </a>
                    </div>
                </div>
                <div class=" w-[260px] h-[400px] group rounded-md dark:border-gray-800 border overflow-hidden dark:bg-slate-950">
                    <div class="relative w-[100%] h-[100%]">
                        <div class="relative z-30 w-full flex justify-between p-[10px]">
                            <h2>Allen brandley</h2>
                            <a href="#Heart" class="text-[#2453d4] transition-all duration-[0.3s]">
                                <i id="heartCard" data-idItems="4" class="fa-regular fa-heart"></i>
                            </a>
                        </div>
                        <a href="#" class="absolute w-[100%] top-0 h-[100%] group-hover:h-[85%] transition-all duration-[0.4s] top-0 bg-zinc-100 dark:bg-slate-950 p-[8px] left-0 z-[11]">
                            <img class="w-full h-[250px] group-hover:h-[200px] transition-all duration-[0.4s] object-contain" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-102.png" alt="">
                            <div class="text-[1.1rem] py-[8px]">
                                <h2>Mouse Videogame</h2>
                                <span>$1,450 <span class="text-[11px] text-gray-600">MXN</span> </span>
                            </div>
                        </a>

                        <a class="flex absolute z-[10] w-[100%] h-[15%] bg-[#2453d4] text-white text-[13px] justify-between items-center bottom-0 left-0 right-0 mx-auto p-[20px] py-[27px] uppercase" href="#aggCart">
                            <span>Agregar al carrito</span>
                            <span><i class="fa-solid fa-cart-plus"></i></span>
                        </a>
                    </div>
                </div>
                <div class=" w-[260px] h-[400px] group rounded-md dark:border-gray-800 border overflow-hidden dark:bg-slate-950">
                    <div class="relative w-[100%] h-[100%]">
                        <div class="relative z-30 w-full flex justify-between p-[10px]">
                            <h2>Allen brandley</h2>
                            <a href="#Heart" class="text-[#2453d4] transition-all duration-[0.3s]">
                                <i id="heartCard" data-idItems="4" class="fa-regular fa-heart"></i>
                            </a>
                        </div>
                        <a href="#" class="absolute w-[100%] top-0 h-[100%] group-hover:h-[85%] transition-all duration-[0.4s] top-0 bg-zinc-100 dark:bg-slate-950 p-[8px] left-0 z-[11]">
                            <img class="w-full h-[250px] group-hover:h-[200px] transition-all duration-[0.4s] object-contain" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-102.png" alt="">
                            <div class="text-[1.1rem] py-[8px]">
                                <h2>Mouse Videogame</h2>
                                <span>$1,450 <span class="text-[11px] text-gray-600">MXN</span> </span>
                            </div>
                        </a>

                        <a class="flex absolute z-[10] w-[100%] h-[15%] bg-[#2453d4] text-white text-[13px] justify-between items-center bottom-0 left-0 right-0 mx-auto p-[20px] py-[27px] uppercase" href="#aggCart">
                            <span>Agregar al carrito</span>
                            <span><i class="fa-solid fa-cart-plus"></i></span>
                        </a>
                    </div>
                </div>





            </div>
        </div>
    </div>


    <div class="">
        <div class="flex items-center justify-center">
            <div id="divNuevoProductos" class="hidden grid grid-cols-4 gap-6">

                <!-- Card -->
                <div class=" w-[260px] h-[400px] group rounded-md dark:border-gray-800 border overflow-hidden dark:bg-slate-950">
                    <div class="relative w-[100%] h-[100%]">
                        <div class="relative z-30 w-full flex justify-between p-[10px]">
                            <h2>Allen brandley</h2>
                            <a href="#Heart" class="text-[#2453d4] transition-all duration-[0.3s]">
                                <i id="heartCard" data-idItems="1" class="fa-regular fa-heart"></i>
                            </a>
                        </div>
                        <a href="#" class="absolute w-[100%] top-0 h-[100%] group-hover:h-[85%] transition-all duration-[0.4s] top-0 bg-zinc-100 dark:bg-slate-950 p-[8px] left-0 z-[11]">
                            <img class="w-full h-[250px] group-hover:h-[200px] transition-all duration-[0.4s] object-contain" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-102.png" alt="">
                            <div class="text-[1.1rem] py-[8px]">
                                <h2>Mouse Videogame</h2>
                                <span>$1,450 <span class="text-[11px] text-gray-600">MXN</span> </span>
                            </div>
                        </a>

                        <a class="flex absolute z-[10] w-[100%] h-[15%] bg-[#2453d4] text-white text-[13px] justify-between items-center bottom-0 left-0 right-0 mx-auto p-[20px] py-[27px] uppercase" href="#aggCart">
                            <span>Agregar al carrito</span>
                            <span><i class="fa-solid fa-cart-plus"></i></span>
                        </a>
                    </div>
                </div>
                <!-- End - Card -->


            </div>
        </div>
    </div>

</section>

<?php require 'footer.php'; ?>