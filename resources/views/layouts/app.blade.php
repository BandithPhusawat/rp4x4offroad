<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>RP 4x4 OffRoad</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>   
        <nav class=" bg-colorSystem p-4 text-white">
            <div class="flex justify-between">
                <div class="flex">
                    <a href="mailto:chokphong@gmail.com"><i class="fa-regular fa-envelope p-2"></i> chokphong@gmail.com</a>
                    <p class="p-1 pl-4">|</p>
                    <p class="p-2 text-sm"><i class="fa-solid fa-phone"></i> 062-1285874 , 096-3544996 , 096-3261416</p>
                </div>
                <div class="flex">
                    <p class="p-2 text-sm"><i class="fa-regular fa-user"></i> <a href="/login" class="p-2">Login</a></p>
                    <p class="p-2 text-sm"><i class="fa-regular fa-user"></i> <a href="/register" class="p-2">Register</a></p>
                    <p class="p-2 text-sm">Follow Us</p>
                    <a href="https://www.facebook.com/Rp4x4Offroad" target="_blank" class="p-2"><i class="fa-brands fa-square-facebook"></i></a>
                    <a href="https://line.me/ti/p/_ejB5LfAvK" target="_blank" class="p-2"><i class="fa-brands fa-line"></i></a>
                </div>
            </div>
            
        </nav>
        <nav class="bg-white">
            <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 py-5">
                <div class="relative flex h-16 items-center justify-between">
                    <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                        
                        <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                            <span class="absolute -inset-0.5"></span>
                            <span class="sr-only">Open main menu</span>
                            
                            <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                        
                            <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-between">
                        <div class="flex flex-shrink-0 items-center">
                            <img class="h-20 absolute w-auto" src="/icons/logopng.png" alt="RP4x4-Icon">
                        </div>
                        <div class="hidden sm:ml-6 sm:block">
                            <div class="flex space-x-4 p-2">
                                <a href="#" class="text-gray-700 hover:text-gray-700 rounded-md px-3 py-2 text-xl font-medium" aria-current="page">หน้าแรก</a>
                                <a href="#" class="text-gray-300 hover:text-gray-700 rounded-md px-3 py-2 text-xl font-medium">หมวดสินค้า</a>
                                <a href="#" class="text-gray-300 hover:text-gray-700 rounded-md px-3 py-2 text-xl font-medium">เกี่ยวกับ</a>
                                <a href="#" class="text-gray-300 hover:text-gray-700 rounded-md px-3 py-2 text-xl font-medium">แจ้งชำระเงิน</a>
                                <a href="#" class="text-gray-300 hover:text-gray-700 rounded-md px-3 py-2 text-xl font-medium">ข้อมูลูกค้า</a>
                                <a href="#" class="text-gray-300 hover:text-gray-700 rounded-md px-3 py-2 text-xl font-medium"><i class="fa-solid fa-cart-shopping"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="sm:hidden" id="mobile-menu">
              <div class="space-y-1 px-2 pb-3 pt-2">
                <a href="#" class="text-gray-700 hover:text-gray-700 rounded-md px-3 py-2 text-xl font-medium" aria-current="page">หน้าแรก</a>
                <a href="#" class="text-gray-300 hover:text-gray-700 rounded-md px-3 py-2 text-xl font-medium">หมวดสินค้า</a>
                <a href="#" class="text-gray-300 hover:text-gray-700 rounded-md px-3 py-2 text-xl font-medium">เกี่ยวกับ</a>
                <a href="#" class="text-gray-300 hover:text-gray-700 rounded-md px-3 py-2 text-xl font-medium">แจ้งชำระเงิน</a>
                <a href="#" class="text-gray-300 hover:text-gray-700 rounded-md px-3 py-2 text-xl font-medium">ข้อมูลูกค้า</a>
                <a href="#" class="text-gray-300 hover:text-gray-700 rounded-md px-3 py-2 text-xl font-medium"><i class="fa-solid fa-cart-shopping"></i></a>
              </div>
            </div>
        </nav>
        
        <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
            @yield('banner')
        </div>

    </body>
</html>
