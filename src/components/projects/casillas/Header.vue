<template>
  <header class="fixed top-0 left-0 w-full z-50 bg-black/80 backdrop-blur border-b border-[#C9A24D]/20">
    <div class="max-w-7xl mx-auto px-6 h-16 flex items-center justify-between">

      <!-- Logo -->
      <div class="flex items-center gap-3">
        <img src="/casillas/logo.png" alt="Casillas Abogados" class="h-9" />
        <span class="text-[#C9A24D] font-semibold tracking-wide hidden sm:block">
          Casillas & Asociados
        </span>
      </div>

      <!-- Menu -->
      <nav class="hidden md:flex gap-8 text-sm text-gray-300">
        <a href="#inicio" class="hover:text-[#C9A24D] transition">Inicio</a>
        <a href="#servicios" class="hover:text-[#C9A24D] transition">Servicios</a>
        <a href="#contacto" class="hover:text-[#C9A24D] transition">Contacto</a>
      </nav>

      <!-- CTA -->
      <a
        href="https://wa.me/52XXXXXXXXXX"
        target="_blank"
        class="px-4 py-2 rounded-md text-sm font-semibold
               bg-[#C9A24D] text-black hover:bg-[#9E7C2F] transition"
      >
        Consulta inmediata
      </a>

    </div>
  </header>
</template>
