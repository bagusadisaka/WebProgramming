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

    <div id="interests" class="">
        <h2 class="text-[2vw] font-bold mt-[2vw] ml-[9vw] mb-[0.5vw]"> Interests </h2>
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

    <div class="educations">
        <h1 class="text-[2vw] font-bold mt-[5vw] ml-[9vw] mb-[1.5vw]"> Educations </h1>
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

    <!-- EDUCATIONS ver.2 -->

    <!-- <ol class="items-center sm:flex ml-[9vw] mr-[9vw]">
        <li class="relative mb-6 sm:mb-0">
            <div class="flex items-center">
                <div class="z-10 flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                    <svg aria-hidden="true" class="w-3 h-3 text-blue-800 dark:text-blue-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                </div>
                <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
            </div>
            <div class="mt-3 sm:pr-8">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Flowbite Library v1.0.0</h3>
                <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released on December 2, 2021</time>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">Get started with dozens of web components and interactive elements.</p>
            </div>
        </li>

        <li class="relative mb-6 sm:mb-0">
            <div class="flex items-center">
                <div class="z-10 flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                    <svg aria-hidden="true" class="w-3 h-3 text-blue-800 dark:text-blue-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                </div>
                <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
            </div>
            <div class="mt-3 sm:pr-8">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Flowbite Library v1.2.0</h3>
                <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released on December 23, 2021</time>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">Get started with dozens of web components and interactive elements.</p>
            </div>
        </li>

        <li class="relative mb-6 sm:mb-0">
            <div class="flex items-center">
                <div class="z-10 flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                    <svg aria-hidden="true" class="w-3 h-3 text-blue-800 dark:text-blue-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                </div>
                <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
            </div>
            <div class="mt-3 sm:pr-8">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Flowbite Library v1.3.0</h3>
                <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released on January 5, 2022</time>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">Get started with dozens of web components and interactive elements.</p>
            </div>
        </li>

        <li class="relative mb-6 sm:mb-0">
            <div class="flex items-center">
                <div class="z-10 flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                    <svg aria-hidden="true" class="w-3 h-3 text-blue-800 dark:text-blue-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                </div>
                <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
            </div>
            <div class="mt-3 sm:pr-8">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Flowbite Library v1.3.0</h3>
                <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released on January 5, 2022</time>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">Get started with dozens of web components and interactive elements.</p>
            </div>
        </li>
    </ol> -->
    
    <!-- ORGANIZATIONS -->
    <div id="organizations"> 
        <h1 class="text-[2vw] font-bold mt-[5vw] ml-[9vw] mb-[1.5vw]"> Organizations </h1>

        <div class="ml-[9vw] mr-[9vw] p-5 mb-4 border border-gray-100 rounded-lg bg-gray-50 dark:bg-[#E7E7E7] dark:border-gray-700">
            <time class="text-lg font-semibold text-gray-900">ELEMENTARY SCHOOL</time>
            <ol class="mt-3 divide-y divider-gray-200 dark:divide-gray-700">
                <li>
                    <a href="#" class="items-center block p-3 sm:flex hover:bg-gray-100 dark:hover:bg-gray-700">
                        <img class="w-12 h-12 mb-3 mr-3 rounded-full sm:mb-0" src="assets/Logo TPDM.png" alt="tpdm"/>
                        <div class="text-gray-700">
                            <div class="text-base font-normal"><span class="font-medium text-gray-900">Pengurus Tim Penegak Disiplin Masjid (TPDM)</div>
                            <div class="text-sm font-normal">"Lorem ipsum dolor sit amet, consectetur adipiscing elit."</div>
                            <span class="inline-flex items-center text-xs font-normal text-gray-500 dark:text-gray-400">
                                <svg aria-hidden="true" class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.083 9h1.946c.089-1.546.383-2.97.837-4.118A6.004 6.004 0 004.083 9zM10 2a8 8 0 100 16 8 8 0 000-16zm0 2c-.076 0-.232.032-.465.262-.238.234-.497.623-.737 1.182-.389.907-.673 2.142-.766 3.556h3.936c-.093-1.414-.377-2.649-.766-3.556-.24-.56-.5-.948-.737-1.182C10.232 4.032 10.076 4 10 4zm3.971 5c-.089-1.546-.383-2.97-.837-4.118A6.004 6.004 0 0115.917 9h-1.946zm-2.003 2H8.032c.093 1.414.377 2.649.766 3.556.24.56.5.948.737 1.182.233.23.389.262.465.262.076 0 .232-.032.465-.262.238-.234.498-.623.737-1.182.389-.907.673-2.142.766-3.556zm1.166 4.118c.454-1.147.748-2.572.837-4.118h1.946a6.004 6.004 0 01-2.783 4.118zm-6.268 0C6.412 13.97 6.118 12.546 6.03 11H4.083a6.004 6.004 0 002.783 4.118z" clip-rule="evenodd"></path></svg>
                                2014 - 2015
                            </span> 
                        </div>
                    </a>
                </li>
            </ol>
        </div>

        <div class="ml-[9vw] mr-[9vw] p-5 mb-4 border border-gray-100 rounded-lg bg-gray-50  dark:bg-[#E7E7E7] dark:border-gray-700">
            <time class="text-lg font-semibold text-gray-900">JUNIOR HIGH SCHOOL</time>
            <ol class="mt-3 divide-y divider-gray-200 dark:divide-gray-700">
                <li>
                    <a href="#" class="items-center block p-3 sm:flex hover:bg-gray-100 dark:hover:bg-gray-700">
                        <img class="w-12 h-12 mb-3 mr-3 rounded-full sm:mb-0" src="assets/Logo DPA.png" alt="tpdm"/>
                        <div class="text-gray-700">
                            <div class="text-base font-normal"><span class="font-medium text-gray-900">Pengurus Dewan Penggalang Putra (DPA)</div>
                            <div class="text-sm font-normal">"Lorem ipsum dolor sit amet, consectetur adipiscing elit."</div>
                            <span class="inline-flex items-center text-xs font-normal text-gray-500 dark:text-gray-400">
                                <svg aria-hidden="true" class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.083 9h1.946c.089-1.546.383-2.97.837-4.118A6.004 6.004 0 004.083 9zM10 2a8 8 0 100 16 8 8 0 000-16zm0 2c-.076 0-.232.032-.465.262-.238.234-.497.623-.737 1.182-.389.907-.673 2.142-.766 3.556h3.936c-.093-1.414-.377-2.649-.766-3.556-.24-.56-.5-.948-.737-1.182C10.232 4.032 10.076 4 10 4zm3.971 5c-.089-1.546-.383-2.97-.837-4.118A6.004 6.004 0 0115.917 9h-1.946zm-2.003 2H8.032c.093 1.414.377 2.649.766 3.556.24.56.5.948.737 1.182.233.23.389.262.465.262.076 0 .232-.032.465-.262.238-.234.498-.623.737-1.182.389-.907.673-2.142.766-3.556zm1.166 4.118c.454-1.147.748-2.572.837-4.118h1.946a6.004 6.004 0 01-2.783 4.118zm-6.268 0C6.412 13.97 6.118 12.546 6.03 11H4.083a6.004 6.004 0 002.783 4.118z" clip-rule="evenodd"></path></svg>
                                2015 - 2016
                            </span> 
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="items-center block p-3 sm:flex hover:bg-gray-100 dark:hover:bg-gray-700">
                        <img class="w-12 h-12 mb-3 mr-3 rounded-full sm:mb-0" src="assets/Logo OSIS.png" alt="tpdm"/>
                        <div class="text-gray-700">
                            <div class="text-base font-normal"><span class="font-medium text-gray-900">Sekretaris Organisasi Siswa Intra Sekolah (OSIS) </div>
                            <div class="text-sm font-normal">"Lorem ipsum dolor sit amet, consectetur adipiscing elit."</div>
                            <span class="inline-flex items-center text-xs font-normal text-gray-500 dark:text-gray-400">
                                <svg aria-hidden="true" class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.083 9h1.946c.089-1.546.383-2.97.837-4.118A6.004 6.004 0 004.083 9zM10 2a8 8 0 100 16 8 8 0 000-16zm0 2c-.076 0-.232.032-.465.262-.238.234-.497.623-.737 1.182-.389.907-.673 2.142-.766 3.556h3.936c-.093-1.414-.377-2.649-.766-3.556-.24-.56-.5-.948-.737-1.182C10.232 4.032 10.076 4 10 4zm3.971 5c-.089-1.546-.383-2.97-.837-4.118A6.004 6.004 0 0115.917 9h-1.946zm-2.003 2H8.032c.093 1.414.377 2.649.766 3.556.24.56.5.948.737 1.182.233.23.389.262.465.262.076 0 .232-.032.465-.262.238-.234.498-.623.737-1.182.389-.907.673-2.142.766-3.556zm1.166 4.118c.454-1.147.748-2.572.837-4.118h1.946a6.004 6.004 0 01-2.783 4.118zm-6.268 0C6.412 13.97 6.118 12.546 6.03 11H4.083a6.004 6.004 0 002.783 4.118z" clip-rule="evenodd"></path></svg>
                                2016 - 2017
                            </span> 
                        </div>
                    </a>
                </li>
            </ol>
        </div>

        <div class="ml-[9vw] mr-[9vw] p-5 mb-4 border border-gray-100 rounded-lg bg-gray-50  dark:bg-[#E7E7E7] dark:border-gray-700">
            <time class="text-lg font-semibold text-gray-900">SENIOR HIGH SCHOOL</time>
            <ol class="mt-3 divide-y divider-gray-200 dark:divide-gray-700">
                <li>
                    <a href="#" class="items-center block p-3 sm:flex hover:bg-gray-100 dark:hover:bg-gray-700">
                        <img class="w-12 h-12 mb-3 mr-3 rounded-full sm:mb-0" src="assets/Logo OSIS.png" alt="tpdm"/>
                        <div class="text-gray-700">
                            <div class="text-base font-normal"><span class="font-medium text-gray-900">Sekretaris Organisasi Siswa Intra Sekolah (OSIS)</div>
                            <div class="text-sm font-normal">"Lorem ipsum dolor sit amet, consectetur adipiscing elit."</div>
                            <span class="inline-flex items-center text-xs font-normal text-gray-500 dark:text-gray-400">
                                <svg aria-hidden="true" class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.083 9h1.946c.089-1.546.383-2.97.837-4.118A6.004 6.004 0 004.083 9zM10 2a8 8 0 100 16 8 8 0 000-16zm0 2c-.076 0-.232.032-.465.262-.238.234-.497.623-.737 1.182-.389.907-.673 2.142-.766 3.556h3.936c-.093-1.414-.377-2.649-.766-3.556-.24-.56-.5-.948-.737-1.182C10.232 4.032 10.076 4 10 4zm3.971 5c-.089-1.546-.383-2.97-.837-4.118A6.004 6.004 0 0115.917 9h-1.946zm-2.003 2H8.032c.093 1.414.377 2.649.766 3.556.24.56.5.948.737 1.182.233.23.389.262.465.262.076 0 .232-.032.465-.262.238-.234.498-.623.737-1.182.389-.907.673-2.142.766-3.556zm1.166 4.118c.454-1.147.748-2.572.837-4.118h1.946a6.004 6.004 0 01-2.783 4.118zm-6.268 0C6.412 13.97 6.118 12.546 6.03 11H4.083a6.004 6.004 0 002.783 4.118z" clip-rule="evenodd"></path></svg>
                                2018 - 2019
                            </span> 
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="items-center block p-3 sm:flex hover:bg-gray-100 dark:hover:bg-gray-700">
                        <img class="w-12 h-12 mb-3 mr-3 rounded-full sm:mb-0" src="assets/Logo OSIS.png" alt="tpdm"/>
                        <div class="text-gray-700">
                            <div class="text-base font-normal"><span class="font-medium text-gray-900">Ketua Organisasi Siswa Intra Sekolah (OSIS) </div>
                            <div class="text-sm font-normal">"Lorem ipsum dolor sit amet, consectetur adipiscing elit."</div>
                            <span class="inline-flex items-center text-xs font-normal text-gray-500 dark:text-gray-400">
                                <svg aria-hidden="true" class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.083 9h1.946c.089-1.546.383-2.97.837-4.118A6.004 6.004 0 004.083 9zM10 2a8 8 0 100 16 8 8 0 000-16zm0 2c-.076 0-.232.032-.465.262-.238.234-.497.623-.737 1.182-.389.907-.673 2.142-.766 3.556h3.936c-.093-1.414-.377-2.649-.766-3.556-.24-.56-.5-.948-.737-1.182C10.232 4.032 10.076 4 10 4zm3.971 5c-.089-1.546-.383-2.97-.837-4.118A6.004 6.004 0 0115.917 9h-1.946zm-2.003 2H8.032c.093 1.414.377 2.649.766 3.556.24.56.5.948.737 1.182.233.23.389.262.465.262.076 0 .232-.032.465-.262.238-.234.498-.623.737-1.182.389-.907.673-2.142.766-3.556zm1.166 4.118c.454-1.147.748-2.572.837-4.118h1.946a6.004 6.004 0 01-2.783 4.118zm-6.268 0C6.412 13.97 6.118 12.546 6.03 11H4.083a6.004 6.004 0 002.783 4.118z" clip-rule="evenodd"></path></svg>
                                2019 - 2020
                            </span> 
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="items-center block p-3 sm:flex hover:bg-gray-100 dark:hover:bg-gray-700">
                        <img class="w-12 h-12 mb-3 mr-3 rounded-full sm:mb-0" src="assets/Logo FPODS.png" alt="tpdm"/>
                        <div class="text-gray-700">
                            <div class="text-base font-normal"><span class="font-medium text-gray-900">Humas Forum Pengurus OSIS Dispendik Sidoarjo (FPODS) </div>
                            <div class="text-sm font-normal">"Lorem ipsum dolor sit amet, consectetur adipiscing elit."</div>
                            <span class="inline-flex items-center text-xs font-normal text-gray-500 dark:text-gray-400">
                                <svg aria-hidden="true" class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.083 9h1.946c.089-1.546.383-2.97.837-4.118A6.004 6.004 0 004.083 9zM10 2a8 8 0 100 16 8 8 0 000-16zm0 2c-.076 0-.232.032-.465.262-.238.234-.497.623-.737 1.182-.389.907-.673 2.142-.766 3.556h3.936c-.093-1.414-.377-2.649-.766-3.556-.24-.56-.5-.948-.737-1.182C10.232 4.032 10.076 4 10 4zm3.971 5c-.089-1.546-.383-2.97-.837-4.118A6.004 6.004 0 0115.917 9h-1.946zm-2.003 2H8.032c.093 1.414.377 2.649.766 3.556.24.56.5.948.737 1.182.233.23.389.262.465.262.076 0 .232-.032.465-.262.238-.234.498-.623.737-1.182.389-.907.673-2.142.766-3.556zm1.166 4.118c.454-1.147.748-2.572.837-4.118h1.946a6.004 6.004 0 01-2.783 4.118zm-6.268 0C6.412 13.97 6.118 12.546 6.03 11H4.083a6.004 6.004 0 002.783 4.118z" clip-rule="evenodd"></path></svg>
                                2020 - 2021
                            </span> 
                        </div>
                    </a>
                </li>
            </ol>
        </div>

        <div class="ml-[9vw] mr-[9vw] p-5 border border-gray-100 rounded-lg bg-gray-50  dark:bg-[#E7E7E7] dark:border-gray-700">
            <time class="text-lg font-semibold text-gray-900">UNDERGRADUATE</time>
            <ol class="mt-3 divide-y divider-gray-200 dark:divide-gray-700">
                <li>
                    <a href="#" class="items-center block p-3 sm:flex hover:bg-gray-100 dark:hover:bg-gray-700">
                        <img class="w-12 h-12 mb-3 mr-3 rounded-full sm:mb-0" src="assets/Logo Forsima Gold.png" alt="tpdm"/>
                        <div class="text-gray-700">
                            <div class="text-base font-normal"><span class="font-medium text-gray-900"> Wakil Ketua Forum Silaturahmi Mahasiswa Muslim PPA/PPTI/PPBP BCA (FORSIMA) </div>
                            <div class="text-sm font-normal">"Lorem ipsum dolor sit amet, consectetur adipiscing elit."</div>
                            <span class="inline-flex items-center text-xs font-normal text-gray-500 dark:text-gray-400">
                                <svg aria-hidden="true" class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.083 9h1.946c.089-1.546.383-2.97.837-4.118A6.004 6.004 0 004.083 9zM10 2a8 8 0 100 16 8 8 0 000-16zm0 2c-.076 0-.232.032-.465.262-.238.234-.497.623-.737 1.182-.389.907-.673 2.142-.766 3.556h3.936c-.093-1.414-.377-2.649-.766-3.556-.24-.56-.5-.948-.737-1.182C10.232 4.032 10.076 4 10 4zm3.971 5c-.089-1.546-.383-2.97-.837-4.118A6.004 6.004 0 0115.917 9h-1.946zm-2.003 2H8.032c.093 1.414.377 2.649.766 3.556.24.56.5.948.737 1.182.233.23.389.262.465.262.076 0 .232-.032.465-.262.238-.234.498-.623.737-1.182.389-.907.673-2.142.766-3.556zm1.166 4.118c.454-1.147.748-2.572.837-4.118h1.946a6.004 6.004 0 01-2.783 4.118zm-6.268 0C6.412 13.97 6.118 12.546 6.03 11H4.083a6.004 6.004 0 002.783 4.118z" clip-rule="evenodd"></path></svg>
                                2021 - 2022
                            </span> 
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="items-center block p-3 sm:flex hover:bg-gray-100 dark:hover:bg-gray-700">
                        <img class="w-12 h-12 mb-3 mr-3 rounded-full sm:mb-0" src="assets/Logo Creative Team.png" alt="tpdm"/>
                        <div class="text-gray-700">
                            <div class="text-base font-normal"><span class="font-medium text-gray-900"> Koordinator Acara Creative Team RTB </div>
                            <div class="text-sm font-normal">"Lorem ipsum dolor sit amet, consectetur adipiscing elit."</div>
                            <span class="inline-flex items-center text-xs font-normal text-gray-500 dark:text-gray-400">
                                <svg aria-hidden="true" class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.083 9h1.946c.089-1.546.383-2.97.837-4.118A6.004 6.004 0 004.083 9zM10 2a8 8 0 100 16 8 8 0 000-16zm0 2c-.076 0-.232.032-.465.262-.238.234-.497.623-.737 1.182-.389.907-.673 2.142-.766 3.556h3.936c-.093-1.414-.377-2.649-.766-3.556-.24-.56-.5-.948-.737-1.182C10.232 4.032 10.076 4 10 4zm3.971 5c-.089-1.546-.383-2.97-.837-4.118A6.004 6.004 0 0115.917 9h-1.946zm-2.003 2H8.032c.093 1.414.377 2.649.766 3.556.24.56.5.948.737 1.182.233.23.389.262.465.262.076 0 .232-.032.465-.262.238-.234.498-.623.737-1.182.389-.907.673-2.142.766-3.556zm1.166 4.118c.454-1.147.748-2.572.837-4.118h1.946a6.004 6.004 0 01-2.783 4.118zm-6.268 0C6.412 13.97 6.118 12.546 6.03 11H4.083a6.004 6.004 0 002.783 4.118z" clip-rule="evenodd"></path></svg>
                                2021 - 2022
                            </span> 
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="items-center block p-3 sm:flex hover:bg-gray-100 dark:hover:bg-gray-700">
                        <img class="w-12 h-12 mb-3 mr-3 rounded-full sm:mb-0" src="assets/Logo Creative Team.png" alt="tpdm"/>
                        <div class="text-gray-700">
                            <div class="text-base font-normal"><span class="font-medium text-gray-900"> Ketua Creative Team RTB </div>
                            <div class="text-sm font-normal">"Lorem ipsum dolor sit amet, consectetur adipiscing elit."</div>
                            <span class="inline-flex items-center text-xs font-normal text-gray-500 dark:text-gray-400">
                                <svg aria-hidden="true" class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.083 9h1.946c.089-1.546.383-2.97.837-4.118A6.004 6.004 0 004.083 9zM10 2a8 8 0 100 16 8 8 0 000-16zm0 2c-.076 0-.232.032-.465.262-.238.234-.497.623-.737 1.182-.389.907-.673 2.142-.766 3.556h3.936c-.093-1.414-.377-2.649-.766-3.556-.24-.56-.5-.948-.737-1.182C10.232 4.032 10.076 4 10 4zm3.971 5c-.089-1.546-.383-2.97-.837-4.118A6.004 6.004 0 0115.917 9h-1.946zm-2.003 2H8.032c.093 1.414.377 2.649.766 3.556.24.56.5.948.737 1.182.233.23.389.262.465.262.076 0 .232-.032.465-.262.238-.234.498-.623.737-1.182.389-.907.673-2.142.766-3.556zm1.166 4.118c.454-1.147.748-2.572.837-4.118h1.946a6.004 6.004 0 01-2.783 4.118zm-6.268 0C6.412 13.97 6.118 12.546 6.03 11H4.083a6.004 6.004 0 002.783 4.118z" clip-rule="evenodd"></path></svg>
                                2022
                            </span> 
                        </div>
                    </a>
                </li>
            </ol>
        </div>

    </div>

    <!-- ACHIEVMENTS -->

    <section class="mt-[5vw]">
        <div class="bg-gray-700 text-white py-8">
            <div class="container mx-auto flex flex-col items-start md:flex-row my-12 md:my-24">

                <!-- BAGIAN KIRI -->
                <div class="flex flex-col w-full sticky md:top-36 lg:w-1/3 mt-2 md:mt-12 px-8">
                    <p class="ml-2 text-yellow-300 uppercase tracking-loose">Achievements</p>
                    <p class="text-3xl md:text-4xl leading-normal md:leading-relaxed mb-2">Honors & Awards</p>
                    <p class="text-sm md:text-base text-gray-50 mb-4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                    scelerisque diam non nisi semper, et elementum lorem ornare.
                    Maecenas placerat facilisis mollis.
                    </p>
                    <a href="#" class="bg-transparent mr-auto hover:bg-yellow-300 text-yellow-300 hover:text-white rounded shadow hover:shadow-lg py-2 px-4 border border-yellow-300 hover:border-transparent"> 
                    Explore Now</a>
                </div>

                <!-- BAGIAN KANAN -->
                <div class="ml-0 md:ml-12 lg:w-2/3 sticky">
                    <div class="container mx-auto w-full h-full">
                        <div class="relative wrap overflow-hidden p-10 h-full">

                            <div class="border-2-2 border-yellow-555 absolute h-full border"
                            style="right: 50%; border: 2px solid #FFC100; border-radius: 1%;"></div>
                            <div class="border-2-2 border-yellow-555 absolute h-full border"
                            style="left: 50%; border: 2px solid #FFC100; border-radius: 1%;"></div>

                            <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
                                <div class="order-1 w-5/12"></div>
                                    <div class="order-1 w-5/12 px-1 py-4 text-right">
                                        <p class="mb-3 text-base text-yellow-300">2014</p>
                                        <h4 class="mb-3 font-bold text-lg md:text-2xl">1st Winner English Competition (Trivia Quiz Category)</h4>
                                        <p class="text-sm md:text-base leading-snug text-gray-50 text-opacity-100">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                                        scelerisque diam non nisi semper, et elementum lorem ornare.
                                        Maecenas placerat facilisis mollis.
                                        </p>
                                    </div>
                            </div>

                            <div class="mb-8 flex justify-between items-center w-full right-timeline">
                                <div class="order-1 w-5/12"></div>
                                <div class="order-1  w-5/12 px-1 py-4 text-left">
                                    <p class="mb-3 text-base text-yellow-300">2016</p>
                                    <h4 class="mb-3 font-bold text-lg md:text-2xl">Juara 1 ISTTS Robotic Technology Competition</h4>
                                    <p class="text-sm md:text-base leading-snug text-gray-50 text-opacity-100">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                                    scelerisque diam non nisi semper, et elementum lorem ornare.
                                    Maecenas placerat facilisis mollis.
                                    </p>
                                </div>
                            </div>

                            <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
                                <div class="order-1 w-5/12"></div>
                                <div class="order-1 w-5/12 px-1 py-4 text-right">
                                    <p class="mb-3 text-base text-yellow-300">2016</p>
                                    <h4 class="mb-3 font-bold text-lg md:text-2xl">3rd Winner IT-Smart Computer Electronic Robotic Olympiad</h4>
                                    <p class="text-sm md:text-base leading-snug text-gray-50 text-opacity-100">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                                    scelerisque diam non nisi semper, et elementum lorem ornare.
                                    Maecenas placerat facilisis mollis.
                                    </p>
                                </div>
                            </div>

                            <div class="mb-8 flex justify-between items-center w-full right-timeline">
                                <div class="order-1 w-5/12"></div>

                                <div class="order-1  w-5/12 px-1 py-4">
                                    <p class="mb-3 text-base text-yellow-300">2017</p>
                                    <h4 class="mb-3 font-bold  text-lg md:text-2xl text-left">3rd Winner IT-Smart Computer Electronic Robotic Olympiad</h4>
                                    <p class="text-sm md:text-base leading-snug text-gray-50 text-opacity-100">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                                    scelerisque diam non nisi semper, et elementum lorem ornare.
                                    Maecenas placerat facilisis mollis.
                                    </p>
                                </div>
                            </div>

                        </div>

                        <img class="mx-auto -mt-36 md:-mt-36" src="https://user-images.githubusercontent.com/54521023/116968861-ef21a000-acd2-11eb-95ac-a34b5b490265.png" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    
</body>
</html>