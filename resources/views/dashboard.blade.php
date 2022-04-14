<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
<style>
    .my-pie-chart1 {
    height: 200px;
    margin: auto;
    width: 200px;
    border-radius: 50%;
    background: conic-gradient(#0F52BA 0.00%, #2D5DA1 0.00% 0.55%, #2E5894 0.55% 6.08%, #126180 6.08% 13.68%, #082567 13.68% 23.27%,  #007FFF 23.27% 40.47%, #1034A6 40.47%);
}
.my-pie-chart2 {
    height: 200px;
    margin: auto;
    width: 200px;
    border-radius: 50%;
    background: conic-gradient(#0F52BA 0.00%, #2D5DA1 0.00% 0.55%, #2E5894 0.55% 10%, #126180 6.08% 30%, #082567 13.68% 23.27%,  #007FFF 23.27% 40.47%, #1034A6 40.47%);
}
.my-pie-chart3 {
    height: 200px;
    margin: auto;
    width: 200px;
    border-radius: 50%;
    background: conic-gradient(#0F52BA 0.00%, #2D5DA1 0.00% 0.55%, #2E5894 0.55% 6.08%, #126180 6.08% 13.68%, #082567 13.68% 23.27%,  #007FFF 23.27% 40.47%, #1034A6 40.47%);
}
.my-pie-chart4 {
    height: 200px;
    margin: auto;
    width: 200px;
    border-radius: 50%;
    background: conic-gradient(#0F52BA 0.00%, #2D5DA1 0.00% 0.55%, #2E5894 0.55% 6.03%, #126180 6.08% 13.68%, #082567 13.68% 23.27%,  #007FFF 23.27% 40.47%, #1034A6 40.47%);
}
</style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h1 class="mx-10 mt-10 text-4xl font-bold">Dashboard</h1>
                <h2 class="mx-10 mt-10 text-xl font-bold">Koptekst 1</h2>
                <div class="grid bg-gray-300 border-black border-2 grid-rows-3 sm:grid-rows-2 sm:grid-cols-3 sm:grid-flow-row grid-flow-col gap-4 mx-10">
                    <div class="sm:row-span-3 sm:col-span-2 mx-10 my-10 h-auto">
                            <div class="grid grid-rows-1 grid-col-10 grid-flow-col gap-4 h-full rotate-180 vertical-text-graph">
                                <div class="h-1/4 bg-blue-600"><p class="rotate-90">1</p></div>
                                <div class="h-2/4 bg-blue-600"><p class="rotate-90">2</p></div>
                                <div class="h-3/4 bg-blue-600"><p class="rotate-90">3</p></div>
                                <div class="h-1/4 bg-blue-600"><p class="rotate-90">4</p></div>
                                <div class="h-1/4 bg-blue-600"><p class="rotate-90">5</p></div>
                                <div class="h-2/4 bg-blue-600"><p class="rotate-90">6</p></div>
                                <div class="h-1/4 bg-blue-600"><p class="rotate-90">7</p></div>
                                <div class="h-3/4 bg-blue-600"><p class="rotate-90">8</p></div>
                                <div class="h-4/4 bg-blue-600"><p class="rotate-90">9</p></div>
                                <div class="h-1/4 bg-blue-600"><p class="rotate-90">10</p></div>
                            </div>
                    </div>
                    <div class="sm:col-span-1 mx-10 my-10 h-auto"><div class="my-pie-chart1"></div></div>
                    <div class="text-center mx-10 my-10 sm:row-span-2 col-span-1 h-auto">
                    <div class="grid bg-gray-300 grid-rows-2 sm:grid-rows-2 sm:grid-cols-2 sm:grid-flow-row grid-flow-col gap-4">
                        <div class="border-2 border-black"><h2 class="text-xl font-bold">koptekst</h2></div>
                        <div class="border-2 border-black"><h2 class="text-xl font-bold">koptekst</h2></div>
                        <div class="border-2 border-black"><h2 class="text-xl font-bold">koptekst</h2></div>
                        <div class="border-2 border-black"><h2 class="text-xl font-bold">koptekst</h2></div>
                        </div>
                    </div>
                </div>
                <h2 class="mx-10 mt-10 text-xl font-bold">Koptekst 2</h2>
                <div class="grid bg-gray-300 border-black border-2 grid-rows-3 sm:grid-rows-2 sm:grid-cols-3 sm:grid-flow-row grid-flow-col gap-4 mx-10">
                    <div class="sm:row-span-3 sm:col-span-2 mx-10 my-10 h-auto">
                            <div class="grid grid-rows-1 grid-col-10 grid-flow-col gap-4 h-full rotate-180 vertical-text-graph">
                                <div class="h-1/4 bg-blue-600"><p class="rotate-90">1</p></div>
                                <div class="h-2/4 bg-blue-600"><p class="rotate-90">2</p></div>
                                <div class="h-3/4 bg-blue-600"><p class="rotate-90">3</p></div>
                                <div class="h-1/4 bg-blue-600"><p class="rotate-90">4</p></div>
                                <div class="h-1/4 bg-blue-600"><p class="rotate-90">5</p></div>
                                <div class="h-2/4 bg-blue-600"><p class="rotate-90">6</p></div>
                                <div class="h-1/4 bg-blue-600"><p class="rotate-90">7</p></div>
                                <div class="h-3/4 bg-blue-600"><p class="rotate-90">8</p></div>
                                <div class="h-4/4 bg-blue-600"><p class="rotate-90">9</p></div>
                                <div class="h-1/4 bg-blue-600"><p class="rotate-90">10</p></div>
                            </div>
                    </div>
                    <div class="sm:col-span-1 mx-10 my-10 h-auto"><div class="my-pie-chart2"></div></div>
                    <div class="text-center mx-10 my-10 sm:row-span-2 col-span-1 h-auto">
                        <div class="grid bg-gray-300 grid-rows-2 sm:grid-rows-2 sm:grid-cols-2 sm:grid-flow-row grid-flow-col gap-4">
                        <div class="border-2 border-black"><h2 class="text-xl font-bold">koptekst</h2></div>
                        <div class="border-2 border-black"><h2 class="text-xl font-bold">koptekst</h2></div>
                        <div class="border-2 border-black"><h2 class="text-xl font-bold">koptekst</h2></div>
                        <div class="border-2 border-black"><h2 class="text-xl font-bold">koptekst</h2></div>
                        </div>
                    </div>
                </div>
                <h2 class="mx-10 mt-10 text-xl font-bold">Koptekst 3</h2>
                <div class="grid bg-gray-300 border-black border-2 grid-rows-3 sm:grid-rows-2 sm:grid-cols-3 sm:grid-flow-row grid-flow-col gap-4 mx-10">
                    <div class="sm:row-span-3 sm:col-span-2 mx-10 my-10 h-auto">
                            <div class="grid grid-rows-1 grid-col-10 grid-flow-col gap-4 h-full rotate-180 vertical-text-graph">
                                <div class="h-1/4 bg-blue-600"><p class="rotate-90">1</p></div>
                                <div class="h-2/4 bg-blue-600"><p class="rotate-90">2</p></div>
                                <div class="h-3/4 bg-blue-600"><p class="rotate-90">3</p></div>
                                <div class="h-1/4 bg-blue-600"><p class="rotate-90">4</p></div>
                                <div class="h-1/4 bg-blue-600"><p class="rotate-90">5</p></div>
                                <div class="h-2/4 bg-blue-600"><p class="rotate-90">6</p></div>
                                <div class="h-1/4 bg-blue-600"><p class="rotate-90">7</p></div>
                                <div class="h-3/4 bg-blue-600"><p class="rotate-90">8</p></div>
                                <div class="h-4/4 bg-blue-600"><p class="rotate-90">9</p></div>
                                <div class="h-1/4 bg-blue-600"><p class="rotate-90">10</p></div>
                            </div>
                    </div>
                    <div class="sm:col-span-1 mx-10 my-10 h-auto"><div class="my-pie-chart3"></div></div>
                    <div class="text-center mx-10 my-10 sm:row-span-2 col-span-1 h-auto">
                        <div class="grid bg-gray-300 grid-rows-2 sm:grid-rows-2 sm:grid-cols-2 sm:grid-flow-row grid-flow-col gap-4">
                        <div class="border-2 border-black"><h2 class="text-xl font-bold">koptekst</h2></div>
                        <div class="border-2 border-black"><h2 class="text-xl font-bold">koptekst</h2></div>
                        <div class="border-2 border-black"><h2 class="text-xl font-bold">koptekst</h2></div>
                        <div class="border-2 border-black"><h2 class="text-xl font-bold">koptekst</h2></div>
                        </div>
                    </div>
                </div>
                <h2 class="mx-10 mt-10 text-xl font-bold">Koptekst 4</h2>
                <div class="grid bg-gray-300 border-black border-2 grid-rows-3 sm:grid-rows-2 sm:grid-cols-3 sm:grid-flow-row grid-flow-col gap-4 mx-10">
                    <div class="sm:row-span-3 sm:col-span-2 mx-10 my-10 h-auto">
                            <div class="grid grid-rows-1 grid-col-10 grid-flow-col gap-4 h-full rotate-180 vertical-text-graph">
                                <div class="h-1/4 bg-blue-600"><p class="rotate-90">1</p></div>
                                <div class="h-2/4 bg-blue-600"><p class="rotate-90">2</p></div>
                                <div class="h-3/4 bg-blue-600"><p class="rotate-90">3</p></div>
                                <div class="h-1/4 bg-blue-600"><p class="rotate-90">4</p></div>
                                <div class="h-1/4 bg-blue-600"><p class="rotate-90">5</p></div>
                                <div class="h-2/4 bg-blue-600"><p class="rotate-90">6</p></div>
                                <div class="h-1/4 bg-blue-600"><p class="rotate-90">7</p></div>
                                <div class="h-3/4 bg-blue-600"><p class="rotate-90">8</p></div>
                                <div class="h-4/4 bg-blue-600"><p class="rotate-90">9</p></div>
                                <div class="h-1/4 bg-blue-600"><p class="rotate-90">10</p></div>
                            </div>
                    </div>
                    <div class="sm:col-span-1 mx-10 my-10 h-auto"><div class="my-pie-chart4"></div></div>
                    <div class="text-center mx-10 my-10 sm:row-span-2 col-span-1 h-auto">
                        <div class="grid bg-gray-300 grid-rows-2 sm:grid-rows-2 sm:grid-cols-2 sm:grid-flow-row grid-flow-col gap-4">
                        <div class="border-2 border-black"><h2 class="text-xl font-bold">koptekst</h2></div>
                        <div class="border-2 border-black"><h2 class="text-xl font-bold">koptekst</h2></div>
                        <div class="border-2 border-black"><h2 class="text-xl font-bold">koptekst</h2></div>
                        <div class="border-2 border-black"><h2 class="text-xl font-bold">koptekst</h2></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
