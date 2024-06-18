<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-black text-white">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="bg-gray-800 w-64 p-4 space-y-4 text-white">
            <!-- Logo Section -->
            <div class="flex items-center space-x-4">
                <img src="{{ asset('images/logo.jpg' ) }}" alt="Logo" class="w-16 h-16 rounded-lg">
                <h2 class="text-2xl font-bold">Admin</h2>
            </div>
            <!-- Sidebar Links -->
            <div class="mt-4">
                @include('mainAdmin.sideLink')
            </div>
        </div>
        <!-- Main Content -->
        <div class="flex-1 p-4">
            <h1 class="text-3xl font-bold mb-4 text-center">Dashboard</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="bg-blue-600 p-6 rounded-lg shadow-lg">
                    <h2 class="text-xl font-bold mb-2">Total Users</h2>
                    <p class="text-4xl">1500</p>
                </div>
                <div class="bg-blue-600 p-6 rounded-lg shadow-lg">
                    <h2 class="text-xl font-bold mb-2">Total Supporters</h2>
                    <p class="text-4xl">300</p>
                </div>
                <div class="bg-blue-600 p-6 rounded-lg shadow-lg">
                    <h2 class="text-xl font-bold mb-2">Total Inmates </h2>
                    <p class="text-4xl">120</p>
                </div>
                <div class="bg-blue-600 p-6 rounded-lg shadow-lg">
                    <h2 class="text-xl font-bold mb-2">Total Inmates Shool</h2>
                    <p class="text-4xl">5</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
