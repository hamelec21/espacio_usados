<x-app-layout>
   @include('menu_vendedor')
    <div class="mt-10">
        <div class="container mx-auto flex justify-center mt-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mt-10">
                <div class="w-full">
                    <div
                        class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <svg class="w-7 h-7 text-gray-500 dark:text-gray-400 mb-3" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M4 4c0-.6.4-1 1-1h1.5c.5 0 .9.3 1 .8L7.9 6H19a1 1 0 0 1 1 1.2l-1.3 6a1 1 0 0 1-1 .8h-8l.2 1H17a3 3 0 1 1-2.8 2h-2.4a3 3 0 1 1-4-1.8L5.7 5H5a1 1 0 0 1-1-1Z"
                                clip-rule="evenodd" />
                        </svg>

                        <a href="#">
                            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Deseas
                                Comprar?</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit, amet
                            consectetur adipisicing elit.</p>
                            <button class="bg-orange-600 hover:bg-orange-700 px-4 py-1  text-white rounded-md">
                                ¡Sí, quiero Comprar!
                            </button>
                    </div>
                </div>

                <div class="w-full">
                    {{-- card vender --}}
                    <div
                        class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <svg class="w-7 h-7 text-gray-500 dark:text-gray-400 mb-3" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M7 6c0-1.1.9-2 2-2h11a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2h-2v-4a3 3 0 0 0-3-3H7V6Z"
                                clip-rule="evenodd" />
                            <path fill-rule="evenodd"
                                d="M2 11c0-1.1.9-2 2-2h11a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-7Zm7.5 1a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5Z"
                                clip-rule="evenodd" />
                            <path d="M10.5 14.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0Z" />
                        </svg>

                        <a href="{{ route('show-usuario') }}">
                            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Deseas
                                Vender?</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit, amet
                            consectetur adipisicing elit.</p>
                        <a href="{{ route('show-productos') }}" class="bg-green-700 hover:bg-green-800 px-4 py-1 text-white rounded-md">
                            ¡Sí, quiero vender!
                        </a>
                    </div>
                </div>
            </div>
        </div>








    </div>
</x-app-layout>
