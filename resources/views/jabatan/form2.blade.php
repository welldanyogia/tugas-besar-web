<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../css/app.css" />
    <title>Lengkapi Data</title>
</head>
<body>

<div class="input-container" id="form2-container" >
    <h2>Jabatan Instansi</h2>

    <form action="{{ route('jabatan.store2') }}" method="post" class="form" id="secondForm">
        @csrf
        <!-- Formulir kedua -->
        <label for="no_sk">No SK:</label>
        <input type="text" id="no_sk" name="no_sk" required /><br />

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

{{--        <input type="hidden" name="form_number" value="2">--}}

{{--        <button type="button" onclick="showForm('form1')">Previous</button>--}}
        <button type="submit" onclick="showForm('form3')">Next</button>
    </form>
</div>


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
