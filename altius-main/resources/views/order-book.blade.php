@extends('layouts.app')

@section('title', 'Order Book')

@section('content')

    <div class="container mx-auto p-4">
        <!-- Header Controls -->
        <div class="flex flex-wrap items-center gap-2 mb-4">
            <!-- Filter Dropdown -->
            <div class="w-48">
                <select class="w-full border border-gray-300 rounded px-3 py-1.5 bg-white">
                    <option>All</option>
                    <option>Unlisted Companies</option>
                    <option>MLDs</option>
                    <option>Government Securities</option>
                    <option>Pre-IPO Basket</option>
                    <option>Startup Investing</option>
                    <option>Earn Fixed 11% with P2P</option>
                    <option>Get high returns with Liquiloans (NDX P2P Pvt Ltd)</option>
                </select>
            </div>

            <!-- Navigation Tabs -->
            <div class="flex border-gray-300 rounded overflow-hidden">
                <button class="px-3 py-1.5 bg-white hover:bg-gray-100 border">Open Orders</button>
                <button class="px-3 py-1.5 bg-blue-500 text-white hover:bg-blue-600 me-2">Executed Orders</button>
                <button class="px-3 py-1.5 bg-green-500 text-white hover:bg-green-600">Buy</button>
                <button class="px-3 py-1.5 bg-white text-red-500 border border-red-500 hover:bg-red-100">Sell</button>
            </div>

            <!-- Search Bar -->
            <div class="flex-grow">
                <input type="text" placeholder="Search Asset/Status"
                    class="w-full border border-gray-300 rounded px-3 py-1.5">
            </div>

            <!-- Export Button -->
            <button class="bg-blue-500 text-white px-3 py-1.5 rounded flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                </svg>
                Export Orders
            </button>
        </div>

        <!-- Company Header -->
        <div class="mb-4">
            <h2 class="text-lg font-bold uppercase">UNLISTED COMPANY</h2>
        </div>

        <!-- Orders Table -->
        <div class="overflow-x-auto">
            <table class="w-full border-collapse">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="border-b border-gray-300 text-left p-2">Order Id/Instrument</th>
                        <th class="border-b border-gray-300 text-left p-2">Date</th>
                        <th class="border-b border-gray-300 text-left p-2">Qty</th>
                        <th class="border-b border-gray-300 text-left p-2">Price/Security</th>
                        <th class="border-b border-gray-300 text-left p-2">Price Status</th>
                        <th class="border-b border-gray-300 text-left p-2"></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Row 1 -->
                    <tr class="hover:bg-gray-50">
                        <td class="border-b border-gray-200 p-2">
                            <div class="font-semibold">31243</div>
                            <div class="text-sm text-gray-600">Kanpur International Airport Ltd (KIAL)</div>
                        </td>
                        <td class="border-b border-gray-200 p-2">17-Feb-2025</td>
                        <td class="border-b border-gray-200 p-2">4,000</td>
                        <td class="border-b border-gray-200 p-2">
                            <div class="flex items-center">
                                <span>₹103.00</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-500 ml-1" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                        </td>
                        <td class="border-b border-gray-200 p-2">
                            <div class="flex items-center">
                                <span>₹5,20,000.00</span>
                                <span class="ml-2 px-2 py-0.5 bg-green-100 text-green-800 text-xs rounded">Completed</span>
                            </div>
                        </td>
                        <td class="border-b border-gray-200 p-2">
                            <button class="bg-blue-500 text-white px-3 py-1 rounded text-sm">Download Invoice</button>
                        </td>
                    </tr>

                    <!-- Row 2 -->
                    <tr class="hover:bg-gray-50">
                        <td class="border-b border-gray-200 p-2">
                            <div class="font-semibold">28910</div>
                            <div class="text-sm text-gray-600">Southern Ispat And Energy Limited</div>
                        </td>
                        <td class="border-b border-gray-200 p-2">13-Dec-2024</td>
                        <td class="border-b border-gray-200 p-2">30,000</td>
                        <td class="border-b border-gray-200 p-2">₹3.00</td>
                        <td class="border-b border-gray-200 p-2">
                            <div class="flex items-center">
                                <span>₹90,000.00</span>
                                <span class="ml-2 px-2 py-0.5 bg-green-100 text-green-800 text-xs rounded">Completed</span>
                            </div>
                        </td>
                        <td class="border-b border-gray-200 p-2">
                            <button class="bg-blue-500 text-white px-3 py-1 rounded text-sm">Download Invoice</button>
                        </td>
                    </tr>

                    <!-- Row 3 -->
                    <tr class="hover:bg-gray-50">
                        <td class="border-b border-gray-200 p-2">
                            <div class="font-semibold">27956</div>
                            <div class="text-sm text-gray-600">Southern Ispat And Energy Limited</div>
                        </td>
                        <td class="border-b border-gray-200 p-2">29-Nov-2024</td>
                        <td class="border-b border-gray-200 p-2">30,000</td>
                        <td class="border-b border-gray-200 p-2">₹3.00</td>
                        <td class="border-b border-gray-200 p-2">
                            <div class="flex items-center">
                                <span>₹90,000.00</span>
                                <span class="ml-2 px-2 py-0.5 bg-green-100 text-green-800 text-xs rounded">Completed</span>
                            </div>
                        </td>
                        <td class="border-b border-gray-200 p-2">
                            <button class="bg-blue-500 text-white px-3 py-1 rounded text-sm">Download Invoice</button>
                        </td>
                    </tr>

                    <!-- Row 4 -->
                    <tr class="hover:bg-gray-50">
                        <td class="border-b border-gray-200 p-2">
                            <div class="font-semibold">27578</div>
                            <div class="text-sm text-gray-600">Southern Ispat And Energy Limited</div>
                        </td>
                        <td class="border-b border-gray-200 p-2">22-Nov-2024</td>
                        <td class="border-b border-gray-200 p-2">30,000</td>
                        <td class="border-b border-gray-200 p-2">₹3.00</td>
                        <td class="border-b border-gray-200 p-2">
                            <div class="flex items-center">
                                <span>₹90,000.00</span>
                                <span class="ml-2 px-2 py-0.5 bg-red-100 text-red-800 text-xs rounded">Rejected</span>
                            </div>
                        </td>
                        <td class="border-b border-gray-200 p-2">
                            <button class="bg-blue-500 text-white px-3 py-1 rounded text-sm">Download Invoice</button>
                        </td>
                    </tr>

                    <!-- Row 5 -->
                    <tr class="hover:bg-gray-50">
                        <td class="border-b border-gray-200 p-2">
                            <div class="font-semibold">26684</div>
                            <div class="text-sm text-gray-600">Cochin International Airport Ltd (CIAL) (ESTD-1994)</div>
                        </td>
                        <td class="border-b border-gray-200 p-2">16-Oct-2024</td>
                        <td class="border-b border-gray-200 p-2">300</td>
                        <td class="border-b border-gray-200 p-2">₹495.00</td>
                        <td class="border-b border-gray-200 p-2">
                            <div class="flex items-center">
                                <span>₹1,48,500.00</span>
                                <span class="ml-2 px-2 py-0.5 bg-green-100 text-green-800 text-xs rounded">Completed</span>
                            </div>
                        </td>
                        <td class="border-b border-gray-200 p-2">
                            <button class="bg-blue-500 text-white px-3 py-1 rounded text-sm">Download Invoice</button>
                        </td>
                    </tr>

                    <!-- Row 6 -->
                    <tr class="hover:bg-gray-50">
                        <td class="border-b border-gray-200 p-2">
                            <div class="font-semibold">25917</div>
                            <div class="text-sm text-gray-600">Goodluck Defence and Aerospace Pvt. Ltd.</div>
                        </td>
                        <td class="border-b border-gray-200 p-2">16-Oct-2024</td>
                        <td class="border-b border-gray-200 p-2">11,500</td>
                        <td class="border-b border-gray-200 p-2">₹305.00</td>
                        <td class="border-b border-gray-200 p-2">
                            <div class="flex items-center">
                                <span>₹35,07,500.00</span>
                                <span class="ml-2 px-2 py-0.5 bg-green-100 text-green-800 text-xs rounded">Completed</span>
                            </div>
                        </td>
                        <td class="border-b border-gray-200 p-2">
                            <button class="bg-blue-500 text-white px-3 py-1 rounded text-sm">Download Invoice</button>
                        </td>
                    </tr>

                    <!-- Row 7 -->
                    <tr class="hover:bg-gray-50">
                        <td class="border-b border-gray-200 p-2">
                            <div class="font-semibold">20539</div>
                            <div class="text-sm text-gray-600">Glenmark Healthcare and Pharmaceuticals Ltd.</div>
                        </td>
                        <td class="border-b border-gray-200 p-2">05-Sep-2024</td>
                        <td class="border-b border-gray-200 p-2">3,775</td>
                        <td class="border-b border-gray-200 p-2">₹63.00</td>
                        <td class="border-b border-gray-200 p-2">
                            <div class="flex items-center">
                                <span>₹2,37,825.00</span>
                                <span class="ml-2 px-2 py-0.5 bg-red-100 text-red-800 text-xs rounded">Rejected</span>
                            </div>
                        </td>
                        <td class="border-b border-gray-200 p-2">
                            <button class="bg-blue-500 text-white px-3 py-1 rounded text-sm">Download Invoice</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection
