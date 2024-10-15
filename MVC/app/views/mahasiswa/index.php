
    <div class="container mx-auto mt-5 p-4">
        <h2 class="text-2xl font-bold mb-4">Daftar Mahasiswa</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-300">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="py-2 px-4 border-b">No</th>
                        <th class="py-2 px-4 border-b">Nama</th>
                        <th class="py-2 px-4 border-b">NRP</th>
                        <th class="py-2 px-4 border-b">Email</th>
                        <th class="py-2 px-4 border-b">Jurusan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['mhs'] as $mhs): ?>
                    <tr>
                        <td class="py-2 px-4 border-b text-center"><?= $mhs['id'] ?></td>
                        <td class="py-2 px-4 border-b"><?= $mhs['nama'] ?></td>
                        <td class="py-2 px-4 border-b"><?= $mhs['nrp'] ?></td>
                        <td class="py-2 px-4 border-b"><?= $mhs['email'] ?></td>
                        <td class="py-2 px-4 border-b"><?= $mhs['jurusan'] ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>