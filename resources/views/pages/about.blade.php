@extends('layouts.master')
@section('content')
<div class="bg-green-100 py-20 min-h-screen flex flex-col justify-center">
  <div class="container mx-auto px-6 max-w-5xl">
    <h1 class="text-4xl font-extrabold text-green-700 mb-10 text-center">Tentang Kami</h1>

    <div class="grid md:grid-cols-2 gap-8">
      {{-- Misi Section --}}
      <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-green-500">
        <h2 class="text-2xl font-semibold text-green-600 mb-3">Siapa Kami</h2>
        <p class="text-gray-700 text-lg leading-relaxed">
          DonasiKu adalah platform yang menghubungkan para donatur dengan penerima manfaat melalui donasi barang bekas layak pakai. Kami percaya bahwa setiap barang yang sudah tidak terpakai masih memiliki nilai dan dapat memberikan manfaat bagi orang yang membutuhkan.
        </p>
      </div>

      {{-- Tujuan Section --}}
      <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-green-500">
        <h2 class="text-2xl font-semibold text-green-600 mb-3">Misi Kami</h2>
        <p class="text-gray-700 text-lg leading-relaxed">
          Misi kami adalah mendorong gaya hidup berkelanjutan dengan mengurangi limbah serta membantu masyarakat kurang mampu agar mendapatkan barang-barang yang bermanfaat. Kami berkomitmen untuk memudahkan proses donasi dengan sistem yang cepat, aman, dan transparan.
        </p>
      </div>

      {{-- Tim Kami --}}
      <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-green-500 md:col-span-2">
        <h2 class="text-2xl font-semibold text-green-600 mb-3">Tim Kami</h2>
        <p class="text-gray-700 text-lg leading-relaxed">
          Tim DonasiKu terdiri dari individu-individu yang peduli terhadap lingkungan dan sosial. Kami bekerja sama untuk mewujudkan dunia yang lebih baik melalui tindakan kecil seperti berdonasi barang bekas yang masih layak pakai.
        </p>
      </div>

      {{-- Kontak --}}
      <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-green-500 md:col-span-2">
        <h2 class="text-2xl font-semibold text-green-600 mb-3">Hubungi Kami</h2>
        <p class="text-gray-700 text-lg leading-relaxed mb-2">
          Jika Anda ingin tahu lebih banyak atau memiliki pertanyaan, silakan hubungi kami melalui:
        </p>
        <ul class="list-disc list-inside text-gray-700 text-lg space-y-1">
          <li>Email: <a href="mailto:info@donasiku.com" class="text-green-600 hover:underline">info@donasiku.com</a></li>
          <li>Telepon: <a href="tel:+62123456789" class="text-green-600 hover:underline">+62 123 4567 89</a></li>
          <li>Alamat: Jl. Ayani No. 1, Pontianak, Indonesia</li>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection
