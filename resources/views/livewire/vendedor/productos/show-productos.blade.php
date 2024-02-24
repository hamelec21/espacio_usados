<div>

    @include('navigation-menu')
    @livewire('menu.vendedor-sidebar')
<div class="p-4 sm:ml-64">
<div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
 <!--contenido-->
 <div class="container mx-auto px-4 ">
    <div class="mt-5 mb-5 ">
        <h1 class="text-center text-xl font-bold  text-gray-700 dark:text-gray-200 uppercase">Mis Productos</h1>
    </div>

    <div class="container mb-10">
        <div class="shadow-md  border-gray-500 border">
            <div
                class="flex items-center justify-between flex-column md:flex-row flex-wrap space-y-4 md:space-y-0 py-4 bg-gray-50 dark:bg-gray-900 px-4">
                <div>
                    <!-- Filtro-->
                    <label class="dark:text-gray-200 text-gray-700 text-sm">Estado Producto</label>
                    <select wire:model.live="filtro_estado"
                        class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="">Todo</option>
                        @foreach ($estado_pros as $estado_pro)
                            <option value="{{ $estado_pro->id }}">{{ $estado_pro->nombre }}</option>
                        @endforeach
                    </select>

                </div>
                <label for="table-search" class="sr-only">Search</label>
                <div class="relative">
                    <div
                        class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input wire:model.live="search" type="text" id="table-search-users"
                        class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-500 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Buscar por Nombre">
                </div>
                <a href="{{ route('crear-producto') }}">
                    <button class="btn-agregar ">Crear Nuevo Producto</button>
                </a>
            </div>
        </div>
    </div>
</div>

{{-- card --}}
<div class="container mx-auto px-4 mb-10">
    @if ($productos->count())
        <div class="grid lg:grid-cols-4 gap-4">
            @foreach ($productos as $item)
                <div class="">
                    <div class="card bg-white shadow-sm border border-gray-500">
                        <div class="card-body">
                            <div class="flex justify-around mt-3">
                                <div>
                                    @if ($item->estado_publicaciones_id == '1')
                                        <span
                                            class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400"> {{ $item->estado_pos->nombre }}</span>
                                    @elseif($item->estado_publicaciones_id == '2')
                                        <span
                                            class="bg-yellow-100 text-yellow-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-yellow-300 border border-yellow-300"> {{ $item->estado_pos->nombre }}</span>
                                    @elseif($item->estado_publicaciones_id == '3')
                                        <span
                                            class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-red-400 border border-red-400"> {{ $item->estado_pos->nombre }}</span>
                                    @else
                                        <span class="text-gray-500">No Se Registra Estado</span>
                                    @endif

                                </div>

                                <div>
                                    @if ($item->estado_productos_id == '1')
                                        <span
                                            class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400">
                                            {{ $item->estado_producto->nombre }}</span>
                                    @elseif($item->estado_productos_id == '2')
                                        <span
                                            class="bg-yellow-100 text-yellow-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-yellow-300 border border-yellow-300">
                                            {{ $item->estado_producto->nombre }}</span>
                                    @elseif($item->estado_productos_id == '3')
                                        <span
                                            class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-green-500 border border-green-400">
                                            {{ $item->estado_producto->nombre }}</span>
                                    @else
                                        <span class="text-gray-500">No Se Registra Estado</span>
                                    @endif

                                </div>
                            </div>
                            <div class="flex flex-col items-center pb-4">
                                <div class='h-[64px] w-[64px]'
                                    style="background-image: url('{{ asset('storage/' . $item->foto1) }}'); background-size: cover; background-position: center;">
                                </div>
                                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">
                                    {{ $item->nombre }}</h5>
                                <span class="text-sm text-gray-500 dark:text-gray-400 font-medium">Frontend
                                    Designer</span>
                                <p class="font-normal mt-4 text-gray-500 text-sm dark:text-gray-400 text-center">
                                    {{ $item->descripcion }}
                                </p>
                                <p class="font-normal mt-4 text-gray-500 text-sm dark:text-gray-400 text-center">
                                    ${{ number_format($item->precio, 0, ',', '.') }}.-
                                </p>
                                <div class="flex mt-4 space-x-3 lg:mt-6">

                                    <a href="{{ route('editar-producto', ['id' => $item->id]) }}"
                                        class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-green-500 rounded hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-green-500 dark:hover:bg-green-600">Editar
                                    </a>

                                    <a onclick="confirm('¿Estas Seguro de Eliminar El Producto?')||event.stopImmediatePropagation()"
                                        wire:click="destroy({{ $item->id }})"><button
                                            class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-gray-200 bg-red-700 rounded border border-gray-300 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-red-600 dark:text-white dark:border-gray-200 dark:hover:bg-red-700 dark:hover:border-red-700">Eliminar</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach

        </div>
    @else
        @include('components.alerta-search-not')
    @endif
    <div class="bg-gray-200 ">
        @if ($productos->hasPages())
            <div class="px-6 py-3 ">
                {{ $productos->links() }}
            </div>
        @endif
    </div>
</div>

</div>
   </div>




</div>

