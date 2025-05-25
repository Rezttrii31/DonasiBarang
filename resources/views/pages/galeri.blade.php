@extends('layouts.master')

@section('content')
<div class="bg-green-100 py-16 min-h-screen">
  <div class="container mx-auto px-6">
    <h1 class="text-4xl font-extrabold text-green-700 text-center mb-10">Galeri Kegiatan</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
      <!-- Foto 1 -->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden">
        <img src="{{ asset('image/foto 1.jpg') }}" alt="Dokumentasi Donasi 1" class="w-full h-64 object-cover">
        <div class="p-4">
          <p class="text-gray-700 text-base text-center">Penyerahan pakaian layak pakai kepada warga di Kampung Sejahtera.</p>
        </div>
      </div>

      <!-- Foto 2 -->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden">
        <img src="{{ asset('image/foto 2.jpg') }}" alt="Dokumentasi Donasi 2" class="w-full h-64 object-cover">
        <div class="p-4">
          <p class="text-gray-700 text-base text-center">Kegiatan donasi alat tulis di sekolah dasar daerah terpencil.</p>
        </div>
      </div>

      <!-- Foto 3 -->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden">
        <img src="{{ asset('image/foto 3.jpg') }}" alt="Dokumentasi Donasi 3" class="w-full h-64 object-cover">
        <div class="p-4">
          <p class="text-gray-700 text-base text-center">Pembagian sembako untuk warga terdampak banjir di Jakarta Utara.</p>
        </div>
      </div>

      <!-- Tambahkan lebih banyak dokumentasi di sini sesuai kebutuhan -->
    </div>
  </div>
</div>
@endsection
