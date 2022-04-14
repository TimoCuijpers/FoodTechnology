<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Devices') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg bg-gray-100">
                <div class="grid grid-cols-3 grid-rows-1 w-6/7 mx-auto">
                    <div>
                        <h1 class="mt-10 mb-16 text-4xl font-bold">My devices</h1>
                    </div>
                    <div></div>
                </div>

                <div class="grid grid-cols-3 grid-rows-1 w-6/7 mx-auto border-collapse gap-10 text-center">
                    <div class="border rounded-md bg-white">
                        <a href="">
                            <img src="{{ asset('img/Tonie.png') }}" alt="" class="h-[150px] mx-auto">
                            <p class="pt-4">
                                Your water storage
                            </p>
                            <p class="pb-4 text-red-500">
                                90% full
                            </p>
                        </a>
                    </div>
                    <div class="border rounded-md bg-white">
                        <a href="">
                            <img src="{{ asset('img/WaterTap.jpg') }}" alt="" class="h-[150px] w-auto mx-auto">
                            <p class="pt-4">
                                Your water usage
                            </p>
                            <p class="pb-4 text-yellow-500">
                                You have used 8% (1,4l) above your usage limit
                            </p>
                        </a>
                    </div>
                    <div class="border rounded-md bg-white">
                        <a href="">
                            <img src="{{ asset('img/Plant.avif') }}" alt="" class="h-[150px] w-auto mx-auto">
                            <p class="py-4">
                                Your plants water usage
                            </p>
                        </a>
                    </div>
                </div>
                <div class="grid grid-cols-3 grid-rows-1 w-6/7 mx-auto">
                    <div class="col-span-2">
                        <h1 class="mt-14 mb-14 text-4xl font-bold">Public water information</h1>
                    </div>
                    <div></div>
                </div>
                <div class="grid grid-cols-3 grid-rows-1 w-6/7 mx-auto border-collapse gap-10 text-center">
                    <div class="border rounded-md bg-white">
                        <a href="">
                            <img src="{{ asset('img/LogoBrabantWater.png') }}" alt=""
                                class="h-[150px] w-auto mx-auto">
                            <p class="py-4">
                                Public water usage
                            </p>
                        </a>
                    </div>
                    <div class="border rounded-md bg-white">
                        <a href="">
                            <img src="{{ asset('img/BuienRadarLogo.png') }}" alt="" class="h-[150px] w-auto mx-auto">
                            <p class="pt-4">
                                Weather forecast
                            </p>
                            <p class="pb-4 text-red-500">
                                Dry period ahead
                            </p>
                        </a>
                    </div>


                    <div></div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
