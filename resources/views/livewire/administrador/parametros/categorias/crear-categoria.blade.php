<div>

    @include('navigation-menu')
    @livewire('menu.admin-sidebar')
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
            <div class="container mx-auto px-4">
                <div class="mt-20 mb-10">
                    <h1 class="text-center text-xl font-bold  text-gray-700 dark:text-gray-200">Formulario de Categorias
                    </h1>
                </div>
                <div class="container mx-auto  border-gray-200 border px-4  bg-white shadow-lg dark:bg-gray-900">
                    <form wire:submit="save" class="max-w-sm mx-auto mt-10 mb-10">
                        <div class="mb-5">
                            <label for="base-input"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ingrese
                                Categoria</label>
                            <input wire:model="nombre" type="text" id="base-input"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <x-input-error for="nombre" />
                        </div>
                        <div class="col-span-2">

                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                for="file_input">Imagen de Categoria</label>
                            <input wire:model="foto"
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                id="file_input" type="file">
                            <x-input-error for="foto" />
                        </div>
                        <div class="flex justify-center mt-5">
                            <button type="submit" type="button"class="btn-agregar w-full">Guardar</button>
                            <button wire:click="cancelar" type="button" class="btn-cancelar w-full">Cancelar</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>



</div>
