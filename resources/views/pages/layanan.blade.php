@extends('layouts.master')
@section('content')
    <div class="bg-green-100 py-6 min-h-screen flex flex-col justify-center">
    <section class="max-w-7xl mx-auto px-6 py-16">
  <h1 class="text-4xl font-extrabold text-green-700 mb-6 text-center">
    Layanan Donasi Barang Layak Pakai
  </h1>
  <p class="text-center text-gray-700 max-w-3xl mx-auto mb-12 text-lg">
    Kami memudahkan Anda untuk mendonasikan barang bekas yang masih layak pakai kepada mereka yang membutuhkan. 
    Mari bersama-sama berkontribusi dalam mengurangi sampah dan membantu sesama.
  </p>

  <div class="grid gap-10 md:grid-cols-3">
    <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition">
      <div class="mb-4">
        <svg class="w-12 h-12 text-green-500 mx-auto" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" >
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-3.86 0-7 3.14-7 7a7 7 0 0014 0c0-3.86-3.14-7-7-7zM12 8V4m0 0a4 4 0 014 4H8a4 4 0 014-4z" />
        </svg>
      </div>
      <h3 class="text-xl font-semibold mb-2 text-center">Pengumpulan Barang</h3>
      <p class="text-gray-600 text-center">
        Anda dapat mengumpulkan barang layak pakai seperti pakaian, sepatu, tas, dan peralatan rumah tangga untuk didonasikan.
      </p>
    </div>

    <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition">
      <div class="mb-4">
        <svg class="w-12 h-12 text-green-500 mx-auto" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3 7h18M3 12h18M3 17h18M6 22h12a2 2 0 002-2v-4H4v4a2 2 0 002 2z" />
        </svg>
      </div>
      <h3 class="text-xl font-semibold mb-2 text-center">Penyortiran & Pemeriksaan</h3>
      <p class="text-gray-600 text-center">
        Semua barang yang didonasikan kami sortir dan periksa kualitasnya agar layak untuk digunakan kembali oleh penerima.
      </p>
    </div>

    <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition">
      <div class="mb-4">
        <svg class="w-12 h-12 text-green-500 mx-auto" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 20v-6M16 16l-4-4-4 4m8 0v-4a4 4 0 00-8 0v4" />
        </svg>
      </div>
      <h3 class="text-xl font-semibold mb-2 text-center">Distribusi Barang</h3>
      <p class="text-gray-600 text-center">
        Barang yang telah lolos pemeriksaan akan kami distribusikan secara gratis ke panti asuhan, komunitas, dan warga yang membutuhkan.
      </p>
    </div>
  </div>

  <div class="mt-12 text-center">
    <a href="/FormDonasi" class="inline-block bg-green-600 hover:bg-green-700 text-white font-semibold py-3 px-8 rounded-lg shadow-lg transition">
      Donasi Sekarang
    </a>
  </div>
</section>

@endsection