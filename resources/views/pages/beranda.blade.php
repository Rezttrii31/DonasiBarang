@extends('layouts.master')
@section('content')
    <div class="bg-green-100 py-20 min-h-screen flex flex-col justify-center">
  <div class="container mx-auto px-6 flex flex-col md:flex-row items-center">
    <div class="md:w-1/2">
      <h2 class="text-4xl font-extrabold mb-6 leading-tight text-green-900">
        Berikan Harapan Baru <br /> melalui Donasi Barang Bekas Layak Pakai
      </h2>
      <p class="mb-8 text-lg text-green-800">
        Setiap barang bekas yang Anda donasikan dapat mengubah kehidupan mereka yang membutuhkan.
        Mari bersama-sama berbagi manfaat dan kebaikan.
      </p>
      <a href="/FormDonasi" class="inline-block bg-green-600 hover:bg-green-700 text-white font-semibold py-3 px-8 rounded-lg shadow-lg transition">
        Donasi Sekarang
      </a>
    </div>
    <div class="md:w-1/2 mt-10 md:mt-0">
      <img src="https://th.bing.com/th/id/OIP.QIJ5T5N2nUSpDeFT_5hsDwHaHa?w=171&h=180&c=7&r=0&o=5&cb=iwc2&dpr=1.5&pid=1.7" alt="Donasi barang bekas" class="rounded-lg shadow-lg" />
    </div>
  </div>

  <section class="container mx-auto px-6 py-16">
  <h3 class="text-3xl font-semibold text-center mb-12 text-green-700">Kenapa Donasi Barang Bekas?</h3>
  <div class="grid md:grid-cols-3 gap-10 text-center">
    
    <!-- Membantu Sesama -->
    <div class="bg-white p-8 rounded-lg shadow hover:shadow-lg transition">
      <!-- Ikon handshake -->
      <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto mb-4 h-12 w-12 text-green-600" fill="currentColor" viewBox="0 0 640 512">
        <path d="M434.7 167.9l67.6-52.2c13.9-10.7 16.5-30.8 5.8-44.8s-30.8-16.5-44.8-5.8L352 160l-33.1-26.3c-11.6-9.2-28.4-9.2-40 0L160 208l-16-12.7c-13.9-10.7-33.9-8.1-44.6 5.8s-8.1 33.9 5.8 44.6L128 256l-35.1 27.1c-13.9 10.7-16.5 30.8-5.8 44.8s30.8 16.5 44.8 5.8l51.3-39.7 51.3 39.7c13.9 10.7 33.9 8.1 44.6-5.8s8.1-33.9-5.8-44.6L224 256l80-63.6 80 63.6-35.1 27.1c-13.9 10.7-16.5 30.8-5.8 44.8s30.8 16.5 44.8 5.8l51.3-39.7 51.3 39.7c13.9 10.7 33.9 8.1 44.6-5.8s8.1-33.9-5.8-44.6L512 256l16-12.7c13.9-10.7 16.5-30.8 5.8-44.8s-30.8-16.5-44.8-5.8l-54.3 42.1-33.1-26.3z"/>
      </svg>
      <h4 class="font-semibold mb-2 text-green-800">Membantu Sesama</h4>
      <p class="text-gray-600">Barang yang sudah tidak terpakai dapat bermanfaat bagi orang lain yang membutuhkan.</p>
    </div>

    <!-- Ramah Lingkungan -->
    <div class="bg-white p-8 rounded-lg shadow hover:shadow-lg transition">
      <!-- Ikon daun / lingkungan -->
      <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto mb-4 h-12 w-12 text-green-600" fill="currentColor" viewBox="0 0 576 512">
        <path d="M576 216c0 128-96 296-256 296S64 344 64 216C64 70 288 0 288 0s224 70 224 216zM256 360c26.5 0 48-21.5 48-48v-48c0-8.8-7.2-16-16-16s-16 7.2-16 16v48c0 8.8-7.2 16-16 16s-16-7.2-16-16v-80c0-8.8-7.2-16-16-16s-16 7.2-16 16v80c0 26.5 21.5 48 48 48z"/>
      </svg>
      <h4 class="font-semibold mb-2 text-green-800">Ramah Lingkungan</h4>
      <p class="text-gray-600">Mengurangi limbah dan mendukung gaya hidup lebih berkelanjutan.</p>
    </div>

    <!-- Mudah dan Cepat -->
    <div class="bg-white p-8 rounded-lg shadow hover:shadow-lg transition">
      <!-- Ikon petir / cepat -->
      <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto mb-4 h-12 w-12 text-green-600" fill="currentColor" viewBox="0 0 320 512">
        <path d="M296 160H180.2L217.8 18.7c4-14.9-7.6-30.1-22.9-30.1-7.9 0-15.5 3.7-20.3 10.3l-160 224C8.3 234.9 0 250.3 0 266.7 0 288 16 304 36.3 304H139.8L102.2 493.3c-4 14.9 7.6 30.1 22.9 30.1 7.9 0 15.5-3.7 20.3-10.3l160-224c9.2-12.9 12.9-30.7 12.9-45.1 0-21.3-16-37.3-36.3-37.3z"/>
      </svg>
      <h4 class="font-semibold mb-2 text-green-800">Mudah dan Cepat</h4>
      <p class="text-gray-600">Proses donasi yang simpel, langsung terkoneksi dengan penerima manfaat.</p>
    </div>

  </div>
</section>
</div>

@endsection