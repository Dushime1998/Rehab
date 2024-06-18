


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
    <div class="flex h-auto bg-gray-100 text-white">
        <div class="flex flex-col w-64">
     @include('Admin.adminSidelink')
        </div>

        <!-- Main Content -->
        <div class="flex flex-col flex-1 h-auto">
            <div class="flex items-center text-black-300 justify-between h-16 bg-white border-b border-gray-300">
                <div class="px-4">
                    <p class="text-red-900 font-bold text-2xl"> KIGALI TECHNICAL ZONE</p></div>
                <div class="px-4">
                    <a href="#" class="text-blue-500">Logout</a>
                </div>
            </div>
            <div class="p-4">
           {{-- support form update --}}

           <div class="pb-4 bg-white dark:bg-gray-900">
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative mt-1">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="text" id="table-search" class="block w-full pt-2 pl-10 pr-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">
            </div>
        </div>

        <table class="w-full text-xm text-left  text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700  bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr class="w-full text-xm"><th scope="col" class="px-6 py-3">
                    No
                 </th>
                 <th scope="col" class="px-6 py-3">
                   Customer Name
                 </th>
                 <th scope="col" class="px-6 py-3">
                     Customer Email
                 </th>
                 <th scope="col" class="px-6 py-3">
                    Customer Phone
                 </th>
                 <th scope="col" class="px-6 py-3">
                 Product Name
                 </th>

                 <th scope="col" class="px-6 py-3">
                   Product It
                 </th>
                 <th scope="col" class="px-6 py-3">
                    Product Quantity
                 </th>
                 <th scope="col" class="px-6 py-3">
                     Product Total Price
                 </th>

                 <th scope="col" class="px-6 py-3">
                  Payed Status
                </th>

                <th scope="col" class="px-6 py-3">
                    Payed Ref Code
                  </th>

             </tr>
         </thead>
         <tbody>

            @foreach ($data as $item)


            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-4">
                  1
                </td>

                <td class="px-6 py-4">
                   {{$item->name}}
                </td>

                <td class="px-6 py-4">
                    {{$item->last_name}}
                  </td>

                  <td class="px-6 py-4">
                    {{$item->email}}
                  </td>

                  <td class="px-6 py-4">
                    {{$item->phone}}
                  </td>
                  <td class="px-6 py-4">
                    {{$item->productId}}
                  </td>
                  <td class="px-6 py-4">
                    {{$item->productPrice}}
                  </td>
                  <td class="px-6 py-4">
                    {{$item->status}}
                  </td>

                  <td class="px-6 py-4">
                    {{$item->productQuantity}}
                  </td>

                  <td class="px-6 py-4">
                    {{$item->userId}}
                  </td>






                  <td class="px-6 py-4">
                    {{$item->ref}}
                  </td>
            </tr>
            @endforeach
         </tbody>
        </table>
    {{-- end of support form updata --}}
                    </div>

                </div>
            </div>
        </div>
    </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>



<script>
    // JavaScript for modal functionality
    const modal = document.getElementById('my_modal_3');
    const editForm = document.getElementById('editForm');
    const productNameInput = document.getElementById('productName');
    const productPriceInput = document.getElementById('productPrice');
    const saleTypeInput = document.getElementById('saleType');

    // Function to open modal and populate form fields with product data
    function openEditModal(product) {
        productNameInput.value = product.productName;
        productPriceInput.value = product.productPrice;
        saleTypeInput.value = product.saleType;
        modal.showModal();
    }

    // Function to close modal
    function closeEditModal() {
        modal.close();
    }

    // Event listener for form submission
    editForm.addEventListener('submit', function(event) {
        event.preventDefault();
        // Add your logic here to handle form submission (e.g., update product data)
        // You can access form fields using productNameInput.value, productPriceInput.value, saleTypeInput.value
        // Then close the modal
        closeEditModal();
    });
</script>



<script>
    // JavaScript for search functionality
    const searchInput = document.getElementById('table-search');
    const rows = document.querySelectorAll('tbody tr');

        searchInput.addEventListener('input', () => {
    const searchText = searchInput.value.toLowerCase();
        rows.forEach(row => {
            const fullName = row.textContent.toLowerCase();
            if (fullName.includes(searchText)) {
                row.style.display = 'table-row';
            } else {
                row.style.display = 'none';
            }
        });
    });
</script>
