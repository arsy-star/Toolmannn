<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pengajuan Peminjaman</title>
</head>
<body>
    {{-- <h1>Ajukan Peminjaman untuk {{ $item->nama }}</h1> --}}

{{-- <form action="{{ route('borrowing.store', item->id) }}" method="POST"> --}}
<form action="{{ route('borrowing.store') }}" method="POST">
    @csrf
    <div>
        <label for="tanggal_peminjaman">Tanggal Peminjaman:</label>
        <input type="date" name="tanggal_peminjaman" id="tanggal_peminjaman" required>
    </div>
    <div>
        <label for="tanggal_pengembalian">Tanggal pengembalian:</label>
        <input type="date" name="tanggal_pengembalian" id="tanggal_pengembalian" required>
    </div>
    <div>
        <label for="jumlah">Jumlah:</label>
        <input type="number" name="jumlah" id="jumlah" required>
    </div>
    <button type="submit">Ajukan Peminjaman</button>
</form>

</body>
</html>