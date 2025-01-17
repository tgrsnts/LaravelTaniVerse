<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaniVerse</title>
    <link rel="icon" type="image/png" href="{{ asset('/assets/image/favicon.png') }}">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Tailwind -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- DaisyUI  -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.1/dist/full.min.css" rel="stylesheet" type="text/css" />

    <!-- Icons -->
    <script src="https://kit.fontawesome.com/f87eaab4e6.js" crossorigin="anonymous"></script>
</head>

<body>

    <!-- Navbar -->
    @include('layout.partials.navbar')

    <!-- Modal Login  -->
    <dialog id="modal_login" class="modal backdrop-blur-lg">
        <div class="modal-box font-poppins p-0 w-76 lg:w-96 flex flex-col">
            <div class="flex items-center bg-[#047D00] rounded-t-lg h-24 lg:h-40">
                <h2 class="text-2xl lg:text-5xl font-bold text-center text-white w-full">Login</h2>
            </div>
            <div class="px-8 pt-4 pb-12">
                <form id="loginForm" action="/login" method="POST" class="flex flex-col gap-2">
                    @csrf
                    <div class="flex flex-col">
                        <label for="username">Username</label>
                        <input name="email" type="text" id="username" placeholder="Masukkan username"
                            class="w-full p-2 rounded-md bg-gray-100 focus:outline-none focus:ring focus:ring-[#047D00] focus-border-[#047D00]">
                    </div>
                    <div class="flex flex-col">
                        <label for="password">Password</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 right-0 flex items-center px-2">
                                <input class="hidden js-password-toggle" id="toggle" type="checkbox" />
                                <label
                                    class="bg-gray-300 hover:bg-gray-400 rounded px-2 py-1 text-sm text-gray-600 font-mono cursor-pointer js-password-label"
                                    for="toggle"><i class="fa-solid fa-eye"></i></label>
                            </div>
                            <input name="password" type="password" id="password" placeholder="Masukkan password"
                                class="js-password w-full p-2 rounded-md bg-gray-100 focus:outline-none focus:ring focus:ring-[#047D00] focus-border-[#047D00]">
                        </div>
                        <a href=""
                            class="mt-1 text-sm text-[#047D00] hover:text-[#035700] hover:underline hover:underline-[#035700] hover:underline-offset-4">Lupa
                            password?</a>
                    </div>
                    <div class="flex flex-col mt-2">
                        <button type="submit"
                            class="p-2 rounded-md bg-[#047D00] text-white hover:bg-[#035700]">Login</button>
                    </div>
                </form>
                <div class="divider">atau masuk dengan</div>
                <button
                    class="mt-2 flex justify-center items-center gap-2 w-full border-2 rounded-md py-1 text-black hover:bg-gray-100 hover:text-[#035700]"
                    onclick="modal_register.showModal()">
                    <svg class="w-8 aspect-square" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" id="Capa_1"
                        style="enable-background:new 0 0 150 150;" version="1.1" viewBox="0 0 150 150"
                        xml:space="preserve">
                        <style type="text/css">
                            .st0 {
                                fill: #1A73E8;
                            }

                            .st1 {
                                fill: #EA4335;
                            }

                            .st2 {
                                fill: #4285F4;
                            }

                            .st3 {
                                fill: #FBBC04;
                            }

                            .st4 {
                                fill: #34A853;
                            }

                            .st5 {
                                fill: #4CAF50;
                            }

                            .st6 {
                                fill: #1E88E5;
                            }

                            .st7 {
                                fill: #E53935;
                            }

                            .st8 {
                                fill: #C62828;
                            }

                            .st9 {
                                fill: #FBC02D;
                            }

                            .st10 {
                                fill: #1565C0;
                            }

                            .st11 {
                                fill: #2E7D32;
                            }

                            .st12 {
                                fill: #F6B704;
                            }

                            .st13 {
                                fill: #E54335;
                            }

                            .st14 {
                                fill: #4280EF;
                            }

                            .st15 {
                                fill: #34A353;
                            }

                            .st16 {
                                clip-path: url(#SVGID_2_);
                            }

                            .st17 {
                                fill: #188038;
                            }

                            .st18 {
                                opacity: 0.2;
                                fill: #FFFFFF;
                                enable-background: new;
                            }

                            .st19 {
                                opacity: 0.3;
                                fill: #0D652D;
                                enable-background: new;
                            }

                            .st20 {
                                clip-path: url(#SVGID_4_);
                            }

                            .st21 {
                                opacity: 0.3;
                                fill: url(#_45_shadow_1_);
                                enable-background: new;
                            }

                            .st22 {
                                clip-path: url(#SVGID_6_);
                            }

                            .st23 {
                                fill: #FA7B17;
                            }

                            .st24 {
                                opacity: 0.3;
                                fill: #174EA6;
                                enable-background: new;
                            }

                            .st25 {
                                opacity: 0.3;
                                fill: #A50E0E;
                                enable-background: new;
                            }

                            .st26 {
                                opacity: 0.3;
                                fill: #E37400;
                                enable-background: new;
                            }

                            .st27 {
                                fill: url(#Finish_mask_1_);
                            }

                            .st28 {
                                fill: #FFFFFF;
                            }

                            .st29 {
                                fill: #0C9D58;
                            }

                            .st30 {
                                opacity: 0.2;
                                fill: #004D40;
                                enable-background: new;
                            }

                            .st31 {
                                opacity: 0.2;
                                fill: #3E2723;
                                enable-background: new;
                            }

                            .st32 {
                                fill: #FFC107;
                            }

                            .st33 {
                                opacity: 0.2;
                                fill: #1A237E;
                                enable-background: new;
                            }

                            .st34 {
                                opacity: 0.2;
                            }

                            .st35 {
                                fill: #1A237E;
                            }

                            .st36 {
                                fill: url(#SVGID_7_);
                            }

                            .st37 {
                                fill: #FBBC05;
                            }

                            .st38 {
                                clip-path: url(#SVGID_9_);
                                fill: #E53935;
                            }

                            .st39 {
                                clip-path: url(#SVGID_11_);
                                fill: #FBC02D;
                            }

                            .st40 {
                                clip-path: url(#SVGID_13_);
                                fill: #E53935;
                            }

                            .st41 {
                                clip-path: url(#SVGID_15_);
                                fill: #FBC02D;
                            }
                        </style>
                        <g>
                            <path class="st14"
                                d="M120,76.1c0-3.1-0.3-6.3-0.8-9.3H75.9v17.7h24.8c-1,5.7-4.3,10.7-9.2,13.9l14.8,11.5   C115,101.8,120,90,120,76.1L120,76.1z" />
                            <path class="st15"
                                d="M75.9,120.9c12.4,0,22.8-4.1,30.4-11.1L91.5,98.4c-4.1,2.8-9.4,4.4-15.6,4.4c-12,0-22.1-8.1-25.8-18.9   L34.9,95.6C42.7,111.1,58.5,120.9,75.9,120.9z" />
                            <path class="st12"
                                d="M50.1,83.8c-1.9-5.7-1.9-11.9,0-17.6L34.9,54.4c-6.5,13-6.5,28.3,0,41.2L50.1,83.8z" />
                            <path class="st13"
                                d="M75.9,47.3c6.5-0.1,12.9,2.4,17.6,6.9L106.6,41C98.3,33.2,87.3,29,75.9,29.1c-17.4,0-33.2,9.8-41,25.3   l15.2,11.8C53.8,55.3,63.9,47.3,75.9,47.3z" />
                        </g>
                    </svg> Google
                </button>
                <div class="mt-2 text-center">
                    Belum punya akun? <form method="dialog" class="inline">
                        <button
                            class="buttonSwitchToLoginOrRegister text-[#047D00] hover:text-[#035700] hover:underline hover:underline-[#035700] hover:underline-offset-4"
                            onclick="modal_register.showModal()">Daftar!</button>
                    </form>
                </div>
            </div>
        </div>
        <form method="dialog" class="modal-backdrop">
            <button>close</button>
        </form>
    </dialog>

    <!-- Modal Register  -->
    <dialog id="modal_register" class="modal backdrop-blur-lg">
        <div class="modal-box font-poppins p-0 w-76 lg:w-96 flex flex-col">
            <div class="flex items-center bg-[#047D00] rounded-t-lg h-24 lg:h-40">
                <h2 class="text-2xl lg:text-5xl font-bold text-center text-white w-full">Daftar</h2>
            </div>
            <div class="px-8 pt-4 pb-12">
                <form id="registerForm" action="" class="flex flex-col gap-2">
                    <div class="flex flex-col">
                        <label for="namaRegister">Nama</label>
                        <input type="text" id="namaRegister" placeholder="Masukkan nama"
                            class="w-full p-2 rounded-md bg-gray-100 focus:outline-none focus:ring focus:ring-[#047D00] focus-border-[#047D00]">
                    </div>
                    <div class="flex flex-col">
                        <label for="username-register">Username</label>
                        <input type="text" id="username-register" placeholder="Masukkan username"
                            class="w-full p-2 rounded-md bg-gray-100 focus:outline-none focus:ring focus:ring-[#047D00] focus-border-[#047D00]">
                    </div>
                    <div class="flex flex-col">
                        <label for="password-register">Password</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 right-0 flex items-center px-2">
                                <input class="hidden js-password-toggle" id="toggle-register" type="checkbox" />
                                <label
                                    class="bg-gray-300 hover:bg-gray-400 rounded px-2 py-1 text-sm text-gray-600 font-mono cursor-pointer js-password-label"
                                    for="toggle-register"><i class="fa-solid fa-eye"></i></label>
                            </div>
                            <input type="password" id="password-register" placeholder="Masukkan password"
                                class="js-password w-full p-2 rounded-md bg-gray-100 focus:outline-none focus:ring focus:ring-[#047D00] focus-border-[#047D00]">
                        </div>
                    </div>
                    <div class="flex flex-col mt-4">
                        <button type="submit"
                            class="p-2 rounded-md bg-[#047D00] text-white hover:bg-[#035700]">Daftar</button>
                    </div>
                </form>
                <div class="divider">atau daftar dengan</div>
                <button
                    class="mt-2 flex justify-center items-center gap-2 w-full border-2 rounded-md py-1 text-black hover:bg-gray-100 hover:text-[#035700]"
                    onclick="modal_register.showModal()">
                    <svg class="w-8 aspect-square" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" id="Capa_1"
                        style="enable-background:new 0 0 150 150;" version="1.1" viewBox="0 0 150 150"
                        xml:space="preserve">
                        <style type="text/css">
                            .st0 {
                                fill: #1A73E8;
                            }

                            .st1 {
                                fill: #EA4335;
                            }

                            .st2 {
                                fill: #4285F4;
                            }

                            .st3 {
                                fill: #FBBC04;
                            }

                            .st4 {
                                fill: #34A853;
                            }

                            .st5 {
                                fill: #4CAF50;
                            }

                            .st6 {
                                fill: #1E88E5;
                            }

                            .st7 {
                                fill: #E53935;
                            }

                            .st8 {
                                fill: #C62828;
                            }

                            .st9 {
                                fill: #FBC02D;
                            }

                            .st10 {
                                fill: #1565C0;
                            }

                            .st11 {
                                fill: #2E7D32;
                            }

                            .st12 {
                                fill: #F6B704;
                            }

                            .st13 {
                                fill: #E54335;
                            }

                            .st14 {
                                fill: #4280EF;
                            }

                            .st15 {
                                fill: #34A353;
                            }

                            .st16 {
                                clip-path: url(#SVGID_2_);
                            }

                            .st17 {
                                fill: #188038;
                            }

                            .st18 {
                                opacity: 0.2;
                                fill: #FFFFFF;
                                enable-background: new;
                            }

                            .st19 {
                                opacity: 0.3;
                                fill: #0D652D;
                                enable-background: new;
                            }

                            .st20 {
                                clip-path: url(#SVGID_4_);
                            }

                            .st21 {
                                opacity: 0.3;
                                fill: url(#_45_shadow_1_);
                                enable-background: new;
                            }

                            .st22 {
                                clip-path: url(#SVGID_6_);
                            }

                            .st23 {
                                fill: #FA7B17;
                            }

                            .st24 {
                                opacity: 0.3;
                                fill: #174EA6;
                                enable-background: new;
                            }

                            .st25 {
                                opacity: 0.3;
                                fill: #A50E0E;
                                enable-background: new;
                            }

                            .st26 {
                                opacity: 0.3;
                                fill: #E37400;
                                enable-background: new;
                            }

                            .st27 {
                                fill: url(#Finish_mask_1_);
                            }

                            .st28 {
                                fill: #FFFFFF;
                            }

                            .st29 {
                                fill: #0C9D58;
                            }

                            .st30 {
                                opacity: 0.2;
                                fill: #004D40;
                                enable-background: new;
                            }

                            .st31 {
                                opacity: 0.2;
                                fill: #3E2723;
                                enable-background: new;
                            }

                            .st32 {
                                fill: #FFC107;
                            }

                            .st33 {
                                opacity: 0.2;
                                fill: #1A237E;
                                enable-background: new;
                            }

                            .st34 {
                                opacity: 0.2;
                            }

                            .st35 {
                                fill: #1A237E;
                            }

                            .st36 {
                                fill: url(#SVGID_7_);
                            }

                            .st37 {
                                fill: #FBBC05;
                            }

                            .st38 {
                                clip-path: url(#SVGID_9_);
                                fill: #E53935;
                            }

                            .st39 {
                                clip-path: url(#SVGID_11_);
                                fill: #FBC02D;
                            }

                            .st40 {
                                clip-path: url(#SVGID_13_);
                                fill: #E53935;
                            }

                            .st41 {
                                clip-path: url(#SVGID_15_);
                                fill: #FBC02D;
                            }
                        </style>
                        <g>
                            <path class="st14"
                                d="M120,76.1c0-3.1-0.3-6.3-0.8-9.3H75.9v17.7h24.8c-1,5.7-4.3,10.7-9.2,13.9l14.8,11.5   C115,101.8,120,90,120,76.1L120,76.1z" />
                            <path class="st15"
                                d="M75.9,120.9c12.4,0,22.8-4.1,30.4-11.1L91.5,98.4c-4.1,2.8-9.4,4.4-15.6,4.4c-12,0-22.1-8.1-25.8-18.9   L34.9,95.6C42.7,111.1,58.5,120.9,75.9,120.9z" />
                            <path class="st12"
                                d="M50.1,83.8c-1.9-5.7-1.9-11.9,0-17.6L34.9,54.4c-6.5,13-6.5,28.3,0,41.2L50.1,83.8z" />
                            <path class="st13"
                                d="M75.9,47.3c6.5-0.1,12.9,2.4,17.6,6.9L106.6,41C98.3,33.2,87.3,29,75.9,29.1c-17.4,0-33.2,9.8-41,25.3   l15.2,11.8C53.8,55.3,63.9,47.3,75.9,47.3z" />
                        </g>
                    </svg> Google
                </button>
                <div class="mt-2 text-center">
                    Sudah punya akun? <form method="dialog" class="inline">
                        <button
                            class="buttonSwitchToLoginOrRegister text-[#047D00] hover:text-[#035700] hover:underline hover:underline-[#035700] hover:underline-offset-4"
                            onclick="modal_login.showModal()">Login!</button>
                    </form>
                </div>
            </div>
        </div>
        <form method="dialog" class="modal-backdrop">
            <button>close</button>
        </form>
    </dialog>

    <main>
        <!-- Hero -->
        <section id="hero">
            <!-- Sumber: https://unsplash.com/ -->
            <div class="bg-cover bg-center h-screen relative"
                style="background-image: url('{{ asset('assets/image/pertanian.jpeg.jpg') }}');">
                <div class="absolute inset-0 bg-black opacity-30"></div>
                <div class="absolute inset-0 flex flex-col justify-center items-center text-center">
                    <h1 class="text-white px-4 text-2xl lg:text-5xl font-poppins font-bold mb-2">Produk Pertanian
                        Terbaik,</h1>
                    <h1 class="text-white px-4 text-2xl lg:text-5xl font-poppins font-bold mb-2">Hanya Satu Klik Jauh
                    </h1>

                    <h1 class="text-white px-4 text-lg lg:text-xl font-poppins mt-6 mb-6">Kemudahan berbelanja produk
                        pertanian berkualitas melalui TaniVerse.
                    </h1>
                    <!-- <a href="#"
                    class="bg-red-500 hover:bg-white hover:border hover:border-red-500 text-white hover:text-red-500 font-poppins font-semibold py-3 px-8 rounded-full hover:bg-red-600 transition duration-300">Login
                    / Register
                </a> -->
                </div>
            </div>
        </section>

        <section id="visi-misi" class="px-4 lg:px-40 py-20 bg-white">
            <h2 class="text-xl lg:text-4xl font-poppins font-bold mb-2 lg:mb-16">
                <span class="text-[#45B041]">Tani</span>Verse
                <img src="image/garis-hijau-hitam.png" alt="" class="mt-4 w-32">
            </h2>
            <div class="container mx-auto flex flex-col lg:flex-row gap-4 lg:gap-40 items-start justify-center">
                <div class="flex flex-col gap-5 w-auto lg:w-64 items-center">
                    <div
                        class="bg-[#45B041] rounded-lg lg:rounded-3xl transform transition-transform duration-300 hover:scale-105 hover:cursor-pointer">
                        <img class="w-16 lg:w-52" src="image/1.png" alt="">
                    </div>
                    <h5 class="font-poppins font-bold text-center text-md lg:text-2xl">KIAT PERTANIAN</h5>
                    <p
                        class="bg-[#45B041] rounded-xl px-4 py-3 font-poppins font-medium text-white text-center text-sm lg:text-md">
                        Tempat kami berbagi kiat-kiat dan teknis budidaya pertanian yang terbukti efektif dan efisien
                    </p>
                </div>
                <div class="flex flex-col gap-5 w-auto lg:w-64 items-center">
                    <div
                        class="bg-[#45B041] rounded-lg lg:rounded-3xl transform transition-transform duration-300 hover:scale-105 hover:cursor-pointer">
                        <img class="w-16 lg:w-52" src="image/2.png" alt="">
                    </div>
                    <h5 class="font-poppins font-bold text-center text-md lg:text-2xl">SOLUSI MASALAH</h5>
                    <p
                        class="bg-[#45B041] rounded-xl px-4 py-3 font-poppins font-medium text-white text-center text-sm lg:text-md">
                        Anda bisa menemukan penyebab sekaligus solusi masalah pertanian Anda.
                    </p>
                </div>
                <div class="flex flex-col gap-5 w-auto lg:w-64 items-center">
                    <div
                        class="bg-[#45B041] rounded-lg lg:rounded-3xl transform transition-transform duration-300 hover:scale-105 hover:cursor-pointer">
                        <img class="w-16 lg:w-52" src="image/3.png" alt="">
                    </div>
                    <h5 class="font-poppins font-bold text-center text-md lg:text-2xl">PRODUK-PRODUK</h5>
                    <p
                        class="bg-[#45B041] rounded-xl px-4 py-3 font-poppins font-medium text-white text-center text-sm lg:text-md">
                        TaniVerse siap menyediakan produk-produk pertanian untuk membantu usaha pertanian anda.
                    </p>
                </div>
            </div>
        </section>

        <!-- Know About Us -->
        <section id="tentang" class="px-4 lg:px-40 py-40 bg-[#FBF6F0]">
            <div class="container mx-auto flex flex-col lg:flex-row gap-5 justify-center">
                <div class="w-full lg:w-1/3 flex flex-row gap-2 lg:gap-5">
                    <!-- Sumber: https://id.pinterest.com/pin/948148527782600102/ -->
                    <img class="w-full" src="image/petani-garis.png" alt="">
                </div>
                <div class="w-full lg:w-2/3 lg:px-16">
                    <h2 class="text-xl lg:text-4xl font-poppins font-bold mb-2 lg:mb-6">
                        Tentang <span class="text-[#45B041]">Tani</span>Verse
                        <img src="image/garis-tentang.png" alt="" class="mt-4 w-32">
                    </h2>
                    <p class="text-sm lg:text-lg text-justify font-poppins text-gray-700">
                        TaniVerse adalah platform yang dirancang khusus untuk memenuhi kebutuhan para petani dengan
                        menyediakan berbagai produk pertanian berkualitas tinggi. Dari pupuk yang mendukung kesuburan
                        tanah, benih unggul yang memastikan hasil panen maksimal, hingga pestisida yang efektif
                        melindungi tanaman dari hama, TaniVerse hadir sebagai solusi lengkap untuk meningkatkan
                        produktivitas pertanian.
                    </p>
                    <a href="tentang_kami.html">
                        <button
                            class="px-5 py-2 mt-8 font-poppins bg-[#45B041] hover:bg-[#237F20] text-white rounded-lg">
                            Selengkapnya
                        </button>
                    </a>
                </div>
            </div>
        </section>

        <!-- Our Products -->
        <section id="belanja" class="px-4 lg:px-36 py-20 bg-white">
            <div class="container mx-auto text-center">
                <h2 class="text-xl lg:text-3xl text-left font-poppins font-semibold mb-8 text-black"><span
                        class="text-[#45B041]">Tani</span>Verse</h2>
                <h2 class="text-xl lg:text-4xl text-left font-poppins font-bold mb-8 text-black tracking-wide"><span
                        class="text-[#45B041]">Temukan</span> Produk Pertanian Terbaik</h2>
                <!-- <h2 class="text-xl lg:text-5xl text-center font-poppins font-bold mb-8 text-white">Our Products</h2> -->

                <!-- Accordion Horizontal

            <div class="flex justify-center">
                <div class="w-32 h-16  mx-2 flex items-center justify-center">
                    <p class="text-red-500 border-b border-b-4 w-full py-2 border-red-500 cursor-pointer">All</p>
                </div>
                <div class="w-32 h-16  mx-2 flex items-center justify-center cursor-pointer">
                    <p class="border-b border-b-4 w-full py-2">Buah Tropis</p>
                </div>
                <div class="w-32 h-16  mx-2 flex items-center justify-center cursor-pointer">
                    <p class="border-b border-b-4 w-full py-2">Buah Sub-Tropis</p>
                </div>
            </div> -->
                <div class="divider my-20"><span class="font-poppins font-bold text-3xl text-[#45B041] px-8">Produk
                        Unggulan</span></div>
                <!-- Card -->
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-10 lg:justify-center">
                    <!-- <a href="detail.html"
                        class="flex flex-col w-full lg:w-full bg-[#FBF6F0] rounded-lg shadow-md transition-transform duration-300 transform hover:scale-105">
                        <img src="image/traktor.png" alt="Ayam Goreng"
                            class="w-full object-cover mb-2 rounded-t-lg">
                        <h3 class="text-sm lg:text-lg font-poppins font-semibold text-left ms-4 text-[#45B041]">Traktor</h3>
                        <h3 class="text-sm lg:text-md font-poppins text-left ms-4 text-gray-400">Produk Pertanian</h3>
                        <div class="flex items-center justify-center gap-1">
                            <i class="fa-solid fa-star text-yellow-400"></i>
                            <div class="font-poppins text-gray-600">4.5</div>
                        </div>
                        <div class="font-poppins text-[#45B041] mb-2">Rp <span class="text-md">60.000</span></div>
                        <div class="mt-auto">
                            <button
                                class="bg-white ring-2 ring-[#45B041] text-[#45B041] rounded-md px-4 py-1 font-poppins mb-4 hover:ring-2 hover:ring-[#45B041] hover:bg-[#45B041] hover:text-white">Beli</button>
                        </div>
                    </a> -->

                    <a href="detail_jagung.html"
                        class="flex flex-col w-full lg:w-full bg-[#FBF6F0] rounded-lg shadow-md transition-transform duration-300 transform hover:scale-105">
                        <img src="image/product/Jagung.png" alt="Jagung"
                            class="w-full object-cover mb-2 rounded-t-lg">
                        <h3 class="text-sm lg:text-lg font-poppins font-semibold text-left ms-4 text-[#45B041]">Jagung
                        </h3>
                        <h3 class="text-sm lg:text-md font-poppins text-left ms-4 text-gray-400">Produk Pertanian</h3>
                        <div class="flex items-center justify-between px-4 mt-auto">
                            <div class="font-poppins text-[#45B041] mb-2">Rp <span class="text-md">5.000</span>
                            </div>
                            <button
                                class="bg-[#45B041] text-white rounded-md px-3 py-2 font-poppins mb-4 hover:bg-[#237F20]"><i
                                    class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </a>

                    <a href="detail_impresol.html"
                        class="flex flex-col w-full lg:w-full bg-[#FBF6F0] rounded-lg shadow-md transition-transform duration-300 transform hover:scale-105">
                        <img src="image/product/Impresol.png" alt="Impresol"
                            class="w-full object-cover mb-2 rounded-t-lg">
                        <h3 class="text-sm lg:text-lg font-poppins font-semibold text-left ms-4 text-[#45B041]">
                            Impresol
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

                    <a href="detail_sawi.html"
                        class="flex flex-col w-full lg:w-full bg-[#FBF6F0] rounded-lg shadow-md transition-transform duration-300 transform hover:scale-105">
                        <img src="image/product/Sawi.png" alt="Sawi"
                            class="w-full object-cover mb-2 rounded-t-lg">
                        <h3 class="text-sm lg:text-lg font-poppins font-semibold text-left ms-4 text-[#45B041]">Sawi
                        </h3>
                        <h3 class="text-sm lg:text-md font-poppins text-left ms-4 text-gray-400">Produk Pertanian</h3>
                        <div class="flex items-center justify-between px-4 mt-auto">
                            <div class="font-poppins text-[#45B041] mb-2">Rp <span class="text-md">500</span>
                            </div>
                            <button
                                class="bg-[#45B041] text-white rounded-md px-3 py-2 font-poppins mb-4 hover:bg-[#237F20]"><i
                                    class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </a>

                    <a href="detail_vigorin.html"
                        class="flex flex-col w-full lg:w-full bg-[#FBF6F0] rounded-lg shadow-md transition-transform duration-300 transform hover:scale-105">
                        <img src="image/product/Vigorin.png" alt="Vigorin"
                            class="w-full object-cover mb-2 rounded-t-lg">
                        <h3 class="text-sm lg:text-lg font-poppins font-semibold text-left ms-4 text-[#45B041]">Vigorin
                        </h3>
                        <h3 class="text-sm lg:text-md font-poppins text-left ms-4 text-gray-400">Produk Pertanian</h3>
                        <div class="flex items-center justify-between px-4 mt-auto">
                            <div class="font-poppins text-[#45B041] mb-2">Rp <span class="text-md">150.000</span>
                            </div>
                            <button
                                class="bg-[#45B041] text-white rounded-md px-3 py-2 font-poppins mb-4 hover:bg-[#237F20]"><i
                                    class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </a>

                    <a href="detail_kol.html"
                        class="flex flex-col w-full lg:w-full bg-[#FBF6F0] rounded-lg shadow-md transition-transform duration-300 transform hover:scale-105">
                        <img src="image/product/Kol.png" alt="Kol"
                            class="w-full object-cover mb-2 rounded-t-lg">
                        <h3 class="text-sm lg:text-lg font-poppins font-semibold text-left ms-4 text-[#45B041]">Kol
                        </h3>
                        <h3 class="text-sm lg:text-md font-poppins text-left ms-4 text-gray-400">Produk Pertanian</h3>
                        <div class="flex items-center justify-between px-4 mt-auto">
                            <div class="font-poppins text-[#45B041] mb-2">Rp <span class="text-md">2.000</span>
                            </div>
                            <button
                                class="bg-[#45B041] text-white rounded-md px-3 py-2 font-poppins mb-4 hover:bg-[#237F20]"><i
                                    class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </a>

                    <a href="detail_bayam.html"
                        class="flex flex-col w-full lg:w-full bg-[#FBF6F0] rounded-lg shadow-md transition-transform duration-300 transform hover:scale-105">
                        <img src="image/product/Bayam.png" alt="Bayam"
                            class="w-full object-cover mb-2 rounded-t-lg">
                        <h3 class="text-sm lg:text-lg font-poppins font-semibold text-left ms-4 text-[#45B041]">Bayam
                        </h3>
                        <h3 class="text-sm lg:text-md font-poppins text-left ms-4 text-gray-400">Produk Pertanian</h3>
                        <div class="flex items-center justify-between px-4 mt-auto">
                            <div class="font-poppins text-[#45B041] mb-2">Rp <span class="text-md">60.000</span>
                            </div>
                            <button
                                class="bg-[#45B041] text-white rounded-md px-3 py-2 font-poppins mb-4 hover:bg-[#237F20]"><i
                                    class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </a>

                    <a href="detail_labusiam.html"
                        class="flex flex-col w-full lg:w-full bg-[#FBF6F0] rounded-lg shadow-md transition-transform duration-300 transform hover:scale-105">
                        <img src="image/product/Labusiam.png" alt="Labusiam"
                            class="w-full object-cover mb-2 rounded-t-lg">
                        <h3 class="text-sm lg:text-lg font-poppins font-semibold text-left ms-4 text-[#45B041]">
                            Labusiam
                        </h3>
                        <h3 class="text-sm lg:text-md font-poppins text-left ms-4 text-gray-400">Produk Pertanian</h3>
                        <div class="flex items-center justify-between px-4 mt-auto">
                            <div class="font-poppins text-[#45B041] mb-2">Rp <span class="text-md">4.000</span>
                            </div>
                            <button
                                class="bg-[#45B041] text-white rounded-md px-3 py-2 font-poppins mb-4 hover:bg-[#237F20]"><i
                                    class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </a>

                    <a href="detail_vitaron.html"
                        class="flex flex-col w-full lg:w-full bg-[#FBF6F0] rounded-lg shadow-md transition-transform duration-300 transform hover:scale-105">
                        <img src="image/product/Vitaron.png" alt="Vitaron"
                            class="w-full object-cover mb-2 rounded-t-lg">
                        <h3 class="text-sm lg:text-lg font-poppins font-semibold text-left ms-4 text-[#45B041]">Vitaron
                        </h3>
                        <h3 class="text-sm lg:text-md font-poppins text-left ms-4 text-gray-400">Produk Pertanian</h3>
                        <div class="flex items-center justify-between px-4 mt-auto">
                            <div class="font-poppins text-[#45B041] mb-2">Rp <span class="text-md">70.000</span>
                            </div>
                            <button
                                class="bg-[#45B041] text-white rounded-md px-3 py-2 font-poppins mb-4 hover:bg-[#237F20]"><i
                                    class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </a>
                </div>
                <div class="flex mt-20">
                    <a href="dashboard.html"
                        class="px-5 py-2 font-poppins bg-[#45B041] hover:bg-[#237F20] text-white rounded-lg">
                        Selengkapnya
                    </a>
                </div>
            </div>
        </section>

        <section id="testimoni" class="px-4 lg:px-40 pt-20 pb-20 bg-[#FBF6F0]">
            <h2 class="text-xl lg:text-3xl text-left font-poppins font-semibold mb-8 text-black">
                Testimoni</h2>
            <h2
                class="divider divider-start text-xl lg:text-4xl text-left font-poppins font-bold mb-8 text-black tracking-wide">
                Produk<span class="text-[#45B041]">TaniVerse</span></h2>
            <div class="container mt-20 mx-auto grid grid-cols-1 lg:grid-cols-3 gap-10 items-center justify-center">
                <div class="flex flex-col gap-5 w-90 items-center">
                    <img class="rounded-full w-20" src="image/avatar-biru.jpg" alt="">
                    <h5 class="font-poppins font-bold text-xl">Pak Anwar</h5>
                    <p class="font-poppins font-medium text-center text-sm">
                        "Premio sangat efektif dalam mempercepat pertumbuhan tanaman, terutama pada fase vegetatif. Daun
                        menjadi lebih hijau dan lebat. Hasilnya terlihat cepat, meskipun harganya agak mahal."
                    </p>
                    <div>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                </div>

                <div class="flex flex-col gap-5 w-90 items-center">
                    <img class="rounded-full w-20" src="image/avatar-biru.jpg" alt="">
                    <h5 class="font-poppins font-bold text-xl">Pak Eko</h5>
                    <p class="font-poppins font-medium text-center text-sm">
                        "Pupuk ini bagus untuk memperbaiki kekurangan kalsium pada tanaman. Saya melihat tanaman lebih
                        kuat dan buahnya tidak mudah rusak. Cocok untuk tanaman buah seperti tomat dan cabai."
                    </p>
                    <div>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                    </div>
                </div>

                <div class="flex flex-col gap-5 w-90 items-center">
                    <img class="rounded-full w-20" src="image/avatar-biru.jpg" alt="">
                    <h5 class="font-poppins font-bold text-xl">Pak Tegar</h5>
                    <p class="font-poppins font-medium text-center text-sm">
                        "Ini adalah pupuk kalium yang sangat baik untuk meningkatkan produktivitas dan kualitas hasil
                        panen. Tanaman jadi lebih tahan terhadap kekeringan, tapi tidak memberikan hasil instan."
                    </p>
                    <div>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                    </div>
                </div>

                <div class="flex flex-col gap-5 w-90 items-center">
                    <img class="rounded-full w-20" src="image/avatar-biru.jpg" alt="">
                    <h5 class="font-poppins font-bold text-xl">Pak Budi</h5>
                    <p class="font-poppins font-medium text-center text-sm">
                        "Pupuk ini efektif untuk fase pembungaan, membantu bunga bertahan lebih lama dan meningkatkan
                        hasil buah. Hasil yang diberikan cukup cepat, terutama pada tanaman hortikultura."
                    </p>
                    <div>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                    </div>
                </div>

                <div class="flex flex-col gap-5 w-90 items-center">
                    <img class="rounded-full w-20" src="image/avatar-biru.jpg" alt="">
                    <h5 class="font-poppins font-bold text-xl">Pak Naufal</h5>
                    <p class="font-poppins font-medium text-center text-sm">
                        "Vitaron memberikan nutrisi lengkap untuk pertumbuhan optimal tanaman. Daun dan buah menjadi
                        lebih besar dan sehat, tapi harus digunakan dengan tepat sesuai dosis."
                    </p>
                    <div>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                </div>

                <div class="flex flex-col gap-5 w-90 items-center">
                    <img class="rounded-full w-20" src="image/avatar-biru.jpg" alt="">
                    <h5 class="font-poppins font-bold text-xl">Pak Hasan</h5>
                    <p class="font-poppins font-medium text-center text-sm">
                        "Kebun saya terlihat lebih hijau dan segar dengan produk TaniVerse. Ini sangat ramah lingkungan,
                        tapi penggunaannya untuk tanaman pot butuh sedikit penyesuaian dosis."
                    </p>
                    <div>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @include('layout.partials.footer')

    <!-- Main JS  -->
    <script src="{{ asset('assets/js/app.js') }}"></script>

    <!-- Tailwind Config -->
    <script src="{{ asset('assets/js/tailwind.config.js') }}"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const sections = document.querySelectorAll("section");
            // const navDivs = document.querySelectorAll("nav div div");
            // const navLinks = document.querySelectorAll("nav div div a");
            const navLinks = document.querySelectorAll("header div nav ul li a");

            window.addEventListener("scroll", handleNavbar);

            function handleNavbar() {
                // let current = "";

                // sections.forEach(section => {
                //     const sectionTop = section.offsetTop;
                //     if (pageYOffset >= sectionTop - 50) {
                //         current = section.getAttribute("id");
                //     }
                // });

                // navDivs.forEach(div => {
                //     div.classList.remove("border-red-600");
                // });

                // navLinks.forEach(link => {
                //     if (link.getAttribute("href").includes(current)) {
                //         link.parentElement.classList.add("border-red-600");
                //     }
                // });

                let current = "";

                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    if (pageYOffset >= sectionTop - 50) {
                        current = section.getAttribute("id");
                    }
                });

                navLinks.forEach(link => {
                    // link.classList.remove("border-white");
                    link.parentElement.classList.remove("border-white");
                    if (link.getAttribute("href").includes(current)) {
                        // link.classList.add("border-white");
                        link.parentElement.classList.add("border-white");
                    }
                });
            }
        });
    </script>

</body>

</html>
