@extends('layouts.app')

@section('title', 'Insights')

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
                        class="py-2 px-1 border-b-2 whitespace-nowrap border-blue-500 text-blue-600 font-medium">Insights</a>
                    <a href="{{ route('balance-sheet') }}"
                        class="py-2 px-1 border-b-2 whitespace-nowrap border-transparent text-gray-600 hover:text-gray-800 hover:border-gray-300">Balance
                        Sheet</a>
                    <a href="{{ route('profit-and-loss') }}"
                        class="py-2 px-1 border-b-2 whitespace-nowrap border-transparent text-gray-600 hover:text-gray-800 hover:border-gray-300">Profit
                        and Loss</a>
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

                <div class="mt-6">

                    <h4 class="font-bold mb-4">Calculation of Intrinsic worth from Listed Investments:</h4>

                    <table class="table-auto w-full text-xs text-gray-600 my-4 border-collapse border border-gray-200">
                        <thead>
                            <tr>
                                <th class="px-2 py-1 border border-gray-200">Company Name</th>
                                <th class="px-2 py-1 border border-gray-200">No. of Equity Shares</th>
                                <th class="px-2 py-1 border border-gray-200">CMP as on 09-12-2024</th>
                                <th class="px-2 py-1 border border-gray-200">Total Investment of Apollo Green</th>
                                <th class="px-2 py-1 border border-gray-200">Outstanding Shares of Apollo Green as on
                                    09-12-2024</th>
                                <th class="px-2 py-1 border border-gray-200">Intrinsic Worth Per Share</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-gray-200">
                                <td class="font-medium px-2 py-1 border border-gray-200">Apolo Tyres Ltd</td>
                                <td class="px-2 py-1 border border-gray-200">984485</td>
                                <td class="px-2 py-1 border border-gray-200">546</td>
                                <td class="px-2 py-1 border border-gray-200">Rs. 54.04 Crore</td>
                                <td class="px-2 py-1 border border-gray-200">4.18 Crore</td>
                                <td class="px-2 py-1 border border-gray-200"><b>Rs 13</b></td>
                            </tr>
                            <tr class="border-b border-gray-200">
                                <td class="font-medium px-2 py-1 border border-gray-200">UFO Moviez India Ltd</td>
                                <td class="px-2 py-1 border border-gray-200">2266417</td>
                                <td class="px-2 py-1 border border-gray-200">114</td>
                                <td class="px-2 py-1 border border-gray-200">Rs 25.83 Crore</td>
                                <td class="px-2 py-1 border border-gray-200">4.18 Crore</td>
                                <td class="px-2 py-1 border border-gray-200"><b>Rs 6</b></td>
                            </tr>

                        </tbody>
                    </table>

                    <h4 class="font-bold mb-4">Latest Insights of AGEL:</h4>

                    <ul class="list-disc pl-5 text-xs text-gray-600 leading-relaxed mt-2">
                        <li>Apollo Green Energy Limited (AGEL), part of Apollo International Group, is working towards
                            <b>expanding its renewable energy portfolio to ₹10,000 crore by 2025.</b>
                        </li>
                        <li>The company currently manages projects worth ₹33,500 crore, with a robust balance sheet and
                            plans for further growth and new initiatives.</li>
                        <li>AGEL operates in eight states and has developed <b>400 MW of solar power installations</b>,
                            playing a crucial role in India's renewable energy sector.</li>
                        <li>AGEL is also finalizing a <b>₹700 crore Flue Gas Desulfurization (FGD) project</b>, aimed at
                            reducing emissions in power generation.</li>
                        <li><b>Engineering, Procurement & Construction (EPC) Division:</b> Specializing in medium and
                            large-scale infrastructure and industrial projects, this division undertakes turnkey projects in
                            power, oil storage, transmission, solar, irrigation, and sugar processing sectors across
                            international and domestic markets.</li>
                        <li><b>Supply of Goods Division:</b> Engaged in trading tyres, batteries, lubricants, white goods,
                            and electronic goods, this division operates in India, Dubai, Singapore, and China, overseeing
                            marketing and distribution operations in 70 countries.</li>
                    </ul>
                </div>
            </div>
        </main>
    </div>

@endsection
