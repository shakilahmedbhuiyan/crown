<div>

    <div x-cloak :class="sidebarOpen ? 'block ' : 'hidden'" @click="sidebarOpen = !sidebarOpen"
         class="fixed inset-0  z-20 transition-opacity bg-black opacity-50 lg:hidden backdrop-blur-md"></div>

    <div x-cloak :class="sidebarOpen ? 'translate-x-0 ease-out lg:static lg:inset-0' : '-translate-x-full ease-in'"
         class="fixed inset-y-0 h-screen left-0 z-30 w-60 overflow-y-auto transition-all duration-300 transform bg-gray-900 shadow-md translate-x-0 ">

        <!-- Sidebar Header -->
        <div class="flex items-center justify-center my-4">
            <div class="flex items-center">
                <x-application-mark class="block h-20 w-auto leading-loose"></x-application-mark>

                <span class="mx-2 text-xl font-semibold text-gray-500">Admin</span>
            </div>
        </div>

        <nav class="mt-10">

            <x-dash-link :active="request()->routeIs('admin.dashboard') " href="{{ route('admin.dashboard') }}">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"/>
                </svg>
                <span class="mx-3">Dashboard</span>
            </x-dash-link>

           <div class="relative mt-3 mb-2">
                <p class="flex text-gray-500 justify-center items-center absolute right-0 -bottom-2 bg-gray-900 rounded-full px-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                </svg>
                Orders
            </p>
            <hr class="border-red-400/50"/>
           </div>

            <!-- Pending Orders -->
            <a class="flex items-center px-6 py-2 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
               href="/forms">
                <span class="relative ">
                    <span class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-3 w-3 absolute -top-3 left-5 animate-ping inline-flex " fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M6 5c7.18 0 13 5.82 13 13M6 11a7 7 0 017 7m-6 0a1 1 0 11-2 0 1 1 0 012 0z"/>
                </svg>
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                         stroke="currentColor" stroke-width="20"
                         viewBox="0 0 300.167 300.167">

    <path d="M251.39,157.505c-1.362-1.559-2.517-3.26-3.469-5.056c-0.468,48.27-39.875,87.398-88.254,87.398
		c-48.669,0-88.265-39.596-88.265-88.265s39.596-88.265,88.265-88.265c41.868,0,77.02,29.304,86.027,68.477l7.993-59.42l0.18-1.336
		c-22.76-26.581-56.544-43.457-94.2-43.457c-29.378,0-56.398,10.276-77.667,27.414v1.283v1.136v25.168v0.999
		c0,16.811-8.713,32.159-22.5,40.929v98.378v1.695c22.574,30.89,59.063,50.998,100.167,50.998c43.192,0,81.291-22.203,103.5-55.79
		v-1.817V165.28C258.661,163.814,254.578,161.151,251.39,157.505z"/>
    <path d="M159.667,78.318c-40.398,0-73.265,32.866-73.265,73.265s32.866,73.265,73.265,73.265s73.265-32.866,73.265-73.265
		S200.065,78.318,159.667,78.318z"/>
    <path d="M299.833,14.476c0-6.384-5.175-11.559-11.559-11.559c-5.788,0-10.684,4.281-11.455,10.018l-16.89,125.549
		c-0.445,3.305,0.56,6.64,2.754,9.15c2.195,2.51,5.366,3.949,8.701,3.949h6.782V286.25c0,6.075,4.925,11,11,11s11-4.925,11-11
		L299.833,14.476z"/>
    <path d="M67,16.917c0-4.143-3.357-7.5-7.5-7.5s-7.5,3.357-7.5,7.5v41.499H41V16.917c0-4.143-3.357-7.5-7.5-7.5s-7.5,3.357-7.5,7.5
		v41.499H15V16.917c0-4.143-3.357-7.5-7.5-7.5S0,12.774,0,16.917v67.666c0,14.619,9.417,27.073,22.5,31.636V286.25
		c0,6.075,4.925,11,11,11s11-4.925,11-11V116.219C57.583,111.656,67,99.202,67,84.583V16.917z"/>
                </svg>
                </span>
                <span class="mx-3">Pending </span>
            </a>

            <!-- Orders -->
            <a class="flex items-center px-6 py-2  text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
               href="/forms">
                <svg id="lnr-bicycle" class="h-6 w-6 -translate-y-1 -scale-x-125 scale-y-125 " viewBox="0 0 1024 1024" fill="currentColor"  stroke="currentColor" stroke-width="2">
                    <path d="M281.6 460.902c-42.405 0-76.902-34.499-76.902-76.902s34.499-76.902 76.902-76.902 76.902 34.499 76.902 76.902-34.498 76.902-76.902 76.902zM281.6 358.298c-14.173 0-25.702 11.531-25.702 25.702s11.531 25.702 25.702 25.702 25.702-11.531 25.702-25.702-11.53-25.702-25.702-25.702z"></path>
                    <path d="M486.4 870.4c-14.138 0-25.6-11.461-25.6-25.6v-153.498c0-39.531 29.77-79.022 67.774-89.902l76.795-21.984-166.909-111.274-87.56 87.56c-4.8 4.802-11.312 7.499-18.101 7.499h-102.502c-14.138 0-25.6-11.461-25.6-25.6s11.462-25.6 25.6-25.6h91.899l94.901-94.901c8.629-8.629 22.149-9.966 32.302-3.2l187.798 125.2c28.149 18.765 28.066 40.824 26.723 49.437s-7.974 29.653-40.498 38.966l-80.758 23.118c-16.048 4.595-30.666 23.986-30.666 40.68v153.498c0 14.139-11.462 25.6-25.6 25.6z"></path>
                    <path d="M768 1024c-112.926 0-204.8-91.874-204.8-204.8s91.874-204.8 204.8-204.8 204.8 91.874 204.8 204.8-91.874 204.8-204.8 204.8zM768 665.6c-84.696 0-153.6 68.904-153.6 153.6s68.904 153.6 153.6 153.6 153.6-68.904 153.6-153.6-68.904-153.6-153.6-153.6z"></path>
                    <path d="M204.749 1024c-112.899 0-204.749-91.85-204.749-204.749s91.85-204.749 204.749-204.749 204.749 91.85 204.749 204.749-91.851 204.749-204.749 204.749zM204.749 665.702c-84.667 0-153.549 68.882-153.549 153.549s68.882 153.549 153.549 153.549 153.549-68.882 153.549-153.549-68.882-153.549-153.549-153.549z"></path>
                </svg>

                <span class="mx-3">Delivering</span>
            </a>

            <!-- processing orders -->
            <a class="flex items-center px-6 py-2  text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
               href="/forms">
                <i class="icofont-chef text-xl"></i>
                <span class="mx-3">Processing</span>
            </a>

            <!-- cancel orders -->
            <x-dash-link :active="request()->routeIs('admin.zip_code') "
               href="/forms">
                <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none"
                     stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1 h-6 w-6">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="4.93" y1="4.93" x2="19.07" y2="19.07"></line>
                </svg>
                <span class="mx-3">Rejected</span>
            </x-dash-link>

            <hr class="my-2 border-red-400/50"/>
            <!-- Service Areas -->
            <x-dash-link href="{{ route('admin.zip_code') }}" :active="request()->routeIs('admin.zip_code') ">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>

                <span class="mx-3">Service Areas</span>
            </x-dash-link>

            <!-- Categories -->
            <x-dash-link :active="request()->routeIs('admin.category')" href="{{ route('admin.category') }}">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z"/>
                </svg>

                <span class="mx-3">Food Categories</span>
            </x-dash-link>

            <!-- Items -->
            <a class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
               href="/forms">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                </svg>

                <span class="mx-3">Food Items</span>
            </a>


            <!-- users -->
            <a
                class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                href="/forms">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="h-6 w-6 feather feather-users">
                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                    <circle cx="9" cy="7" r="4"></circle>
                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                </svg>
                <span class="mx-3">Users</span>
            </a>
            <!-- Customers -->
            <a
                class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                href="/forms">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                </svg>
                <span class="mx-3">Customers</span>
            </a>


        </nav>
    </div>

</div>
