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
    <h2>Penulisan Karya</h2>

    <form action="{{ route('penulisan.store1') }}" method="post" class="form active" id="firstForm">
        @csrf
        <!-- Formulir pertama -->
        <label for="nip">NIP:</label>
        <input type="text" id="nip" name="nip" required /><br />

        <label for="nama_lengkap">Nama Lengkap:</label>
        <input type="text" id="nama_lengkap" name="nama_lengkap" required /><br />

        <label for="jenis_karya">Jenis Karya Tulis:</label>
        <input type="text" id="jenis_karya" name="jenis_karya" required /><br />

        <label for="judul_karya">Judul Karya Tulis:</label>
        <input type="text" id="judul_karya" name="judul_karya" required /><br />

        <label for="lokasi">Genre Karya Tulis:</label>
        <input type="text" id="lokasi" name="lokasi" required /><br />

        <label for="masa">Waktu Pengunggahan Karya Tulis:</label>
        <div class="masa">
            <select id="masa" name="masa" required>
                <option value="" disabled selected>Select One</option>
                <option value="Semester 1">Semester 1</option>
                <option value="Semester 2">Semester 2</option>
                <option value="Semester 3">Semester 3</option>
                <option value="Semester 4">Semester 4</option>
                <option value="Semester 5">Semester 5</option>
                <option value="Semester 6">Semester 6</option>
                <option value="Semester 7">Semester 7</option>
                <option value="Semester 8">Semester 8</option>
            </select>
        </div>
        <br />

        <label for="tingkat">Tingkat Karya Tulis:</label>
        <div class="tingkat">
            <select id="tingkat" name="tingkat" required>
                <option value="" disabled selected>Select One</option>
                <option value="Internasional">Internasional</option>
                <option value="Nasional">Nasional</option>
                <option value="Lokal">Lokal</option>
                <option value="Insedensial">Insedensial</option>
            </select>
        </div>
        <br />

        <button type="submit">Next</button>
    </form>
</div>

{{--<div class="input-container" id="form2-container">--}}
{{--    <h2>Penulisan Karya</h2>--}}

{{--    <form action="{{ route('penulisan.store2') }}" method="post" class="form" id="secondForm">--}}
{{--        @csrf--}}
{{--        <!-- Formulir kedua -->--}}
{{--        <label for="no_sk">No SK:</label>--}}
{{--        <input type="text" id="no_sk" name="no_sk" required /><br />--}}

{{--        <label for="satuan_karya">Satuan Karya Tulis:</label>--}}
{{--        <input type="text" id="satuan_karya" name="satuan_karya" required /><br />--}}

{{--        <label for="angka_kredit">Angka Kredit:</label>--}}
{{--        <input type="number" id="angka_kredit" name="angka_kredit" required /><br />--}}

{{--        <label for="lingkup_karya">Ruang Lingkup Karya:</label>--}}
{{--        <input type="number" id="lingkup_karya" name="lingkup_karya" required /><br />--}}

{{--        <label for="jumlah_karya">Jumlah Karya:</label>--}}
{{--        <input type="number" id="jumlah_karya" name="jumlah_karya" required /><br />--}}

{{--        <label for="jumlah_volume">Jumlah Volume :</label>--}}
{{--        <input type="number" id="Volume" name="Volume" required /><br />--}}

{{--        <button type="button" onclick="showForm('form1')">Previous</button>--}}
{{--        <button type="submit" onclick="showForm('form3')">Next</button>--}}
{{--    </form>--}}
{{--</div>--}}

{{--<div class="input-container" id="form3-container">--}}
{{--    <h2>Penulisan Karya</h2>--}}

{{--    <form action="{{route('penulisan.store3')}}" method="post" class="form" id="thirdForm" enctype="multipart/form-data">--}}
{{--        @csrf--}}
{{--        <!-- Formulir ketiga -->--}}
{{--        <label for="sk_penugasan">SK Penugasan Karya:</label>--}}
{{--        <input--}}
{{--            type="file"--}}
{{--            id="sk_penugasan"--}}
{{--            name="sk_penugasan"--}}
{{--            required--}}
{{--        /><br />--}}

{{--        <label for="bukti_kinerja">Bukti Karya:</label>--}}
{{--        <input--}}
{{--            type="file"--}}
{{--            id="bukti_kinerja"--}}
{{--            name="bukti_kinerja"--}}
{{--            required--}}
{{--        /><br />--}}

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
