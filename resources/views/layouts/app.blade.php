<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <nav class="bg-gray-200 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Logo -->
            <div class="text-white text-lg font-bold">
                <a href="#"><img
                        src="https://trade.altiusinvestech.com/static/media/logo.a64f96971bd96c977fe749686ab36237.svg"
                        class="h-8 sm:h-10" alt="Logo"></a>
            </div>
            <!-- Menu -->
            <div>
                <ul class="flex space-x-4">
                    <li><a href="#" class="text-black font-bold">Home</a></li>
                    <li><a href="#" class="text-black font-bold">About</a></li>
                    <li><a href="#" class="text-black font-bold">Services</a></li>
                    <li><a href="#" class="text-black font-bold">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <aside class="w-96 h-screen bg-gray-100 fixed">
        <div class="p-4 border-b">
            <!-- Search Box -->
            <input type="text" placeholder="Search..."
                class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="flex justify-between border-b">
            <!-- Tabs -->
            <button
                class="w-1/2 py-2 text-center font-bold text-gray-700 hover:bg-gray-200 focus:outline-none focus:bg-gray-300">All
                Companies</button>
            <button
                class="w-1/2 py-2 text-center font-bold text-gray-700 hover:bg-gray-200 focus:outline-none focus:bg-gray-300">Watchlist</button>
        </div>
        <div class="overflow-y-auto h-[calc(100vh-120px)]">
            <!-- Sidebar Body -->
            <ul class="space-y-2">
                <li class="p-2 bg-white hover:bg-gray-200">Company 1</li>
                <li class="p-2 bg-white hover:bg-gray-200">Company 2</li>
                <li class="p-2 bg-white hover:bg-gray-200">Company 3</li>
                <li class="p-2 bg-white hover:bg-gray-200">Company 4</li>
                <li class="p-2 bg-white hover:bg-gray-200">Company 5</li>
                <li class="p-2 bg-white hover:bg-gray-200">Company 6</li>
                <li class="p-2 bg-white hover:bg-gray-200">Company 7</li>
                <li class="p-2 bg-white hover:bg-gray-200">Company 8</li>
                <li class="p-2 bg-white hover:bg-gray-200">Company 9</li>
                <li class="p-2 bg-white hover:bg-gray-200">Company 10</li>
                <li class="p-2 bg-white hover:bg-gray-200">Company 1</li>
                <li class="p-2 bg-white hover:bg-gray-200">Company 2</li>
                <li class="p-2 bg-white hover:bg-gray-200">Company 3</li>
                <li class="p-2 bg-white hover:bg-gray-200">Company 4</li>
                <li class="p-2 bg-white hover:bg-gray-200">Company 5</li>
                <li class="p-2 bg-white hover:bg-gray-200">Company 6</li>
                <li class="p-2 bg-white hover:bg-gray-200">Company 7</li>
                <li class="p-2 bg-white hover:bg-gray-200">Company 8</li>
                <li class="p-2 bg-white hover:bg-gray-200">Company 9</li>
                <li class="p-2 bg-white hover:bg-gray-200">Company 10</li>
            </ul>
        </div>
    </aside>

    <main>
        <!-- Main Content -->
        @yield('content')
        <!-- /Main Content -->
    </main>

</body>

</html>
