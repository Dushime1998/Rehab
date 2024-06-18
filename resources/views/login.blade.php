<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>
<body>


          <!-- show on only small screen -->

          @include('component.navbar')

    <!-- boby divs -->


        <!-- Centerivision -->
     <div class="bg-white h-auto w-full">
       <div class="mt-4">

        {{-- ..........new.......... --}}



<div class="w-full bg-white   rounded-lg shadow dark:bg-gray-800 ">
    <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500  rounded-t-lg bg-gray-50 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800" id="defaultTab" data-tabs-toggle="#defaultTabContent" role="tablist">
        <li class="me-2">
            <button id="login-tab" data-tabs-target="#login" type="button" role="tab" aria-controls="login" aria-selected="true" class="inline-block p-4 text-blue-600 rounded-ss-lg hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-blue-500">Login</button>
        </li>
        <li class="me-2">
            <button id="register-tab" data-tabs-target="#register" type="button" role="tab" aria-controls="register" aria-selected="false" class="inline-block p-4 hover:text-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300">Register</button>
        </li>

    </ul>

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

    <div id="defaultTabContent">
        {{-- login sectio --}}
        <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="login" role="tabpanel" aria-labelledby="login-tab">
              @include('loginPage')
        </div>

        {{-- register section --}}
        <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="register" role="tabpanel" aria-labelledby="register-tab">
            <!-- form -->
           @include('registerPage')
        </div>
    </div>
</div>
{{-- .......end --}}


       </div>
     </div>



{{-- end of center view --}}






    <!-- footer -->

    <footer class="bg-blue-500 text-white text-center py-4">
        <div class="container mx-auto">
            &copy; 2024 Smart Rehab. All rights reserved.
        </div>
    </footer>

        </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>
