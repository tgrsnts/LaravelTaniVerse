<header class="font-poppins shadow top-0 w-full z-10 h-16 bg-white">
    <div
        class="bg-white relative flex align-items-center flex-row gap-5 overflow-hidden px-4 py-4 md:px-36 md:mx-auto md:flex-row md:items-center">
        <div class="flex flex-row w-full lg:w-96">
            <form class="w-full mx-auto">
                <!-- <label for="default-search"
                    class="mb-2 text-sm font-medium text-gray-900 sr-only :text-white">Search
                </label> -->
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <input type="search" id="default-search"
                        class="block w-full px-2 py-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:outline-none focus:border-[#047D00]"
                        placeholder="Cari di TaniVerse" required />
                    <!-- <button type="submit"
                        class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 :bg-blue-600 :hover:bg-blue-700 :focus:ring-blue-800">Search</button> -->
                </div>
            </form>
        </div>

        <div class="hidden lg:flex w-full justify-end items-center gap-3 h-full">
            <div class="flex">
                <!-- <button type="button" onclick="my_modal_1.showModal()"
                    class="focus:outline-none text-white hover:bg-[#FBF6F0] font-medium rounded-md text-sm w-12 aspect-square">
                    <i class="text-gray-600 fa-solid fa-bell fa-lg"></i>
                </button> -->
                <a href="keranjang.html"
                    class="flex justify-center items-center focus:outline-none text-white hover:bg-[#FBF6F0] font-medium rounded-md text-sm w-12 aspect-square">
                    <i class="text-gray-600 fa-solid fa-cart-shopping fa-lg"></i>
                </a>
            </div>
            <a href="akun_saya.html"
                class="flex items-center gap-2 hover:bg-[#FBF6F0] py-1 px-2 rounded-md">
                <img class="w-10 rounded-full" src="{{ asset('assets/image/avatar-biru.jpg') }}" alt="">
                <p class="font-semibold text-nowrap">{{ auth()->user()->name }}</p>
            </a>
        </div>
    </div>
</header>