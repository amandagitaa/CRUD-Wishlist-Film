<!DOCTYPE html>
<html>
<head>
    <title>Wishlist Film</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>🎬 Wishlist Film</h2>
        <a href="/films/create" class="btn btn-primary">+ Tambah Film</a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">

            @if(count($films) > 0)
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Genre</th>
                            <th>Tahun</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($films as $film)
                        <tr>
                            <td>{{ $film->judul }}</td>
                            <td>{{ $film->genre }}</td>
                            <td>{{ $film->tahun }}</td>
                            <td>{{ $film->deskripsi }}</td>
                            <td>
                                <a href="/films/{{ $film->id }}/edit" class="btn btn-warning btn-sm">Edit</a>

                                <form action="/films/{{ $film->id }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus film ini?')">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p class="text-muted">Belum ada film.</p>
            @endif

        </div>
    </div>

</div>

</body>
</html>