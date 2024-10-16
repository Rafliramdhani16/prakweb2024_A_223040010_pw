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
            echo '<div class="alert alert-' . $_SESSION['flash']['tipe'] . ' alert-dismissible fade show" role="alert">
            <div class="flex items-center justify-between p-4 mb-4 text-sm text-' . ($_SESSION['flash']['tipe'] === 'success' ? 'green' : 'red') . '-700 bg-' . ($_SESSION['flash']['tipe'] === 'success' ? 'green' : 'red') . '-100 rounded-lg" role="alert">
                <span class="font-medium">' . $_SESSION['flash']['pesan'] . '</span> Data Mahasiswa ' . $_SESSION['flash']['pesan'] . ' ' . $_SESSION['flash']['aksi'] . '
                <button type="button" class="ml-2 -mr-1 inline-flex items-center justify-center w-8 h-8 text-' . ($_SESSION['flash']['tipe'] === 'success' ? 'green' : 'red') . '-500 bg-' . ($_SESSION['flash']['tipe'] === 'success' ? 'green' : 'red') . '-100 rounded-full hover:bg-' . ($_SESSION['flash']['tipe'] === 'success' ? 'green' : 'red') . '-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-' . ($_SESSION['flash']['tipe'] === 'success' ? 'green' : 'red') . '-500" aria-label="Close" onclick="this.parentElement.remove();">
                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 9l-5 5m0-5l5 5m5-5l5 5m0-5l-5 5" clip-rule="evenodd"/></svg>
                </button>
            </div>
          </div>';
            unset($_SESSION['flash']);
        }
    }
}
