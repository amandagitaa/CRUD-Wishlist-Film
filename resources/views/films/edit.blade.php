<!DOCTYPE html>
<html>
<head>
    <title>Edit Film</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

    <h2>✏️ Edit Film</h2>

    <div class="card shadow-sm mt-3">
        <div class="card-body">

            <form method="POST" action="/films/{{ $film->id }}">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label>Judul</label>
                    <input type="text" name="judul" value="{{ $film->judul }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Genre</label>
                    <input type="text" name="genre" value="{{ $film->genre }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Tahun</label>
                    <input type="number" name="tahun" value="{{ $film->tahun }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" class="form-control">{{ $film->deskripsi }}</textarea>
                </div>

                <button class="btn btn-primary">Update</button>
                <a href="/films" class="btn btn-secondary">Kembali</a>

            </form>

        </div>
    </div>

</div>

</body>
</html>