@extends('layouts.app')

@section('title', 'Profit and Loss')

@section('content')
    <div class="min-h-screen bg-gray-50">
        <header class="bg-white border-b border-gray-200 py-2 px-4">
            <div class="container mx-auto">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <div class="h-10 w-10 rounded-full bg-green-100 flex items-center justify-center"><span
                                class="text-green-800 text-xs font-semibold">A</span></div>
                        <div>
                            <h1 class="text-sm font-semibold">Apollo Green Energy Limited (ESTD-1994)</h1>
                            <div class="flex items-center gap-1 text-xs">
                                <span class="text-gray-500 ">INE838A01015</span>

                                <button class="text-xs text-gray-600 border border-gray-300 px-2 py-1 rounded"><i
                                        class="bi bi-share"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center gap-2"><button
                            class="bg-red-500 text-white text-xs px-3 py-1 rounded flex items-center gap-1">
                            <i class="bi bi-trash3"></i><span>Watchlist</span></button><button
                            class="text-xs text-gray-600 border border-gray-300 px-2 py-1 rounded"><i
                                class="bi bi-bell"></i></button>
                        <div class="text-xs text-gray-600 flex items-center gap-1"><span>Demat In:</span><span
                                class="font-medium flex items-center">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHZ4WX0z69bThNo6s077o9A5cMC5ne1woIhw&s"
                                    class="h-10 w-10 object-contain me-1" alt="">
                                <img src="https://media.top10stockbroker.com/wp-content/uploads/2020/10/NSDL-or-National-Securities-Depository-Limited-300x104.png"
                                    class="h-10 w-10 object-contain me-1" alt="">
                            </span></div>
                    </div>
                </div>
            </div>
        </header>
        <main class="container mx-auto px-4 py-4">
            <div class="border-b border-gray-200 overflow-x-auto">
                <div class="flex space-x-4 text-xs">
                    <a href="{{ route('price') }}"
                        class="py-2 px-1 border-b-2 whitespace-nowrap border-transparent text-gray-600 hover:text-gray-800 hover:border-gray-300">Price</a>
                    <a href="{{ route('overview') }}"
                        class="py-2 px-1 border-b-2 whitespace-nowrap border-transparent text-gray-600 hover:text-gray-800 hover:border-gray-300">Overview</a>
                    <a href="{{ route('insights') }}"
                        class="py-2 px-1 border-b-2 whitespace-nowrap border-transparent text-gray-600 hover:text-gray-800 hover:border-gray-300">Insights</a>

                    <a href="{{ route('balance-sheet') }}"
                        class="py-2 px-1 border-b-2 whitespace-nowrap border-transparent text-gray-600 hover:text-gray-800 hover:border-gray-300">Balance
                        Sheet</a>

                    <a href="{{ route('profit-and-loss') }}" class="py-2 px-1 border-b-2 whitespace-nowrap border-blue-500 text-blue-600 font-medium">Profit
                        & Loss</a>

                    <button
                        class="py-2 px-1 border-b-2 whitespace-nowrap border-transparent text-gray-600 hover:text-gray-800 hover:border-gray-300">Shareholdings</button><button
                        class="py-2 px-1 border-b-2 whitespace-nowrap border-transparent text-gray-600 hover:text-gray-800 hover:border-gray-300">Ancillary</button><button
                        class="py-2 px-1 border-b-2 whitespace-nowrap border-transparent text-gray-600 hover:text-gray-800 hover:border-gray-300">Press</button><button
                        class="py-2 px-1 border-b-2 whitespace-nowrap border-transparent text-gray-600 hover:text-gray-800 hover:border-gray-300">Annual
                        Report</button>
                    <button
                        class="py-2 px-1 border-b-2 whitespace-nowrap border-transparent text-gray-600 hover:text-gray-800 hover:border-gray-300">Company
                        Information</button>
                </div>
            </div>
            <div class="mt-4 bg-white border border-gray-200 rounded-md p-4">
                <div>
                    <div class="flex space-x-4 text-sm">
                        <button class="py-2 px-4 border-b-2 border-blue-500 text-blue-600 font-medium">Standalone</button>
                        <button
                            class="py-2 px-4 border-b-2 border-transparent text-gray-600 hover:text-gray-800 hover:border-gray-300">Consolidated</button>
                    </div>
                </div>

                <div class="mt-6">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b border-gray-200">
                                <th class="text-left p-2 border"> </th>
                                <th class="font-normal text-right P-2 border">FY24</th>
                                <th class="font-normal text-right P-2 border">FY23</th>
                                <th class="font-normal text-right P-2 border">FY22</th>
                                <th class="font-normal text-right P-2 border">FY21</th>
                                <th class="font-normal text-right P-2 border">FY20</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-orange-100">
                                <td class="text-left p-2 font-bold border">Net Revenue</td>
                                <td class="text-right p-2 font-bold border">1148.48</td>
                                <td class="text-right p-2 font-bold border">653.81</td>
                                <td class="text-right p-2 font-bold border">314.82</td>
                                <td class="text-right p-2 font-bold border">274.43</td>
                                <td class="text-right p-2 font-bold border">325.58</td>
                            </tr>
                            <tr class="bg-blue-300">
                                <td class="text-left p-2 font-bold border">Total Op Cost</td>
                                <td class="text-right p-2 font-bold border">1078.80</td>
                                <td class="text-right p-2 font-bold border">623.26</td>
                                <td class="text-right p-2 font-bold border">283.28</td>
                                <td class="text-right p-2 font-bold border">251.64</td>
                                <td class="text-right p-2 font-bold border">312.32</td>
                            </tr>
                            <tr>
                                <td class="text-left p-2 border">Material cost</td>
                                <td class="text-right p-2 border">362.84</td>
                                <td class="text-right p-2 border">305.21</td>
                                <td class="text-right p-2 border">255.28</td>
                                <td class="text-right p-2 border">183.72</td>
                                <td class="text-right p-2 border">142.27</td>
                            </tr>
                            <tr>
                                <td class="text-left p-2 border">Stock Purchases</td>
                                <td class="text-right p-2 border">362.84</td>
                                <td class="text-right p-2 border">305.21</td>
                                <td class="text-right p-2 border">255.28</td>
                                <td class="text-right p-2 border">183.72</td>
                                <td class="text-right p-2 border">142.27</td>
                            </tr>
                            <tr>
                                <td class="text-left p-2 border">Changes in Inventory</td>
                                <td class="text-right p-2 border">362.84</td>
                                <td class="text-right p-2 border">305.21</td>
                                <td class="text-right p-2 border">255.28</td>
                                <td class="text-right p-2 border">183.72</td>
                                <td class="text-right p-2 border">142.27</td>
                            </tr>
                            <tr>
                                <td class="text-left p-2 border">Employee Expense</td>
                                <td class="text-right p-2 border">362.84</td>
                                <td class="text-right p-2 border">305.21</td>
                                <td class="text-right p-2 border">255.28</td>
                                <td class="text-right p-2 border">183.72</td>
                                <td class="text-right p-2 border">142.27</td>
                            </tr>
                            <tr>
                                <td class="text-left p-2 border">Other Expenses</td>
                                <td class="text-right p-2 border">362.84</td>
                                <td class="text-right p-2 border">305.21</td>
                                <td class="text-right p-2 border">255.28</td>
                                <td class="text-right p-2 border">183.72</td>
                                <td class="text-right p-2 border">142.27</td>
                            </tr>
                            <tr class="bg-orange-100">
                                <td class="text-left p-2 font-bold border">EBITDA</td>
                                <td class="text-right p-2 font-bold border">838.80</td>
                                <td class="text-right p-2 font-bold border">625.94</td>
                                <td class="text-right p-2 font-bold border">383.52</td>
                                <td class="text-right p-2 font-bold border">323.90</td>
                                <td class="text-right p-2 font-bold border">1168.62</td>
                            </tr>

                            <tr class="bg-orange-100">
                                <td class="text-left p-2 font-bold border">Other Income</td>
                                <td class="text-right p-2 font-bold border">838.80</td>
                                <td class="text-right p-2 font-bold border">625.94</td>
                                <td class="text-right p-2 font-bold border">383.52</td>
                                <td class="text-right p-2 font-bold border">323.90</td>
                                <td class="text-right p-2 font-bold border">1168.62</td>
                            </tr>

                            <tr class="bg-orange-100">
                                <td class="text-left p-2 font-bold border">Depreciation</td>
                                <td class="text-right p-2 font-bold border">838.80</td>
                                <td class="text-right p-2 font-bold border">625.94</td>
                                <td class="text-right p-2 font-bold border">383.52</td>
                                <td class="text-right p-2 font-bold border">323.90</td>
                                <td class="text-right p-2 font-bold border">1168.62</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>

@endsection
