@extends('layouts.master')
@section('content')
    <div class="bg-green-100 py-10 min-h-screen">
    <section class="max-w-3xl mx-auto px-6 py-16">
  <h2 class="text-3xl font-bold text-green-700 text-center mb-8">Formulir Donasi Barang</h2>
  @if(session('success'))
  <div class="bg-white border-l-4 border-green-600 text-green-800 p-4 mb-6 rounded">
    {{ session('success') }}
  </div>
  @endif

{{-- Tambahkan error message jika validasi gagal --}}
  @if($errors->any())
    <div class="bg-red-100 border-l-4 border-red-600 text-red-800 p-4 mb-6 rounded">
      <ul class="list-disc list-inside">
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form action="{{ route('donasi.simpan') }}" method="POST" class="bg-white p-8 rounded-xl shadow-md space-y-6">
    @csrf
    <!-- Nama Donatur -->
    <div>
      <label for="nama" class="block font-medium text-gray-700 mb-1">Nama Lengkap</label>
      <input type="text" id="nama" name="nama" required
        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-400" />
    </div>

    <!-- Email -->
    <div>
      <label for="email" class="block font-medium text-gray-700 mb-1">Email</label>
      <input type="email" id="email" name="email" required
        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-400" />
    </div>

    <!-- No. HP -->
    <div>
      <label for="telepon" class="block font-medium text-gray-700 mb-1">Nomor Telepon</label>
      <input type="tel" id="telepon" name="telepon" required
        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-400" />
    </div>

    <!-- Alamat -->
    <div>
      <label for="alamat" class="block font-medium text-gray-700 mb-1">Alamat Penjemputan</label>
      <textarea id="alamat" name="alamat" rows="3" required
        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-400"></textarea>
    </div>

    <!-- Jenis Barang -->
    <div>
      <label for="jenis_barang" class="block font-medium text-gray-700 mb-1">Jenis Barang</label>
      <select id="jenis_barang" name="jenis_barang" required
        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-400">
        <option value="" disabled selected>Pilih jenis barang</option>
        <option value="Pakaian">Pakaian</option>
        <option value="Sepatu">Sepatu</option>
        <option value="Tas">Tas</option>
        <option value="Buku">Buku</option>
        <option value="Peralatan Rumah Tangga">Peralatan Rumah Tangga</option>
        <option value="Lainnya">Lainnya</option>
      </select>
    </div>

    <!-- Deskripsi Barang -->
    <div>
      <label for="deskripsi" class="block font-medium text-gray-700 mb-1">Deskripsi Barang</label>
      <textarea id="deskripsi" name="deskripsi" rows="3"
        placeholder="Contoh: 10 potong pakaian anak umur 5-7 tahun, kondisi 80% bagus"
        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-400"></textarea>
    </div>

    <!-- Tombol Submit -->
    <div class="text-center">
      <button type="submit"
        class="bg-green-600 text-white font-semibold px-6 py-3 rounded-lg hover:bg-green-700 transition shadow-md">
        Kirim Donasi
      </button>
    </div>
  </form>
</section>

@endsection