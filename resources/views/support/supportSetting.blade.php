
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
        <div class="flex flex-col w-64">

            <div class="flex flex-col flex-1 overflow-y-auto">
                <!-- Sidebar Menu -->
                <ul class="py-4">
                    <li class="px-4 py-2 hover:bg-gray-700">
                        <a href="#" class="block">Dashboard</a>
                    </li>
                    <li class="px-4 py-2 hover:bg-gray-700">
                        <a href="supportUser" class="block">Users</a>
                    </li>
                    <li class="px-4 bg-gray-300 text-red-900 py-2 hover:bg-gray-700 hover:text-gray-100">
                        <a href="supportSetting" class="block">Settings</a>
                    </li>

                    <li class="px-4 py-2 hover:bg-gray-700">
                        <a href="#" class="block">Logout</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex flex-col flex-1 h-auto">
            <div class="flex items-center text-black-300 justify-between h-16 bg-white border-b border-gray-300">
                <div class="px-4">
                    <p class="text-red-900 font-bold text-2xl"> Rwanda Energy Group</p></div>
                <div class="px-4">
                    <a href="#" class="text-blue-500">Logout</a>
                </div>
            </div>
            <div class="p-4">
           {{-- support form update --}}

           <form class="max-w-sm mx-auto text-gray-200" action="" method="POST">
            @csrf
            <h2 class="mb-5 text-2xl font-extrabold tracking-tight text-gray-200 dark:text-white">Update Info If There is Change</h2>

            <div class="mb-5 mt-4">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-200 dark:text-white">Name or Company Name</label>
                <input type="text" id="first" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your name or company name" required />
              </div>


           <div class="mb-5 mt-4">
              <label for="email" class="block mb-2 text-sm font-medium text-gray-200 dark:text-white">Your email</label>
              <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="your email here" required />
            </div>


            <div class="mb-5">
                <label for="phone-input" class="block mb-2 text-sm font-medium text-gray-200 dark:text-white">Phone number:</label>
                <div class="relative">
                    <input type="text" id="phone-input" name="phoneNumber" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  placeholder="123-456-7890" required />
                </div>
            </div>

            <div class="mb-5 mt-4">
                <label for="Business Name" class="block mb-2 text-sm font-medium text-gray-200 dark:text-white">Business Name </label>
                <input type="texte" id="email" name="business" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="your bussiness Name" required />
              </div>


              <div class="mb-5 mt-4">
                <label for="Business Name" class="block mb-2 text-sm font-medium text-gray-200 dark:text-white">Number of Imployee You need  </label>
                <input type="texte" id="email" name="imployee" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0" required />
              </div>

              <div class="mb-5 mt-4">
                <label for="Business Name" class="block mb-2 text-sm font-medium text-gray-200 dark:text-white">Your Home City </label>
                <input type="texte" id="email" name="imployee" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="your home city" required />
              </div>

            <button type="submit" class="text-white bg-gray-900 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-blue-700 dark:focus:ring-gray-800">Update</button>

          </form>
    {{-- end of support form updata --}}
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
</html>
