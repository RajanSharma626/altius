<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.12.1/font/bootstrap-icons.min.css">
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
                <ul class="flex space-x-4 items-center">
                    <li><a href="#" class="text-black ">Dashboard</a></li>
                    <li><a href="#" class="text-black">Holdings</a></li>
                    <li><a href="#" class="text-black">Order Book</a></li>
                    <li><a href="#" class="text-black">Refer and Earn</a></li>
                    <li><a href="#" class="text-black"><i class="bi bi-bell-fill"></i></a></li>
                    <li><a href="#" class="text-black"><i class="bi bi-mortarboard-fill text-xl"></i></a></li>
                    <li><a href="#" class="text-black"><i class="bi bi-person-circle text-2xl"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <nav>
        <p class="text-center py-2 bg-green-300">For any inquiries, please contact your Relationship Manager</p>
    </nav>

    <div class="flex">
        <aside class="w-1/5 h-screen bg-gray-100">
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
                </ul>
            </div>
        </aside>

        <main class="w-3/3 p-4">
            <!-- Main Content -->
            @yield('content')
            <!-- /Main Content -->
        </main>
    </div>

</body>

</html>
