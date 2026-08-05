<template>
  <section id="contacto" class="bg-neutral-950 text-white">
    <div class="mx-auto max-w-6xl px-4 py-16">
      <div class="grid gap-8 lg:grid-cols-2 lg:items-start">
        <div>
          <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">
            Contáctanos
          </h2>
          <p class="mt-3 text-white/70 leading-relaxed">
            Cuéntanos tu caso. Respuesta rápida y trato profesional.
          </p>

          <div class="mt-8 space-y-3">
            <div class="rounded-2xl border border-white/10 bg-white/[0.04] p-5">
              <div class="text-xs font-bold uppercase tracking-widest text-white/60">Teléfono</div>
              <div class="mt-2 text-lg font-extrabold">
                <a class="hover:underline" :href="`tel:${phones[0]}`">{{ phones[0] }}</a>
              </div>
            </div>

            <div class="rounded-2xl border border-white/10 bg-white/[0.04] p-5">
              <div class="text-xs font-bold uppercase tracking-widest text-white/60">WhatsApp</div>
              <div class="mt-2">
                <a
                  class="inline-flex items-center gap-2 rounded-xl bg-green-500 px-4 py-3 text-sm font-extrabold text-white hover:bg-green-400 transition"
                  :href="`https://wa.me/${whatsapp}`"
                  target="_blank"
                  rel="noopener"
                >
                  Enviar mensaje
                  <span aria-hidden="true">→</span>
                </a>
              </div>
            </div>
          </div>
        </div>

        <form class="rounded-2xl border border-white/10 bg-white/[0.04] p-6" :action="formspreeUrl" method="POST">
          <div class="grid gap-4 sm:grid-cols-2">
            <div class="sm:col-span-1">
              <label class="text-xs font-bold uppercase tracking-widest text-white/60">Nombre</label>
              <input name="nombre" required class="mt-2 w-full rounded-xl border border-white/10 bg-neutral-900/60 px-4 py-3 text-sm outline-none" />
            </div>

            <div class="sm:col-span-1">
              <label class="text-xs font-bold uppercase tracking-widest text-white/60">Correo</label>
              <input name="correo" type="email" required class="mt-2 w-full rounded-xl border border-white/10 bg-neutral-900/60 px-4 py-3 text-sm outline-none" />
            </div>

            <div class="sm:col-span-1">
              <label class="text-xs font-bold uppercase tracking-widest text-white/60">Teléfono</label>
              <input name="telefono" required class="mt-2 w-full rounded-xl border border-white/10 bg-neutral-900/60 px-4 py-3 text-sm outline-none" />
            </div>

            <div class="sm:col-span-1">
              <label class="text-xs font-bold uppercase tracking-widest text-white/60">Asunto</label>
              <input name="asunto" class="mt-2 w-full rounded-xl border border-white/10 bg-neutral-900/60 px-4 py-3 text-sm outline-none" />
            </div>

            <div class="sm:col-span-2">
              <label class="text-xs font-bold uppercase tracking-widest text-white/60">Mensaje</label>
              <textarea name="mensaje" rows="6" required class="mt-2 w-full rounded-xl border border-white/10 bg-neutral-900/60 px-4 py-3 text-sm outline-none"></textarea>
            </div>

            <input type="text" name="_gotcha" class="hidden" />

            <div class="sm:col-span-2 flex justify-end">
              <button class="rounded-xl bg-blue-600 px-5 py-3 text-sm font-extrabold hover:bg-blue-500 transition" type="submit">
                Enviar
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
</template>

<script setup>
defineProps({
  phones: { type: Array, default: () => ["(311) 123-4567"] },
  whatsapp: { type: String, default: "523111234567" },
  formspreeUrl: { type: String, default: "https://formspree.io/f/XXXXXXX" }
})
</script>
