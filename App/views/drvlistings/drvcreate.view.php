<?php loadPartials('header') ?>

<section>
    <div class="container bg-yellow-300 text-2xl mx-auto p-4 border rounded-xl shadow-xl flex justify-center items-center">
        <p>Add Driver Record</p>
    </div>

    </div>
    <div class="container mx-auto mt-10 p-6 border rounded-xl shadow-xl max-w-lg bg-white">
        <form class="flex flex-col gap-4" action="/save/driver" method="POST">
            <div class="flex flex-col">
                <label for="driverref" class="font-semibold">DriverRef</label>
                <input type="text" id="driverref" name="drvref" class="p-2 border rounded-lg">
                <label for="sysid" class="font-semibold">SysID</label>
                <input type="number" id="sysid" name="sysid" class="p-2 border rounded-lg">
            </div>
            <div class="flex flex-col">
                <label for="firstname" class="font-semibold">First Name</label>
                <input type="text" id="firstname" name="firstname" class="p-2 border rounded-lg">
            </div>
            <div class="flex flex-col">
                <label for="lastname" class="font-semibold">Last Name</label>
                <input type="text" id="lastname" name="lastname" class="p-2 border rounded-lg">
            </div>
            <div class="flex flex-col">
                <label for="email" class="font-semibold">Email</label>
                <input type="email" id="email" name="email" class="p-2 border rounded-lg">
            </div>
            <div class="flex flex-col">
                <label for="licno" class="font-semibold">License Number</label>
                <input type="text" id="licno" name="licno" class="p-2 border rounded-lg">
            </div>
            <div class="flex flex-col">
                <label for="licexp" class="font-semibold">LicenseExp</label>
                <input type="sting" id="licexp" name="licexp" class="p-2 border rounded-lg">
            </div>
            <div class="flex flex-col">
                <label for="crmexp" class="font-semibold">Crm Exp</label>
                <input type="string" id="crmexp" name="crmexp" class="p-2 border rounded-lg">
            </div>
            <button type="submit" class="px-6 py-3 bg-blue-500 text-white rounded-lg shadow-md hover:bg-blue-600">
                ADD
            </button>
        </form>
    </div>



</section>