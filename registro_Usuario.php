<div id="cardRegistroUser" class="hidden absolute flex justify-center items-center z-10 w-full h-[100vh] bg-gray-500/40">
    <div class="relative flex justify-center items-center rounded-xl w-[350px] h-[550px]  bg-[#F7F9F9] dark:bg-slate-800 p-7">
        <div class=" w-full">
            <div class="absolute top-2 right-4">
                <button><i id="btnExitRegister" class="fa-solid fa-x text-black hover:text-red-600 transition-all"></i></button>
            </div>
            <h1 class="absolute z-20 top-7 left-0 right-0 mx-auto text-center dark:text-white text-[2rem] font-bold">Registro</h1>
            <form action="#" method="post">
                <div class="space-y-5">
                    <div class="">
                        <input required class="w-full py-2 px-1 outline-none text-black rounded-lg border border-[#CACFD2]" type="email" placeholder="Nombre(s)">
                    </div>
                    <div class="">
                        <input required class="w-full py-2 px-1 outline-none text-black rounded-lg border border-[#CACFD2]" type="email" placeholder="Apellidos">
                    </div>
                    <div class="">
                        <input required class="w-full py-2 px-1 outline-none text-black rounded-lg border border-[#CACFD2]" type="email" placeholder="Correo electrónico">
                    </div>
                    <div class="">
                        <input id="passwordRegistro" required class="w-full py-2 px-1 outline-none text-black rounded-lg border border-[#CACFD2]" type="password" placeholder="Contraseña" name="" id="">
                    </div>
                    <div class="flex justify-start">
                        <a id="yaTengoCuenta" href="#" class="text-red-600/70 font-semibold hover:text-red-400/70 transition-all">Ya tengo cuenta</a>
                    </div>
                    <div class="">
                        <a href="#" id="btnMostrarPassRegister" class="flex items-center space-x-4">
                            <span class="flex justify-center items-center w-[20px] h-[20px] border dark:border-white border-black rounded-md">
                                <i id="checkPassRegistro" class="fa-regular fa-eye-slash"></i>
                            </span>
                            <p>Mostrar Contraseña</p>
                        </a>
                    </div>
                    <div class="">
                        <button type="submit" class="border border-black w-full py-2 dark:bg-black bg-slate-800 text-white rounded-lg">Ingresar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>