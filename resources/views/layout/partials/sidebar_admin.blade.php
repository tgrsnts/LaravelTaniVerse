<nav class="flex flex-col gap-1 pr-12 font-sans text-base font-normal text-blue-gray-700">
    <a href="index.html" class="flex items-center whitespace-nowrap text-2xl">
        <img class="ml-8 w-32 lg:w-24" src="image/logo-taniverse-putih.png" alt="">
    </a>
    <a href=""
        class="mt-8 {{ Request::is('dashboard') ? 'text-[#047D00] bg-[#FBF6F0]': 'text-white' }} font-poppins font-semibold flex items-center w-full py-4 pl-16 leading-tight transition-all rounded-r-lg outline-none text-start hover:bg-[#FBF6F0] hover:text-[#047D00] focus:bg-[#FBF6F0] focus:text-[#047D00] active:bg-[#FBF6F0] active:text-[#047D00]">
        <div class="grid mr-4 place-items-center">
            <i class="fa-solid fa-bag-shopping"></i>
        </div>
        Dashboard
    </a>
    <a href=""
        class="{{ Request::is('product') ? 'text-[#047D00] bg-[#FBF6F0]': 'text-white' }} font-poppins font-semibold flex items-center w-full py-4 pl-16 leading-tight transition-all rounded-r-lg outline-none text-start hover:bg-[#FBF6F0] hover:text-[#047D00] focus:bg-[#FBF6F0] focus:text-[#047D00] active:bg-[#FBF6F0] active:text-[#047D00]">
        <div class="grid mr-4 place-items-center">
            <i class="fa-solid fa-user"></i>
        </div>
        Data Produk
    </a>
    <a href=""
        class="{{ Request::is('kategori') ? 'text-[#047D00] bg-[#FBF6F0]': 'text-white' }} font-poppins font-semibold flex items-center w-full py-4 pl-16 leading-tight transition-all rounded-r-lg outline-none text-start hover:bg-[#FBF6F0] hover:text-[#047D00] focus:bg-[#FBF6F0] focus:text-[#047D00] active:bg-[#FBF6F0] active:text-[#047D00]">
        <div class="grid mr-4 place-items-center">
            <i class="fa-solid fa-bag-shopping"></i>
        </div>
        Data Kategori
    </a>
    <form action="/logout" method="POST">
        @csrf
        <button type="submit"
            class="{{ Request::is('dashboard') ? 'text-[#047D00] bg-[#FBF6F0]' : 'text-white' }} font-poppins font-semibold flex items-center w-full py-4 pl-16 leading-tight transition-all rounded-r-lg outline-none text-start hover:bg-[#FBF6F0] hover:text-[#047D00] focus:bg-[#FBF6F0] focus:text-[#047D00] active:bg-[#FBF6F0] active:text-[#047D00]">
            <div class="grid mr-4 place-items-center">
                <i class="fa-solid fa-right-from-bracket"></i>
            </div>
            Log Out
        </button>
    </form>
</nav>