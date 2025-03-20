<?php
loadPartials('header');

// Calculate the number of pages
// $countRecords = count($drvrecords);
// $recordsPerPage = 50;
// $noOfPages = ceil($countRecords / $recordsPerPage); // Use ceil() to round up

// Default to showing all records
$results = $drvrecords;

// if ($_SERVER['REQUEST_METHOD'] === 'GET' && !empty($_GET['searchRec'])) {
//     $results = search($_GET['searchRec'], $drvrecords);
// }

// // Search function to filter records
// function search($search, $data = []): array
// {
//     return array_filter($data, function ($record) use ($search) {
//         // Ensure 'DrvRef' exists in the record before checking
//         return isset($record["DrvRef"]) && stripos($record["DrvRef"], $search) !== false;
//     });
// }



?>

<section>
    <div class="flex flex-row m-auto w-full max-w-[90%] items-center gap-2 m-20">
        <a href="/" class="bg-blue-800 text-white hover:text-red-100 px-2 py-1 rounded-xl font-semibold p-1">Home Page</a>
        <a href="/add/drivers" class="bg-blue-800 text-white hover:text-red-100 px-2 py-1 rounded-xl font-semibold p-1">Add</a>
    </div>
    <div class="flex items-center justify-center p-4">
        <form method="GET">
            <input type="text" class="border-b-2 border-blue-700 focus:outline-none p-2 bg-transparent mr-2" name="searchRec">
            <button type="submit" class="bg-yellow-300 text-white hover:text-blue-500 px-2 py-1 rounded-xl font-semibold p-1">Search</button>
        </form>
    </div>
    <div class="flex min-h-screen items-center justify-center bg-gray-300 p-4">
        <div class="flex w-full max-w-[90%] flex-col rounded-2xl border-2 border-blue-900 bg-white p-10 text-black shadow-2xl shadow-black md:max-w-[70%]">
            <!-- Header Grid -->
            <div class="-m-9 mb-4 h-10 rounded-xl bg-blue-600 p-1.5 text-center font-semibold text-yellow-100"><label for="name">Driver Records</label></div>
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
                <?php foreach ($results as $drvrecord): ?>
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