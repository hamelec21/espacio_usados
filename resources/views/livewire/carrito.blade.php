<div>


    <!-- component -->
<div class="flex flex-col md:flex-row w-screen h-full px-14 py-7">

    <!-- My Cart -->
    <div class="w-full flex flex-col h-fit gap-4 p-4 ">
        <p class="text-blue-900 text-xl font-extrabold">Mi Carrito</p>
        @if (Cart::count() > 0)
        <!-- Product -->
        @foreach (Cart::content() as $item)
        <div class="flex flex-col p-4 text-lg font-semibold shadow-md border rounded-sm">
            <div class="flex flex-col md:flex-row gap-3 justify-between">
                <!-- Product Information -->
                <div class="flex flex-row gap-6 items-center">
                    <div class="w-28 h-28">

                        <img class="w-full h-full" src="{{ Storage::url($item->model->foto1) }}">
                    </div>
                    <div class="flex flex-col gap-1">
                        <p class="text-lg text-gray-800 font-semibold">{{ $item->model->nombre }}</p>
                    </div>
                </div>
                <!-- Price Information -->
                <div class="self-center text-center">
                    <p class="text-gray-800 font-normal text-xl">${{ number_format($item->model->precio, 0, ',', '.') }}</p>
                </div>
                <!-- Remove Product Icon -->
                <div class="self-center">
                    <button class="" wire:click.prevent="eliminar('{{ $item->rowId }}')">
                        <svg class="" height="24px" width="24px" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512"  xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g>
                            <path d="M400,113.3h-80v-20c0-16.2-13.1-29.3-29.3-29.3h-69.5C205.1,64,192,77.1,192,93.3v20h-80V128h21.1l23.6,290.7   c0,16.2,13.1,29.3,29.3,29.3h141c16.2,0,29.3-13.1,29.3-29.3L379.6,128H400V113.3z M206.6,93.3c0-8.1,6.6-14.7,14.6-14.7h69.5   c8.1,0,14.6,6.6,14.6,14.7v20h-98.7V93.3z M341.6,417.9l0,0.4v0.4c0,8.1-6.6,14.7-14.6,14.7H186c-8.1,0-14.6-6.6-14.6-14.7v-0.4   l0-0.4L147.7,128h217.2L341.6,417.9z"/>
                            <g>
                            <rect height="241" width="14" x="249" y="160"/>
                            <polygon points="320,160 305.4,160 294.7,401 309.3,401"/>
                            <polygon points="206.5,160 192,160 202.7,401 217.3,401"/>
                            </g>
                        </g>
                        </svg>
                    </button>
                </div>
            </div>
            <!-- Product Quantity -->
            <div class="flex flex-row self-center gap-1">
                <button wire:click.prevent="restar('{{$item->rowId}}')" class="w-5 h-5 self-center rounded-full border border-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#d1d5db" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14" />
                    </svg>
                </button>


                <input type="text" readonly="readonly" value=" {{$item->qty}}" class="w-14 h-8 text-center text-gray-900 text-sm outline-none border border-gray-300 rounded-sm">
                <button wire:click.prevent="sumar('{{$item->rowId}}')" class="w-5 h-5 self-center rounded-full border border-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="" stroke="#9ca3af" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 5v14M5 12h14" />
                    </svg>
                </button>
            </div>
        </div>
        @endforeach
        @else
            <p>No Hay Productos</p>
    @endif

    </div>




    <!-- Purchase Resume -->
    <div class="flex flex-col w-full md:w-2/3 h-fit gap-4 p-4">
        <p class="text-blue-900 text-xl font-extrabold">Resumen Compra</p>
        <div class="flex flex-col p-4 gap-4 text-lg font-semibold shadow-md border rounded-sm">
            <div class="flex flex-row justify-between">
                <p class="text-gray-600">Subtotal </p>
                <p class="text-end font-bold">${{ Cart::subtotal() }}</p>
            </div>
            <hr class="bg-gray-200 h-0.5">
            <div class="flex flex-row justify-between">
                <p class="text-gray-600">Impuesto</p>
                <div>
                <p class="text-end font-bold">${{ Cart::tax() }}</p>

                </div>
            </div>


            <hr class="bg-gray-200 h-0.5">
            <div class="flex flex-row justify-between">
                <p class="text-gray-600">Total</p>
                <div>
                <p class="text-end font-bold">${{ Cart::total() }}</p>
                </div>
            </div>
            <div class="flex gap-2">
                <button class="transition-colors text-sm bg-blue-600 hover:bg-blue-700 p-2 rounded-sm w-full text-white text-hover shadow-md">
                       Pagar
                </button>
                <a href="/" class="transition-colors text-sm bg-white border border-gray-600 p-2 rounded-sm w-full text-gray-700 text-hover shadow-md">
                        Seguir Comprando
                </a>
            </div>
        </div>
    </div>
</div>



</div>
