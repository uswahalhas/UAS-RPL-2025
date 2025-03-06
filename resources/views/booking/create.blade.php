<!-- resources/views/booking/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Booking</title>
    <!-- Bisa menambahkan CSS atau framework UI seperti Bootstrap jika diperlukan -->
</head>
<body>

    <h1>Create New Booking</h1>

    <!-- Form untuk membuat booking baru -->
    <form action="{{ route('booking.store') }}" method="POST">
        @csrf <!-- Token CSRF untuk keamanan -->
        
        <!-- Input untuk nomor telepon -->
        <label for="phone_number">Phone Number:</label>
        <input type="text" id="phone_number" name="phone_number" required>
        <br><br>

        <!-- Input untuk email -->
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br><br>

        <!-- Input untuk equipment -->
        <label for="equipment">Equipment:</label>
        <input type="text" id="equipment" name="equipment" required>
        <br><br>

        <!-- Input untuk tanggal booking -->
        <label for="booking_date">Booking Date:</label>
        <input type="date" id="booking_date" name="booking_date" required>
        <br><br>

        <!-- Tombol untuk submit form -->
        <button type="submit">Create Booking</button>
    </form>

</body>
</html>
