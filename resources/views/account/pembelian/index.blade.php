@extends('layout.main_user_account')

@section('content')
<section id="dashboard" class="min-h-screen font-poppins w-full flex gap-2 flex-col mt-4 pt-10 px-4 pb-20 bg-gray-100">
    <div class="flex gap-2 rounded-lg bg-white w-full py-4">
        <div class="px-4 py-2">Status</div>
        <div class="px-4 py-2 text-[#047D00] rounded-lg border-2 border-[#047D00] bg-green-50 hover:bg-green-50 hover:text-[#047D00] hover:border-[#047D00]">Semua</div>
        <div class="px-4 py-2 rounded-lg border-2 border-gray-300 hover:bg-green-50 hover:text-[#047D00] hover:border-[#047D00]">Belum Bayar</div>
        <div class="px-4 py-2 rounded-lg border-2 border-gray-300 hover:bg-green-50 hover:text-[#047D00] hover:border-[#047D00]">Sedang Dikemas</div>
        <div class="px-4 py-2 rounded-lg border-2 border-gray-300 hover:bg-green-50 hover:text-[#047D00] hover:border-[#047D00]">Dikirim</div>
        <div class="px-4 py-2 rounded-lg border-2 border-gray-300 hover:bg-green-50 hover:text-[#047D00] hover:border-[#047D00]">Selesai</div>
        <div class="px-4 py-2 rounded-lg border-2 border-gray-300 hover:bg-green-50 hover:text-[#047D00] hover:border-[#047D00]">Dibatalkan</div>
    </div>

    <div class="flex flex-col gap-2">
        <div class="flex gap-4 flex-col bg-white w-full p-4 rounded-lg">
            <div class="flex w-full gap-5">
                <img class="w-20" src="image/product/Artboard 25.png" alt="">
                <div class="flex flex-col gap- w-full">
                    <div>Jagung</div>
                    <div class="flex justify-between">
                        <div>x1</div>
                        <div>Rp. 4.000</div>
                    </div>
                </div>
            </div>
            <div class="flex w-full gap-5">
                <img class="w-20" src="image/product/Artboard 32.png" alt="">
                <div class="flex flex-col gap- w-full">
                    <div>Brokoli</div>
                    <div class="flex justify-between">
                        <div>x1</div>
                        <div>Rp. 4.000</div>
                    </div>
                </div>
            </div>
            <div class="flex justify-between">
                <div class="flex items-center gap-2">
                    <i class="fa-solid fa-truck"></i>
                    <div>Pesanan telah sampai</div>
                </div>
                <div class="flex justify-end gap-4">
                    <div>Total Pesanan:</div>
                    <div class="text-primary">Rp. 8.000</div>
                </div>
            </div>
        </div>
        <div class="flex gap-4 flex-col bg-white w-full p-4 rounded-lg">
            <div class="flex w-full gap-5">
                <img class="w-20" src="image/product/Artboard 25.png" alt="">
                <div class="flex flex-col gap- w-full">
                    <div>Jagung</div>
                    <div class="flex justify-between">
                        <div>x1</div>
                        <div>Rp. 4.000</div>
                    </div>
                </div>
            </div>
            <div class="flex w-full gap-5">
                <img class="w-20" src="image/product/Artboard 32.png" alt="">
                <div class="flex flex-col gap- w-full">
                    <div>Brokoli</div>
                    <div class="flex justify-between">
                        <div>x1</div>
                        <div>Rp. 4.000</div>
                    </div>
                </div>
            </div>
            <div class="flex justify-between">
                <div class="flex items-center gap-2">
                    <i class="fa-solid fa-truck"></i>
                    <div>Pesanan telah sampai</div>
                </div>
                <div class="flex justify-end gap-4">
                    <div>Total Pesanan:</div>
                    <div class="text-primary">Rp. 8.000</div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection