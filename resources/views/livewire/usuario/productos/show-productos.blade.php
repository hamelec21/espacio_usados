<div>
@include('sidebar-usuario')
<div class="ml-auto mb-6 lg:w-[75%] xl:w-[80] 2xl:w-[85%] mt-16">
    <div class="mt-20 mb-10">
        <h1 class="text-center text-xl font-bold  text-gray-700 dark:text-gray-200">Permisos de Usuarios</h1>
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
                                <button id="dropdownActionButton" data-dropdown-toggle="dropdownAction"
                                    class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                                    type="button">
                                    <span class="sr-only">Action button</span>
                                    Action
                                    <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg>
                                </button>
                                <!-- Dropdown menu filtro-->
                                <div id="dropdownAction"
                                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="dropdownActionButton">
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Reward</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Promote</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Activate
                                                account</a>
                                        </li>
                                    </ul>
                                    <div class="py-1">
                                        <a href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete
                                            User</a>
                                    </div>
                                </div>

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
                                    placeholder="Buscar producto">
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
                                <th class="py-3 px-6 text-left">Id</th>
                                <th class="py-3 px-6 text-left">Nombre Permiso</th>
                                <th class="py-3 px-6 text-center">Guard</th>
                                <th class="py-3 px-6 text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            @foreach ($productos as $producto )
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">
                                        <span>{{ $producto->id }}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <span>{{ $producto->nombre }}</span>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span>{{ $producto->guard_name }}</span>
                                </td>

                                <td class="py-3 px-6 text-center">
                                    <div class="flex item-center justify-center">
                                        <div class="flex items-center justify-around py-[4px]">
                                            <a
                                            href="{{ route('editar-permiso', ['id' => $producto->id]) }}">
                                            <button class="btn-editar mb-1">Editar</button>
                                        </div>
                                        <div class="mt-1 px-3">
                                            <a onclick="confirm('¿Estas Seguro de Eliminar El Rol?')||event.stopImmediatePropagation()"
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
