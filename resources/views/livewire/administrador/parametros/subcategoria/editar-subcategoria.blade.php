<div>
    @include('menu_admin')
    <!--contenido-->
    <div class="container mx-auto px-4">
        <div class="mt-20 mb-10">
            <h1 class="text-center text-xl font-bold  text-gray-700 dark:text-gray-200">Formulario de subcategorias</h1>
        </div>
        <div class="container mx-auto dark:bg-gray-900 border-gray-200 border px-4 bg-white shadow-lg">
            <form wire:submit="editar" class="max-w-sm mx-auto mt-10 mb-10">
                <div class="mb-5">
                    <input type="hidden" wire:model="subcategariasId">
                    <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ingrese
                        Categoria</label>
                    <select wire:model="categorias_id" type="text" id="base-input"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                        @foreach ($categorias as $categoria )
                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>

                        @endforeach
                    </select>
                    <x-input-error for="nombre" />
                </div>
                <div class="mb-5">
                    <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Subcategoria</label>

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


