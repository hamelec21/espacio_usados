
<header>
    <nav class="bg-white border-b border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-white">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            {{-- logo centrado movile --}}
            <div class="flex justify-between w-full  lg:hidden">
                <div class="mt-2">Logo</div>
                <div>
                    <button data-collapse-toggle="mobile-menu-2" type="button"
                    class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 px-4 mr-2"
                    aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-12 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    </button>
                </div>

            </div>
               {{-- logo pc --}}
            <a href="/" class="flex items-center invisible -mt-4 md:lg:visible lg:visible">
                <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-6 sm:h-9 " alt="Flowbite Logo" />
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-gray-700">Estacios Usados</span>
            </a>

            <div class="flex items-center lg:order-2">


                <a href="/register"
                    class=" bg-sky-600 text-white hover:bg-sky-500 focus:ring-4 focus:ring-gray-50 font-medium rounded-lg text-sm px-4  lg:px-5 py-2 lg:py-2.5 mr-2 dark:hover:bg-orange-500 focus:outline-none dark:focus:ring-gray-800">
                    Crear Cuenta
                </a>

                <a href="/login"
                    class=" bg-orange-600 text-white hover:bg-orange-500 focus:ring-4 focus:ring-gray-50 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:hover:bg-orange-500 focus:outline-none dark:focus:ring-gray-800">Ingresar
                </a>
                <a href="{{ route('carrito') }}" class="flex items-center">
                    <svg class="w-[48px] h-[48px] text-gray-700 dark:text-gray-500 -mr-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.3L19 7H7.3"/>
                    </svg>

                    <div class="bg-red-600 rounded-full w-5 h-5 flex items-center justify-center text-sm text-white">{{ Cart::count(); }}</div>
                </a>

            </div>
            <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                        <a href="/"
                            class="block py-2 pr-4 pl-3 text-white rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-gray-600"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-600 lg:dark:hover:text-orange-500 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Compar</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-600 lg:dark:hover:text-orange-500 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Vender</a>
                    </li>

                    <li>
                        <a href="#"
                            class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-600 lg:dark:hover:text-orange-500 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Contacto</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
</header>
