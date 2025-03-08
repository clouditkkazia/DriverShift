<?= loadPartials('header') ?>

<section>

    <div class="container bg-yellow-300 text-2xl mx-auto p-4 border rounded-xl shadow-xl flex justify-center items-center">
        <p>Driver Records</p>
    </div>

    <div class="container flex p-6 w-64">
        <table class="border-separate border border-gray-400 w-full text-left shadow-lg">
            <thead>
                <tr class="bg-gray-200 text-gray-700">
                    <th class="border border-gray-300 px-4 py-2">State</th>
                    <th class="border border-gray-300 px-4 py-2">City</th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white hover:bg-gray-100">
                    <td class="border border-gray-300 px-4 py-2">Indiana</td>
                    <td class="border border-gray-300 px-4 py-2">Indianapolis</td>
                </tr>
                <tr class="bg-gray-50 hover:bg-gray-100">
                    <td class="border border-gray-300 px-4 py-2">Ohio</td>
                    <td class="border border-gray-300 px-4 py-2">Columbus</td>
                </tr>
                <tr class="bg-white hover:bg-gray-100">
                    <td class="border border-gray-300 px-4 py-2">Michigan</td>
                    <td class="border border-gray-300 px-4 py-2">Detroit</td>
                </tr>
            </tbody>
        </table>
    </div>

</section>