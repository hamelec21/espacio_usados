<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.jsdelivr.net/npm/bundle-js@1.0.3/bundler.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" /> <link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/all.min.css') }}">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
    <link rel="stylesheet" href="{{ asset('assets/css/icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/tailwind.css') }}" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body data-layout-mode="light" class="bg-gray-100 dark:bg-gray-900">
    <x-banner />

    <div class="min-h-screen bg-white dark:bg-gray-800">
        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    @stack('modals')

    @livewireScripts

    <script src="{{ asset('src/dark-mode.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/svelte@4.2.10/src/runtime/index.min.js"></script>

    <script>
        Livewire.on('insert', function(message) {

            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Registro Creado Exitosamente',
                showConfirmButton: false,
                timer: 1500
            })
        })
    </script>
    <!--mensajes para editar-->
    <script>
        Livewire.on('editar', function(message) {

            Swal.fire({
                position: 'top-end',
                icon: 'info',
                title: 'Registro Actualizado',
                showConfirmButton: false,
                timer: 1500
            })
        })
    </script>
    <!--mensajes para Eliminar-->
    <script>
        Livewire.on('borrar', function(message) {

            Swal.fire({
                position: 'top-end',
                icon: 'warning',
                title: 'Registro Eliminado',
                showConfirmButton: false,
                timer: 1500
            })

        })
    </script>

<script>
Livewire.on('error401', function(message) {

    Swal.fire({
        position: 'top-end',
        icon: 'warning',
        title: 'Código 401 No autorizado',
        showConfirmButton: false,
        timer: 2500
    })

})
</script>


<script>
Livewire.on('error400', function(message) {

    Swal.fire({
        position: 'top-end',
        icon: 'warning',
        title: 'Código 400 Solicitud incorrecta',
        showConfirmButton: false,
        timer: 2500
    })

})
</script>


<script>
Livewire.on('bloqueado', function(message) {

    Swal.fire({
        position: 'top-end',
        icon: 'warning',
        title: 'El Ticket ha Sido Bloqueado',
        showConfirmButton: false,
        timer: 2000
    })

})
</script>



<script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/chart.js/chart.min.js') }}"></script>
    <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/libs/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/analytics-index.init.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
