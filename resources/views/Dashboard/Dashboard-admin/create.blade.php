<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Barang</title>
</head>
<body>
    <h1>Input Barang</h1>

    <form action="{{ route('input_admin.store') }}" method="POST">
        @csrf
        <div>
            <label for="nama">Nama Barang:</label>
            <input type="text" name="nama" id="nama" required>
        </div>
        <div>
            <label for="category">category:</label>
            <input type="text" name="category" id="category" required>
        </div>
        <div>
            <label for="storage rack">storage rack:</label>
            <input type="number" name="storage_rack" id="storage_rack" required>
        </div>
        <div>
            <label for="stok">Stok:</label>
            <input type="text" name="stok" id="stok" required>
        </div>
        <div>
            <label for="jumlah">Jumlah:</label>
            <input type="number" name="jumlah" id="jumlah">
        </div>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
