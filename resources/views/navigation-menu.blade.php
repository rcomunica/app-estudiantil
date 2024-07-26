<nav class="">
    <div class="flex justify-between p-5 text-center items-center">
        <button class="focus:ring-4 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none " type="button"
            data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation"
            aria-controls="drawer-navigation">
            <box-icon name='menu'></box-icon>
        </button>
        <div class="flex items-center">
            <div class="flex items-center ms-3">
                <div>
                    <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4"
                        aria-expanded="false" data-dropdown-toggle="dropdown-user">
                        <span class="sr-only">Open user menu</span>
                        <img class="w-8 h-8 rounded-full"
                            src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                    </button>
                </div>
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow"
                    id="dropdown-user">
                    <div class="px-4 py-3" role="none">
                        <p class="text-sm text-gray-900" role="none">
                            {{Auth::user()->name}}
                        </p>
                        <p class="text-sm font-medium text-gray-900 truncate" role="none">
                            {{Auth::user()->email}}
                        </p>
                    </div>
                    <ul class="py-1" role="none">
                        <li>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                role="menuitem">Settings</a>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf
                                <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                    href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </a>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


    </div>

    <div id="drawer-navigation"
        class="fixed top-0 left-0 z-40 w-64 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white "
        tabindex="-1" aria-labelledby="drawer-navigation-label">
        <h5 id="drawer-navigation-label" class="text-base font-semibold text-gray-500 uppercase">Menu
        </h5>
        <button type=" button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation"
            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 end-2.5 inline-flex items-center ">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Close menu</span>
        </button>
        <div class="py-4 overflow-y-auto">
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="{{route('dashboard')}}"
                        class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 ">
                        <svg class="w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900 "
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 22 21">
                            <path
                                d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                            <path
                                d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                        </svg>
                        <span class="ms-3">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.pae')}}"
                        class=" flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 ">
                        <svg xmlns=" http://www.w3.org/2000/svg"
                            class="w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900"
                            viewBox="0 0 24 24" style="fill: #64748b;transform: ;msFilter:;">
                            <path
                                d="M21 10H3a1 1 0 0 0-1 1 10 10 0 0 0 5 8.66V21a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1.34A10 10 0 0 0 22 11a1 1 0 0 0-1-1zM9 9V7.93a4.51 4.51 0 0 0-1.28-3.15A2.49 2.49 0 0 1 7 3V2H5v1a4.51 4.51 0 0 0 1.28 3.17A2.49 2.49 0 0 1 7 7.93V9zm4 0V7.93a4.51 4.51 0 0 0-1.28-3.15A2.49 2.49 0 0 1 11 3V2H9v1a4.51 4.51 0 0 0 1.28 3.15A2.49 2.49 0 0 1 11 7.93V9zm4 0V7.93a4.51 4.51 0 0 0-1.28-3.15A2.49 2.49 0 0 1 15 3V2h-2v1a4.51 4.51 0 0 0 1.28 3.15A2.49 2.49 0 0 1 15 7.93V9z">
                            </path>
                        </svg>
                        <span class="ms-3">Alimentacion (P.A.E.)</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.pqs')}}"
                        class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 ">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900"
                            viewBox="0 0 24 24" style="fill: rgba(100, 116, 139, 1);transform: ;msFilter:;">
                            <path
                                d="M12 4C9.243 4 7 6.243 7 9h2c0-1.654 1.346-3 3-3s3 1.346 3 3c0 1.069-.454 1.465-1.481 2.255-.382.294-.813.626-1.226 1.038C10.981 13.604 10.995 14.897 11 15v2h2v-2.009c0-.024.023-.601.707-1.284.32-.32.682-.598 1.031-.867C15.798 12.024 17 11.1 17 9c0-2.757-2.243-5-5-5zm-1 14h2v2h-2z">
                            </path>
                        </svg>
                        <span class="ms-3">P.Q.S</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.calendar')}}"
                        class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 ">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900"
                            viewBox="0 0 24 24" style="fill: rgba(100, 116, 139, 1);transform: ;msFilter:;">
                            <path
                                d="M21 20V6c0-1.103-.897-2-2-2h-2V2h-2v2H9V2H7v2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2zM9 18H7v-2h2v2zm0-4H7v-2h2v2zm4 4h-2v-2h2v2zm0-4h-2v-2h2v2zm4 4h-2v-2h2v2zm0-4h-2v-2h2v2zm2-5H5V7h14v2z">
                            </path>
                        </svg>
                        <span class="ms-3">Calendario</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.student')}}"
                        class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 ">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900"
                            viewBox="0 0 24 24" style="fill: rgba(100, 116, 139, 1);transform: ;msFilter:;">
                            <circle cx="6" cy="4" r="2"></circle>
                            <path d="M9 7H3a1 1 0 0 0-1 1v7h2v7h4v-7h2V8a1 1 0 0 0-1-1z"></path>
                            <circle cx="17" cy="4" r="2"></circle>
                            <path d="M20.21 7.73a1 1 0 0 0-1-.73h-4.5a1 1 0 0 0-1 .73L12 14h2l-1 4h2v4h4v-4h2l-1-4h2z">
                            </path>
                        </svg>
                        <span class="ms-3">Estudiantes</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

{{-- Menus for later :) --}}
{{--<li>
    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 ">
        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900 "
            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
            <path
                d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
        </svg>
        <span class="flex-1 ms-3 whitespace-nowrap">Kanban</span>
        <span
            class="inline-flex items-center justify-center px-2 ms-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full ">Pro</span>
    </a>
</li>
<li>
    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 ">
        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900 "
            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path
                d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
        </svg>
        <span class="flex-1 ms-3 whitespace-nowrap">Inbox</span>
        <span
            class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full ">3</span>
    </a>
</li>
<li>
    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 ">
        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900 "
            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
            <path
                d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
        </svg>
        <span class="flex-1 ms-3 whitespace-nowrap">Users</span>
    </a>
</li>
<li>
    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg ">
        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 " aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
            <path
                d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z" />
        </svg>
        <span class="flex-1 ms-3 whitespace-nowrap">Products</span>
    </a>
</li>
<li>
    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg ">
        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 " aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
        </svg>
        <span class="flex-1 ms-3 whitespace-nowrap">Sign In</span>
    </a>
</li>
<li>
    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg ">
        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 " aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z" />
            <path
                d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z" />
            <path
                d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z" />
        </svg>
        <span class="flex-1 ms-3 whitespace-nowrap">Sign Up</span>
    </a>
</li> --}}