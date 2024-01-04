<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../css/app.css" />
    <title>Lengkapi Data</title>
</head>
<body>
<div class="input-container" id="form1-container">
    <h2>Jabatan Instansi</h2>

    <form action="{{ route('jabatan.store1') }}" method="post" class="form active" id="firstForm">
        @csrf
        <!-- Formulir pertama -->
        <label for="nip">NIP:</label>
        <input type="text" id="nip" name="nip" required /><br />

        <label for="nama_lengkap">Nama Lengkap:</label>
        <input type="text" id="nama_lengkap" name="nama_lengkap" required /><br />

        <label for="kegiatan">Kegiatan:</label>
        <input type="text" id="kegiatan" name="kegiatan" required /><br />

        <label for="jabatan">Jabatan:</label>
        <input type="text" id="jabatan" name="jabatan" required /><br />

        <label for="instansi">Instansi:</label>
        <input type="text" id="instansi" name="instansi" required /><br />

        <label for="masa_jabatan">Masa Jabatan:</label>
        <input type="date" id="masa_jabatan" name="masa_jabatan" required /><br />

        <label for="akhir_jabatan">Akhir Jabatan:</label>
        <input type="date" id="akhir_jabatan" name="akhir_jabatan" required /><br />

        <input type="hidden" name="form_number" value="1">

        <button type="submit" onclick="showForm('form2')">Next</button>
    </form>
</div>

<div class="input-container" id="form2-container" style="display: none">
    <h2>Jabatan Instansi</h2>

    <form action="{{ route('jabatan.store2') }}" method="post" class="form" id="secondForm">
        @csrf
        <!-- Formulir kedua -->
        <label for="no_seri">No SK:</label>
        <input type="text" id="no_seri" name="no_seri" required /><br />

        <label for="satuan">Satuan Kegiatan:</label>
        <input type="text" id="satuan" name="satuan" required /><br />

        <label for="kredit">Angka Kredit:</label>
        <input type="number" id="kredit" name="kredit" required /><br />

        <label for="Volume">Volume Kegiatan:</label>
        <input type="number" id="Volume" name="Volume" required /><br />

        <label for="jumlah_kredit">Jumlah Kredit:</label>
        <input type="number" id="jumlah_kredit" name="jumlah_kredit" required /><br />

        <label for="jumlah_volume">Jumlah Volume :</label>
        <input type="number" id="jumlah_volume" name="jumlah_volume" required /><br />

        <input type="hidden" name="form_number" value="2">

        <button type="button" onclick="showForm('form1')">Previous</button>
        <button type="submit" onclick="showForm('form3')">Next</button>
    </form>
</div>

{{--<div class="input-container" id="form3-container" style="display: none">--}}
{{--    <h2>Jabatan Instansi</h2>--}}

{{--    <form action="{{ route('jabatan.store3') }}" method="post" class="form" id="thirdForm" enctype="multipart/form-data">--}}
{{--        @csrf--}}
{{--        <!-- Formulir ketiga -->--}}
{{--        <label for="sk_penugasan">SK Penugasan:</label>--}}
{{--        <input type="file" id="sk_penugasan" name="sk_penugasan" required /><br />--}}

{{--        <label for="bukti_kinerja">Bukti Kinerja:</label>--}}
{{--        <input type="file" id="bukti_kinerja" name="bukti_kinerja" required /><br />--}}

{{--        <input type="hidden" name="form_number" value="3">--}}

{{--        <button type="button" onclick="showForm('form2')">Previous</button>--}}
{{--        <button type="submit">Submit</button>--}}
{{--    </form>--}}
{{--</div>--}}

<script>
    function showForm(formId) {
        document.getElementById('form1-container').style.display = 'none';
        document.getElementById('form2-container').style.display = 'none';
        document.getElementById('form3-container').style.display = 'none';

        document.getElementById(formId + '-container').style.display = 'block';
    }
</script>
</body>
</html>
