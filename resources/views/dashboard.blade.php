<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Welcome {{Auth::user()->name}}
            <!--{{__("Welcome {Auth::user()->name}") }}-->
            <!--{{ __('Dashboard') }}-->
        </h2>
    </x-slot>
<style>
    .my-pie-chart1 {
    height: 200px;
    margin: auto;
    width: 200px;
    border-radius: 50%;
        /*bg-[#d3eaf2]*/
        /*bg-[#bee0ec]*/
        /*bg-[#92cbdf]*/
        /*bg-[#66b6d2]*/
        /*bg-[#3ba1c5]*/
        /*bg-[#2187ab]*/
        /*bg-[#1e7898]*/
        /*bg-[#1a6985]*/
        /*bg-[#165a72]*/
        /*bg-[#134b5f]*/
    background: conic-gradient(#d3eaf2 0.00%, #bee0ec 0.00% 0.55%, #92cbdf 0.55% 6.08%, #66b6d2 6.08% 13.68%, #3ba1c5 13.68% 23.27%,  #2187ab 23.27% 40.47%, #1e7898 40.47%);
}
.my-pie-chart2 {
    height: 200px;
    margin: auto;
    width: 200px;
    border-radius: 50%;
    background: conic-gradient(#d3eaf2 0.00%, #bee0ec 0.00% 0.55%, #92cbdf 0.55% 10%, #66b6d2 6.08% 30%, #3ba1c5 13.68% 23.27%,  #2187ab 23.27% 40.47%, #1e7898 40.47%);
}
.my-pie-chart3 {
    height: 200px;
    margin: auto;
    width: 200px;
    border-radius: 50%;
    background: conic-gradient(#d3eaf2 0.00%, #bee0ec 0.00% 0.55%, #92cbdf 0.55% 6.08%, #66b6d2 6.08% 13.68%, #3ba1c5 13.68% 23.27%,  #2187ab 23.27% 40.47%, #1e7898 40.47%);
}
.my-pie-chart4 {
    height: 200px;
    margin: auto;
    width: 200px;
    border-radius: 50%;
    background: conic-gradient(#d3eaf2 0.00%, #bee0ec 0.00% 0.55%, #92cbdf 0.55% 6.03%, #66b6d2 6.08% 13.68%, #3ba1c5 13.68% 23.27%,  #2187ab 23.27% 40.47%, #1e7898 40.47%);
}
</style>
    <div class="py-12">
        <div class="max-w-screen mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg pb-16">
                <h1 class="mx-10 mt-10 text-4xl font-bold">Dashboard</h1>
                <div class="mx-auto text-center mt-10">
                    <button onclick="document.getElementById('Januari1').classList.remove('hidden')" class="rounded-md mx-2 text-2xl p-5 border-black border underline">Regenval Januari</button>
                    <button onclick="document.getElementById('Februari1').classList.remove('hidden')" class="rounded-md mx-2 text-2xl p-5 border-black border underline">Regenval Februari</button>
                    <button onclick="document.getElementById('Januari2').classList.remove('hidden')" class="rounded-md mx-2 text-2xl p-5 border-black border underline">Waterverbruik Januari</button>
                    <button onclick="document.getElementById('Februari2').classList.remove('hidden')" class="rounded-md mx-2 text-2xl p-5 border-black border underline">Waterverbruik Februari</button>
                </div>
                <div class="grid grid-cols-2 grid-rows-2">

                    <div id="Januari1" class="hidden">
                    <h2 class="mx-10 mt-10 text-xl font-bold">Regenval Januari</h2>
                    <div class="grid bg-gray-300 border-black border-2 grid-rows-3 sm:grid-rows-2 sm:grid-cols-3 sm:grid-flow-row grid-flow-col gap-4 mx-10">
                        <div class="sm:row-span-3 sm:col-span-2 mx-10 my-10 h-auto">
                                <div class="grid grid-rows-1 grid-col-10 grid-flow-col gap-4 h-full rotate-180 vertical-text-graph">
                                    <div class="h-1/6 bg-[#d3eaf2]"><p class="rotate-90">1</p></div>
                                    <div class="h-3/4 bg-[#bee0ec]"><p class="rotate-90">2</p></div>
                                    <div class="h-3/7 bg-[#92cbdf]"><p class="rotate-90">3</p></div>
                                    <div class="h-1/4 bg-[#66b6d2]"><p class="rotate-90">4</p></div>
                                    <div class="h-5/6 bg-[#3ba1c5]"><p class="rotate-90">5</p></div>
                                    <div class="h-3/4 bg-[#2187ab]"><p class="rotate-90">6</p></div>
                                    <div class="h-1/4 bg-[#1e7898]"><p class="rotate-90">7</p></div>
                                    <div class="h-3/4 bg-[#1a6985]"><p class="rotate-90">8</p></div>
                                    <div class="h-4/4 bg-[#165a72]"><p class="rotate-90">9</p></div>
                                    <div class="h-1/4 bg-[#134b5f]"><p class="rotate-90">10</p></div>
                                </div>

                        </div>
                        <div class="sm:col-span-1 mx-10 my-10 h-auto"><div class="my-pie-chart1"></div></div>
                        <div class="text-center mx-10 my-10 sm:row-span-2 col-span-1 h-auto">
                            <div class="grid bg-gray-300 grid-rows-2 sm:grid-rows-2 sm:grid-cols-2 sm:grid-flow-row grid-flow-col gap-4">
                                <div class="border-2 border-black"><h2 class="text-xl font-bold">Totaal opgebracht: 165,26l </h2></div>
                                <div><h2 class="text-xl font-bold"></h2></div>
                                <div class="border-2 border-black"><h2 class="text-xl font-bold">Smart Ton 1: 80,12L</h2></div>

                                <div class="border-2 border-black"><h2 class="text-xl font-bold">Smart Ton 2: 85,49L</h2></div>

                        </div>
                    </div>
                    </div>
                    </div>
                    <div id="Januari2" class="hidden">
                    <h2 class="mx-10 mt-10 text-xl font-bold">Waterverbruik Januari</h2>
                    <div class="grid bg-gray-300 border-black border-2 grid-rows-3 sm:grid-rows-2 sm:grid-cols-3 sm:grid-flow-row grid-flow-col gap-4 mx-10">
                        <div class="sm:row-span-3 sm:col-span-2 mx-10 my-10 h-auto">
                                <div class="grid grid-rows-1 grid-col-10 grid-flow-col gap-4 h-full rotate-180 vertical-text-graph">
                                    <div class="h-1/4 bg-[#d3eaf2]"><p class="rotate-90">1</p></div>
                                    <div class="h-2/4 bg-[#bee0ec]"><p class="rotate-90">2</p></div>
                                    <div class="h-3/4 bg-[#92cbdf]"><p class="rotate-90">3</p></div>
                                    <div class="h-5/6 bg-[#66b6d2]"><p class="rotate-90">4</p></div>
                                    <div class="h-1/4 bg-[#3ba1c5]"><p class="rotate-90">5</p></div>
                                    <div class="h-2/4 bg-[#2187ab]"><p class="rotate-90">6</p></div>
                                    <div class="h-3/6 bg-[#1e7898]"><p class="rotate-90">7</p></div>
                                    <div class="h-3/4 bg-[#1a6985]"><p class="rotate-90">8</p></div>
                                    <div class="h-2/4 bg-[#165a72]"><p class="rotate-90">9</p></div>
                                    <div class="h-6/7 bg-[#134b5f]"><p class="rotate-90">10</p></div>
                                </div>
                        </div>
                        <div class="sm:col-span-1 mx-10 my-10 h-auto"><div class="my-pie-chart2"></div></div>
                        <div class="text-center mx-10 my-10 sm:row-span-2 col-span-1 h-auto">
                            <div class="grid bg-gray-300 grid-rows-2 sm:grid-rows-2 sm:grid-cols-2 sm:grid-flow-row grid-flow-col gap-4">
                            <div class="border-2 border-black"><h2 class="text-xl font-bold">Totaal verbruikt: 120,75l </h2></div>
                                <div><h2 class="text-xl font-bold"></h2></div>
                            <div class="border-2 border-black"><h2 class="text-xl font-bold">Smart Tap 1: 20,65L</h2></div>
                                <div><h2 class="text-xl font-bold"></h2></div>
                            <div class="border-2 border-black"><h2 class="text-xl font-bold">Smart Tap 2: 100,10L</h2></div>

                            </div>
                        </div>
                    </div>
                    </div>
                    <div id="Februari1" class="hidden">
                    <h2 class="mx-10 mt-10 text-xl font-bold">Regenval Februari</h2>
                    <div class="grid bg-gray-300 border-black border-2 grid-rows-3 sm:grid-rows-2 sm:grid-cols-3 sm:grid-flow-row grid-flow-col gap-4 mx-10">
                        <div class="sm:row-span-3 sm:col-span-2 mx-10 my-10 h-auto">
                                <div class="grid grid-rows-1 grid-col-10 grid-flow-col gap-4 h-full rotate-180 vertical-text-graph">
                                    <div class="h-1/4 bg-[#d3eaf2]"><p class="rotate-90">1</p></div>
                                    <div class="h-2/4 bg-[#bee0ec]"><p class="rotate-90">2</p></div>
                                    <div class="h-2/5 bg-[#92cbdf]"><p class="rotate-90">3</p></div>
                                    <div class="h-5/6 bg-[#66b6d2]"><p class="rotate-90">4</p></div>
                                    <div class="h-1/4 bg-[#3ba1c5]"><p class="rotate-90">5</p></div>
                                    <div class="h-1/6 bg-[#2187ab]"><p class="rotate-90">6</p></div>
                                    <div class="h-1/4 bg-[#1e7898]"><p class="rotate-90">7</p></div>
                                    <div class="h-5/6 bg-[#1a6985]"><p class="rotate-90">8</p></div>
                                    <div class="h-4/4 bg-[#165a72]"><p class="rotate-90">9</p></div>
                                    <div class="h-1/6 bg-[#134b5f]"><p class="rotate-90">10</p></div>
                                </div>
                        </div>
                        <div class="sm:col-span-1 mx-10 my-10 h-auto"><div class="my-pie-chart3"></div></div>
                        <div class="text-center mx-10 my-10 sm:row-span-2 col-span-1 h-auto">
                            <div class="grid bg-gray-300 grid-rows-2 sm:grid-rows-2 sm:grid-cols-2 sm:grid-flow-row grid-flow-col gap-4">
                            <div class="border-2 border-black"><h2 class="text-xl font-bold">Eerste Kwart</h2></div>
                            <div class="border-2 border-black"><h2 class="text-xl font-bold">Twede Kwart</h2></div>
                            <div class="border-2 border-black"><h2 class="text-xl font-bold">Derde Kwart</h2></div>

                            </div>
                        </div>
                    </div>
                    </div>
                    <div id="Februari2" class="hidden">
                    <h2 class="mx-10 mt-10 text-xl font-bold">Waterverbruik Februari</h2>
                    <div class="grid bg-gray-300 border-black border-2 grid-rows-3 sm:grid-rows-2 sm:grid-cols-3 sm:grid-flow-row grid-flow-col gap-4 mx-10">
                        <div class="sm:row-span-3 sm:col-span-2 mx-10 my-10 h-auto">
                                <div class="grid grid-rows-1 grid-col-10 grid-flow-col gap-4 h-full rotate-180 vertical-text-graph">
                                    <div class="h-1/4 bg-[#d3eaf2]"><p class="rotate-90">1</p></div>
                                    <div class="h-2/4 bg-[#bee0ec]"><p class="rotate-90">2</p></div>
                                    <div class="h-3/4 bg-[#92cbdf]"><p class="rotate-90">3</p></div>
                                    <div class="h-1/4 bg-[#66b6d2]"><p class="rotate-90">4</p></div>
                                    <div class="h-1/4 bg-[#3ba1c5]"><p class="rotate-90">5</p></div>
                                    <div class="h-2/4 bg-[#2187ab]"><p class="rotate-90">6</p></div>
                                    <div class="h-3/4 bg-[#1e7898]"><p class="rotate-90">7</p></div>
                                    <div class="h-5/6 bg-[#1a6985]"><p class="rotate-90">8</p></div>
                                    <div class="h-4/4 bg-[#165a72]"><p class="rotate-90">9</p></div>
                                    <div class="h-1/4 bg-[#134b5f]"><p class="rotate-90">10</p></div>
                                </div>
                        </div>
                        <div class="sm:col-span-1 mx-10 my-10 h-auto"><div class="my-pie-chart4"></div></div>
                        <div class="text-center mx-10 my-10 sm:row-span-2 col-span-1 h-auto">
                            <div class="grid bg-gray-300 grid-rows-2 sm:grid-rows-2 sm:grid-cols-2 sm:grid-flow-row grid-flow-col gap-4">
                            <div class="border-2 border-black"><h2 class="text-xl font-bold">Eerste Kwart</h2></div>
                            <div class="border-2 border-black"><h2 class="text-xl font-bold">Tweede Kwart</h2></div>
                            <div class="border-2 border-black"><h2 class="text-xl font-bold">Derde Kwart</h2></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</x-app-layout>
