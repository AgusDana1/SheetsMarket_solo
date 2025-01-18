<div class="w-full flex flex-col mt-24  items-center">
    <div class="location w-5/6 ml-30">
        {{-- Location --}}
        <div class=" flex justify-end items-center space-x-1 text-gray-600">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 21l-1.447-1.342C5.42 14.731 3 11.706 3 8.5a6 6 0 1 1 12 0c0 3.206-2.42 6.231-7.553 11.158L12 21z" />
            </svg>
            <span>Dikirim ke <strong class="text-black">Denpasar</strong></span>
        </div>
    </div>

    {{-- Img 2 Non Slider --}}
    <div class="container gap-4 p-6 justify-center flex w-full ">
        <div class="w-1/2">
            <img class="rounded-md shadow-md" src="{{ asset('img/asset-skincare2.jpg') }}" alt="">
        </div>

        <div class="w-1/2">
            <img class="roundeddd-md shadow-lg" src="{{ asset('img/skincare-asset.png') }}" alt="">
        </div>
    </div>

    {{-- Container Kategori --}}
    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-wrap gap-4 md:gap-0 justify-between items-start bg-white shadow-md rounded-lg p-6">
            {{-- Kategori Pilihan --}}
                <div class="w-full md:w-2/3 p-4">
                    <h2 class="text-lg font-bold mb-4 font-poppins">Kategori Pilihan</h2>
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">

                        {{-- Item 1 --}}
                        <div class="relative rounded-lg p-2 flex flex-col items-center">
                            <div class="absolute top-0 left-0 bg-white text-black rounded-full w-6 h-6 flex items-center justify-center text-sm font-bold">
                                1
                            </div>
                            <img src="{{ asset('img/asset-skincare2.jpg') }}" alt="Serum" class="w-full rounded-lg mb-2 shadow-md">
                            <p class="text-sm font-bold text-center font-poppins">Serum</p>
                        </div>

                        {{-- Items 2 --}}
                            <div class="relative rounded-lg p-2 flex flex-col items-center">
                                <div class="absolute top-0 left-0 bg-white text-black rounded-full w-6 h-6 flex items-center justify-center text-sm font-bold">
                                    2
                                </div>
                                <img src="{{ asset('img/skincare-asset.png') }}" alt="Toner" class="w-full rounded-lg mb-2 shadow-md">
                                <p class="text-sm font-bold text-center font-poppins">Toner</p>
                            </div>

                        {{-- Items 3 --}}
                            <div class="relative rounded-lg p-2 flex flex-col items-center">
                                <div class="absolute top-0 left-0 bg-white text-black rounded-full w-6 h-6 flex items-center justify-center text-sm font-bold">
                                    3
                                </div>
                                <img src="{{ asset('img/asset-skincare2.jpg') }}" alt="Serum" class="w-full rounded-lg mb-2 shadow-md">
                                <p class="text-sm font-bold text-center font-poppins">Serum</p>
                            </div>

                        {{-- Items 4 --}}
                            <div class="relative rounded-lg p-2 flex flex-col items-center">
                                <div class="absolute top-0 left-0 bg-white text-black rounded-full w-6 h-6 flex items-center justify-center text-sm font-bold">
                                    4
                                </div>
                                <img src="{{ asset('img/skincare-asset.png') }}" alt="Toner" class="w-full rounded-lg mb-2 shadow-md">
                                <p class="text-sm font-bold text-center font-poppins">Toner</p>
                            </div>
                    </div>
                </div>

                {{-- Topup & tagihan --}}
                <div class="w-full md:w-1/3">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-lg font-bold font-poppins">TopUp & Tagihan</h2>
                        <a href="#product" class="text-cyan-500 text-sm font-bold font-poppins">Lihat Semua</a>
                </div>
                {{-- Tabs --}}
                <div class="bg-gray-100 rounded-lg shadow p-4 ">
                    <div class="flex border-b border-gray-300">
                        <button class="flex-1 py-2 text-center font-bold border-b-2 font-poppins">Top Up</button>
                        <button class="flex-1 py-2 text-center font-bold text-gray-400 font-poppins">Tagihan</button>
                    </div>
                    {{-- Form (nanti akan diberikan action ke payment)  --}}
                    <form class="mt-4 space-y-4">
                        <div class="flex justify-center items-center gap-2 ">
                            <div class="w-1/2 text-sm flex flex-col gap-2">
                                <label for="phone" class="block text-sm font-medium font-poppins">No.Telephone</label>
                                <input type="text" id="phone" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-cyan-500 focus:outline-none" placeholder="No Telephone">
                            </div>
                            <div class="w-1/2 text-sm flex flex-col gap-2">
                                <label for="amount" class="block text-sm font-medium font-poppins">Nominal</label>
                                <input type="text" id="amount" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-cyan-500 focus:outline-none" placeholder="Nominal">
                            </div>
                        </div>
                        <button type="submit" class="w-1/4 bg-cyan-500 text-white rounded-md px-4 py-2 font-poppins hover:bg-cyan-600">Beli</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Trending --}}
    <div id="product" class="container mx-auto px-4 py-8">
        <h2 class="text-xl font-bold mb-6 ml-2 font-poppins">Lagi Trending, nih!</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-6">
            <x-card-product></x-card-product>
            <x-card-product></x-card-product>
            <x-card-product></x-card-product>
            <x-card-product></x-card-product>
            <x-card-product></x-card-product>
            <x-card-product></x-card-product>
            <x-card-product></x-card-product>
            <x-card-product></x-card-product>
            <x-card-product></x-card-product>
        </div>
    </div>
    <div class="bg-gray-400 w-full h-8 shadow-lg"></div>

    {{-- Berdasarkan Pencarian --}}
    <div class="container mx-auto px-4 py-8">
        <h2 class="text-xl font-bold font-poppins mt-6 ml-3">Berdasarkan Pencarianmu</h2>
        <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 shadow-xl rounded-lg">
            <x-card-pencarian-product></x-card-pencarian-product>
            <x-card-pencarian-product></x-card-pencarian-product>
            <x-card-pencarian-product></x-card-pencarian-product>
            <x-card-pencarian-product></x-card-pencarian-product>
            <x-card-pencarian-product></x-card-pencarian-product>
            <x-card-pencarian-product></x-card-pencarian-product>
            <x-card-pencarian-product></x-card-pencarian-product>
            <x-card-pencarian-product></x-card-pencarian-product>
        </div>
    </div>
    <div class="bg-gray-400 w-full h-8 shadow-lg"></div>

    {{-- Cari Semua di SheetsMarket --}}
    <div class="gap-5 mb-7">
        <h3 class="flex justify-center font-xl font-bold font-poppins mt-6 mb-5 gap-1">Cari Semua di <span class="text-cyan-500">SheetsMarket!!</span></h3>

        <div class="flex justify-center gap-5 items-center">
            <div class="bg-blue-500 w-44 h-15 p-3 rounded-full hover:bg-blue-700 transition-all cursor-pointer">
                <h3 class="font-lg font-bold text-white font-poppins flex justify-center">Scintific</h3>
            </div>
            <div class="bg-blue-500 w-44 h-15 p-3 rounded-full hover:bg-blue-700 transition-all cursor-pointer">
                <h3 class="font-lg font-bold text-white font-poppins flex justify-center">Mosturizer</h3>
            </div>
            <div class="bg-blue-500 w-44 h-15 p-3 rounded-full hover:bg-blue-700 transition-all cursor-pointer">
                <h3 class="font-lg font-bold text-white font-poppins flex justify-center">Lip Balm</h3>
            </div>
        </div>
    </div>

    <div class="bg-gray-400 w-full h-8 shadow-lg"></div>
</div>