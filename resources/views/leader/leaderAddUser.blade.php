
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Template</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-gray-100">
    <!-- Sidebar -->
    <div class="flex h-auto bg-gray-800 text-white">
        <div class="bg-gray-800 w-64 p-4 space-y-4 text-white">
            <!-- Logo Section -->
            <div class="flex items-center space-x-4">
                <img src="{{ asset('images/logo.jpg' ) }}" alt="Logo" class="w-16 h-16 rounded-lg">
                <h2 class="text-2xl font-bold">Admin</h2>
            </div>
            <!-- Sidebar Links -->
            <div class="mt-4">
                @include('leader.sideLink')
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex flex-col flex-1 h-auto">
            <div class="flex items-center text-black-300 justify-between h-16 bg-white border-b border-gray-300">
                <div class="px-4">
                    <p class="text-red-900 font-bold text-2xl"> Rehabilitation School</p></div>
                <div class="px-4">
                    <a href="#" class="text-blue-500">Logout</a>
                </div>
            </div>
            <div class="p-4">
                <div class="flex justify-center mt-5">
                    <div class="w-full max-w-md">
                        @if(session()->has('success'))
                            <div class="alert alert-success mb-4">
                                <h1 class="text-green-700">{{ session()->get('success') }}</h1>
                            </div>
                        @endif

                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger mb-4">
                                    {{ $error }}
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>

                <!-- Support Form -->
                <form action="{{ route('insertInamate') }}" method="POST" class="w-full max-w-lg mx-auto bg-white p-6 rounded-lg shadow-lg">
                   <h1 class="text-gray-800 text-center text-2xl font-bold">Add New Inmate</h1>

                    @csrf
                    <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                        <!-- Name -->
                        <div class="col-span-1 md:col-span-2">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-700">Your Name</label>
                            <input type="text" name="username" id="name" class="block w-full p-2.5 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 text-sm" required />
                        </div>

                        <!-- ID Number -->
                        <div class="col-span-1 md:col-span-2">
                            <label for="idNumber" class="block mb-2 text-sm font-medium text-gray-700">Your ID Number</label>
                            <input type="number" name="idNumber" id="idNumber" class="block w-full p-2.5 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 text-sm" required />
                        </div>

                        <!-- Phone Number -->
                        <div class="col-span-1">
                            <label for="phone" class="block mb-2 text-sm font-medium text-gray-700">Your Phone Number</label>
                            <input type="text" name="phoneNumber" id="phone" class="block w-full p-2.5 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 text-sm" required />
                        </div>

                        <!-- Degree -->
                        <div class="col-span-1">
                            <label for="degree" class="block mb-2 text-sm font-medium text-gray-700">Degree</label>
                            <input type="text" name="degree" id="degree" class="block w-full p-2.5 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 text-sm" required />
                        </div>

                        <!-- Option -->
                        <div class="col-span-1">
                            <label for="option" class="block mb-2 text-sm font-medium text-gray-700">Option</label>
                            <input type="text" name="option" id="option" class="block w-full p-2.5 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 text-sm" required />
                        </div>

                        <!-- Status -->
                        <div class="col-span-1">
                            <label for="status" class="block mb-2 text-sm font-medium text-gray-700">Status</label>
                            <input type="text" name="status" id="status" class="block w-full p-2.5 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 text-sm" required />
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="mt-4 w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Add Supporter</button>
                </form>
                <!-- End of Support Form -->
            </div>


                </div>
            </div>
        </div>
    </div>
</body>
</html>
