<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>DonasiKu</title>

  <!-- Tailwind CSS -->
  <script src="https://unpkg.com/lucide@latest"></script>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
  <body class="bg-white text-gray-900">

    {{-- Navbar --}}
    @include('layouts.navbar')

    {{-- Konten Utama --}}
    <main class="container mx-auto px-4 mt-6">
      @yield('content')
    </main>

    {{-- Footer --}}
    @include('layouts.footer')

  </body>
</html>