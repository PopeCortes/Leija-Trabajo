<div id="cardInicioSesion" class="hidden absolute flex justify-center items-center z-[10000] w-full h-[100vh] bg-gray-500/40">
    <div class="relative flex justify-center items-center rounded-xl w-[350px] h-[500px]  bg-[#F7F9F9] dark:bg-slate-800 p-7">
        <div class=" w-full">
            <div class="absolute top-2 right-4">
                <button><i id="btnExitLogin" class="fa-solid fa-x text-black hover:text-red-600 transition-all"></i></button>
            </div>
            <h1 class="absolute z-20 top-7 left-0 right-0 mx-auto text-center dark:text-white text-[2rem] font-bold">Inicio de sesión</h1>
            <form action="php/users/verify.php" method="post">
                <div class="space-y-5">
                    <div class="">
                        <input required class="w-full py-2 px-1 outline-none text-black rounded-lg border border-[#CACFD2]" type="email" name="email" id="email" placeholder="Correo electrónico">
                    </div>
                    <div class="">
                        <input id="password" required class="w-full py-2 px-1 outline-none text-black rounded-lg border border-[#CACFD2]" type="password" placeholder="Contraseña" name="pass" id="pass">
                    </div>
                    <div class="flex justify-between">
                        <a id="btnRegistrarme" href="#" class="text-red-600/70 font-semibold hover:text-red-400/70 transition-all">Registrarme</a>
                        <a href="#" class="hover:text-[#EC7063] transition-all">¿Olvidaste tu contraseña?</a>
                    </div>
                    <div class="">
                        <a href="#" id="btnMostrarPass" class="flex items-center space-x-4">
                            <span class="flex justify-center items-center w-[20px] h-[20px] border dark:border-white border-black rounded-md">
                            <!-- <i id="checkPass" class=""></i> -->
                            <i id="checkPass" class="fa-regular fa-eye-slash"></i>
                            </span>
                            <p>Mostrar Contraseña</p>    
                        </a>
                    </div>
                    <div class="">
                        <button type="submit" id="btnIniciarSesion" class="border border-black w-full py-2 dark:bg-black bg-slate-800 text-white rounded-lg">Ingresar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>