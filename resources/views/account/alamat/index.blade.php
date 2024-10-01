@extends('layout.main_user_account')

@section('content')
<section id="dashboard" class="min-h-screen font-poppins w-full flex flex-col mt-4 pt-10 px-4 pb-20 bg-gray-100">
    <div class="flex flex-col bg-white p-4 w-full rounded-lg">
        <div class="flex justify-between">
            <div class="flex flex-col">
                <div class="font-semibold">Alamat Saya</div>
                <div>Kelola alamat Anda.</div>
            </div>
            <button type="submit" class="bg-[#047D00] hover:bg-[#035700] text-white px-3 py-1 rounded-md"
                onclick="modalTambahData.showModal()">Tambah Alamat</button>
        </div>
        <div class="divider"></div>
        <div class="flex flex-col gap-4">
            <div class="flex justify-between p-4 border-2 rounded-lg">
                <div class="flex flex-col">
                    <div class="flex items-center gap-4">
                        <div>Rumah</div>
                        <div class="p-1 border-2 text-sm text-[#047D00] border-[#047D00]">Utama</div>
                    </div>
                    <div class="flex">
                        <div>Tegar Santoso</div>
                        <div class="divider divider-horizontal before:bg-black after:bg-black"></div>
                        <div>081234567890</div>
                    </div>
                    <div>
                        Jl. Mawar Indah No. 123, Kel. Melati, Kec. Cempaka, Jakarta, 12345
                    </div>
                </div>
                <div class="flex flex-col gap-2 items-end">
                    <a href="" class="text-[#047D00]">Ubah</a>
                    <!-- <button class="p-2 border-2 rounded-lg">Atur sebagai Utama</button> -->
                </div>
            </div>
            <div class="flex justify-between p-4 border-2 rounded-lg">
                <div class="flex flex-col">
                    <div class="flex items-center gap-4">
                        <div>Kantor</div>
                        <!-- <div class="p-1 border-2 text-sm">Utama</div> -->
                    </div>
                    <div class="flex">
                        <div>Tegar Santoso</div>
                        <div class="divider divider-horizontal before:bg-black after:bg-black"></div>
                        <div>081234567890</div>
                    </div>
                    <div>
                        Jl. Mawar Indah No. 123, Kel. Melati, Kec. Cempaka, Jakarta, 12345
                    </div>
                </div>
                <div class="flex flex-col gap-2 items-end">
                    <a href="" class="text-[#047D00]">Ubah</a>
                    <button class="p-2 border-2 rounded-lg bg-[#047D00] text-white">Atur sebagai Utama</button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection