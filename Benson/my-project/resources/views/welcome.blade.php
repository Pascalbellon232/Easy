<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
@vite ('resources/css/app.css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
                @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
         
            @endif
        <div class="h-auto w-auto bg-white  ">
            <div class="h-auto w-auto bg-black/90 py-20">
                  <div class=" md:w-3/5 mx-auto  py-10 bg-black container shadow-2xl shadow-white  ">
                        <div class="text-center mb-20">
                    <h1 class="font-bold mt-10 pt-6 text-gray-200 md:text-3xl sm:text-md">Reliable efficient delivery</h1>
                    <h2 class="font-bold mt-1 md:text-2xl sm:text-md text-gray-200">Powered By Technology</h2>
                    <h4 class="mt-5 text-gray-200">Our artificial intelligence powererd tools use millions of data <br> to ensure that your data is successefull</h4>
                </div>
                    <div class="md:flex w-4/5 mx-auto">
                <div class="md:w-[33%] w-4/5 md:m-5  mx-auto mb-6  shadow-lg shadow-white md:mt-20 h-2/5   ">
                    <div class="bg-blue-500 mt-2 w-50 h-2">&nbsp;</div>
                    <div class="py-5 mx-6 text-gray-200">
                    <h1 class="font-bold">SUPERVISOR</h1>
                    <p class="font-semi-bold">monitors activities to monitor <br> projects  supervisors</p>
                    <div class="text-end mt-3 text-blue-500 text-3xl ">
                        <a href=""> 
                          <i class="fa-solid fa-circle-up fa-beat"></i>
                        </a>
                    </div>
                    </div>
                </div>
              
                 <div class="md:w-[33%] w-4/5  h-2/5 mx-auto md:m-5 shadow-lg mb-6 shadow-white border border-white ">
                    <div class="bg-red-500  w-50 h-2">&nbsp;</div>
                    <div class="py-5 mx-6 text-gray-200">
                    <h1 class="font-bold">Team Builder</h1>
                    <p class="font-semi-bold">monitors activities to monitor <br> projects  supervisors</p>
                    <div class="text-end mt-3 text-red-500 text-3xl">
                        <a href=""> 
                          <i class="fa-solid fa-circle-up fa-beat"></i>
                        </a>
                    </div>
                    </div>
                </div>
                 <div class="md:w-[33%] w-4/5  shadow-lg shadow-white mx-auto  md:m-5 border border-white mb-6 md:mt-24 h-2/5 ">
                    <div class="bg-blue-500  w-50 h-2  ">&nbsp;</div>
                    <div class="py-5 mx-6 text-gray-200">
                    <h1 class="font-bold">Calculator</h1>
                    <p class="font-semi-bold">monitors activities to monitor <br> projects  supervisors</p>
                    <div class="text-end mt-3 text-blue-500 text-3xl">
                        <a href=""> 
                          <i class="fa-solid fa-magnifying-glass fa-beat"></i>
                        </a>
                    </div>
                    </div>
                    </div>
                </div>
                
                 <div class="md:w-[30%] w-[65%]  md:-mt-20  shadow-lg shadow-white h-2/5 border mx-auto border-white ">
                    <div class="bg-yellow-500  w-50 h-2">&nbsp;</div>
                    <div class="py-5 mx-6 text-gray-200">
                    <h1 class="font-bold">Karma</h1>
                    <p class="font-semi-bold">monitors activities to monitor <br> projects  supervisors</p>
                    <div class="text-end mt-3 text-yellow-500 text-3xl ">
                        <a href=""> 
                          <i class="fa-solid fa-magnifying-glass fa-beat"></i>
                        </a>
                    </div>
                    </div>
                </div>
</div>
            </div>

        </div>
</body>
</html>