@extends('layouts.app')

@section('title', 'Price')

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
                            <div class="flex items-center gap-1 text-xs"><span
                                    class="bg-green-100 text-green-800 px-1 rounded">BSE</span><span
                                    class="bg-green-100 text-green-800 px-1 rounded">NSE</span><span
                                    class="text-gray-500">•</span><span class="text-gray-500">IN</span></div>
                        </div>
                    </div>
                    <div class="flex items-center gap-2"><button
                            class="bg-red-500 text-white text-xs px-3 py-1 rounded flex items-center gap-1"><svg
                                xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-download">
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                <polyline points="7 10 12 15 17 10"></polyline>
                                <line x1="12" x2="12" y1="15" y2="3"></line>
                            </svg><span>Download</span></button><button
                            class="text-xs text-gray-600 border border-gray-300 px-2 py-1 rounded"><svg
                                xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-bell">
                                <path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"></path>
                                <path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"></path>
                            </svg></button>
                        <div class="text-xs text-gray-600 flex items-center gap-1"><span>Default In:</span><span
                                class="font-medium flex items-center">₹ INR <svg xmlns="http://www.w3.org/2000/svg"
                                    width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-chevron-down">
                                    <path d="m6 9 6 6 6-6"></path>
                                </svg></span></div>
                    </div>
                </div>
            </div>
        </header>
        <main class="container mx-auto px-4 py-4">
            <div class="border-b border-gray-200 overflow-x-auto">
                <div class="flex space-x-4 text-xs">
                    <button
                        class="py-2 px-1 border-b-2 whitespace-nowrap border-blue-500 text-blue-600 font-medium">Price</button>
                    <button
                        class="py-2 px-1 border-b-2 whitespace-nowrap border-transparent text-gray-600 hover:text-gray-800 hover:border-gray-300">Overview</button>
                    <button
                        class="py-2 px-1 border-b-2 whitespace-nowrap border-transparent text-gray-600 hover:text-gray-800 hover:border-gray-300">Insights</button>
                    <button
                        class="py-2 px-1 border-b-2 whitespace-nowrap border-transparent text-gray-600 hover:text-gray-800 hover:border-gray-300">Balance
                        Sheet</button>
                    <button
                        class="py-2 px-1 border-b-2 whitespace-nowrap border-transparent text-gray-600 hover:text-gray-800 hover:border-gray-300">Profit
                        and Loss</button>
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
                    <div class="flex justify-between items-center mb-4">
                        <div class="flex items-baseline gap-2">
                            <h2 class="text-xl font-semibold">₹19.73</h2><span
                                class="text-xs text-red-500 flex items-center"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-arrow-down">
                                    <path d="M12 5v14"></path>
                                    <path d="m19 12-7 7-7-7"></path>
                                </svg> 0.15 (0.75%)</span>
                        </div>
                        <div class="flex gap-1 text-xs"><button
                                class="px-2 py-1 rounded bg-gray-100 text-gray-600 hover:bg-gray-200">1D</button><button
                                class="px-2 py-1 rounded bg-gray-100 text-gray-600 hover:bg-gray-200">1W</button><button
                                class="px-2 py-1 rounded bg-blue-500 text-white">1M</button><button
                                class="px-2 py-1 rounded bg-gray-100 text-gray-600 hover:bg-gray-200">3M</button><button
                                class="px-2 py-1 rounded bg-gray-100 text-gray-600 hover:bg-gray-200">6M</button><button
                                class="px-2 py-1 rounded bg-gray-100 text-gray-600 hover:bg-gray-200">1Y</button><button
                                class="px-2 py-1 rounded bg-gray-100 text-gray-600 hover:bg-gray-200">3Y</button><button
                                class="px-2 py-1 rounded bg-gray-100 text-gray-600 hover:bg-gray-200">5Y</button><button
                                class="px-2 py-1 rounded bg-gray-100 text-gray-600 hover:bg-gray-200">MAX</button></div>
                    </div>
                    <div class="h-64 w-full">
                        <canvas id="priceChart" class="w-full h-full"></canvas>
                    </div>

                    <div class="mt-4 flex justify-between text-xs text-gray-500">
                        <div>
                            <div class="font-medium">52 Week High: <span class="text-green-600">499</span></div>
                            <div class="font-medium">52 Week Low: <span class="text-red-600">159</span></div>
                        </div>
                        <div class="flex gap-2"><button
                                class="bg-green-100 text-green-800 px-2 py-1 rounded">BUY</button><button
                                class="bg-red-100 text-red-800 px-2 py-1 rounded">SELL</button><button
                                class="bg-blue-100 text-blue-800 px-2 py-1 rounded">HOLD</button></div>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
                    <div class="col-span-3">
                        <h3 class="text-xs font-semibold mb-2">Data as per 31st March, 2024</h3>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                            <div class="border border-gray-200 rounded p-2">
                                <div class="text-xs text-gray-500">P/E</div>
                                <div class="text-sm font-semibold">19.73</div>
                                {{-- <div class="text-xs text-gray-400">P/E</div> --}}
                            </div>
                            <div class="border border-gray-200 rounded p-2">
                                <div class="text-xs text-gray-500">P/S</div>
                                <div class="text-sm font-semibold">0.6</div>
                                {{-- <div class="text-xs text-gray-400">P/E</div> --}}
                            </div>
                            <div class="border border-gray-200 rounded p-2">
                                <div class="text-xs text-gray-500">P/B</div>
                                <div class="text-sm font-semibold">1.43</div>
                                {{-- <div class="text-xs text-gray-400">P/E</div> --}}
                            </div>
                            <div class="border border-gray-200 rounded p-2">
                                <div class="text-xs text-gray-500">Industry P/E</div>
                                <div class="text-sm font-semibold">40</div>
                            </div>
                            <div class="border border-gray-200 rounded p-2">
                                <div class="text-xs text-gray-500">Dividend (/sh)</div>
                                <div class="text-sm font-semibold">₹0.00</div>
                            </div>
                            <div class="border border-gray-200 rounded p-2">
                                <div class="text-xs text-gray-500">Dividend Yield</div>
                                <div class="text-sm font-semibold">0%</div>
                            </div>
                            <div class="border border-gray-200 rounded p-2">
                                <div class="text-xs text-gray-500">Face Value</div>
                                <div class="text-sm font-semibold">₹10.00</div>
                            </div>
                            <div class="border border-gray-200 rounded p-2">
                                <div class="text-xs text-gray-500">EPS</div>
                                <div class="text-sm font-semibold">₹11.15</div>
                            </div>
                            <div class="border border-gray-200 rounded p-2">
                                <div class="text-xs text-gray-500">PAT</div>
                                <div class="text-sm font-semibold">₹38.59 Cr</div>
                            </div>
                            <div class="border border-gray-200 rounded p-2">
                                <div class="text-xs text-gray-500">Share capital</div>
                                <div class="text-sm font-semibold">₹34.61 Cr</div>
                            </div>
                            <div class="border border-gray-200 rounded p-2">
                                <div class="text-xs text-gray-500">Market cap</div>
                                <div class="text-sm font-semibold">₹761.43 Cr</div>
                            </div>
                            <div class="border border-gray-200 rounded p-2">
                                <div class="text-xs text-gray-500">Sales</div>
                                <div class="text-sm font-semibold">₹1268.00 Cr</div>
                            </div>

                        </div>
                        <div class="mt-4 text-xs text-gray-500">
                            <p>*Data is as per last available financials, corporate actions in the interim period might not be reflected here.</p>
                        </div>
                    </div>

                </div>
                <div class="mt-6">
                    <h3 class="text-xs font-semibold mb-2">About the company</h3>
                    <p class="text-xs text-gray-600 leading-relaxed">Apollo Green Energy Limited (AGEL) was formerly
                        known as Apollo International Limited. The company operates in various sectors that include
                        integrated logistics, digital cinema, leather processing, and automotive. The company is engaged
                        in manufacturing and distribution of leather products, footwear, and automotive components.
                        AGEL's business includes manufacturing of leather products, leather jackets, leather wallets,
                        leather belts, leather footwear for men, leather designer bag, leather belts, leather ladies
                        handbags, and leather sample development.</p>
                </div>
            </div>
        </main>
    </div>

@endsection
