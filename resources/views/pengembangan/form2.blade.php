<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/app.css">
    <title>Lengkapi Data</title>
</head>
<body>

{{--<div class="input-container" id="form1-container">--}}
{{--    <h2>Pengembangan Penilitian</h2>--}}

{{--    <form action="{{ route('pengembangan.store1') }}" method="post" class="form active" id="firstForm">--}}
{{--        @csrf--}}
{{--        <!-- Formulir pertama -->--}}
{{--        <label for="nip">NIP:</label>--}}
{{--        <input type="text" id="nip" name="nip" required><br>--}}

{{--        <label for="nama">Nama Lengkap:</label>--}}
{{--        <input type="text" id="nama" name="nama" required><br>--}}

{{--        <label for="kegiatan">Kegiatan:</label>--}}
{{--        <input type="text" id="tempat_lahir" name="tempat_lahir" required><br>--}}

{{--        <label for="judul">judul:</label>--}}
{{--        <input type="text" id="judul" name="judul" required><br>--}}

{{--        <label for="lokasi">lokasi:</label>--}}
{{--        <input type="text" id="lokasi" name="lokasi" required><br>--}}


{{--        <label for="bidang">bidang:</label>--}}
{{--        <input type="text" id="bidang" name="bidang" required><br>--}}



{{--        <button type="submit">Next</button>--}}
{{--    </form>--}}
{{--</div>--}}

<div class="input-container" id="form2-container" >
    <h2>Pengembangan Penilitian</h2>

    <form action="{{ route('pengembangan.store2') }}" method="post" class="form" id="secondForm">
        @csrf
        <!-- Formulir kedua -->
        <label for="no_sk">No SK:</label>
        <input type="text" id="no_sk" name="no_sk" required><br>

        <label for="satuan">Satuan Kegiatan:</label>
        <input type="text" id="satuan" name="satuan" required><br>

        <label for="kredit">Angka Kredit:</label>
        <input type="number" id="kredit" name="kredit" required><br>

        <label for="Volume">Volume Kegiatan:</label>
        <input type="number" id="Volume" name="Volume" required><br>

        <label for="jumlah_kredit">Jumlah Kredit:</label>
        <input type="number" id="jumlah_kredit" name="jumlah_kredit" required><br>

        <label for="jumlah_volume">Jumlah Volume :</label>
        <input type="number" id="jumlah_volume" name="jumlah_volume" required><br>


{{--        <button type="button" onclick="showForm('form1')">Previous</button>--}}
        <button type="submit">Next</button>
    </form>
</div>

{{--<div class="input-container" id="form3-container" style="display:none;">--}}
{{--    <h2>Pengembangan Penilitian</h2>--}}

{{--    <form action="#" method="post" class="form" id="thirdForm">--}}
{{--        <!-- Formulir ketiga -->--}}
{{--        <label for="sk_penugasan">SK Penugasan:</label>--}}
{{--        <input type="file" id="sk_penugasan" name="sk_penugasan" required><br>--}}

{{--        <label for="bukti_kinerja">Bukti Kinerja:</label>--}}
{{--        <input type="file" id="bukti_kinerja" name="bukti_kinerja" required><br>--}}

{{--        <button type="button" onclick="showForm('form2')">Previous</button>--}}
{{--        <button type="submit">Submit</button>--}}
{{--    </form>--}}
{{--</div>--}}

{{--<script>--}}
{{--    function showForm(formId) {--}}
{{--        document.getElementById('form1-container').style.display = 'none';--}}
{{--        document.getElementById('form2-container').style.display = 'none';--}}
{{--        document.getElementById('form3-container').style.display = 'none'; // Add this line--}}

{{--        document.getElementById(formId + '-container').style.display = 'block';--}}
{{--    }--}}
{{--</script>--}}

</body>
</html>
