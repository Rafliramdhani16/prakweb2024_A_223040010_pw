<?php


class Flasher
{
    public static function setFlash($pesan, $aksi, $tipe)
    {
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe
        ];
    }

    public static function flash()
    {
        if (isset($_SESSION['flash'])) {
            $bgColor = $_SESSION['flash']['tipe'] === 'success' ? 'bg-green-100' : 'bg-red-100';
            $textColor = $_SESSION['flash']['tipe'] === 'success' ? 'text-green-700' : 'text-red-700';
            $borderColor = $_SESSION['flash']['tipe'] === 'success' ? 'border-green-500' : 'border-red-500';

            echo '<div class="' . $bgColor . ' ' . $textColor . ' px-4 py-3 rounded relative mb-4" role="alert">
                    <strong class="font-bold">' . $_SESSION['flash']['pesan'] . '!</strong>
                    <span class="block sm:inline"> Data Mahasiswa ' . $_SESSION['flash']['aksi'] . '.</span>
                    <button class="absolute top-0 bottom-0 right-0 px-4 py-3" onclick="this.parentElement.remove();">
                        <svg class="fill-current h-6 w-6 ' . $textColor . '" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <title>Close</title>
                            <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/>
                        </svg>
                    </button>
                </div>';
            unset($_SESSION['flash']);
        }
    }
}
