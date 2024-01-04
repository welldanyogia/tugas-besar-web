<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Isi Kegiatan</title>
    <link rel="stylesheet" href="../../css/app.css" />
</head>

<body>
<div class="container-dashboard">
    <h1>Dashboard</h1>
    <div class="container-data">
        <div class="profile-dashboard">
            <div class="img-profile">
                <img src="https://placehold.co/123x123" alt="" />
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
                <a href="{{ route('jabatan.index') }}">
                <div class="jabatan-instansi">
                    <h4>Jabatan Pada Instansi</h4>
                </div>
                </a>
                <a href="{{ route('pengembangan.index') }}">
                <div class="pengembangan-penelitian">
                    <h4>Pengembangan Penelitian</h4>
                </div>
                </a>
                <a href="{{ route('pengabdian.index') }}">
                <div class="pengabdian-masyarakat">
                    <h4>Pengabdian Masyarakat</h4>
                </div>
                </a>
                <a href="{{ route('pelayanan.index') }}">
                <div class="pelayan-masyarkat">
                    <h4>Pelayan Terhadap Masyarakat</h4>
                </div>
                </a>
                <a href="{{ route('penulisan.index') }}">
                <div class="penulisan-karya">
                    <h4>Penulisan Karya</h4>
                </div>
                </a>
                <a href="{{ route('pengolahan.index') }}">
                <div class="pengolahan-jurnal">
                    <h4>Pengolahan Jurnal</h4>
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
