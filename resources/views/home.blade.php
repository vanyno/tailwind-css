@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="text-center mb-8">
        <h1 class="text-3xl font-bold">Data Pinjaman Hutang</h1>
        <p class="mt-4">Catatan sederhana untuk memantau pinjaman dan status pembayaran.</p>
    </div>

    <!-- Table -->
    <div class="overflow-x-auto bg-white shadow-md rounded-lg">
        <table class="min-w-full border">
            <thead>
                <tr class="bg-gray-100">
                    <th class="py-2 px-4 border text-left font-semibold text-gray-700">Nama Peminjam</th>
                    <th class="py-2 px-4 border text-left font-semibold text-gray-700">Tanggal Pinjaman</th>
                    <th class="py-2 px-4 border text-left font-semibold text-gray-700">Jumlah Pinjaman</th>
                    <th class="py-2 px-4 border text-left font-semibold text-gray-700">Status Pembayaran</th>
                    <th class="py-2 px-4 border text-left font-semibold text-gray-700 ">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Contoh data. Ubah sesuai dengan data Anda atau gunakan loop untuk menampilkan data dari database -->
                <tr>
                    <td class="py-2 px-4 border">John Doe</td>
                    <td class="py-2 px-4 border">2024-11-01</td>
                    <td class="py-2 px-4 border">Rp 5,000,000</td>
                    <td class="py-2 px-4 border text-green-600">Lunas</td>
                    <td class="py-2 px-4 border">
                        <a href="#" class="text-blue-600 underline">Detail</a>
                    </td>
                </tr>
                <tr>
                    <td class="py-2 px-4 border">Jane Smith</td>
                    <td class="py-2 px-4 border">2024-10-25</td>
                    <td class="py-2 px-4 border">Rp 3,000,000</td>
                    <td class="py-2 px-4 border text-red-600">Belum Lunas</td>
                    <td class="py-2 px-4 border">
                        <a href="#" class="text-blue-600 underline">Detail</a>
                    </td>
                </tr>
                <!-- Tambahkan lebih banyak baris atau loop data dari database di sini -->
            </tbody>
        </table>
    </div>
</div>
@endsection
