<template>
  <div class="financiera-page">
    <FinHeader />
    <FinHero />
    <FinAbout />
    <FinServices />
    <FinStrategy />
    <FinMetrics />
    <FinProcess />
    <!--FinAdvisors /-->
    <FinTestimonials />
    <FinFAQ />
    <FinCTA />
    <FinContact />
    <FinFooter />
    <FinWhatsApp />
  </div>
</template>

<script setup>
import FinHeader from '../../../components/projects/financiera/FinHeader.vue'
import FinHero from '../../../components/projects/financiera/FinHero.vue'
import FinAbout from '../../../components/projects/financiera/FinAbout.vue'
import FinServices from '../../../components/projects/financiera/FinServices.vue'
import FinStrategy from '../../../components/projects/financiera/FinStrategy.vue'
import FinMetrics from '../../../components/projects/financiera/FinMetrics.vue'
import FinProcess from '../../../components/projects/financiera/FinProcess.vue'
import FinAdvisors from '../../../components/projects/financiera/FinAdvisors.vue'
import FinTestimonials from '../../../components/projects/financiera/FinTestimonials.vue'
import FinFAQ from '../../../components/projects/financiera/FinFAQ.vue'
import FinCTA from '../../../components/projects/financiera/FinCTA.vue'
import FinContact from '../../../components/projects/financiera/FinContact.vue'
import FinFooter from '../../../components/projects/financiera/FinFooter.vue'
import FinWhatsApp from '../../../components/projects/financiera/FinWhatsApp.vue'
</script>

<style>
.financiera-page {
  --fin-bg: #f5f3ee;
  --fin-surface: #ffffff;
  --fin-primary: #0d1b2a;
  --fin-secondary: #16283a;
  --fin-accent: #b79b64;
  --fin-accent-light: #d8c59e;

  --fin-text: #16202a;
  --fin-text-soft: #6c737c;
  --fin-border: #dedbd3;
  --fin-white: #ffffff;

  min-height: 100vh;
  background: var(--fin-bg);
  color: var(--fin-text);
  overflow-x: hidden;
}

.financiera-page *,
.financiera-page *::before,
.financiera-page *::after {
  box-sizing: border-box;
}

.financiera-page h1,
.financiera-page h2,
.financiera-page h3,
.financiera-page h4,
.financiera-page p {
  margin-top: 0;
}

.financiera-page img {
  display: block;
  max-width: 100%;
}

.financiera-page a {
  color: inherit;
  text-decoration: none;
}

.financiera-page button,
.financiera-page input,
.financiera-page textarea,
.financiera-page select {
  font: inherit;
}
</style>