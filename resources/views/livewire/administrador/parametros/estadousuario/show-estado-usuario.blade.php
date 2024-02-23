<div>
    @include('menu_admin')
    <!--contenido-->
    <div class="container mx-auto px-4">
        <div class="mt-20 mb-10">
            <h1 class="text-center text-xl font-bold  text-gray-700 dark:text-gray-200">Estado de Usuarios</h1>
        </div>
        <div class="overflow-x-auto">
            <div class="flex items-center justify-center  font-sans overflow-hidden">
                <div class="w-full lg:w-5/6">
                    {{-- seccion filtro o busqueda --}}
                    <div class="container">
                        <div class="shadow-md sm:rounded-lg border-gray-200 border">
                            <div
                                class="flex items-center justify-between flex-column md:flex-row flex-wrap space-y-4 md:space-y-0 py-4 bg-white dark:bg-gray-900 px-4">
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
                                        placeholder="Buscar Estado usuario">
                                </div>
                                <a href="{{ route('crear-estado-usuario') }}">
                                    <button class="btn-agregar ">Crear Nuevo Estado</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    {{-- fin seccion filtro o busqueda --}}
                    <div class="bg-white  shadow-md rounded my-6">
                        @if ($usuarios->count())
                        <table class="min-w-max w-full table-auto">
                            <thead>
                                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                    <th class="py-3 px-6 text-left">Id</th>
                                    <th class="py-3 px-6 text-left">Estado</th>
                                    <th class="py-3 px-6 text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 text-sm font-light">
                                @foreach ($usuarios as $usuario)
                                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                    <td class="py-3 px-6 text-left whitespace-nowrap">
                                        <div class="flex items-center">
                                            <span>{{ $usuario->id }}</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-left">
                                        <span>{{ $usuario->nombre }}</span>
                                    </td>

                                    <td class="py-3 px-6 text-center">
                                        <div class="flex item-center justify-center">
                                            <div class="flex items-center justify-around py-[4px]">
                                                <a
                                                href="{{ route('editar-estado-usuario', ['id' => $usuario->id]) }}">
                                                <button class="btn-editar mb-1">Editar</button>
                                            </div>
                                            <div class="mt-1 px-3">
                                                <a onclick="confirm('¿Estas Seguro de Eliminar?')||event.stopImmediatePropagation()"
                                                    wire:click="destroy({{ $usuario->id }})"><button
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
                        @if ($usuarios->hasPages())
                            <div class="px-6 py-3 ">
                                {{ $usuarios->links() }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>



