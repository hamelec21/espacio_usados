<x-guest-layout>
    {{-- menu Principal --}}
    @include('menu_principal')

    {{-- banner --}}
    <section class="bg-gray-200">
        <div class="w-full">
            <img src="{{ asset('images/ecommerce/banner.jpg') }}">
        </div>
    </section>
    {{-- Categorias --}}

   @livewire('frontend.categorias.show-categoria')

   @livewire('frontend.productos.catalogo-productos')

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

</x-guest-layout>
