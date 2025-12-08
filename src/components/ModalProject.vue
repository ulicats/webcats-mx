<template>
  <div class="modal-overlay" @click.self="closeModal">
    <div class="modal-card">

      <!-- Botón anterior -->
      <button
        class="nav-btn nav-prev"
        type="button"
        @click.stop="prevProject"
      >
        ‹
      </button>

      <!-- Botón siguiente -->
      <button
        class="nav-btn nav-next"
        type="button"
        @click.stop="nextProject"
      >
        ›
      </button>

      <!-- Contenido scrollable dentro de la tarjeta -->
      <div class="modal-scroll">
        <img
          :src="project.image"
          :alt="project.title"
          class="modal-image"
        />

        <h2 class="modal-title">
          {{ project.title }}
        </h2>

        <p class="modal-category">
          {{ project.category }}
        </p>

        <p class="modal-description">
          {{ project.description }}
        </p>

        <ul v-if="project.features && project.features.length" class="features-list">
          <li v-for="(item, i) in project.features" :key="i">
            {{ item }}
          </li>
        </ul>

        <div class="modal-actions">
          <a
            v-if="project.url"
            :href="project.url"
            target="_blank"
            rel="noopener"
            class="btn primary"
          >
            Ver Proyecto
          </a>

          <button
            type="button"
            class="btn secondary"
            @click="closeModal"
          >
            Cerrar
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { onMounted, onBeforeUnmount } from "vue";

const props = defineProps({
  project: {
    type: Object,
    required: true,
  },
  index: {
    type: Number,
    required: true,
  },
  items: {
    type: Array,
    required: true,
  },
});

const emit = defineEmits(["close", "next", "prev"]);

const closeModal = () => emit("close");
const nextProject = () => emit("next");
const prevProject = () => emit("prev");

// Bloquear scroll del body mientras el modal está abierto
let previousOverflow = "";

onMounted(() => {
  previousOverflow = document.body.style.overflow || "";
  document.body.style.overflow = "hidden";
});

onBeforeUnmount(() => {
  document.body.style.overflow = previousOverflow;
});
</script>

<style scoped>
/* Fondo oscuro */
.modal-overlay {
  position: fixed;
  inset: 0;
  background: rgba(15, 23, 42, 0.6);
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 16px;
  z-index: 999;
}

/* Tarjeta principal del modal */
.modal-card {
  position: relative;
  background: #ffffff;
  border-radius: 22px;
  box-shadow: 0 24px 80px rgba(15, 23, 42, 0.35);
  width: 100%;
  max-width: 960px;
  max-height: 90vh;      /* 👈 no se sale de la pantalla */
  overflow: hidden;      /* el scroll está dentro */
  display: flex;
}

/* Contenido interno con scroll propio */
.modal-scroll {
  width: 100%;
  padding: 22px 24px 24px;
  overflow-y: auto;
}

/* Imagen */
.modal-image {
  width: 100%;
  max-height: 260px;
  border-radius: 18px;
  object-fit: cover;
  margin-bottom: 18px;
}

/* Texto */
.modal-title {
  font-size: 1.6rem;
  font-weight: 800;
  margin-bottom: 6px;
  color: #111827;
}

.modal-category {
  font-size: 0.95rem;
  font-weight: 600;
  color: #6b7280;
  margin-bottom: 12px;
  text-transform: uppercase;
  letter-spacing: 0.04em;
}

.modal-description {
  font-size: 0.98rem;
  line-height: 1.55rem;
  color: #374151;
  margin-bottom: 14px;
}

.features-list {
  margin: 10px 0 18px;
  padding-left: 18px;
  font-size: 0.95rem;
  color: #374151;
}

.features-list li {
  margin-bottom: 4px;
}

/* Botones */
.modal-actions {
  display: flex;
  flex-wrap: wrap;
  gap: 12px;
  margin-top: 10px;
}

.btn {
  border: none;
  border-radius: 999px;
  padding: 10px 20px;
  font-size: 0.96rem;
  font-weight: 600;
  cursor: pointer;
  transition: transform 0.15s ease, box-shadow 0.15s ease, background 0.15s ease;
}

.btn.primary {
  background: #1d4ed8;
  color: #ffffff;
  box-shadow: 0 12px 30px rgba(37, 99, 235, 0.4);
}

.btn.primary:hover {
  transform: translateY(-1px);
  box-shadow: 0 18px 40px rgba(37, 99, 235, 0.55);
}

.btn.secondary {
  background: #e5e7eb;
  color: #111827;
}

.btn.secondary:hover {
  background: #d1d5db;
}

/* Botones de navegación izquierda / derecha */
.nav-btn {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  width: 40px;
  height: 40px;
  border-radius: 999px;
  border: none;
  background: #0f172a;
  color: #ffffff;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  box-shadow: 0 10px 30px rgba(15, 23, 42, 0.45);
  font-size: 1.4rem;
  z-index: 2;
}

.nav-prev {
  left: 10px;
}

.nav-next {
  right: 10px;
}

/* ========================= */
/*   RESPONSIVE              */
/* ========================= */

@media (max-width: 768px) {
  .modal-overlay {
    padding: 12px;
  }

  .modal-card {
    max-width: 100%;
    border-radius: 18px;
  }

  .modal-scroll {
    padding: 18px 16px 20px;
  }

  .modal-image {
    max-height: 210px;
  }

  .modal-title {
    font-size: 1.4rem;
  }

  .modal-description {
    font-size: 0.95rem;
  }

  .modal-actions {
    flex-direction: column;
  }

  .btn {
    width: 100%;
    justify-content: center;
  }

  .nav-btn {
    width: 34px;
    height: 34px;
    font-size: 1.2rem;
  }
}
</style>
