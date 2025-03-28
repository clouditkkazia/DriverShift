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

    <div class="container bg-yellow-400 text-2xl mx-auto p-4 border rounded-xl shadow-xl flex justify-center items-center">
        <p>Driver Detail</p>
    </div>
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="w-full max-w-[90%] md:max-w-[50%] flex flex-col rounded-2xl border-2 border-blue-900 bg-white p-10 text-black shadow-2xl shadow-black">
            <div class="-m-9 mb-4 h-10 rounded-xl bg-blue-600 p-1.5 text-center font-semibold text-yellow-100"><label for="name"><?= $drvshowrecord->FirstName . ' ' . $drvshowrecord->LastName ?></label></div>
            <div class="">
                <form class="mx-auto grid max-w-lg grid-cols-2 gap-6">
                    <div class="flex flex-col">
                        <label class="font-semibold text-amber-700 text-center">Driver Ref</label>
                        <input type="text"
                            class="rounded-md border p-2 font-medium bg-gray-200 text-gray-700 focus:outline-none cursor-not-allowed text-center"
                            value="<?= $drvshowrecord->DrvRef ?>"
                            readonly />
                    </div>
                    <div class="flex flex-col">
                        <label class="font-semibold text-amber-700  text-center">SystemID</label>
                        <input type="text"
                            class="rounded-md border p-2 font-medium bg-gray-200 text-gray-700 focus:outline-none cursor-not-allowed text-center"
                            value="<?= $drvshowrecord->SystemId ?>"
                            readonly />
                    </div>
                    <div class="flex flex-col">
                        <label class="font-semibold text-amber-700 text-center">Email</label>
                        <input type="email"
                            class="rounded-md border p-2 font-small bg-gray-200 text-gray-700 focus:outline-none cursor-not-allowed text-center"
                            value="<?= $drvshowrecord->Email ?>"
                            readonly />
                    </div>
                    <div class="flex flex-col">
                        <label class="font-semibold text-amber-700 text-center">License No</label>
                        <input type="email"
                            class="rounded-md border p-2 font-small bg-gray-200 text-gray-700 focus:outline-none cursor-not-allowed text-center"
                            value="<?= $drvshowrecord->LicNo ?>"
                            readonly />
                    </div>
                    <div class="flex flex-col">
                        <label class="font-semibold text-amber-700 text-center">License Exp</label>
                        <input type="text"
                            class="rounded-md border p-2 font-small bg-gray-200 text-gray-700 focus:outline-none cursor-not-allowed text-center"
                            value="<?= $drvshowrecord->LicExp ?>"
                            readonly />
                    </div>
                    <div class="flex flex-col">
                        <label class="font-semibold text-amber-700 text-center">Crm Exp</label>
                        <input type="text"
                            class="rounded-md border p-2 font-small bg-gray-200 text-gray-700 focus:outline-none cursor-not-allowed text-center"
                            value="<?= $drvshowrecord->SchBExpCrm ?>"
                            readonly />
                    </div>
                </form>

                <div class="mt-5 flex flex-col">
                    <div class="mx-auto grid-cols-4 gap-6">
                        <a href="/list/drivers" class="rounded-2xl bg-blue-600 px-5 py-1 text-zinc-50 hover:bg-red-500">Back</a>
                        <a href="/" class="rounded-2xl bg-blue-600 px-5 py-1 text-zinc-50 hover:bg-red-500">Edit</a>
                        <a href="/del/driver/?sysid=<?= $drvshowrecord->SystemId ?>" class="rounded-2xl bg-blue-600 px-5 py-1 text-zinc-50 hover:bg-red-500">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



</section>