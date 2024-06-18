
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Template</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}

</head>
<body class="bg-gray-100">
    <!-- Sidebar -->
    <div class="flex h-screen bg-gray-800 text-white">
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
        <div class="flex flex-col flex-1">
            <div class="flex items-center text-black-300 justify-between h-16 bg-white border-b border-gray-300">
                <div class="px-4">
                    <p class="text-red-900 font-bold text-2xl">Inmates Managment System</p></div>
                <div class="px-4">
                    <a href="#" class="text-blue-500">Logout</a>
                </div>
            </div>
            <div class="p-4">

                <div class="row justify-content-center mt-5">
                    <div class="col-lg-6">
                        @if(session()->has('success'))
                            <div class="alert alert-success">
                             <h1 class="text-white">   {{ session()->get('success') }} </h1>
                            </div>
                        @endif

                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger">
                                    {{$error}}
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <!-- Content Area -->
                <div class="flex justify-between items-center mb-4 flex-wrap sm:flex-nowrap">
                    <h2 class="text-xl font-semibold">Manage Inmtes</h2>
                    <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"  class="bg-blue-500 text-white px-4 py-2 rounded mt-2 sm:mt-0">
                        Add Inmate
                    </button>
                </div>


                <div class="overflow-x-auto">

{{-- search bar --}}

                    <div class="relative w-full">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5v10M3 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 10a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm12 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0V6a3 3 0 0 0-3-3H9m1.5-2-2 2 2 2"/>
                            </svg>
                        </div>
                        <input type="text" id="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search  name or ID Number" required />
                    </div>

                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50 text-danger">
                                <tr style="color: black">
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID Number</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Phone</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Degree</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Obption</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Edit</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Delete</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white text-gray-900 divide-y divide-gray-200">
@foreach ($data as $item)


                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">1</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{$item->username}}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{$item->idNumber}}</td>
                                     <td class="px-6 py-4 whitespace-nowrap">{{$item->phoneNumber}}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{$item->degree}}</td>

                                    <td class="px-6 py-4 whitespace-nowrap">{{$item->option}}</td>

                                    <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="bg-green-100 text-green-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">
                                        {{$item->status}}</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <button class="edit-button text-blue-500 hover:text-blue-700" data-modal-target="#edit-modal-{{$item->id}}" onclick="showModal('edit-modal-{{$item->id}}')">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                            </svg>
                                        </button>

                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <a href="{{route('destoryInamateMain',['id'=>$item->id])}}" class="btn btn-danger">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                              </svg>
                                            </a>
                                    </td>
                                </tr>



                                {{-- edit model --}}
<div id="edit-modal-{{$item->id}}" class="fixed inset-0 flex items-center  overflow-y-auto overflow-x-hidden justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-md">
        <h2 class="text-2xl font-bold mb-4">Edit User</h2>
        <form action="{{route('updateInamateAdmin',['id'=>$item->id])}}" method="POST">
            @csrf
            @method('PUT')

            <div class="col-span-1 md:col-span-2">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-700">Your Name</label>
                <input type="text" name="username" id="modal-subCategory-{{$item->id}}" value="{{$item->username}}"  name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />

            </div>

            <!-- ID Number -->
            <div class="col-span-1 md:col-span-2">
                <label for="idNumber" class="block mb-2 text-sm font-medium text-gray-700">Your ID Number</label>
                <input type="number" name="idNumber" id="modal-subCategory-{{$item->id}}" value="{{$item->idNumber}}"   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />

            </div>

            <!-- Phone Number -->
            <div class="col-span-1">
                <label for="phone" class="block mb-2 text-sm font-medium text-gray-700">Your Phone Number</label>
              <input type="text" name="phoneNumber" id="modal-subCategory-{{$item->id}}" value="{{$item->phoneNumber}}"   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />

            </div>

            <!-- Degree -->
            <div class="col-span-1">
                <label for="degree" class="block mb-2 text-sm font-medium text-gray-700">Degree</label>
                <input type="text" name="degree" id="modal-subCategory-{{$item->id}}" value="{{$item->degree}}"   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />

            </div>

            <!-- Option -->
            <div class="col-span-1">
                <label for="option" class="block mb-2 text-sm font-medium text-gray-700">Option</label>
              <input type="text" name="option" id="modal-subCategory-{{$item->id}}" value="{{$item->option}}"   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />

            </div>

            <!-- Status -->
            <div class="col-span-1">
                <label for="status" class="block mb-2 text-sm font-medium text-gray-700">Status</label>
            <input type="text" name="status" id="modal-subCategory-{{$item->id}}" value="{{$item->status}}"   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />

            </div>
            <div class="flex justify-end mt-2">
                <button type="button" class="text-gray-500 hover:text-gray-700 mr-4" onclick="hideModal('edit-modal-{{$item->id}}')">Cancel</button>
                <button type="submit" class="text-white bg-blue-500 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5">Save Changes</button>
            </div>
        </form>
    </div>
</div>
                                @endforeach

                                <!-- More rows can be added dynamically -->
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>


    {{-- models --}}

    <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Add Inmate
                    </h3>
                    <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5">
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
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>
<script>
    function showModal(modalId) {
        document.getElementById(modalId).classList.remove('hidden');
    }

    function hideModal(modalId) {
        document.getElementById(modalId).classList.add('hidden');
    }
</script>