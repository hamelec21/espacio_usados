<x-app-layout>
    @livewire('navigation-menu')
    @livewire('menu.sidebar')
    <div class="ml-auto mb-6 lg:w-[75%] xl:w-[80] 2xl:w-[85%] ">
         {{--Header Titulo--}}
    <div class="px-4 py-2 mx-auto max-w-7x sm:px-6 lg:px-8 mb-5">
        <div class="bg-gray-900 text-white rounded-xl shadow-lg text-center pt-4 pb-4">
            Editar Usuario
        </div>
    </div>

    <div class="py-3 mt-10">
        <div class=" max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{ route('users.update', $user->id) }}" method="post">
                @csrf
                @method('PUT')
                <!--Campos tipo input -->

                    <div class="p-2 mt-8">
                        <div class="px-4 py-2 mx-auto max-w-7x sm:px-6 lg:px-8 mb-5">
                            <div class="bg-gray-900 text-white rounded-xl shadow-lg text-center pt-4 pb-4">
                                Datos del Usuario
                            </div>
                        </div>

                        <div class="grid grid-cols-1  md:grid-cols-3 gap-2 mb-3 ">

                            <div class=" relative w-full ">
                                <label>rut</label>
                                <input oninput="this.value = this.value.toUpperCase() " type="text" id="rut"
                                       value="{{ old('rut', $user->rut) }}"
                                       class=" uppercase rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                                       name="rut"/>

                            </div>

                            <div class=" relative w-full ">
                                <label>Nombre</label>
                                <input oninput="this.value = this.value.toUpperCase() " type="text" id="name"
                                       value="{{ old('name', $user->name) }}"
                                       class=" uppercase rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                                       name="name"/>

                            </div>
                            <div class=" relative w-full ">
                                <label>Apellidos</label>
                                <input oninput="this.value = this.value.toUpperCase() " type="text" id="apellidos"
                                       value="{{ old('apellidos', $user->apellidos) }}"
                                       class=" uppercase rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                                       name="apellidos"/>

                            </div>

                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-2 mb-3 ">
                            <div class=" relative w-full ">
                                <label>Correo</label>
                                <input oninput="this.value = this.value.toUpperCase() " type="text" id="email"
                                       value="{{ old('email', $user->email) }}"
                                       class=" uppercase rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                                       name="email"/>

                            </div>

                            <div class=" relative w-full ">
                                <label>Contraseña</label>
                                <input type="password"
                                       class="rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                                       name="password"
                                       placeholder="Ingrese la contraseña sólo en caso de modificarla">
                                @if ($errors->has('password'))
                                    <span class="error text-red-500"
                                          for="input-password">{{ $errors->first('password') }}</span>
                                @endif

                            </div>
                        </div>
                    </div>


            </div>
        </div>
        <div class=" max-w-4xl mx-auto sm:px-6 lg:px-8  pt-5">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{--tabla con permisos --}}
                <div>
                    <table class="min-w-full leading-normal">
                        <thead>
                        <tr>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-900 text-center text-xs font-semibold text-white uppercase tracking-wider">
                                Seleccionar
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-900 text-center text-xs font-semibold text-white uppercase tracking-wider">
                                Permisos
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($roles as $id => $role)
                            <tr>
                                <td>
                                    <div class="text-center">
                                        <label class="form-check-label">
                                            <input class="" type="checkbox"
                                                   name="roles[]"
                                                   value=" {{ $id }} " {{ $user->roles->contains($id) ? 'checked' : '' }}>
                                            <span class="form-check-sign">
                                                                                 <span class="check" value=""></span>
                                                                                </span>
                                        </label>
                                    </div>
                                </td>
                                <td class="text-center">
                                    {{ $role}}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div
                        class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between ">
                        <div class=" text-center pb-4">
                            <button type="submit"
                                    class=" bg-blue-500 text-white px-4 py-2 rounded-md text-1xl font-medium hover:bg-blue-700 transition duration-300">
                                Actualizar
                            </button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
 </div>
</x-app-layout>



