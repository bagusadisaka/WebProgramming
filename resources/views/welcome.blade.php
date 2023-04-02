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

    <section id="navbar" class="sticky top-0 w-full z-50">
        <nav class="border-gray-700 bg-gray-800">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between ml-[9vw] p-4">
            <a href="#" class="flex items-center">
                <span class="self-center text-2xl font-font-1 whitespace-nowrap text-white">Portofolio</span>
            </a>
            <button data-collapse-toggle="navbar-solid-bg" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-400 rounded-lg md:hidden hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-600" aria-controls="navbar-solid-bg" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
            <ul class="flex flex-col font-medium mt-4 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-transparent dark:border-gray-700">
                <li>
                <a href="#profile" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-700 md:hover:bg-transparent md:border-0 md:hover:text-white md:p-0">Profile</a>
                </li>
                <li>
                <a href="#skills" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-700 md:hover:bg-transparent md:border-0 md:hover:text-white md:p-0">Skills</a>
                </li>
                <li>
                <a href="#interests" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-700 md:hover:bg-transparent md:border-0 md:hover:text-white md:p-0">Interests</a>
                </li>
                <li>
                <a href="#educations" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-700 md:hover:bg-transparent md:border-0 md:hover:text-white md:p-0">Educations</a>
                </li>
                <li>
                <a href="#organizations" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-700 md:hover:bg-transparent md:border-0 md:hover:text-white md:p-0">Organizations</a>
                </li>
                <li>
                <a href="#achievements" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-700 md:hover:bg-transparent md:border-0 md:hover:text-white md:p-0">Achievements</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>
    </section>

    <!-- PROFILE -->

    <section id="profile">    
        <div class="flex flex-row">
            <div class="w-5/6">
                <h1 class="text-[3vw] font-bold font-font-2 mt-[4vw] ml-[9vw]">
                    Hello!
                </h1>
                <h2 class="text-[1.5vw] font-semi bold ml-[9vw] mt-[0.5vw]">
                    I'm Nandatama Bagus Adisaka
                </h2>
                <p class="text-[1vw] mt-[2vw] mr-[10vw] ml-[9vw] mb-[2vw] text-justify ">
                    Someone who interested and pursuing technology and information. Oriented to future technology development. Communication and teamwork are some of the keys to success. Become a leader and successor of technology development.
                </p>
                <a href="http://instagram.com/_u/bagusadisaka/" class=" ml-[9vw] mr-auto text-white rounded shadow hover:shadow-lg py-2 px-4 bg-gray-800 border-gray-700 hover:bg-gray-700"> 
                    Contact Me
                </a>
            </div>
            <div class="justify-center flex w-[50vw]">
                <img src="assets/Foto Profile.png" class="h-[25vw] mt-[1vw] absolute z-10"/>
                <img src="assets/Background Profile.png" class="h-[25vw] mt-[1vw] relative z-0"/>
            </div>   
        </div>

        <div>
            <img src="assets/Line.png" class="h-[0.07vw] ml-[9vw]"/>
        </div>
    </section>
    
    <!-- SKILLS -->

    <section id="skills" class="flex">
        <div class="bg-gray-800 mx-[9vw] mt-[4vw] rounded-lg shadow">
            <div class="justify-center flex w-[80vw] h-auto ">
                <img src="assets/Skills.png" class="h-[25vw] absolute"/>
                <img src="assets/Design Skills 1.png" class="h-[25vw]"/> 
                <img src="assets/Design Skills 2.png" class="h-[25vw]"/>       
            </div>   
        </div>
    </section>                      

    <!-- INTEREST -->

    <section id="interests">    
        <div>
            <h2 class="text-[2vw] font-bold mt-[4vw] ml-[9vw] mb-[0.5vw]"> Interests </h2>
            <div class="flex flex-row">
                <div id="card_1" class=""> 
                    <a class="ml-[9vw] block max-w-sm p-6 rounded-lg shadow bg-gray-800 border-gray-700 hover:bg-gray-700">
                        <h5 class="mb-2 text-[1.5vw] font-bold tracking-tight text-white">Programming</h5>
                        <p class="font-normal text-gray-400">
                            I have been interested in programming since elementary school,
                            where when i was started to take part in the Robotics Extracurricular and Robotic Course.
                        </p>
                    </a>
                </div>           
                <div id="card_2" class=""> 
                    <a class="ml-[2vw] block max-w-sm p-6 rounded-lg shadow bg-gray-800 border-gray-700 hover:bg-gray-700">
                        <h5 class="mb-2 text-[1.5vw] font-bold tracking-tight text-white">Editing Video</h5>
                        <p class="font-normal text-gray-400">
                            I have been interested in editing video since junior high school,
                            where when i was started to get to know Adobe Premiere Pro as the editor
                            application that i used.
                        </p>
                    </a>
                </div>
                <div id="card_3" class=""> 
                    <a class="ml-[2vw] block max-w-sm p-6 rounded-lg shadow bg-gray-800 border-gray-700 hover:bg-gray-700">
                        <h5 class="mb-2 text-[1.5vw] font-bold tracking-tight text-white">Holding an Event</h5>
                        <p class="font-normal text-gray-400">
                            I have been interested in holding an event since junior high school,
                            where when i was started organizing events with the Student Council member.
                        </p>
                    </a>
                </div>         
            </div>      
        </div>
    </section>

    <!-- EDUCATION -->

    <section id="educations">
        <div>
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
                            Located in Sidoarjo, East Java. SD Al Falah Assalam is a private school.
                            I have been graduated with the title of one of the best graduates. The place where i learned
                            the meaning of life.
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
                            Located in Sidoarjo, East Java. SMP Al Falah Deltasari is a private school.
                            I have been graduated with the title of one of the best graduates.
                            The place where i find my identity.
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
                            Located in Sidoarjo, East Java. SMAN 1 Sidoarjo is a public school.
                            I majored in Mathematics and Natural Science. I have been graduated with the title of one of the best graduates.
                            The place where i thrive.
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
                           Located in various regions in Indonesia. Bina Nusantara University is a private university.
                           I majored in Computer Science at the PPTI BCA program.
                           The place where i deepen my knowledge.
                        </p>
                    </div>
                </li>


            </ol>
        </div>    
    </section>
   
    <!-- ORGANIZATIONS -->

    <section id="organizations">     
        <div> 
            <h1 class="text-[2vw] font-bold mt-[5vw] ml-[9vw] mb-[1.5vw]"> Organizations </h1>

            <div class="ml-[9vw] mr-[9vw] p-5 mb-4 border rounded-lg bg-gray-50 border-gray-700">
                <time class="text-lg font-semibold text-gray-900">ELEMENTARY SCHOOL</time>
                <ol class="mt-3 divide-y divide-gray-700">
                    <li>
                        <a href="#" class="items-center block p-3 sm:flex hover:bg-gray-200">
                            <img class="w-12 h-12 mb-3 mr-3 rounded-full sm:mb-0" src="assets/Logo TPDM.png" alt="tpdm"/>
                            <div class="text-gray-700">
                                <div class="text-base font-normal"><span class="font-medium text-gray-900">Tim Penegak Disiplin Masjid (TPDM)</div>
                                <div class="text-sm font-normal">as a "Committe"</div>
                                <span class="inline-flex items-center text-xs font-normal text-gray-500">
                                    <svg aria-hidden="true" class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.083 9h1.946c.089-1.546.383-2.97.837-4.118A6.004 6.004 0 004.083 9zM10 2a8 8 0 100 16 8 8 0 000-16zm0 2c-.076 0-.232.032-.465.262-.238.234-.497.623-.737 1.182-.389.907-.673 2.142-.766 3.556h3.936c-.093-1.414-.377-2.649-.766-3.556-.24-.56-.5-.948-.737-1.182C10.232 4.032 10.076 4 10 4zm3.971 5c-.089-1.546-.383-2.97-.837-4.118A6.004 6.004 0 0115.917 9h-1.946zm-2.003 2H8.032c.093 1.414.377 2.649.766 3.556.24.56.5.948.737 1.182.233.23.389.262.465.262.076 0 .232-.032.465-.262.238-.234.498-.623.737-1.182.389-.907.673-2.142.766-3.556zm1.166 4.118c.454-1.147.748-2.572.837-4.118h1.946a6.004 6.004 0 01-2.783 4.118zm-6.268 0C6.412 13.97 6.118 12.546 6.03 11H4.083a6.004 6.004 0 002.783 4.118z" clip-rule="evenodd"></path></svg>
                                    2014 - 2015
                                </span> 
                            </div>
                        </a>
                    </li>
                </ol>
            </div>

            <div class="ml-[9vw] mr-[9vw] p-5 mb-4 border rounded-lg bg-gray-50 border-gray-700">
                <time class="text-lg font-semibold text-gray-900">JUNIOR HIGH SCHOOL</time>
                <ol class="mt-3 divide-y divider-gray-200 dark:divide-gray-700">
                    <li>
                        <a href="#" class="items-center block p-3 sm:flex hover:bg-gray-200">
                            <img class="w-12 h-12 mb-3 mr-3 rounded-full sm:mb-0" src="assets/Logo DPA.png" alt="tpdm"/>
                            <div class="text-gray-700">
                                <div class="text-base font-normal"><span class="font-medium text-gray-900">Dewan Penggalang Putra (DPA)</div>
                                <div class="text-sm font-normal">as a "Committe"</div>
                                <span class="inline-flex items-center text-xs font-normal text-gray-500">
                                    <svg aria-hidden="true" class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.083 9h1.946c.089-1.546.383-2.97.837-4.118A6.004 6.004 0 004.083 9zM10 2a8 8 0 100 16 8 8 0 000-16zm0 2c-.076 0-.232.032-.465.262-.238.234-.497.623-.737 1.182-.389.907-.673 2.142-.766 3.556h3.936c-.093-1.414-.377-2.649-.766-3.556-.24-.56-.5-.948-.737-1.182C10.232 4.032 10.076 4 10 4zm3.971 5c-.089-1.546-.383-2.97-.837-4.118A6.004 6.004 0 0115.917 9h-1.946zm-2.003 2H8.032c.093 1.414.377 2.649.766 3.556.24.56.5.948.737 1.182.233.23.389.262.465.262.076 0 .232-.032.465-.262.238-.234.498-.623.737-1.182.389-.907.673-2.142.766-3.556zm1.166 4.118c.454-1.147.748-2.572.837-4.118h1.946a6.004 6.004 0 01-2.783 4.118zm-6.268 0C6.412 13.97 6.118 12.546 6.03 11H4.083a6.004 6.004 0 002.783 4.118z" clip-rule="evenodd"></path></svg>
                                    2015 - 2016
                                </span> 
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="items-center block p-3 sm:flex hover:bg-gray-200">
                            <img class="w-12 h-12 mb-3 mr-3 rounded-full sm:mb-0" src="assets/Logo OSIS.png" alt="tpdm"/>
                            <div class="text-gray-700">
                                <div class="text-base font-normal"><span class="font-medium text-gray-900">Organisasi Siswa Intra Sekolah (OSIS) </div>
                                <div class="text-sm font-normal">as a "Secretary"</div>
                                <span class="inline-flex items-center text-xs font-normal text-gray-500">
                                    <svg aria-hidden="true" class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.083 9h1.946c.089-1.546.383-2.97.837-4.118A6.004 6.004 0 004.083 9zM10 2a8 8 0 100 16 8 8 0 000-16zm0 2c-.076 0-.232.032-.465.262-.238.234-.497.623-.737 1.182-.389.907-.673 2.142-.766 3.556h3.936c-.093-1.414-.377-2.649-.766-3.556-.24-.56-.5-.948-.737-1.182C10.232 4.032 10.076 4 10 4zm3.971 5c-.089-1.546-.383-2.97-.837-4.118A6.004 6.004 0 0115.917 9h-1.946zm-2.003 2H8.032c.093 1.414.377 2.649.766 3.556.24.56.5.948.737 1.182.233.23.389.262.465.262.076 0 .232-.032.465-.262.238-.234.498-.623.737-1.182.389-.907.673-2.142.766-3.556zm1.166 4.118c.454-1.147.748-2.572.837-4.118h1.946a6.004 6.004 0 01-2.783 4.118zm-6.268 0C6.412 13.97 6.118 12.546 6.03 11H4.083a6.004 6.004 0 002.783 4.118z" clip-rule="evenodd"></path></svg>
                                    2016 - 2017
                                </span> 
                            </div>
                        </a>
                    </li>
                </ol>
            </div>

            <div class="ml-[9vw] mr-[9vw] p-5 mb-4 border rounded-lg bg-gray-50 border-gray-700">
                <time class="text-lg font-semibold text-gray-900">SENIOR HIGH SCHOOL</time>
                <ol class="mt-3 divide-y divider-gray-200 dark:divide-gray-700">
                    <li>
                        <a href="#" class="items-center block p-3 sm:flex hover:bg-gray-200">
                            <img class="w-12 h-12 mb-3 mr-3 rounded-full sm:mb-0" src="assets/Logo OSIS.png" alt="tpdm"/>
                            <div class="text-gray-700">
                                <div class="text-base font-normal"><span class="font-medium text-gray-900">Organisasi Siswa Intra Sekolah (OSIS)</div>
                                <div class="text-sm font-normal">as a "Secretary"</div>
                                <span class="inline-flex items-center text-xs font-normal text-gray-500">
                                    <svg aria-hidden="true" class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.083 9h1.946c.089-1.546.383-2.97.837-4.118A6.004 6.004 0 004.083 9zM10 2a8 8 0 100 16 8 8 0 000-16zm0 2c-.076 0-.232.032-.465.262-.238.234-.497.623-.737 1.182-.389.907-.673 2.142-.766 3.556h3.936c-.093-1.414-.377-2.649-.766-3.556-.24-.56-.5-.948-.737-1.182C10.232 4.032 10.076 4 10 4zm3.971 5c-.089-1.546-.383-2.97-.837-4.118A6.004 6.004 0 0115.917 9h-1.946zm-2.003 2H8.032c.093 1.414.377 2.649.766 3.556.24.56.5.948.737 1.182.233.23.389.262.465.262.076 0 .232-.032.465-.262.238-.234.498-.623.737-1.182.389-.907.673-2.142.766-3.556zm1.166 4.118c.454-1.147.748-2.572.837-4.118h1.946a6.004 6.004 0 01-2.783 4.118zm-6.268 0C6.412 13.97 6.118 12.546 6.03 11H4.083a6.004 6.004 0 002.783 4.118z" clip-rule="evenodd"></path></svg>
                                    2018 - 2019
                                </span> 
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="items-center block p-3 sm:flex hover:bg-gray-200">
                            <img class="w-12 h-12 mb-3 mr-3 rounded-full sm:mb-0" src="assets/Logo OSIS.png" alt="tpdm"/>
                            <div class="text-gray-700">
                                <div class="text-base font-normal"><span class="font-medium text-gray-900">Organisasi Siswa Intra Sekolah (OSIS) </div>
                                <div class="text-sm font-normal">as a "Leader"</div>
                                <span class="inline-flex items-center text-xs font-normal text-gray-500">
                                    <svg aria-hidden="true" class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.083 9h1.946c.089-1.546.383-2.97.837-4.118A6.004 6.004 0 004.083 9zM10 2a8 8 0 100 16 8 8 0 000-16zm0 2c-.076 0-.232.032-.465.262-.238.234-.497.623-.737 1.182-.389.907-.673 2.142-.766 3.556h3.936c-.093-1.414-.377-2.649-.766-3.556-.24-.56-.5-.948-.737-1.182C10.232 4.032 10.076 4 10 4zm3.971 5c-.089-1.546-.383-2.97-.837-4.118A6.004 6.004 0 0115.917 9h-1.946zm-2.003 2H8.032c.093 1.414.377 2.649.766 3.556.24.56.5.948.737 1.182.233.23.389.262.465.262.076 0 .232-.032.465-.262.238-.234.498-.623.737-1.182.389-.907.673-2.142.766-3.556zm1.166 4.118c.454-1.147.748-2.572.837-4.118h1.946a6.004 6.004 0 01-2.783 4.118zm-6.268 0C6.412 13.97 6.118 12.546 6.03 11H4.083a6.004 6.004 0 002.783 4.118z" clip-rule="evenodd"></path></svg>
                                    2019 - 2020
                                </span> 
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="items-center block p-3 sm:flex hover:bg-gray-200">
                            <img class="w-12 h-12 mb-3 mr-3 rounded-full sm:mb-0" src="assets/Logo FPODS.png" alt="tpdm"/>
                            <div class="text-gray-700">
                                <div class="text-base font-normal"><span class="font-medium text-gray-900">Forum Pengurus OSIS Dispendik Sidoarjo (FPODS) </div>
                                <div class="text-sm font-normal">as a "Public Relation Division"</div>
                                <span class="inline-flex items-center text-xs font-normal text-gray-500">
                                    <svg aria-hidden="true" class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.083 9h1.946c.089-1.546.383-2.97.837-4.118A6.004 6.004 0 004.083 9zM10 2a8 8 0 100 16 8 8 0 000-16zm0 2c-.076 0-.232.032-.465.262-.238.234-.497.623-.737 1.182-.389.907-.673 2.142-.766 3.556h3.936c-.093-1.414-.377-2.649-.766-3.556-.24-.56-.5-.948-.737-1.182C10.232 4.032 10.076 4 10 4zm3.971 5c-.089-1.546-.383-2.97-.837-4.118A6.004 6.004 0 0115.917 9h-1.946zm-2.003 2H8.032c.093 1.414.377 2.649.766 3.556.24.56.5.948.737 1.182.233.23.389.262.465.262.076 0 .232-.032.465-.262.238-.234.498-.623.737-1.182.389-.907.673-2.142.766-3.556zm1.166 4.118c.454-1.147.748-2.572.837-4.118h1.946a6.004 6.004 0 01-2.783 4.118zm-6.268 0C6.412 13.97 6.118 12.546 6.03 11H4.083a6.004 6.004 0 002.783 4.118z" clip-rule="evenodd"></path></svg>
                                    2020 - 2021
                                </span> 
                            </div>
                        </a>
                    </li>
                </ol>
            </div>

            <div class="ml-[9vw] mr-[9vw] p-5 mb-4 border rounded-lg bg-gray-50 border-gray-700">
                <time class="text-lg font-semibold text-gray-900">UNDERGRADUATE</time>
                <ol class="mt-3 divide-y divider-gray-200 dark:divide-gray-700">
                    <li>
                        <a href="#" class="items-center block p-3 sm:flex hover:bg-gray-200">
                            <img class="w-12 h-12 mb-3 mr-3 rounded-full sm:mb-0" src="assets/Logo Forsima Gold.png" alt="tpdm"/>
                            <div class="text-gray-700">
                                <div class="text-base font-normal"><span class="font-medium text-gray-900"> Forum Silaturahmi Mahasiswa Muslim PPA/PPTI/PPBP BCA (FORSIMA) </div>
                                <div class="text-sm font-normal">as a "Vice Leader"</div>
                                <span class="inline-flex items-center text-xs font-normal text-gray-500">
                                    <svg aria-hidden="true" class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.083 9h1.946c.089-1.546.383-2.97.837-4.118A6.004 6.004 0 004.083 9zM10 2a8 8 0 100 16 8 8 0 000-16zm0 2c-.076 0-.232.032-.465.262-.238.234-.497.623-.737 1.182-.389.907-.673 2.142-.766 3.556h3.936c-.093-1.414-.377-2.649-.766-3.556-.24-.56-.5-.948-.737-1.182C10.232 4.032 10.076 4 10 4zm3.971 5c-.089-1.546-.383-2.97-.837-4.118A6.004 6.004 0 0115.917 9h-1.946zm-2.003 2H8.032c.093 1.414.377 2.649.766 3.556.24.56.5.948.737 1.182.233.23.389.262.465.262.076 0 .232-.032.465-.262.238-.234.498-.623.737-1.182.389-.907.673-2.142.766-3.556zm1.166 4.118c.454-1.147.748-2.572.837-4.118h1.946a6.004 6.004 0 01-2.783 4.118zm-6.268 0C6.412 13.97 6.118 12.546 6.03 11H4.083a6.004 6.004 0 002.783 4.118z" clip-rule="evenodd"></path></svg>
                                    2021 - 2022
                                </span> 
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="items-center block p-3 sm:flex hover:bg-gray-200">
                            <img class="w-12 h-12 mb-3 mr-3 rounded-full sm:mb-0" src="assets/Logo Creative Team.png" alt="tpdm"/>
                            <div class="text-gray-700">
                                <div class="text-base font-normal"><span class="font-medium text-gray-900"> Creative Team RTB </div>
                                <div class="text-sm font-normal">as a "Head of Event Divison"</div>
                                <span class="inline-flex items-center text-xs font-normal text-gray-500">
                                    <svg aria-hidden="true" class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.083 9h1.946c.089-1.546.383-2.97.837-4.118A6.004 6.004 0 004.083 9zM10 2a8 8 0 100 16 8 8 0 000-16zm0 2c-.076 0-.232.032-.465.262-.238.234-.497.623-.737 1.182-.389.907-.673 2.142-.766 3.556h3.936c-.093-1.414-.377-2.649-.766-3.556-.24-.56-.5-.948-.737-1.182C10.232 4.032 10.076 4 10 4zm3.971 5c-.089-1.546-.383-2.97-.837-4.118A6.004 6.004 0 0115.917 9h-1.946zm-2.003 2H8.032c.093 1.414.377 2.649.766 3.556.24.56.5.948.737 1.182.233.23.389.262.465.262.076 0 .232-.032.465-.262.238-.234.498-.623.737-1.182.389-.907.673-2.142.766-3.556zm1.166 4.118c.454-1.147.748-2.572.837-4.118h1.946a6.004 6.004 0 01-2.783 4.118zm-6.268 0C6.412 13.97 6.118 12.546 6.03 11H4.083a6.004 6.004 0 002.783 4.118z" clip-rule="evenodd"></path></svg>
                                    2021 - 2022
                                </span> 
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="items-center block p-3 sm:flex hover:bg-gray-200">
                            <img class="w-12 h-12 mb-3 mr-3 rounded-full sm:mb-0" src="assets/Logo Creative Team.png" alt="tpdm"/>
                            <div class="text-gray-700">
                                <div class="text-base font-normal"><span class="font-medium text-gray-900"> Creative Team RTB </div>
                                <div class="text-sm font-normal">as a "Leader"</div>
                                <span class="inline-flex items-center text-xs font-normal text-gray-500">
                                    <svg aria-hidden="true" class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.083 9h1.946c.089-1.546.383-2.97.837-4.118A6.004 6.004 0 004.083 9zM10 2a8 8 0 100 16 8 8 0 000-16zm0 2c-.076 0-.232.032-.465.262-.238.234-.497.623-.737 1.182-.389.907-.673 2.142-.766 3.556h3.936c-.093-1.414-.377-2.649-.766-3.556-.24-.56-.5-.948-.737-1.182C10.232 4.032 10.076 4 10 4zm3.971 5c-.089-1.546-.383-2.97-.837-4.118A6.004 6.004 0 0115.917 9h-1.946zm-2.003 2H8.032c.093 1.414.377 2.649.766 3.556.24.56.5.948.737 1.182.233.23.389.262.465.262.076 0 .232-.032.465-.262.238-.234.498-.623.737-1.182.389-.907.673-2.142.766-3.556zm1.166 4.118c.454-1.147.748-2.572.837-4.118h1.946a6.004 6.004 0 01-2.783 4.118zm-6.268 0C6.412 13.97 6.118 12.546 6.03 11H4.083a6.004 6.004 0 002.783 4.118z" clip-rule="evenodd"></path></svg>
                                    2022
                                </span> 
                            </div>
                        </a>
                    </li>
                </ol>
            </div>
        </div>
    </section>

    <!-- KOLASE -->

    <section id="kolase" class="">
        <head>
            <script src="https://unpkg.com/tailwindcss-jit-cdn"></script>
        </head>
        <body>
            <div class="h-[35vw] relative">
                <div class="w-96 mx-auto" style="scroll-snap-type: x mandatory;">

                    <!-- first -->
                    <div class="">
                    <input class="sr-only peer" type="radio" name="carousel" id="carousel-1" checked />
                    <!-- content #1 -->
                    <div
                        class="w-96 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white rounded-lg shadow-lg transition-all duration-300 opacity-0 peer-checked:opacity-100 peer-checked:z-10 z-0">
                        <img class="rounded-t-lg w-96 h-64" src="assets/Logo Liga.png" alt="" />
                        <div class="py-4 px-8">
                            <h1 class="hover:cursor-pointer mt-2 text-gray-900 font-bold text-2xl tracking-tight">
                                Lorem ipsum dolor sit amet consectetur adipisicing.
                            </h1>
                            <p class="hover:cursor-pointer py-3 text-gray-600 leading-6">Lorem ipsum dolor, sit amet
                                consectetur adipisicing elit.
                            </p>
                        </div>
                        <!-- controls -->
                        <div class="absolute top-1/2 w-full flex justify-between z-20">
                            <label for="carousel-3" class="inline-block text-red-600 cursor-pointer -translate-x-5 bg-white rounded-full shadow-md active:translate-y-0.5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm.707-10.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L9.414 11H13a1 1 0 100-2H9.414l1.293-1.293z" clip-rule="evenodd" />
                                </svg>
                            </label>
                            <label for="carousel-2" class="inline-block text-red-600 cursor-pointer translate-x-5 bg-white rounded-full shadow-md active:translate-y-0.5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z" clip-rule="evenodd" />
                                </svg>
                            </label>
                        </div>
                    </div>
                    </div>

                    
                    <!-- second -->
                    <div class="">
                    <input class="sr-only peer" type="radio" name="carousel" id="carousel-2" />
                    <!-- content #2 -->
                    <div
                        class="w-96 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white rounded-lg shadow-lg transition-all duration-300 opacity-0 peer-checked:opacity-100 peer-checked:z-10 z-0">
                        <img class="rounded-t-lg w-96 h-64" src="assets/Skills.png" alt="" />
                        <div class="py-4 px-8">
                            <h1 class="hover:cursor-pointer mt-2 text-gray-900 font-bold text-2xl tracking-tight">
                                Scelerisque eleifend donec pretium vulputate sapien.
                            </h1>
                            <p class="hover:cursor-pointer py-3 text-gray-600 leading-6">Egestas diam in arcu cursus euismod
                                quis. Fusce id velit ut tortor. Congue quisque egestas diam in arcu cursus euismod quis.
                            </p>
                        </div>
                        <!-- controls -->
                        <div class="absolute top-1/2 w-full flex justify-between z-20">
                            <label for="carousel-1" class="inline-block text-blue-600 cursor-pointer -translate-x-5 bg-white rounded-full shadow-md active:translate-y-0.5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm.707-10.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L9.414 11H13a1 1 0 100-2H9.414l1.293-1.293z" clip-rule="evenodd" />
                                </svg>
                            </label>
                            <label for="carousel-3" class="inline-block text-blue-600 cursor-pointer translate-x-5 bg-white rounded-full shadow-md active:translate-y-0.5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z" clip-rule="evenodd" />
                                </svg>
                            </label>
                        </div>
                    </div>
                    </div>


                    <!-- three -->
                    <div class="">
                    <input class="sr-only peer" type="radio" name="carousel" id="carousel-3" />
                    <!-- content #3 -->
                    <div
                        class="w-96 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white rounded-lg shadow-lg transition-all duration-300 opacity-0 peer-checked:opacity-100 peer-checked:z-10 z-0">
                        <img class="rounded-t-lg w-96 h-64" src="assets/Logo TPDM.png" alt="" />
                        <div class="py-4 px-8">
                            <h1 class="hover:cursor-pointer mt-2 text-gray-900 font-bold text-2xl tracking-tight">
                                Consectetur purus ut faucibus pulvinar elementum.
                            </h1>
                            <p class="hover:cursor-pointer py-3 text-gray-600 leading-6">Aliquam ultrices sagittis orci a
                                scelerisque purus semper. Quisque id diam vel quam elementum pulvinar. Facilisis magna etiam
                                tempor orci eu lobortis elementum.
                            </p>
                        </div>
                        <!-- controls -->
                        <div class="absolute top-1/2 w-full flex justify-between z-20">
                            <label for="carousel-2" class="inline-block text-yellow-600 cursor-pointer -translate-x-5 bg-white rounded-full shadow-md active:translate-y-0.5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm.707-10.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L9.414 11H13a1 1 0 100-2H9.414l1.293-1.293z" clip-rule="evenodd" />
                                </svg>
                            </label>
                            <label for="carousel-1" class="inline-block text-yellow-600 cursor-pointer translate-x-5 bg-white rounded-full shadow-md active:translate-y-0.5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z" clip-rule="evenodd" />
                                </svg>
                            </label>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </body>
    </section>

    <!-- ACHIEVMENTS -->
 
    <section id="achievements" class="mt-[2vw]">
        <div class="bg-gray-800 text-white py-8">
            <div class="container mx-auto flex flex-col items-start md:flex-row my-12 md:my-24">

                <!-- BAGIAN KIRI -->
                <div class="flex flex-col w-full sticky md:top-36 lg:w-1/3 mt-2 md:mt-12 px-8">
                    <p class="ml-2 text-yellow-300 uppercase tracking-loose">Achievements</p>
                    <p class="text-3xl md:text-4xl leading-normal md:leading-relaxed mb-2">Honors & Awards</p>
                    <p class="text-sm md:text-base text-gray-50 mb-4">
                    All that i have gone through to date, 
                    and many others. I can do everything with the help of my family, teachers. and friends.
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
    
                                    </div>
                            </div>

                            <div class="mb-8 flex justify-between items-center w-full right-timeline">
                                <div class="order-1 w-5/12"></div>
                                <div class="order-1  w-5/12 px-1 py-4 text-left">
                                    <p class="mb-3 text-base text-yellow-300">2016</p>
                                    <h4 class="mb-3 font-bold text-lg md:text-2xl">1st Winner ISTTS Robotic Technology Competition</h4>
                                </div>
                            </div>

                            <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
                                <div class="order-1 w-5/12"></div>
                                <div class="order-1 w-5/12 px-1 py-4 text-right">
                                    <p class="mb-3 text-base text-yellow-300">2016</p>
                                    <h4 class="mb-3 font-bold text-lg md:text-2xl">3rd Winner IT-Smart Computer Electronic Robotic Olympiad</h4>
                                </div>
                            </div>

                            <div class="mb-8 flex justify-between items-center w-full right-timeline">
                                <div class="order-1 w-5/12"></div>

                                <div class="order-1  w-5/12 px-1 py-4">
                                    <p class="mb-3 text-base text-yellow-300">2017</p>
                                    <h4 class="mb-3 font-bold  text-lg md:text-2xl text-left">3rd Winner IT-Smart Computer Electronic Robotic Olympiad</h4>
                                </div>
                            </div>

                            <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
                                <div class="order-1 w-5/12"></div>
                                <div class="order-1 w-5/12 px-1 py-4 text-right">
                                    <p class="mb-3 text-base text-yellow-300">2017</p>
                                    <h4 class="mb-3 font-bold text-lg md:text-2xl">Bronze Medals Wonderfull Indonesia Robot Challenge (Robot Sumo Category)</h4>
                                </div>
                            </div>

                            <div class="mb-8 flex justify-between items-center w-full right-timeline">
                                <div class="order-1 w-5/12"></div>

                                <div class="order-1  w-5/12 px-1 py-4">
                                    <p class="mb-3 text-base text-yellow-300">2017</p>
                                    <h4 class="mb-3 font-bold  text-lg md:text-2xl text-left">Gold Medals Wonderfull Indonesia Robot Challenge (Robot Rescue Category)</h4>
                                </div>
                            </div>

                            <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
                                <div class="order-1 w-5/12"></div>
                                <div class="order-1 w-5/12 px-1 py-4 text-right">
                                    <p class="mb-3 text-base text-yellow-300">2018</p>
                                    <h4 class="mb-3 font-bold text-lg md:text-2xl">Bronze Medal International Islamic School Robot Olympiad</h4>
                                </div>
                            </div>

                            <div class="mb-8 flex justify-between items-center w-full right-timeline">
                                <div class="order-1 w-5/12"></div>

                                <div class="order-1  w-5/12 px-1 py-4">
                                    <p class="mb-3 text-base text-yellow-300">2018</p>
                                    <h4 class="mb-3 font-bold  text-lg md:text-2xl text-left">Top Ten Silver UBS YouthCon Digital Idea</h4>
                                </div>
                            </div>

                            <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
                                <div class="order-1 w-5/12"></div>
                                <div class="order-1 w-5/12 px-1 py-4 text-right">
                                    <p class="mb-3 text-base text-yellow-300">2019</p>
                                    <h4 class="mb-3 font-bold text-lg md:text-2xl">Top Ten Silver UBS YouthCon Digital Idea</h4>
                                </div>
                            </div>

                        </div>

                        <img class="mx-auto" src="https://user-images.githubusercontent.com/54521023/116968861-ef21a000-acd2-11eb-95ac-a34b5b490265.png" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->

    <section id="footer" class="bg-gray-800  text-white py-8">    
        <footer class="footer footer-center bg-base-300 text-base-content self-center">
            <div class="text-center">
                <p>Copyright © 2023 - Nandatama Bagus Adisaka</p>
            </div>
        </footer>
    </section>    

</body>
</html>