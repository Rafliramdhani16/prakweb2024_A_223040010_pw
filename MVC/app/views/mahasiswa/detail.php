<div class="container mx-auto mt-5 p-4">
    <h2 class="text-2xl font-bold mb-4">Detail Mahasiswa</h2>
    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="p-4">
            <p class="text-xl font-semibold"><?= $data['mhs']['nama'] ?></p>
            <p class="text-gray-600">NRP: <?= $data['mhs']['nrp'] ?></p>
            <p class="text-gray-600">Email: <?= $data['mhs']['email'] ?></p>
            <p class="text-gray-600">Jurusan: <?= $data['mhs']['jurusan'] ?></p>
        </div>
    </div>
    <a href="<?= BASEURL; ?>/mahasiswa" class="mt-4 inline-block bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
        Kembali
    </a>
</div>