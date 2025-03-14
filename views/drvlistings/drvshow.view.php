<?php

/**
 * <td class="border border-gray-300 px-4 py-2"><?= $drvrecord->DrvRef ?></td>
                        <td class="border border-gray-300 px-4 py-2"><?= $drvrecord->SystemId ?></td>
                        <td class="border border-gray-300 px-4 py-2"><?= $drvrecord->FirstName . '' . $drvrecord->LastName ?></td>
                        <td class="border border-gray-300 px-4 py-2"><?= $drvrecord->Email ?></td>
                        <td class="border border-gray-300 px-4 py-2"><?= $drvrecord->LicNo ?></td>
                        <td class="border border-gray-300 px-4 py-2"><?= $drvrecord->LicExp ?></td>
                        <td class="border border-gray-300 px-4 py-2"><?= $drvrecord->SchBExpCrm ?></td>
 */
?>

<?= loadPartials('header') ?>

<section>

    <div class="container bg-yellow-300 text-2xl mx-auto p-4 border rounded-xl shadow-xl flex justify-center items-center">
        <p>Driver Detail</p>
    </div>



    <div class=" container flex flex-col space-x-2 w-[350px] mt-2 items-center text-center mx-auto bg-white rounded-xl shadow-2xl p-4">
        <div class="flex flex-row space-x-2 w-auto mt-2">
            <a href="#" class="bg-blue-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-300 mb-5">
                Edit
            </a>
            <a href="/list/drivers" class="bg-blue-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-300 mb-5">
                Back
            </a>
        </div>
        <label class="text-lg font-semibold text-blue-700">Driver Ref</label>
        <input
            type="text"
            value="<?= $drvshowrecord->DrvRef ?>"
            readonly
            class="bg-yellow-100 text-blue-900 border border-blue-500 rounded-lg p-2 outline-none cursor-not-allowed">

        <label class="text-lg font-semibold text-blue-700">SystemID</label>
        <input
            type="text"
            value="<?= $drvshowrecord->SystemId ?>"
            readonly
            class="bg-yellow-100 text-blue-900 border border-blue-500 rounded-lg p-2 outline-none cursor-not-allowed">

        <label class="text-lg font-semibold text-blue-700">Name</label>
        <input
            type="text"
            value="<?= $drvshowrecord->FirstName . '' . $drvshowrecord->LastName ?>"
            readonly
            class="bg-yellow-100 text-blue-900 border border-blue-500 rounded-lg p-2 outline-none cursor-not-allowed">
        <label class="text-lg font-semibold text-blue-700">Email</label>
        <input
            type="text"
            value="<?= $drvshowrecord->Email ?>"
            readonly
            class="bg-yellow-100 text-blue-900 border border-blue-500 rounded-lg p-2 outline-none cursor-not-allowed">
        <label class="text-lg font-semibold text-blue-700">LicenseNo</label>
        <input
            type="text"
            value="<?= $drvshowrecord->LicNo ?>"
            readonly
            class="bg-yellow-100 text-blue-900 border border-blue-500 rounded-lg p-2 outline-none cursor-not-allowed">
        <label class="text-lg font-semibold text-blue-700">LicenseExp</label>
        <input
            type="text"
            value="<?= $drvshowrecord->LicExp ?>"
            readonly
            class="bg-yellow-100 text-blue-900 border border-blue-500 rounded-lg p-2 outline-none cursor-not-allowed">
        <label class="text-lg font-semibold text-blue-700">CrmExp</label>
        <input
            type="text"
            value="<?= $drvshowrecord->SchBExpCrm ?>"
            readonly
            class="bg-yellow-100 text-blue-900 border border-blue-500 rounded-lg p-2 outline-none cursor-not-allowed">
    </div>
</section>