<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>list item</title>
</head>
<body>
    
    <h1>Daftar Barang</h1>
<table>
    <thead>
        <tr>
            <th>Nama Barang</th>
            <th>category</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        {{-- @foreach($items as $item)
            <tr>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->stok }}</td>
                <td>{{ $item->harga }}</td>
                <td>{{ $item->harga }}</td> --}}
                <td>
                    {{-- <a href="{{ route('peminjaman.create', $item->id) }}">Ajukan Peminjaman</a> --}}
                </td>
            </tr>
        {{-- @endforeach --}}
    </tbody>
</table>

</body>
</html>
