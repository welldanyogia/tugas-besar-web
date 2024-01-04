<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/app.css">
    <title>Lengkapi Data</title>
</head>
<body>

<div class="input-container" id="form3-container">
    <h2>Pengolahan Penilitian</h2>

    <form action="{{ route('pengolahan.store3') }}" method="post" class="form" id="thirdForm" enctype="multipart/form-data">
        @csrf
        <!-- Formulir ketiga -->
        <label for="sk_penugasan">SK Penugasan:</label>
        <input type="file" id="sk_penugasan" name="sk_penugasan" required><br>

        <label for="bukti_kinerja">Bukti Kinerja:</label>
        <input type="file" id="bukti_kinerja" name="bukti_kinerja" required><br>

{{--        <button type="button" onclick="showForm('form2')">Previous</button>--}}
        <button type="submit">Submit</button>
    </form>
</div>

</body>
</html>
