<?php loadPartials('header') ?>

<section>
    <div class="container bg-yellow-300 text-2xl mx-auto p-4 border rounded-xl shadow-xl flex justify-center items-center">
        <p>Add Driver Record</p>
    </div>

    </div>
    <?php if (!empty($errors)): ?>
        <div class="container mx-auto mt-10 p-6 border rounded-xl shadow-xl max-w-lg bg-white">

            <?php foreach ($errors as $error): ?>
                <ul>
                    <li class="text-red-400">These fields need attention <?= $error ?> </li>
                </ul>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <div class="container mx-auto mt-10 p-6 border rounded-xl shadow-xl max-w-lg bg-white">
        <form class="flex flex-col gap-4" action="/save/driver" method="POST">
            <input type="hidden" name="updaterec" value="_insert">
            <div class="flex flex-col">
                <label for="driverref" class="font-semibold">DriverRef</label>
                <input type="text" id="driverref" name="DrvRef" class="p-2 border rounded-lg"
                    value="<?php echo $myvalues['drvref'] ?? ''; ?>">
            </div>
            <div class="flex flex-col">
                <label for="sysid" class="font-semibold">SystemID</label>
                <input type="text" id="sysid" name="SystemId" class="p-2 border rounded-lg"
                    value="<?php echo $myvalues['sysid'] ?? ''; ?>">
            </div>
            <div class="flex flex-col">
                <label for="firstname" class="font-semibold">First Name</label>
                <input type="text" id="firstname" name="FirstName" class="p-2 border rounded-lg" value="<?php echo $myvalues['firstname'] ?? ''; ?>">
            </div>
            <div class="flex flex-col">
                <label for="lastname" class="font-semibold">Last Name</label>
                <input type="text" id="lastname" name="LastName" class="p-2 border rounded-lg" value="<?php echo $myvalues['lastname'] ?? ''; ?>">
            </div>
            <div class="flex flex-col">
                <label for="email" class="font-semibold">Email</label>
                <input type="text" id="email" name="Email" class="p-2 border rounded-lg" value="<?php echo $myvalues['email'] ?? ''; ?>">
            </div>
            <div class="flex flex-col">
                <label for="licno" class="font-semibold">License Number</label>
                <input type="text" id="licno" name="LicNo" class="p-2 border rounded-lg" value="<?php echo $myvalues['licno'] ?? ''; ?>">
            </div>
            <div class="flex flex-col">
                <label for="licexp" class="font-semibold">LicenseExp</label>
                <input type="date" id="licexp" name="LicExp" class="p-2 border rounded-lg" value="<?php echo $myvalues['licexp'] ?? ''; ?>">
            </div>
            <div class="flex flex-col">
                <label for="crmexp" class="font-semibold">Crm Exp</label>
                <input type="date" id="crmexp" name="SchBExpCrm" class="p-2 border rounded-lg" value="<?php echo $myvalues['crmexp'] ?? ''; ?>">
            </div>
            <button type="submit" class="px-6 py-3 bg-blue-500 text-white rounded-lg shadow-md hover:bg-blue-600">
                ADD
            </button>
            <a type="button" href="/" class="px-6 py-3 bg-blue-500 text-white rounded-lg shadow-md hover:bg-blue-600 text-center">HOME</a>
        </form>
    </div>



</section>