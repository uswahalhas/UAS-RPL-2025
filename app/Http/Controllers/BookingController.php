<?php

/// app/Http/Controllers/BookingController.php

namespace App\Http\Controllers;
use Illuminate\Http\Request; 

use App\Models\Booking;

class BookingController extends Controller
{
    // Menampilkan form untuk membuat booking baru
    public function create()
    {
        return view('booking.create');
    }

    // Menyimpan data booking ke database
    public function store(Request $request)
    {
        // Validasi data dan simpan booking
        $data = $request->validate([
            'phone_number' => 'required|regex:/^(\+?\d{1,3}[- ]?)?\d{10}$/',
            'email' => 'required|email',
            'equipment' => 'required|string',
            'booking_date' => 'required|date'
        ]);

        // Menambahkan user_id jika menggunakan autentikasi
        $data['user_id'] = auth()->id();
        
        // Menyimpan data booking
        Booking::create($data);

        // Redirect ke halaman booking list setelah penyimpanan
        return redirect(route('booking.index'));
    }

    public function __construct()
    {
    $this->middleware('auth'); // Pastikan hanya pengguna yang login yang bisa membuat booking
    }
}
