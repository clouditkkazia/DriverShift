<?php
loadPartials('header');
$countRecords = count($drvrecords);
//i want 50 per page, so how many pages
$noOfPages = $countRecords / 10;
inspect($noOfPages);

?>


<section>

    <div class="container bg-yellow-300 text-2xl mx-auto p-4 border rounded-xl shadow-xl flex justify-center items-center">
        <p>Driver Records</p>
    </div>

    <div class="container flex p-16 w-auto mx-14 mt-15">
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
                        <td class="border border-gray-300 px-4 py-2"><?= $drvrecord['DrvRef'] ?></td>
                        <td class="border border-gray-300 px-4 py-2"><?= $drvrecord['SystemId'] ?></td>
                        <td class="border border-gray-300 px-4 py-2"><?= $drvrecord['FirstName'] . '' . $drvrecord['LastName'] ?></td>
                        <td class="border border-gray-300 px-4 py-2"><?= $drvrecord['Email'] ?></td>
                        <td class="border border-gray-300 px-4 py-2"><?= $drvrecord['LicNo'] ?></td>
                        <td class="border border-gray-300 px-4 py-2"><?= $drvrecord['LicExp'] ?></td>
                        <td class="border border-gray-300 px-4 py-2"><?= $drvrecord['SchBExpCrm'] ?></td>
                        <td class="border border-gray-300 px-4 py-2"><a class="bg-black text-white px-2 border 1 hover:bg-red-600" href="">Edit</a><a class="bg-black text-white px-2 border 1 hover:bg-red-600" href="">DEL</a>
                        </td>


                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <h4><?= $noOfPages ?></h4>
    </div>

</section>