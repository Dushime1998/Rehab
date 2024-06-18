<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Rehabilitation</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.2/dist/full.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-gray-100">

    <!-- Navigation Bar -->
    <nav class="bg-blue-500 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Logo and Brand Name -->
            <div class="flex items-center space-x-2">
                <a href="/">
                    <img src="{{ asset('images/logo.jpg') }}" alt="Logo" class="w-10 h-10 rounded-full">
                </a>
                <a href="/" class="text-white text-2xl font-bold">Inmates MS</a>
            </div>
            <!-- Navigation Links -->
            <ul class="flex space-x-4">
                <li><a href="/" class="text-white">Home</a></li>
                <li><a href="{{ route('inmates') }}" class="text-white">Inmates</a></li>
                <li><a href="#" class="text-white">About Us</a></li>
                <li><a href="#" class="text-white">Contact Us</a></li>
                <li><a href="login" class="text-white">Login</a></li>
            </ul>
        </div>
    </nav>
