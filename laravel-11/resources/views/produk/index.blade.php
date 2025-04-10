<!DOCTYPE html>
<html>
<head>
    <title>Data Produk</title>
</head>
<body>
    <h1>Daftar Produk</h1>
    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Stok</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produk as $item)
            <tr>
                <td>{{ $item->nama_barang }}</td>
                <td>{{ $item->kategori }}</td>
                <td>{{ $item->stok }}</td>
                <td>Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
