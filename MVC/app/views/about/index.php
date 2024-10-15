<div class="container mx-auto px-4 py-8">
    <div class="text-center">
        <h1 class="text-5xl font-semibold mb-8">About Me</h1>
        <img src="<?= BASEURL; ?>/img/senku.jpg" alt="Profile Picture" width="250" height="250" class="rounded-full mx-auto mb-6 shadow-lg">
        <p class="text-lg max-w-2xl mx-auto">
            Hallo, nama saya <span class="font-semibold"><?= $data['nama']; ?></span>. 
            Saya berusia <span class="font-semibold"><?= $data['umur']; ?> tahun</span> dan bekerja sebagai 
            <span class="font-semibold"><?= $data['pekerjaan']; ?></span>.
        </p>
    </div>
</div>
