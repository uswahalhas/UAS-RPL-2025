<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking List</title>
</head>
<body>
    <h1>Booking List</h1>

    <!-- Tombol Create untuk menuju halaman booking.create -->
    <a href="{{ route('booking.create') }}" style="padding: 10px; background-color: blue; color: white; text-decoration: none;">Create New Booking</a>

    <table border="1" style="width: 100%; margin-top: 20px;">
        <thead>
            <tr>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Equipment</th>
                <th>Booking Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bookings as $booking)
            <tr>
                <td>{{ $booking->phone_number }}</td>
                <td>{{ $booking->email }}</td>
                <td>{{ $booking->equipment }}</td>
                <td>{{ $booking->booking_date }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
