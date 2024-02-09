<nav class="border-gray-200 bg-gray-900 px-2.5 py-2.5 shadow-sm dark:bg-slate-800 sm:px-4 block print:hidden">
    <div class="container mx-0 flex max-w-full flex-wrap items-center lg:mx-auto">
        <div class="flex items-center">
            <a href="{{ route('dashboard-usuario') }}" class="flex items-center outline-none">
                <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" class="h-6" />
                <img src="{{ asset('assets/images/logo.png') }}" alt="" class="ml-2 hidden xl:block mt-1" />
            </a>
        </div>

        <div class="order-2 hidden w-full items-center justify-between md:order-1 md:ml-5 md:flex md:w-auto"
            id="mobile-menu-2">
            <ul
                class="font-body mt-4 flex flex-col font-medium md:mt-0 md:flex-row md:text-sm md:font-medium space-x-0 md:space-x-4 lg:space-x-6 xl:space-x-8 navbar">
                <li class="dropdown">
                    <button id="navDashboardLink" data-dropdown-toggle="navDashboard"
                        class="dropdown-toggle flex w-full items-center border-b border-gray-800 py-2 px-3 font-medium md:border-0 md:p-0">
                        <i class="ti ti-smart-home mr-1 pb-1 text-lg"></i> Dashboards
                        <i class="ti ti-chevron-down ml-auto lg:ml-1"></i>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="navDashboard"
                        class="dropdown-menu z-10 my-1 hidden w-full list-none divide-y divide-gray-100 rounded bg-gray-800 md:bg-white text-base shadow border border-slate-700 md:border-white dark:border-slate-700/50 dark:divide-gray-600 dark:bg-gray-900 md:w-44 dropdown-menu">
                        <ul class="py-1">
                            <li>
                                <a href="#" class="nav-link  dark:hover:bg-slate-800/70">Sin Asignar</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="nav-link  dark:hover:bg-slate-800/70">Sin Asignar</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link  dark:hover:bg-slate-800/70">Sin Asignar</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link  dark:hover:bg-slate-800/70">Sin Asignar</a>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>
        </div>

        <div class="order-1 ml-auto flex items-center md:order-2">
            <div class="relative mr-2 hidden lg:mr-4 lg:block">
                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                    <i class="ti ti-search text-gray-400 z-10"></i>
                </div>
                <input type="text" id="email-adress-icon"
                    class="block w-full rounded-lg border border-gray-700 bg-gray-900 p-2 pl-10 text-gray-300 outline-none focus:border-gray-700 focus:ring-gray-700 dark:bg-slate-800 sm:text-sm"
                    placeholder="Search..." />
            </div>
            <div class="mr-2 lg:mr-4">
                <button id="toggle-theme" class="flex rounded-full md:mr-0 relative">
                    <i class="ti ti-sun top-icon"></i>
                </button>
            </div>
            <!--notificaciones-->
            <div class="mr-2 lg:mr-4 dropdown relative">
                <button type="button" class="dropdown-toggle flex rounded-full md:mr-0" id="Notifications"
                    aria-expanded="false" data-dropdown-toggle="navNotifications">
                    <i class="ti ti-bell text-2xl text-gray-400"></i>
                </button>

                <div class="dropdown-menu dropdown-menu-right z-50 my-1 hidden w-64 list-none divide-y h-52 divide-gray-100 rounded border-slate-700 md:border-white text-base shadow dark:divide-gray-600 bg-white dark:bg-slate-800"
                    id="navNotifications" data-simplebar>
                    <ul class="py-1" aria-labelledby="navNotifications">
                        <li class="py-2 px-4">
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="flex align-items-start">
                                    <img class="object-cover rounded-full h-8 w-8 shrink-0 mr-3"
                                        src="{{ asset('assets/images/users/avatar-2.jpg') }}" alt="logo" />
                                    <div class="flex-grow ml-0.5 overflow-hidden">
                                        <p class="text-sm font-medium text-gray-800 truncate dark:text-gray-300">Karen
                                            Robinson</p>
                                        <p class="text-gray-500 mb-0 text-xs  truncate dark:text-gray-400">
                                            Hey ! i'm available here
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="py-2 px-4">
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="flex align-items-start">
                                    <img class="object-cover rounded-full h-8 w-8 shrink-0 mr-3"
                                        src="{{asset('assets/images/users/avatar-3.jpg')}}" alt="logo" />
                                    <div class="flex-grow ml-0.5 overflow-hidden">
                                        <p class="text-sm font-medium text-gray-800 truncate dark:text-gray-300">Your
                                            order is placed</p>
                                        <p class="text-gray-500 mb-0 text-xs  truncate dark:text-gray-400">
                                            Dummy text of the printing and industry.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="py-2 px-4">
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="flex align-items-start">
                                    <img class="object-cover rounded-full h-8 w-8 shrink-0 mr-3"
                                        src="{{ asset('assets/images/users/avatar-9.jpg') }}" alt="logo" />
                                    <div class="flex-grow ml-0.5 overflow-hidden">
                                        <p class="text-sm font-medium text-gray-800 truncate dark:text-gray-300">Robert
                                            McCray</p>
                                        <p class="text-gray-500 mb-0 text-xs  truncate dark:text-gray-400">
                                            Good Morning!
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="py-2 px-4">
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="flex align-items-start">
                                    <img class="object-cover rounded-full h-8 w-8 shrink-0 mr-3"
                                        src="{{ asset('assets/images/users/avatar-6.jpg') }}" alt="logo" />
                                    <div class="flex-grow ml-0.5 overflow-hidden">
                                        <p class="text-sm font-medium text-gray-800 truncate dark:text-gray-300">
                                            Meeting with designers</p>
                                        <p class="text-gray-500 mb-0 text-xs  truncate dark:text-gray-400">
                                            It is a long established fact that a reader.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
                <!--seccion usuario-->
            <div class="mr-2 lg:mr-0 dropdown relative">
                <button type="button"
                    class="dropdown-toggle flex items-center rounded-full text-sm focus:bg-none focus:ring-0 dark:focus:ring-0 md:mr-0"
                    id="user-profile" aria-expanded="false" data-dropdown-toggle="navUserdata">
                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <div class="shrink-0 me-3">
                        <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                    </div>
                @endif
                    <span class="ml-2 hidden text-left xl:block">
                        <span class="block font-medium text-gray-400">{{ auth()->user()->name }}</span>
                    </span>
                </button>

                <div class="dropdown-menu dropdown-menu-right z-50 my-1 hidden list-none divide-y divide-gray-100 rounded border-slate-700 md:border-white text-base shadow dark:divide-gray-600 bg-white dark:bg-slate-800"
                    id="navUserdata">
                    <div class="py-3 px-4">
                        <span class="block text-sm font-medium text-gray-900 dark:text-white">{{ auth()->user()->apaterno }} {{ auth()->user()->amaterno }}</span>
                        <span
                            class="block truncate text-sm font-normal text-gray-500 dark:text-gray-400">{{ auth()->user()->email }}</span>
                    </div>
                    <ul class="py-1" aria-labelledby="navUserdata">
                        <li>
                            <a href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')"
                                class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-900/20 dark:hover:text-white">Perfil</a>
                        </li>

                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf
                            <div class="px-6 -mx-6 pt-4 flex justify-between items-center border-t">
                                <button class="px-4 py-3 flex items-center space-x-4 rounded-md text-red-600 group">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                    </svg>
                                    <span class="group-hover:text-red-700">Salir</span>
                                </button>

                                <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">

                                </x-dropdown-link>

                            </div>
                        </form>
                    </ul>
                </div>
            </div>

            <button data-collapse-toggle="mobile-menu-2" type="button" id="toggle-menu"
                class="ml-1 inline-flex items-center rounded-lg text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-0 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 md:hidden"
                aria-controls="mobile-menu-2" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <i class="ti ti-menu-2 h-6 w-6 text-lg leading-6"></i>
                <i class="ti ti-X hidden h-6 w-6 text-lg leading-6"></i>
            </button>
        </div>
    </div>
</nav>



