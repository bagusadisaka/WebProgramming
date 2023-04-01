<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
  <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
  <!-- @vite('resources/css/app.css') -->
</head>
<body>

    <!-- NAVIGATION BAR -->

    <nav class="border-gray-200 bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between ml-[9vw] p-4">
        <a href="#" class="flex items-center">
            <!-- <img src="assets/Logo Liga.png" class="h-8 mr-3" alt="Logo" /> -->
            <span class="self-center text-2xl font-font-1 whitespace-nowrap dark:text-white">Portofolio</span>
        </a>
        <button data-collapse-toggle="navbar-solid-bg" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-solid-bg" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
        <ul class="flex flex-col font-medium mt-4 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-transparent dark:border-gray-700">
            <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Profile</a>
            </li>
            <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Skills</a>
            </li>
            <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Interest</a>
            </li>
            <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Educations</a>
            </li>
            <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Organizations</a>
            </li>
            <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Achievements</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>

    <!-- PROFILE -->
    
    <div id="profile" class="flex flex-row">
        <div class="w-5/6">
            <h1 class="text-[3vw] font-bold font-font-2 mt-[4vw] ml-[9vw]">
                Hello!
            </h1>
            <h2 class="text-[1.5vw] font-semi bold ml-[9vw] mt-[0.5vw]">
                I'm Nandatama Bagus Adisaka
            </h2>
            <p class="text-[1vw] mt-[2vw] mr-[10vw] ml-[9vw] text-justify ">
                Someone who interested and pursuing technology and information. Oriented to future technology development. Communication and teamwork are some of the keys to success. Become a leader and successor of technology development
            </p>
        </div>
        <div class="justify-center flex w-[50vw]">
            <img src="assets/Foto Profile.png" class="h-[25vw] mt-[1vw] absolute z-10"/>
            <img src="assets/Background Profile.png" class="h-[25vw] mt-[1vw] relative z-0"/>
        </div>   
    </div>

    <div>
        <img src="assets/Line.png" class="h-[0.07vw] ml-[9vw]"/>
    </div>

    <!-- SKILLS -->

    <div id="skills" class="flex">
        <div class="justify-center flex w-[100vw] h-[30vw] mt-[4vw]">
            <img src="assets/Skills.png" class="h-[25vw] absolute"/>
            <img src="assets/Design Skills 2.png" class="h-[25vw] mr-[-1vw]"/>
            <img src="assets/Design Skills 1.png" class="h-[25vw] ml-[-1vw]"/> 
        </div>   
    </div>

    <!-- INTEREST -->

    <div id="interest" class="">
        <h2 class="text-[2vw] font-bold mt-[2vw] ml-[9vw] mb-[0.5vw]"> Interest </h2>
        <div class="flex flex-row">
            <div id="card_1" class=""> 
                <a class="ml-[9vw] block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <h5 class="mb-2 text-[1.5vw] font-bold tracking-tight text-gray-900 dark:text-white">Programming</h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">Lorem ipsum penjelasan panjang lah pokoknya tentang programming.</p>
                </a>
            </div>           
            <div id="card_2" class=""> 
                <a class="ml-[2vw] block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <h5 class="mb-2 text-[1.5vw] font-bold tracking-tight text-gray-900 dark:text-white">Editing Video</h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">Lorem ipsum penjelasan panjang lah pokoknya tentang Editing Video.</p>
                </a>
            </div>
            <div id="card_3" class=""> 
                <a class="ml-[2vw] block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <h5 class="mb-2 text-[1.5vw] font-bold tracking-tight text-gray-900 dark:text-white">Holding an Event</h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">Lorem ipsum penjelasan panjang lah pokoknya tentang Holding an Event.</p>
                </a>
            </div>         
        </div>      
    </div>

    <!-- EDUCATION -->

    <div class="education">
        <h1 class="text-[2vw] font-bold mt-[5vw] ml-[9vw] mb-[1.5vw]"> Education </h1>
        <ol class="ml-[9vw] mr-[9vw] border-l border-neutral-300 dark:border-neutral-500 md:flex md:justify-center md:gap-[3vw] md:border-l-0 md:border-t">
            <li>
                <div class="flex-start flex items-center pt-2 md:block md:pt-0">
                    <div class="ml-[5px] mr-3 h-[9px] w-[9px] rounded-full bg-neutral-300 dark:bg-neutral-500 md:ml-0 md:mr-0 md:-mt-[5px]"></div>
                    <p class="mt-2 text-sm text-black dark:text-black"> 2009 - 2015 (Elementary School) </p>
                </div>
                <div class="mt-2 ml-4 pb-5 md:ml-0">
                    <h4 class="mb-1.5 text-xl font-semibold">SD Al Falah Assalam</h4>
                    <p class="w-[18vw] mb-3 text-gray-600 dark:text-gray-600 text-justify">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                        scelerisque diam non nisi semper, et elementum lorem ornare.
                        Maecenas placerat facilisis mollis. Duis sagittis ligula in
                        sodales vehicula.
                    </p>
                </div>
            </li>

            <li>
                <div class="flex-start flex items-center pt-2 md:block md:pt-0">
                    <div class="ml-[5px] mr-3 h-[9px] w-[9px] rounded-full bg-neutral-300 dark:bg-neutral-500 md:ml-0 md:mr-0 md:-mt-[5px]"></div>
                    <p class="mt-2 text-sm text-black dark:text-black"> 2015 - 2018 (Junior High School) </p>
                 </div>
                <div class="mt-2 ml-4 pb-5 md:ml-0">
                    <h4 class="mb-1.5 text-xl font-semibold">SMP Al Falah Deltasari</h4>
                    <p class="w-[18vw] mb-3 text-gray-600 dark:text-gray-600 text-justify">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                        scelerisque diam non nisi semper, et elementum lorem ornare.
                        Maecenas placerat facilisis mollis. Duis sagittis ligula in
                        sodales vehicula.
                    </p>
                </div>
            </li>

            <li>
                <div class="flex-start flex items-center pt-2 md:block md:pt-0">
                    <div class="ml-[5px] mr-3 h-[9px] w-[9px] rounded-full bg-neutral-300 dark:bg-neutral-500 md:ml-0 md:mr-0 md:-mt-[5px]"></div>
                    <p class="mt-2 text-sm text-black dark:text-black"> 2018 - 2021 (Senior High School) </p>
                </div>
                <div class="mt-2 ml-4 pb-5 md:ml-0">
                    <h4 class="mb-1.5 text-xl font-semibold">SMA Negeri 1 Sidoarjo</h4>
                    <p class="w-[18vw] mb-3 text-gray-600 dark:text-gray-600 text-justify">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                        scelerisque diam non nisi semper, et elementum lorem ornare.
                        Maecenas placerat facilisis mollis. Duis sagittis ligula in
                        sodales vehicula.
                    </p>
                </div>
            </li>

            <li>
                <div class="flex-start flex items-center pt-2 md:block md:pt-0">
                    <div class="ml-[5px] mr-3 h-[9px] w-[9px] rounded-full bg-neutral-300 dark:bg-neutral-500 md:ml-0 md:mr-0 md:-mt-[5px]"></div>
                    <p class="mt-2 text-sm text-black dark:text-black"> 2021 - present (Undergraduate) </p>
                </div>
                <div class="mt-2 ml-4 pb-5 md:ml-0">
                    <h4 class="mb-1.5 text-xl font-semibold">Bina Nusantara University</h4>
                    <p class="w-[18vw] mb-3 text-gray-600 dark:text-gray-600 text-justify">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                        scelerisque diam non nisi semper, et elementum lorem ornare.
                        Maecenas placerat facilisis mollis. Duis sagittis ligula in
                        sodales vehicula.
                    </p>
                </div>
            </li>


        </ol>
    </div>    




    
</body>
</html>