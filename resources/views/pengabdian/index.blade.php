<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/app.css">
    <title>Lengkapi Data</title>
</head>
<body>

<div class="input-container" id="form1-container">
    <h2>Pengembangan Penilitian</h2>

    <form action="{{ route('pengabdian.store1') }}" method="post" class="form active" id="firstForm">
        @csrf
        <!-- Formulir pertama -->
        <label for="nip">NIP:</label>
        <input type="text" id="nip" name="nip" required><br>

        <label for="nama_lengkap">Nama Lengkap:</label>
        <input type="text" id="nama_lengkap" name="nama_lengkap" required><br>


        <label for="nama_kegiatan">nama Kegiatan:</label>
        <input type="text" id="nama_kegiatan" name="nama_kegiatan" required><br>

        <label for="lokasi">lokasi:</label>
        <input type="text" id="lokasi" name="lokasi" required><br>


        <label for="masa_kegiatan">masa kegiatan:</label>
        <div class="masa_kegiatan">
            <select id="masa_kegiatan" name="masa_kegiatan" required>
                <option value="" disabled selected>Select One</option>
                <option value="Laki-laki">Satu semester</option>
                <option value="Perempuan">> 1 semester</option>
            </select>
        </div><br>

        <label for="tingkat_kegiatan">tingkat kegiatan:</label>
        <div class="tingkat_kegiatan">
            <select id="tingkat_kegiatan" name="tingkat_kegiatan" required>
                <option value="" disabled selected>Select One</option>
                <option value="Internasional">Internasional</option>
                <option value="Nasional"> Nasional</option>
                <option value="Lokal">Lokal</option>
                <option value="Insedensial"> Insedensial</option>
            </select>
        </div><br>

        <button type="submit" >Next</button>
    </form>
</div>

{{--<div class="input-container" id="form2-container" style="display:none;">--}}
{{--    <h2>Pengembangan Penilitian</h2>--}}

{{--    <form action="{{ route('pengabdian.store2') }}" method="post" class="form" id="secondForm">--}}
{{--        @csrf--}}
{{--        <!-- Formulir kedua -->--}}
{{--        <label for="no_sk">No SK:</label>--}}
{{--        <input type="text" id="no_sk" name="no_sk" required><br>--}}

{{--        <label for="satuan_kegiatan">Satuan Kegiatan:</label>--}}
{{--        <input type="text" id="satuan_kegiatan" name="satuan_kegiatan" required><br>--}}

{{--        <label for="angka_kredit">Angka Kredit:</label>--}}
{{--        <input type="number" id="angka_kredit" name="angka_kredit" required><br>--}}

{{--        <label for="volume_kegiatan">Volume Kegiatan:</label>--}}
{{--        <input type="number" id="volume_kegiatan" name="volume_kegiatan" required><br>--}}

{{--        <label for="jumlah_kredit">Jumlah Kredit:</label>--}}
{{--        <input type="number" id="jumlah_kredit" name="jumlah_kredit" required><br>--}}

{{--        <label for="jumlah_volume">Jumlah Volume :</label>--}}
{{--        <input type="number" id="jumlah_volume" name="jumlah_volume" required><br>--}}


{{--        --}}{{--        <button type="button" onclick="showForm('form1')">Previous</button>--}}
{{--        <button type="submit">Next</button>--}}
{{--    </form>--}}
{{--</div>--}}

{{--<div class="input-container" id="form3-container" style="display:none;">--}}
{{--    <h2>Pengembangan Penilitian</h2>--}}

{{--    <form action="{{ route('pengabdian.store3') }}" method="post" class="form" id="thirdForm">--}}
{{--        @csrf--}}
{{--        <!-- Formulir ketiga -->--}}
{{--        <label for="sk_penugasan">SK Penugasan:</label>--}}
{{--        <input type="file" id="sk_penugasan" name="sk_penugasan" required><br>--}}

{{--        <label for="bukti_kinerja">Bukti Kinerja:</label>--}}
{{--        <input type="file" id="bukti_kinerja" name="bukti_kinerja" required><br>--}}

{{--        <button type="button" onclick="showForm('form2')">Previous</button>--}}
{{--        <button type="submit">Submit</button>--}}
{{--    </form>--}}
{{--</div>--}}

<script>
    function showForm(formId) {
        document.getElementById('form1-container').style.display = 'none';
        document.getElementById('form2-container').style.display = 'none';
        document.getElementById('form3-container').style.display = 'none'; // Add this line

        document.getElementById(formId + '-container').style.display = 'block';
    }
</script>

</body>
</html>
