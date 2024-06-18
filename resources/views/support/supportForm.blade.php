@include('component.navbar')


<div class=" p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="register" role="tabpanel" aria-labelledby="register-tab">
    <!-- form -->
    <form class="max-w-sm mx-auto" action="" method="POST">
        @csrf
        <h2 class="mb-5 text-2xl font-extrabold tracking-tight text-gray-900 dark:text-white">Fill This Form To Give Support</h2>

        <div class="mb-5 mt-4">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name or Company Name</label>
            <input type="text" id="first" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your name or company name" required />
          </div>


       <div class="mb-5 mt-4">
          <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
          <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="your email here" required />
        </div>


        <div class="mb-5">
            <label for="phone-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone number:</label>
            <div class="relative">
                <input type="text" id="phone-input" name="phoneNumber" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  placeholder="123-456-7890" required />
            </div>
        </div>

        <div class="mb-5 mt-4">
            <label for="Business Name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Business Name </label>
            <input type="texte" id="email" name="business" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="your bussiness Name" required />
          </div>


          <div class="mb-5 mt-4">
            <label for="Business Name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Number of Imployee You need  </label>
            <input type="texte" id="email" name="imployee" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0" required />
          </div>

          <div class="mb-5 mt-4">
            <label for="Business Name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Home City </label>
            <input type="texte" id="email" name="imployee" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="your home city" required />
          </div>

        <button type="submit" class="text-white bg-gray-900 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-blue-700 dark:focus:ring-gray-800">Submit</button>

      </form>



</div>

    <!-- Footer -->
    <footer class="bg-blue-500 text-white text-center py-4">
        <div class="container mx-auto">
            &copy; 2024 Smart Rehab. All rights reserved.
        </div>
    </footer>

</body>
</html>
