<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Event</title>
</head>
<body>
    <form action="{{ route('event.store') }}" method="POST">
        @csrf
        <label for="title">Judul:</label>
        <input type="text" id="title" name="title" required>
        <label for="description">Deskripsi:</label>
        <textarea id="description" name="description" required></textarea>
        <label for="image_url">URL Gambar:</label>
        <input type="text" id="image_url" name="image_url" required>
        <label for="link">Link:</label>
        <input type="text" id="link" name="link" required>
        <button type="submit">Tambah Event</button>
    </form>
</body>
</html>