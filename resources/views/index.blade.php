<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Stock Management</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <h1><span style="color:#5d9cff; font-weight:bold;">MAN</span><span style="font-weight:bold;">IS <span style="color:#5d9cff; font-weight:300;"> ------- <span style="color:#5d9cff; font-weight:300;">Management <span style="color:#ffffff; font-weight:300;">for Inventory and Sales tes lagi</span></span></h1>

  <a href="{{ route('transactions.index') }}" class="riwayat-btn">Riwayat</a>

  <form action="{{ route('stocks.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nama Produk" required>
    <input type="number" name="quantity" placeholder="Jumlah Stok" required>
    <button type="submit">Tambah Produk</button>
  </form>

  <table>
    <tr>
      <th>ID</th>
      <th>Nama Produk</th>
      <th>Jumlah</th>
      <th>Aksi</th>
    </tr>
    @foreach($products as $product)
    <tr>
      <td>{{ $product->id }}</td>
      <td>{{ $product->name }}</td>
      <td>{{ $product->quantity }}</td>
      <td>
        <form action="{{ route('stocks.adjust', $product->id) }}" method="POST" style="display:inline;">
          @csrf
          <input type="number" name="quantity" value="1" required>
          <select name="action" required>
            <option value="add">Tambah Stok</option>
            <option value="sold">Terjual</option>
            <option value="return">Retur Ke Distributor/Produksi</option>
          </select>
          <button type="submit">Proses</button>
        </form>
        <form action="{{ route('stocks.destroy', $product->id) }}" method="POST" style="display:inline;">
          @csrf
          @method('DELETE')
          <button type="submit" onclick="return confirm('Yakin ingin hapus?')">Hapus</button>
        </form>
      </td>
    </tr>
    @endforeach
  </table>
</body>
</html>
