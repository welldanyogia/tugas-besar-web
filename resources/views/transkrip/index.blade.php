{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}

{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <title>Dashboard</title>--}}
{{--    <link rel="stylesheet" href="../../css/app.css">--}}
{{--</head>--}}

{{--<body>--}}
{{--<div class="container-dashboard">--}}
{{--    <div class="container-data">--}}
{{--        <div class="profile-dashboard2">--}}
{{--            <div class="img-profile">--}}
{{--                <img src="https://placehold.co/123x123" alt="">--}}
{{--            </div>--}}
{{--            <div class="profile-data">--}}
{{--                <p class="nama"><span></span> {{ Auth::user()->name }}</p>--}}
{{--                <p><span></span> {{ Auth::user()->email }}</p>--}}
{{--                <p><span></span> Informatika</p>--}}
{{--            </div>--}}
{{--            <button type="submit" class="btn-log-out">Sign out</button>--}}
{{--        </div>--}}
{{--        <div class="options-dashboard2">--}}
{{--            <table class="content-table">--}}
{{--                <thead>--}}
{{--                <tr>--}}
{{--                    <th>No</th>--}}
{{--                    <th>Bidang</th>--}}
{{--                    <th>Nilai</th>--}}
{{--                </tr>--}}
{{--                </thead>--}}
{{--                <tbody>--}}
{{--                <tr class="active-row">--}}
{{--                    <td>1</td>--}}
{{--                    <td>Jabatan Pada Instansi</td>--}}
{{--                    <td>0</td>--}}
{{--                </tr>--}}
{{--                <tr class="active-row">--}}
{{--                    <td>2</td>--}}
{{--                    <td>Pengembangan Penelitian Pendidikan</td>--}}
{{--                    <td>0</td>--}}
{{--                </tr>--}}
{{--                <tr class="active-row">--}}
{{--                    <td>3</td>--}}
{{--                    <td>Penyuluhan / Pemaparan kepada Masyarakat</td>--}}
{{--                    <td>0</td>--}}
{{--                </tr>--}}
{{--                <tr class="active-row">--}}
{{--                    <td>4</td>--}}
{{--                    <td>Pelayanan kepada masyarakat</td>--}}
{{--                    <td>0</td>--}}
{{--                </tr>--}}
{{--                <tr class="active-row">--}}
{{--                    <td>5</td>--}}
{{--                    <td>Penulisan karya</td>--}}
{{--                    <td>0</td>--}}
{{--                </tr>--}}
{{--                <tr class="active-row">--}}
{{--                    <td>6</td>--}}
{{--                    <td>Pengolahan Jurnal</td>--}}
{{--                    <td>0</td>--}}
{{--                </tr>--}}
{{--                <tr class="active-row">--}}
{{--                    <td>Jumlah Nilai / Unsur Utama</td>--}}
{{--                    <td></td>--}}
{{--                    <td>0</td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <td>Keterangan</td>--}}
{{--                    <td></td>--}}
{{--                    <td>0</td>--}}
{{--                </tr>--}}

{{--                </tbody>--}}
{{--            </table>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<footer2>--}}
{{--    <table class="content-table-transkip">--}}
{{--        <thead>--}}
{{--        <tr>--}}
{{--            <th>No</th>--}}
{{--            <th>Kegiatan</th>--}}
{{--            <th>tanggal</th>--}}
{{--            <th>Tempat pengabdian</th>--}}
{{--            <th>Angka Kredit</th>--}}
{{--            <th>Jumlah Angka Kredit</th>--}}
{{--            <th>Download SK</th>--}}
{{--            <th>Download Bukti Kinerja</th>--}}
{{--        </tr>--}}
{{--        </thead>--}}
{{--        <tbody>--}}
{{--        <tr class="active-row">--}}
{{--            @foreach($jabatanData as $jabatan)--}}
{{--                <td>{{ $jabatan->id }}</td>--}}
{{--                <td>{{ $jabatan->kegiatan }}</td>--}}
{{--                <td>{{ $jabatan->masa_jabatan }}</td>--}}
{{--                <td>{{ $jabatan->instansi }}</td>--}}
{{--                <td>{{ $jabatan->jumlah_kredit }}</td>--}}
{{--                <td>{{ $jabatan->jumlah_volume }}</td>--}}
{{--                <td>--}}
{{--                    <a href="/storage/sk_penugasan/{{ $jabatan->sk_penugasan }}" class=" me-2 text-light">--}}
{{--                        <img src="../../assets/download.svg" alt="" srcset="">--}}
{{--                    </a>--}}
{{--                </td>--}}
{{--                <td>--}}
{{--                    <a href="/storage/bukti_kinerja/{{ $jabatan->bukti_kinerja }}" class="btn me-2 text-light">--}}
{{--                        <img src="../../assets/download.svg" alt="" srcset="">--}}
{{--                    </a>--}}
{{--                </td>--}}
{{--            @endforeach--}}

{{--        </tr>--}}
{{--        <tbody>--}}
{{--    </table>--}}
{{--</footer2>--}}

{{--</body>--}}

{{--</html>--}}
    <!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous"
    />
    <title>dashboard</title>
    <link rel="stylesheet" href="../../css/app.css"/>
</head>

<body>
<div class="d-flex flex-column">
    <div class="container-dashboard">
        <div class="container-data">
            <div class="profile-dashboard2">
                <div class="img-profile">
                    <img src="../img/profile.jpg" alt=""/>
                </div>
                <div class="profile-data">
                    <p class="nama"><span></span> John Doe</p>
                    <p><span></span> 2021103747</p>
                    <p><span></span> Informatika</p>
                </div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                <button type="submit" class="btn-log-out">Sign out</button>
                </form>

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
            @foreach($pelayananData as $pelayanan)
                <td>{{ $pelayanan->id }}</td>
                <td>{{ $pelayanan->kegiatan }}</td>
                <td>{{ $pelayanan->masa_jabatan }}</td>
                <td>{{ $pelayanan->instansi }}</td>
                <td>{{ $pelayanan->jumlah_kredit }}</td>
                <td>{{ $pelayanan->jumlah_volume }}</td>
                <td>
                    <a href="/storage/sk_penugasan/{{ $pelayanan->sk_penugasan }}" class=" me-2 text-light">
                        <img src="../../assets/download.svg" alt="" srcset="">
                    </a>
                </td>
                <td>
                    <a href="/storage/bukti_kinerja/{{ $pelayanan->bukti_kinerja }}" class="btn me-2 text-light">
                        <img src="../../assets/download.svg" alt="" srcset="">
                    </a>
                </td>
            @endforeach
            @foreach($pengabdianData as $pengabdian)
                <td>{{ $pengabdian->id }}</td>
                <td>{{ $pengabdian->kegiatan }}</td>
                <td>{{ $pengabdian->masa_jabatan }}</td>
                <td>{{ $pengabdian->instansi }}</td>
                <td>{{ $pengabdian->jumlah_kredit }}</td>
                <td>{{ $pengabdian->jumlah_volume }}</td>
                <td>
                    <a href="/storage/sk_penugasan/{{ $pengabdian->sk_penugasan }}" class=" me-2 text-light">
                        <img src="../../assets/download.svg" alt="" srcset="">
                    </a>
                </td>
                <td>
                    <a href="/storage/bukti_kinerja/{{ $pengabdian->bukti_kinerja }}" class="btn me-2 text-light">
                        <img src="../../assets/download.svg" alt="" srcset="">
                    </a>
                </td>
            @endforeach
                @foreach($pengembanganData as $pengembangan)
                    <td>{{ $pengembangan->id }}</td>
                    <td>{{ $pengembangan->kegiatan }}</td>
                    <td>{{ $pengembangan->masa_jabatan }}</td>
                    <td>{{ $pengembangan->instansi }}</td>
                    <td>{{ $pengembangan->jumlah_kredit }}</td>
                    <td>{{ $pengembangan->jumlah_volume }}</td>
                    <td>
                        <a href="/storage/sk_penugasan/{{ $pengembangan->sk_penugasan }}" class=" me-2 text-light">
                            <img src="../../assets/download.svg" alt="" srcset="">
                        </a>
                    </td>
                    <td>
                        <a href="/storage/bukti_kinerja/{{ $pengembangan->bukti_kinerja }}" class="btn me-2 text-light">
                            <img src="../../assets/download.svg" alt="" srcset="">
                        </a>
                    </td>
                @endforeach
                @foreach($penulisanData as $penulisan)
                    <td>{{ $penulisan->id }}</td>
                    <td>{{ $penulisan->kegiatan }}</td>
                    <td>{{ $penulisan->masa_jabatan }}</td>
                    <td>{{ $penulisan->instansi }}</td>
                    <td>{{ $penulisan->jumlah_kredit }}</td>
                    <td>{{ $penulisan->jumlah_volume }}</td>
                    <td>
                        <a href="/storage/sk_penugasan/{{ $penulisan->sk_penugasan }}" class=" me-2 text-light">
                            <img src="../../assets/download.svg" alt="" srcset="">
                        </a>
                    </td>
                    <td>
                        <a href="/storage/bukti_kinerja/{{ $penulisan->bukti_kinerja }}" class="btn me-2 text-light">
                            <img src="../../assets/download.svg" alt="" srcset="">
                        </a>
                    </td>
                @endforeach
                @foreach($pengolahanData as $pengolahan)
                    <td>{{ $pengolahan->id }}</td>
                    <td>{{ $pengolahan->nama_kegiatan }}</td>
                    <td>{{ $pengolahan->masa_kegiatan }}</td>
                    <td>{{ $pengolahan->lokasi }}</td>
                    <td>{{ $pengolahan->jumlah_kredit }}</td>
                    <td>{{ $pengolahan->jumlah_volume }}</td>
                    <td>
                        <a href="/storage/sk_penugasan/{{ $pengolahan->sk_penugasan }}" class=" me-2 text-light">
                            <img src="../../assets/download.svg" alt="" srcset="">
                        </a>
                    </td>
                    <td>
                        <a href="/storage/bukti_kinerja/{{ $pengolahan->bukti_kinerja }}" class="btn me-2 text-light">
                            <img src="../../assets/download.svg" alt="" srcset="">
                        </a>
                    </td>
                @endforeach
        </tr>
        </tbody>

        <tbody></tbody>
    </table>
</div>

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
></script>
</body>
</html>
