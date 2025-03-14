<?php
loadPartials('header');
//$countRecords = count($drvrecords);
//i want 50 per page, so how many pages
//$noOfPages = $countRecords / 10;
//inspect($noOfPages);



?>


<section>

    <div class="container bg-yellow-300 text-2xl mx-auto p-4 border rounded-xl shadow-xl flex justify-center items-center">
        <p>Driver Records</p>
    </div>
    <form class="container flex-center my-4 mx-auto w-1/2 rounded-lg bg-gray-900 p-4 text-red p-10 shadow-lg p-2 m-1 justify-center" method="POST" action="#">
        <div class="mb-4 flex items-center p-2">
            <input type="text" class="w-full rounded-lg border border-gray-400 p-1" placeholder="Search ..." />
            <button type="submit" name="search" class="ml-2 rounded-lg bg-blue-500 p-2 text-white hover:bg-red-600">Search</button>
        </div>
    </form>
    <hr>
    <div class="container flex p-1 w-auto mx-auto my-auto">
        <a href=" /" class="bg-blue-500 p-4 border 1 rounded-2xl">HOME</a>
    </div>


    <div class="container flex p-16 w-auto mx-auto mt-15">

        <table class="border-separate border border-gray-400 w-full text-left shadow-lg">
            <thead>
                <tr class="bg-gray-200 text-gray-700">
                    <th class="border border-gray-300 px-4 py-2">REF</th>
                    <th class="border border-gray-300 px-4 py-2">SYSID</th>
                    <th class="border border-gray-300 px-4 py-2">NAME</th>
                    <th class="border border-gray-300 px-4 py-2">EMAIL</th>
                    <th class="border border-gray-300 px-4 py-2">LICNO</th>
                    <th class="border border-gray-300 px-4 py-2">LICEXP</th>
                    <th class="border border-gray-300 px-4 py-2">CRMEx</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($drvrecords as $drvrecord): ?>
                    <tr class="bg-white hover:bg-gray-100">
                        <td class="border border-gray-300 px-4 py-2"><?= $drvrecord->DrvRef ?></td>
                        <td class="border border-gray-300 px-4 py-2"><?= $drvrecord->SystemId ?></td>
                        <td class="border border-gray-300 px-4 py-2"><?= $drvrecord->FirstName . '' . $drvrecord->LastName ?></td>
                        <td class="border border-gray-300 px-4 py-2"><?= $drvrecord->Email ?></td>
                        <td class="border border-gray-300 px-4 py-2"><?= $drvrecord->LicNo ?></td>
                        <td class="border border-gray-300 px-4 py-2"><?= $drvrecord->LicExp ?></td>
                        <td class="border border-gray-300 px-4 py-2"><?= $drvrecord->SchBExpCrm ?></td>
                        <td class="border border-gray-300 px-4 py-2 w-auto">
                            <a class="bg-black text-white px-2 border 1 hover:bg-red-600 mb-1" href="/edit/drivers/SysId=<?= $drvrecord->SystemId ?>">Edit</a><br>
                            <a class="bg-black text-white px-2 border 1 hover:bg-red-600 mb-1" href="">Delete</a><br>
                            <a class="bg-black text-white px-2 border 1 hover:bg-red-600 mb-1" href="">Trips</a><br>
                            <a class="bg-black text-white px-2 border 1 hover:bg-red-600 mb-1" href="/viewdrv/drivers/?sysid=<?= $drvrecord->SystemId ?>">View</a>
                        </td>


                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>

</section>