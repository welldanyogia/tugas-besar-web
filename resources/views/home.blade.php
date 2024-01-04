<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/app.css">
</head>

<body>
<div class="container-dashboard">
    <h1>Dashboard</h1>
    <div class="container-data">
        <div class="profile-dashboard">
            <div class="img-profile">
                <img src="https://placehold.co/123x123" alt="">
            </div>
            <div class="profile-data">
                <p class="nama"><span></span> {{ Auth::user()->name }}</p>
                <p><span></span> {{ Auth::user()->email }}</p>
                <p><span></span> Informatika</p>
            </div>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
                <button type="submit" class="btn-log-out">
                    {{ __('Logout') }}
                </button>
            </form>

        </div>
        <div class="options-dashboard">
            <div class="grid-container">
                <a href="{{ route('isikegiatan.index') }}">
                    <div class="keterangan-kegiatan">
                        <h3>Keterangan kegiatan</h3>
                    </div>
                </a>
                <a href="{{ route('transkrip.index') }}">
                    <div class="transkrip-kegiatan">
                        <h3>transkrip kegiatan</h3>
                    </div>
                </a>
                <a href="/storage/Panduan SKPI-compressed.pdf">
                    <div class="panduan">
                        <h3>Panduan</h3>
                    </div>
                </a>
                <a href="/storage/PENILAIAN DAN BOBOT SATUAN AKTIFITAS MAHASISWA Revisi 2017.pdf">
                    <div class="penilaian">
                        <h3>Penilaian</h3>
                    </div>
                </a>
            </div>
        </div>

    </div>
    <footer>
        <h2>Program Pengabdian Masyarakat</h2>
        <p>&copy; 2023-2024.</p>
    </footer>
</div>

</body>

</html>
