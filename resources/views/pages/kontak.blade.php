@extends('layouts.master')

@section('content')
<div class="bg-green-100 py-16 min-h-screen">
  <div class="container mx-auto px-6 max-w-5xl">
    <h2 class="text-4xl font-extrabold text-green-700 mb-6 text-center">
      Hubungi Kami
    </h2>

    <div class="bg-white rounded-3xl shadow-xl p-8 md:p-12">
      <p class="text-gray-700 text-lg mb-8 text-center">
        Kami siap membantu Anda! Jangan ragu untuk menghubungi kami jika Anda memiliki pertanyaan, masukan, atau ingin berdonasi langsung.
      </p>

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
        <!-- Informasi Kontak -->
        <div>
          <h2 class="text-2xl font-semibold text-green-600 mb-6">Informasi Kontak</h2>
          <ul class="space-y-4 text-gray-700 text-base">
            <li class="flex items-start">
              <span class="text-green-600 text-xl mr-3">📧</span>
              <div>
                <span class="font-semibold">Email:</span><br>
                <a href="mailto:info@donasiku.com" class="text-green-600 hover:underline">info@donasiku.com</a>
              </div>
            </li>
            <li class="flex items-start">
              <span class="text-green-600 text-xl mr-3">📞</span>
              <div>
                <span class="font-semibold">Telepon:</span><br>
                <a href="tel:+62123456789" class="text-green-600 hover:underline">+62 123 4567 89</a>
              </div>
            </li>
            <li class="flex items-start">
              <span class="text-green-600 text-xl mr-3">📍</span>
              <div>
                <span class="font-semibold">Alamat:</span><br>
                Jl. Ayani No. 1, Pontianak, Indonesia
              </div>
            </li>
          </ul>

          <!-- Peta Lokasi -->
          <div class="mt-10">
            <h2 class="text-2xl font-semibold text-green-600 mb-4 text-center">Lokasi Kami</h2>
            <div class="w-full h-96 rounded-3xl overflow-hidden shadow-lg">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15958.0301730503!2d109.32881504999999!3d-0.029093549999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d593fbe273ad1%3A0xf83e5c7d154ffed6!2sJl.%20Ahmad%20Yani%2C%20Pontianak%2C%20Kalimantan%20Barat!5e0!3m2!1sen!2sid!4v1716738579470!5m2!1sen!2sid"
                width="100%"
                height="100%"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
              ></iframe>
            </div>
          </div>
        </div>

        <!-- Form Kontak -->
        <div>
          <h2 class="text-2xl font-semibold text-green-600 mb-6">Kirim Pesan</h2>
          @if(session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4 rounded">
              {{ session('success') }}
            </div>
          @endif

          <form action="{{ route('kontak.kirim') }}" method="POST" class="space-y-4">
            @csrf
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1">Nama</label>
              <input type="text" name="nama" class="w-full px-4 py-2 border rounded-lg" required>
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
              <input type="email" name="email" class="w-full px-4 py-2 border rounded-lg" required>
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1">Pesan</label>
              <textarea name="pesan" rows="4" class="w-full px-4 py-2 border rounded-lg" required></textarea>
            </div>
            <div>
              <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-lg">
                Kirim
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection