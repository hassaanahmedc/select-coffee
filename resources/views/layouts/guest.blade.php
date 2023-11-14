<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=salsa:400" rel="stylesheet" />
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg_img_body font-sans text-gray-900 antialiased ">
    <div class="bg_img_body_grad  min-h-screen  pt-6 sm:pt-0">
        <div class="flex flex-col items-center mx-auto max-w-[1074px]">
            @include('layouts.custom-navigation')
            <div id="main" class="flex justify-center items-end gap-24">
                <div id="user_menu">
                    <ul class="flex gap-6 text-sm">
                        <li class="hover:text-[#ab814c]">
                            <a href="">Shipping & Returns</a>
                        </li>
                        <li class="hover:text-[#ab814c]">
                            <a href="">Create an Account</a>
                        </li>
                        <li class="text-[#ab814c]">
                            <a href="">Login</a>
                        </li>
                    </ul>
                </div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>

                <div id="cart_currency">
                    <div id="view_cart" class="mb-4 text-base font-bold ">
                        <img src="" alt="">
                        <span class="text-white hover:text-[#ab814c] cursor-pointer">Shopping
                            Cart:<a href=""></a></span>
                    </div>
                    <div id="manage_currency" class="flex flex-col gap-2 text-sm">
                        <span>Select your Currency</span>
                        <select name="currency" id="" class="bg-transparent border border-gray-300 rounded-md p-2">
                            <option value="USD">United States Dollar</option>
                            <option value="CAD">Canadian Dollar</option>
                        </select>
                    </div>
                </div>

            </div>

            @include('layouts.catalog')
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>

        </div>

    </div>
</body>

</html>
