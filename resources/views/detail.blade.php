@extends('layout.main_user')

@section('content')
    <section id="detail" class="py-16 lg:px-36 bg-gray-100 mt-16 mx-auto">
        <div class="flex flex-wrap justify-center">
            <div class="flex w-full lg:w-2/3 p-2">
                <div class="flex flex-col lg:flex-row w-full bg-white rounded-lg p-4">
                    <div class="flex w-full lg:w-1/3 rounded-lg justify-center">
                        <div class="h-45">
                            <img src="{{ asset('assets/image/product/' . $data->foto) }}" class="h-45 rounded-lg" />
                        </div>
                    </div>
                    <div
                        class="flex flex-col w-full lg:w-2/3 px-0 lg:px-4 mt-4 lg:mt-0 gap-2 rounded-lg transition duration-300 font-poppins">
                        <div class="flex flex-col w-full">
                            <p class="text-2xl font-bold">{{ $data->nama }}</p>
                            <div class="flex flex-row lg:flex-col justify-between">
                                <p class="lg:text-3xl font-bold">Rp. {{ $data->harga }}</p>
                                <div class="flex flex-row items-center gap-3">
                                    <p>Terjual 100+</p>
                                    <p>•</p>
                                    <div>
                                        <i class="fa-solid fa-star text-yellow-400"></i> (5 rating)
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>
                            {{ $data->deskripsi }}
                        </p>
                        <p class="font-bold text-md">Spesifikasi :</p>
                        <ul class="list-decimal list-inside">

                            <li>Beradaptasi baik didataran rendah - tinggi</li>

                            <li> Kol tahan virus</li>

                            <li> Potensi hasil 0,8 – 1,1 kg/tanaman</li>

                            <li> Panjang buah 6,3 – 7,1 cm</li>

                            <li> Diameter buah ± 1 – 1,2 cm</li>

                            <li> Tinggi tanaman 110 – 130 cm</li>

                            <li> Berat buah 2,4 – 2,7 gr</li>

                            <li> Dapat dipanen umur 80 – 95 HST</li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="flex w-full lg:w-1/3 rounded-lg p-2">
                <div class="flex flex-col w-full gap-2 rounded-lg p-4 font-poppins bg-white hidden lg:block">
                    <!-- Large Screen -->
                    <div>
                        <div class="text-2xl font-bold">Atur jumlah</div>
                        <div class="mt-2 flex items-center justify-between">
                            <div class="flex items-center justify-center">
                                <button
                                    class="text-[#047D00] px-3 py-2 border-2 border-[#047D00] rounded-l-lg hover:text-white hover:bg-[#047D00] w-full">
                                    <i class="fa-solid fa-minus"></i>
                                </button>
                                <div class="px-4 py-2 border-y-2 border-[#047D00]">
                                    <p class="text-center">1</p>
                                </div>
                                <button
                                    class="text-[#047D00] px-3 py-2 border-2 border-[#047D00] rounded-r-lg hover:text-white hover:bg-[#047D00] w-full">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                            </div>
                            <p>Stok total : {{ $data->stok }}</p>
                        </div>
                        <div class="flex items-center justify-between">
                            <p class="font-semibold">Subtotal</p>
                            <p class="text-xl font-bold">Rp. 5.000</p>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="hidden lg:flex flex-row lg:flex-col gap-3 items-center justify-center">
                            <a href="keranjang.html"
                                class="bg-[#047D00] font-poppins font-semibold rounded-lg px-4 py-2 border-2 border-[#047D00] text-white text-center w-full hover:bg-white hover:text-[#047D00]">
                                + Keranjang
                            </a>
                            <a href="checkout.html"
                                class="font-poppins font-semibold rounded-lg px-4 py-2 border-2 text-center w-full bg-white text-[#047D00] border-[#047D00] hover:bg-[#047D00] hover:text-white hover:border-white">
                                Beli
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="lg:hidden drop-shadow-2xl fixed bottom-0 lg:static w-full bg-white lg:bg-transparent p-2 flex flex-row lg:flex-col gap-2 items-center justify-center">
            <button href="" onclick="my_modal.showModal()"
                class="bg-[#047D00] font-poppins font-semibold rounded-lg px-4 py-2 border-2 border-[#047D00] text-white text-center w-full hover:bg-white hover:text-[#047D00]">
                + Keranjang
            </button>
            <button href="" onclick="my_modal.showModal()"
                class="font-poppins font-semibold rounded-lg px-4 py-2 border-2 text-center w-full bg-white text-[#047D00] border-[#047D00] hover:bg-[#047D00] hover:text-white hover:border-white">
                Beli
            </button>
        </div>
        <!-- Modal  -->
        <dialog id="my_modal" class="modal modal-bottom mx-auto min-h-full max-w-screen-sm lg:hidden">
            <div class="font-poppins modal-box bg-white text-black px-4 pt-2 pb-8">
                <div class="flex flex-wrap">
                    <img src="{{ asset('assets/image/product/Kol.png')}}" class="flex flex-col w-1/2 rounded-lg" />
                    <div class="flex flex-col w-1/2 pl-4">
                        <div class="flex justify-end">
                            <form method="dialog">
                                <button class="btn btn-sm btn-circle btn-ghost">✕</button>
                            </form>
                        </div>
                        <div class="mt-auto">
                            <p class="font-bold text-md">Kol</p>
                            <p class="font-semibold text-md">Rp. {{ $data->harga }}</p>
                            <p>Stok total : {{ $data->stok }}</p>
                        </div>
                    </div>
                </div>
                <div class="mt-2 flex items-center justify-between">
                    <div class="text-md font-semibold">Atur jumlah</div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center justify-center">
                            <button
                                class="text-[#047D00] text-sm px-3 py-1 border-2 border-[#047D00] rounded-l-lg hover:text-white hover:bg-[#047D00] w-full">
                                <i class="fa-solid fa-minus"></i>
                            </button>
                            <div class="px-4 py-1 border-y-2 border-[#047D00]">
                                <p class="text-sm text-center">1</p>
                            </div>
                            <button
                                class="text-[#047D00] text-sm px-3 py-1 border-2 border-[#047D00] rounded-r-lg hover:text-white hover:bg-[#047D00] w-full">
                                <i class="fa-solid fa-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <div class="flex items-center justify-between ">
                        <p class="font-semibold">Subtotal</p>
                        <p class="text-md font-bold">Rp. 5.000</p>
                    </div>
                </div>
                <div class="relative h-8"></div>
                <div
                    class="absolute bottom-0 left-0 p-2 w-full flex flex-row lg:flex-col gap-2 items-center justify-center">
                    <a href="keranjang.html"
                        class="bg-[#047D00] font-poppins font-semibold rounded-lg px-4 py-2 border-2 border-[#047D00] text-white text-center w-full hover:bg-white hover:text-[#047D00]">
                        + Keranjang
                    </a>
                    <a href="checkout.html"
                        class="font-poppins font-semibold rounded-lg px-4 py-2 border-2 text-center w-full bg-white text-[#047D00] border-[#047D00] hover:bg-[#047D00] hover:text-white hover:border-white">
                        Beli
                    </a>
                </div>
            </div>
        </dialog>
        <div class="mt-0 p-2 flex flex-col lg:flex-row w-full">
            <div class="flex flex-col lg:flex-row justify-start gap-5 px-4 bg-white rounded-lg p-4 w-full font-poppins">
                <div class="flex flex-col">
                    <p class="text-2xl font-semibold">Rating</p>
                    <div class="flex items-center justify-center gap-3">
                        <i class="text-4xl fa-solid fa-star text-yellow-400"></i>
                        <p class="text-5xl">4.0<span class="text-sm">/5.0</span></p>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <p class="font-semibold">100% pembeli merasa puas</p>
                        <p>5 rating • 4 ulasan</p>
                    </div>
                    <div class="flex flex-col">
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-star text-yellow-400"></i>
                            <p class="w-4 text-center">5</p>
                            <progress class="progress w-full" value="0" max="100"></progress>
                            <!-- <progress class="progress w-64 h-8 rounded-full bg-blue-500 border-4 border-green-500 shadow-lg" value="70" max="100"></progress> -->
                            <p class="w-4 text-center">0</p>
                        </div>
                        <div class="flex items-center gap-2 w-full">
                            <i class="fa-solid fa-star text-yellow-400"></i>
                            <p class="w-4 text-center">4</p>
                            <progress class="progress w-full" value="100" max="100"></progress>
                            <!-- <progress class="progress w-64 h-8 rounded-full bg-blue-500 border-4 border-green-500 shadow-lg" value="70" max="100"></progress> -->
                            <p class="w-4 text-center">4</p>
                        </div>
                        <div class="flex items-center gap-2 w-full">
                            <i class="fa-solid fa-star text-yellow-400"></i>
                            <p class="w-4 text-center">3</p>
                            <progress class="progress w-full" value="0" max="100"></progress>
                            <!-- <progress class="progress w-64 h-8 rounded-full bg-blue-500 border-4 border-green-500 shadow-lg" value="70" max="100"></progress> -->
                            <p class="w-4 text-center">0</p>
                        </div>
                        <div class="flex items-center gap-2 w-full">
                            <i class="fa-solid fa-star text-yellow-400"></i>
                            <p class="w-4 text-center">2</p>
                            <progress class="progress w-full" value="0" max="100"></progress>
                            <!-- <progress class="progress w-64 h-8 rounded-full bg-blue-500 border-4 border-green-500 shadow-lg" value="70" max="100"></progress> -->
                            <p class="w-4 text-center">0</p>
                        </div>
                        <div class="flex items-center gap-2 w-full">
                            <i class="fa-solid fa-star text-yellow-400"></i>
                            <p class="w-4 text-center">1</p>
                            <progress class="progress w-full" value="10" max="100"></progress>
                            <!-- <progress class="progress w-64 h-8 rounded-full bg-blue-500 border-4 border-green-500 shadow-lg" value="70" max="100"></progress> -->
                            <p class="w-4 text-center">1</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-1 flex-col gap-3">
                    <p class="text-2xl font-semibold">Ulasan</p>
                    <div class="flex flex-col">
                        <div class="first:pt-0 pt-2 pb-2 border-b-2 last:border-b-0">
                            <div class="flex items-start gap-3">
                                <img class="w-10 rounded-full" src="{{ asset('assets/image/avatar-biru.jpg')}}" alt="">
                                <div>
                                    <div class="flex flex-wrap items-end lg:gap-3 text-md">
                                        <p class="font-semibold">Mochamad Tegar Santoso</p>
                                        <p>2 jam yang lalu</p>
                                    </div>
                                    <div>
                                        <i class="fa-solid fa-star text-yellow-400"></i>
                                        <i class="fa-solid fa-star text-yellow-400"></i>
                                        <i class="fa-solid fa-star text-yellow-400"></i>
                                        <i class="fa-solid fa-star text-yellow-400"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <p class="text-sm line-clamp-3 lg:line-clamp-none">
                                        alat nya keren bgt, udah terintegrasi sama aplikasi juga
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="first:pt-0 pt-2 pb-2 border-b-2 last:border-b-0">
                            <div class="flex items-start gap-3">
                                <img class="w-10 rounded-full" src="{{ asset('assets/image/avatar-biru.jpg')}}" alt="">
                                <div>
                                    <div class="flex flex-wrap items-end lg:gap-3 text-md">
                                        <p class="font-semibold">Mochamad Tegar Santoso</p>
                                        <p>2 jam yang lalu</p>
                                    </div>
                                    <div>
                                        <i class="fa-solid fa-star text-yellow-400"></i>
                                        <i class="fa-solid fa-star text-yellow-400"></i>
                                        <i class="fa-solid fa-star text-yellow-400"></i>
                                        <i class="fa-solid fa-star text-yellow-400"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <p class="text-sm line-clamp-3 lg:line-clamp-none">
                                        mantap
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="first:pt-0 pt-2 pb-2 border-b-2 last:border-b-0">
                            <div class="flex items-start gap-3">
                                <img class="w-10 rounded-full" src="{{ asset('assets/image/avatar-biru.jpg')}}" alt="">
                                <div>
                                    <div class="flex flex-wrap items-end lg:gap-3 text-md">
                                        <p class="font-semibold">Mochamad Tegar Santoso</p>
                                        <p>2 jam yang lalu</p>
                                    </div>
                                    <div>
                                        <i class="fa-solid fa-star text-yellow-400"></i>
                                        <i class="fa-solid fa-star text-yellow-400"></i>
                                        <i class="fa-solid fa-star text-yellow-400"></i>
                                        <i class="fa-solid fa-star text-yellow-400"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <p class="text-sm line-clamp-3 lg:line-clamp-none">
                                        okane bgt
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="first:pt-0 pt-2 pb-2 border-b-2 last:border-b-0">
                            <div class="flex items-start gap-3">
                                <img class="w-10 rounded-full" src="{{ asset('assets/image/avatar-biru.jpg')}}" alt="">
                                <div>
                                    <div class="flex flex-wrap items-end lg:gap-3 text-md">
                                        <p class="font-semibold">Mochamad Tegar Santoso</p>
                                        <p>2 jam yang lalu</p>
                                    </div>
                                    <div>
                                        <i class="fa-solid fa-star text-yellow-400"></i>
                                        <i class="fa-solid fa-star text-yellow-400"></i>
                                        <i class="fa-solid fa-star text-yellow-400"></i>
                                        <i class="fa-solid fa-star text-yellow-400"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <p class="text-sm line-clamp-3 lg:line-clamp-none">
                                        cincayy
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="first:pt-0 pt-2 pb-2 border-b-2 last:border-b-0">
                            <div class="flex items-start gap-3">
                                <img class="w-10 rounded-full" src="{{ asset('assets/image/avatar-biru.jpg')}}" alt="">
                                <div>
                                    <div class="flex flex-wrap items-end lg:gap-3 text-md">
                                        <p class="font-semibold">Mochamad Tegar Santoso</p>
                                        <p>2 jam yang lalu</p>
                                    </div>
                                    <div>
                                        <i class="fa-solid fa-star text-yellow-400"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <!-- <p class="text-sm line-clamp-3 lg:line-clamp-none">
                                        enak bgt, bumbunya gurih.
                                    </p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
