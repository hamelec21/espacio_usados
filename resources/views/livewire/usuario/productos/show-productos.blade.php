<div>
    @include('menu_admin')
    <!--contenido-->
    <div class="container mx-auto px-4">
        <div class="mt-10 mb-10">
            <h1 class="text-center text-xl font-bold  text-gray-700 dark:text-gray-200 uppercase">Mis Productos</h1>
        </div>
        <div class="overflow-x-auto">
            <div class="flex items-center justify-center  font-sans overflow-hidden">
                <div class="w-full lg:w-5/6">
                    {{-- seccion filtro o busqueda --}}
                    <div class="container">
                        <div class="shadow-md sm:rounded-lg border-gray-200 border">
                            <div
                                class="flex items-center justify-between flex-column md:flex-row flex-wrap space-y-4 md:space-y-0 py-4 bg-white dark:bg-gray-900 px-4">
                                <div>
                                    <!-- Filtro-->
                                    <label class="dark:text-gray-200 text-gray-700 text-sm">Estado Producto</label>
                                    <select wire:model.live="filtro_estado"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="">Todo</option>
                                        @foreach ($estado_pros as $estado_pro )
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
                                        class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Buscar por Nombre">
                                </div>
                                <a href="{{ route('crear-producto') }}">
                                    <button class="btn-agregar ">Crear Nuevo Producto</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    {{-- fin seccion filtro o busqueda --}}
                    <div class="bg-white  shadow-md rounded my-6">
                        @if ($productos->count())
                            <table class="min-w-max w-full table-auto">
                                <thead>
                                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                        <th class="py-3 px-6 text-left">sku</th>
                                        <th class="py-3 px-6 text-left">Imagen</th>
                                        <th class="py-3 px-6 text-left">Nombre</th>
                                        <th class="py-3 px-6 text-center">Precio</th>
                                        <th class="py-3 px-6 text-center">Estado Producto</th>
                                        <th class="py-3 px-6 text-center">Estado Publicación</th>
                                        <th class="py-3 px-6 text-center">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-600 text-sm font-light">
                                    @foreach ($productos as $producto)
                                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <span>{{ $producto->sku }}</span>
                                                </div>

                                            </td>

                                            <td class="py-1 px-6 text-left">
                                                <div class='h-[64px] w-[64px]' style="background-image: url('{{ asset('storage/' . $producto->foto1) }}'); background-size: cover; background-position: center;">
                                                </div>
                                            </td>
                                            <td class="py-1 px-6 text-left font-bold">
                                                <span>{{ $producto->nombre}}</span>
                                            </td>

                                            <td class="py-1 px-6 text-center font-bold">

                                                <span>${{ number_format($producto->precio, 0, ',', '.') }}.-</span>
                                            </td>
                                            <td class="py-1 px-6 text-center">

                                                <div>
                                                    @if ($producto->estado_productos_id == '1')
                                                        <span
                                                            class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400"> {{ $producto->estado_producto->nombre }}</span>
                                                    @elseif($producto->estado_productos_id == '2')
                                                        <span
                                                            class="bg-yellow-100 text-yellow-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-yellow-300 border border-yellow-300"> {{ $producto->estado_producto->nombre }}</span>
                                                    @elseif($producto->estado_productos_id == '3')
                                                        <span
                                                            class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-green-500 border border-green-400"> {{ $producto->estado_producto->nombre }}</span>
                                                    @else
                                                        <span class="text-gray-500">No Se Registra Estado</span>
                                                    @endif

                                                </div>
                                            </td>


                                            <td class="py-1 px-6 text-center">
                                                <div>
                                                    @if ($producto->estado_publicaciones_id == '1')
                                                        <span
                                                            class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400"> {{ $producto->estado_pos->nombre }}</span>
                                                    @elseif($producto->estado_publicaciones_id == '2')
                                                        <span
                                                            class="bg-yellow-100 text-yellow-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-yellow-300 border border-yellow-300"> {{ $producto->estado_pos->nombre }}</span>
                                                    @elseif($producto->estado_publicaciones_id == '3')
                                                        <span
                                                            class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-red-400 border border-red-400"> {{ $producto->estado_pos->nombre }}</span>
                                                    @else
                                                        <span class="text-gray-500">No Se Registra Estado</span>
                                                    @endif

                                                </div>
                                            </td>

                                            <td class="py-1 px-6 text-center">

                                                <div class="flex item-center justify-center">
                                                    <div class="flex items-center justify-around py-[4px]">
                                                        <a href="{{ route('editar-producto', ['id' => $producto->id]) }}">
                                                            <button class="btn-editar mb-1">Editar</button>
                                                    </div>
                                                    <div class="mt-1 px-1">
                                                        <a onclick="confirm('¿Estas Seguro de Eliminar El Usuario?')||event.stopImmediatePropagation()"
                                                            wire:click="destroy({{ $producto->id }})"><button
                                                                class="btn btn-eliminar">Eliminar</button> </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            @include('components.alerta-search-not')
                        @endif
                        <div class="bg-gray-200">
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
    </div>
>
