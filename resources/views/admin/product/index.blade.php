@extends('layout.main_admin')

@section('content')
    <section id="dashboard" class="min-h-screen font-poppins w-full flex flex-col mt-4 pt-10 px-4 pb-20 bg-gray-100">
        <!-- <div class="flex w-full mb-8">
                            <h1 class="text-3xl font-semibold">Data Produk</h1>
                        </div> -->
        <div class="flex flex-col gap-3 bg-white rounded-md p-8">
            <div class="flex justify-between items-center">
                <div class="font-semibold text-xl">Data Produk</div>
                <!-- Open the modal using ID.showModal() method -->
                <button type="submit" class="bg-[#047D00] hover:bg-[#035700] text-white px-4 py-2 rounded-md"
                    onclick="modalTambahData.showModal()">Tambah Data</button>
            </div>
            <dialog id="modalTambahData" class="modal">
                <div class="modal-box">
                    <h3 class="font-bold text-lg">Form Tambah Data</h3>
                    <form action=""
                        class="flex flex-col mt-4 w-full gap-2 rounded-lg transition duration-300 font-poppins">
                        <div class="flex flex-col">
                            <label for="nama">Nama</label>
                            <input type="text" id="nama" placeholder="Masukan nama menu"
                                class="w-full p-2 rounded-md bg-gray-100 focus:outline-none focus:ring focus:ring-[#047D00] focus-border-[#047D00]">
                        </div>
                        <!-- <div class="flex flex-col">
                                            <label for="tipe">Tipe</label>
                                          
                                            <select name="tipe" id="tipe" class="w-full p-2 rounded-md bg-gray-100 focus:outline-none focus:ring focus:ring-[#047D00] focus-border-[#047D00]">
                                                <option value="Pilih" selected disabled>Pilih</option>
                                                <option value="Makanan">Makanan</option>
                                                <option value="Minuman">Minuman</option>
                                            </select>
                                        </div> -->
                        <div class="flex flex-col">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi" placeholder="Masukan deskripsi menu"
                                class="w-full p-2 rounded-md bg-gray-100 focus:outline-none focus:ring focus:ring-[#047D00] focus-border-[#047D00]"></textarea>
                        </div>
                        <div class="flex flex-col">
                            <label for="harga">Harga</label>
                            <input type="text" id="harga" placeholder="Masukan nomor harga anda"
                                class="input-number w-full p-2 rounded-md bg-gray-100 focus:outline-none focus:ring focus:ring-[#047D00] focus-border-[#047D00]">
                            <script>
                                function formatRupiah(angka, prefix) {
                                    var number_string = angka.replace(/[^,\d]/g, '').toString(), //Menghapus huruf
                                        split = number_string.split(','),
                                        sisa = split[0].length % 3,
                                        rupiah = split[0].substr(0, sisa),
                                        ribuan = split[0].substr(sisa).match(/\d{3}/gi);

                                    // tambahkan titik jika yang di input sudah menjadi angka ribuan
                                    if (ribuan) {
                                        separator = sisa ? '.' : '';
                                        rupiah += separator + ribuan.join('.');
                                    }

                                    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
                                    return prefix == undefined ? rupiah : (rupiah ? prefix + rupiah : '');
                                }


                                document.querySelectorAll('.input-number').forEach(function(input) {
                                    input.addEventListener('keyup', function(e) {
                                        var nilai = formatRupiah(this.value, '');
                                        this.value = nilai.replace(/^0+/, ''); // Menghapus 0 sebelum angka selain 0
                                    });
                                });

                                function formatRupiah(angka, prefix) {
                                    var number_string = angka.replace(/[^,\d]/g, '').toString(),
                                        split = number_string.split(','),
                                        sisa = split[0].length % 3,
                                        rupiah = split[0].substr(0, sisa),
                                        ribuan = split[0].substr(sisa).match(/\d{3}/gi);

                                    // tambahkan titik jika yang di input sudah menjadi angka ribuan
                                    if (ribuan) {
                                        separator = sisa ? '.' : '';
                                        rupiah += separator + ribuan.join('.');
                                    }

                                    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
                                    return prefix == undefined ? rupiah : (rupiah ? prefix + rupiah : '');
                                }
                            </script>
                        </div>
                        <div class="flex flex-col">
                            <label for="stok">Stok</label>
                            <input type="stok" id="stok" placeholder="Masukan stok"
                                class="w-full p-2 rounded-md bg-gray-100 focus:outline-none focus:ring focus:ring-[#047D00] focus-border-[#047D00]">
                        </div>
                        <div class="flex flex-col">
                            <label for="gambar">Gambar</label>
                            <input type="file" id="gambar" placeholder="gambar"
                                class="w-full rounded-md bg-gray-100 file:mr-5 file:py-1 file:px-3 file:border-none file:w-full file:bg-gray-100 file:text-stone-700 hover:file:cursor-pointer hover:file:bg-red-50 hover:file:text-[#047D00] focus:outline-none focus:ring focus:ring-[#047D00] focus-border-[#047D00]">
                        </div>
                        <div class="flex flex-col mt-2">
                            <button type="submit"
                                class="p-2 rounded-md bg-white text-primary border-2 border-primary hover:bg-primary hover:text-white">Tambah</button>
                        </div>
                    </form>
                </div>
                <form method="dialog" class="modal-backdrop">
                    <button>close</button>
                </form>
            </dialog>

            <!-- Modal Edit Data  -->
            <dialog id="modalEditData" class="modal">
                <div class="modal-box">
                    <h3 class="font-bold text-lg">Form Edit Data</h3>
                    <form action=""
                        class="flex flex-col mt-4 w-full gap-2 rounded-lg transition duration-300 font-poppins">
                        <div class="flex flex-col">
                            <label for="nama">Nama</label>
                            <input type="text" id="nama" placeholder="Masukan nama menu"
                                class="w-full p-2 rounded-md bg-gray-100 focus:outline-none focus:ring focus:ring-[#047D00] focus-border-[#047D00]"
                                value="Impresol">
                        </div>
                        <div class="flex flex-col">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi" placeholder="Masukan deskripsi menu"
                                class="w-full p-2 rounded-md bg-gray-100 focus:outline-none focus:ring focus:ring-[#047D00] focus-border-[#047D00]">IMPRESOL merupakan pupuk kalium organic chellate asam humat dan dilengkapi dengan unsur Fe. Produk ini merupakan pengembangan pupuk asam humat larut air yang selain berfungsi sebagai pupuk organik juga berfungsi sebagai pembenah tanah. IMPRESOL direkomendasikan penggunaannya secara rutin maupun kondisional untuk memenuhi kebutuhan unsur hara Kalium secara aman terutama disaat-saat tanaman sedang dalam keadaan terdampak oleh serangan hama dan penyakit (fungi maupun bakteri).</textarea>
                        </div>
                        <div class="flex flex-col">
                            <label for="harga">Harga</label>
                            <input type="text" id="harga" placeholder="Masukan nomor harga anda"
                                class="input-number w-full p-2 rounded-md bg-gray-100 focus:outline-none focus:ring focus:ring-[#047D00] focus-border-[#047D00]"
                                value="5000">
                            <script>
                                function formatRupiah(angka, prefix) {
                                    var number_string = angka.replace(/[^,\d]/g, '').toString(), //Menghapus huruf
                                        split = number_string.split(','),
                                        sisa = split[0].length % 3,
                                        rupiah = split[0].substr(0, sisa),
                                        ribuan = split[0].substr(sisa).match(/\d{3}/gi);

                                    // tambahkan titik jika yang di input sudah menjadi angka ribuan
                                    if (ribuan) {
                                        separator = sisa ? '.' : '';
                                        rupiah += separator + ribuan.join('.');
                                    }

                                    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
                                    return prefix == undefined ? rupiah : (rupiah ? prefix + rupiah : '');
                                }


                                document.querySelectorAll('.input-number').forEach(function(input) {
                                    input.addEventListener('keyup', function(e) {
                                        var nilai = formatRupiah(this.value, '');
                                        this.value = nilai.replace(/^0+/, ''); // Menghapus 0 sebelum angka selain 0
                                    });
                                });

                                function formatRupiah(angka, prefix) {
                                    var number_string = angka.replace(/[^,\d]/g, '').toString(),
                                        split = number_string.split(','),
                                        sisa = split[0].length % 3,
                                        rupiah = split[0].substr(0, sisa),
                                        ribuan = split[0].substr(sisa).match(/\d{3}/gi);

                                    // tambahkan titik jika yang di input sudah menjadi angka ribuan
                                    if (ribuan) {
                                        separator = sisa ? '.' : '';
                                        rupiah += separator + ribuan.join('.');
                                    }

                                    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
                                    return prefix == undefined ? rupiah : (rupiah ? prefix + rupiah : '');
                                }
                            </script>
                        </div>
                        <div class="flex flex-col">
                            <label for="stok">Stok</label>
                            <input type="stok" id="stok" placeholder="Masukan stok"
                                class="w-full p-2 rounded-md bg-gray-100 focus:outline-none focus:ring focus:ring-[#047D00] focus-border-[#047D00]"
                                value="20">
                        </div>
                        <div class="flex flex-col">
                            <label for="gambar">Gambar</label>
                            <img class="w-full" src="image/product/Impresol.png" alt="">
                            <input type="file" id="gambar" placeholder="gambar"
                                class="w-full rounded-md bg-gray-100 file:mr-5 file:py-1 file:px-3 file:border-none file:w-full file:bg-gray-100 file:text-stone-700 hover:file:cursor-pointer hover:file:bg-primary hover:file:text-white focus:outline-none focus:ring focus:ring-primary focus-border-primary">
                        </div>
                        <div class="flex flex-col mt-2">
                            <button type="submit"
                                class="p-2 rounded-md bg-white text-primary border-2 border-primary hover:bg-primary hover:text-white">Simpan</button>
                        </div>
                    </form>
                </div>
                <form method="dialog" class="modal-backdrop">
                    <button>close</button>
                </form>
            </dialog>
            <!-- Modal Hapus Data -->
            <dialog id="modalHapusData" class="modal">
                <div class="modal-box">
                    <h3 class="font-bold text-lg">Apakah anda yakin ingin menghapus?</h3>
                    <div class="flex items-center justify-center h-[100px]">
                        <i class="inline fa-solid fa-warning fa-2xl text-[100px]"></i>
                    </div>
                    <form action=""
                        class="flex flex-col mt-4 w-full gap-2 rounded-lg transition duration-300 font-poppins">
                        <div class="flex gap-3 w-full">
                            <button type="submit"
                                class="w-full p-2 rounded-md border-2 border-primary bg-white text-primary border-primary hover:bg-primary border-primary hover:text-white">Tidak</button>
                            <button type="submit"
                                class="w-full p-2 rounded-md bg-red-600 border-red-600 text-white hover:bg-red-800">Ya</button>
                        </div>
                    </form>
                </div>
                <form method="dialog" class="modal-backdrop">
                    <button>close</button>
                </form>
            </dialog>
            <div class="overflow-x-auto">
                <table class="table border-2">
                    <!-- head -->
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th class="w-52">Deskripsi</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration}}</td>
                                <td>{{ $item->nama}}</td>
                                <td class="">
                                    <p class="line-clamp-3">{{ $item->deskripsi }}</p>
                                </td>
                                <td class="text-nowrap">Rp. {{ $item->harga }}</td>
                                <td>{{ $item->stok }}</td>
                                <td>
                                    <img class="rounded-lg w-16" src="{{ asset('assets/image/product/' . $item->foto) }}" alt="">
                                </td>
                                <td>
                                    <button onclick="modalEditData.showModal()"
                                        class="w-8 h-8 rounded-md text-white bg-green-600 hover:bg-green-700">
                                        <i class="fa-solid fa-pencil"></i>
                                    </button>
                                    <button onclick="modalHapusData.showModal()"
                                        class="w-8 h-8 rounded-md text-white bg-red-600 hover:bg-red-700">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
