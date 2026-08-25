<template>
  <section id="horarios" class="gym-schedule">
    <div class="gym-schedule__container">

      <!-- Header -->
      <div class="gym-schedule__header">
        <div>
          <div class="gym-schedule__eyebrow">
            <span></span>
            HORARIOS
          </div>

          <h2 class="gym-schedule__title">
            ENTRENA CUANDO<br />
            <span>TE CONVENGA.</span>
          </h2>
        </div>

        <div class="gym-schedule__intro">
          <p>
            Clases distribuidas durante todo el día para que puedas
            entrenar antes del trabajo, por la tarde o cerrar el día
            con intensidad.
          </p>
        </div>
      </div>

      <!-- Days -->
      <div class="gym-schedule__days">
        <button
          v-for="day in days"
          :key="day.id"
          type="button"
          class="gym-schedule__day"
          :class="{ 'gym-schedule__day--active': activeDay === day.id }"
          @click="activeDay = day.id"
        >
          <span>{{ day.short }}</span>
          <strong>{{ day.label }}</strong>
        </button>
      </div>

      <!-- Schedule -->
      <div class="gym-schedule__table">

        <div class="gym-schedule__table-head">
          <span>HORA</span>
          <span>CLASE</span>
          <span>COACH</span>
          <span>DURACIÓN</span>
          <span>NIVEL</span>
          <span></span>
        </div>

        <div
          v-for="session in filteredSessions"
          :key="session.id"
          class="gym-schedule__row"
        >
          <div class="gym-schedule__time">
            {{ session.time }}
          </div>

          <div class="gym-schedule__class">
            <span>{{ session.category }}</span>
            <strong>{{ session.name }}</strong>
          </div>

          <div class="gym-schedule__coach">
            {{ session.coach }}
          </div>

          <div class="gym-schedule__duration">
            {{ session.duration }}
          </div>

          <div class="gym-schedule__level">
            <span :class="`level-${session.levelClass}`">
              {{ session.level }}
            </span>
          </div>

          <a href="#planes" class="gym-schedule__reserve">
            RESERVAR
            <span>→</span>
          </a>
        </div>

      </div>

      <!-- Bottom -->
      <div class="gym-schedule__bottom">
        <p>
          Las clases tienen cupo limitado.
          <strong>Reserva tu lugar con anticipación.</strong>
        </p>

        <div class="gym-schedule__hours">
          <span>HORARIO GENERAL</span>
          <strong>LUN – DOM · 05:00 – 23:00</strong>
        </div>
      </div>

    </div>
  </section>
</template>

<script setup>
import { computed, ref } from "vue";

const activeDay = ref("lunes");

const days = [
  {
    id: "lunes",
    short: "LUN",
    label: "LUNES",
  },
  {
    id: "martes",
    short: "MAR",
    label: "MARTES",
  },
  {
    id: "miercoles",
    short: "MIÉ",
    label: "MIÉRCOLES",
  },
  {
    id: "jueves",
    short: "JUE",
    label: "JUEVES",
  },
  {
    id: "viernes",
    short: "VIE",
    label: "VIERNES",
  },
  {
    id: "sabado",
    short: "SÁB",
    label: "SÁBADO",
  },
];

const sessions = [
  {
    id: 1,
    day: "lunes",
    time: "06:00",
    category: "STRENGTH",
    name: "POWER MORNING",
    coach: "MATEO RIVAS",
    duration: "60 MIN",
    level: "INTERMEDIO",
    levelClass: "medium",
  },
  {
    id: 2,
    day: "lunes",
    time: "07:30",
    category: "FUNCTIONAL",
    name: "ENGINE BUILDER",
    coach: "VALERIA CRUZ",
    duration: "45 MIN",
    level: "TODOS",
    levelClass: "all",
  },
  {
    id: 3,
    day: "lunes",
    time: "18:00",
    category: "PERFORMANCE",
    name: "ATHLETIC PERFORMANCE",
    coach: "DIEGO SANTOS",
    duration: "60 MIN",
    level: "AVANZADO",
    levelClass: "hard",
  },
  {
    id: 4,
    day: "lunes",
    time: "19:30",
    category: "CONDITIONING",
    name: "IRON CONDITIONING",
    coach: "VALERIA CRUZ",
    duration: "50 MIN",
    level: "TODOS",
    levelClass: "all",
  },

  {
    id: 5,
    day: "martes",
    time: "06:30",
    category: "FUNCTIONAL",
    name: "MOBILITY FLOW",
    coach: "VALERIA CRUZ",
    duration: "45 MIN",
    level: "TODOS",
    levelClass: "all",
  },
  {
    id: 6,
    day: "martes",
    time: "08:00",
    category: "STRENGTH",
    name: "LOWER BODY",
    coach: "MATEO RIVAS",
    duration: "60 MIN",
    level: "INTERMEDIO",
    levelClass: "medium",
  },
  {
    id: 7,
    day: "martes",
    time: "18:30",
    category: "PERFORMANCE",
    name: "SPEED & POWER",
    coach: "DIEGO SANTOS",
    duration: "60 MIN",
    level: "AVANZADO",
    levelClass: "hard",
  },

  {
    id: 8,
    day: "miercoles",
    time: "06:00",
    category: "STRENGTH",
    name: "UPPER BODY",
    coach: "MATEO RIVAS",
    duration: "60 MIN",
    level: "INTERMEDIO",
    levelClass: "medium",
  },
  {
    id: 9,
    day: "miercoles",
    time: "07:30",
    category: "CONDITIONING",
    name: "METCON",
    coach: "VALERIA CRUZ",
    duration: "45 MIN",
    level: "TODOS",
    levelClass: "all",
  },
  {
    id: 10,
    day: "miercoles",
    time: "19:00",
    category: "FUNCTIONAL",
    name: "FULL BODY",
    coach: "VALERIA CRUZ",
    duration: "50 MIN",
    level: "TODOS",
    levelClass: "all",
  },

  {
    id: 11,
    day: "jueves",
    time: "06:30",
    category: "PERFORMANCE",
    name: "ATHLETE MODE",
    coach: "DIEGO SANTOS",
    duration: "60 MIN",
    level: "AVANZADO",
    levelClass: "hard",
  },
  {
    id: 12,
    day: "jueves",
    time: "18:00",
    category: "STRENGTH",
    name: "POWER SESSION",
    coach: "MATEO RIVAS",
    duration: "60 MIN",
    level: "INTERMEDIO",
    levelClass: "medium",
  },
  {
    id: 13,
    day: "jueves",
    time: "19:30",
    category: "FUNCTIONAL",
    name: "MOVE BETTER",
    coach: "VALERIA CRUZ",
    duration: "45 MIN",
    level: "TODOS",
    levelClass: "all",
  },

  {
    id: 14,
    day: "viernes",
    time: "06:00",
    category: "STRENGTH",
    name: "FULL POWER",
    coach: "MATEO RIVAS",
    duration: "60 MIN",
    level: "INTERMEDIO",
    levelClass: "medium",
  },
  {
    id: 15,
    day: "viernes",
    time: "18:30",
    category: "CONDITIONING",
    name: "FRIDAY BURN",
    coach: "VALERIA CRUZ",
    duration: "50 MIN",
    level: "TODOS",
    levelClass: "all",
  },

  {
    id: 16,
    day: "sabado",
    time: "08:00",
    category: "FUNCTIONAL",
    name: "TEAM WOD",
    coach: "VALERIA CRUZ",
    duration: "60 MIN",
    level: "TODOS",
    levelClass: "all",
  },
  {
    id: 17,
    day: "sabado",
    time: "10:00",
    category: "PERFORMANCE",
    name: "WEEKEND PERFORMANCE",
    coach: "DIEGO SANTOS",
    duration: "60 MIN",
    level: "INTERMEDIO",
    levelClass: "medium",
  },
];

const filteredSessions = computed(() => {
  return sessions.filter((session) => session.day === activeDay.value);
});
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,700;1,800;1,900&family=Inter:wght@400;500;600&display=swap");

.gym-schedule {
  padding: 135px 0;
  background: #eeeeea;
  color: #090909;
  font-family: "Inter", sans-serif;
}

.gym-schedule__container {
  width: min(1400px, calc(100% - 48px));
  margin: 0 auto;
}

/* =========================
   HEADER
========================= */

.gym-schedule__header {
  display: grid;
  grid-template-columns: 1.3fr 0.7fr;
  gap: 80px;
  align-items: end;

  margin-bottom: 70px;
}

.gym-schedule__eyebrow {
  display: flex;
  align-items: center;
  gap: 14px;

  margin-bottom: 22px;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 13px;
  font-weight: 700;
  letter-spacing: 3px;

  color: #667a00;
}

.gym-schedule__eyebrow span {
  width: 42px;
  height: 2px;

  background: #9fbd00;
}

.gym-schedule__title {
  margin: 0;

  font-family: "Barlow Condensed", sans-serif;
  font-size: clamp(70px, 8vw, 120px);
  font-weight: 900;
  font-style: italic;

  line-height: 0.82;
  letter-spacing: -3px;

  text-transform: uppercase;
}

.gym-schedule__title > span {
  color: transparent;
  -webkit-text-stroke: 2px #090909;
}

.gym-schedule__intro {
  max-width: 430px;
}

.gym-schedule__intro p {
  margin: 0;

  font-size: 16px;
  line-height: 1.75;

  color: #5d5d5d;
}

/* =========================
   DAYS
========================= */

.gym-schedule__days {
  display: grid;
  grid-template-columns: repeat(6, 1fr);

  border-top: 1px solid rgba(9, 9, 9, 0.18);
  border-left: 1px solid rgba(9, 9, 9, 0.18);

  margin-bottom: 34px;
}

.gym-schedule__day {
  min-height: 82px;

  padding: 15px;

  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: center;

  border: 0;
  border-right: 1px solid rgba(9, 9, 9, 0.18);
  border-bottom: 1px solid rgba(9, 9, 9, 0.18);

  background: transparent;
  color: #090909;

  cursor: pointer;

  transition:
    background 0.25s ease,
    color 0.25s ease;
}

.gym-schedule__day span {
  font-family: "Barlow Condensed", sans-serif;
  font-size: 10px;
  font-weight: 700;
  letter-spacing: 1.5px;

  opacity: 0.45;
}

.gym-schedule__day strong {
  margin-top: 4px;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 21px;
  font-weight: 700;
  letter-spacing: 0.5px;
}

.gym-schedule__day:hover {
  background: rgba(9, 9, 9, 0.04);
}

.gym-schedule__day--active {
  background: #090909;
  color: #ffffff;
}

.gym-schedule__day--active span {
  color: #d9ff43;
  opacity: 1;
}

/* =========================
   TABLE
========================= */

.gym-schedule__table {
  border-top: 2px solid #090909;
}

.gym-schedule__table-head,
.gym-schedule__row {
  display: grid;

  grid-template-columns:
    110px
    1.5fr
    1fr
    120px
    140px
    120px;

  gap: 20px;

  align-items: center;
}

.gym-schedule__table-head {
  min-height: 52px;

  padding: 0 20px;

  border-bottom: 1px solid rgba(9, 9, 9, 0.18);

  font-family: "Barlow Condensed", sans-serif;
  font-size: 10px;
  font-weight: 700;
  letter-spacing: 1.7px;

  color: rgba(9, 9, 9, 0.42);
}

.gym-schedule__row {
  min-height: 112px;

  padding: 18px 20px;

  border-bottom: 1px solid rgba(9, 9, 9, 0.18);

  transition:
    background 0.25s ease,
    padding 0.25s ease;
}

.gym-schedule__row:hover {
  background: #ffffff;
  padding-left: 28px;
}

/* =========================
   TIME
========================= */

.gym-schedule__time {
  font-family: "Barlow Condensed", sans-serif;
  font-size: 30px;
  font-weight: 700;
}

/* =========================
   CLASS
========================= */

.gym-schedule__class {
  display: flex;
  flex-direction: column;
  gap: 5px;
}

.gym-schedule__class > span {
  font-family: "Barlow Condensed", sans-serif;
  font-size: 10px;
  font-weight: 700;
  letter-spacing: 1.7px;

  color: #718800;
}

.gym-schedule__class strong {
  font-family: "Barlow Condensed", sans-serif;
  font-size: 28px;
  font-weight: 800;

  line-height: 1;

  text-transform: uppercase;
}

/* =========================
   SECONDARY DATA
========================= */

.gym-schedule__coach,
.gym-schedule__duration {
  font-family: "Barlow Condensed", sans-serif;
  font-size: 13px;
  font-weight: 600;
  letter-spacing: 0.8px;

  color: #555555;
}

/* =========================
   LEVEL
========================= */

.gym-schedule__level span {
  display: inline-flex;

  padding: 7px 10px;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 10px;
  font-weight: 800;
  letter-spacing: 1px;
}

.level-all {
  background: rgba(9, 9, 9, 0.08);
  color: #090909;
}

.level-medium {
  background: #d9ff43;
  color: #090909;
}

.level-hard {
  background: #090909;
  color: #ffffff;
}

/* =========================
   RESERVE
========================= */

.gym-schedule__reserve {
  justify-self: end;

  display: flex;
  align-items: center;
  gap: 12px;

  color: #090909;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 13px;
  font-weight: 800;
  letter-spacing: 1.2px;

  text-decoration: none;
}

.gym-schedule__reserve span {
  font-size: 19px;

  transition: transform 0.25s ease;
}

.gym-schedule__reserve:hover span {
  transform: translateX(5px);
}

/* =========================
   BOTTOM
========================= */

.gym-schedule__bottom {
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: 40px;

  margin-top: 45px;
}

.gym-schedule__bottom p {
  margin: 0;

  font-size: 14px;
  color: #676767;
}

.gym-schedule__bottom strong {
  color: #090909;
}

.gym-schedule__hours {
  display: flex;
  flex-direction: column;
  align-items: flex-end;
  gap: 4px;

  font-family: "Barlow Condensed", sans-serif;
}

.gym-schedule__hours span {
  font-size: 10px;
  font-weight: 700;
  letter-spacing: 1.6px;

  color: #757575;
}

.gym-schedule__hours strong {
  font-size: 17px;
  letter-spacing: 0.8px;
}

/* =========================
   RESPONSIVE
========================= */

@media (max-width: 1100px) {
  .gym-schedule__header {
    grid-template-columns: 1fr;
    gap: 35px;
  }

  .gym-schedule__table {
    overflow-x: auto;
  }

  .gym-schedule__table-head,
  .gym-schedule__row {
    min-width: 960px;
  }
}

@media (max-width: 760px) {
  .gym-schedule {
    padding: 90px 0;
  }

  .gym-schedule__container {
    width: calc(100% - 32px);
  }

  .gym-schedule__title {
    font-size: clamp(62px, 20vw, 90px);
    letter-spacing: -2px;
  }

  .gym-schedule__days {
    grid-template-columns: repeat(3, 1fr);
  }

  .gym-schedule__bottom {
    flex-direction: column;
    align-items: flex-start;
  }

  .gym-schedule__hours {
    align-items: flex-start;
  }
}

@media (max-width: 450px) {
  .gym-schedule__days {
    grid-template-columns: repeat(2, 1fr);
  }

  .gym-schedule__day {
    min-height: 72px;
  }
}
</style>