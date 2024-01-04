<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../../css/app.css">
</head>

<body>
<div class="container-dashboard">
    <div class="container-data">
        <div class="profile-dashboard2">
            <div class="img-profile">
                <img src="https://placehold.co/123x123" alt="">
            </div>
            <div class="profile-data">
                <p class="nama"><span></span> {{ Auth::user()->name }}</p>
                <p><span></span> {{ Auth::user()->email }}</p>
                <p><span></span> Informatika</p>
            </div>
            <button type="submit" class="btn-log-out">Sign out</button>
        </div>
        <div class="options-dashboard2">
            <table class="content-table">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Bidang</th>
                    <th>Nilai</th>
                </tr>
                </thead>
                <tbody>
                <tr class="active-row">
                    <td>1</td>
                    <td>Jabatan Pada Instansi</td>
                    <td>0</td>
                </tr>
                <tr class="active-row">
                    <td>2</td>
                    <td>Pengembangan Penelitian Pendidikan</td>
                    <td>0</td>
                </tr>
                <tr class="active-row">
                    <td>3</td>
                    <td>Penyuluhan / Pemaparan kepada Masyarakat</td>
                    <td>0</td>
                </tr>
                <tr class="active-row">
                    <td>4</td>
                    <td>Pelayanan kepada masyarakat</td>
                    <td>0</td>
                </tr>
                <tr class="active-row">
                    <td>5</td>
                    <td>Penulisan karya</td>
                    <td>0</td>
                </tr>
                <tr class="active-row">
                    <td>6</td>
                    <td>Pengolahan Jurnal</td>
                    <td>0</td>
                </tr>
                <tr class="active-row">
                    <td>Jumlah Nilai / Unsur Utama</td>
                    <td></td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Keterangan</td>
                    <td></td>
                    <td>0</td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
<footer2>
    <table class="content-table-transkip">
        <thead>
        <tr>
            <th>No</th>
            <th>Kegiatan</th>
            <th>tanggal</th>
            <th>Tempat pengabdian</th>
            <th>Angka Kredit</th>
            <th>Jumlah Angka Kredit</th>
            <th>Download SK</th>
            <th>Download Bukti Kinerja</th>
        </tr>
        </thead>
        <tbody>
        <tr class="active-row">
            @foreach($jabatanData as $jabatan)
                <td>{{ $jabatan->id }}</td>
                <td>{{ $jabatan->kegiatan }}</td>
                <td>{{ $jabatan->masa_jabatan }}</td>
                <td>{{ $jabatan->instansi }}</td>
                <td>{{ $jabatan->jumlah_kredit }}</td>
                <td>{{ $jabatan->jumlah_volume }}</td>
                <td>
                    <a href="/storage/sk_penugasan/{{ $jabatan->sk_penugasan }}" class=" me-2 text-light">
                        <img src="../../assets/download.svg" alt="" srcset="">
                    </a>
                </td>
                <td>
                    <a href="/storage/bukti_kinerja/{{ $jabatan->bukti_kinerja }}" class="btn me-2 text-light">
                        <img src="../../assets/download.svg" alt="" srcset="">
                    </a>
                </td>
            @endforeach

        </tr>
        <tbody>
    </table>
</footer2>

</body>

</html>
