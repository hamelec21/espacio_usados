<div>
    @include('navigation-menu')
    @livewire('menu.vendedor-sidebar')
    <div class="p-4 sm:ml-64">
        <div class="border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
            <div class="container mx-auto px-4">
                <div class="mt-5 mb-5">
                    <h1 class="text-center text-xl font-bold  text-gray-700 dark:text-gray-200 uppercase">Editar Producto
                    </h1>
                </div>
            </div>

            <div class="container mx-auto px-4 mb-10">
                <div class="container mx-auto dark:bg-gray-900 border-gray-200 border px-4 bg-white shadow-lg">

                    <form wire:submit="save" enctype="multipart/form-data">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mt-5 justify-between">
                            <input type="hidden" wire:model="productoId">
                            <div class="col-span-2 lg:col-span-1">
                                <label for="message"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Estado Del
                                    Producto</label>
                                <select wire:model="estado_productos_id" type="text" id="estado_producto"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="">Seleccione</option>
                                    @foreach ($estadopros as $estado)
                                        <option value="{{ $estado->id }}">{{ $estado->nombre }}</option>
                                    @endforeach
                                </select>
                                <x-input-error for="estado_productos_id" />
                            </div>
                            <div class="col-span-2 lg:col-span-1">
                                <label for="message"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre
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
                            <div class="col-span-1 lg:col-span-1">
                                <label for="message"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Stock
                                </label>
                                <input wire:model="cantidad" type="number" id="inputPesos"
                                    placeholder="Ingrese el Ej:10"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    min="1">
                                <x-input-error for="cantidad" />
                            </div>


                            <div class="col-span-1 lg:col-span-1">
                                <label for="message"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Precio</label>
                                <input wire:model="precio" type="number" id="inputPesos"
                                    placeholder="Ingrese el Ej:12590"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <x-input-error for="precio" />
                            </div>



                            <div class="col-span-2 lg:col-span-1">
                                <label for="message"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Categorias</label>
                                <select wire:model.live="categorias_id" type="text" id="categorias_id"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="">Seleccione Categoria</option>
                                    @foreach ($categorias as $categoria)
                                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                                    @endforeach
                                </select>
                                <x-input-error for="categorias_id" />
                            </div>

                            <div class="col-span-2 sm:col-span-1">
                                <label for="category"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Subcategoria</label>
                                <select wire:model="subcategorias_id" id="category"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">

                                    @if ($subcategorias->count() == 0)
                                        <option selected="">Seleccione una Categoria Antes</option>
                                    @endif
                                    @foreach ($subcategorias as $sub)
                                        <option value="{{ $sub->id }}">{{ $sub->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-span-2 lg:col-span-1">
                                <label
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Marcas</label>
                                <select wire:model="marcas_id" id="marca-list"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    @foreach ($marcas as $marca)
                                        <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>
                                    @endforeach
                                </select>

                            </div>

                            {{-- tallas --}}
                            <div class="col-span-2 lg:col-span-1">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seleccione
                                    Talla</label>
                                <select wire:model="tallas_id" id="tallas_id"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected="">_ _ _ _ _ _ _</option>
                                    @foreach ($tallas as $talla)
                                        <option value="{{ $talla->id }}">{{ $talla->nombre }}</option>
                                    @endforeach
                                </select>
                                <x-input-error for="tallas_id" />
                            </div>

                            <div class="col-span-2 lg:col-span-1">
                                <label for="message"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Tiempo de uso</label>
                                <select wire:model="tiempouso_id" type="text" id="tiempouso_id"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="">Seleccione</option>
                                    @foreach ($tiempos as $uso)
                                        <option value="{{ $uso->id }}">{{ $uso->nombre }}</option>
                                    @endforeach
                                </select>
                                <x-input-error for="" />
                            </div>


                            <div class="col-span-2 lg:col-span-1">
                                <label
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Material</label>
                                <select wire:model="material_id" id="marca-list"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    @foreach ($materiales as $material)
                                        <option value="{{ $material->id }}">{{ $material->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-span-1 lg:col-span-2">
                                {{-- medidas --}}
                                <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">

                                    <div class="col-span-1 lg:col-span-1">
                                        <label for="message"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alto</label>
                                        <input wire:model="alto" type="number" id="alto"placeholder="cm."
                                            min="0"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <x-input-error for="nombre" />

                                    </div>

                                    <div class="col-span-1">
                                        <label for="message"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ancho</label>
                                        <input wire:model="ancho" type="number" id="ancho" placeholder="cm."
                                            min="0"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <x-input-error for="nombre" />

                                    </div>

                                    <div class="">
                                        <label for="message"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Profundidad</label>
                                        <input wire:model="profundidad" type="number" id="ancho"
                                            placeholder="cm." min="0"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <x-input-error for="Profundidad" />
                                    </div>
                                    <div class="">
                                        <label for="message"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Peso</label>
                                        <input wire:model="peso" type="number" id="ancho"placeholder="kg."
                                            min="0"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <x-input-error for="nombre" />

                                    </div>
                                </div>
                            </div>

                            <div class="col-span-2 sm:col-span-1">
                                <label for="category"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Región</label>
                                <select wire:model.live="regiones_id" id="category"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <option selected="">Seleccione Región</option>
                                    @foreach ($regiones as $region)
                                        <option value="{{ $region->id }}">{{ $region->nombre }}</option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="col-span-2 sm:col-span-1">
                                <label for="category"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ciudad</label>
                                <select wire:model="comunas_id" id="category"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    @if ($comunas->count() == 0)
                                        <option selected="">Seleccione Comuna</option>
                                    @endif
                                    @foreach ($comunas as $comuna)
                                        <option value="{{ $comuna->id }}">{{ $comuna->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- SECCION DE IMAGNES  --}}

                            <div class="border border-gray-500 border-dashed mt-5 mb-5 col-span-2 p-5">
                                <label for="images">Imágenes:</label>
                                <input type="file" wire:model="images" id="images" multiple accept="image/*"
                                    {{ count($images) >= 5 ? 'disabled' : '' }}>
                                @if ($images)
                                    <div class="mt-2 px-4">
                                        <label>Previsualización:</label>
                                        <div wire:loading wire:target="images">Cargando...</div>
                                        <div class="grid grid-col-1 lg:grid-cols-5 gap-4 mb-10">
                                            @foreach ($images as $key => $image)
                                                <div class="w-full border border-gray-500 px-4">
                                                    <img src="{{ $image->temporaryUrl() }}"
                                                        alt="{{ $image->getClientOriginalName() }}"
                                                        class="mx-auto w-24 h-24">

                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif


                                @error('images.*')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                                @error('images')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                        <div class="flex justify-center mt-10 mb-5">
                            <button type="submit" type="button"class="btn-agregar w-full">Guardar</button>
                            <button wire:click="cancelar" type="button"
                                class="btn-cancelar w-full">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('livewire:load', function() {
            Livewire.on('fileUploadError', message => {
                console.error('Error de carga de archivo:', message);
            });
        });
    </script>

    <script src="{{ asset('validaciones/validacion_textarea.js') }}"></script>
    <script>
        document.addEventListener('livewire:load', function() {
            Livewire.hook('afterDomUpdate', () => {
                Livewire.on('mostrarContenido', () => {
                    document.getElementById('cont').style.display = 'block';
                });

                Livewire.on('ocultarContenido', () => {
                    document.getElementById('cont').style.display = 'none';
                });
            });
        });
    </script>
</div>
