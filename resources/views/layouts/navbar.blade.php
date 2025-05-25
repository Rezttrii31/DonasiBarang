<nav class="bg-green-600 text-white sticky top-0 z-50 shadow-lg">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center py-4">
      <!-- Logo + Text -->
      <a href="/" class="flex items-center space-x-3">
        <img src="https://th.bing.com/th/id/OIP.iYfwlFKHEOt-_lhfV-w6ugHaHa?w=192&h=192&c=7&r=0&o=5&cb=iwc2&dpr=1.5&pid=1.7" alt="Logo DonasiKu" class="w-10 h-10 rounded-full shadow-md" />
        <span class="text-2xl font-bold tracking-wide">DonasiKu</span>
      </a>

      <!-- Menu Desktop -->
      <ul class="hidden lg:flex space-x-6 items-center font-medium ml-auto">
        <li><a href="/" class="hover:text-yellow-300 transition">Beranda</a></li>
        <li><a href="/layanan" class="hover:text-yellow-300 transition">Layanan</a></li>
        <li><a href="/about" class="hover:text-yellow-300 transition">Tentang Kami</a></li>
        <li><a href="/kontak" class="hover:text-yellow-300 transition">Hubungi Kami</a></li>
        <li><a href="/galeri" class="hover:text-yellow-300 transition">Galeri</a></li>
        <li>
        </li>
      </ul>

      <!-- Hamburger -->
      <button id="menu-toggle" class="lg:hidden p-2 ml-2 rounded-md focus:outline-none" aria-label="Toggle menu">
        <svg id="icon-burger" class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2">
          <path d="M4 6h16M4 12h16M4 18h16" />
        </svg>
        <svg id="icon-close" class="w-7 h-7 hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2">
          <path d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>
  </div>

  <!-- Menu Mobile -->
  <div id="menu-mobile" class="lg:hidden bg-green-500 px-4 pb-4 hidden rounded-b-xl">
    <ul class="flex flex-col space-y-3 font-medium">
      <li><a href="/" class="block py-2 px-4 rounded hover:bg-green-600">Beranda</a></li>
      <li><a href="/about" class="block py-2 px-4 rounded hover:bg-green-600">About</a></li>
      <li><a href="/layanan" class="block py-2 px-4 rounded hover:bg-green-600">Layanan</a></li>
      <li><a href="/kontak" class="block py-2 px-4 rounded hover:bg-green-600">Hubungi Kami</a></li>
      <li><a href="/galeri" class="block py-2 px-4 rounded hover:bg-green-600">Galeri</a></li>
      <li>
      </li>
    </ul>
  </div>
</nav>

<!-- Scripts -->
<script>
  lucide.createIcons();
  const menuToggle = document.getElementById('menu-toggle');
  const menuMobile = document.getElementById('menu-mobile');
  const iconBurger = document.getElementById('icon-burger');
  const iconClose = document.getElementById('icon-close');

  menuToggle.addEventListener('click', () => {
    menuMobile.classList.toggle('show');
    menuMobile.classList.toggle('hidden');
    iconBurger.classList.toggle('hidden');
    iconClose.classList.toggle('hidden');
  });
</script>