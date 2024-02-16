<div>
    {{-- filtros  --}}
    <section class="px-4 mt-10">
        <div class="container mx-auto  mt-5 mb-5 rounded-md border-gray-300 border">
            <div class="bg-orange-500 w-full rounded-t h-10 mb-2 text-white flex justify-start items-center pl-4">Buscas
                Algo?</div>
            <div class="lg:flex justify-between px-4 ">
                <div class="px-4 w-11/12">
                    <input wire:model.live="search" type="text" name="buscar"
                        class="mt-5 mb-5 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm px-4 w-full"
                        placeholder="Ingresa La busquea Ej:Zapatos">
                </div>

                <div class="px-4">
                    <select wire:model.live="filtro_region"
                        class="rounded-md mt-5 mb-5 border-gray-300 w-full text-gray-700 ">
                        <option value="">Región</option>
                        @foreach ($regiones as $region)
                            <option value="{{ $region->id }}">{{ $region->nombre }}</option>
                        @endforeach

                    </select>
                </div>

                <div class="px-4">
                    <select wire:model.live="filtro_comuna"
                        class=" rounded-md mt-5 mb-5 border-gray-300 w-full  text-gray-700 ">
                        <option value="">Comuna</option>
                        @foreach ($comunas as $comuna)
                            <option value="{{ $comuna->id }}">{{ $comuna->nombre }}</option>
                        @endforeach


                    </select>
                </div>
            </div>
        </div>

    </section>

    {{-- catalogo productos --}}

    <div class="container mx-auto">
        <h2 class="text-2xl font-medium text-gray-800 uppercase mb-6 px-4">Catalogo de Productos</h2>
        @if ($productos->count())
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 px-4">
                @foreach ($productos as $producto)
                    <div class="bg-white shadow rounded overflow-hidden group">
                        <div class="relative">
                            <img src="{{ asset('storage/' . $producto->foto1) }}" alt="{{ $producto->foto1 }}"
                                class="w-full">
                            <div
                                class="absolute inset-0 bg-black bg-opacity-40 flex items-center
                justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                                <a href="{{ route('detalle-producto', ['id' => $producto->id]) }}"
                                    class="text-white text-lg w-8 h-8 rounded-full bg-sky-600 flex items-center justify-center hover:bg-orange-500 transition"
                                    title="Ver Producto">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                                {{--
                                    <a href="/favorito"
                                    class="text-white text-lg w-8 h-8 rounded-full bg-sky-600 flex items-center justify-center hover:bg-orange-500 transition"
                                    title="Agregar a Favoritos">
                                    <i class="fa-solid fa-heart"></i>
                                </a>
                                     --}}

                            </div>
                        </div>
                        <div class="pt-4 pb-3 px-4">
                            <a href="{{ route('detalle-producto', ['id' => $producto->id]) }}">
                                <h4
                                    class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                                    {{ $producto->nombre }}</h4>
                            </a>
                            <div class="flex items-baseline mb-1 space-x-2">
                                <p class="text-xl text-orange-500 font-semibold text-center">
                                    ${{ number_format($producto->precio, 0, ',', '.') }}.- </p>

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
                            wire:click.prevent="store('{{ $producto->id }}','{{ $producto->nombre }}','{{ $producto->cantidad }}','{{ $producto->precio }}')"
                            class="block w-full py-1 text-center text-white border border-gray-300 rounded-b bg-sky-600 hover:bg-orange-500 hover:text-white transition">
                            Agregar al Carro
                        </a>


                    </div>
                @endforeach


            </div>
        @else
            @include('components.alerta-search-not')
        @endif
        <div class="bg-orange-200 mt-10 ">
            @if ($productos->hasPages())
                <div class="px-6 py-3 ">
                    {{ $productos->links() }}
                </div>
            @endif
        </div>
    </div>




</div>
