<?php
loadPartials('header');
//$countRecords = count($drvrecords);
//i want 50 per page, so how many pages
//$noOfPages = $countRecords / 10;
//inspect($noOfPages);



?>
<section>
    <div class="container bg-yellow-400 text-2xl mx-auto p-4 border rounded-xl shadow-xl flex justify-center items-center">
        <p>Driver List</p>
    </div>
    <div class="flex min-h-screen items-center justify-center bg-gray-300 p-4">
        <div class="flex w-full max-w-[90%] flex-col rounded-2xl border-2 border-blue-900 bg-white p-10 text-black shadow-2xl shadow-black md:max-w-[50%]">
            <!-- Header Grid -->
            <div class="grid grid-cols-3 gap-4 rounded-xl p-3 text-center font-bold">
                <div class="text-amber-700">Driver Ref</div>
                <div class="text-red-800">Name</div>
                <div class="text-violet-950">Actions</div>
            </div>
            <div class="mt-2 grid grid-cols-3 gap-4">
                <hr class="grid-col-1" />
                <hr class="grid-col-2" />
                <hr class="grid-col-3" />
            </div>
            <!-- Data Grid (Each row has its own actions) -->
            <div class="mt-4 grid grid-cols-3 gap-4 text-center">
                <!-- Rows -->
                <?php foreach ($drvrecords as $drvrecord): ?>
                    <div class="p-1 bg-gray-100 rounded-xl border-1 m-5"><?= $drvrecord->DrvRef ?></div>
                    <div class=" p-1 bg-yellow-100 text-black border-1 rounded-xl p-2"><?= $drvrecord->FirstName . ' ' . $drvrecord->LastName ?></div>
                    <div class="flex justify-center space-x-1">
                        <div>
                            <a href="/viewdrv/drivers/?sysid=<?= $drvrecord->SystemId ?>" class="bg-green-500 text-white hover:text-black px-2 rounded-xl font-semibold p-1">View</a>
                            <a href="#" class="bg-yellow-300 text-white hover:text-purple-500 px-2 py-1 rounded-xl font-semibold p-1">TripHist</a>
                        </div>
                    </div>
                <?php endforeach; ?>


            </div>
        </div>
    </div>



</section>