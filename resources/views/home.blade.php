<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles

</head>

<body>
    {{-- menu Principal --}}
    @include('menu_principal')

    {{-- banner --}}
    <section class="bg-gray-200">
        <div class="w-full">
            <img src="{{ asset('images/ecommerce/banner.jpg') }}">
        </div>
    </section>
    {{-- Categorias --}}

    <div class="container mx-auto px-4">
        <h2 class="text-2xl font-medium text-gray-800 uppercase mb-6 px-4 mt-10">Productos Recomendados</h2>
        <div class="grid grid-cols-2 lg:grid-cols-6 gap-4  space-x-2">
            <div class="bg-gray-200 flex justify-center items-center shadow-lg relative">
                <a href="#">
                    <div class="hover:scale-75 ease-in duration-500">
                        <img src="{{ asset('images/products/img-3.png') }}" alt="Imagen de Categoría" class="object-cover">
                        <div class="text-center">Nombre Categoría</div>
                    </div>
                </a>

            </div>

            <div class="bg-gray-200 flex justify-center items-center shadow-lg relative">
                <a href="">
                    <div class="hover:scale-75 ease-in duration-500">
                        <img src="{{ asset('images/products/img-16.png') }}" alt="Imagen de Categoría"
                            class="object-cover">
                        <div class="text-center">Nombre Categoría</div>
                    </div>
                </a>
            </div>

            <div class="bg-gray-200 flex justify-center items-center shadow-lg relative">
                <a href="#">
                    <div class="hover:scale-75 ease-in duration-500">
                        <img src="{{ asset('images/products/img-20.png') }}" alt="Imagen de Categoría"
                            class="object-cover">
                        <div class="text-center">Nombre Categoría</div>
                    </div>
                </a>
            </div>

            <div class="bg-gray-200 flex justify-center items-center shadow-lg relative">
                <a href="#">
                    <div class="hover:scale-75 ease-in duration-500">
                        <img src="{{ asset('images/products/img-18.png') }}" alt="Imagen de Categoría"
                            class="object-cover">
                        <div class="text-center">Nombre Categoría</div>
                    </div>
                </a>

            </div>

            <div class="bg-gray-200 flex justify-center items-center shadow-lg relative">
                <a href="#">
                    <div class="hover:scale-75 ease-in duration-500">
                        <img src="{{ asset('images/products/img-17.png') }}" alt="Imagen de Categoría"
                            class="object-cover">
                        <div class="text-center">Nombre Categoría</div>
                    </div>

                </a>

            </div>

            <div class="bg-gray-200 flex justify-center items-center shadow-lg relative">
                <a href="#">
                    <div class="hover:scale-75 ease-in duration-500">
                        <img src="{{ asset('images/products/img-5.png') }}" alt="Imagen de Categoría"
                            class="object-cover">
                        <div class="text-center">Nombre Categoría</div>
                    </div>
                </a>


            </div>
        </div>

    </div>

    {{-- filtros  --}}
    <section class="px-4 mt-10">
        <div class="container mx-auto  mt-5 mb-5 rounded-md border-gray-300 border">
            <div class="bg-orange-500 w-full rounded-t h-10 mb-2 text-white flex justify-start items-center pl-4">Buscas
                Algo?</div>
            <div class="lg:flex justify-between px-4 ">
                <div class="px-4 w-11/12">
                    <input type="text" name="buscar"
                        class="mt-5 mb-5 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm px-4 w-full"
                        placeholder="Ingresa La busquea Ej:Zapatos">
                </div>
                <div class="px-4">
                    <select class="rounded-md mt-5 mb-5 border-gray-300 w-full text-gray-700 ">
                        <option>Región</option>
                        <option>Coquimbo</option>
                        <option>Valparaiso</option>
                        <option>Metropolitana</option>

                    </select>
                </div>

                <div class="px-4">
                    <select class=" rounded-md mt-5 mb-5 border-gray-300 w-full  text-gray-700 ">
                        <option class="">Comuna</option>
                        <option>LLay-LLay</option>
                        <option>Panquehue</option>
                        <option>San Felipe</option>

                    </select>
                </div>
            </div>
        </div>

    </section>

    {{-- catalogo productos --}}
    <div class="container mx-auto">
        <h2 class="text-2xl font-medium text-gray-800 uppercase mb-6 px-4">Productos</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 px-4">
            <div class="bg-white shadow rounded overflow-hidden group">
                <div class="relative">
                    <img src="{{ asset('images/products/img-1.png') }}" alt="product 1" class="w-full">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-40 flex items-center
                justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                        <a href="#"
                            class="text-white text-lg w-8 h-8 rounded-full bg-sky-600 flex items-center justify-center hover:bg-orange-500 transition"
                            title="Ver Producto">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                        <a href="#"
                            class="text-white text-lg w-8 h-8 rounded-full bg-sky-600 flex items-center justify-center hover:bg-orange-500 transition"
                            title="Agregar a Favoritos">
                            <i class="fa-solid fa-heart"></i>
                        </a>
                    </div>
                </div>
                <div class="pt-4 pb-3 px-4">
                    <a href="#">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">EOS
                            6D Mark II Body</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-orange-500 font-semibold text-center">$45.00</p>

                    </div>
                    <div class="flex items-center">
                        <div class="flex gap-1 text-sm text-yellow-400">
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                        </div>

                    </div>
                </div>
                <a href="#"
                    class="block w-full py-1 text-center text-white  border border-gray-300 rounded-b bg-sky-600 hover:bg-orange-500 hover:text-white transition">Agregar
                    al Carro</a>
            </div>

            <div class="bg-white shadow rounded overflow-hidden group">
                <div class="relative">
                    <img src="{{ asset('images/products/img-2.png') }}" alt="product 1" class="w-full">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-40 flex items-center
                justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                        <a href="#"
                            class="text-white text-lg w-8 h-8 rounded-full bg-sky-600 flex items-center justify-center hover:bg-orange-500 transition"
                            title="Ver Producto">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                        <a href="#"
                            class="text-white text-lg w-8 h-8 rounded-full bg-sky-600 flex items-center justify-center hover:bg-orange-500 transition"
                            title="Agregar a Favoritos">
                            <i class="fa-solid fa-heart"></i>
                        </a>
                    </div>
                </div>
                <div class="pt-4 pb-3 px-4">
                    <a href="#">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">EOS
                            6D Mark II Body</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-orange-500 font-semibold text-center">$45.00</p>

                    </div>
                    <div class="flex items-center">
                        <div class="flex gap-1 text-sm text-yellow-400">
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span class=" text-gray-400"><i class="fa-solid fa-star"></i></span>
                            <span class=" text-gray-400"><i class="fa-solid fa-star"></i></span>
                            <span class=" text-gray-400"><i class="fa-solid fa-star"></i></span>
                        </div>

                    </div>
                </div>
                <a href="#"
                    class="block w-full py-1 text-center text-white  border border-gray-300 rounded-b bg-sky-600 hover:bg-orange-500 hover:text-white transition">Agregar
                    al Carro</a>
            </div>

            <div class="bg-white shadow rounded overflow-hidden group">
                <div class="relative">
                    <img src="{{ asset('images/products/img-10.png') }}" alt="product 1" class="w-full">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-40 flex items-center
                justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                        <a href="#"
                            class="text-white text-lg w-8 h-8 rounded-full bg-sky-600 flex items-center justify-center hover:bg-orange-500 transition"
                            title="Ver Producto">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                        <a href="#"
                            class="text-white text-lg w-8 h-8 rounded-full bg-sky-600 flex items-center justify-center hover:bg-orange-500 transition"
                            title="Agregar a Favoritos">
                            <i class="fa-solid fa-heart"></i>
                        </a>
                    </div>
                </div>
                <div class="pt-4 pb-3 px-4">
                    <a href="#">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">EOS
                            6D Mark II Body</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-orange-500 font-semibold text-center">$45.00</p>

                    </div>
                    <div class="flex items-center">
                        <div class="flex gap-1 text-sm text-yellow-400">
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                        </div>

                    </div>
                </div>
                <a href="#"
                    class="block w-full py-1 text-center text-white  border border-gray-300 rounded-b bg-sky-600 hover:bg-orange-500 hover:text-white transition">Agregar
                    al Carro</a>
            </div>

            <div class="bg-white shadow rounded overflow-hidden group">
                <div class="relative">
                    <img src="{{ asset('images/products/img-11.png') }}" alt="product 1" class="w-full">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-40 flex items-center
                justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                        <a href="#"
                            class="text-white text-lg w-8 h-8 rounded-full bg-sky-600 flex items-center justify-center hover:bg-orange-500 transition"
                            title="Ver Producto">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                        <a href="#"
                            class="text-white text-lg w-8 h-8 rounded-full bg-sky-600 flex items-center justify-center hover:bg-orange-500 transition"
                            title="Agregar a Favoritos">
                            <i class="fa-solid fa-heart"></i>
                        </a>
                    </div>
                </div>
                <div class="pt-4 pb-3 px-4">
                    <a href="#">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">EOS
                            6D Mark II Body</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-orange-500 font-semibold text-center">$45.00</p>

                    </div>
                    <div class="flex items-center">
                        <div class="flex gap-1 text-sm text-yellow-400">
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                        </div>

                    </div>
                </div>
                <a href="#"
                    class="block w-full py-1 text-center text-white  border border-gray-300 rounded-b bg-sky-600 hover:bg-orange-500 hover:text-white transition">Agregar
                    al Carro</a>
            </div>

            <div class="bg-white shadow rounded overflow-hidden group">
                <div class="relative">
                    <img src="{{ asset('images/products/img-20.png') }}" alt="product 1" class="w-full">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-40 flex items-center
                justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                        <a href="#"
                            class="text-white text-lg w-8 h-8 rounded-full bg-sky-600 flex items-center justify-center hover:bg-orange-500 transition"
                            title="Ver Producto">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                        <a href="#"
                            class="text-white text-lg w-8 h-8 rounded-full bg-sky-600 flex items-center justify-center hover:bg-orange-500 transition"
                            title="Agregar a Favoritos">
                            <i class="fa-solid fa-heart"></i>
                        </a>
                    </div>
                </div>
                <div class="pt-4 pb-3 px-4">
                    <a href="#">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">EOS
                            6D Mark II Body</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-orange-500 font-semibold text-center">$45.00</p>

                    </div>
                    <div class="flex items-center">
                        <div class="flex gap-1 text-sm text-yellow-400">
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                        </div>

                    </div>
                </div>
                <a href="#"
                    class="block w-full py-1 text-center text-white  border border-gray-300 rounded-b bg-sky-600 hover:bg-orange-500 hover:text-white transition">Agregar
                    al Carro</a>
            </div>

            <div class="bg-white shadow rounded overflow-hidden group">
                <div class="relative">
                    <img src="{{ asset('images/products/img-6.png') }}" alt="product 1" class="w-full">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-40 flex items-center
                justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                        <a href="#"
                            class="text-white text-lg w-8 h-8 rounded-full bg-sky-600 flex items-center justify-center hover:bg-orange-500 transition"
                            title="Ver Producto">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                        <a href="#"
                            class="text-white text-lg w-8 h-8 rounded-full bg-sky-600 flex items-center justify-center hover:bg-orange-500 transition"
                            title="Agregar a Favoritos">
                            <i class="fa-solid fa-heart"></i>
                        </a>
                    </div>
                </div>
                <div class="pt-4 pb-3 px-4">
                    <a href="#">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">EOS
                            6D Mark II Body</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-orange-500 font-semibold text-center">$45.00</p>

                    </div>
                    <div class="flex items-center">
                        <div class="flex gap-1 text-sm text-yellow-400">
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                        </div>

                    </div>
                </div>
                <a href="#"
                    class="block w-full py-1 text-center text-white  border border-gray-300 rounded-b bg-sky-600 hover:bg-orange-500 hover:text-white transition">Agregar
                    al Carro</a>
            </div>

            <div class="bg-white shadow rounded overflow-hidden group">
                <div class="relative">
                    <img src="{{ asset('images/products/img-5.png') }}" alt="product 1" class="w-full">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-40 flex items-center
                justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                        <a href="#"
                            class="text-white text-lg w-8 h-8 rounded-full bg-sky-600 flex items-center justify-center hover:bg-orange-500 transition"
                            title="Ver Producto">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                        <a href="#"
                            class="text-white text-lg w-8 h-8 rounded-full bg-sky-600 flex items-center justify-center hover:bg-orange-500 transition"
                            title="Agregar a Favoritos">
                            <i class="fa-solid fa-heart"></i>
                        </a>
                    </div>
                </div>
                <div class="pt-4 pb-3 px-4">
                    <a href="#">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">EOS
                            6D Mark II Body</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-orange-500 font-semibold text-center">$45.00</p>

                    </div>
                    <div class="flex items-center">
                        <div class="flex gap-1 text-sm text-yellow-400">
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                        </div>

                    </div>
                </div>
                <a href="#"
                    class="block w-full py-1 text-center text-white  border border-gray-300 rounded-b bg-sky-600 hover:bg-orange-500 hover:text-white transition">Agregar
                    al Carro</a>
            </div>

            <div class="bg-white shadow rounded overflow-hidden group">
                <div class="relative">
                    <img src="{{ asset('images/products/img-17.png') }}" alt="product 1" class="w-full">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-40 flex items-center
                justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                        <a href="#"
                            class="text-white text-lg w-8 h-8 rounded-full bg-sky-600 flex items-center justify-center hover:bg-orange-500 transition"
                            title="Ver Producto">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                        <a href="#"
                            class="text-white text-lg w-8 h-8 rounded-full bg-sky-600 flex items-center justify-center hover:bg-orange-500 transition"
                            title="Agregar a Favoritos">
                            <i class="fa-solid fa-heart"></i>
                        </a>
                    </div>
                </div>
                <div class="pt-4 pb-3 px-4">
                    <a href="#">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">EOS
                            6D Mark II Body</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-orange-500 font-semibold text-center">$45.00</p>

                    </div>
                    <div class="flex items-center">
                        <div class="flex gap-1 text-sm text-yellow-400">
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                        </div>

                    </div>
                </div>
                <a href="#"
                    class="block w-full py-1 text-center text-white  border border-gray-300 rounded-b bg-sky-600 hover:bg-orange-500 hover:text-white transition">Agregar
                    al Carro</a>
            </div>

        </div>
    </div>

    {{-- productos destacados --}}
    <div class="container mx-auto mt-10">
        <h2 class="text-2xl font-medium text-gray-800 uppercase mb-6 px-4">Productos Destacados</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 px-4">
            <div class="bg-white shadow rounded overflow-hidden group">
                <div class="relative">
                    <img src="{{ asset('images/products/img-1.png') }}" alt="product 1" class="w-full">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-40 flex items-center
                justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                        <a href="#"
                            class="text-white text-lg w-8 h-8 rounded-full bg-sky-600 flex items-center justify-center hover:bg-orange-500 transition"
                            title="Ver Producto">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                        <a href="#"
                            class="text-white text-lg w-8 h-8 rounded-full bg-sky-600 flex items-center justify-center hover:bg-orange-500 transition"
                            title="Agregar a Favoritos">
                            <i class="fa-solid fa-heart"></i>
                        </a>
                    </div>
                </div>
                <div class="pt-4 pb-3 px-4">
                    <a href="#">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">EOS
                            6D Mark II Body</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-orange-500 font-semibold text-center">$45.00</p>

                    </div>
                    <div class="flex items-center">
                        <div class="flex gap-1 text-sm text-yellow-400">
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                        </div>

                    </div>
                </div>
                <a href="#"
                    class="block w-full py-1 text-center text-white  border border-gray-300 rounded-b bg-sky-600 hover:bg-orange-500 hover:text-white transition">Agregar
                    al Carro</a>
            </div>

            <div class="bg-white shadow rounded overflow-hidden group">
                <div class="relative">
                    <img src="{{ asset('images/products/img-2.png') }}" alt="product 1" class="w-full">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-40 flex items-center
                justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                        <a href="#"
                            class="text-white text-lg w-8 h-8 rounded-full bg-sky-600 flex items-center justify-center hover:bg-orange-500 transition"
                            title="Ver Producto">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                        <a href="#"
                            class="text-white text-lg w-8 h-8 rounded-full bg-sky-600 flex items-center justify-center hover:bg-orange-500 transition"
                            title="Agregar a Favoritos">
                            <i class="fa-solid fa-heart"></i>
                        </a>
                    </div>
                </div>
                <div class="pt-4 pb-3 px-4">
                    <a href="#">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">EOS
                            6D Mark II Body</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-orange-500 font-semibold text-center">$45.00</p>

                    </div>
                    <div class="flex items-center">
                        <div class="flex gap-1 text-sm text-yellow-400">
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span class=" text-gray-400"><i class="fa-solid fa-star"></i></span>
                            <span class=" text-gray-400"><i class="fa-solid fa-star"></i></span>
                            <span class=" text-gray-400"><i class="fa-solid fa-star"></i></span>
                        </div>

                    </div>
                </div>
                <a href="#"
                    class="block w-full py-1 text-center text-white  border border-gray-300 rounded-b bg-sky-600 hover:bg-orange-500 hover:text-white transition">Agregar
                    al Carro</a>
            </div>

            <div class="bg-white shadow rounded overflow-hidden group">
                <div class="relative">
                    <img src="{{ asset('images/products/img-10.png') }}" alt="product 1" class="w-full">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-40 flex items-center
                justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                        <a href="#"
                            class="text-white text-lg w-8 h-8 rounded-full bg-sky-600 flex items-center justify-center hover:bg-orange-500 transition"
                            title="Ver Producto">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                        <a href="#"
                            class="text-white text-lg w-8 h-8 rounded-full bg-sky-600 flex items-center justify-center hover:bg-orange-500 transition"
                            title="Agregar a Favoritos">
                            <i class="fa-solid fa-heart"></i>
                        </a>
                    </div>
                </div>
                <div class="pt-4 pb-3 px-4">
                    <a href="#">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">EOS
                            6D Mark II Body</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-orange-500 font-semibold text-center">$45.00</p>

                    </div>
                    <div class="flex items-center">
                        <div class="flex gap-1 text-sm text-yellow-400">
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                        </div>

                    </div>
                </div>
                <a href="#"
                    class="block w-full py-1 text-center text-white  border border-gray-300 rounded-b bg-sky-600 hover:bg-orange-500 hover:text-white transition">Agregar
                    al Carro</a>
            </div>

            <div class="bg-white shadow rounded overflow-hidden group">
                <div class="relative">
                    <img src="{{ asset('images/products/img-11.png') }}" alt="product 1" class="w-full">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-40 flex items-center
                justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                        <a href="#"
                            class="text-white text-lg w-8 h-8 rounded-full bg-sky-600 flex items-center justify-center hover:bg-orange-500 transition"
                            title="Ver Producto">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                        <a href="#"
                            class="text-white text-lg w-8 h-8 rounded-full bg-sky-600 flex items-center justify-center hover:bg-orange-500 transition"
                            title="Agregar a Favoritos">
                            <i class="fa-solid fa-heart"></i>
                        </a>
                    </div>
                </div>
                <div class="pt-4 pb-3 px-4">
                    <a href="#">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">EOS
                            6D Mark II Body</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-orange-500 font-semibold text-center">$45.00</p>

                    </div>
                    <div class="flex items-center">
                        <div class="flex gap-1 text-sm text-yellow-400">
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                        </div>

                    </div>
                </div>
                <a href="#"
                    class="block w-full py-1 text-center text-white  border border-gray-300 rounded-b bg-sky-600 hover:bg-orange-500 hover:text-white transition">Agregar
                    al Carro</a>
            </div>
        </div>
    </div>

    <br><br><br><br>

    <footer class="h-32 bg-gray-900">

    </footer>












    @livewireScripts
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>

</html>
