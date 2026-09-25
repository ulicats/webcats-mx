<template>
  <section class="beneficios">

    <div class="beneficio">
      <div class="icon">
        <svg
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="1.5"
        >
          <path d="M3 6h13v11H3z" />
          <path d="M16 10h3l2 3v4h-5z" />
          <circle cx="7" cy="19" r="2" />
          <circle cx="18" cy="19" r="2" />
        </svg>
      </div>

      <div>
        <strong>Envíos</strong>
        <span>A todo México</span>
      </div>
    </div>

    <div class="beneficio">
      <div class="icon">
        <svg
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="1.5"
        >
          <path d="M4 7l8-4 8 4-8 4z" />
          <path d="M4 7v10l8 4 8-4V7" />
          <path d="M12 11v10" />
        </svg>
      </div>

      <div>
        <strong>Mayoreo</strong>
        <span>Precios por volumen</span>
      </div>
    </div>

    <div class="beneficio">
      <div class="icon">
        <svg
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="1.5"
        >
          <path d="M21 11.5a8.4 8.4 0 0 1-9 8.4 9 9 0 0 1-3.8-.9L3 21l1.6-4.7A8.5 8.5 0 1 1 21 11.5Z" />
        </svg>
      </div>

      <div>
        <strong>WhatsApp</strong>
        <span>Atención directa</span>
      </div>
    </div>

    <div class="beneficio">
      <div class="icon">
        <svg
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="1.5"
        >
          <path d="M12 3l7 3v5c0 4.5-2.8 8.3-7 10-4.2-1.7-7-5.5-7-10V6z" />
          <path d="m9 12 2 2 4-4" />
        </svg>
      </div>

      <div>
        <strong>Compra fácil</strong>
        <span>Arma tu pedido en línea</span>
      </div>
    </div>

  </section>
</template>

<style scoped>
.beneficios {
  width: 100%;

  display: grid;
  grid-template-columns: repeat(4, 1fr);

  padding:
    45px
    max(40px, calc((100vw - 1500px) / 2));

  background: #e5ece4;

  border-top: 1px solid rgba(36, 33, 31, .08);
  border-bottom: 1px solid rgba(36, 33, 31, .08);
}

.beneficio {
  min-height: 75px;

  display: flex;
  align-items: center;
  justify-content: center;
  gap: 17px;

  padding: 0 30px;

  border-right: 1px solid rgba(36, 33, 31, .15);
}

.beneficio:last-child {
  border-right: 0;
}

.icon {
  width: 38px;
  height: 38px;

  display: grid;
  place-items: center;

  flex-shrink: 0;
}

.icon svg {
  width: 28px;
  height: 28px;

  color: #657865;
}

.beneficio > div:last-child {
  display: flex;
  flex-direction: column;
  gap: 4px;
}

.beneficio strong {
  color: #24211f;

  font-size: 12px;
  font-weight: 600;
}

.beneficio span {
  color: #6f786e;

  font-size: 10px;
}

/* RESPONSIVE */

@media (max-width: 900px) {
  .beneficios {
    grid-template-columns: repeat(2, 1fr);
  }

  .beneficio {
    padding: 25px;
  }

  .beneficio:nth-child(2) {
    border-right: 0;
  }

  .beneficio:nth-child(-n + 2) {
    border-bottom: 1px solid rgba(36, 33, 31, .15);
  }
}

@media (max-width: 520px) {
  .beneficios {
    grid-template-columns: 1fr;
    padding: 20px;
  }

  .beneficio {
    justify-content: flex-start;

    border-right: 0;
    border-bottom: 1px solid rgba(36, 33, 31, .15);
  }

  .beneficio:nth-child(3) {
    border-bottom: 1px solid rgba(36, 33, 31, .15);
  }

  .beneficio:last-child {
    border-bottom: 0;
  }
}
</style>