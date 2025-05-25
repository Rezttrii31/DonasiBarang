@extends('layouts.master')

@section('content')
<div class="bg-green-100 min-h-screen flex items-center justify-center py-20 px-4">
  <div class="w-full max-w-md bg-white rounded-3xl shadow-xl p-8 md:p-10">
    <h2 class="text-3xl md:text-4xl font-extrabold text-green-700 text-center mb-8">Masuk</h2>

    <form method="POST" action="{{ route('login') }}" class="space-y-6">
      @csrf

      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
        <input type="email" name="email" required autofocus
          class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-400">
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
        <input type="password" name="password" required
          class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-400">
      </div>

      <div class="flex items-center justify-between text-sm">
        <label class="flex items-center space-x-2">
          <input type="checkbox" name="remember"
            class="rounded text-green-600 focus:ring-green-400 border-gray-300">
          <span>Ingat saya</span>
        </label>
        <a href="{{ route('password.request') }}" class="text-green-600 hover:underline">Lupa password?</a>
      </div>

      <div>
        <button type="submit"
          class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-2.5 rounded-lg transition">
          Masuk
        </button>
      </div>
    </form>

    <p class="text-center text-sm text-gray-600 mt-6">
      Belum punya akun?
      <a href="{{ route('register') }}" class="text-green-600 hover:underline font-medium">Daftar di sini</a>
    </p>
  </div>
</div>
@endsection
