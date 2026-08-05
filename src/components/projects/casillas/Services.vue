<template>
  <section id="servicios" class="bg-neutral-50">
    <div class="mx-auto max-w-6xl px-4 py-16">
      <div class="max-w-2xl">
        <h2 class="text-3xl font-extrabold tracking-tight text-neutral-950 sm:text-4xl">
          Servicios
        </h2>
        <p class="mt-3 text-neutral-700 leading-relaxed">
          Conoce nuestras áreas de práctica. Te explicamos el proceso con claridad y estrategia.
        </p>
      </div>

      <div class="mt-10 grid gap-5 md:grid-cols-2">
        <article
          v-for="(s, i) in items"
          :key="i"
          class="group relative rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm hover:shadow-md transition"
        >
          <div class="flex items-start gap-4">
            <div class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-blue-50 text-blue-700 font-black">
              {{ i + 1 }}
            </div>

            <div class="min-w-0">
              <h3 class="text-lg font-extrabold text-neutral-950">
                {{ s.title }}
              </h3>
              <p class="mt-2 text-sm leading-relaxed text-neutral-700">
                {{ s.desc }}
              </p>
            </div>
          </div>

          <div class="mt-5 h-px w-full bg-neutral-100"></div>

          <a
            href="#contacto"
            class="mt-4 inline-flex items-center gap-2 text-sm font-bold text-blue-700 hover:text-blue-600"
          >
            Consultar este servicio
            <span aria-hidden="true">→</span>
          </a>
        </article>
      </div>
    </div>
  </section>
</template>

<script setup>
defineProps({
  items: { type: Array, default: () => [] }
})
</script>
