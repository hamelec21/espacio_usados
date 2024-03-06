<div>
    @include('menu_principal')
    <div class="container mx-auto mt-10 mb-10">
        <div class="grid  grid-col-1 lg:grid-cols-2 gap-4">
            <div class="px-4">
                <div class="grid gap-4">
                    <div class="border-gray-300 border shadow-lg">
                        <img id="mainImage" class="h-auto max-w-full rounded-lg"
                            src="{{ Storage::url($producto->foto1) }}" alt="">
                    </div>
                    <div class="grid grid-cols-5 gap-4">
                        <div class="border-gray-300 border shadow-lg">
                            <img class="h-auto max-w-full rounded-lg thumbnail"
                                src="{{ Storage::url($producto->foto1) }}" alt="">
                        </div>
                        <div class="border-gray-300 border shadow-lg">
                            <img class="h-auto max-w-full rounded-lg thumbnail"
                                src="{{ Storage::url($producto->foto2) }}" alt="">
                        </div>
                        <div class="border-gray-300 border shadow-lg">
                            <img class="h-auto max-w-full rounded-lg thumbnail"
                                src="{{ Storage::url($producto->foto3) }}" alt="">
                        </div>
                        <div class="border-gray-300 border shadow-lg">
                            <img class="h-auto max-w-full rounded-lg thumbnail"
                                src="{{ Storage::url($producto->foto4) }}" alt="">
                        </div>
                        <div class="border-gray-300 border shadow-lg">
                            <img class="h-auto max-w-full rounded-lg thumbnail"
                            src="{{ Storage::url($producto->foto5) }}" alt="">
                        </div>
                    </div>
                </div>


            </div>
            <div class="px-4">
                <h2 class="text-3xl font-medium uppercase mb-2">{{ $this->producto->nombre }}</h2>
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

                        @if ($this->producto->estado_productos_id == '1')
                            <span
                                class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400">
                                Nuevo</span>
                        @elseif($this->producto->estado_productos_id == '2')
                            <span
                                class="bg-yellow-100 text-yellow-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-yellow-300 border border-yellow-300">
                                Semi-Nuevo</span>
                        @elseif($this->producto->estado_productos_id == '3')
                            <span
                                class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-green-500 border border-green-400">
                                Usado</span>
                        @else
                            <span class="text-gray-500">No Se Registra Estado</span>
                        @endif
                    </p>
                    <p class="space-x-2">
                        <span class="text-gray-800 font-semibold">Marca: </span>
                        <span class="text-gray-600">{{ $this->marca->nombre }}</span>
                    </p>
                    <p class="space-x-2">
                        <span class="text-gray-800 font-semibold">Categoría: </span>
                        <span class="text-gray-600">{{ $this->categoria->nombre }}</span>
                    </p>
                    <p class="space-x-2">
                        <span class="text-gray-800 font-semibold">SKU: </span>
                        <span class="text-gray-600">{{ $this->producto->sku }}</span>
                    </p>
                </div>
                <div class="flex items-baseline mb-1 space-x-2 font-roboto mt-4">
                    <p class="text-xl text-primary font-semibold">
                        ${{ number_format($this->producto->precio, 0, ',', '.') }}.-</p>
                </div>

                <p class="mt-4 text-gray-600">{{ $this->producto->descripcion }}</p>


                <div class="mt-6 flex gap-3 border-b border-gray-200 pb-5 pt-5">
                    <a href="#"wire:click.prevent="store('{{ $producto->id }}','{{ $producto->nombre }}','{{ $producto->cantidad }}','{{ $producto->precio }}')"
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

</div>

