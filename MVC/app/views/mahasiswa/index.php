<div class="container mx-auto mt-5 p-4">
    <h2 class="text-3xl font-bold mb-6 text-neutral-800">Daftar Mahasiswa</h2>
    <div class="overflow-x-auto bg-white shadow-lg rounded-lg">
        <table class="min-w-full">
            <thead>
                <tr class="bg-neutral-100 text-neutral-800 text-lg leading-normal">
                    <th class="py-4 px-6 text-left font-semibold">ID</th>
                    <th class="py-4 px-6 text-left font-semibold">Nama</th>
                    <th class="py-4 px-6 text-center font-semibold">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-neutral-800 text-base">
                <?php foreach ($data['mhs'] as $mhs): ?>
                <tr class="border-b border-neutral-200 hover:bg-neutral-50">
                    <td class="py-4 px-6 text-left whitespace-nowrap">
                        <span class="font-medium"><?= $mhs['id'] ?></span>
                    </td>
                    <td class="py-4 px-6 text-left">
                        <span class="font-medium"><?= $mhs['nama'] ?></span>
                    </td>
                    <td class="py-4 px-6 text-center">
                        <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-md transition duration-300 ease-in-out text-base">
                            Detail
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>