<?php
loadPartials('header');
loadPartials('navbar');
?>

<div class="flex justify-center items-center mt-20">
    <div class="bg-white p-8 rounded-lg shadow-md w-full md:w-500 mx-6">
        <h2 class="text-4xl text-center font-bold mb-4">Register</h2>
        <form action="/auth/register" method="POST">
            <div class="mb-4">
                <input type="text" name="name" id="name" placeholder="Name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <input type="email" name="email" id="email" placeholder="Email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <input type="password" name="password" id="password" placeholder="Password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <input type="password" name="password_confirmation" id="password" placeholder="Confirm Password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition duration-200">Register</button>
            </div>
            <div class="text-center">
                <p class="text-gray-600">Already have an account? <a href="/auth/login" class="text-blue-500 hover:underline">Login here</a></p>
            </div>
    </div>
</div>
<?php
loadPartials('footer'); ?>