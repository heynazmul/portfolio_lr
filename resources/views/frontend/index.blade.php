<!doctype html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/app.css" rel="stylesheet">
    </head>
    <body class="bg-black-100 font-inter">
        <header>
            <div class="relative hidden lg:block">
                <div class="text-white bg-green-500 p-5 rounded-lg flex justify-end">
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
                </div>
                <div class="fixed inset-y-auto right-16 top-[25%]">
                    <ul class="border border-white rounded-full p-5  space-y-5  text-white">
                        <li>
                            <a href="#" class="" >
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"></path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="" >
                                <svg  viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                                    <path d="M3 22H21C21 17.5817 16.9706 14 12 14C7.02944 14 3 17.5817 3 22Z" stroke="currentcolor" stroke-width="1.5"/>
                                    <path d="M16.5 6.5C16.5 8.98528 14.4853 11 12 11C9.51472 11 7.5 8.98528 7.5 6.5C7.5 4.01472 9.51472 2 12 2C14.4853 2 16.5 4.01472 16.5 6.5Z" stroke="currentcolor" stroke-width="1.5"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="" >
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14 12H10V14C10 15.1046 10.8954 16 12 16C13.1046 16 14 15.1046 14 14V12Z" stroke="currentcolor" stroke-width="1.5" stroke-linejoin="round"/>
                                    <path d="M2.5 6V5.25C2.08579 5.25 1.75 5.58579 1.75 6H2.5ZM2.5 11H1.75V11.345L2.01191 11.5694L2.5 11ZM6 14L5.51191 14.5694L5.72256 14.75H6V14ZM21.5 6H22.25C22.25 5.58579 21.9142 5.25 21.5 5.25V6ZM21.5 11L21.9881 11.5694L22.25 11.345V11H21.5ZM18 14V14.75H18.2774L18.4881 14.5694L18 14ZM1.75 6V11H3.25V6H1.75ZM2.01191 11.5694L5.51191 14.5694L6.48809 13.4306L2.98809 10.4306L2.01191 11.5694ZM6 14.75H10V13.25H6V14.75ZM20.75 6V11H22.25V6H20.75ZM21.0119 10.4306L17.5119 13.4306L18.4881 14.5694L21.9881 11.5694L21.0119 10.4306ZM18 13.25H14V14.75H18V13.25ZM2.5 6.75H21.5V5.25H2.5V6.75Z" fill="currentcolor"/>
                                    <path d="M3.5 12V21.5H20.5V12" stroke="currentcolor" stroke-width="1.5" stroke-linejoin="round"/>
                                    <path d="M15.5 6V2.5H8.5V6" stroke="currentcolor" stroke-width="1.5" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="" >
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="" >
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.6171 4.76655C15.6275 3.16588 16.1327 2.36554 16.7947 2.12444C17.2503 1.95852 17.7497 1.95852 18.2053 2.12444C18.8673 2.36554 19.3725 3.16588 20.3829 4.76655C21.5202 6.56824 22.0889 7.46908 21.9887 8.21239C21.92 8.72222 21.6634 9.18799 21.2693 9.51835C20.6947 10 19.6298 10 17.5 10C15.3702 10 14.3053 10 13.7307 9.51835C13.3366 9.18799 13.08 8.72222 13.0113 8.21239C12.9111 7.46908 13.4798 6.56824 14.6171 4.76655Z" stroke="currentcolor" stroke-width="1.5" stroke-linejoin="round"/>
                                    <path d="M2 6C2 4.33345 2 3.50018 2.42441 2.91603C2.56147 2.72738 2.72738 2.56147 2.91603 2.42441C3.50018 2 4.33345 2 6 2C7.66655 2 8.49982 2 9.08397 2.42441C9.27262 2.56147 9.43853 2.72738 9.57559 2.91603C10 3.50018 10 4.33345 10 6C10 7.66655 10 8.49982 9.57559 9.08397C9.43853 9.27262 9.27262 9.43853 9.08397 9.57559C8.49982 10 7.66655 10 6 10C4.33345 10 3.50018 10 2.91603 9.57559C2.72738 9.43853 2.56147 9.27262 2.42441 9.08397C2 8.49982 2 7.66655 2 6Z" stroke="currentcolor" stroke-width="1.5" stroke-linejoin="round"/>
                                    <circle cx="17.5" cy="18" r="4" stroke="currentcolor" stroke-width="1.5" stroke-linejoin="round"/>
                                    <path d="M9.49994 14.5L2.5 21.5M2.50006 14.5L9.5 21.5" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="" >
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 18C2 16.4596 2 15.6893 2.34673 15.1235C2.54074 14.8069 2.80693 14.5407 3.12353 14.3467C3.68934 14 4.45956 14 6 14C7.54044 14 8.31066 14 8.87647 14.3467C9.19307 14.5407 9.45926 14.8069 9.65327 15.1235C10 15.6893 10 16.4596 10 18C10 19.5404 10 20.3107 9.65327 20.8765C9.45926 21.1931 9.19307 21.4593 8.87647 21.6533C8.31066 22 7.54044 22 6 22C4.45956 22 3.68934 22 3.12353 21.6533C2.80693 21.4593 2.54074 21.1931 2.34673 20.8765C2 20.3107 2 19.5404 2 18Z" stroke="currentcolor" stroke-width="1.5"/>
                                    <path d="M14 18C14 16.4596 14 15.6893 14.3467 15.1235C14.5407 14.8069 14.8069 14.5407 15.1235 14.3467C15.6893 14 16.4596 14 18 14C19.5404 14 20.3107 14 20.8765 14.3467C21.1931 14.5407 21.4593 14.8069 21.6533 15.1235C22 15.6893 22 16.4596 22 18C22 19.5404 22 20.3107 21.6533 20.8765C21.4593 21.1931 21.1931 21.4593 20.8765 21.6533C20.3107 22 19.5404 22 18 22C16.4596 22 15.6893 22 15.1235 21.6533C14.8069 21.4593 14.5407 21.1931 14.3467 20.8765C14 20.3107 14 19.5404 14 18Z" stroke="currentcolor" stroke-width="1.5"/>
                                    <path d="M2 6C2 4.45956 2 3.68934 2.34673 3.12353C2.54074 2.80693 2.80693 2.54074 3.12353 2.34673C3.68934 2 4.45956 2 6 2C7.54044 2 8.31066 2 8.87647 2.34673C9.19307 2.54074 9.45926 2.80693 9.65327 3.12353C10 3.68934 10 4.45956 10 6C10 7.54044 10 8.31066 9.65327 8.87647C9.45926 9.19307 9.19307 9.45926 8.87647 9.65327C8.31066 10 7.54044 10 6 10C4.45956 10 3.68934 10 3.12353 9.65327C2.80693 9.45926 2.54074 9.19307 2.34673 8.87647C2 8.31066 2 7.54044 2 6Z" stroke="currentcolor" stroke-width="1.5"/>
                                    <path d="M14 6C14 4.45956 14 3.68934 14.3467 3.12353C14.5407 2.80693 14.8069 2.54074 15.1235 2.34673C15.6893 2 16.4596 2 18 2C19.5404 2 20.3107 2 20.8765 2.34673C21.1931 2.54074 21.4593 2.80693 21.6533 3.12353C22 3.68934 22 4.45956 22 6C22 7.54044 22 8.31066 21.6533 8.87647C21.4593 9.19307 21.1931 9.45926 20.8765 9.65327C20.3107 10 19.5404 10 18 10C16.4596 10 15.6893 10 15.1235 9.65327C14.8069 9.45926 14.5407 9.19307 14.3467 8.87647C14 8.31066 14 7.54044 14 6Z" stroke="currentcolor" stroke-width="1.5"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="" >
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22 11.5667C22 16.8499 17.5222 21.1334 12 21.1334C11.3507 21.1343 10.7032 21.0742 10.0654 20.9545C9.60633 20.8682 9.37678 20.8251 9.21653 20.8496C9.05627 20.8741 8.82918 20.9948 8.37499 21.2364C7.09014 21.9197 5.59195 22.161 4.15111 21.893C4.69874 21.2194 5.07275 20.4112 5.23778 19.5448C5.33778 19.0148 5.09 18.5 4.71889 18.1231C3.03333 16.4115 2 14.1051 2 11.5667C2 6.28357 6.47778 2 12 2C17.5222 2 22 6.28357 22 11.5667Z" stroke="currentcolor" stroke-width="1.5" stroke-linejoin="round"/>
                                    <path d="M11.9955 12H12.0045M15.991 12H16M8 12H8.00897" stroke="currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>  
                            </a>
                        </li>
                        <li>
                            <a href="#" class="" >
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 3.5H22V20.5H2V3.5Z" stroke="currentcolor" stroke-width="1.5" stroke-linejoin="round"/>
                                    <path d="M6 8L12 12L18 8" stroke="currentcolor" stroke-width="1.5"/>
                                 </svg>
                            </a>
                        </li>
                    </ul>
                 </div> 
            </div>
        </header>
        <main>
            <div class="grid  grid-cols-12  mx-auto max-w-screen-2xl gap-y-14 justify-center">
                  <!--My self-->
                <div class="col-span-full lg:col-span-3 px-5 ">
                    <section class="relative">
                        <div class="lg:fixed w-full lg:w-[350px] mx-auto">
                            <div class="border border-gray duration-300 hover:border-green rounded-3xl text-white text-center relative">
                                <span class="animate-spin z-10 bg-black-100 absolute p-2 rounded-full -left-6 top-10">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </span>
                                <div class="p-5 space-y-6">
                                    <div class="">
                                        <p class="shrink-0 text-2xl font-semibold ">{{ Auth::user()->name ?? '' }}</p>
                                        <p> Front-end Designer & Develper</p>
                                    </div>
                                    <div class="px-5 space-y-4 lg:text-xl flex-col justify-center">
                                        <img class="rounded-3xl" src="{{ asset('assets/nazmul.gif') }}" alt="">
                                        <p class="break-words lg:break-normal">{{ Auth::user()->email ?? '' }}</p>
                                        <p>Dhaka, Bangladesh</p>
                                        <p class="text-gray text-xs">© 2022 Nazmul. All Rights Reserved</p>
                                        <!--Social links-->
                                        <div>
                                            <ul class="flex justify-center items-center gap-5 ">
                                                <li class="group">
                                                    <a href="#" class="border-2 border-gray h-[50px] w-[50px]   group-hover:border-green rounded-full flex justify-center items-center duration-500" >
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512" fill="currentcolor"  class="text-gray group-hover:text-green duration-500"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                            <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/>
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li class="group">
                                                    <a href="#" class="border-2 border-gray h-[50px] w-[50px] group-hover:border-green rounded-full flex justify-center items-center duration-500" >
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" fill="currentcolor" class="text-gray group-hover:text-green duration-500" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg>
                                                    </a>
                                                </li>
                                                <li class="group">
                                                    <a href="#" class="border-2 border-gray h-[50px] w-[50px] group-hover:border-green rounded-full flex justify-center items-center duration-500" >
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512" fill="currentcolor" class="text-gray group-hover:text-green duration-500"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/></svg>
                                                    </a>
                                                </li>
                                                <li class="group">
                                                    <a href="#" class="border-2 border-gray h-[50px] w-[50px] group-hover:border-green rounded-full flex justify-center items-center duration-500" >
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 496 512" fill="currentcolor" class="text-gray group-hover:text-green duration-500"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/></svg>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="flex justify-center font-semibold">
                                        <a href="#" class=" w-64 flex items-center h-10 rounded-full bg-green hover:bg-black-100 border-2 border-green text-center p-2 text-black  gap-2 py-5 px-5 hover:text-green duration-500 text-black-100 justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" fill="currentcolor" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z"/></svg>
                                            Hire Me!
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-span-full lg:col-span-8 px-20 relative">
                    <!--INTRODUCE-->
                    <section class="pb-14 px-10">
                          <div class="space-y-16">
                            <div class="border border-gray px-6 hover:border-green duration-300 py-3 rounded-full inline-flex gap-2 text-white items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                </svg>
                                <span class="text-xs">INTRODUCE</span>
                            </div>
                                <p class="text-6xl text-white leading-[80px] ">Say Hi from <span class="text-green">Nazmul</span>, Webflow Designer and Developer</p>
                                <p class="text-gray leading-10">I design and code beautifully simple things and i love what i do.<br> Just simple like that!</p>
                                <div class="flex justify-end">
                                    <a href="#" class="relative  rounded-full inline-flex border  border-gray h-44 w-44 p-4">
                                        <img h-full w-full class="h-full w-full animate-spin" src="{{asset('assets/round-text.png')}}" alt="round-text" style="animation-duration: 10s;">
                                        <div class="absolute bottom-16 right-[72px] text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-10">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5L12 21m0 0l-7.5-7.5M12 21V3" />
                                            </svg>
                                            
                                        </div>
                                    </a>
                                </div>
                                <div class="flex gap-14 text-xs">
                                    <div class="space-y-3">
                                        <p class="text-green text-7xl">2+</p>
                                        <p class="text-gray leading-6">YEARS OF <br> EXPERIENCE</p>
                                    </div>
                                    <div class="space-y-3">
                                        <p class="text-green text-7xl">12+</p>
                                        <p class="text-gray leading-6">PROJECTS COMPLETED ON <br> 15 COUNTRIES</p>
                                    </div>
                                </div>
                            </div>
                    </section>
                    <!--About-->
                    <section class="py-16 space-y-10 px-10">
                        <div class="border border-gray px-6 hover:border-green duration-300 py-3 rounded-full inline-flex gap-2 text-white items-center">
                            <svg  viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4">
                                <path d="M3 22H21C21 17.5817 16.9706 14 12 14C7.02944 14 3 17.5817 3 22Z" stroke="currentcolor" stroke-width="1.5"/>
                                <path d="M16.5 6.5C16.5 8.98528 14.4853 11 12 11C9.51472 11 7.5 8.98528 7.5 6.5C7.5 4.01472 9.51472 2 12 2C14.4853 2 16.5 4.01472 16.5 6.5Z" stroke="currentcolor" stroke-width="1.5"/>
                            </svg>
                            <span class="text-xs">About</span>
                        </div>
                        <div class="text-white space-y-5">
                            @foreach($abouts as $about)
                            <p class="text-5xl leading-[80px]">{{$about->title}} <span class="text-green">{{$about->focus_title}}</span></p> 

                            <p class="text-gray leading-8">{{$about->description}}</p>
                            @endforeach                        
                        </div>
                    </section>
                    <!--RESUME-->
                    <section class="py-16 space-y-10 px-10">
                        <div class="py-16 space-y-10">
                            <div class="border border-gray px-6 hover:border-green duration-300 py-3 rounded-full inline-flex gap-2 text-white items-center">
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14 12H10V14C10 15.1046 10.8954 16 12 16C13.1046 16 14 15.1046 14 14V12Z" stroke="currentcolor" stroke-width="1.5" stroke-linejoin="round"></path>
                                    <path d="M2.5 6V5.25C2.08579 5.25 1.75 5.58579 1.75 6H2.5ZM2.5 11H1.75V11.345L2.01191 11.5694L2.5 11ZM6 14L5.51191 14.5694L5.72256 14.75H6V14ZM21.5 6H22.25C22.25 5.58579 21.9142 5.25 21.5 5.25V6ZM21.5 11L21.9881 11.5694L22.25 11.345V11H21.5ZM18 14V14.75H18.2774L18.4881 14.5694L18 14ZM1.75 6V11H3.25V6H1.75ZM2.01191 11.5694L5.51191 14.5694L6.48809 13.4306L2.98809 10.4306L2.01191 11.5694ZM6 14.75H10V13.25H6V14.75ZM20.75 6V11H22.25V6H20.75ZM21.0119 10.4306L17.5119 13.4306L18.4881 14.5694L21.9881 11.5694L21.0119 10.4306ZM18 13.25H14V14.75H18V13.25ZM2.5 6.75H21.5V5.25H2.5V6.75Z" fill="currentcolor"></path>
                                    <path d="M3.5 12V21.5H20.5V12" stroke="currentcolor" stroke-width="1.5" stroke-linejoin="round"></path>
                                    <path d="M15.5 6V2.5H8.5V6" stroke="currentcolor" stroke-width="1.5" stroke-linejoin="round"></path>
                                </svg>
                                <span class="text-xs">RESUME</span>
                            </div>
                            <p class="text-white text-5xl">Education & <span class="text-green">Experience</span></p>
                            <div>
                                <div class="relative">
                                    <div class="before:absolute before:content-[''] before:h-full before:w-[1px] before:bg-gray  group space-y-10">
                                        <span class="after:absolute after:after:-[''] after:p-[6px] after:-left-[6px] after:bg-gray after:rounded-full after:group-hover:bg-green" ></span>
                                        <div class="pl-16 space-y-5">
                                            <P class="group-hover:text-green text-gray leading-[0.75]">2020 - Present</P>
                                            <div>
                                                <P class="text-2xl text-white">Framer Desinger & Developer</P>
                                                <p class="text-gray">Brunodee Agency</p>
                                            </div>
                                            <div>
                                                <P class="text-2xl text-white">Front-End WordPress Developer</P>
                                                <p class="text-gray">Brunodee Agency</p>
                                            </div>
                                           
                                        </div>
                                        <div class="pl-16 space-y-5 ">
                                            <span class="after:absolute after:after:-[''] after:p-2 after:-left-2 after:bg-gray after:rounded-full after:group-hover:bg-green" ></span>
                                            <P class="group-hover:text-green text-gray leading-[0.75]">2020 - Present</P>
                                            <div>
                                                <P class="text-2xl text-white">Framer Desinger & Developer</P>
                                                <p class="text-gray">Brunodee Agency</p>
                                            </div>
                                            <div>
                                                <P class="text-2xl text-white">Front-End WordPress Developer</P>
                                                <p class="text-gray">Brunodee Agency</p>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--SERVICES-->
                    <section class="py-16 px-10">
                        <div class="py-16 space-y-10">
                            <div class="border border-gray px-6 hover:border-green duration-300 py-3 rounded-full inline-flex gap-2 text-white items-center">
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25"></path>
                                </svg>
                                <span class="text-xs">SERVICES</span>
                            </div>
                            <p class="text-white text-5xl">My <span class="text-green">Specializations</span></p>
                            <div class=" grid lg:grid-cols-1  md:grid-cols-3">
                                <div class="group">
                                    <div class="w-full border border-white group-hover:border-green duration-300 p-14 rounded-2xl space-y-6">
                                        <div class="flex justify-between">
                                            <div class="space-y-3">
                                                <p class="text-2xl text-white">Website Design</p>
                                                <p class="text-gray" >I created digital products with unique ideas use Figma & Framer</p>
                                            </div>
                                            <svg class="w-10 h-10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 14L17.5 18.5M12 14L6.5 18.5M12 14V7" stroke="#28C949" stroke-width="1.5"/>
                                                <path d="M10.3914 3.69046C11.1054 2.56349 11.4624 2 12 2C12.5376 2 12.8946 2.56349 13.6086 3.69046L14.1215 4.49995C14.8259 5.6118 15.1781 6.16772 14.9104 6.58386C14.6426 7 13.9327 7 12.5129 7H11.4871C10.0673 7 9.35739 7 9.08963 6.58386C8.82188 6.16772 9.17409 5.6118 9.87852 4.49995L10.3914 3.69046Z" stroke="#28C949" stroke-width="1.5"/>
                                                <path d="M21.2324 19.1408C21.8559 20.3502 22.1676 20.9548 21.9085 21.4249C21.6494 21.8949 20.9936 21.9144 19.6819 21.9536L18.7398 21.9817C17.4457 22.0203 16.7987 22.0396 16.5705 21.5895C16.3422 21.1393 16.6843 20.5186 17.3686 19.2773L17.8629 18.3805C18.5471 17.1391 18.8893 16.5184 19.3756 16.5004C19.8619 16.4824 20.1694 17.0789 20.7846 18.2721L21.2324 19.1408Z" stroke="#28C949" stroke-width="1.5"/>
                                                <path d="M2.76761 19.1408C2.14414 20.3502 1.8324 20.9548 2.09148 21.4249C2.35055 21.8949 3.00639 21.9144 4.31805 21.9536L5.26021 21.9817C6.55427 22.0203 7.20131 22.0396 7.42955 21.5895C7.65779 21.1393 7.31567 20.5186 6.63143 19.2773L6.13711 18.3805C5.45286 17.1391 5.11074 16.5184 4.62443 16.5004C4.13811 16.4824 3.83055 17.0789 3.21545 18.2721L2.76761 19.1408Z" stroke="#28C949" stroke-width="1.5"/>
                                                </svg>
                                                
                                        </div>
                                        <p class="group-hover:underline text-white">126 PROJECTS</p>
                                    </div>
                                </div>
                                <div class="group">
                                    <div class="w-full border border-white group-hover:border-green duration-300 p-14 rounded-2xl space-y-6">
                                        <div class="flex justify-between">
                                            <div class="space-y-3">
                                                <p class="text-2xl text-white">Development</p>
                                                <p class="text-gray" >I build website go live with Framer, Webflow or WordPress</p>
                                            </div>
                                            <svg class="w-10 h-10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M17 8L20 11.5L17 15" stroke="#28C949" stroke-width="2"/>
                                                <path d="M7 8L4 11.5L7 15" stroke="#28C949" stroke-width="2"/>
                                                <path d="M14.5 4L9.5 20" stroke="#28C949" stroke-width="2" stroke-linejoin="round"/>
                                            </svg> 
                                        </div>
                                        <p class="group-hover:underline text-white">126 PROJECTS</p>
                                    </div>
                                </div>
                                <div class="group">
                                    <div class="w-full border border-white group-hover:border-green duration-300 p-14 rounded-2xl space-y-6">
                                        <div class="flex justify-between">
                                            <div class="space-y-3">
                                                <p class="text-2xl text-white">SEO/Marketing</p>
                                                <p class="text-gray" >Increase the traffic for your website with SEO optimized</p>
                                            </div>
                                            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke="#28C949" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                                            </svg> 
                                        </div>
                                        <p class="group-hover:underline text-white">126 PROJECTS</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--skills-->
                    <section class="py-16">
                        <div class=" space-y-10">
                            <div class="border border-gray px-6 hover:border-green duration-300 py-3 rounded-full inline-flex gap-2 text-white items-center">
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.6171 4.76655C15.6275 3.16588 16.1327 2.36554 16.7947 2.12444C17.2503 1.95852 17.7497 1.95852 18.2053 2.12444C18.8673 2.36554 19.3725 3.16588 20.3829 4.76655C21.5202 6.56824 22.0889 7.46908 21.9887 8.21239C21.92 8.72222 21.6634 9.18799 21.2693 9.51835C20.6947 10 19.6298 10 17.5 10C15.3702 10 14.3053 10 13.7307 9.51835C13.3366 9.18799 13.08 8.72222 13.0113 8.21239C12.9111 7.46908 13.4798 6.56824 14.6171 4.76655Z" stroke="currentcolor" stroke-width="1.5" stroke-linejoin="round"></path>
                                    <path d="M2 6C2 4.33345 2 3.50018 2.42441 2.91603C2.56147 2.72738 2.72738 2.56147 2.91603 2.42441C3.50018 2 4.33345 2 6 2C7.66655 2 8.49982 2 9.08397 2.42441C9.27262 2.56147 9.43853 2.72738 9.57559 2.91603C10 3.50018 10 4.33345 10 6C10 7.66655 10 8.49982 9.57559 9.08397C9.43853 9.27262 9.27262 9.43853 9.08397 9.57559C8.49982 10 7.66655 10 6 10C4.33345 10 3.50018 10 2.91603 9.57559C2.72738 9.43853 2.56147 9.27262 2.42441 9.08397C2 8.49982 2 7.66655 2 6Z" stroke="currentcolor" stroke-width="1.5" stroke-linejoin="round"></path>
                                    <circle cx="17.5" cy="18" r="4" stroke="currentcolor" stroke-width="1.5" stroke-linejoin="round"></circle>
                                    <path d="M9.49994 14.5L2.5 21.5M2.50006 14.5L9.5 21.5" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                <span class="text-xs">MY SKILLS
                                </span>
                            </div>
                            <p class="text-white text-5xl">My <span class="text-green">Advantages</span></p>
                            <div class="grid grid-cols-2 lg:grid-cols-4 gap-5 justify-center">
                                <div class="space-y-4 ">
                                    <div href="#" class="border-[2px]  border-gray h-[231px] lg:w-[174.5px] md:w-full hover:border-green rounded-full flex flex-col justify-center items-center duration-500">
                                       <img src="{{ asset('assets/figma.png') }}" alt="figma">
                                        <p class="text-3xl pt-5 text-green">92%</p>
                                    </div>
                                    <p class="text-center text-white">Figma</p>
                                </div>
                                <div class="space-y-4 ">
                                    <div href="#" class="border-[2px]  border-gray h-[231px] lg:w-[174.5px] md:w-full hover:border-green rounded-full flex flex-col justify-center items-center duration-500">
                                       <img src="{{ asset('assets/figma.png') }}" alt="figma">
                                        <p class="text-3xl pt-5 text-green">92%</p>
                                    </div>
                                    <p class="text-center text-white">Figma</p>
                                </div>
                                <div class="space-y-4 ">
                                    <div href="#" class="border-[2px]  border-gray h-[231px] lg:w-[174.5px] md:w-full hover:border-green rounded-full flex flex-col justify-center items-center duration-500">
                                       <img src="{{ asset('assets/figma.png') }}" alt="figma">
                                        <p class="text-3xl pt-5 text-green">92%</p>
                                    </div>
                                    <p class="text-center text-white">Figma</p>
                                </div>
                                <div class="space-y-4 ">
                                    <div href="#" class="border-[2px]  border-gray h-[231px] lg:w-[174.5px] md:w-full hover:border-green rounded-full flex flex-col justify-center items-center duration-500">
                                       <img src="{{ asset('assets/figma.png') }}" alt="figma">
                                        <p class="text-3xl pt-5 text-green">92%</p>
                                    </div>
                                    <p class="text-center text-white">Figma</p>
                                </div>
                                <div class="space-y-4 ">
                                    <div href="#" class="border-[2px]  border-gray h-[231px] lg:w-[174.5px] md:w-full hover:border-green rounded-full flex flex-col justify-center items-center duration-500">
                                       <img src="{{ asset('assets/figma.png') }}" alt="figma">
                                        <p class="text-3xl pt-5 text-green">92%</p>
                                    </div>
                                    <p class="text-center text-white">Figma</p>
                                </div>
                                <div class="space-y-4 ">
                                    <div href="#" class="border-[2px]  border-gray h-[231px] lg:w-[174.5px] md:w-full hover:border-green rounded-full flex flex-col justify-center items-center duration-500">
                                       <img src="{{ asset('assets/figma.png') }}" alt="figma">
                                        <p class="text-3xl pt-5 text-green">92%</p>
                                    </div>
                                    <p class="text-center text-white">Figma</p>
                                </div>
                            </div>
                        </div>    
                    </section>
                    <!---->
                    <section>
                        <div class="wave-group relative">
                            <input required="" type="text" class="input text-base px-1.5 py-4 block w-full border-b-2 border-gray-400 bg-transparent focus:outline-none">
                            <span class="bar relative block w-full before:content-[''] before:absolute before:left-1/2 before:h-0.5 before:w-0 before:bottom-0 before:bg-green-700 before:duration-300 after:content-[''] after:absolute after:h-0.5 after:w-0 after:bottom-0 after:bg-green-700 after:duration-300 after:right-1/2 "></span>
                          <label class="label absolute flex text-lg top-2.5 space-x-[1px]">
                            <span class="label-char text-sm" style="--index: 0">N</span>
                            <span class="label-char text-sm" style="--index: 1">a</span>
                            <span class="label-char text-sm" style="--index: 2">m</span>
                            <span class="label-char text-sm" style="--index: 3">e</span>
                          </label>
                        </div>
                    </section>
                </div>
            </div>
        </main>
    </body>
</html>
