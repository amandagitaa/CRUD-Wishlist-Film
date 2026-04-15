<!DOCTYPE html>
<html>
<head>
    <title>Tambah Film</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

    <h2>➕ Tambah Film</h2>

    <div class="card shadow-sm mt-3">
        <div class="card-body">

            <form method="POST" action="/films">
                @csrf

                <div class="mb-3">
                    <label>Judul</label>
                    <input type="text" name="judul" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Genre</label>
                    <input type="text" name="genre" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Tahun</label>
                    <input type="number" name="tahun" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" class="form-control"></textarea>
                </div>

                <button class="btn btn-success">Simpan</button>
                <a href="/films" class="btn btn-secondary">Kembali</a>

            </form>

        </div>
    </div>

</div>

</body>
</html>