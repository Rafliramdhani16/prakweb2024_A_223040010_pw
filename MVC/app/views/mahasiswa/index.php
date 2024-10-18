<div class="container mx-auto px-4 mt-8">
    <div class="mb-6">
        <div class="md:w-1/2">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    
    <div class="mb-6">
        <div class="md:w-1/2">
            <form action="<?= BASEURL; ?>/mahasiswa/cari" method="POST">
                <div class="flex">
                    <input type="text" class="flex-grow px-4 py-2 border rounded-l-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Cari mahasiswa" name="keyword" id="keyword" autocomplete="off">
                    <button class="px-4 py-2 bg-blue-500 text-white rounded-r-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500" type="submit" id="tombolCari">Cari</button>
                </div>
            </form>
        </div>
    </div>

    <div class="mb-6">
        <button type="button" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 tombolTambahData">
            Tambah Data Mahasiswa
        </button>
        <h3 class="text-2xl font-bold mt-4 mb-2">Daftar Mahasiswa</h3>
        <ul class="space-y-2">
            <?php foreach ($data['mhs'] as $mhs) : ?>
                <li class="flex justify-between items-center p-3 bg-white rounded-md shadow">
                    <?= $mhs['nama']; ?>
                    <div>
                        <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="px-2 py-1 bg-red-500 text-white rounded-md text-sm hover:bg-red-600" onclick="return confirm('Yakin?')">Hapus</a>
                        <a href="#" class="px-2 py-1 bg-yellow-500 text-white rounded-md text-sm hover:bg-yellow-600 tampilModalUbah" data-id="<?= $mhs['id']; ?>">Edit</a>
                        <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="px-2 py-1 bg-blue-500 text-white rounded-md text-sm hover:bg-blue-600">Detail</a>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>

<!-- Modal -->
<div id="formModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden">
    <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
        <div class="mt-3">
            <h3 class="text-lg font-medium text-gray-900 mb-4" id="judulModalLabel">Tambah Data Mahasiswa</h3>
            <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="POST">
                <input type="hidden" name="id" id="id">
                <div class="mb-4">
                    <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                    <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" id="nama" name="nama">
                </div>
                <div class="mb-4">
                    <label for="nrp" class="block text-sm font-medium text-gray-700">NRP</label>
                    <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" id="nrp" name="nrp">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" id="email" name="email">
                </div>
                <div class="mb-4">
                    <label for="jurusan" class="block text-sm font-medium text-gray-700">Jurusan</label>
                    <select class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" id="jurusan" name="jurusan">
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Teknik Mesin">Teknik Mesin</option>
                        <option value="Teknik Pangan">Teknik Pangan</option>
                        <option value="Teknik Industri">Teknik Industri</option>
                    </select>
                </div>
                <div class="flex justify-end space-x-2">
                    <button type="button" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400" id="closeModal">Tutup</button>
                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Tambah Data</button>
                </div>
            </form>
        </div>
    </div>
</div>