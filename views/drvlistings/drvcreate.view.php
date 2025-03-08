<?php loadPartials('header') ?>

<section>
    <div class="container bg-yellow-300 text-2xl mx-auto p-4 border rounded-xl shadow-xl flex justify-center items-center">
        <p>Add Driver Record</p>
    </div>

    </div>
    <div class="container mx-auto mt-10 p-6 border rounded-xl shadow-xl max-w-lg">
        <form class="flex flex-col gap-4" action="" method="POST">
            <div class="flex flex-col">
                <label for="driverref1" class="font-semibold">DriverRef</label>
                <input type="text" id="driverref1" name="driverref1" class="p-2 border rounded-lg">
            </div>
            <div class="flex flex-col">
                <label for="driverref2" class="font-semibold">DriverRef</label>
                <input type="text" id="driverref2" name="driverref2" class="p-2 border rounded-lg">
            </div>
            <div class="flex flex-col">
                <label for="driverref3" class="font-semibold">DriverRef</label>
                <input type="text" id="driverref3" name="driverref3" class="p-2 border rounded-lg">
            </div>
            <div class="flex flex-col">
                <label for="driverref4" class="font-semibold">DriverRef</label>
                <input type="text" id="driverref4" name="driverref4" class="p-2 border rounded-lg">
            </div>
            <button type="submit" class="px-6 py-3 bg-blue-500 text-white rounded-lg shadow-md hover:bg-blue-600">
                ADD
            </button>
        </form>
    </div>



</section>