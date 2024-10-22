<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komentar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Beri Komentar</h1>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <form action="{{ route('komentar.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="komentar" class="form-label">Komentar</label>
                <textarea class="form-control" id="komentar" name="komentar" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>

        <hr class="mt-5">

        <h2 class="mb-4">Komentar Terbaru</h2>
        @foreach($komentars as $komentar)
            <div class="mb-3">
                <h5>{{ $komentar->nama }} <small class="text-muted">{{ $komentar->created_at->format('d M Y, H:i') }}</small></h5>
                <p>{{ $komentar->komentar }}</p>
            </div>
        @endforeach
    </div>
</body>
</html>
