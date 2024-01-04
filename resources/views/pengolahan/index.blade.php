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
    <h2>Pelayanan Penilitian</h2>

    <form action="{{ route('pengolahan.store1') }}" method="post" class="form active" id="firstForm">
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
                <option value="Satu semester">Satu semester</option>
                <option value="> 1 semester">> 1 semester</option>
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
