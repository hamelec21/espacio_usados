<div>
    @include('navigation-menu')
    @livewire('menu.vendedor-sidebar')
    <div class="p-4 sm:ml-64">

        <div class="container mx-auto px-4 mb-10">
            <div
                class="header-form text-white font-bold text-2xl text-center py-4 rounded-lg px-4 flex items-center justify-center">
                <div class="flex items-center">
                    <img src="{{ asset('images/iconos/product-lauch.png') }}" class="w-10 h-10">
                    <div class="ml-2">¡Vamos a Publicar Tu Producto!</div>
                </div>
            </div>
        </div>

        <div class="container mx-auto px-4">
            <div class="container mx-auto">
                <form wire:submit="save" enctype="multipart/form-data">
                    {{-- describamos lo que vendes --}}
                    <div class="container mx-auto px-4 drop-shadow-lg border border-gray-100 rounded-lg mt-5">

                        <div class="flex items-center mt-5 mb-5">
                            <img src="{{ asset('images/iconos/edit.png') }}" class="w-10 h-10">
                            <h1 class="text-gray-800 font-bold text-lg ml-2">Describamos lo que vendes...</h1>
                        </div>


                        <div class="grid grid-cols-2 gap-4">
                            <div class="col-span-2">
                                <select wire:model="estado_productos_id" type="text" id="estado_producto"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="">Estado del Producto</option>
                                    @foreach ($estadopros as $estado)
                                        <option value="{{ $estado->id }}">{{ $estado->nombre }}</option>
                                    @endforeach
                                </select>
                                <x-input-error for="estado_productos_id" />
                                <h6 class="text-[12px] px-2 text-red-600">*Campo obligatorio</h6>
                            </div>

                            <div class="col-span-2 lg:col-span-1">
                                <input wire:model="nombre" type="text" id="nombre"
                                    placeholder="Titulo del Producto"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <x-input-error for="nombre" />
                                <h6 class="text-[12px] px-2 text-red-600">*Campo obligatorio</h6>
                            </div>

                            <div class="col-span-2 lg:col-span-1">
                                <select wire:model="tiempouso_id" type="text" id="tiempouso_id"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="">Tiempo de Uso</option>
                                    @foreach ($tiempos as $uso)
                                        <option value="{{ $uso->id }}">{{ $uso->nombre }}</option>
                                    @endforeach
                                </select>
                                <x-input-error for="" />
                                <h6 class="text-[12px] px-2 text-red-600">*Campo obligatorio</h6>
                            </div>

                            <div class="col-span-2">
                                <textarea wire:model="descripcion" id="descripcion" rows="4"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Descripcion(160 carácteres max.)" oninput="limitAndValidateTextarea(this, 160)"></textarea>
                                {{-- <p id="charCount" class=" dark:text-white font-semibold">0 / 160 Caracteres max.</p> --}}
                                <x-input-error for="descripcion" />
                                <h6 class="text-[12px] px-2 text-red-600">*Campo obligatorio</h6>

                            </div>
                            <div class="col-span-2 lg:col-span-1">

                                <input wire:model="precio" type="number" id="inputPesos" placeholder="Precio(Ej:2500)"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <x-input-error for="precio" />
                                <h6 class="text-[12px] px-2 text-red-600">*Campo obligatorio</h6>
                            </div>

                            <div class="col-span-2 lg:col-span-1 mb-5">

                                <input wire:model="cantidad" type="number" id="inputPesos" placeholder="Stock(Ej:10)"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    min="1">
                                <x-input-error for="cantidad" />
                                <h6 class="text-[12px] px-2 text-red-600">*Campo obligatorio</h6>
                            </div>
                        </div>
                    </div>
                    {{-- caracteristicas del producto --}}
                    <div class="container mx-auto px-4 drop-shadow-lg border border-gray-100 rounded-lg mt-5">
                        <div class="flex items-center mt-5 mb-5">
                            <img src="{{ asset('images/iconos/package.png') }}" class="w-8 h-8">
                            <h1 class="text-gray-800 font-bold text-lg ml-2">Caracteristicas del Producto</h1>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mb-10">
                            <div class="col-span-2 lg:col-span-1">

                                <select wire:model.live="categorias_id" type="text" id="categorias_id"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="">Seleccione Categoria</option>
                                    @foreach ($categorias as $categoria)
                                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                                    @endforeach
                                </select>
                                <x-input-error for="categorias_id" />
                                <h6 class="text-[12px] px-2 text-red-600">*Campo obligatorio</h6>
                            </div>

                            <div class="col-span-2 lg:col-span-1">

                                <select wire:model="subcategorias_id" id="category"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">

                                    @if ($subcategorias->count() == 0)
                                        <option selected="">Seleccione una Categoria Antes</option>
                                    @endif

                                    @foreach ($subcategorias as $sub)
                                        <option value="{{ $sub->id }}">{{ $sub->nombre }}</option>
                                    @endforeach
                                </select>
                                <h6 class="text-[12px] px-2 text-red-600">*Campo obligatorio</h6>
                            </div>

                            <div class="col-span-2  lg:col-span-1">
                                <input list="marca-list" id="marca-choice" name="marca-choice"
                                    placeholder="Escribe y/o Seleccione Marca" wire:model="nuevaMarca"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" />
                                <datalist id="marca-list">
                                    @foreach ($marcas as $marca)
                                        <option value="{{ $marca->nombre }}" data-id="{{ $marca->id }}"></option>
                                    @endforeach
                                </datalist>
                                <h6 class="text-[12px] px-2 text-red-600">*Campo obligatorio</h6>
                            </div>

                            <div class="col-span-2  lg:col-span-1">
                                <input list="material-list" id="material-choice" name="material-choice"
                                    wire:model="nuevoMaterial" placeholder="Escribe y/o Seleccione Material"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" />
                                <datalist id="material-list">
                                    @foreach ($materiales as $material)
                                        <option value="{{ $material->nombre }}" data-id="{{ $material->id }}">
                                        </option>
                                    @endforeach
                                </datalist>
                                <h6 class="text-[12px] px-2 text-gray-600">Campo Opcional</h6>
                            </div>

                            <div class="col-span-2">

                                @if ($tallas->isNotEmpty())
                                    <select wire:model="tallas_id" id="tallas_id"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option selected="">Elige Talla</option>
                                        @foreach ($tallas as $talla)
                                            <option value="{{ $talla->id }}">{{ $talla->nombre }}</option>
                                        @endforeach
                                    </select>
                                @else
                                @endif
                                <x-input-error for="tallas_id" />


                            </div>
                            <div class="col-span-1 lg:col-span-1">
                                <input wire:model="alto" type="number" id="alto"placeholder="Alto(cm)"
                                    min="0"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <x-input-error for="alto" />
                                <h6 class="text-[12px] px-2 text-gray-600">Campo Opcional</h6>
                            </div>

                            <div class="col-span-1">

                                <input wire:model="ancho" type="number" id="ancho" placeholder="Ancho(cm)"
                                    min="0"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <x-input-error for="ancho" />
                                <h6 class="text-[12px] px-2 text-gray-600">Campo Opcional</h6>

                            </div>
                            <div class="col-span-1">

                                <input wire:model="profundidad" type="number" id="ancho"
                                    placeholder="Profundidad(cm)" min="0"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <x-input-error for="Profundidad" />
                                <h6 class="text-[12px] px-2 text-gray-600">Campo Opcional</h6>
                            </div>

                            <div class="col-span-1">

                                <input wire:model="peso" type="number" id="ancho"placeholder="Peso(kg)"
                                    min="0"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <x-input-error for="peso" />
                                <h6 class="text-[12px] px-2 text-gray-600">Campo Opcional</h6>

                            </div>

                        </div>
                    </div>
            </div>
            {{-- ubicacion del producto --}}
            <div class="container mx-auto px-4 drop-shadow-lg border border-gray-100 rounded-lg mt-5">
                <div class="flex items-center mt-5 mb-5">
                    <img src="{{ asset('images/iconos/destination.png') }}" class="w-10 h-10">
                    <h1 class="text-gray-800 font-bold text-lg ml-2">Ubicación del Producto</h1>
                </div>

                <div class="grid grid-cols-2 gap-4 mb-10 ">
                    <div class="col-span-2 sm:col-span-1">
                        <select wire:model.live="regiones_id" id="category"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">Elige Región</option>
                            @foreach ($regiones as $region)
                                <option value="{{ $region->id }}">{{ $region->nombre }}</option>
                            @endforeach

                        </select>
                        <h6 class="text-[12px] px-2 text-red-600">*Campo obligatorio</h6>
                    </div>

                    <div class="col-span-2 sm:col-span-1">
                        <select wire:model="comunas_id" id="category"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            @if ($comunas->count() == 0)
                                <option selected="">Elige Comuna</option>
                            @endif
                            @foreach ($comunas as $comuna)
                                <option value="{{ $comuna->id }}">{{ $comuna->nombre }}</option>
                            @endforeach
                        </select>
                        <h6 class="text-[12px] px-2 text-red-600">*Campo obligatorio</h6>
                    </div>
                </div>
            </div>

            <div class="container mx-auto px-4 drop-shadow-lg border border-gray-100 rounded-lg mt-5">
                <div class="flex items-center mt-5 mb-5">
                    <img src="{{ asset('images/iconos/picture.png') }}" class="w-10 h-10">
                    <h1 class="text-gray-800 font-bold text-lg ml-2">Imágenes del Producto</h1>
                </div>
                <div class="border-gray-200 border mt-5 mb-10 col-span-2 p-5">
                    <label for="images">Imágenes:</label>
                    <input type="file" wire:model="images" id="images" multiple accept="image/*"
                        {{ count($images) >= 5 ? 'disabled' : '' }}
                        class=" appearance-none bg-gray-800 text-white py-1 px-4 rounded-md w-full sm:w-1/2">
                        <h6 class="text-[12px] px-1 text-red-600">Campo Obpligatorio</h6>
                    @if ($images)
                        <div class="mt-2 px-4">
                            <label>Previsualización:</label>
                            <div wire:loading wire:target="images">Cargando...</div>
                            <div class="grid grid-col-1 lg:grid-cols-5 gap-4 mb-10">
                                @foreach ($images as $key => $image)
                                    <div class="w-full border border-gray-200 px-4 shadow-inner">
                                        <img src="{{ $image->temporaryUrl() }}"
                                            alt="{{ $image->getClientOriginalName() }}" class="mx-auto w-24 h-24">

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


        </div>

        <div class="flex justify-center mt-10 mb-5 px-4">
            <button type="submit" type="button"class="btn-agregar w-full py-2">Guardar</button>
            <button wire:click="cancelar" type="button" class="btn-cancelar w-full py-2">Cancelar</button>
        </div>
        </form>

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
