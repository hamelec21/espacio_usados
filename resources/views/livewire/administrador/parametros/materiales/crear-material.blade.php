<div>
    @include('navigation-menu')
    @livewire('menu.admin-sidebar')
    <div class="p-4 sm:ml-64">

        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
            @if (Session::has('error'))
            <div id="error-alert" class="flex items-center p-4 mb-4 text-sm text-yellow-800 border border-yellow-300 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300 dark:border-yellow-800" role="alert">
                <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="sr-only">Info</span>
                <div>
                  <span class="font-medium">{{ Session::get('error') }}.
                </div>
              </div>

            @endif
            <!--contenido-->
            <div class="container mx-auto px-4">
                <div class="mt-20 mb-10">
                    <h1 class="text-center text-xl font-bold  text-gray-700 dark:text-gray-200">Formulario Ingreso
                        Material</h1>
                </div>


                <div class="container mx-auto dark:bg-gray-900 border-gray-200 border px-4 bg-white shadow-lg">
                    <form wire:submit="save" class="max-w-sm mx-auto mt-10 mb-10">
                        <div class="mb-5">
                            <label for="base-input"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ingrese
                                Material</label>
                            <input wire:model="nombre" type="text" id="base-input"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <x-input-error for="nombre" />
                        </div>
                        <div class="flex justify-center">
                            <button type="submit" type="button"class="btn-agregar w-full">Guardar</button>
                            <button wire:click="cancelar" type="button" class="btn-cancelar w-full">Cancelar</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <script>
        setTimeout(function() {
            $('#error-alert').fadeOut('fast');
        }, 3000); // tiempo en milisegundos (3 segundos)
    </script>
</div>
