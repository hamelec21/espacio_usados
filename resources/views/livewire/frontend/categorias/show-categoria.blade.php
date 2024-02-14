<div>
    <div class="container mx-auto px-4">
        <h2 class="text-2xl font-medium text-gray-800 uppercase mb-6 px-4 mt-10">Categorias</h2>
        <div class="grid grid-cols-2 lg:grid-cols-6 gap-4 space-x-2">
            @foreach ($categorias as $categoria)
            <div class="bg-gray-200 flex justify-center items-center shadow-lg relative">
                <a href="#">
                    <div class="hover:scale-75 ease-in duration-500">
                        <img src="{{ asset('storage/' . $categoria->foto) }}" alt="Imagen de Categoría" class="object-cover">
                        <div class="text-center bg-sky-600 text-white">{{ $categoria->nombre }}</div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>

    </div>
</div>
