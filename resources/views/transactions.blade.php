<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Riwayat Transaksi</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <h1><span style="color:#5d9cff; font-weight:bold;">Riwayat Transaksi</span></h1>

  <form method="GET">
    <label>Filter:</label>
    <select name="category" onchange="this.form.submit()">
      <option value="">Semua</option>
      <option value="terjual" {{ request('category') == 'terjual' ? 'selected' : '' }}>Terjual</option>
      <option value="retur" {{ request('category') == 'retur' ? 'selected' : '' }}>Retur</option>
      <option value="penambahan" {{ request('category') == 'penambahan' ? 'selected' : '' }}>Penambahan</option>
    </select>
  </form>

  <table>
    <tr>
      <th>ID</th>
      <th>Produk</th>
      <th>Jenis</th>
      <th>Jumlah</th>
      <th>Waktu</th>
    </tr>
    @foreach($transactions as $tx)
    <tr>
      <td>{{ $tx->product_id }}</td>
      <td>{{ $tx->product->name ?? '[dihapus]' }}</td>
      <td>{{ ucfirst($tx->category) }}</td>
      <td>{{ $tx->quantity }}</td>
      <td>{{ $tx->created_at }}</td>
    </tr>
    @endforeach
  </table>

  <br>
  <a href="{{ route('home') }}" class="riwayat-btn">← Kembali ke Stok</a>
</body>
</html>
