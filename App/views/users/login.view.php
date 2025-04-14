<?php
// loadPartials('header');
loadPartials('header');
loadPartials('navbar');
?>


<div class="flex justify-center items-center mt-20">
    <div class="bg-white p-8 rounded-lg shadow-md w-full md:w-500 mx-6">
        <h2 class="text-4xl text-center font-bold mb-4">Login</h2>
        <form action="">
            <div class="mb-4">
                <input type="email" name="email" id="email" placeholder="Email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <input type="password" name="password" id="password" placeholder="Password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition duration-200">Login</button>
            </div>
            <div class="text-center">
                <p class="text-gray-600">Don't have an account? <a href="/auth/register" class="text-blue-500 hover:underline">Register here</a></p>
            </div>
        </form>
    </div>
</div>