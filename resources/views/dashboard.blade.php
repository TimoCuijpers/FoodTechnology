<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h1 class="mx-10 mt-10 text-4xl font-bold">Dashboard</h1>
                <h2 class="mx-10 mt-10 text-xl font-bold">Koptekst 1</h2>
                <div class="grid  bg-gray-300 border-black border-2 grid-rows-3 sm:grid-rows-2 sm:grid-cols-3 sm:grid-flow-row grid-flow-col gap-4 mx-10">
                    <div class="sm:row-span-3 sm:col-span-2 mx-10 my-10 h-auto"><img class="mx-auto w-auto" src=" {{ asset('img/grafiek.svg') }}" alt=""></div>
                    <div class="sm:col-span-1 mx-10 my-10 h-auto"><img class="mx-auto" src=" {{ asset('img/cirkelDiagram.webp') }}" alt=""></div>
                    <div class="mx-auto text-center mx-10 my-10 sm:row-span-2 col-span-1 h-auto">cijfers:
                                                              <br>
                                                              500
                                                              <br>
                                                              600
                                                              <br>
                                                              700
                    </div>
                </div>
                <h2 class="mx-10 mt-10 text-xl font-bold">Koptekst 2</h2>
                <div class="grid  bg-gray-300 border-black border-2 grid-rows-3 sm:grid-rows-2 sm:grid-cols-3 sm:grid-flow-row grid-flow-col gap-4 mx-10">
                    <div class="sm:row-span-3 sm:col-span-2 mx-10 my-10 h-auto"><img class="mx-auto w-auto" src=" {{ asset('img/grafiek.svg') }}" alt=""></div>
                    <div class="sm:col-span-1 mx-10 my-10 h-auto"><img class="mx-auto" src=" {{ asset('img/cirkelDiagram.webp') }}" alt=""></div>
                    <div class="mx-auto mx-10 my-10 text-center sm:row-span-2 col-span-1 h-auto">cijfers:
                                                              <br>
                                                              500
                                                              <br>
                                                              600
                                                              <br>
                                                              700
                    </div>
                </div>
                <h2 class="mx-10 mt-10 text-xl font-bold">Koptekst 3</h2>
                <div class="grid  bg-gray-300 border-black border-2 grid-rows-3 sm:grid-rows-2 sm:grid-cols-3 sm:grid-flow-row grid-flow-col gap-4 mx-10">
                    <div class="sm:row-span-3 sm:col-span-2 mx-10 my-10 h-auto"><img class="mx-auto w-auto" src=" {{ asset('img/grafiek.svg') }}" alt=""></div>
                    <div class="sm:col-span-1 mx-10 my-10 h-auto"><img class="mx-auto" src=" {{ asset('img/cirkelDiagram.webp') }}" alt=""></div>
                    <div class="mx-auto mx-10 my-10 text-center sm:row-span-2 col-span-1 h-auto">cijfers:
                                                              <br>
                                                              500
                                                              <br>
                                                              600
                                                              <br>
                                                              700
                    </div>
                </div>
                <h2 class="mx-10 mt-10 text-xl font-bold">Koptekst 4</h2>
                <div class="grid  bg-gray-300 border-black border-2 grid-rows-3 sm:grid-rows-2 sm:grid-cols-3 sm:grid-flow-row grid-flow-col gap-4 mb-10 mx-10">
                    <div class="sm:row-span-3 sm:col-span-2 mx-10 my-10 h-auto"><img class="mx-auto w-auto" src=" {{ asset('img/grafiek.svg') }}" alt=""></div>
                    <div class="sm:col-span-1 mx-10 my-10 h-auto"><img class="mx-auto" src=" {{ asset('img/cirkelDiagram.webp') }}" alt=""></div>
                    <div class="mx-auto text-center mx-10 my-10 sm:row-span-2 col-span-1 h-auto">cijfers:
                                                              <br>
                                                              500
                                                              <br>
                                                              600
                                                              <br>
                                                              700
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
