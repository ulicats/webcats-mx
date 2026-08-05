<template>
  <section
    class="relative min-h-[720px] overflow-hidden bg-cover bg-center bg-fixed"
    :style="{ backgroundImage: 'url(/casillas/hero.jpg)' }"
  >
    <!-- Overlay: contraste fuerte a la izquierda, deja ver la imagen a la derecha -->
    <div class="absolute inset-0 bg-gradient-to-r from-black/85 via-black/55 to-black/10"></div>

    <!-- Tinte global leve (para que el texto siempre se lea) -->
    <div class="absolute inset-0 bg-black/5"></div>

    <!-- Boost a la imagen (levanta textura/luz sin editarla) -->
    <div class="absolute inset-0 bg-white/5 mix-blend-overlay"></div>

    <!-- Viñeta premium -->
    <div class="absolute inset-0 [box-shadow:inset_0_0_140px_rgba(0,0,0,0.55)]"></div>

    <!-- Halos sutiles -->
    <div class="pointer-events-none absolute inset-0">
      <div class="absolute -top-24 -left-24 h-72 w-72 rounded-full bg-blue-500/20 blur-3xl"></div>
      <div class="absolute -bottom-24 -right-24 h-72 w-72 rounded-full bg-indigo-500/20 blur-3xl"></div>
      <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top,rgba(255,255,255,0.08),transparent_55%)]"></div>
    </div>

    <!-- Contenido -->
    <div class="relative z-10 mx-auto max-w-6xl px-4 py-20">
      <div class="grid items-center gap-12 lg:grid-cols-2">
        <!-- Copy -->
        <div>
          <div class="inline-flex items-center gap-2 rounded-full border border-white/15 bg-white/10 px-3 py-1 text-xs font-semibold text-white/90 backdrop-blur">
            Defensa penal y asesoría integral
          </div>

          <h1 class="font-playfair mt-5 text-4xl sm:text-5xl font-extrabold tracking-tight text-white">
            Casillas <span class="text-gold-500">Abogados</span><br />
            <span class="text-gold-200/90">Penalistas</span>
          </h1>

          <p class="mt-5 text-lg leading-relaxed text-white/80">
            Somos una firma de abogados con presencia en el estado de Nayarit, dedicada
            al litigio y asesoría en materia penal, con especialidad en el Sistema de Justicia Penal Oral,
            así como en la materia civil, familiar, agrario, mercantil y juicio de amparo.
          </p>

          <div class="mt-8 flex flex-wrap items-center gap-3">
            <a
              href="#contacto"
              class="rounded-xl bg-blue-600 px-5 py-3 text-sm font-bold text-white shadow-sm hover:bg-blue-500 transition"
            >
              Agendar consulta
            </a>
            <a
              href="#servicios"
              class="rounded-xl border border-white/20 bg-white/0 px-5 py-3 text-sm font-bold text-white/95 hover:bg-white/10 transition"
            >
              Ver servicios
            </a>
          </div>

          <div class="mt-8 grid grid-cols-1 gap-3 sm:grid-cols-3">
            <div class="rounded-xl border border-white/10 bg-white/[0.06] p-4 text-white backdrop-blur">
              <div class="text-sm font-extrabold">Desde 2012</div>
              <div class="mt-1 text-xs text-white/70">Experiencia comprobada</div>
            </div>
            <div class="rounded-xl border border-white/10 bg-white/[0.06] p-4 text-white backdrop-blur">
              <div class="text-sm font-extrabold">Nayarit</div>
              <div class="mt-1 text-xs text-white/70">Atención local y foránea</div>
            </div>
            <div class="rounded-xl border border-white/10 bg-white/[0.06] p-4 text-white backdrop-blur">
              <div class="text-sm font-extrabold">Profesionalismo</div>
              <div class="mt-1 text-xs text-white/70">Servicio claro y humano</div>
            </div>
          </div>
        </div>

        <!-- Bloque visual -->
        <div class="relative">
          <div class="absolute -inset-4 rounded-[28px] bg-gradient-to-br from-white/10 via-white/5 to-transparent blur-xl"></div>

          <div class="relative overflow-hidden rounded-[28px] border border-white/10 bg-white/[0.08] backdrop-blur-xl shadow-[0_20px_60px_rgba(0,0,0,0.25)]">
            <div class="p-6 sm:p-8">
              <div class="text-xs font-bold uppercase tracking-widest text-white/70">
                Áreas de práctica
              </div>
              <div class="mt-1 text-sm text-white/60">
                Enfoque estratégico y acompañamiento profesional.
              </div>

              <div class="mt-5 space-y-3">
                <div class="rounded-xl border border-white/10 bg-white/[0.04] p-5">
                  <div class="flex items-start gap-3">
                    <span class="mt-2 h-2 w-2 rounded-full bg-[#C9A24D]"></span>
                    <div>
                      <div class="text-base font-extrabold text-white">Materia Penal</div>
                      <div class="text-sm text-white/70">Defensa, víctimas, juicio oral y amparo penal.</div>
                    </div>
                  </div>
                </div>

                <div class="rounded-xl border border-white/10 bg-white/[0.04] p-5">
                  <div class="flex items-start gap-3">
                    <span class="mt-2 h-2 w-2 rounded-full bg-[#C9A24D]"></span>
                    <div>
                      <div class="text-base font-extrabold text-white">Familiar y Civil</div>
                      <div class="text-sm text-white/70">Divorcios, pensión, sucesiones, contratos y litigio.</div>
                    </div>
                  </div>
                </div>

                <div class="rounded-xl border border-white/10 bg-white/[0.04] p-5">
                  <div class="flex items-start gap-3">
                    <span class="mt-2 h-2 w-2 rounded-full bg-[#C9A24D]"></span>
                    <div>
                      <div class="text-base font-extrabold text-white">Agrario y Mercantil</div>
                      <div class="text-sm text-white/70">Controversias y seguridad jurídica comercial.</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="border-t border-white/10 bg-white/[0.04] px-6 py-4 text-xs text-white/70">
              Atención profesional • Información clara • Seguimiento puntual
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
