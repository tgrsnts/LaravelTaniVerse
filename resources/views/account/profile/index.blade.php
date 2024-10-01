@extends('layout.main_user_account')

@section('content')
<section id="dashboard" class="min-h-screen font-poppins w-full flex flex-col mt-4 pt-10 px-4 pb-20 bg-gray-100">
    <div class="flex flex-col bg-white p-4 w-full rounded-lg">
        <div class="font-semibold">Akun Saya</div>
        <div>Kelola informasi profil Anda.</div>
        <div class="divider"></div>
        <form action="" class="flex w-full">
            <div class="w-1/4 flex flex-col items-center gap-4">
                <img class="w-full" src="image/profile/{{ $data->foto }}" alt="">
                <input type="file" id="gambar" placeholder="gambar"
                            class="w-full rounded-md bg-gray-100 file:mr-5 file:py-1 file:px-3 file:border-none file:w-full file:bg-gray-100 file:text-stone-700 hover:file:cursor-pointer hover:file:bg-green-50 hover:file:text-[#047D00] focus:outline-none focus:ring focus:ring-[#047D00] focus-border-[#047D00]">
            </div>
            <div class="flex w-3/4 pl-8">
                <table class="w-full">
                    <tr>
                        <td class="w-1/4 pr-4">
                            <label for="" class="block text-left">Username</label>
                        </td>
                        <td class="w-3/4 pl-4 py-1">
                            <input class="w-full p-2 border-2 rounded-lg" type="text" value="{{ $data->username }}">
                        </td>
                    </tr>
                    <tr>
                        <td class="pr-4">
                            <label for="" class="block text-left">Nama</label>
                        </td>
                        <td class="pl-4 py-1">
                            <input class="w-full p-2 border-2 rounded-lg" type="text" value="{{ $data->name }}">
                        </td>
                    </tr>
                    <tr>
                        <td class="pr-4">
                            <label for="" class="block text-left">Email</label>
                        </td>
                        <td class="pl-4 py-1">
                            <input class="w-full p-2 border-2 rounded-lg" type="email" value="{{ $data->email }}">
                        </td>
                    </tr>
                    <tr>
                        <td class="pr-4">
                            <label for="" class="block text-left">Telepon</label>
                        </td>
                        <td class="pl-4 py-1">
                            <input class="w-full p-2 border-2 rounded-lg" type="text" value="{{ $data->telepon }}">
                        </td>
                    </tr>
                    <tr>
                        <td class="pr-4">
                            <label for="" class="block text-left">Jenis Kelamin</label>
                        </td>
                        <td class="pl-4 py-1 flex gap-8">
                            <div class="flex items-center gap-1">
                                <input class="accent-[#047D00]" name="jenis_kelamin" type="radio" value="Laki-laki" {{ $data->jenis_kelamin == "Laki-laki" ? "checked":"" }}><label for="">Laki-laki</label>
                            </div>
                            <div class="flex items-center  gap-1">
                                <input class="accent-[#047D00]" name="jenis_kelamin" type="radio" value="Perempuan" {{ $data->jenis_kelamin == "Perempuan" ? "checked":"" }}><label for="">Perempuan</label>
                            </div>                                    
                        </td>
                    </tr>
                    <tr>
                        <td class="pr-4"></td>
                        <td class="pl-4 pt-8">
                            <button type="submit"
                                class="bg-[#047D00] hover:bg-[#237F20] text-white px-4 py-2 rounded-md">Simpan</button>
                        </td>
                    </tr>
                </table>
            </div>                        
        </form>
    </div>
</section>
@endsection