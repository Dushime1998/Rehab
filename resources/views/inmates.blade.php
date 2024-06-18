@include('component.navbar')
    <!-- Apply for Job Section -->
    <section class="py-12 bg-gray-200">
        <div class="container mx-auto">
            <div class="hero min-h-screen" style="background-image: url('{{ asset('images/5.png') }}');">
                <div class="hero-overlay bg-opacity-60"></div>
                <div class="hero-content text-center text-neutral-content">
                  <div class="max-w-md">
                    <h1 class="mb-5 text-5xl font-bold">See who need job</h1>
                    <p class="mb-5">
                        Provide the inmates with an opportunity to work for you, enabling them to lead a better life and offering them a chance at rehabilitation and personal growth.
                    </p>
                    <button class="btn btn-primary">Available for Work</button>
                  </div>
                </div>
              </div>
             </div>
    </section>

<h1 class="text-center text-2xl text-blue-500">
    The List Of Inmates That needs Job
</h1>
<div class=" mx-4 ">
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Inmates Name
                </th>
                <th scope="col" class="px-6 py-3">
                   Phone
                </th>
                <th scope="col" class="px-6 py-3">
                    Degree
                </th>
                <th scope="col" class="px-6 py-3">
                    Option
                </th>
                <th scope="col" class="px-6 py-3">
                    Status
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  Tumukunde JAckes
                </th>
                <td class="px-6 py-4">
                    0783159293
                </td>
                <td class="px-6 py-4">
                    A1
                </td>
                <td class="px-6 py-4">
                    Electricity
                </td>
                <td class="px-6 py-4">
                    <div class="badge badge-accent">Graduated</div>
                </td>
            </tr>

        </tbody>
    </table>
</div>
</div>



    <footer class="bg-blue-500 text-white text-center py-4">
        <div class="container mx-auto">
            &copy; 2024 Smart Rehab. All rights reserved.
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>
