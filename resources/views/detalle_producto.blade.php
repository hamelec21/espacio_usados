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
    <link rel="stylesheet" href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css" />
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

    {{-- detalle de producto --}}

    <div class="container mx-auto mt-10 mb-10">
        <div class="grid  grid-col-1 lg:grid-cols-2 gap-4">
            <div class="px-4">
                <div class="grid gap-4">
                    <div class="border-gray-300 border shadow-lg">
                        <img id="mainImage" class="h-auto max-w-full rounded-lg" src="{{ asset('images/products/img-1.png') }}" alt="">
                    </div>
                    <div class="grid grid-cols-5 gap-4">
                        <div class="border-gray-300 border shadow-lg">
                            <img class="h-auto max-w-full rounded-lg thumbnail" src="{{ asset('images/products/img-3.png') }}" alt="">
                        </div>
                        <div class="border-gray-300 border shadow-lg">
                            <img class="h-auto max-w-full rounded-lg thumbnail" src="{{ asset('images/products/img-5.png') }}" alt="">
                        </div>
                        <div class="border-gray-300 border shadow-lg">
                            <img class="h-auto max-w-full rounded-lg thumbnail" src="{{ asset('images/products/img-7.png') }}" alt="">
                        </div>
                        <div class="border-gray-300 border shadow-lg" >
                            <img class="h-auto max-w-full rounded-lg thumbnail" src="{{ asset('images/products/img-9.png') }}" alt="">
                        </div>
                        <div class="border-gray-300 border shadow-lg">
                            <img class="h-auto max-w-full rounded-lg thumbnail" src="{{ asset('images/products/img-11.png') }}" alt="">
                        </div>
                    </div>
                </div>


            </div>
                <div class="px-4">

                    <h2 class="text-3xl font-medium uppercase mb-2">Mochila</h2>
                    <div class="flex items-center mb-4">
                        <div class="flex gap-1 text-sm text-yellow-400">
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span class=" text-gray-400"><i class="fa-solid fa-star"></i></span>
                            <span class=" text-gray-400"><i class="fa-solid fa-star"></i></span>
                        </div>

                    </div>
                    <div class="space-y-2">
                        <p class="text-gray-800 font-semibold space-x-2">
                            <span>Disponibilidad: </span>
                            <span class="text-green-600">Consulta al Vendedor</span>
                        </p>
                        <p class="space-x-2">
                            <span class="text-gray-800 font-semibold">Estado de Producto:</span>
                            <span class="bg-green-600 text-white rounded-md px-2 py-1">Usado</span>
                        </p>
                        <p class="space-x-2">
                            <span class="text-gray-800 font-semibold">Marca: </span>
                            <span class="text-gray-600">Apex</span>
                        </p>
                        <p class="space-x-2">
                            <span class="text-gray-800 font-semibold">Categoría: </span>
                            <span class="text-gray-600">Nombre Categoría</span>
                        </p>
                        <p class="space-x-2">
                            <span class="text-gray-800 font-semibold">SKU: </span>
                            <span class="text-gray-600">BE45VGRT</span>
                        </p>
                    </div>
                    <div class="flex items-baseline mb-1 space-x-2 font-roboto mt-4">
                        <p class="text-xl text-primary font-semibold">$45.000</p>
                    </div>

                    <p class="mt-4 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos eius eum
                        reprehenderit dolore vel mollitia optio consequatur hic asperiores inventore suscipit, velit
                        consequuntur, voluptate doloremque iure necessitatibus adipisci magnam porro.</p>
                    

                    <div class="mt-6 flex gap-3 border-b border-gray-200 pb-5 pt-5">
                        <a href="#"
                            class="bg-sky-600 border border-primary text-white px-4 py-2 font-medium rounded uppercase flex items-center gap-2  hover:bg-orange-500 transition">
                            <i class="fa-solid fa-bag-shopping"></i> Agregar al Carro
                        </a>
                        <a href="#"
                            class="border border-gray-300 text-gray-600 px-8 py-2 font-medium rounded uppercase flex items-center gap-2 hover:bg-orange-500 hover:text-white transition">
                            <i class="fa-solid fa-heart text-red-600"></i>Favorito
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @livewireScripts
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

        <script>
            const thumbnails = document.querySelectorAll('.thumbnail');
            thumbnails.forEach(thumbnail => {
                thumbnail.addEventListener('click', function() {
                    const mainImage = document.getElementById('mainImage');
                    mainImage.src = thumbnail.src;
                });
            });
        </script>

</body>

</html>
