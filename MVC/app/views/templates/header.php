<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
</head>
<body>
<nav class="bg-white shadow-lg w-full">
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <span class="text-xl font-bold text-gray-800 py-4 px-4">PHP MVC</span>
                <div class="hidden md:flex items-center">
                    <a href="<?= BASEURL; ?>" class="py-4 px-2 text-lg text-gray-700 font-medium hover:text-blue-500 transition duration-300">Home</a>
                    <a href="<?= BASEURL; ?>/about" class="py-4 px-2 text-lg text-gray-700 font-medium hover:text-blue-500 transition duration-300">About</a>
                    <a href="<?= BASEURL; ?>/mahasiswa" class="py-4 px-2 text-lg text-gray-700 font-medium hover:text-blue-500 transition duration-300">Mahasiswa</a>
                    <a href="#contact" class="py-4 px-2 text-lg text-gray-700 font-medium hover:text-blue-500 transition duration-300">Contact</a>
                </div>
            </div>
            <div class="md:hidden flex items-center pr-4">
                <button class="outline-none mobile-menu-button">
                    <svg class="w-6 h-6 text-gray-500 hover:text-blue-500"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div class="hidden mobile-menu">
            <ul>
                <li><a href="<?= BASEURL; ?>" class="block text-lg px-4 py-2 text-gray-700 hover:bg-blue-500 hover:text-white transition duration-300">Home</a></li>
                <li><a href="<?= BASEURL; ?>/mahasiswa" class="block text-lg px-4 py-2 text-gray-700 hover:bg-blue-500 hover:text-white transition duration-300">Mahasiswa</a></li>
                <li><a href="<?= BASEURL; ?>/about" class="block text-lg px-4 py-2 text-gray-700 hover:bg-blue-500 hover:text-white transition duration-300">About</a></li>
                <li><a href="#contact" class="block text-lg px-4 py-2 text-gray-700 hover:bg-blue-500 hover:text-white transition duration-300">Contact</a></li>
            </ul>
        </div>
    </nav>

    <script>
        const btn = document.querySelector("button.mobile-menu-button");
        const menu = document.querySelector(".mobile-menu");

        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    </script>