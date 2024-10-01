<header class="shadow fixed top-0 w-full z-10 h-20 bg-[#047D00]">
    <div
        class="bg-[#047D00] relative flex justify-between lg:justify-start flex-col lg:flex-row lg:h-20 overflow-hidden px-4 py-4 md:px-36 md:mx-auto md:flex-wrap md:items-center">
        <a href="index.html" class="flex items-center whitespace-nowrap text-2xl">
            <img class="h-12" src="{{ asset('assets/image/logo-taniverse-putih.png') }}" alt="">
        </a>

        <!-- Hamburger Menu for Mobile -->
        <input type="checkbox" class="peer hidden" id="navbar-open" />
        <label class="absolute top-7 right-8 cursor-pointer md:hidden" for="navbar-open">
            <span class="sr-only">Toggle Navigation</span>
            <i class="fa-solid fa-bars h-6 w-6 text-white"></i>
        </label>

        <!-- Navigation Menu -->
        <nav aria-label="Header Navigation"
            class="peer-checked:max-h-60 max-h-0 w-full lg:w-auto flex-col flex lg:flex-row lg:max-h-full overflow-hidden transition-all duration-300 lg:items-center lg:ml-auto">
            <ul
                class="flex flex-col lg:flex-row lg:space-y-0 space-y-4 items-center lg:ml-auto font-poppins font-semibold">
                <li class="text-white border-b-2 border-[#047D00] md:mr-12 hover:border-white">
                    <a href="#hero">Home</a>
                </li>
                <li class="text-white border-b-2 border-[#047D00] md:mr-12 hover:border-white">
                    <a href="#tentang">Tentang Kami</a>
                </li>
                <li class="text-white border-b-2 border-[#047D00] md:mr-12 hover:border-white">
                    <a href="#belanja">Produk</a>
                </li>
                @if (Auth::guard('admin')->check() || Auth::guard('user')->check())
                    <li
                        class="text-white border-2 border-white md:mr-12 px-4 py-2 hover:bg-[#035700] hover:border-[#047D00] focus:bg-[#035700] focus:border-[#047D00]">
                        <a href="/dashboard">Dashboard</a>
                    </li>
                @else
                    <button
                        class="text-white border-2 md:mr-12 px-4 py-2 border-white cursor-pointer hover:bg-[#035700] hover:border-[#047D00] focus:bg-[#035700] focus:border-[#047D00]"
                        onclick="modal_login.showModal()">Masuk</button>
                @endif

            </ul>
        </nav>
    </div>
</header>
