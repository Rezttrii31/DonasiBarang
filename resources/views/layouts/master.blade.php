<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DonasiKu</title>

    <!-- Tailwind CSS (gunakan ini hanya untuk development atau testing) -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
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