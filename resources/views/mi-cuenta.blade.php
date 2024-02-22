<x-app-layout>
    @include('menu_principal')
    {{-- encabezado --}}
    <div class="px-4">
        <div
            class="container mx-auto rounded-lg bg-gray-100 py-2 flex justify-center items-center mt-10 border border-gray-200 shadow-lg">
            <div>
                <h1 class="text-gray-800 text-lg font-bold flex justify-center items-center">Bienvenido
                    {{ auth()->user()->name }}</h1>
            </div>
        </div>
    </div>

    {{-- info --}}
    <div class="container mx-auto px-4 mt-10">
        <div class="grid grid-col-1 md:grid-cols-2 lg:grid-cols-3  gap-4">
            <div class="border border-gray-200 shadow-lg">
                <div class="flex justify-center p-4">
                    <a href="#">
                        <svg class="w-14 h-14 text-gray-500 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.3L19 7H7.3" />
                        </svg>
                    </a>
                </div>
                <div class="text-center mb-2 font-semibold">Mis Compras</div>
            </div>

            <div class="border border-gray-200 shadow-lg">
                <div class="flex justify-center p-4">
                    <a href="{{ route('mis-ventas') }}">
                        <svg class="w-14 h-14 text-gray-500 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8H5m12 0c.6 0 1 .4 1 1v2.6M17 8l-4-4M5 8a1 1 0 0 0-1 1v10c0 .6.4 1 1 1h12c.6 0 1-.4 1-1v-2.6M5 8l4-4 4 4m6 4h-4a2 2 0 1 0 0 4h4c.6 0 1-.4 1-1v-2c0-.6-.4-1-1-1Z" />
                        </svg>
                    </a>

                </div>
                <div class="text-center mb-2 font-semibold">Mis Ventas</div>
            </div>

            <div class="border border-gray-200 shadow-lg">
                <div class="flex justify-center p-4">
                    <a href="#">
                        <svg class="w-14 h-14 text-gray-500 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
                <div class="text-center mb-2 font-semibold">Mi Perfil</div>
            </div>

        </div>

    </div>














</x-app-layout>
