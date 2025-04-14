<!-- <div class="mt-0 h-lvh w-dvw bg-gray-300"> -->
<div class="mt-0 h-auto w-full bg-gray-300">
    <!-- Header -->
    <div class="mx-2 flex h-[60px] min-w-0 items-center justify-between rounded-2xl border-1 border-amber-300 bg-amber-400 p-2 px-4 shadow-xl mt-2">
        <!-- Logo & Navigation -->
        <div class="flex items-center">
            <img class="h-8 w-auto" src="https://actaxi.ca/wp-content/themes/actaxinew/img/logo.png" alt="ACTAXI" />
            <div class="ml-4 flex space-x-2">
                <div class="relative group">
                    <a class="mx-2 hover:bg-blue-500 rounded-xl p-1" href="/list/drivers">Drivers</a>
                    <!-- Dropdown menu -->
                    <div class="absolute left-0 hidden mt-0 space-y-2 bg-white text-black rounded-xl shadow-lg w-48 group-hover:block ">
                        <!-- <a href="/list/drivers" class="block px-4 py-2 hover:bg-blue-500 rounded-xl">View Drv(s)</a> -->
                        <a href="/add/driver" class="block px-4 py-2 hover:bg-blue-500 rounded-xl">Add Drv(s)</a>
                        <a href="" class="block px-4 py-2 hover:bg-blue-500 rounded-xl">Reports</a>
                    </div>
                </div>
                <div class="relative group">
                    <a class="mx-2 hover:bg-blue-500 rounded-xl p-1" href="#">Vehicles</a>
                    <!-- Dropdown menu -->
                    <!-- <div class="absolute left-0 hidden mt-0 space-y-2 bg-white text-black rounded-xl shadow-lg w-48 group-hover:block">
                        <a href="/list/vehicles" class="block px-4 py-2 hover:bg-blue-500 rounded-xl">View Veh(s)</a>
                        <a href="/add/vehicles" class="block px-4 py-2 hover:bg-blue-500 rounded-xl">Add Veh(s)</a>
                        <a href="#" class="block px-4 py-2 hover:bg-blue-500 rounded-xl">Reports</a>
                    </div> -->
                </div>
                <div class="relative group">
                    <a class="mx-2 hover:bg-blue-500 rounded-xl p-1" href="#">Admin</a>
                    <!-- Dropdown menu -->
                </div>
            </div>
        </div>


        <!-- Login Button (Right-Aligned) -->
        <div class="ml-auto">
            <!-- <button class="rounded-3xl border-2 bg-black px-4 py-1 text-white transition hover:bg-blue-700 mr-2">
                profile
            </button> -->
            <a href="/auth/login" class="rounded-3xl border-2 bg-black px-4 py-1 text-white transition hover:bg-blue-700">
                Login
            </a>
            <a href="/auth/register" class="rounded-3xl border-2 bg-black px-4 py-1 text-white transition hover:bg-blue-700">
                Register
            </a>
        </div>
    </div>
</div>