<div class="container mx-auto mt-5">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <button type="button" class="bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-blue-700 transition duration-200" data-modal-toggle="formModal">
                Tambah Data Mahasiswa
            </button>
            <h3 class="text-2xl font-bold mb-2">Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach ($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item flex justify-between items-center p-3 border-b border-gray-200 hover:bg-gray-100 transition duration-200">
                        <span class="text-lg"><?= $mhs['nama']; ?></span>
                        <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge bg-blue-600 text-white rounded-full px-3 py-1 hover:bg-blue-700 transition duration-200">Detail</a>
                        <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge bg-red-600 text-white rounded-full px-3 py-1 hover:bg-red-700 transition duration-200" onclick="return confirm('Yakin dek');">Hapus</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="formModal" class="fixed inset-0 z-50 bg-black bg-opacity-50 flex items-center justify-center">
    <div class="bg-white rounded-lg shadow-lg w-11/12 md:w-1/3">
        <div class="modal-header flex justify-between items-center p-4 border-b border-gray-300">
            <h1 class="text-lg font-semibold text-gray-800" id="judulModal">Tambah Data Mahasiswa</h1>
            <button type="button" class="text-gray-500 hover:text-gray-700" onclick="document.getElementById('formModal').classList.add('hidden');">
                &times;
            </button>
        </div>
        <div class="modal-body p-6">
            <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="POST">
                <div class="mb-4">
                    <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                    <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500" id="nama" name="nama" required>
                </div>

                <div class="mb-4">
                    <label for="nrp" class="block text-sm font-medium text-gray-700">NRP</label>
                    <input type="number" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500" id="nrp" name="nrp" required>
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500" id="email" name="email" required>
                </div>

                <div class="mb-4">
                    <label for="jurusan" class="block text-sm font-medium text-gray-700">Jurusan</label>
                    <select class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500" aria-label="jurusan" name="jurusan" required>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Teknik Mesin">Teknik Mesin</option>
                        <option value="Teknik Pangan">Teknik Pangan</option>
                        <option value="Teknik Industri">Teknik Industri</option>
                    </select>
                </div>
        </div>
        <div class="modal-footer p-4 border-t border-gray-300">
            <button type="button" class="bg-gray-300 text-gray-800 font-semibold py-2 px-4 rounded-lg hover:bg-gray-400 transition duration-200" onclick="document.getElementById('formModal').classList.add('hidden');">Close</button>
            <button type="submit" class="bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-200">Tambah Data</button>
            </form>
        </div>
    </div>
</div>

<script>
    // Show modal
    document.querySelector('[data-modal-toggle="formModal"]').addEventListener('click', function() {
        document.getElementById('formModal').classList.remove('hidden');
    });
</script>