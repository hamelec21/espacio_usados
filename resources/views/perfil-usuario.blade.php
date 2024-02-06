<x-app-layout>
    @include('header')
       <!--sidebar-->
       <!--contenido-->
       <div class="mt-16">
        <div class="mt-20 mb-10">
            <h1 class="text-center text-xl font-bold  text-gray-700 dark:text-gray-200">Bienvenido:{{ auth()->user()->name }}</h1>
        </div>

        @livewire('usuario.perfil.editar')
       </div>
    </x-app-layout>
