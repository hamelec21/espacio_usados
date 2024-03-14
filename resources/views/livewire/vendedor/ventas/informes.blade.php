<div>

    <div class="px-4">
        <div
            class="container mx-auto rounded-lg bg-white py-2 flex justify-center items-center  mt-5 border border-gray-200 shadow-lg">
            <div>
                <h1 class="text-gray-800 text-lg font-bold flex justify-center items-center">Bienvenido
                    {{ auth()->user()->name }}</h1>
            </div>
        </div>
    </div>

    {{-- informacion usuario ventas --}}
    <div class="container mx-auto px-4 mt-10">
        <div class="grid grid-col-1 md:grid-cols-2 lg:grid-cols-4  gap-4">
            <div class="bg-sky-100 border border-sky-700 shadow-lg">
                <div class="flex justify-center p-4">
                    <a href="{{ route('show-productos') }}">
                        <svg class="w-14 h-w-14 text-sky-700 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.3L19 7h-1M8 7h-.7M13 5v4m-2-2h4" />
                        </svg>
                    </a>
                </div>
                <div class="text-center mb-2 font-semibold">
                    <a href="{{ route('crear-productos') }}">
                    <button class="bg-sky-600 hover:bg-sky-500 px-10 text-white py-1 rounded-lg">Publicar
                        Productos</button>
                    </a>
                </div>
            </div>

            <div class="border border-red-800 shadow-lg bg-red-100 ">
                <div class="flex items-center justify-center p-4">

                    <svg class="w-14 h-14 text-red-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 17.3a5 5 0 0 0 2.6 1.7c2.2.6 4.5-.5 5-2.3.4-2-1.3-4-3.6-4.5-2.3-.6-4-2.7-3.5-4.5.5-1.9 2.7-3 5-2.3 1 .2 1.8.8 2.5 1.6m-3.9 12v2m0-18v2.2" />
                    </svg>
                    <span class="ml-4 text-red-800 dark:text-white text-3xl">4.500.- </span>

                </div>

                <div class="text-center mb-2 font-semibold">
                    <button class="bg-red-600 hover:bg-red-500 px-10 text-white py-1 rounded-lg">Total Ventas</button>
                </div>
            </div>

            <div class="border border-yellow-500 shadow-lg bg-yellow-50 ">
                <div class="flex items-center justify-center p-4">

                    <svg class="w-14 h-14 text-yellow-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 17.3a5 5 0 0 0 2.6 1.7c2.2.6 4.5-.5 5-2.3.4-2-1.3-4-3.6-4.5-2.3-.6-4-2.7-3.5-4.5.5-1.9 2.7-3 5-2.3 1 .2 1.8.8 2.5 1.6m-3.9 12v2m0-18v2.2" />
                    </svg>
                    <span class="ml-4 text-yellow-500 dark:text-white text-3xl">4.500.- </span>

                </div>

                <div class="text-center mb-2 font-semibold">
                    <button class="bg-yellow-500 hover:bg-yellow-600 px-10 text-white py-1 rounded-lg">Cargo Por
                        Servicio</button>
                </div>
            </div>

            <div class="border border-green-800 shadow-lg bg-green-100 ">
                <div class="flex items-center justify-center p-4">

                    <svg class="w-14 h-14 text-green-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 17.3a5 5 0 0 0 2.6 1.7c2.2.6 4.5-.5 5-2.3.4-2-1.3-4-3.6-4.5-2.3-.6-4-2.7-3.5-4.5.5-1.9 2.7-3 5-2.3 1 .2 1.8.8 2.5 1.6m-3.9 12v2m0-18v2.2" />
                    </svg>
                    <span class="ml-4 text-green-800 dark:text-white text-3xl">4.500.- </span>

                </div>

                <div class="text-center mb-2 font-semibold">
                    <button class="bg-green-600 hover:bg-green-500 px-10 text-white py-1 rounded-lg">Solicitar
                        Pago</button>
                </div>
            </div>
        </div>

    </div>
    {{-- table de ventas realizadas  --}}
    <div class="text-center mt-10 mb-10">
        <h1 class="text-gray-800 text-lg font-bold flex justify-center items-center">
            Detalles de Mis Ventas
        </h1>
    </div>

    <div class="container mx-auto px-4">
        <div class="card-body">
            <div class="relative overflow-x-auto  sm:rounded">
                <table class="table-auto w-full">
                    <thead>
                        <tr class="bg-primary-500 text-center">
                            <th class="text-sm font-medium text-white px-3 py-3 border-l border-transparent">
                                Producto
                            </th>
                            <th class="text-sm font-medium text-white px-3 py-3">
                                Valor
                            </th>
                            <th class="text-sm font-medium text-white px-3 py-3">
                                Comision
                            </th>
                            <th class="text-sm font-medium text-white px-3 py-3">
                                pago
                            </th>
                            <th class="text-sm font-medium text-white px-3 py-3">
                                Fecha
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td
                                class="text-center text-dark py-2 px-3 bg-slate-50 dark:bg-slate-900/20 dark:text-slate-300 border-b border-l border-[#E8E8E8] dark:border-slate-900">
                                .com
                            </td>
                            <td
                                class="text-center text-dark py-2 px-3 bg-white dark:bg-slate-700 dark:text-slate-300 border-b border-[#E8E8E8] dark:border-slate-900">
                                1 Year
                            </td>
                            <td
                                class="text-center text-dark py-2 px-3 bg-slate-50 dark:bg-slate-900/20 dark:text-slate-300 border-b border-[#E8E8E8] dark:border-slate-900">
                                $75.00
                            </td>
                            <td
                                class="text-center text-dark py-2 px-3 bg-white dark:bg-slate-700 dark:text-slate-300 border-b border-[#E8E8E8] dark:border-slate-900">
                                $5.00
                            </td>
                            <td
                                class="text-center text-dark py-2 px-3 bg-slate-50 dark:bg-slate-900/20 dark:text-slate-300 border-b border-[#E8E8E8] dark:border-slate-900">
                                $10.00
                            </td>

                        </tr>
                        <tr>
                            <td
                                class="text-center text-dark py-2 px-3 bg-slate-50 dark:bg-slate-900/20 dark:text-slate-300 border-b border-l border-[#E8E8E8] dark:border-slate-900">
                                .com
                            </td>
                            <td
                                class="text-center text-dark py-2 px-3 bg-white dark:bg-slate-700 dark:text-slate-300 border-b border-[#E8E8E8] dark:border-slate-900">
                                1 Year
                            </td>
                            <td
                                class="text-center text-dark py-2 px-3 bg-slate-50 dark:bg-slate-900/20 dark:text-slate-300 border-b border-[#E8E8E8] dark:border-slate-900">
                                $75.00
                            </td>
                            <td
                                class="text-center text-dark py-2 px-3 bg-white dark:bg-slate-700 dark:text-slate-300 border-b border-[#E8E8E8] dark:border-slate-900">
                                $5.00
                            </td>
                            <td
                                class="text-center text-dark py-2 px-3 bg-slate-50 dark:bg-slate-900/20 dark:text-slate-300 border-b border-[#E8E8E8] dark:border-slate-900">
                                $10.00
                            </td>

                        </tr>
                        <tr>
                            <td
                                class="text-center text-dark py-2 px-3 bg-slate-50 dark:bg-slate-900/20 dark:text-slate-300 border-b border-l border-[#E8E8E8] dark:border-slate-900">
                                .com
                            </td>
                            <td
                                class="text-center text-dark py-2 px-3 bg-white dark:bg-slate-700 dark:text-slate-300 border-b border-[#E8E8E8] dark:border-slate-900">
                                1 Year
                            </td>
                            <td
                                class="text-center text-dark py-2 px-3 bg-slate-50 dark:bg-slate-900/20 dark:text-slate-300 border-b border-[#E8E8E8] dark:border-slate-900">
                                $75.00
                            </td>
                            <td
                                class="text-center text-dark py-2 px-3 bg-white dark:bg-slate-700 dark:text-slate-300 border-b border-[#E8E8E8] dark:border-slate-900">
                                $5.00
                            </td>
                            <td
                                class="text-center text-dark py-2 px-3 bg-slate-50 dark:bg-slate-900/20 dark:text-slate-300 border-b border-[#E8E8E8] dark:border-slate-900">
                                $10.00
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



</div>











