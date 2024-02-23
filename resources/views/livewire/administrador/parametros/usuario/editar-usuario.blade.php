<div>
    @include('menu_admin')
    <!--contenido-->
    <div class="container mx-auto px-4">
        <div class="mt-10 mb-10">
            <h1 class="text-center text-xl font-bold  text-gray-700 dark:text-gray-200 uppercase">Formulario de Edición del Estado del Usuario
            </h1>
        </div>
        <div class="container mx-auto drak:gray-900 border-gray-200 border px-8 mt-10">

            <form wire:submit="editar" class="max-w-sm mx-auto mt-10 mb-10">
                <input type="hidden" wire:model="usuarioId">
                <div class="mb-5">
                    <select wire:model="estados_usuarios_id"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="1">Activo</option>
                    <option value="2">Inactivo</option>
                    <option value="3">Bloqueado</option>
                </select>
                <x-input-error for="nombre" />

                </div>


                <div class="flex justify-center">
                    <button type="submit" type="button"class="btn-editar w-full">Guardar</button>
                    <button wire:click="cancelar" type="button" class="btn-cancelar w-full">Cancelar</button>
                </div>
            </form>
        </div>

    </div>
</div>
div>
