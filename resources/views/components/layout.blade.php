<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> {{ $title ?? config('app.name', 'Laravel') }} </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>
<body>
<div id="head" class="flex border-blue-800 border-t-2">
    <div class="w-full">
        <header class="flex bg-white justify-between h-20 border-b border-b-gray-200 items-center px-6">
            <div id="left-header" class="">
                <h1 class="text-white bg-blue-600 rounded mx-2 p-2">
                    <a href="/">Main Page</a>
                </h1>
            </div>
            <div id="right-header" class="text-gray-800 hover:text-gray-600 space-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="w-7 h-7">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
            </div>
        </header>
    </div>
</div>
<div id="content" class="" style="">
    {{ $slot }}
</div>
</body>
</html>
