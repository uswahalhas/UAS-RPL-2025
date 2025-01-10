<!-- resources/views/booking.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Booking</title>
    <style>
        .btn-create {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .btn-create:hover {
            background-color: #45a049;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Selamat datang di halaman booking</h1>

    <!-- Tombol Create -->
    <a href="{{ route('booking.create') }}" class="btn-create">Create</a>

    <!-- Tabel Data Booking -->
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nomor Telepon</th>
                <th>Email</th>
                <th>Peralatan</th>
                <th>Tanggal Booking</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($booking as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->phone_number }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->equipment }}</td>
                    <td>{{ $item->booking_date }}</td>
                    <td>
                        <!-- Tombol Edit -->
                        <a href="{{ route('booking.edit', $item->id) }}" style="padding: 5px 10px; background-color: #007BFF; color: white; text-decoration: none; border-radius: 5px;">Edit</a>
                        <!-- Tombol Hapus -->
                        <form action="{{ route('booking.destroy', $item->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Yakin ingin menghapus?')" style="padding: 5px 10px; background-color: #FF0000; color: white; border: none; border-radius: 5px;">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
