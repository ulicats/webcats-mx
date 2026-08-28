<template>
  <section class="law-trust">
    <div class="law-container">

      <div class="law-trust__frame law-contract-frame">

        <article
          v-for="(item, index) in indicators"
          :key="item.label"
          class="law-trust__item"
        >

          <div class="law-trust__icon">
            <span>{{ item.icon }}</span>
          </div>

          <div class="law-trust__content">

            <strong>
              {{ item.value }}
            </strong>

            <span>
              {{ item.label }}
            </span>

          </div>

          <div
            v-if="index < indicators.length - 1"
            class="law-trust__separator"
          ></div>

        </article>

      </div>

    </div>
  </section>
</template>

<script setup>
const indicators = [
  {
    icon: "▥",
    value: "12+",
    label: "Años de experiencia",
  },
  {
    icon: "§",
    value: "850+",
    label: "Asuntos atendidos",
  },
  {
    icon: "◇",
    value: "100%",
    label: "Confidencialidad",
  },
  {
    icon: "○",
    value: "Atención",
    label: "Personalizada",
  },
];
</script>

<style scoped>
.law-trust {
  position: relative;
  z-index: 10;

  padding: 18px 0 30px;

  background: var(--law-paper);
}

.law-trust__frame {
  min-height: 145px;

  display: grid;

  grid-template-columns: repeat(4, 1fr);

  padding: 18px;

  background:
    linear-gradient(
      rgba(255, 253, 248, 0.97),
      rgba(255, 253, 248, 0.97)
    ),
    repeating-linear-gradient(
      0deg,
      rgba(23, 35, 53, 0.025) 0,
      rgba(23, 35, 53, 0.025) 1px,
      transparent 1px,
      transparent 4px
    );
}

/* =========================================================
   ITEM
========================================================= */

.law-trust__item {
  position: relative;

  min-height: 105px;

  display: flex;
  align-items: center;
  justify-content: center;

  gap: 17px;

  padding: 20px 25px;
}

/* =========================================================
   ICONO
========================================================= */

.law-trust__icon {
  width: 42px;
  height: 42px;

  flex-shrink: 0;

  display: flex;
  align-items: center;
  justify-content: center;

  color: var(--law-primary);

  font-family:
    "Cormorant Garamond",
    Georgia,
    serif;

  font-size: 28px;
}

.law-trust__icon span {
  opacity: 0.8;
}

/* =========================================================
   TEXTO
========================================================= */

.law-trust__content {
  display: flex;
  flex-direction: column;
}

.law-trust__content strong {
  color: var(--law-primary);

  font-family:
    "Cormorant Garamond",
    Georgia,
    serif;

  font-size: 31px;
  font-weight: 600;

  line-height: 1;
}

.law-trust__content span {
  margin-top: 7px;

  color: var(--law-text-soft);

  font-family: "Inter", Arial, sans-serif;

  font-size: 9px;
  font-weight: 700;

  letter-spacing: 1px;
  line-height: 1.4;

  text-transform: uppercase;
}

/* =========================================================
   SEPARADORES
========================================================= */

.law-trust__separator {
  position: absolute;

  top: 20%;
  right: 0;

  width: 1px;
  height: 60%;

  background: var(--law-border);
}

.law-trust__separator::before {
  content: "";

  position: absolute;

  top: 50%;
  left: 50%;

  width: 5px;
  height: 5px;

  background: var(--law-paper);

  border: 1px solid var(--law-gold);

  transform:
    translate(-50%, -50%)
    rotate(45deg);
}

/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 950px) {
  .law-trust__frame {
    grid-template-columns: repeat(2, 1fr);
  }

  .law-trust__item:nth-child(2) .law-trust__separator {
    display: none;
  }

  .law-trust__item:nth-child(-n + 2) {
    border-bottom: 1px solid var(--law-border);
  }
}

@media (max-width: 550px) {
  .law-trust {
    padding-top: 12px;
  }

  .law-trust__frame {
    grid-template-columns: 1fr;

    padding: 15px 25px;
  }

  .law-trust__item {
    justify-content: flex-start;

    min-height: 90px;

    padding: 18px 10px;

    border-bottom: 1px solid var(--law-border);
  }

  .law-trust__item:last-child {
    border-bottom: 0;
  }

  .law-trust__separator {
    display: none;
  }

  .law-trust__content strong {
    font-size: 28px;
  }
}
</style>