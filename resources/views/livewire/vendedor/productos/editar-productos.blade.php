<div>
    @include('navigation-menu')
    @livewire('menu.vendedor-sidebar')
<div class="p-4 sm:ml-64">
<div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
    <div class="container mx-auto px-4">
        <div class="mt-5 mb-5">
            <h1 class="text-center text-xl font-bold  text-gray-700 dark:text-gray-200 uppercase">Crear Producto</h1>
        </div>
    </div>

    <div class="container mx-auto px-4 mb-10">
        <div class="container mx-auto dark:bg-gray-900 border-gray-200 border px-4 bg-white shadow-lg">

            <form wire:submit="editar">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mt-5 justify-between">
                    <input type="hidden" wire:model="prodcutoId">
                    <div class="col-span-2">
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre
                            Producto</label>
                        <input wire:model="nombre" type="text" id="nombre"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <x-input-error for="nombre" />

                    </div>

                    <div class="col-span-2">
                        <label for="message"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripción</label>
                        <textarea wire:model="descripcion" id="descripcion" rows="4"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" oninput="limitAndValidateTextarea(this, 160)"></textarea>
                        <p id="charCount" class=" dark:text-white font-semibold">0 / 160 Caracteres max.</p>
                        <x-input-error for="descripcion" />

                    </div>

                    <div class="col-span-2 lg:col-span-1">
                        <label for="message"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre
                            Precio</label>
                        <input wire:model="precio" type="number" id="inputPesos" placeholder="Ingrese el Ej:12590"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <x-input-error for="precio" />
                    </div>

                    <div class="col-span-2 lg:col-span-1">
                        <label for="message"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Categorias</label>
                        <select wire:model="categorias_id" type="text" id="categorias_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="">Seleccione Categoria</option>
                            @foreach ($categorias as $categoria)
                                <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                            @endforeach
                        </select>
                        <x-input-error for="categorias_id" />
                    </div>

                    <div class="col-span-2 lg:col-span-1">
                        <label for="marcas"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seleccione
                            Marca</label>
                        <select wire:model.live="marcas_id" id="marcas"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected="">_ _ _ _ _ _ _</option>
                            @foreach ($marcas as $marca)
                                <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>
                            @endforeach
                        </select>
                        <x-input-error for="marcas_id" />

                    </div>
                    <div class="col-span-2 lg:col-span-1">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seleccione
                            Modelo</label>
                        <select wire:model="modelos_id" id="modelos_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected="">_ _ _ _ _ _ _</option>
                            @foreach ($modelos as $modelo)
                                <option value="{{ $modelo->id }}">{{ $modelo->nombre }}</option>
                            @endforeach
                        </select>
                        <x-input-error for="modelos_id" />
                    </div>

                    <div class="col-span-2 lg:col-span-1">
                        <label for="message"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seleccione Tipo
                            Entrega</label>
                        <select wire:model="tipo_entregas_id" type="text" id="tipo_entrega_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="">--------</option>
                            @foreach ($entregas as $entrega)
                                <option value="{{ $entrega->id }}">{{ $entrega->nombre }}</option>
                            @endforeach
                        </select>
                        <x-input-error for="tipo_entregas_id" />
                    </div>
                    <div class="col-span-2 lg:col-span-1">
                        <label for="message"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seleccione Estado
                            Producto</label>
                        <select wire:model="estado_productos_id" type="text" id="estado_producto"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="">--------</option>
                            @foreach ($estadopros as $estado)
                                <option value="{{ $estado->id }}">{{ $estado->nombre }}</option>
                            @endforeach
                        </select>
                        <x-input-error for="estado_productos_id" />
                    </div>
                    {{-- SECCION DE IMAGNES  --}}

                    <div class="col-span-2">

                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            for="file_input">Fotografia Portada</label>
                        <input wire:model="foto1"
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            id="file_input" type="file">
                            <x-input-error for="foto1" />
                    </div>
                    <div class="col-span-2">

                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            for="file_input">Fotografía 1</label>
                        <input wire:model="foto2"
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            id="file_input" type="file">
                            <x-input-error for="foto2" />
                    </div>
                    <div class="col-span-2">

                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            for="file_input">Fotografía 2</label>
                        <input wire:model="foto3"
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            id="file_input" type="file">
                            <x-input-error for="foto3" />
                    </div>
                    <div class="col-span-2">

                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            for="file_input">Fotografía 3</label>
                        <input wire:model="foto4"
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            id="file_input" type="file">
                            <x-input-error for="foto4" />
                    </div>
                    <div class="col-span-2">

                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            for="file_input">Fotografía 4</label>
                        <input wire:model="foto5"
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            id="file_input" type="file">
                            <x-input-error for="foto5" />
                    </div>

                </div>
                <div class="flex justify-center mt-10 mb-5">
                    <button type="submit" type="button"class="btn-agregar w-full">Guardar</button>
                    <button wire:click="cancelar" type="button" class="btn-cancelar w-full">Cancelar</button>
                </div>
            </form>
        </div>

    </div>

</div>
   </div>


    <script src="{{ asset('validaciones/validacion_textarea.js') }}"></script>
</div>

