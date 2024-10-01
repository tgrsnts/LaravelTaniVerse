@extends('layout.main_user')

@section('content')
    <section id="menu" class="mt-4 px-4 lg:px-36 py-20 bg-gray-100">
        <div class="container mx-auto text-center">
            <!-- Accordion Horizontal -->
            <!-- <div class="flex justify-center font-poppins mb-4">
                            <div class="w-32 h-16  mx-2 flex items-center justify-center cursor-pointer">
                                <button
                                    class="w-full py-2 border-b-4 border-primary hover:text-primary focus:border-primary focus:text-primary focus:border-primary text-primary">
                                    All</button>
                            </div>
                            <div class="w-32 h-16  mx-2 flex items-center justify-center cursor-pointer">
                                <button
                                    class="w-full py-2 border-b-4 border-gray-100  hover:text-primary focus:border-primary focus:text-primary focus:border-primary ">
                                    Benih
                                </button>
                            </div>
                            <div class="w-32 h-16  mx-2 flex items-center justify-center cursor-pointer">
                                <button
                                    class="w-full py-2 border-b-4 border-gray-100  hover:text-primary focus:border-primary focus:text-primary focus:border-primary ">
                                    Pupuk
                                </button>
                            </div>
                        </div> -->

            <div class="divider my-20">
                <span class="font-poppins font-bold text-3xl text-[#45B041] px-8">PUPUK</span>
            </div>

            <!-- Card -->
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-2 lg:justify-center">
                @foreach ($data_pupuk as $item)
                    <a href="detail/{{ $item->id }}"
                        class="flex flex-col w-full lg:w-full bg-[#FBF6F0] rounded-lg shadow-md ">
                        <img src="{{ asset('assets/image/product/'.$item->foto) }}" alt="Impresol"
                            class="w-full object-cover mb-2 rounded-t-lg">
                        <h3 class="text-sm lg:text-lg font-poppins font-semibold text-left ms-4 text-[#45B041]">Impresol
                        </h3>
                        <h3 class="text-sm lg:text-md font-poppins text-left ms-4 text-gray-400">Produk Pertanian</h3>
                        <div class="flex items-center justify-between px-4 mt-auto">
                            <div class="font-poppins text-[#45B041] mb-2">Rp <span class="text-md">50.000</span>
                            </div>
                            <button
                                class="bg-[#45B041] text-white rounded-md px-3 py-2 font-poppins mb-4 hover:bg-[#237F20]"><i
                                    class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </a>
                @endforeach
            </div>

            <div class="divider my-20">
                <span class="font-poppins font-bold text-3xl text-[#45B041] px-8">BENIH SAYURAN</span>
            </div>

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-2 lg:justify-center">
                @foreach ($data_benih as $item)
                    <a href="detail/{{ $item->id }}"
                        class="flex flex-col w-full lg:w-full bg-[#FBF6F0] rounded-lg shadow-md ">
                        <img src="{{ asset('assets/image/product/'.$item->foto) }}" alt="Impresol"
                            class="w-full object-cover mb-2 rounded-t-lg">
                        <h3 class="text-sm lg:text-lg font-poppins font-semibold text-left ms-4 text-[#45B041]">Impresol
                        </h3>
                        <h3 class="text-sm lg:text-md font-poppins text-left ms-4 text-gray-400">Produk Pertanian</h3>
                        <div class="flex items-center justify-between px-4 mt-auto">
                            <div class="font-poppins text-[#45B041] mb-2">Rp <span class="text-md">50.000</span>
                            </div>
                            <button
                                class="bg-[#45B041] text-white rounded-md px-3 py-2 font-poppins mb-4 hover:bg-[#237F20]"><i
                                    class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </a>
                @endforeach
            </div>

            <div class="divider my-20">
                <span class="font-poppins font-bold text-3xl text-[#45B041] px-8">SAYUR</span>
            </div>

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-2 lg:justify-center">
                @foreach ($data_sayur as $item)
                    <a href="detail/{{ $item->id }}"
                        class="flex flex-col w-full lg:w-full bg-[#FBF6F0] rounded-lg shadow-md ">
                        <img src="{{ asset('assets/image/product/'.$item->foto) }}" alt="Impresol"
                            class="w-full object-cover mb-2 rounded-t-lg">
                        <h3 class="text-sm lg:text-lg font-poppins font-semibold text-left ms-4 text-[#45B041]">Impresol
                        </h3>
                        <h3 class="text-sm lg:text-md font-poppins text-left ms-4 text-gray-400">Produk Pertanian</h3>
                        <div class="flex items-center justify-between px-4 mt-auto">
                            <div class="font-poppins text-[#45B041] mb-2">Rp <span class="text-md">50.000</span>
                            </div>
                            <button
                                class="bg-[#45B041] text-white rounded-md px-3 py-2 font-poppins mb-4 hover:bg-[#237F20]"><i
                                    class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <div class="pt-2 lg:hidden">
        <div
            class="drop-shadow-2xl fixed bottom-0 lg:static w-full bg-white lg:bg-transparent p-2 flex flex-row lg:flex-col gap-2 items-center justify-center">
            <!-- <button href="" onclick="my_modal.showModal()"
                            class="bg-[#047D00] font-poppins font-semibold rounded-lg px-4 py-2 border-2 border-[#047D00] text-white text-center w-full hover:bg-secondary">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </button>
                        <button href="" onclick="my_modal.showModal()"
                            class="bg-white font-poppins font-semibold rounded-lg px-4 py-2 border-2 border-[#047D00] text-[#047D00] text-center w-full hover:bg-[#047D00] hover:text-white hover:border-white">
                            Beli
                        </button> -->
            <div class="grid h-full max-w-lg grid-cols-5 mx-auto">
                <a href="dashboard.html" data-tooltip-target="tooltip-home"
                    class="inline-flex flex-col items-center justify-center px-5 rounded-s-md hover:bg-gray-100 dark:hover:bg-gray-800 group">
                    <!-- <svg class="w-5 h-5 mb-1 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                                </svg> -->
                    <i
                        class="fa-solid fa-home text-gray-500 dark:text-gray-400 group-hover:text-[#047D00] dark:group-hover:text-[#047D00]"></i>
                    <span class="sr-only">Home</span>
                </a>
                <div id="tooltip-home" role="tooltip"
                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                    Home
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                <button data-tooltip-target="tooltip-wallet" type="button"
                    class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-100 dark:hover:bg-gray-800 group">
                    <svg class="w-5 h-5 mb-1 text-gray-500 dark:text-gray-400 group-hover:text-[#047D00] dark:group-hover:text-[#047D00]"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M11.074 4 8.442.408A.95.95 0 0 0 7.014.254L2.926 4h8.148ZM9 13v-1a4 4 0 0 1 4-4h6V6a1 1 0 0 0-1-1H1a1 1 0 0 0-1 1v13a1 1 0 0 0 1 1h17a1 1 0 0 0 1-1v-2h-6a4 4 0 0 1-4-4Z" />
                        <path
                            d="M19 10h-6a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1Zm-4.5 3.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM12.62 4h2.78L12.539.41a1.086 1.086 0 1 0-1.7 1.352L12.62 4Z" />
                    </svg>
                    <span class="sr-only">Wallet</span>
                </button>
                <div id="tooltip-wallet" role="tooltip"
                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                    Wallet
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                <div class="flex items-center justify-center">
                    <a href="keranjang.html" data-tooltip-target="tooltip-new"
                        class="inline-flex items-center justify-center w-10 h-10 font-medium bg-[#047D00] rounded-full group focus:ring-4 focus:bg-[#047D00] focus:ring-[#047D00] focus:outline-none dark:focus:ring-[#047D00]">
                        <i class="text-white fa-solid fa-cart-shopping"></i>
                        <span class="sr-only">New item</span>
                    </a>
                </div>
                <div id="tooltip-new" role="tooltip"
                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                    Create new item
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                <button data-tooltip-target="tooltip-settings" type="button"
                    class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
                    <svg class="w-5 h-5 mb-1 text-gray-500 dark:text-gray-400 group-hover:text-[#047D00] dark:group-hover:text-[#047D00]"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 12.25V1m0 11.25a2.25 2.25 0 0 0 0 4.5m0-4.5a2.25 2.25 0 0 1 0 4.5M4 19v-2.25m6-13.5V1m0 2.25a2.25 2.25 0 0 0 0 4.5m0-4.5a2.25 2.25 0 0 1 0 4.5M10 19V7.75m6 4.5V1m0 11.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5ZM16 19v-2" />
                    </svg>
                    <span class="sr-only">Settings</span>
                </button>
                <div id="tooltip-settings" role="tooltip"
                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                    Settings
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                <a href="akun_saya.html" data-tooltip-target="tooltip-profile"
                    class="inline-flex flex-col items-center justify-center px-5 rounded-e-full hover:bg-gray-50 dark:hover:bg-gray-800 group">
                    <svg class="w-5 h-5 mb-1 text-gray-500 dark:text-gray-400 group-hover:text-[#047D00] dark:group-hover:text-[#047D00]"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                    </svg>
                    <span class="sr-only">Profile</span>
                </a>
                <div id="tooltip-profile" role="tooltip"
                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                    Profile
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
            </div>
        </div>
    </div>
@endsection
