<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Landing Page - RentMaster</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.3/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Header Section -->
    <header class="bg-purple-700 text-white py-10">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold mb-4">Welcome to RentMaster Admin Portal</h1>
            <p class="text-lg max-w-xl mx-auto">
                Manage all your apartment listings and rentals easily from one dashboard. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, urna eu tincidunt consectetur, nisi nisl lacinia orci, ac blandit lorem urna nec metus.
            </p>
        </div>
    </header>

    <!-- Buttons Section -->
    <section class="py-10 bg-white">
        <div class="container mx-auto flex justify-center gap-6">
            <a href="{{ route('login') }}" class="bg-purple-700 text-white px-6 py-3 rounded-lg hover:bg-purple-800 transition">Log In</a>
            <a href="{{ route('register') }}" class="bg-gray-200 text-gray-800 px-6 py-3 rounded-lg hover:bg-gray-300 transition">Register</a>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto text-center max-w-3xl">
            <h2 class="text-3xl font-bold mb-6">About Our Company</h2>
            <p class="text-lg mb-4">
                RentMaster has been helping property managers and landlords streamline their apartment rentals for over 10 years. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <p class="text-lg">
                Admins can easily log in or register to start managing their listings. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sit amet semper leo.
            </p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-purple-700 text-white py-6 mt-12 text-center">
        <p>&copy; 2026 RentMaster. All rights reserved.</p>
    </footer>

</body>
</html>