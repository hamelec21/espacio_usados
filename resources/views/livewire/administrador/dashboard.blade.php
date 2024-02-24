<div>
@include('navigation-menu')
   @livewire('menu.admin-sidebar')

    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
            @livewire('vendedor.ventas.informes')

        </div>
    </div>



</div>
